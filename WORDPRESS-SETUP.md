# WORDPRESS-SETUP.md — Infraestructura WordPress local (03A)

> Decisión D99 (Owner, 2026-09-07) cierra formalmente **03A — Arquitectura WordPress**,
> ratificando el marco técnico candidato de la Ficha C1 (PROJECT.md): **block theme
> propio, Gutenberg nativo, `theme.json` como fuente de tokens, patterns/template
> parts, core blocks primero, plugins mínimos.** Nada de Elementor ni constructores
> de página — decisión cerrada desde C1, no se reabre aquí.
>
> Este documento es la guía operativa para levantar ese stack en **Local** (WP Engine)
> en esta máquina. El tema ya tiene una base real en
> [`wp-content/themes/aaa-estudio-legal/`](wp-content/themes/aaa-estudio-legal/) — no
> es un placeholder, es el punto de partida real para seguir construyendo.

---

## 0. Antes de empezar

- El prototipo estático (`/prototype/`) sigue siendo la fuente de verdad del diseño
  aprobado — cada pattern/template part que se construya en WordPress debe verse
  igual que su equivalente en `/prototype/`, no reinventarse.
- Checkpoint de seguridad ya guardado: tag `checkpoint-prototype-estable-2026-09-07`
  sobre el commit `6456a00` (D98), en `origin`. Si algo sale mal en esta fase, ese
  punto de retorno existe.
- Nada de esto toca `/prototype/` ni la rama `product-lead-ajustes-visuales`
  (la que despliega a Cloudflare Workers Builds) — son pistas de trabajo separadas.

---

## 1. Instalar Local

1. Descargar Local desde <https://localwp.com/> (versión Windows).
2. Instalar con las opciones por defecto.
3. Abrir Local y crear una cuenta o continuar sin cuenta (ambas opciones funcionan
   igual para desarrollo local).

## 2. Crear el sitio local

1. En Local, **"Create a new site"**.
2. Nombre del sitio: `AAA Estudio Legal` (Local generará el dominio local
   `aaa-estudio-legal.local`).
3. Entorno: **"Preferred"** (PHP 8.2+, MySQL 8, nginx) — no hace falta "Custom" a
   menos que Hostinger confirme una versión de PHP distinta más adelante (eso se
   ajusta en Staging/Producción, no aquí).
4. Usuario admin de WordPress: definir usuario/contraseña propios de esta instalación
   local — **nunca reutilizar credenciales reales de otro sistema** (AGENTS.md §
   Seguridad). No hace falta anotarlas en ningún archivo del repo.
5. Local termina de aprovisionar el sitio y lo abre en el navegador
   (`https://aaa-estudio-legal.local`) con un candado de SSL local ya confiado.

## 3. Configuración base de WordPress

Dentro de `/wp-admin/`:

1. **Ajustes → Generales:** zona horaria `America/Bogota`, idioma del sitio
   `Español`.
2. **Ajustes → Enlaces permanentes:** estructura **"Nombre de la entrada"**
   (`/nombre-de-pagina/`) — URLs limpias, requisito del marco técnico (Ficha C1).
3. **Apariencia → Temas:** por ahora queda el tema por defecto de WordPress — se
   reemplaza en el paso 4.

## 4. Conectar el tema del repositorio (symlink)

Local crea el sitio completo (núcleo + `wp-content`) dentro de su propia carpeta,
normalmente `C:\Users\<usuario>\Local Sites\aaa-estudio-legal\app\public\`. Para que
los cambios al tema queden versionados en este repositorio (y no atrapados dentro de
Local), se enlaza la carpeta del tema con un **symlink**, en vez de copiar archivos
de un lado a otro a mano.

1. Cerrar Local (o al menos detener el sitio) antes de tocar la carpeta, para evitar
   locks de archivo.
2. Abrir **PowerShell como administrador** (los symlinks en Windows lo requieren,
   salvo que el "Modo desarrollador" ya esté activado en Configuración de Windows).
3. Borrar la carpeta de tema vacía que Local no usa (el tema por defecto se queda,
   el symlink se agrega aparte):

   ```powershell
   $localThemes = "$env:USERPROFILE\Local Sites\aaa-estudio-legal\app\public\wp-content\themes"
   $repoTheme = "C:\Users\ozkrm\Desktop\AAA Estudio Legal\wp-content\themes\aaa-estudio-legal"
   New-Item -ItemType SymbolicLink -Path "$localThemes\aaa-estudio-legal" -Target $repoTheme
   ```

4. Verificar: `Get-ChildItem $localThemes` debe listar `aaa-estudio-legal` con el
   atributo `l` (link) en vez de `d` (directorio normal).
5. Reabrir el sitio en Local, ir a **Apariencia → Temas** y activar **"AAA Estudio
   Legal"**.

**Si no se quiere usar symlinks:** alternativa manual — copiar el contenido de
`wp-content/themes/aaa-estudio-legal/` del repo hacia la carpeta de Local cada vez
que se edite, y copiar de vuelta antes de hacer commit. Funciona, pero es fácil
olvidar un archivo — el symlink es la opción recomendada.

## 5. Plugins (Decisión D99 — lista cerrada para esta fase)

Instalar desde **Plugins → Añadir nuevo**, buscando por nombre:

| Plugin | Para qué | Configuración mínima |
|---|---|---|
| **Polylang** | Traducción ES (nativo) / EN (automático) — ya especificado en AGENTS.md § Stack, no es nuevo | Idiomas → agregar Español (predeterminado) e Inglés. Sin traducir contenido todavía — eso es trabajo de una fase posterior, cuando el copy en inglés esté aprobado. |
| **Contact Form 7** | Los 2 formularios del sitio: Postulación (con CV, `talent-form` del prototipo) y Captación B2B ("Consulte su caso aquí") — cumple D12 (notificación por correo, sin CRM) | Crear 2 formularios nuevos (ver § 7 abajo). Revisar en **Contact → Mail** que el correo de destino sea el que confirme el cliente (por ahora, `info@agudeloabogados.com`, mismo que en el prototipo). |
| **Rank Math SEO** | Metadatos editables por página, URLs limpias, sitemap — requisito del marco técnico | Modo de configuración: **"Easy"**. Activar solo el módulo de SEO general y Sitemap — dejar apagados los módulos que no aplican (WooCommerce, etc.). |

**Explícitamente NO se instalan en esta fase** (Decisión D99): ningún plugin de
constructor de página (Elementor, Divi, etc. — descartado desde C1), ACF, ni
plugins de caché/seguridad (se deciden cuando exista hosting real de
staging/producción, no en desarrollo local). Si en el camino aparece una necesidad
real de alguno de estos, se registra como una nueva decisión antes de instalarlo
(AGENTS.md § Prohibiciones/Condiciones de parada) — no se instala por conveniencia.

## 6. Fuentes (Krub + Libre Caslon Display/Text)

`theme.json` ya declara las 3 familias vía `fontFace` con rutas `file:./assets/fonts/…`
— esto **auto-hospeda** las fuentes (WordPress genera el `@font-face`), eliminando la
dependencia externa a `fonts.googleapis.com` que tenía el prototipo (riesgo ya
señalado en `prototype/README.md` § 7). Faltan los archivos `.woff2` reales en
`wp-content/themes/aaa-estudio-legal/assets/fonts/`:

1. Descargar de Google Fonts (ambas son de uso libre, sin costo de licencia — ver
   Decisión D22): **Krub** (pesos 400/500/600/700) y **Libre Caslon Display**
   (400) + **Libre Caslon Text** (400 itálica).
2. Convertir a `.woff2` si Google Fonts entrega `.ttf` (herramienta como
   `google-webfonts-helper` o el propio paquete de Google Fonts ya suele traer
   `.woff2`).
3. Guardar con estos nombres exactos en `assets/fonts/` (coinciden con lo que ya
   referencia `theme.json`):
   - `krub-400.woff2`, `krub-500.woff2`, `krub-600.woff2`, `krub-700.woff2`
   - `libre-caslon-display-400.woff2`
   - `libre-caslon-text-400-italic.woff2`

Sin estos archivos, WordPress cae a los `Georgia`/`system-ui` de respaldo que ya
están declarados en cada `fontFamily` de `theme.json` — el sitio no se rompe, solo
no se ve con la tipografía de marca hasta que se agreguen.

## 7. Crear las páginas y los formularios

**Páginas** (Páginas → Añadir nueva, una por cada fila del sitemap — ver PROJECT.md
→ Ficha C1 § Sitemap propuesto): Inicio, Metodología, Quiénes somos, Trabaja con
nosotros, Noticias y Análisis, Captación B2B, Página Legal. Para cada una:

1. Insertar el pattern **"Hero simple"** (categoría "AAA Estudio Legal" en el
   inserter de bloques) para Metodología/Quiénes somos/Trabaja con nosotros — editar
   el eyebrow/título/párrafo de ejemplo con el copy real aprobado (ver `/content/`).
2. Agregar el resto del contenido de la página componiendo con bloques nativos
   (Group, Columns, Heading, Paragraph, Buttons, Image) hasta que exista un pattern
   dedicado — ver § 8, checklist de patterns pendientes.
3. **Ajustes → Lectura:** una vez creada "Inicio", asignarla como página de inicio
   estática (`Página de inicio estática` → seleccionar "Inicio").

**Formularios (Contact Form 7):**

- **Postulación** — campos: Nombre completo (texto, requerido), Correo electrónico
  (email, requerido), Hoja de vida/CV (file, requerido, aceptar `.pdf,.doc,.docx`),
  campo adicional (textarea — sigue pendiente de definir con el cliente qué pedir
  ahí, ver PROJECT.md § Preguntas de decisión). Botón: "Postúlese". Insertar este
  formulario (shortcode `[contact-form-7 ...]`) en la página "Trabaja con nosotros",
  sección Postulación.
- **Captación B2B** — mismo criterio de notificación por correo sin CRM (D12);
  campos exactos pendientes de que se resuelva la pregunta abierta de PROJECT.md
  (§ Conversión: si el CTA de ADY y este formulario son el mismo flujo o dos
  entradas distintas — no se resuelve aquí, sigue como pendiente).

## 8. Patterns pendientes (checklist de seguimiento)

Ya construidos en esta sesión: `parts/header.html`, `parts/footer.html`,
`patterns/hero-simple.php`, `patterns/cierre-conversemos.php`.

Pendientes — cada uno tiene su fila ya documentada en `prototype/README.md` § 3
("Inventario de componentes") con su candidato de bloques de WordPress; portarlos
uno por uno, verificando contra el prototipo en cada caso, no todos de una vez:

- [ ] Hero inmersivo (Home) — `.hero-shell` con foto de fondo + scrim + parallax sutil
- [ ] Banda de credibilidad — 4 tarjetas cualitativas
- [ ] Mosaico asimétrico de los 3 focos/macroservicios
- [ ] "¿Qué hace AAA?" / bloques `what-we-do-grid` (reusado en varias páginas, D73/D75/D88/D89)
- [ ] Grilla de sectores de experiencia (con logos de cliente y carrusel móvil)
- [ ] "¿Por qué AAA?" (6 atributos)
- [ ] "En cifras" (contador animado)
- [ ] Bloques de servicio editorial ("Nuestros servicios", D82 — grilla de 3 blog cards)
- [ ] Stepper/flujograma de "Nuestra metodología" (D86 — con efecto de entrada y hover)
- [ ] Filosofía (D88 — foto + texto + CTA invertido)
- [ ] Tarjetas flip de equipo ("Personas, no procesos", D92–D96 — con su lógica de
      `visibility`/`backface-visibility` y el toggle por click/tecla de `main.js`)
- [ ] Blog (listado + single de Noticias y Análisis)
- [ ] Formulario de Postulación con su nota de envío (`talent-form__note`)
- [ ] Aviso de cookies como pattern reutilizable en las 8 páginas (el CSS/JS ya
      están portados en `assets/css/components.css`/`assets/js/main.js` — falta
      insertar el markup del pattern y activarlo)

## 9. Flujo de trabajo con git

- **Se versiona:** solo `wp-content/themes/aaa-estudio-legal/` (el tema propio).
  `.gitignore` ya excluye el núcleo de WordPress, `wp-content/plugins/`,
  `wp-content/uploads/` y cualquier credencial/base de datos.
- **No se versiona:** núcleo de WordPress, plugins (se instalan siguiendo la lista
  de § 5), `wp-config.php`, uploads del cliente, backups.
- Mismo criterio de commits que el resto del proyecto: solo cuando el Owner lo pida
  explícitamente, nunca `--force` ni reescritura de historia (AGENTS.md).

## 10. Próximos hitos (no se ejecutan todavía)

- Migrar el copy real aprobado de `/content/` a cada página de WordPress.
- Completar el checklist de § 8.
- Cuando exista hosting real confirmado (Hostinger, recomendado en AGENTS.md):
  decidir plugin de caché (candidato: LiteSpeed Cache, si el plan de Hostinger corre
  sobre LiteSpeed) y de seguridad — **no antes**, sería instalar dependencias sin
  necesidad concreta todavía.
- Gate 2 (staging) requiere aprobación explícita del cliente antes de avanzar — no
  se salta ese paso por tener ya el tema construido (AGENTS.md § Verificación).
