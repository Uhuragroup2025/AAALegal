# WORDPRESS-SETUP.md — Infraestructura WordPress local (03A)

> Decisión D110 (Owner, 2026-09-07) cierra formalmente **03A — Arquitectura WordPress**,
> ratificando el marco técnico candidato de la Ficha C1 (PROJECT.md): **block theme
> propio, Gutenberg nativo, `theme.json` como fuente de tokens, patterns/template
> parts, core blocks primero, plugins mínimos.** Nada de Elementor ni constructores
> de página — decisión cerrada desde C1, no se reabre aquí. D112 autoriza GSAP +
> ScrollTrigger como única excepción a "sin dependencias nuevas" (motion editorial,
> ver § 5bis).
>
> Este documento es la guía operativa para levantar ese stack en **Local** (WP Engine)
> en esta máquina. El tema ya tiene una implementación real y completa de las 5
> páginas principales en [`wp-content/themes/aaa-estudio-legal/`](wp-content/themes/aaa-estudio-legal/)
> — theme.json, CSS de componentes, motion GSAP, y un pattern por página con el copy
> real ya puesto — no es un placeholder. Lo que falta es ensamblarlo dentro de un
> WordPress real siguiendo los pasos de abajo; no se ha podido verificar en vivo
> desde este entorno de trabajo (no hay PHP/MySQL/Local aquí) — la verificación la
> hace el Owner siguiendo esta guía, paso por paso, comparando contra
> https://aaalegal.design-505.workers.dev/

---

## 0. Antes de empezar

- El prototipo estático (`/prototype/`) sigue siendo la fuente de verdad del diseño
  aprobado — cada pattern/template part que se construya en WordPress debe verse
  igual que su equivalente en `/prototype/`, no reinventarse.
- Checkpoint de seguridad vigente: tag `checkpoint-mvp-unificado-2026-09-07`
  sobre el commit `1335235` (D111, unificación de ramas), en `origin`. Si algo sale
  mal en esta fase, ese punto de retorno existe.
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

## 5. Plugins (Decisión D110 — lista cerrada para esta fase)

Instalar desde **Plugins → Añadir nuevo**, buscando por nombre:

| Plugin | Para qué | Configuración mínima |
|---|---|---|
| **Polylang** | Traducción ES (nativo) / EN (automático) — ya especificado en AGENTS.md § Stack, no es nuevo | Idiomas → agregar Español (predeterminado) e Inglés. Sin traducir contenido todavía — eso es trabajo de una fase posterior, cuando el copy en inglés esté aprobado. |
| **Contact Form 7** | Los 2 formularios del sitio: Postulación (con CV) y Contacto B2B (D109) — cumple D12 (notificación por correo, sin CRM) | Crear los 2 formularios exactos de § 7bis abajo. Revisar en **Contact → Mail** que el correo de destino sea el que confirme el cliente (por ahora, `info@agudeloabogados.com`, mismo que en el prototipo). |
| **Rank Math SEO** | Metadatos editables por página, URLs limpias, sitemap — requisito del marco técnico | Modo de configuración: **"Easy"**. Activar solo el módulo de SEO general y Sitemap — dejar apagados los módulos que no aplican (WooCommerce, etc.). |

**Explícitamente NO se instalan en esta fase** (Decisión D110): ningún plugin de
constructor de página (Elementor, Divi, etc. — descartado desde C1), ACF, ni
plugins de caché/seguridad (se deciden cuando exista hosting real de
staging/producción, no en desarrollo local). Si en el camino aparece una necesidad
real de alguno de estos, se registra como una nueva decisión antes de instalarlo
(AGENTS.md § Prohibiciones/Condiciones de parada) — no se instala por conveniencia.

## 5bis. Motion editorial — GSAP + ScrollTrigger (Decisión D112)

El tema ya trae `assets/js/gsap/gsap-3.15.0.min.js`, `ScrollTrigger-3.15.0.min.js`
y `assets/js/home-motion.js` (copiados tal cual de `prototype/js/`), y
`functions.php` ya los encola condicionalmente — en la portada (`is_front_page()`)
y en cualquier página que use la plantilla **"Página con motion editorial (GSAP)"**
(`templates/page-motion.html`). No hay nada que instalar aquí; solo hay que
**asignar esa plantilla a las 4 páginas internas que la necesitan** al crearlas
(ver § 7) — Inicio no la necesita porque `is_front_page()` ya la activa sola.

## 6. Fuentes (Krub + Libre Caslon Display/Text)

`theme.json` declara las 3 familias solo con `fontFamily` (sin `fontFace`) —
no hay archivos `.woff2` reales en el repositorio todavía (carpeta
`assets/fonts/` vacía). `functions.php` encola las mismas fuentes vía Google
Fonts (`fonts.googleapis.com`), exactamente igual que hace hoy cada página del
prototipo — el sitio se ve con la tipografía de marca desde el primer momento,
sin pasos adicionales aquí.

**Mejora futura, no bloqueante para Gate 1** (ya registrada en
`prototype/README.md` § 7 como riesgo de privacidad/rendimiento, no de diseño):
auto-hospedar las 3 familias cuando se prioricen — descargar de Google Fonts
Krub (400/500/600/700) y Libre Caslon Display (400) + Libre Caslon Text (400
itálica), guardarlas en `assets/fonts/` con los nombres `krub-400.woff2` etc., y
volver a declarar `fontFace` en `theme.json` apuntando a `file:./assets/fonts/…`
— eso elimina la petición a `fonts.googleapis.com` y el envío de IP a Google.

## 7. Crear las páginas

Los 5 patterns de página completa (con el copy real ya puesto — no hay que
escribir nada de cero) están en `patterns/` y aparecen en el inserter de bloques
bajo la categoría **"AAA Estudio Legal"**: `home-full`, `metodologia-full`,
`quienes-somos-full`, `trabaja-con-nosotros-full`, `contacto-full`.

Para cada página (Páginas → Añadir nueva):

| Página | Slug/URL sugerido | Pattern a insertar | Plantilla (panel derecho → Plantilla) |
|---|---|---|---|
| Inicio | `/` (portada) | `home-full` | `Página` (la portada activa el motion sola vía `is_front_page()`) |
| Metodología | `/metodologia/` | `metodologia-full` | **Página con motion editorial (GSAP)** |
| Quiénes somos | `/quienes-somos/` | `quienes-somos-full` | **Página con motion editorial (GSAP)** |
| Trabaja con nosotros | `/trabaja-con-nosotros/` | `trabaja-con-nosotros-full` | **Página con motion editorial (GSAP)** |
| Contacto | `/contacto/` | `contacto-full` | **Página con motion editorial (GSAP)** |

Pasos por página:

1. Crear la página con el título exacto de la columna 1.
2. Insertar el pattern de la columna 3 (buscarlo por nombre en el inserter `+`).
3. En el panel **Plantilla** (barra lateral derecha, sección "Resumen" o
   "Página"), asignar la plantilla de la columna 4.
4. Publicar.
5. Cuando existan las 5, ir a **Ajustes → Lectura** → "La página de inicio
   muestra" → **Una página estática** → Página de inicio: **Inicio**.

Después de esto, revisar el enlace "Mi caso" del header y los botones de cierre —
todos apuntan a `/contacto/`; si el slug real termina siendo distinto, ajustarlo
en `parts/header.html` y en cada pattern (búsqueda simple de `/contacto/`).

**Blog:** las plantillas `templates/home.html` (listado, Query Loop nativo) y
`templates/single.html` (artículo) ya existen y no requieren pattern — son
plantillas de archivo, no de página. Crear una página "Blog" vacía y asignarla
como **Página de entradas** en Ajustes → Lectura (debajo de "Página de inicio
estática") para que WordPress la sirva con `home.html`. Los 2 artículos de
ejemplo del prototipo (`noticia-insolvencia-acreedores.html`,
`noticia-normalizacion-activos.html`) NO se replican aquí automáticamente — el
propio prototipo los marca como "contenido de ejemplo, no se publica hasta
resolver la autoría editorial" (ver STATUS.md, AGENTS.md § Prohibiciones); crearlos
como Entradas reales solo si el Owner confirma que quiere probarlas primero,
marcándolas igual de explícitas ("Contenido de ejemplo — prototipo").

**Página Legal (Aviso legal / Política de privacidad):** sigue sin contenido
real aprobado (mismo estado que `prototype/proximamente.html`) — no se crea
todavía; el footer y el aviso de cookies ya enlazan a `/aviso-legal/`, listo para
cuando exista.

## 7bis. Formularios (Contact Form 7)

Crear estos 2 formularios en **Contact → Formularios de contacto → Añadir nuevo**,
con estos campos exactos (mismos que el prototipo, D109 para Contacto B2B):

**"Postulación"** (se inserta en la página Trabaja con nosotros, reemplazando el
bloque HTML de referencia que ya trae el pattern):
- Nombre completo — `[text* nombre]`
- Correo electrónico — `[email* email]`
- Hoja de vida — `[file* cv limit:5mb filetypes:pdf|doc|docx]`
- Botón — `[submit "Enviar postulación"]`

**"Contacto B2B"** (se inserta en la página Contacto):
- Nombre completo — `[text* nombre autocomplete:name]`
- Empresa u organización — `[text* organizacion autocomplete:organization]`
- Cargo — `[text* cargo]`
- Correo corporativo — `[email* correo autocomplete:email]`
- Teléfono de contacto — `[tel* telefono autocomplete:tel]`
- Tipo de organización — `[select* tipo-organizacion "Entidad financiera" "Fintech" "Empresa" "Sector salud o caja de compensación" "Entidad pública" "Otra organización"]`
- Asunto de interés — `[select* asunto "Defensa de acreedores en procesos de insolvencia" "Normalización de activos" "Derecho corporativo" "Otra consulta"]`
- Contexto general del asunto — `[textarea* contexto]`
- Botón — `[submit "Solicitar contacto"]`

Después de crear cada formulario, copiar su shortcode (`[contact-form-7 id="..."
title="..."]`) y reemplazar el bloque HTML de referencia dentro del pattern ya
insertado en la página correspondiente (el pattern deja un comentario indicando
exactamente dónde). Aplicar la clase `talent-form`/`contact-form` al contenedor
del formulario de CF7 (**Contact → Integration** o editando el HTML del bloque)
para que herede el estilo ya construido en `assets/css/components.css`.

## 7ter. Menús

`parts/header.html` y `parts/footer.html` ya traen el bloque **Navigation**
nativo (`wp:navigation`), pero un menú de WordPress vacío no muestra nada hasta
que se crea y se asigna. En **Apariencia → Menús**:

1. Crear el menú **"Menú principal"** con 4 enlaces, en este orden: Inicio,
   Metodología, Quiénes somos, Trabaja con nosotros. Asignarlo a la ubicación
   que use el bloque Navigation del header (o, más simple, abrir el bloque
   Navigation en el editor de `header.html` vía Apariencia → Editor y elegir
   ese menú directamente ahí).
2. Crear el menú **"Menú de sitio" (footer)** con 6 enlaces: Inicio,
   Metodología, Quiénes somos, Trabaja con nosotros, Blog, Contacto — mismo
   criterio, asignarlo al bloque Navigation vertical del footer.

## 8. Patterns construidos en esta sesión

Ya construidos, con el copy real de cada página ya puesto (no hace falta escribir
nada de cero, solo insertar y ajustar si el cliente pide cambios):

- [x] `parts/header.html`, `parts/footer.html` (incluye el aviso de cookies D107)
- [x] `patterns/home-full.php` — Home completa (9 secciones + cinta de logos)
- [x] `patterns/metodologia-full.php` — hero editorial + servicios + flujograma + transparencia + cierre
- [x] `patterns/quienes-somos-full.php` — hero editorial + origen + cifras + filosofía + cierre
- [x] `patterns/trabaja-con-nosotros-full.php` — hero editorial + equipo + tarjetas flip + postulación
- [x] `patterns/contacto-full.php` — contexto + formulario B2B de 8 campos
- [x] `templates/home.html`/`templates/single.html` — Blog (listado + artículo, posts nativos)
- [x] `patterns/hero-simple.php`, `patterns/cierre-conversemos.php` — patterns de referencia genéricos, previos a D99–D109, siguen disponibles pero ninguna de las 5 páginas los usa ya

**Simplificaciones deliberadas, registradas — no son un error, son alcance recortado
para esta pasada** (ver STATUS.md para el detalle completo):
- [ ] Carrusel móvil de arrastre (`mobile-card-carousel`) en Situaciones/Por qué AAA/
      Sectores/Casos de éxito — se renderiza como grilla responsive normal, sin el
      gesto de arrastre horizontal en mobile. Mejora visual, no bloquea nada.
- [ ] Cinta de logos de Home (`home-logo-ribbon`) — se renderiza como grilla estática
      centrada, sin el marquee de desplazamiento automático.
- [ ] Íconos SVG decorativos de "Situaciones" y "¿Por qué AAA?" — se omitieron para
      no inflar los patterns; agregar como Custom HTML o SVG block si se quiere el
      ícono exacto (ver el `<svg>` de cada tarjeta en `prototype/index.html`).
- [ ] Contador animado de "En cifras" — el número ya se muestra estático (+100, +50,
      +$100 M); la animación de conteo ascendente vive en `home-motion.js`
      (función que lee `data-count-to`) pero los patterns no incluyen ese atributo
      todavía — agregarlo a los `<p class="stat-card__number">` si se quiere recuperar
      la animación exacta.
- [ ] Fotografías reales — todas las imágenes de los 5 patterns quedan como bloques
      Image vacíos con alt text explicando que están pendientes de material del
      cliente (mismo criterio que `patterns/cierre-conversemos.php` ya traía) — subir
      las fotos reales a cada bloque cuando el cliente las entregue.

## 9. Flujo de trabajo con git

- **Se versiona:** solo `wp-content/themes/aaa-estudio-legal/` (el tema propio).
  `.gitignore` ya excluye el núcleo de WordPress, `wp-content/plugins/`,
  `wp-content/uploads/` y cualquier credencial/base de datos.
- **No se versiona:** núcleo de WordPress, plugins (se instalan siguiendo la lista
  de § 5), `wp-config.php`, uploads del cliente, backups.
- Mismo criterio de commits que el resto del proyecto: solo cuando el Owner lo pida
  explícitamente, nunca `--force` ni reescritura de historia (AGENTS.md).

## 10. Próximos hitos (no se ejecutan todavía)

- Verificar en vivo, siguiendo esta guía, que las 5 páginas + Blog se ven y
  funcionan igual que https://aaalegal.design-505.workers.dev/ — primera verificación
  real de todo este trabajo, no hecha todavía (no hay WordPress corriendo en el
  entorno donde se escribió este código).
- Resolver las simplificaciones registradas en § 8 (carrusel móvil, cinta de
  logos animada, contador ascendente, íconos SVG) si el Owner las considera
  necesarias para Gate 2 — no son errores, son alcance recortado a propósito.
- Subir fotografía real cuando el cliente la entregue (ver `IMAGE-BRIEF.md`).
- Cuando exista hosting real confirmado (Hostinger, recomendado en AGENTS.md):
  decidir plugin de caché (candidato: LiteSpeed Cache, si el plan de Hostinger corre
  sobre LiteSpeed) y de seguridad — **no antes**, sería instalar dependencias sin
  necesidad concreta todavía.
- Gate 2 (staging) requiere aprobación explícita del cliente antes de avanzar — no
  se salta ese paso por tener ya el tema construido (AGENTS.md § Verificación).
