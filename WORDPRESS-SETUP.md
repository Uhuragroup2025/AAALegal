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

Después de esto, revisar los botones de cierre — todos apuntan a `/contacto/`;
si el slug real termina siendo distinto, ajustarlo en cada pattern (búsqueda
simple de `/contacto/`). El botón del header (antes "Mi caso"; desde D155 "Nuestra plataforma", como pidió el cliente) **no** va a Contacto: es
el acceso a la plataforma ADY (D42) y, mientras no llegue su URL, queda con el
enlace provisional `#mi-caso` en `parts/header.html` (D136) — reemplazarlo ahí
cuando el cliente la entregue.

**Estado en Local (D135, 2026-09-30):** las 5 páginas ya existen — Contacto es
la #116 (`/contacto/`, plantilla con motion). Llegan a ella los botones "Solicitar evaluación
jurídica" de Inicio (Nuestro enfoque y cierre), Metodología y Quiénes somos, y
"Contacto" del mapa del sitio en el footer.

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
todavía; el footer enlaza a `/aviso-legal/` y `/politica-de-privacidad/`, y el
aviso de cookies a `/politica-de-privacidad/` (D136), listos para
cuando exista.

## 7bis. Formularios (Contact Form 7)

Crear estos 2 formularios en **Contact → Formularios de contacto → Añadir nuevo**,
con estos campos exactos (mismos que el prototipo, D109 para Contacto B2B):

**"Postulación"** (D124 — la lámina 23 de la PPTX pide solo nombre, teléfono,
cargo de interés y hoja de vida). El pattern `trabaja-con-nosotros-full` ya trae
el shortcode `[contact-form-7 title="Postulación" html_class="talent-form
talent-form--open"]`, que busca el formulario **por su título**: basta con
crearlo con el título exacto **Postulación** (con tilde) — no hay que copiar
ningún ID. **En Local ya está creado (D125, formulario #106, validador de CF7
sin errores)**; en staging/producción hay que crearlo igual. Hasta que exista,
la página muestra "Error: no se encontró el formulario". En la pestaña
**Formulario**, reemplazar todo por:

```
<div class="talent-form__field">
<label for="tf-nombre">Nombre completo</label>
[text* nombre id:tf-nombre autocomplete:name]
</div>
<div class="talent-form__field">
<label for="tf-telefono">Celular</label>
[tel* telefono id:tf-telefono autocomplete:tel minlength:10 maxlength:10]
</div>
<div class="talent-form__field">
<label for="tf-cargo">Cargo de interés</label>
[select* cargo id:tf-cargo first_as_label "Seleccione un cargo" "Abogado junior" "Abogado senior" "Dependiente judicial" "Auxiliar jurídico" "Otro"]
</div>
<div class="talent-form__field">
<label for="tf-cv">Hoja de vida (PDF o Word, máx. 5 MB)</label>
[file* cv id:tf-cv limit:5mb filetypes:pdf|doc|docx]
</div>
<div class="talent-form__consent">
[acceptance autorizacion-datos] Autorizo a Agudelo Abogados Asociados SAS — AAA Estudio Legal a tratar mis datos personales y mi hoja de vida para gestionar esta postulación, conforme a la Ley 1581 de 2012 y a su <a href="/politica-de-privacidad/" target="_blank" rel="noopener">Política de privacidad</a>. [/acceptance]
</div>
<div class="talent-form__actions">
[submit "Enviar postulación →"]
</div>
```

En la pestaña **Correo electrónico**: poner en *Para* el buzón de talento
humano que defina el cliente (en Local quedó `[_site_admin_email]`, el correo
del administrador, hasta tenerlo); en *Cuerpo del mensaje* usar `[nombre]`,
`[telefono]` y `[cargo]`; en *Archivos adjuntos* escribir `[cv]` (sin eso la
hoja de vida no llega en el correo), y dejar *Cabeceras adicionales* vacío (la
plantilla por defecto trae `Reply-To: [your-email]`, un campo que este
formulario no tiene, y CF7 lo marca como error). Si se agrega un cargo nuevo en
"Vacantes disponibles", agregarlo también a la lista del `[select* cargo …]`.

**"Contacto B2B"** (D135 — se inserta en la página Contacto). El pattern
`contacto-full` ya trae el shortcode `[contact-form-7 title="Contacto B2B"
html_class="talent-form talent-form--open contact-form"]`, que también busca el
formulario **por su título**: basta con crearlo con el título exacto
**Contacto B2B**. **En Local ya está creado (formulario #115, validador de CF7
sin errores)**; en staging/producción hay que crearlo igual. En la pestaña
**Formulario**, reemplazar todo por (D136: la lámina 3 de la PPTX quita Tipo de
organización, Asunto de interés y Contexto general del asunto; quedan 5 campos. D155: se agrega al inicio el selector "Persona natural o empresa" pedido por el cliente en la reunión del 2026-10-02, y Empresa y Cargo pasan a opcionales):

```
<div class="talent-form__field talent-form__field--wide">
<label for="cf-tipo">Persona natural o empresa</label>
[select* tipo-cliente id:cf-tipo first_as_label "Seleccione una opción" "Persona natural" "Empresa"]
</div>
<div class="talent-form__field talent-form__field--wide">
<label for="cf-nombre">Nombre completo</label>
[text* nombre id:cf-nombre autocomplete:name]
</div>
<div class="talent-form__field">
<label for="cf-organizacion">Empresa (si aplica)</label>
[text organizacion id:cf-organizacion autocomplete:organization]
</div>
<div class="talent-form__field">
<label for="cf-cargo">Cargo (si aplica)</label>
[text cargo id:cf-cargo autocomplete:organization-title]
</div>
<div class="talent-form__field">
<label for="cf-correo">Correo electrónico</label>
[email* correo id:cf-correo autocomplete:email]
</div>
<div class="talent-form__field">
<label for="cf-telefono">Celular de contacto</label>
[tel* telefono id:cf-telefono autocomplete:tel minlength:10 maxlength:10]
</div>
<div class="talent-form__consent">
[acceptance autorizacion-datos] Autorizo a Agudelo Abogados Asociados SAS — AAA Estudio Legal a tratar mis datos personales para atender esta solicitud, conforme a la Ley 1581 de 2012 y a su <a href="/politica-de-privacidad/" target="_blank" rel="noopener">Política de privacidad</a>. [/acceptance]
</div>
<div class="talent-form__actions">
[submit "Solicitar contacto →"]
</div>
```

En la pestaña **Correo electrónico**:
- *Para*: `info@agudeloabogados.com` (destino provisional, a confirmar por el cliente — § 5).
- *Asunto*: `Nueva solicitud de contacto ([tipo-cliente]): [nombre]` (D155: la empresa ya no es obligatoria).
- *Cuerpo del mensaje*: los 6 campos (`[tipo-cliente]`, `[nombre]`, `[organizacion]`, `[cargo]`,
  `[correo]`, `[telefono]`).
- *Cabeceras adicionales*: `Reply-To: [correo]` (para responder directo a quien escribió).

En Local todo correo queda en **Mailpit** (Local → pestaña del sitio → Tools →
Mailpit): nada sale a internet, sirve para probar el envío completo.

**Autorización de tratamiento de datos (D137) — en los 2 formularios:** la casilla
`[acceptance autorizacion-datos]` de las plantillas de arriba es obligatoria. Además,
en cada formulario:
- Pestaña **Configuración adicional**: `acceptance_as_validation: on` (el botón no se
  deshabilita; si falta la casilla, el aviso aparece junto a ella al enviar).
- Pestaña **Mensajes** → "El remitente no aceptó los términos": `Para enviar el
  formulario, autorice el tratamiento de sus datos personales.`
- Pestaña **Correo electrónico** → al final del cuerpo, antes de la firma:
  `Autorización de tratamiento de datos personales: aceptada en el formulario.`

El texto de la casilla es **provisional**: lo propuso el equipo a pedido del Owner
y debe validarlo el cliente (es una firma de abogados y es texto de cumplimiento, D2)
junto con la Política de privacidad a la que enlaza, que aún no existe.

## 7bis-2. Fotografía temporal del prototipo (para que Home se vea como el MVP)

No hace falta descargar ni copiar nada — estos archivos ya existen en tu
computador, en `prototype/assets/img/` (dentro de este mismo repositorio,
ruta completa: `C:\Users\ozkrm\Desktop\AAA Estudio Legal\prototype\assets\img\`).
Al subir cada imagen en el editor de bloques (botón **Subir**), simplemente
navega a esa carpeta y elige el archivo indicado. Son las mismas fotos de
banco que usa hoy el prototipo — temporales, no material final del cliente,
pero dan una vista fiel del layout terminado.

**Tip:** en vez de subir una por una, puedes ir primero a **Medios → Añadir
nuevo**, seleccionar los archivos de `prototype/assets/img/` de una sola vez
(Ctrl+clic para elegir varios) y subirlos todos juntos — después, en cada
bloque de imagen, los eliges desde la Biblioteca de medios en vez de subir de
nuevo. **Excepto `hero-inicio.webp`:** muestra en una pantalla la marca de
otra firma ("Ávila Arias & Asociados") y no debe usarse en este sitio.

**Home** (`home-full`) — desde D122 casi todo sale de **fotos aprobadas por
el cliente**, ya optimizadas en WebP dentro del propio tema
(`assets/img/home/`, ~700 KB en total): no hay que subirlas a la Biblioteca.
Los originales pesados quedan en `assets/img/aprobadas-web/` (fuera de git).

| Bloque/sección | Archivo | Origen |
|---|---|---|
| Hero | `home/hero.webp` | aprobada (2.jpg, D125 — antes IMG_9118) |
| "Nuestro enfoque" | `aaa-enfoque-documento` (Biblioteca, medio 180; copia en `home/`) | **stock** (D160, documento del cliente del 2026-10-12): Unsplash `xYnominUM0I`, Guille B, mano señalando un documento — Licencia de Unsplash. Vuelve a dos columnas (D127 la había quitado); `home/nuestro-enfoque.webp` queda sin uso |
| Áreas de práctica — Derecho concursal | `home/area-concursal.webp` | aprobada (IMG_9091) |
| Áreas de práctica — Normalización de activos | `home/area-normalizacion.webp` | aprobada (IMG_9086) |
| Áreas de práctica — Línea corporativa y litigios | `home/area-corporativa.webp` | aprobada (IMG_9119) |
| ¿Por qué confiar en nosotros? — 6 tarjetas | Biblioteca de medios: `aaa-confianza-casos`, `-equipo`, `-tiempo-real` (176), `-huella-digital` (189), `-reportes-pantalla` (190), `-capitolio-bolivar` (193) (copias en `home/` del tema) | **stock**, Licencia de Unsplash. Casos `snNHKZ-mGfE` y equipo `BJqzjxwQhK8` (D151). D160, según la guía del documento del cliente (sin rostros ni texto legible, sin candados ni vistas aéreas): tiempo real `gp8BLyaTaA0` (Thomas Lefebvre). D164, enfoque actual y tecnológico pedido por Oscar, ligado a la descripción de cada tarjeta: huella digital `SRFG7iwktDk` (George Prentzas), reportes en pantalla `mcSDtbWXUZU` (Lukas Blazek), Capitolio Nacional con la estatua de Bolívar y la bandera `6HAzIKfCcaw` (Jhonny Estrada, recortada arriba en 5:3 para que la bandera quede completa; D165). Sin uso: `-tecnologia`, `-seguridad`, `-cumplimiento-sello`, `-presencia-bandera` (D160), `-sello-lacre`, `-reloj-arena`, `-presencia-bandera-tela` (D162) `-carpetas-manila`, `-lomos-carpetas`, `-colinas-meta` (D164) y `-bandera-capitolio` (D165) |
| Foto del equipo bajo "En cifras" | `home/hero.webp` en blanco y negro por CSS | aprobada (2.jpg, la misma del hero — D130; antes 1.jpg en `home/cifras-equipo.webp`, que queda sin uso) |
| Casos de éxito — las 3 tarjetas | `temp-prototype-home-case-preview.jpg` (Biblioteca) | sección oculta desde D159 (visibilidad de bloque nativa) hasta tener los videos con autorización |
| Conversemos — foto de fondo del panel | `temp-prototype-home-cta.jpg` (Biblioteca) | temporal |
| Cierre — marca de agua decorativa | `brand/isotipo-blanco.svg` (tema) | logo nuevo, D126 |

**Logos de "Empresas que ya confiaron en nosotros"** (antes "Sectores de experiencia"; por tarjeta — nota: algunos archivos
son distintos a los de la cinta de arriba, sin el sufijo `-ribbon`):

| Sector | Logos |
|---|---|
| Financiero y Fintech | `logo-bbva.png`, `logo-femcristar.png`, `logo-nuestro-fondo.png` |
| Solidario | `logo-coopunidos.png`, `logo-fetrabuv.png`, `logo-fonalianza.png` |
| Sector público | `logo-gobernacion-valle-del-cauca-ribbon.png`, `logo-metrocali.png` |
| Salud y cajas de compensación | `logo-promedico.png`, `logo-comfandi.png` |
| Construcción e inmobiliario | `logo-constructora-melendez.png` (sin `-ribbon`), `logo-neat.png` |
| Comercio y consumo | `logo-elgranlangostino.png`, `logo-ma-isabel.png`, `logo-k-listo.png` |

**Metodología** (`metodologia-full`, D123) — fotos aprobadas por el cliente,
optimizadas en WebP dentro del tema (`assets/img/metodologia/`, ~240 KB en
total): tampoco hay que subirlas a la Biblioteca.

| Bloque/sección | Archivo | Origen |
|---|---|---|
| Hero | `metodologia/hero-9095.webp` | aprobada (IMG_9095, D142 — foto completa; antes IMG_9116 en D141, IMG_9102 en D140 e IMG_9128 en D125, retirados). También aparece en una tarjeta de "¿Por qué confiar?" (Inicio) y en "Equipo jurídico" (Quiénes somos, temporal) |
| Metodología · 01 Diagnóstico | `aaa-paso-diagnostico` (Biblioteca; copia en `metodologia/`) | **stock** elegido por el Owner (D152): Unsplash `-LgSTma8GJs`, Harshit Suryawanshi — Licencia de Unsplash. Antes `paso-diagnostico.webp` (D138) |
| Metodología · 02 Estrategia | `aaa-paso-estrategia-equipo` (Biblioteca; copia en `metodologia/`) | **stock** elegido por el Owner (D153): Unsplash `6jAq8MkbULo`, Sebastian Herrmann, equipo de abogados — Licencia de Unsplash. Sin ajedrez: el cliente lo excluyó en D138 |
| Metodología · 03 Representación | `aaa-paso-representacion-tribunal` (Biblioteca; copia en `metodologia/`) | **stock** (D153): Unsplash `P5YN73KrUAA`, Saúl Bucio, abogado ante un tribunal (recorte hacia la derecha) — Licencia de Unsplash. Sin apretón de manos (excluido en D138) |
| Tarjeta Derecho concursal | `aaa-area-concursal` (Biblioteca; copia en `metodologia/`) | **stock** autorizado por el cliente (D151): Unsplash `8wLZi9OhsWU`, Jakub Żerdzicki — Licencia de Unsplash. Antes `servicio-concursal.webp` |
| Tarjeta Normalización de activos | `aaa-area-normalizacion` (Biblioteca; copia en `metodologia/`) | **stock** (D151): Unsplash `AT77Q0Njnt0`, Isaac Smith — Licencia de Unsplash. Antes `servicio-normalizacion.webp` |
| Tarjeta Línea corporativa y litigios | `aaa-area-corporativa` (Biblioteca; copia en `metodologia/`) | **stock** (D151): Unsplash `GWe0dlVD9e0`, Benjamin Child — Licencia de Unsplash. Antes `servicio-corporativa.webp` |
| Transparencia | `metodologia/transparencia.webp` | aprobada (IMG_9074) |
| Conversemos — foto de fondo y marca de agua | `temp-prototype-home-cta.jpg` (Biblioteca), `brand/isotipo-blanco.svg` (tema) | igual que Inicio |

**Logo de la firma (D126)** — el logo nuevo del cliente (sin el recuadro del
isotipo) vive en el tema, en `assets/img/brand/`, como SVG vectoriales
extraídos de `AAA_EstudioLegal.ai`: no hay que subirlo a la Biblioteca de
medios y viaja solo a staging/producción.

| Archivo | Uso |
|---|---|
| `brand/isotipo.svg` (cobre) | header, junto al wordmark |
| `brand/wordmark-blanco.svg` | header ("Estudio Legal" en blanco) |
| `brand/logo-horizontal-claro.svg` (isotipo cobre + texto blanco) | footer |
| `brand/isotipo-blanco.svg` | marcas de agua (footer, "Conversemos") y tarjetas de equipo de Quiénes somos |
| `brand/favicon.svg` | ícono de la pestaña del navegador, isotipo cobre sobre cuadro navy (D151); solo se usa si no hay un ícono de sitio configurado |
| `brand/aaa-icono-sitio-512.png` | el mismo ícono en PNG de 512 px: subirlo en Ajustes → General → Ícono del sitio (así lo usan también iPhone y Android). En el staging de Hostinger ya está configurado (D151) |

**Logo en los títulos donde dice "AAA" (D157, reemplaza D156):** en los títulos, el tema muestra el logo completo (isotipo cobre + "Estudio Legal") cada vez que el texto dice "AAA" o "AAA Estudio Legal". Quien edite el sitio sigue escribiendo "AAA Estudio Legal" normalmente; el texto queda oculto dentro para lectores de pantalla y buscadores. En párrafos, listas y footer no se cambia nada: ahí va el nombre escrito, "AAA Estudio Legal". No aplica a títulos SEO, textos alternativos ni formularios.

Los archivos viejos de la Biblioteca (`isotipo-AAA-legal.svg`,
`letras-blanco-logo-AAA-legal.svg`, `logo-completo-AAA-legal-*.png`) ya no
los usa el tema; se pueden borrar de la Biblioteca cuando se quiera. Las
páginas insertadas antes de D126 guardaron la URL del isotipo viejo, y el tema
la cambia al vuelo por el nuevo, así que no hace falta reinsertarlas.

**Quiénes somos** (`quienes-somos-full`, D124) — `assets/img/nosotros/`:

| Bloque/sección | Archivo | Origen |
|---|---|---|
| Hero | `nosotros/hero.webp` | aprobada (IMG_9119, D125 — antes 2.jpg) — **temporal**: la lámina 19 pide la foto general de todos los colaboradores (collage pendiente del cliente) |
| Origen y especialización | `nosotros/origen-fundadores.webp` | aprobada ("ORIGEN Y ESPECIALIZACION.jpg", fundadores) — completa, sin recorte, 1200×1041 (D133/D134; antes `origen.webp`) |
| Equipo jurídico | `nosotros/equipo-juridico.webp` | aprobada (IMG_9095) — temporal hasta el collage del equipo |
| Equipo administrativo | `nosotros/equipo-administrativo.webp` | aprobada (IMG_9127, D125) — temporal hasta el collage del equipo |
| Equipo de tecnología | `nosotros/equipo-tecnologia.webp` | aprobada (IMG_9123) — temporal hasta el collage del equipo |
| Filosofía | `aaa-filosofia-biblioteca` (Biblioteca; copia en `nosotros/`) | composición (D153): biblioteca de Unsplash `A32Uo8lf-JE` (Jonathan Gong, Licencia de Unsplash) con velo navy al 62% e isotipo cobre centrado, según lo que pidió Julián en la reunión del 2026-10-02 (principios, sin personas, "conjugar la imagen con el logo"). Antes `nosotros/filosofia.webp` (IMG_9118) |

**Trabaja con nosotros** (`trabaja-con-nosotros-full`, D124) — `assets/img/trabaja/`:

| Bloque/sección | Archivo | Origen |
|---|---|---|
| Hero | `trabaja/hero.webp` | aprobada (IMG_9071) |
| ¿Por qué trabajar con nosotros? — foto grande | `trabaja/por-que-principal.webp` | aprobada (IMG_9073) |
| ¿Por qué trabajar con nosotros? — fotos pequeñas | `trabaja/por-que-cultura.webp`, `trabaja/por-que-dia-a-dia.webp` | aprobadas (IMG_9051, IMG_9108) |

Contacto todavía reutiliza fotos del banco temporal del prototipo — se revisa
cuando se trabaje esa página.

## 7ter. Menús

Este es un tema de bloques: **Apariencia → Menús no existe** (WordPress solo
muestra esa pantalla en temas clásicos). Los menús ya vienen armados dentro
del propio tema (D121), no hay que crearlos:

- **Menú principal** (`parts/header.html`): Inicio, Metodología, Quiénes
  somos, Trabaja con nosotros. En pantallas de menos de 1181px pasa a botón
  (igual que el prototipo).
- **Menú de sitio** (`parts/footer.html`): Inicio, Metodología, Quiénes
  somos, Trabaja con nosotros, Contacto. Sin Blog: el cliente pidió sacarlo
  de la estructura (D117, 2026-09-29).

Los enlaces apuntan a `/metodologia/`, `/quienes-somos/`,
`/trabaja-con-nosotros/` y `/contacto/`: dan "página no encontrada" hasta que
esas páginas existan con esos slugs (tabla de la sección 7).

**Para editarlos desde WordPress:** Apariencia → Editor → **Navegación** (o
Apariencia → Editor → Patrones → Partes de plantilla → Encabezado / Pie de
página, y seleccionar el bloque de menú). Al guardar un cambio ahí, WordPress
convierte el menú en un menú de Navegación guardado en la base de datos y
guarda el encabezado/pie editado en la base de datos: desde ese momento el
sitio usa esa versión y los cambios futuros a `parts/header.html` o
`parts/footer.html` en el repositorio ya no se ven, salvo que se use
**Restablecer** sobre esa parte de plantilla.

## 8. Patterns construidos en esta sesión

Ya construidos, con el copy real de cada página ya puesto (no hace falta escribir
nada de cero, solo insertar y ajustar si el cliente pide cambios):

- [x] `parts/header.html`, `parts/footer.html` (incluye el aviso de cookies D107)
- [x] `patterns/home-full.php` — Home completa (9 secciones + cinta de logos)
- [x] `patterns/metodologia-full.php` — hero editorial + metodología (línea de tiempo) + servicios (3 tarjetas con viñetas) + transparencia + cierre "Conversemos" igual al de Inicio (D123)
- [x] `patterns/quienes-somos-full.php` — hero editorial + origen (fundadores) + equipos por área (tarjetas flip) + filosofía + cierre "Conversemos" (D124)
- [x] `patterns/trabaja-con-nosotros-full.php` — hero editorial + ¿Por qué trabajar con nosotros? + vacantes + postulación con Contact Form 7 (D124)
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

## Guía rápida de edición para el cliente (D170)

Todo el contenido se edita con bloques nativos de WordPress; no hace falta tocar código.

| Qué | Dónde |
|---|---|
| Textos, títulos, listas, botones y fotos de cada página | Páginas → la página → Editar |
| Cifras de "En cifras" (Inicio) | Editar el texto del número ("+8.700", "95,5 %"…). La animación cuenta hasta lo escrito |
| Foto del cierre "Conversemos" | Seleccionar el Grupo del panel → Estilos → Fondo → Imagen de fondo |
| Logos de clientes por sector (Inicio) | Insertar o quitar un bloque Imagen dentro de la tarjeta del sector. Para un sector nuevo, duplicar una tarjeta y cambiar el nombre; el ícono sale de la clase `sector-card--financiero`, `--solidario`, `--publico`, `--salud`, `--construccion` o `--comercio` (Avanzado → Clases CSS) |
| Tarjetas de equipo (Quiénes somos) | Editar nombre, cargo y descripción. En el editor el reverso aparece debajo del frente |
| Menú y botón del encabezado | Apariencia → Editor → Patrones → Encabezado |
| Dirección, teléfono, WhatsApp, correo y redes del pie | Apariencia → Editor → Patrones → Pie de página |
| Formularios de Contacto y Postulación | Contacto (Contact Form 7) |
| Secciones reutilizables | Insertador de bloques → Patrones → "aaa-estudio-legal": páginas completas, "Cierre — Conversemos" y "Portada interna (foto + título)" |

Se editan con código, a propósito: el bloque de Casos de éxito (oculto; se rehace con los videos) y el aviso de cookies del pie.
