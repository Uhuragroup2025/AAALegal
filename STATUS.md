# STATUS.md — Estado del proyecto y síntesis de insumos

> Actualizado: 2026-08-20 · **C0 = APROBADO** · **C1 = APROBADO (narrativa + copy, v1 y v2)** · **C2 = CANDIDATO A REVISIÓN (iteración 27 — retícula uniforme de confianza; + ronda de correcciones SEO, D27; + ajuste de eyebrow/registro tú-usted en Situaciones, D28; + homogenización a "usted" en las 8 páginas, D29; + tipografía Big Caslon/Krub del manual de marca, D30; + se retira CTA redundante en Situaciones, D31; + Servicios § "Nuestra metodología" vuelve a su diseño original de 2 columnas sin scroll y con menos espacio (D33, reemplaza D32 — el flujograma no se conservó); + menú: sin selector de idioma, CTA "Mi caso" (después revertido a "Contacto" por D36), logo real unificado en las 7 páginas (D34); + Home: Sectores de experiencia antes que Casos de éxito (D35); + reestructuración del menú principal — Blog oculto y reemplazado por "Trabaja con nosotros", Servicios→"Metodología", Nuestro Equipo→"Quiénes somos" (D36); + Home: se quitan Logos clientes y las pills del equipo, el texto de Dimensión humana pasa antes que la foto (D37); + Sectores de experiencia rediseñado con logos placeholder de clientes por sector, en grilla estática (D38); + se corrige el desborde de Sectores de experiencia al margen total de la página y se agrega el carrusel móvil que ya usan Situaciones/Casos de éxito (D39); + Dimensión humana: pequeño espacio entre "Conozca nuestra experiencia →" y la foto (D40); + nueva sección "En cifras" con contador animado bajo Sectores de experiencia, valores placeholder (D41), ver abajo)** · Decisiones vigentes hasta D41. La paleta reducida alineada con marca (D26) reemplaza D22/D23 y sigue aplicada en todo el prototipo; **la tipografía de D26 (Playfair Display/Instrument Sans) fue reemplazada por D30** (Libre Caslon Display/Text + Krub, fiel al manual de marca). La Home incorpora además la traducción compositiva completa registrada en la iteración 15, la escala editorial refinada desde la iteración 16, los ajustes de ritmo/iconografía/header/evidencia hasta la iteración 27, y el copy corregido por SEO (D27–D29, 2026-08-10).

## C2 — Prototipo (candidato, 2026-07-29)

**Qué se construyó:** prototipo navegable de dos páginas en [`/prototype/`](prototype/) — `index.html` (Inicio) y `servicios.html` (Capacidad Técnica), con HTML semántico, CSS por tokens (`css/tokens.css`, mapeable a `theme.json`) y JavaScript mínimo con mejora progresiva (`js/main.js`). Copy real (v2 SEO) tomado de `content/01-inicio.md` y `content/02-capacidad-tecnica.md` — nada de texto ficticio. Documentación completa (dirección visual, tokens, inventario de componentes, animaciones, accesibilidad, riesgos WordPress) en [`prototype/README.md`](prototype/README.md).

**Decisión de alcance (Owner, 2026-07-29):** la página interior representativa es **Capacidad Técnica**, no la página de Captación de Empresas (D11) — esa sigue sin confirmación contractual, y construirla habría ampliado el alcance vendido sin autorización (condición de parada explícita, AGENTS.md). Las demás páginas del sitemap (Nuestra Experiencia, Nuestro Equipo, Talento AAA, Noticias y Análisis, Página Legal) apuntan a un stub (`proximamente.html`) que explica por qué no están construidas — no hay enlaces rotos ni contenido inventado para llenarlas.

**Decisión de C2 sobre animaciones (D7):** no se implementó scrollytelling, sticky-crossfade ni parallax (Kreisson/Sheff&Cook) — se evaluó propósito narrativo, accesibilidad, rendimiento y factibilidad, y ninguno se sostiene todavía para Inicio/Capacidad Técnica (contenido informativo/de conversión, no narrativa secuencial larga; sin fotografía real para poblar un sistema de crossfade). Se implementó en su lugar: revelado simple de secciones al hacer scroll (`IntersectionObserver`, una vez, con fallback 100% visible sin JS), estados de botón (normal/hover/focus/activo, requisito D18), y menú móvil vía `<details>` nativo (funcional sin JS). Todo se anula bajo `prefers-reduced-motion`. Detalle completo en `prototype/README.md` § 5.

**Criterios de marca candidatos (D6), propuestos en este prototipo, sujetos a validación:** dorado nunca como fondo sólido con texto blanco encima (falla contraste — verificado); transición curva entre hero y contenido como gesto de marca recurrente; placeholder consistente (no banco de imágenes) mientras no llegue fotografía real. Ver `prototype/README.md` § 1.

**Bugs encontrados y corregidos durante la verificación en navegador (misma sesión):** imagen de hero se anteponía al texto/CTA en mobile; header desbordaba en mobile; nota explicativa del CTA de ADY con contraste insuficiente; menú podía quedar inalcanzable si el viewport cruzaba el breakpoint de 1023px sin recargar la página. Los cuatro quedaron corregidos y reverificados.

**No se resolvió aquí (sigue igual que antes de este C2):** URL externa de ADY (D18) — el CTA "Consulta tu caso aquí" en el prototipo dirige a una nota explicativa, no a un destino real, consistente con el checklist de Gate 1 ("sin integración real"). Mecanismo concreto del formulario nativo de empresas — diferido a 03A (D12).

**Siguiente paso:** QA de Content sobre el prototipo (claridad/tono, no solo el copy ya aprobado por D21) → consolidación de Product Lead → Gate 1 (aprobación del cliente). Ningún gate fue autoaprobado por este agente.

### Iteración 2 — profundidad visual, REF-BIOFARMA (2026-07-29, candidato a revisión)

**Motivo:** el Owner reportó que la iteración 1 del prototipo se sentía "excesivamente plana, repetitiva y con poca profundidad" — secciones resueltas como cuadrículas de tarjetas idénticas, sin capas ni variación de ritmo.

**Qué cambió (candidato, no aprobado):**
- Nuevo referente registrado: **REF-BIOFARMA** (https://biofarma.com.ar/) — solo composición/profundidad/ritmo/movimiento, no identidad ni contenido (ver REFERENCES.md § "Referente de profundidad visual").
- Hero de Inicio y Capacidad Técnica rehecho como **hero inmersivo por capas** (`.hero-shell`: foto de fondo + degradado + contenido superpuesto), con una **banda de credibilidad** de 4 elementos cualitativos reales (enfoque en el acreedor, tecnología ADY, presencia nacional, seguridad alineada a ISO 27001 — ninguna cifra inventada) superpuesta al borde del hero.
- Grid de los 4 focos de Inicio convertido en un **mosaico asimétrico** (1 tarjeta de vidrio destacada + 1 sólida + 1 visual/foto + 1 sólida) — ya no son "4 tarjetas iguales".
- Nuevo sistema de superficies: **vidrio** (`surface-glass`), **sólida** (`surface-solid`), **visual/foto** (`surface-visual`), alternadas a propósito para generar ritmo.
- Fondo "atmósfera" (halos muy sutiles en dorado/azul frío/navy) en las secciones que lo requieren, más **texto en degradado** reservado a exactamente 2 mensajes narrativos en todo el sitio (un H1 por página).
- Movimiento ampliado: revelado con *stagger*, header que se oculta al bajar y reaparece al subir, parallax muy sutil del hero, rail horizontal arrastrable para los sectores — todo con JS nativo (sin GSAP/AOS/Lenis, sin dependencias nuevas), fallback sin JS y respetando `prefers-reduced-motion`.
- **Dirección cromática candidata:** de 3 alternativas presentadas, se aplicó la **B** ("tecnológica" — acento azul frío nuevo, `--color-accent-cool-*`) sin modificar los colores institucionales. Ver `prototype/README.md` § 1.2. **No aprobada, solo candidata.**
- **Tipografía:** 3 alternativas comparadas en `prototype/type-lab.html` (Fraunces, Newsreader, Space Grotesk) frente a Big Caslon. **✅ Decisión D22 (Owner, 2026-07-29): Space Grotesk aprobada** como fuente de títulos (H1–H4, marca) — ya aplicada en `index.html`/`servicios.html`/`proximamente.html` vía el token `--font-display`; Krub se mantiene sin cambios en cuerpo de texto. Big Caslon queda retirada de los encabezados (deja sin objeto el riesgo de licencia registrado en `prototype/README.md` § 7).
- Nuevo `prototype/IMAGE-BRIEF.md`: inventario de 6 fotografías requeridas (IMG-01 a IMG-06) para el equipo creativo.
- Capacidad Técnica: los 3 bloques de servicio, antes idénticos, ahora tienen 3 tratamientos distintos (vidrio ancho / texto+visual / editorial simple).

**QA ejecutado:** 1440px, 1024px, 768px, 390px (sin overflow horizontal verificado por script); navegación por teclado (Tab, foco visible); `prefers-reduced-motion` verificado por inspección de código (no por emulación de SO — limitación del entorno); contraste recalculado para los tokens nuevos (todos AA o mejor); estabilidad de carga (placeholders con tamaño reservado). Defectos abiertos registrados en QA.md (D-05 a D-09) — ninguno bloquea, todos son validaciones pendientes o decisiones de diseño todavía no tomadas.

**No se hizo commit ni se instaló ninguna dependencia** (instrucción explícita del Owner para esta iteración).

**Estado:** ✅ Candidato a revisión — **no aprobado**. Pendiente: QA de Content, consolidación de Product Lead, y decisión sobre dirección cromática/tipográfica antes de que cualquiera de las dos se considere "aplicada" más allá de este prototipo.

### Iteración 3 — paleta turquesa (D23) + header píldora (2026-07-29, candidato a revisión)

**✅ Decisión D23 (Owner, 2026-07-29):** se reemplazó la paleta institucional (navy `#063B59` + dorados del manual de marca) por una nueva paleta turquesa/teal en todo el prototipo — ver PROJECT.md → Decisiones D23 para el detalle y el matiz frente a D22 (esto sí es un cambio de identidad de color, no una modernización de aplicación dentro de D1). **Pendiente de validación de Product Lead/cliente** — el manual de marca real no cambió, solo el prototipo.

**Qué cambió:**
- `tokens.css`: los 6 tonos nuevos (`--color-navy-deep`, `--color-accent-main`, `--color-accent-light`, `--color-surface-soft`, `--color-ink-dark`, `--color-surface-light`) más variantes derivadas documentadas (hover, elevada, y un tono de acento oscurecido para garantizar AA en texto pequeño sobre fondo claro). Los nombres de variable antiguos (`--color-navy-900`, `--color-gold-100/200/300`, `--color-gray-100`, `--color-ink`) se conservan como alias remapeados a la nueva paleta, para no tener que tocar ~50 reglas ya construidas.
- Header rediseñado como **píldora flotante**: ya no ocupa el ancho completo — `position:sticky; top:1.5rem`, `max-width:900px; width:90%`, `border-radius` total, glassmorphism (navy-deep translúcido + blur). El `<header>` en sí queda transparente y solo centra la píldora (con `pointer-events:none` para no bloquear clics en los márgenes invisibles a los costados).
- HTML orientado a bloques (solo en `index.html`, por alcance del encargo): clases ilustrativas `wp-block-group`/`wp-block-navigation`/`wp-block-site-title`/`wp-block-buttons` añadidas junto a las clases funcionales existentes, más un comentario que mapea cada contenedor a su bloque nativo equivalente — no se modificó la estructura funcional, así que `servicios.html`/`proximamente.html` heredan la píldora sin cambios en su HTML.
- Contraste recalculado para toda la paleta nueva: opacidad del vidrio del header ajustada de la referencia (0.85) a 0.88 porque a 0.85 el texto blanco caía a ~4.3:1 (bajo el mínimo AA de 4.5:1) en el peor caso (sección clara detrás); anillo de foco reasignado de accent-light a accent-main, el único tono que cumple 3:1 tanto sobre navy-deep como sobre blanco.

**QA ejecutado:** verificado en 1440px y mobile en `index.html` y `servicios.html` (esta última hereda la píldora sin tocar su HTML); sin errores de consola; valores computados de la píldora verificados por script (border-radius, max-width, background, backdrop-filter); accesibilidad de clic verificada con `elementFromPoint` (la navegación real por click no se pudo probar de extremo a extremo por una limitación del entorno de vista previa con rutas `file://` externas al workspace — no del código).

**Estado:** ✅ Candidato a revisión — **no aprobado**. La paleta queda aplicada en el prototipo por instrucción explícita del Owner, pero como toda esta fase, sujeta a QA de Content, consolidación de Product Lead y, en este caso además, validación de que reemplazar la identidad de color del manual de marca es lo que realmente se quiere llevar a producción.

### Iteración 4 — Talento AAA, Captación B2B, Noticias y Análisis (2026-07-31, candidato a revisión)

**Motivo:** el Owner pidió construir las 3 páginas restantes del sitemap que todavía apuntaban a `proximamente.html` con insumo suficiente en `/content/` (05, 06, 07), y explícitamente el "single page" interno del blog (plantilla de artículo).

**⚠️ Excepción de alcance registrada — Captación B2B (D11):** `content/06-captacion-b2b.md` y PROJECT.md marcan esta página como **no contratada** (8ª página, fuera de las 6 vendidas + legal) y dicen textualmente que "no se construye ni se diseña hasta que Product Lead confirme su estatus contractual". Se preguntó explícitamente al Owner antes de tocar el archivo; **el Owner instruyó construirla igual, para prototipo**, entendiendo que esto no resuelve el estatus contractual real (D11 sigue "no contratada" en PROJECT.md, sin cambios). Se dejó una nota visible en la propia página (`captacion-b2b.html`) recordando esta condición. El nombre final de la página tampoco está decidido — se usó **"Soluciones para Acreedores"** (uno de los 3 candidatos listados en content/06) como placeholder de título/nav, pendiente de confirmación.

**Qué se construyó:**
- `talento-aaa.html` — hero sin foto ni CTA propio (D17: "Postúlate" nunca compite con "Consulta tu caso aquí"); secciones "Cultura / cómo se trabaja" y "Testimonios" renderizadas como **placeholders explícitos** ("Contenido pendiente del cliente", reutilizando el estilo de `.ady-note`) — no se redactó copy de cultura ni se inventó ningún testimonio (content/05 lo prohíbe explícitamente). Formulario de postulación real (nombre, correo, CV, campo adicional marcado "pendiente de definir"), sin backend — nota de transparencia igual que el resto del prototipo.
- `captacion-b2b.html` — copy v2 (SEO, `COPYS QA _ COMENTARIOS.docx`) completo: hero con CTA, "Por qué elegir AAA", "Nuestro proceso" (reutiliza el componente stepper de Servicios con copy propio), "Objeciones resueltas" (tarjeta de vidrio), "Evidencia de confianza" como placeholder explícito (cifras reales pendientes, no inventadas), cierre con el mismo bloque de dos tarjetas del resto del sitio.
- `noticias-analisis.html` + 2 single pages (`noticia-insolvencia-acreedores.html`, `noticia-normalizacion-activos.html`) — listado con las 2 tarjetas que pide el outline (content/07 limita a "hasta 2 entradas iniciales"). **content/07 dice explícitamente "no se redacta contenido de blog en C1"** — los 2 artículos son contenido de ejemplo construido para prototipar la plantilla (listado + single page), marcado de forma visible en cada página ("Contenido de ejemplo — prototipo", sin autoría individual inventada, atribuido genéricamente a "Equipo AAA Estudio Legal"). No se cita ninguna norma ni cifra específica. Sin CTA comercial directo (solo "Lee el análisis completo"), por instrucción explícita del outline.
- Menú principal actualizado en las 7 páginas del sitio con los 3 enlaces nuevos.

**Bug encontrado y corregido durante la verificación (mismo patrón que iteraciones anteriores — medir, no asumir):** con 7 ítems en el menú (antes 4), el nav horizontal se partía en 2 líneas incluso a 1440px — uno de los anchos de escritorio más comunes. Se aumentó el ancho de la píldora (1250px→1500px), se redujo el espaciado entre ítems, y el breakpoint que activa el menú hamburguesa subió de 1023px a 1535px (en CSS **y** en `js/main.js`, que deben coincidir) para que cualquier ancho "normal" de escritorio reciba el menú confiable en vez de un intento de nav horizontal roto. Verificado con mediciones reales en 1440px (hamburguesa limpio) y 1920px (horizontal en una sola línea, 1500px de ancho).

**Segundo bug encontrado:** la nota de excepción de alcance (D11) en `captacion-b2b.html` se agregó con un padding reducido a propósito para que fuera discreta — eso la dejó más baja que el header fijo (~102px) y quedaba completamente invisible, tapada detrás de la píldora. Corregido con el mismo padding-top de despeje que usa el resto de páginas sin hero.

**QA ejecutado:** las 5 páginas nuevas verificadas en 1440px y 390px sin overflow horizontal ni errores de consola; el componente stepper (reutilizado en Captación B2B con copy distinto al de Servicios) verificado con las mismas mediciones de activación bidireccional que en la iteración anterior; formulario de Talento AAA verificado visualmente en mobile; tarjetas de blog verificadas con hover real (revelado del CTA).

**No se hizo commit ni se instaló ninguna dependencia.**

**Estado:** ✅ Candidato a revisión — **no aprobado**. Además de las condiciones habituales (QA de Content, consolidación de Product Lead), esta iteración tiene dos pendientes propios: (1) confirmación contractual de Captación B2B (D11) — sigue sin resolver, se construyó el prototipo sin resolver el fondo; (2) el contenido de ejemplo del blog no debe confundirse con copy editorial listo para publicar.

### Iteración 5 — Talento AAA eliminada, formulario movido a Nuestro Equipo (2026-08-03, candidato a revisión)

**Motivo:** el Owner instruyó eliminar `talento-aaa.html` como página independiente y trasladar únicamente el formulario de postulación a una nueva página `nuestro-equipo.html` (que hasta ahora apuntaba a `proximamente.html`, sin construir).

**Qué se hizo:**
- `talento-aaa.html` eliminado por completo. Las secciones "Cultura / cómo se trabaja" y "Testimonios" (placeholders explícitos de la iteración 4) **no se trasladaron** — el Owner solo pidió mover el formulario, no el resto de la página.
- `nuestro-equipo.html` construido con el copy aprobado de `content/04-nuestro-equipo.md`: "¿Quiénes somos?" (apertura + origen, copy real v2 SEO), placeholder explícito de biografía de founders (Julián Agudelo y Angélica Chamorro, Decisión D19 — no se inventa), "Filosofía AAA Estudio Legal", "Nuestro equipo" con placeholder explícito de fotos/nombres por área y del perfil de Jaime Marmolejo (ambos pendientes del cliente), cierre con enlaces a LinkedIn/Instagram (sin URL real disponible, apuntan a `proximamente.html` siguiendo el patrón ya establecido del sitio para destinos sin resolver).
- Formulario de postulación trasladado sin cambios de estructura ni de estilo (`.talent-form`, fondo oscuro, nota de transparencia D12 intacta) al final de `nuestro-equipo.html`. El CTA "Postúlate" (D17) sigue apareciendo solo en esta página.
- Menú principal y footer actualizados en las 6 páginas restantes (`index.html`, `servicios.html`, `captacion-b2b.html`, `noticias-analisis.html` y los 2 single-post) — se quitó el ítem "Talento AAA" y "Nuestro Equipo" ahora enlaza a `nuestro-equipo.html` en vez de `proximamente.html`.
- `proximamente.html` actualizado: "Nuestro Equipo" ya no aparece en la lista de páginas pendientes; aparece en la lista de páginas construidas en su lugar.

**QA ejecutado:** `nuestro-equipo.html` verificado en 1440px y 390px sin overflow horizontal ni errores de consola; menú hamburguesa verificado en mobile (6 ítems, sin Talento AAA, "Nuestro Equipo" marcado como página activa); formulario de postulación verificado visualmente igual que en la iteración 4 (mismo componente, sin cambios de estilo).

**No se hizo commit ni se instaló ninguna dependencia.**

**Estado:** ✅ Candidato a revisión — **no aprobado**. Los mismos pendientes de contenido de la iteración 4 siguen abiertos (biografía de founders, fotos del equipo por área, perfil de Jaime Marmolejo) — ninguno se resolvió aquí, solo cambiaron de página.

### Iteración 6 — "Captación B2B" renombrada a "Contacto" en el menú (2026-08-03, candidato a revisión)

**Motivo:** el Owner pidió cambiar el nombre de la página `captacion-b2b.html` en la navegación de "Captación B2B" a "Contacto", y moverla al último lugar del menú principal.

**Qué se hizo:**
- Se renombró la etiqueta visible "Captación B2B" a "Contacto" en el menú principal y el footer de las 7 páginas del sitio, además del texto alternativo de imagen y los comentarios de código internos que la mencionaban, y en `proximamente.html`/`IMAGE-BRIEF.md`.
- **No se tocó** el `<title>` de la pestaña (`Soluciones para Acreedores — AAA Estudio Legal`) ni el H1/eyebrow del hero de la página (`¿Un deudor puso en riesgo tu crédito?` / `Soluciones para acreedores`) — el pedido fue específicamente sobre el nombre usado en la navegación, no sobre el copy ni el posicionamiento de la página en sí. El archivo sigue siendo `captacion-b2b.html` (no se renombró, para no romper enlaces).
- Se reordenó el menú principal y el footer en las 7 páginas: antes terminaba en …Nuestro Equipo → Captación B2B → Blog; ahora termina en …Nuestro Equipo → Blog → **Contacto** (último elemento).
- La condición de D11 (página sin confirmación contractual, construida igual "para prototipo" por instrucción del Owner) sigue vigente sin cambios — este es solo un ajuste de nomenclatura/orden de menú, no resuelve ese pendiente.

**QA ejecutado:** verificado en 1440px (menú hamburguesa, orden correcto) y confirmado que `aria-current="page"` sigue apuntando al ítem correcto en cada página (incluida la propia `captacion-b2b.html`, ahora mostrando "Contacto" como activo); sin errores de consola.

**No se hizo commit ni se instaló ninguna dependencia.**

**Estado:** ✅ Candidato a revisión — **no aprobado**.

### Iteración 7 — retirada la nota interna de D11 en Contacto (2026-08-03, candidato a revisión)

**Motivo:** el Owner pidió retirar de `captacion-b2b.html` (ahora "Contacto" en el menú) la nota visible en la parte superior de la página que decía: *"Nota interna del prototipo: página candidata — estatus contractual (Decisión D11) y nombre final todavía sin confirmar con Product Lead. No forma parte de las 6 páginas + legal originalmente vendidas."*

**⚠️ Nota de gobierno:** esta nota era el único indicador visible en el propio prototipo de que esta página (D11, PROJECT.md) sigue **sin confirmación contractual** — no forma parte de las 6 páginas + legal originalmente vendidas, y esto **no ha cambiado**: solo se retiró el aviso visible, no se resolvió el estatus contractual real. La condición de D11 y el registro completo del contexto siguen intactos en PROJECT.md/STATUS.md (iteración 4) para quien audite el proyecto — este agente no las alteró, solo el texto que aparecía en pantalla al navegar la página.

**Qué se hizo:** se eliminó el bloque `<div class="section" data-surface="light">` con la nota y los dos comentarios de código asociados (la nota de gobierno D11 y el bug de padding-top ya resuelto que dependía de este bloque). El hero inmersivo (`.hero-immersive`), que ya maneja su propio despeje respecto al header fijo de forma independiente (mismo patrón que Inicio/Servicios), queda directamente debajo del header sin ese bloque intermedio.

**QA ejecutado:** verificado en 1440px y 390px — el hero se renderiza con el mismo despeje correcto que en el resto del sitio, sin superposición con el header ni overflow horizontal; sin errores de consola.

**No se hizo commit ni se instaló ninguna dependencia.**

**Estado:** ✅ Candidato a revisión — **no aprobado**.

### Iteración 8 — posicionamiento exclusivo del acreedor y 3 macroservicios (2026-08-04, candidato a revisión)

**Origen:** el Owner reportó una decisión explícita del cliente (Julián): AAA defiende exclusivamente a quien le deben y no asesora ni representa al deudor insolvente. La distinción debe quedar inequívoca para bancos y acreedores corporativos. Registrado como Decisión D24 en PROJECT.md.

**Qué cambió:**
- En Inicio se conservaron sin cambios el H1, el subhead y la banda de credibilidad, por instrucción expresa del Owner.
- El mosaico pasó de “Cuatro focos” a **“Tres focos, un mismo rigor técnico”** y quedó compuesto por Defensa de acreedores en procesos de insolvencia, Normalización de Activos y Derecho Corporativo.
- Derecho Concursal dejó de ser una tarjeta/macroservicio independiente y se integró como disciplina técnica dentro del primer servicio.
- En Servicios, el primer bloque se renombró **“Defensa de acreedores en procesos de insolvencia”** y declara en tono institucional que la práctica está dedicada exclusivamente al acreedor y no representa al deudor insolvente.
- Los contenidos de hero de Servicios y Contacto se intercambiaron: Servicios ahora abre con “Soluciones para acreedores / ¿Un deudor puso en riesgo tu crédito?”; Contacto recibe “Soluciones jurídicas para proteger, normalizar y recuperar activos”.
- Metadatos, etiquetas editoriales, contenido fuente, documentación del pattern y checklist de QA se alinearon a los tres macroservicios. El término “derecho concursal” se conserva en el cuerpo técnico, no como categoría independiente.

**Alcance:** es una actualización de posicionamiento, copy y organización interna del portafolio; no agrega páginas, integraciones ni funcionalidades. D11 sigue sin confirmación contractual y C2 continúa sin aprobación de Gate 1.

**Estado:** ✅ Candidato a revisión — **no aprobado**.

### Iteración 9 — Narrativa de Homepage (2026-08-04, candidato a revisión)

**Objetivo:** reorganizar únicamente la Homepage para que el usuario avance desde el reconocimiento de su problema hasta el contacto con AAA, sin crear archivos, carpetas, componentes ni cambios de arquitectura.

**Recorrido implementado:** problema → situaciones reconocibles → definición de AAA → tres formas de intervención → razones para confiar → evidencia/casos → sectores → equipo → contacto.

**Qué se hizo:**
- Hero actualizado con el problema del acreedor y dos CTA: “Hablemos de su caso” hacia Contacto y “Conozca cómo lo hacemos” hacia Servicios.
- Nuevas secciones de situaciones, definición de AAA y razones de confianza, construidas con `grid-2`, `focus-grid`, `surface-solid` y `media-placeholder` ya existentes.
- Bloque de servicios reutiliza el mosaico vigente de tres focos y conserva D24.
- Casos de éxito incorpora la estructura solicitada para tres casos, logos, testimonio y cifra, pero muestra placeholders explícitos porque esos insumos siguen pendientes del cliente; no se inventó evidencia.
- La sección de sectores se conservó sin cambios.
- El bloque de equipo se simplificó a una fotografía pendiente, texto corto y CTA; se retiró el carrusel de nombres y cargos ficticios que existía en la versión anterior.
- Cierre actualizado a “Conversemos sobre su caso” con CTA hacia Contacto.

**Límites respetados:** solo se modificó `prototype/index.html` en el prototipo; no se crearon componentes, archivos ni dependencias. La documentación de gobierno y el copy fuente se actualizaron por trazabilidad (D25).

**Estado:** ✅ Candidato a revisión — **no aprobado**. Casos, logos, testimonio, cifra e ilustración del proceso siguen pendientes de insumo y validación del cliente.

### Iteración 10 — pills animadas del equipo recuperadas (2026-08-04, candidato a revisión)

Por instrucción del Owner se recuperó, dentro del bloque “Dimensión humana”, la banda animada de pills con avatar, nombre y cargo. Se reutilizó el componente existente `.team-marquee`/`.team-pill`, sin crear CSS, archivos o componentes. Para no reintroducir los perfiles ficticios de versiones anteriores, se muestran únicamente Julián Agudelo (socio cofundador), Angélica Chamorro (socia cofundadora) y Jaime Marmolejo (director), todos confirmados en las fuentes del proyecto. Las fotografías individuales no han sido entregadas: los avatares muestran iniciales y quedan identificados como placeholders accesibles. C2 continúa candidato, no aprobado.

### Iteración 11 — Visual Language Lab (2026-08-05, referencia interna aprobada)

**Decisión:** la Product Lead aprobó la dirección visual general y estableció [`prototype/type-lab.html`](prototype/type-lab.html) como referencia interna para la siguiente implementación, sin aplicar todavía el sistema a la Home ni cambiar su arquitectura o narrativa (D26).

**Sistema consolidado en el laboratorio:**
- Playfair Display para títulos y énfasis; Instrument Sans para body copy y UI.
- Paleta reducida: azul AAA `#063B59`, azul claro `#B9CEED`, marfil `#F5F3EE`, blanco `#FFFFFF`, cobre mate `#CAA181`, borde `#D9D9D9` y tinta `#111820`.
- Escala de espacio: `4/8/12/16/24/32/48/64/96/128`; en la futura aplicación se conserva la estructura responsive existente y se normalizan los valores de la Home hacia estos tokens.
- Especímenes internos de tipografía, color, botones, cards, formularios, estados, header, footer, marca, loader y fotografía.
- Isotipo provisional extraído del manual para validación interna (`prototype/assets/img/aaa-isotipo-manual.png`); producción requiere el archivo maestro entregado por el cliente.

**Exploraciones cerradas (2026-08-05, ver QA.md → D-10):** se revisó el tratamiento de degradados y se confirmó que ya solo se usan como fondos de sección/foto a pantalla completa, nunca en cards, botones, badges o formularios — no requería cambios. Se auditó la iconografía Phosphor: se encontró y corrigió un ícono con cliché jurídico explícito ("Materia" usaba la balanza de la justicia, reemplazada por un ícono de precisión/rigor), dos símbolos mal seleccionados ("Dirección" reutilizaba la flecha de los CTA en vez de un pin de ubicación; "Cobertura nacional" repetía el ícono de "Organización"), y se introdujo diferenciación por peso (Bold reservado a la flecha de los CTA de conversión principal, Regular para el resto). Verificado en navegador sin roturas. Ninguno de estos tratamientos se ha aplicado todavía a la Home — siguen viviendo solo en el laboratorio.

**Alcance técnico:** no se añadieron dependencias, frameworks, procesos de compilación, carpetas ni cambios de arquitectura. El laboratorio es una página interna aislada y no comparte CSS con la Home.

**Estado:** dirección general aprobada como referencia interna; implementación en Home y refinamiento final de atmósfera/iconografía pendientes. Gate 1 no se autoaprueba.

### Iteración 12 — Migración de D26 a las 7 páginas del sitio (2026-08-05, candidato a revisión)

**Motivo:** el Owner pidió avanzar con la migración del Visual Language Lab (D26) sobre el mismo `index.html` en vez de crear una segunda versión de Home en paralelo — la historia previa queda disponible vía git (commit `e52782d` y anteriores), sin duplicar archivos ni mantenimiento. Como `tokens.css`/`base.css`/`components.css` son compartidos por las 7 páginas construidas, la migración se aplicó al sitio completo, no solo a Home (confirmado explícitamente con el Owner antes de ejecutar).

**Qué se hizo:**
- `tokens.css`: paleta reemplazada de la teal de D23 a la paleta reducida de D26 (`#063B59`/`#B9CEED`/`#F5F3EE`/`#FFFFFF`/`#CAA181`/`#D9D9D9`/`#111820`, valores tomados literalmente de `type-lab.html`); tipografía cambiada de Space Grotesk/Krub a Playfair Display/Instrument Sans; radios reducidos a los valores discretos del lab (4px/8px, con 12/16/24px interpolados para contenedores que el lab no cubre). La escala de espaciado no cambió — ya coincidía exactamente con la del lab (`4/8/12/16/24/32/48/64/96/128`).
- Alias retrocompatibles (`--color-gold-100/200/300`, `--color-navy-900/800/700`, etc.) se remapearon a la nueva paleta para no reescribir las ~50 reglas de `components.css` que ya los referencian — mismo patrón usado en la migración de D23.
- `<link>` de Google Fonts actualizado en las 8 páginas HTML del sitio (Krub+Space Grotesk → Instrument Sans+Playfair Display).
- **Foco de teclado (accesibilidad):** a diferencia de la paleta teal, ningún tono único de D26 cumple 3:1 tanto sobre navy como sobre blanco a la vez. Se resolvió con dos tokens (`--color-focus-ring` claro por defecto, `--color-focus-ring-on-dark` para secciones oscuras) en vez de uno solo, con overrides explícitos donde el CSS ya existente tenía reglas más específicas que el override genérico no alcanzaba a vencer (ver defectos abajo).
- `.cierre-card--cta` (tarjeta de cierre de Inicio) pasó de fondo en degradado a color sólido, alineándose con la regla ya cerrada en D-10 (degradados solo como fondo de sección, nunca en cards) — no se había detectado antes porque el cierre de D-10 fue sobre el laboratorio, no sobre los componentes reales de Home.
- `prototype/assets/img/latam-map.svg` (mapa de "Sectores") tenía colores de la paleta teal fijos en el propio archivo SVG, no en CSS — recoloreado manualmente a los equivalentes de D26.

**Defectos encontrados y corregidos durante el QA de esta misma migración (detalle completo en QA.md → D-11 a D-14):** texto blanco invisible sobre cards claras (`.surface-solid`) dentro de secciones oscuras (Casos de éxito); anillo de foco de teclado invisible en el formulario de postulación (Nuestro Equipo) por una regla más específica que el override genérico de accesibilidad; los dos hallazgos ya descritos arriba (mapa SVG, card de cierre). Ninguno bloqueó continuar — los cuatro quedaron corregidos y reverificados en la misma sesión.

**QA ejecutado:** verificado en 1440px/1024px/768px/390px en Inicio, Servicios, Nuestro Equipo, Contacto y Blog — sin overflow horizontal en ninguna página ni ancho. Verificación específica de accesibilidad: anillo de foco del stepper (Servicios) y del formulario de postulación (Nuestro Equipo) confirmados con el tono correcto por color computado, no solo a simple vista. Sin errores de consola.

**No se creó ninguna página ni archivo nuevo** — toda la migración vive en los archivos CSS/SVG ya existentes y en el `<link>` de fuentes de cada página, por instrucción explícita del Owner de no mantener una segunda versión de Home en paralelo.

**Estado:** ✅ Candidato a revisión — **no aprobado**. Con esta iteración, D26 queda completamente implementado (ya no solo en el laboratorio) en las 7 páginas construidas. Pendiente: QA de Content, consolidación de Product Lead y Gate 1, igual que el resto del prototipo.

### Iteración 13 — brechas de fidelidad al Visual Language Lab (2026-08-05, candidato a revisión)

**Motivo:** el Owner revisó la iteración 12 en navegador y señaló elementos que seguían sin corresponder al laboratorio: títulos de énfasis sin cursiva, bordes con un tinte azulado en vez del gris plano del lab, el menú principal mostrando solo el ícono de hamburguesa en anchos de escritorio normales, y la sección "Sabemos lo que está enfrentando" con números en vez de iconografía y tarjetas de altura despareja.

**Qué se hizo:**
- `.text-gradient`: se agregó cursiva (el lab combina color + itálica en su tratamiento de énfasis, no solo color). Se corrigió además un efecto colateral de la migración: sobre fondo oscuro el degradado usaba dos alias que en D26 apuntan al mismo tono (`--color-gold-100`/`--color-accent-cool-100`, ambos ahora el azul claro), por lo que se veía como color plano, no como degradado — ahora usa azul claro → cobre.
- `--color-border-subtle` pasó de `rgba(navy, 0.12)` (tinte azulado, herencia de D23) al gris plano `#D9D9D9` del lab (token `--color-border-flat`, creado en la iteración 12 pero nunca conectado).
- **Menú principal:** medido en navegador que, con Instrument Sans y los 6 ítems vigentes (ya no 7), el nav cabe en una sola línea sin desbordar la píldora incluso a 1024px. El corte de 1535px (calibrado en 2026-07-31 para 7 ítems con Krub) volvió al estándar del resto del sistema, 1023px, en `components.css` y `js/main.js` (deben coincidir, ya sincronizados).
- Sección "situaciones" (Inicio): los índices "01–04" se reemplazaron por 4 íconos Phosphor distintos y semánticamente relevantes (alerta, análisis, representación, seguimiento), mismo criterio sin clichés jurídicos que la iteración 11. Las 4 tarjetas ahora usan una variante `.grid-2--stretch` para altura uniforme, sin afectar los otros 4 usos de `.grid-2` en la página (equipo, sectores, etc., que si necesitan centrado vertical).

**QA ejecutado:** verificado en navegador a 768px, 1024px, 1100px y 1440px — nav en una sola línea sin hamburguesa desde 1024px, hamburguesa funcional por debajo; cursiva e ícono de foco confirmados por estilo computado, no solo a simple vista; bordes verificados en `rgb(217,217,217)` exacto; sin overflow horizontal en ningún ancho probado.

**Estado:** ✅ Candidato a revisión — **no aprobado**. Mismos pendientes que el resto del prototipo (QA de Content, consolidación de Product Lead, Gate 1).

### Iteración 14 — segunda pasada de fidelidad al Visual Language Lab (2026-08-05, candidato a revisión)

**Motivo:** el Owner revisó `prototype/type-lab.html` completo de nuevo (no solo los especímenes ya auditados) y señaló que la iteración 13 fue parcial: forma del menú principal, radios de botones/cards/header, y estructura de los encabezados de sección de Home todavía no correspondían al laboratorio.

**Qué se hizo (todo en `components.css`, salvo lo indicado):**
- **Encabezados de sección (Home):** el laboratorio pone la etiqueta (kicker) a la izquierda y el título a la derecha en una cuadrícula de dos columnas (`.section-heading`) — Home los apilaba verticalmente. Se creó el modificador `.section-head--split` (grid de 2 columnas, colapsa a 1 en móvil) y se aplicó a los 4 encabezados de Home que tienen eyebrow+título (situaciones, servicios, confianza, casos). El único encabezado sin eyebrow (Servicios, "Nuestros servicios") se dejó igual — una cuadrícula de 2 columnas con un solo hijo dejaría una columna vacía.
- **Radio de botones:** `.btn` pasó de píldora (`--radius-pill`, 999px) a `--radius-sm` (4px, = `--radius-control` del lab) — "radios discretos" es un principio explícito del laboratorio, no solo una preferencia estética. Mismo cambio en `.lang-toggle` y `.sector-chip` (antes píldora, ahora igual que los badges del lab). El botón de header en modo solo-ícono (`<480px`) conserva su radio circular — ahí es una excepción deliberada (botón cuadrado de ícono, no un botón de texto).
- **Forma del menú principal:** `.site-header__inner` (la píldora flotante) pasó del mismo `--radius-pill` a `--radius-sm` — el laboratorio no usa píldoras en ningún componente, ni en su propio header de muestra (barra recta). Se mantiene flotante/sticky con blur (valor de UX ya establecido, D18), solo cambia la forma de la esquina. El panel desplegable del menú móvil (`.nav__panel`) se ajustó al mismo radio para sentirse como una extensión de la píldora.
- **Radio de cards:** `.surface-solid`, `.surface-glass`, `.surface-visual`, `.people-card` (móvil) y `.blog-card__media` pasaron de `--radius-container` (12px, interpolado) a `--radius-md` (8px, = `--radius-card` del lab exacto). Los paneles fotográficos grandes (`.hero-shell`, `.cierre-card`, `.media-placeholder`) conservan `--radius-xl` — el lab no define un radio para paneles de esa escala, y ya estaba documentado como categoría aparte en tokens.css.
- **Colores del hero:** re-verificado explícitamente a pedido del Owner — el scrim (`.hero-shell__scrim`) y el patrón de placeholder ya leían de `--color-navy-deep-rgb`/`--color-accent-main-rgb`/`--color-accent-light-rgb`, correctamente migrados a D26 desde la iteración 12. No se encontró ningún valor residual de la paleta teal.

**QA ejecutado:** verificado en navegador (Home y Servicios) tras descubrir que esta herramienta de previsualización cachea agresivamente los archivos CSS de `file://` entre ediciones sucesivas — los cambios de radio no se reflejaban hasta forzar una recarga completa de la pestaña, no solo del stylesheet. Confirmado por lectura directa de disco (no solo del navegador) que las 3 hojas de estilo tienen los valores correctos: `--radius-sm:4px`, `--radius-md:8px` en tokens.css, y cada selector afectado referenciándolos. Verificado además, tras una recarga limpia, que los valores computados coinciden exactamente (botón 4px, header 4px, card 8px). Sin overflow horizontal.

**Estado:** ✅ Candidato a revisión — **no aprobado**. Mismos pendientes que el resto del prototipo (QA de Content, consolidación de Product Lead, Gate 1).

### Iteración 15 — fidelidad compositiva de Homepage al Visual Language Lab (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead detectó que las iteraciones 12–14 habían trasladado principalmente tokens (paleta, familias tipográficas, bordes y radios), pero conservaban buena parte de la gramática visual de D23: header flotante con vidrio, hero contenido en panel redondeado, texto degradado, halos repetidos, mosaico fotográfico y cards con elevación. Se autorizó completar la migración visual sobre la misma Homepage, con la condición explícita de no modificar ningún copy.

**Qué se hizo:**
- Se añadió una clase de alcance a `body` (`home-page`) para aplicar la nueva capa únicamente a Inicio, sin alterar visualmente las otras seis páginas ni crear archivos/componentes.
- Header convertido en barra sólida azul AAA, sin blur, sombra ni tratamiento de isla; CTA en cobre mate, siguiendo el espécimen del Lab.
- Hero llevado a una composición editorial full-bleed: escala tipográfica dominante, énfasis Playfair Italic en cobre sólido, fotografía desaturada y subordinada mediante scrim, y retícula de fondo sutil. Se conserva la fotografía y la estructura/acciones existentes.
- Botones normalizados a peso 500, borde de 1px, altura de 50px y radios de 4px.
- Fondos narrativos claros convertidos a marfil plano; se retiraron los tres halos animados. La profundidad atmosférica queda limitada al hero y al CTA final.
- Cards claras convertidas a superficies blancas con borde gris, sin sombras, brillos ni desplazamiento. Servicios adopta las tres variantes del Lab (blanca, azul AAA y azul claro) sin cambiar sus títulos, descripciones ni destinos.
- Encabezados de sección, cards de confianza/casos, bloque de equipo y footer recalibrados con la escala, ritmo y geometría editorial del Lab. Las pills animadas del equipo se conservaron.
- CTA final conserva su composición de dos paneles, con degradado oscuro de bajo contraste y sin halo decorativo.

**Integridad de contenido:** el texto visible completo de `prototype/index.html` antes/después produjo la misma huella SHA-256 (`b24a1415330be32520c0902d5b0ff59830caa1ea1408bcca0fd56d751789d97f`). El único cambio HTML fue `class="home-page"` en `<body>`; no cambió ningún copy, enlace, orden de sección ni componente narrativo.

**QA ejecutado:** navegador limpio en 1440×1000 y 390×844; sin overflow horizontal; header desktop y menú móvil funcionales; grids de servicios 3→2→1 columnas; jerarquía calculada de 89.28px para H1 y 68px para H2 en desktop; cards blancas sin sombra; atmósferas repetidas anuladas; contraste del párrafo del CTA final corregido a blanco 72%; 9 secciones, 24 encabezados y 25 enlaces preservados; sin errores de consola. `git diff --check` sin errores.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 16 — recalibración tipográfica de Homepage (2026-08-05, candidato a revisión)

**Motivo:** durante la revisión interna se identificó que los títulos dominaban en exceso la composición de la Home. La Product Lead pidió ajustar únicamente la escala de H1, H2 y H3, conservando la dirección visual, las familias tipográficas, el copy y los tamaños actuales de eyebrows y body.

**Qué se hizo:**
- H1 fijado en `48px` para escritorio y `35px` para móvil.
- H2 fijado en `32px` para escritorio y `25px` para móvil, incluido el cierre narrativo.
- H3 unificado en `24px` para escritorio y móvil; su relación jerárquica se sostiene mediante contexto, composición y espaciado, no mediante variaciones de escala entre cards.
- No se modificaron familias, pesos, tamaños de body o eyebrows, copy, estructura, componentes ni comportamiento responsive.

**QA ejecutado:** navegador local limpio en 1440×1000 y 390×844. Escala calculada: desktop H1 `48px`, H2 `32px`, H3 `24px`; móvil H1 `35px`, H2 `25px`, H3 `24px`. Eyebrows de sección permanecen en `12px` y body del hero en `18px`. Sin overflow horizontal; menú móvil funcional; `git diff --check` sin errores.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 17 — bloque de situaciones de Homepage (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió reducir el bloque “Sabemos lo que está enfrentando” a tres situaciones y compactar visualmente sus cards para dar mayor protagonismo al texto.

**Qué se hizo:**
- Se retiró la cuarta situación: “Necesito visibilidad y seguimiento sobre cada caso”.
- El bloque pasó de una retícula de dos columnas a tres columnas en escritorio, dos en tablet y una en móvil.
- Las cards se redujeron a `160px` de alto en escritorio y `150px` en móvil, frente al mínimo previo de `220px/210px` (reducción aproximada de 27–29%).
- Ícono y texto se alinearon horizontalmente con una separación de `12px`; el texto sube dentro de la card y gana protagonismo únicamente por composición. Conserva exactamente el comportamiento de body (`17px`, peso `400`, interlineado `27.2px`).
- El título “Sabemos lo que está enfrentando” se conserva por ahora; su reemplazo semántico queda pendiente de aprobación de Product Lead.

**QA ejecutado:** navegador local en 1440×1000 y 390×844; tres cards confirmadas, alturas `160px/150px`, retícula `3→2→1`, body copy verificado en `17px/400/27.2px`, sin overflow horizontal. `git diff --check` sin errores.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 18 — altura y ritmo editorial del Hero (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió conservar la dirección visual del Hero, pero reducir su ocupación vertical para evitar una percepción de landing page y anticipar el contenido siguiente.

**Qué se hizo:**
- La altura mínima del Hero pasó de ocupar el viewport disponible a `clamp(600px, 72vh, 720px)` en escritorio y `72svh` en móvil.
- Se eliminó el eyebrow “AAA Estudio Legal” del Hero.
- No se modificaron el H1, subhead, CTAs, tratamiento fotográfico, paleta ni composición general.

**QA ejecutado:** en 1440×1000 el Hero mide `720px` y deja aproximadamente `201px` de la sección siguiente visibles; en 390×844 mide `608px` y deja aproximadamente `167px` de continuidad. Acciones completas, eyebrow ausente y sin overflow horizontal en ambos tamaños. `git diff --check` sin errores.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 19 — incremento proporcional de H2 (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió elevar un 15% los H2 de escritorio y un 10% los H2 de móvil, manteniendo intactos los demás niveles tipográficos.

**Qué se hizo:** los ocho H2 narrativos de la Homepage, incluido el CTA final, pasaron de `32px` a `36.8px` en escritorio y de `25px` a `27.5px` en móvil. Los encabezados utilitarios del footer conservan su escala propia.

**QA ejecutado:** valores calculados confirmados en 1440×1000 y 390×844; H1, H3, body y eyebrows sin cambios; sin overflow horizontal. `git diff --check` sin errores.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 20 — iconografía y composición de situaciones (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió situar los íconos encima del texto en todos los breakpoints y revisar su correspondencia semántica con cada situación.

**Qué se hizo:**
- Las tres cards volvieron a composición vertical, con ícono arriba y body copy debajo, separados por `12px` tanto en escritorio como en móvil.
- Se conserva Phosphor Icons mediante SVG individuales: documento para el crédito comprometido, objetivo para evaluar posibilidades reales de recuperación y acuerdo/representación para el acompañamiento integral de la firma.
- No se cargó una librería completa ni se añadieron dependencias, archivos o procesos de compilación.
- El body copy conserva `17px`, peso `400` e interlineado `27.2px`; las cards mantienen `160px` en escritorio y `150px` en móvil.

**QA ejecutado:** posición del ícono sobre el texto y separación de `12px` confirmadas en 1440×1000 y 390×844; tres cards consistentes, sin overflow horizontal. `git diff --check` sin errores.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 21 — padding interno de cards de situaciones (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead detectó que íconos y textos quedaban pegados a los bordes de las tres cards.

**Corrección:** la regla utilizaba `--space-5`, token inexistente en la escala, por lo que el navegador resolvía el padding en `0`. Se reemplazó por `--space-6` (`24px`) y la separación entre ícono y texto aumentó a `--space-4` (`16px`). Las tres cards mantienen una altura visual consistente de `174px` en escritorio y móvil.

**QA ejecutado:** padding calculado de `24px` en los cuatro lados, ícono a `25px` del borde por el trazo de 1px, gap de `16px`, cards consistentes y sin overflow horizontal en 1440×1000 y 390×844. `git diff --check` sin errores.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 22 — refinamiento del header de Homepage (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió equilibrar el header como franja de ancho completo, ampliar su ancho útil y organizar marca, navegación y acciones en tres zonas, sin alterar rutas, copy ni otras secciones.

**Qué se hizo:**
- Se incorporaron los maestros entregados por Product Lead en la carpeta existente `prototype/assets/img/`: isotipo, lettering blanco y lettering azul para un eventual fondo claro.
- La marca del header combina isotipo y lettering blanco como una unidad; el estado futuro `data-header-theme="light"` deja preparado el intercambio al lettering azul sin afectar el estado actual.
- El contenedor interno se amplió de `1200px` a `1440px`, con márgenes laterales fluidos; navegación centrada geométricamente y acciones alineadas al extremo derecho.
- Los enlaces y destinos se conservaron íntegros; el activo mantiene una línea editorial fina.
- El isotipo se revela en tres tiempos durante `1.15s`, una sola vez al cargar. Su caja permanece fija en `42×42px` (`34×34px` en móvil), no bloquea interacción, no responde al hover y `prefers-reduced-motion` muestra directamente el estado final.
- La Home colapsa la navegación a `1180px`, antes de que las tres zonas se compriman; las demás páginas conservan su breakpoint previo de `1023px`. Mobile reutiliza el menú existente, oculta idioma según la regla previa y mantiene el CTA compacto.
- Se añadió una versión de consulta al `src` de `main.js` en Inicio para evitar que el navegador reutilice la lógica responsive anterior durante la revisión local.

**QA ejecutado:** SVGs cargados y verificados; desktop 1440×900 sin solapamientos, navegación centrada y acciones a la derecha; umbral abierto en 1181px y colapsado en 1100px; mobile 390×844 con header/hero sincronizados a `68px`, marca legible, menú funcional y panel a ancho completo. Animación confirmada con una iteración y caja estable; sin overflow horizontal; `git diff --check` sin errores.

**Integridad:** Hero, narrativa, secciones, copy, enlaces y rutas no fueron modificados. Cambios limitados al header de `prototype/index.html`, su capa `.home-page`, la lógica responsive condicional y los tres assets de marca entregados.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 23 — encabezados apilados y casos audiovisuales (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió corregir la composición desplazada de cuatro encabezados y convertir Casos de éxito en una estructura reconocible como evidencia audiovisual, con una franja independiente para logos autorizados.

**Qué se hizo:**
- Eyebrow directamente encima del H2, alineación izquierda y separación constante de `8px` en: Situaciones, Cómo intervenimos, ¿Por qué AAA? y Casos de éxito. Las demás secciones conservan su composición.
- Las tres cards de casos se sustituyeron por cápsulas audiovisuales 16:9, con superficie temporal plana, botón de reproducción sobrio, etiqueta Caso 1–3 y nota breve de contenido pendiente.
- Se eliminó por completo el bloque “Testimonio y cifra destacada / Evidencia pendiente de entrega y validación para publicación”.
- Se creó una franja independiente de logos con seis slots circulares duplicados únicamente para continuidad visual. Cada slot queda preparado para sustituir el `<span>` temporal por un `<img>` real.
- El carrusel usa CSS, recorrido lineal de `32s`, sin rebotes ni aceleración; pausa en hover o foco. Con `prefers-reduced-motion` se detiene, elimina la copia duplicada y presenta los seis slots estáticos.

**QA ejecutado:** cuatro pares eyebrow/H2 alineados y separados `8px`; tres frames calculados en proporción `1.778` (16:9); tres botones de reproducción; 12 slots en movimiento (6 reales + 6 duplicados); pausa por foco confirmada; bloque eliminado; desktop 1440×1000 y mobile 390×844 sin overflow horizontal. `git diff --check` sin errores.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 24 — recurso visual de “¿Qué hace AAA?” (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió compactar únicamente el placeholder de esta sección para evitar que alargara el bloque y recuperar un ritmo más institucional.

**Qué se hizo:** se conserva la estructura de dos columnas y el recurso visual, pero su proporción cambia de `4:5` a `3:2`, con ancho máximo de `540px`, altura máxima de `360px` y alineación vertical centrada respecto al texto. Por debajo de `800px` ocupa el ancho disponible con altura limitada a `320px`.

**QA ejecutado:** desktop 1440×1000: `540×360px`, proporción `1.5` y centros verticales coincidentes (`delta 0px`); mobile 390×844: `343×229px`, proporción `1.5`. Copy, colores y estructura preservados; sin overflow horizontal; `git diff --check` sin errores.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 25 — limpieza visual de Casos de éxito (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió reducir el ruido editorial debajo de las cápsulas audiovisuales y simplificar la franja de logos.

**Qué se hizo:** se eliminaron las etiquetas visibles Caso 1–3 y las tres notas de contenido pendiente; los botones conservan sus nombres accesibles. “Logos autorizados” se renombró a “Logos clientes”, se retiró la nota de autorización y se eliminaron las líneas superior e inferior de la franja.

**QA ejecutado:** tres cápsulas 16:9 preservadas, cero bloques descriptivos visibles, nuevo heading confirmado, bordes superior/inferior calculados en `0px`, copy anterior ausente y sin overflow horizontal. `git diff --check` sin errores.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 26 — Servicios full width y traslado del sistema de cards (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió transformar “Cómo intervenimos” en tres paneles editoriales con fondo visual y trasladar su lenguaje cromático anterior a una composición equilibrada en “¿Por qué AAA?”.

**Cómo intervenimos:**
- Tres paneles contiguos ocupan el ancho útil completo (`1136px` en la prueba de 1440px), sin gaps ni apariencia de slider.
- Altura institucional fija de `420px`; la sección completa calcula `839px`, sin ocupar un viewport completo de 1000px.
- Cada panel conserva número, título y descripción sobre placeholder visual reemplazable, con overlay azul AAA al 70% y texto estable.
- En desktop con puntero fino: expansión relativa mínima (`1.04` frente a `0.98`), escala visual `1.03`, overlay al 60% y transición sobria de `700–900ms`; sin sombras, elevación, glow o rebote.
- `prefers-reduced-motion` elimina transiciones, expansión y escala. Tablet apila paneles de `300px`; mobile, paneles de `260px`, siempre con contenido y overlay visibles.
- El CTA “Conocer nuestros servicios” y su destino permanecen intactos.

**¿Por qué AAA?:**
- Una card principal ocupa dos columnas y dos filas; cuatro cards secundarias cierran un bloque 2×2 sin vacíos.
- La principal mide `556×544px` en desktop y eleva la escala de su H3; las secundarias miden aproximadamente `266×260px`.
- Sistema plano en blanco, azul AAA y azul claro; numeración sans, títulos Playfair, bordes discretos y sombras anuladas.
- Tablet: principal a ancho completo y cuatro secundarias en 2×2. Mobile: cinco cards apiladas sin overflow.

**QA ejecutado:** desktop 1440×1000, tablet 900×900 y mobile 390×844; overlays y legibilidad confirmados, placeholders activos, retículas sin vacíos y sin overflow horizontal. `git diff --check` sin errores.

**Integridad:** no se modificaron copy, números, narrativa, rutas, header, Hero, Casos de éxito ni otras secciones; esta iteración afecta únicamente CSS de los dos bloques solicitados.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 27 — retícula uniforme de “¿Por qué AAA?” (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead aclaró que los cinco atributos tienen la misma importancia y pidió retirar la jerarquía dominante de la primera card.

**Qué se hizo:**
- Cinco cards con ancho, altura, padding, numeración y escala tipográfica equivalentes; altura uniforme de `220px`, frente a los `260/544px` anteriores.
- Desktop amplio: cinco columnas de `208×220px` en la prueba de 1440px.
- Anchos intermedios: composición 3 + 2 centrada mediante una retícula de seis unidades; las cinco cards calculan `258×220px` a 900px.
- Tablet estrecha y mobile: dos columnas; la quinta card se centra manteniendo exactamente el ancho de una columna. En 390px, las cinco calculan `166×220px` y todo el contenido cabe sin recorte.
- Se conserva la alternancia controlada blanco / azul AAA / azul claro, numeración pequeña, títulos Playfair, bordes discretos y sombras anuladas.

**QA ejecutado:** 1440×1000, 900×900 y 390×844; igualdad dimensional confirmada en cada breakpoint, contenido completo y sin overflow horizontal. `git diff --check` sin errores.

**Integridad:** no se añadió ni modificó copy; el cambio afecta únicamente la composición CSS del bloque solicitado.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 28 — footer institucional de Homepage (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió trasladar al cierre de la Homepage el tratamiento B del Visual Language Lab —azul profundo con luz contenida— y ordenar los datos institucionales, comerciales, de talento y redes en una jerarquía más completa.

**Qué se hizo:**
- Footer de la Homepage reconstruido en cuatro bloques equilibrados: marca, contacto principal, contacto comercial/Talento AAA y redes sociales.
- Tratamiento oscuro institucional con transición azul de bajo contraste, una única luz blanca contenida y un solo isotipo ampliado a baja opacidad como firma visual de fondo.
- Logo oficial blanco incorporado; la variante full color queda disponible como activo para futuros estados claros.
- Dirección, teléfono, WhatsApp y correos implementados con SVG individuales de trazo regular, enlaces `tel:`, `mailto:` y acceso directo a WhatsApp con prefijo colombiano.
- LinkedIn e Instagram permanecen identificados como `URL pendiente`; no se inventaron destinos externos.
- Línea inferior independiente con aviso legal, política de privacidad y copyright existente.
- Responsive: cuatro columnas en desktop, dos en tablet y una en mobile; targets táctiles de 44px y foco visible sobre fondo oscuro.

**Integridad:** el cambio se limita al footer de `prototype/index.html`, estilos acotados a `.home-page` y los dos logos entregados por la Product Lead. No se modificaron otras secciones, páginas, narrativa ni rutas existentes.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 29 — Sectores de experiencia y refinamiento editorial del footer (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió retirar la lectura geográfica del bloque de sectores y convertirlo en una prueba de experiencia multisectorial; adicionalmente solicitó reducir el ruido tipográfico del footer aprobado.

**Qué se hizo — Sectores:**
- Eliminados el mapa de Latinoamérica, sus labels flotantes y la referencia “Dónde operamos”.
- Nuevo encabezado editorial en dos columnas con eyebrow, título, descripción y CTA entregados por la Product Lead; el destino del CTA se conserva en `proximamente.html`.
- Dos bandas horizontales con los seis sectores aprobados, sin fotografías ni logos ficticios: la superior avanza hacia la derecha y la inferior hacia la izquierda.
- Fichas planas con borde fino, radio contenido y pictogramas SVG de trazo regular; sin sombras, símbolos jurídicos ni tratamiento de badge SaaS.
- Movimiento CSS continuo de 34 segundos, pausa por hover/foco, duplicado visual oculto a lectores de pantalla y alternativa estática con scroll horizontal para `prefers-reduced-motion`.
- Responsive: encabezado en dos columnas en desktop y apilado desde tablet; fichas compactas en mobile sin truncar nombres.

**Qué se hizo — Footer:**
- “Contacto” pasa a una escala utilitaria más contenida; se retiraron visualmente los encabezados Comercial, Talento y Redes, preservando sus bloques y etiquetas accesibles.
- Redes se integra como una columna informativa plana, sin borde, fondo ni tratamiento de tarjeta.
- Patrón del isotipo fijado en `5%` de opacidad y ritmo interno más silencioso; no se modificaron datos, enlaces ni información de contacto.

**QA ejecutado:** estructura HTML analizada sin IDs duplicados; CSS con llaves balanceadas; `git diff --check` sin errores. La recarga automatizada de la vista `file://` fue bloqueada por la política del navegador local, por lo que la revisión visual final queda disponible para la Product Lead en la pestaña local ya abierta.

**Integridad:** cambios limitados a la sección Sectores y al footer de la Homepage, más su registro. No se modificaron otras secciones, páginas, rutas ni datos de contacto.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 30 — footer de tres columnas y fotografía panorámica de equipo (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió simplificar nuevamente el footer y dar a la fotografía colectiva del equipo la escala necesaria en desktop, sin alterar copy ni el marquee de integrantes.

**Qué se hizo — Footer:**
- Eliminados los dos bloques redundantes “Leads comerciales / info@…” y “Postulaciones / info@…”.
- Retícula desktop reducida a tres columnas reales: logo, información principal de contacto y redes sociales.
- Eliminado el título visible “Contacto”; el bloque conserva una etiqueta accesible y no se modificaron los datos ni enlaces restantes.

**Qué se hizo — Dimensión humana:**
- En desktop, el placeholder de IMG-03 pasa de imagen lateral compacta a fotografía panorámica de ancho completo con proporción `16:7`.
- El texto se conserva completo en una franja editorial inmediatamente debajo de la fotografía, evitando cualquier superposición sobre futuros rostros.
- La banda animada de nombres y cargos permanece intacta debajo del bloque.
- Desde `800px` hacia abajo se recupera la composición apilada anterior, con imagen `4:3`, ancho máximo de `360px` y texto separado.

**QA ejecutado:** los cuatro textos solicitados ya no existen en el footer; HTML sin IDs duplicados; CSS balanceado; `git diff --check` sin errores.

**Integridad:** cambios limitados al footer y al bloque Dimensión humana de la Homepage. No se modificaron copy, integrantes, cargos, marquee ni otras secciones.

**Estado:** ✅ Candidato a revisión de Product Lead — **no aprobado / no publicado**. Gate 1 continúa pendiente.

### Iteración 31 — baseline estable para continuidad del Producer (2026-08-05)

**Decisión de Product Lead:** la versión local consolidada de la Homepage y el Visual Language Lab queda definida como **baseline estable** para que Óscar continúe el trabajo desde la rama `product-lead-ajustes-visuales` en GitHub.

**Estado incluido en la baseline:**
- Visual Language Lab como referencia interna aprobada, con Playfair Display + Instrument Sans, paleta reducida, tratamientos atmosféricos y Phosphor SVG individual.
- Homepage con narrativa exclusiva del acreedor y tres macroservicios, jerarquía tipográfica recalibrada, header institucional, situaciones compactas, servicios full width, atributos uniformes, casos audiovisuales, sectores de experiencia, equipo panorámico y footer institucional de tres columnas.
- Responsive y alternativas para `prefers-reduced-motion` conservadas; arquitectura HTML/CSS/JavaScript nativo sin dependencias ni reorganización de carpetas.

**Pendientes visibles para próximas iteraciones:**
1. Sustituir IMG-03 por la fotografía panorámica definitiva del equipo.
2. Recibir y autorizar los tres casos audiovisuales y logos reales de clientes.
3. Confirmar URLs oficiales de LinkedIn e Instagram; permanecen como placeholders identificados.
4. Confirmar la URL externa definitiva de ADY.
5. Completar validación de Product Lead/cliente para Gate 1; esta baseline técnica no autoaprueba el gate.

**Publicación:** esta sincronización corresponde únicamente a GitHub. No autoriza ni incluye deploy, Cloudflare Pages/Workers, cambios de configuración de Cloudflare o merge a `main`.

### Iteración 32 — carruseles de cards en mobile (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió reducir la altura acumulada de tres bloques de la Homepage en móvil, conservando intactas sus composiciones desktop y tablet.

**Qué se hizo:**
- “Sabemos lo que está enfrentando”, “¿Por qué AAA?” y “Casos de éxito” pasan a carruseles horizontales únicamente hasta `640px`.
- Navegación táctil nativa con `scroll-snap`, vista parcial de la siguiente card como señal de continuidad y scrollbar fino.
- Los tres contenedores son enfocables y admiten navegación horizontal por teclado; el foco utiliza el tratamiento accesible del Design Language.
- Las cards de situaciones mantienen `174px` de altura mínima, las de atributos `210px` y los videos conservan proporción `16:9`.
- No se añadió JavaScript ni una dependencia: se reutiliza el contenido y la estructura existente con CSS progresivo.

**Integridad:** no se modificaron copys, cards, videos, orden de contenido, desktop, tablet ni otras secciones.

**Estado:** ✅ Candidato a revisión de Product Lead — cambio local posterior a la baseline publicada; **no publicado / no desplegado**.

### Iteración 33 — iconografía de atributos “¿Por qué AAA?” (2026-08-05, candidato a revisión)

**Motivo:** la Product Lead pidió reemplazar la numeración utilitaria de las cinco cards por símbolos que comuniquen la intención de cada atributo.

**Qué se hizo:**
- `01` → escudo con confirmación para representación exclusiva del acreedor.
- `02` → dispositivo conectado para tecnología propia (ADY).
- `03` → ubicación conectada para cobertura nacional.
- `04` → equipo de personas para equipo especializado.
- `05` → candado para seguridad de la información.
- SVG individuales de trazo regular, `aria-hidden` porque el título de cada card ya comunica el significado; colores adaptados a las superficies blanca, azul AAA y azul claro.

**Integridad:** no se modificaron títulos, orden, alturas, colores de superficie, retícula desktop ni carrusel mobile.

**Estado:** ✅ Candidato a revisión de Product Lead — cambio local posterior a la baseline publicada; **no publicado / no desplegado**.

### Iteración 34 — segunda baseline estable para continuidad del Producer (2026-08-05)

**Decisión de Product Lead:** los carruseles móviles de situaciones, atributos y casos de éxito, junto con la nueva iconografía semántica de “¿Por qué AAA?”, quedan incorporados a la **baseline estable** que Óscar debe continuar desde `product-lead-ajustes-visuales`.

**Estado consolidado:**
- Homepage y Visual Language Lab permanecen como fuente de verdad visual y narrativa.
- En mobile, los tres grupos de contenido extensos se navegan horizontalmente con scroll nativo y `scroll-snap`; desktop y tablet conservan sus retículas.
- Las cinco razones para confiar sustituyen numeración por pictogramas de protección, tecnología, cobertura, equipo y seguridad.
- No se añadieron dependencias, JavaScript nuevo, carpetas ni cambios de arquitectura.

**Pendientes vigentes para Óscar:**
1. Fotografía panorámica definitiva del equipo para IMG-03.
2. Tres casos audiovisuales y logos reales autorizados por el cliente.
3. URLs oficiales de LinkedIn e Instagram.
4. URL externa definitiva de ADY.
5. Validación final de Product Lead/cliente para Gate 1.

**Alcance de sincronización:** GitHub únicamente. No incluye ni autoriza Cloudflare Pages/Workers, deploy, cambios de configuración, merge a `main` o force push.

**Estado:** ✅ Baseline estable autorizada para sincronización con GitHub — Gate 1 continúa pendiente de aprobación explícita.

## Fase actual

**Fase:** Cierre de C1 y preparación de **Gate 1 — Prototipo**.
**Checkpoint C0:** **APROBADO** (2026-07-23), reportado por el Owner. Congela D0–D16 como base.
**Checkpoint C1:** **APROBADO** (2026-07-23) por el Owner; D17–D20 cerraron jerarquía de conversión, función de ADY, "quiénes somos" y Microsoft Clarity.
**Decisión D21 (Owner, 2026-07-24):** el Owner aprobó explícitamente el copy final de las 7 páginas con contenido (v1 para Nuestra Experiencia, Talento AAA, Noticias y Análisis; v2 corregido por SEO para Inicio, Capacidad Técnica, Nuestro Equipo, Captación de empresas) e instruyó avanzar a la fase de prototipo. Esto **no** aprueba automáticamente los placeholders como contenido final — siguen marcados como pendientes de insumo del cliente (ver Vacíos).

**Estado de esta fase:** sitemap, narrativa, matriz de referentes, marco técnico preliminar y copy de 7/8 páginas quedan **congelados como base aprobada** (D0–D21). El proyecto entra en preparación de Gate 1 — no se ha construido ningún artefacto de prototipo (HTML/CSS/JS) todavía.

### Pre-requisitos identificados antes de construir el prototipo

> Ninguno de estos bloquea per se — se listan para que la decisión de avanzar sea informada, no para detener el trabajo sin motivo.

1. **C2 — interacciones de scroll (D7):** scrollytelling, sticky crossfade y parallax de REFERENTS.md siguen sin definirse. El prototipo puede construirse sin ellas (progressive enhancement, JS mínimo) y añadirlas después, o puede definirse C2 primero. Decisión pendiente de cómo proceder.
2. **Criterios de marca candidatos (D6):** vacíos del manual de marca (área de protección del logo, mal uso, fotografía, iconografía) — D6 dice que se proponen candidatos en C1 y se validan "durante el prototipo". Todavía no se han propuesto criterios candidatos.
3. **Página de captación de empresas (D11):** sigue sin confirmación contractual de Product Lead (Change Request probable) ni nombre final — un prototipo que la incluya la construiría sin ese estatus resuelto.
4. **Contenido pendiente del cliente:** biografía de founders, contenido de Talento AAA (cultura/beneficios/testimonios), casos de éxito estructurados — el prototipo puede usar placeholders visibles como tales, consistente con que el Gate 1 se genera "con contenido actual" (propuesta comercial).
5. **Fotografías/logos:** confirmados como disponibles por el cliente, no entregados todavía — el prototipo probablemente necesita imágenes de marcador de posición mientras tanto.

**Siguiente paso exacto:** confirmar con el Owner si se resuelve primero el punto 1 (C2) o se construye el prototipo directamente con placeholders/JS mínimo por defecto, y si la página de empresas (punto 3) se incluye o se deja fuera hasta su confirmación contractual.

**QA de copy — SEO Manager (2026-07-24):** se recibió `COPYS QA _ COMENTARIOS.docx` con correcciones de copy sobre 4 de las 8 páginas (Inicio, Capacidad Técnica, Nuestro Equipo, Captación de empresas). Incorporado como v2 en [/content/](content/) 01, 02, 04, 06, marcado explícitamente qué texto viene de SEO y qué se conserva de la v1. Nuestra Experiencia, Talento AAA, Noticias y Análisis y Página Legal no fueron tocadas por este documento — siguen con el copy de C1. Efectos notables: (1) cierra el riesgo de citas legales sin verificar en Capacidad Técnica (la v2 ya no las usa); (2) da copy real a "apertura" y "origen" de Nuestro Equipo, dejando solo la biografía de founders como placeholder; (3) agrega sección nueva "Nuestro proceso" en Captación de empresas; (4) introduce el segmento "Pequeño Comerciante" en Servicios, no confirmado antes — señalado para que Product Lead lo verifique si lo considera necesario.

## Agenda — sesión de comprensión y calibración (Product Lead)

> **Histórica — sesión ya realizada, C0 aprobado (2026-07-23).** Se conserva por trazabilidad. El punto 1 (validar el orden D16) quedó superado por decisiones posteriores del mismo día: D17/D18 reemplazan D16 (ver Decisiones en PROJECT.md y "C1 — incidencias" abajo). No se reabre esta agenda.

**Duración:** 20–30 minutos. **Participantes:** Product Lead (obligatorio). Client Relationship — solo si aporta contexto comercial adicional, no como aprobador (el cliente aprueba únicamente en Gate 1 y Gate 2).

**Objetivo de la sesión:** que el Product Lead valide o corrija la ficha C0 candidata y entregue al Producer el criterio suficiente para continuar hacia C1. No es una sesión de aprobación de gate.

**Contenido a cubrir:**
1. **Punto #1 de la agenda (D15/D16, 2026-07-23):** el objetivo principal del sitio pasó de "atracción de talento" a "reconocimiento de marca y showcase de servicios" (D15). El Owner ya reconcilió el orden de conversión con D16: 1) reconocimiento de marca/servicios, 2) formulario de talento, 3) captación B2B, 4) CTA a ADY. Product Lead debe **validar este orden** (no definirlo desde cero) antes de que C1 arranque la narrativa de Home y Talento AAA.
2. Negocio y objetivo (resumen de 2 líneas — reposicionamiento de marca; ver punto 1 sobre la nueva prioridad).
3. Alcance incluido/excluido y los riesgos no cerrados de la 7ª página legal (D2) y la 8ª página B2B (D11) frente a "hasta 6 secciones".
4. Sitemap preliminar (8 páginas) — validar que la lectura del sitemap de la propuesta (slide 6) es correcta, y que Talento AAA ya no encabeza la jerarquía (D15).
5. Referentes visuales (REFERENTS.md): qué interesa de cada uno (referente 01 = autoridad/hero oscuro/indicadores; referente 02 = sistema modular/digital; referente 03 = elegancia institucional/equipo), qué evitar (ver "Qué evitar" de cada referente), y que las interacciones de scroll (scrollytelling, sticky crossfade, parallax) quedan diferidas a C2 (D7) — no se pide validación referente por referente, solo dirección general.
6. Dudas que el Producer necesita que el Product Lead resuelva o escale:
   - **Validar el orden de conversión ya reconciliado (D16) — ver punto 1.**
   - Fricción contractual de la página legal (7ª página, D2) y de la nueva página B2B (8ª, D11) frente a la propuesta — ¿se confirman con Uhura? ¿La página B2B se trata como Change Request formal, o se descarta a favor de alojar el formulario en una página ya vendida?
   - Timeline con 3 cifras distintas entre slides 7/10/11 — ¿cuál se compromete con el cliente?
   - Autoría del blog — sigue PENDIENTE hasta que exista una fuente que la confirme; ¿quién la confirma y cuándo? *(La dirección de oficina ya quedó resuelta por D14 — no se lleva a la sesión.)*
   - Filtración de las 14 áreas de práctica del brochure/sitio actual hacia los 4 focos acordados — ¿algún criterio adicional de filtro más allá de lo ya registrado en Narrativa (PROJECT.md)?
   - Eje narrativo de fundadores: "quiénes somos" (Julián + Angélica) vs. Talento AAA (solo Julián) — ¿se unifica? ¿Dónde queda Jaime Marmolejo?
   - ¿Cómo se reparten los "hasta 3 formularios" entre talento, B2B y cualquier otra necesidad (contacto, newsletter)?
   - Microsoft Clarity (mencionada en el brief ampliado) — ¿se agrega a la analítica contratada (GA4+GTM) o queda fuera?

**Fuera de esta sesión:** no se solicita aprobación individual de cada referente visual, ni aprobación de C0 como gate formal — la sesión es de calibración, no de gate.

Equipo (según instrucción directa del Owner, no proviene de los insumos):
- **Owner** — ejecuta.
- **Product Lead** — aprueba internamente.
- **Content** — hace QA de contenido.
- **Cliente** — aprueba prototipo (Gate 1) y staging (Gate 2).

## Hechos confirmados

- La marca se llama "AAA Estudio Legal"; el monograma AAA nació en 2020, el nombre "Estudio" se adoptó en 2024.
- Colores de marca: azul institucional `#063B59`, gama dorada (`#ECBC8A`, `#CB9576`, `#CA916F`), gris `#D9D9D9`, blanco `#FFFFFF`.
- Tipografía: Big Caslon (principal, serif), Krub (secundaria, sans).
- El cliente da libertad para modernizar la línea gráfica; no exige sujeción literal al manual de marca.
- Stack actual en producción: WordPress + Elementor sobre LiteSpeed.
- Software propio del cliente: ADY (Administered Data for You) — solo referencia/enlace en el nuevo sitio, sin integración técnica.
- Tres valores rectores acordados: innovación con rigor, solidez con tecnología, dimensión humana; tono transversal: dinamismo.
- Acción principal del usuario en el sitio: orientarse hacia "Talento AAA" (atracción de talento por encima de conversión comercial directa).
- El sitio actual es un one-pager bajo el nombre anterior "Agudelo Abogados Asociados", con 14 áreas de práctica listadas — evidencia directa de la dilución de especialización que el proyecto busca corregir.
- Moneda del proyecto: **COP** (pesos colombianos) — confirmado por decisión del Owner, 2026-07-17. El sitio opera en Colombia.

**Nuevos hechos confirmados — Brief visión de la firma AAA Abogados.docx (Sesión 01, 2026-07-17):**
- Razón social: AGUDELO ABOGADOS ASOCIADOS SAS, NIT 901.419.44-5. Nombre comercial: AAA ESTUDIO LEGAL. Fundación: octubre 2020.
- Leads comerciales y postulaciones de talento llegan al mismo correo: `info@agudeloabogados.com`.
- Históricamente confirmó 4 focos (Insolvencia, Normalización de Activos, Derecho Corporativo + Concursal); D24 reemplaza esa estructura por 3 macroservicios e integra Concursal dentro de Defensa de acreedores en procesos de insolvencia. Se mantiene el matiz de tono: normalización de activos debe sentirse "premium", no como cobranza/casa de cobro.
- Servicio de mayor ingreso: insolvencia persona natural no comerciante. No representan deudores, solo acreedores (reconfirma brochure).
- Perfil de comprador B2B: gerente jurídico, director de cartera/riesgo/cobranza, CFO, representante legal; evento activador = la deuda; objeción principal = garantía de recaudo y honorarios vs. deuda.
- ADY: el botón debe llevar directo al portal de login, **sin explicar qué es ADY** — solo transmitir que hay tecnología detrás (refina D10, ver PROJECT.md → D13).
- No existe organigrama, video institucional, ni certificaciones. Sí habrá fotos institucionales/equipo, logos, y casos de éxito en video.
- Founders: la narrativa de "quiénes somos" debe contar la historia de **Julián Agudelo y Angélica Chamorro** (dupla) — no menciona a Jaime Marmolejo en esta instrucción puntual.

## Compromisos contractuales (propuesta comercial)

- Hasta 6 secciones de sitio + prototipo UX/UI + implementación WordPress administrable.
- Hasta 2 CPT (hasta 6 campos c/u), hasta 6 banners, hasta 3 formularios.
- SEO + GEO + performance; capacitación de administración (1 hora); QA en 3 capas + 1 ronda de ajustes post-QA cliente.
- Dos gates formales: Gate 1 (prototipo, ventana cliente 5 días hábiles) y Gate 2 (sitio en URL temporal, hasta 2 rondas de QA cliente).
- Cambios estructurales posteriores a un gate → Change Request (se cotiza, mueve timeline).
- Precio: $6.969.981 COP + IVA (moneda confirmada por decisión del Owner; la slide de la propuesta no la rotulaba explícitamente).
- Explícitamente fuera: integraciones ERP/CRM, funcionalidades a medida, copy extenso, banco de imágenes/fotografía/video, plugins/suscripciones adicionales, mantenimiento post-lanzamiento.

## Contenido institucional existente (brochure — fuente de contenido, no narrativa aprobada)

- Especialización declarada: normalización de activos en procesos de ejecución individual y concursal, representación exclusiva de acreedores (no representa deudores).
- Sectores atendidos: Financiero, Fintech, Solidario, Start-ups, Organismo Público, Salud, Real, CCF.
- Diferenciadores: presencia nacional, seguridad de la información (servidores in-house, firewall, CCTV, plan de continuidad alineado a ISO 27001), ADY como sistema propio, enfoque técnico-jurídico, modelo "CADI" (Centro de Atención al Insolvente).
- **Limitación de inspección:** de 53 páginas del brochure, solo la página 1 tiene texto extraíble con las herramientas disponibles sin instalar dependencias adicionales; el resto es contenido gráfico. Ver REFERENCES.md.

## Hipótesis (no confirmadas, no inventar sobre ellas)

- "Hasta 4 casos de éxito" (mapa de sitio, slide 6) se refiere a la sección Clientes/Experiencia — consistente entre slides pero no está en la tabla de especificaciones técnicas (slide 7).

*(La hipótesis sobre destino de los CPT y la moneda del precio se retiraron de esta lista: la primera quedó formalmente diferida a 03A — Decisión D3 —, no se resuelve por hipótesis; la segunda quedó confirmada como COP — Decisión D4. Ver [PROJECT.md](PROJECT.md) → Decisiones.)*

## Información desactualizada

- El sitio en vivo (agudeloabogados.com) usa el nombre "Agudelo Abogados Asociados" y no refleja el reposicionamiento a "AAA Estudio Legal" adoptado en 2024.
- El brochure usa la dirección "Oficina 701"; el sitio en vivo usa "Oficina 403, Edificio Alcázar" — direcciones distintas, sin resolver cuál es la vigente.

## Contradicciones detectadas

1. **✅ Resuelta (Decisión D5).** Copy: reescritura completa vs. "no incluye copy extenso". El brief (pregunta 5) y la propuesta (slide 6, "UX Writing") piden reescribir todo el texto del sitio en un tono nuevo, mientras las especificaciones técnicas de la misma propuesta (slide 7) excluyen "Copy extenso". El Owner resolvió que no hay una regla fija de longitud: la extensión de cada bloque se define por narrativa, storytelling, claridad y escaneabilidad, evitando relleno. Content hará QA de esto.
2. **✅ Resuelta (Decisión D2).** Página legal no nombrada en brief/propuesta. El Owner autorizó la página legal como obligatoria y adicional, no contabilizada dentro de las 6 páginas principales. *(Queda una nota para Product Lead: confirmar que esta 7ª página no genera fricción contractual con la lectura literal de "hasta 6 secciones" de la propuesta — no bloquea C0.)*
3. **Abierta.** Timeline con cifras distintas dentro de la propia propuesta. Slide 7: "4–6 semanas" (4 efectivas + 2 de aprobación cliente). Slide 10: "4 semanas productivas" (sin contar aprobaciones). Slide 11: "6 semanas laborables" (etiquetada como laborable, no calendario). No es necesariamente contradictorio (podrían ser 4 productivas + 2 de aprobación = 6 calendario), pero la slide 11 rotula esas 6 como "laborables", lo cual sí choca con slide 10. Confirmar la cifra y su etiqueta antes de comprometerla con el cliente. No bloquea C0.
4. **✅ Resuelta (Decisión D14, Owner, 2026-07-23).** Dirección de oficina: había 3 versiones en conflicto (brochure "Of. 701"; sitio actual "Of. 403, Edificio Alcázar"; brief ampliado "Calle 28 Norte #6BIS-26"). El Owner confirmó explícitamente que la dirección real y definitiva es la del brief ampliado: **Calle 28 Norte # 6BIS-26, Barrio San Vicente, Cali, Valle**. Las otras dos quedan descartadas como desactualizadas, no como inventadas.
5. **Abierta (riesgo de proceso, no de contenido; actualizada por D24).** Alcance amplio (brochure/sitio actual) vs. alcance reducido. El portafolio narrativo vigente se limita a 3 macroservicios (Defensa de acreedores en procesos de insolvencia, Normalización de Activos y Derecho Corporativo); Derecho Concursal se integra en el primero. El riesgo persiste porque el brochure seguirá usándose como fuente y podrían filtrarse áreas descartadas si no se aplica el filtro conscientemente.
6. **✅ Resuelta (Decisión D17, Owner, 2026-07-23).** La síntesis previa de Conversión (basada en el brief) establecía que la acción del usuario "no es agendar cita, ni formulario de contacto tradicional... el brief lo descarta implícitamente al priorizar talento sobre lead comercial directo". Esto quedó formalmente invertido y cerrado por D17: la conversión principal del sitio es captar empresas (formulario B2B, ex-D9); el formulario de talento (D8) es secundario y estrictamente contextual — no CTA global, no objetivo central, no equivalente al de empresas. El Owner dio esta instrucción de forma explícita y final ("estas decisiones reemplazan cualquier interpretación anterior contradictoria") — ya no depende de que el brief marque o no una opción; no requiere validación adicional de Product Lead para registrarse, aunque sigue sujeta al mismo flujo de QA de C1 (Content → Producer → Product Lead) antes de "C1 APROBADO".
7. **✅ Cerrada (Decisión D19, Owner, 2026-07-23).** El sitemap y REFERENCES.md establecían a Julián Agudelo como eje narrativo humano único; el brief ampliado pide que "quiénes somos" cuente la historia de Julián Agudelo y Angélica Chamorro juntos. El Owner instruyó crear la **estructura narrativa** de "quiénes somos" ahora, reemplazando el copy más adelante con lo que cuente el cliente. Estructura creada en [content/04-nuestro-equipo.md](content/04-nuestro-equipo.md) (sección "Quiénes somos", dentro de Nuestro Equipo, no página aparte). Se mantiene **separada** del eje narrativo de Talento AAA (Julián solo, inspirado en Brigard Urrutia) — no se fuerza su unificación; Jaime Marmolejo permanece en Nuestro Equipo como parte del equipo, fuera de la dupla fundadora. Copy = placeholder explícito hasta recibir el insumo real del cliente.
8. **Menor, no bloquea (Sesión 01).** N.º de casos de éxito: propuesta dice "hasta 4"; el brief ampliado pide "entre 3 y 5". Diferencia menor, mismo patrón que otras contradicciones de cifras ya registradas (ver #3).
9. **✅ Cerrada (Decisión D20, Owner, 2026-07-23).** El brief ampliado menciona Microsoft Clarity junto a GA4+GTM. El Owner pidió una propuesta y adoptarla sin más ronda de decisión. Propuesta: agregar Clarity como complemento gratuito de GA4+GTM, implementado vía el mismo contenedor de GTM ya contratado (sin plugin nuevo, sin costo, sin Change Request) — ver PROJECT.md → Decisiones D20 y Marco técnico.
10. **✅ Resuelta, con actualización posterior el mismo día.** El objetivo principal del sitio pasó de "atracción de talento" a "reconocimiento de marca y showcase de servicios" (D15), lo que tensionaba con D8 (formulario de talento como acción de conversión principal). Primero se reconcilió con D16 (talento pasaba a secundario, B2B a terciario). **D16 quedó luego reemplazada por D17/D18** (misma tarde): la conversión principal es captar empresas (no "reconocimiento de marca" como acción abstracta), con ADY como su mecanismo destacado; talento queda secundario y contextual. Ver contradicción #6 y PROJECT.md → Decisiones.
11. **✅ Resuelta (Decisión D18, Owner, 2026-07-23).** La función de ADY (D10/D13: botón discreto de solo-login, sin explicar qué es) quedó reemplazada por D18: ADY es ahora el mecanismo destacado de la conversión principal, con CTA "Consulta tu caso aquí", comportamiento tipo botón de e-commerce (sin ser una compra), dirigido a una URL externa a compartir. Se registra como requisito obligatorio del prototipo C2 (accionable, desktop+mobile, estados normal/hover/focus/activado, accesible).

## Vacíos pendientes / preguntas para Product Lead o cliente

De las 8 preguntas originales de B00, 6 quedaron resueltas por decisión explícita del Owner (ver [PROJECT.md](PROJECT.md) → Decisiones D2–D7). Quedan abiertas, **sin bloquear C0**:

- ✅ ~~Dirección de oficina vigente~~ — resuelta por D14 (2026-07-23): Calle 28 Norte #6BIS-26, Barrio San Vicente, Cali.
- **Autoría de las 2 entradas iniciales de blog** (equipo del cliente, Content, o Uhura) — mantenida como PENDIENTE por instrucción explícita del Owner; no inventar nombres ni autores corporativos. Debe definirse antes de implementar o publicar el blog.

**Nuevos vacíos — Brief visión de la firma AAA Abogados.docx (Sesión 01, 2026-07-17), no bloquean C0 pero son críticos para C1:**

- **Crítico.** Casi todo el contenido de **Talento AAA** (objetivo secundario del sitio, D15; formulario secundario y contextual, D17) sigue sin responder: qué hace diferente trabajar en AAA, perfiles que buscan atraer, modalidad de trabajo, beneficios/cultura, qué debe adjuntarse en la postulación, testimonios, qué no prometer. Solo se confirmó el correo de recepción de postulaciones.
- Casos de éxito estructurados (cliente/sector/problema/solución/resultado/publicable) sin llenar — aunque el cliente confirmó que compartirá videos de casos.
- Estatus no aclarado del párrafo narrativo en primera persona sobre servicios (cita Ley 550/1999, 1116/2006, 1564/2012 reformada por 2445/2025) — no se sabe si es borrador de copy, ejemplo de tono, o contenido a validar legalmente antes de usarse.
- "7. Credibilidad" del brief ampliado sin marcar (qué elementos priorizar: clientes, casos, equipo, cobertura, tecnología, cifras, certificaciones).
- ✅ ~~Objetivo principal del sitio sin marcar~~ — ya no es un vacío bloqueante: D17 fijó la jerarquía de conversión de forma explícita y directa, sin depender de esa pregunta del brief (ver contradicción #6, resuelta).

Adicionalmente, quedan agendadas para fases posteriores (no son preguntas abiertas de B00, son entregables futuros ya calendarizados):

- **C1** — criterios candidatos para cubrir los vacíos del manual de marca (área de protección del logo, mal uso, fotografía, iconografía). No son decisiones aprobadas hasta validarse en prototipo.
- **C2** — definición de las interacciones de scroll (scrollytelling, sticky crossfade, parallax) de REFERENTS.md, con JS mínimo, progressive enhancement, fallback y `prefers-reduced-motion`.
- **03A — Arquitectura WordPress** — destino y estructura final de los hasta 2 CPT disponibles, priorizando páginas/posts/bloques nativos.

## Riesgos

- **Riesgo residual de la página legal**: aunque D2 la autoriza y la excluye del conteo de 6, sigue sin confirmarse con Product Lead si esto es fricción con la lectura literal de "hasta 6 secciones" de la propuesta frente a Uhura. Mitigado parcialmente, no cerrado.
- **Riesgo residual de extensión de copy**: D5 da un criterio (narrativa/claridad/escaneabilidad, no un límite fijo), pero sin un techo numérico hay riesgo de que la redacción real se perciba como "copy extenso" en QA de Content. Mitigado por el criterio, pendiente de validarse en la práctica.
- **Filtración de contenido de áreas de práctica descartadas** si el brochure se usa como fuente sin aplicar el filtro de especialización acordado.
- **Confusión de datos de contacto** (dirección, posible teléfono) si no se reconcilia brochure vs. sitio vivo antes de publicar — dirección sigue PENDIENTE por decisión explícita de no inventar.
- **Riesgo técnico controlado**: el cliente da libertad de stack, lo cual es una ventaja, pero implica que ninguna elección de plataforma está aún tomada — cualquier trabajo de implementación prematuro sin decisión registrada en PROJECT.md → Decisiones sería prematuro.
- **Ambición visual (REFERENTS.md) vs. alcance técnico vendido**: mitigado por Decisión D7 (interacciones de scroll diferidas a C2, con principios técnicos ya fijados: JS mínimo, progressive enhancement, fallback, reduced motion). Riesgo no cerrado hasta que C2 confirme factibilidad real en WordPress dentro del alcance de "Homepage custom".
- **Riesgo alto — 8ª página de captación B2B (D11) no contratada**: el Owner autorizó explorarla, pero excede "hasta 6 secciones" además de la página legal ya autorizada (D2). Requiere confirmación de Product Lead y muy probablemente Change Request (cotización, impacto en timeline) antes de tratarse como alcance incluido. No se construye ni se diseña hasta esa confirmación.
- **Riesgo de presupuesto de formularios**: el formulario de empresas (D9/D17) y el formulario de talento (D8) usan 2 de los "hasta 3 formularios" contratados, dejando solo 1 disponible para otras necesidades (contacto general, newsletter, etc.). No bloquea C0, sí debe validarse con Product Lead.
- **✅ Cerrado (D12).** Riesgo de alcance técnico — integración de leads B2B: el Owner confirmó que los leads (talento y empresas) llegan por notificación de correo con opciones nativas de WordPress, sin CRM/ERP. Se mantiene dentro de lo excluido por la propuesta. El plugin/mecanismo concreto queda pendiente de 03A — Arquitectura WordPress.
- ✅ ~~Reversión de la lectura de conversión basada en el brief (D9)~~ — cerrado por D17: el Owner dio instrucción explícita y final ("reemplaza cualquier interpretación anterior contradictoria"), ya no depende de una lectura inferida del brief.
- ✅ ~~Riesgo de dirección de oficina~~ — cerrado por D14.
- ✅ ~~Riesgo D8 vs. D15 sin reconciliar~~ — cerrado, primero por D16 y definitivamente por D17/D18 (misma tarde).
- **Riesgo — vacío crítico de contenido en Talento AAA**: independientemente de su prioridad (ahora explícitamente secundaria, D17), la mayoría de sus preguntas de contenido (cultura, beneficios, testimonios) siguen sin respuesta del cliente. C1 no puede avanzar esta página en profundidad sin ese insumo.
- **Nuevo — dependencia de URL externa de ADY (D18)**: el CTA "Consulta tu caso aquí" dirige a una URL que todavía no se ha compartido. Hasta conocerla, no se puede resolver si el formulario nativo de empresas y ese CTA son el mismo flujo o dos entradas distintas (ver PROJECT.md → Conversión, pregunta abierta).

## Registro de sesión

### B00 — parte 1 (inicialización)

| Ítem | Estado | Nota |
|---|---|---|
| Estructura documental (AGENTS/PROJECT/REFERENCES/STATUS/QA.md, .gitignore) | Candidato — pendiente de lectura por Product Lead | Creada conforme al encargo del Owner; no requiere aprobación de cliente por ser infraestructura de gobierno, no producto. |
| Síntesis de insumos (hechos, compromisos, hipótesis, contradicciones, vacíos, riesgos) | Candidato | Basada en lectura completa de brief, manual de marca y propuesta; brochure con limitación de inspección (ver arriba). |
| REFERENTS.md (moodboard + sitios de interacción) | Candidato | Registrado tal como lo entregó el Owner; no es decisión de diseño. |

### B00 — parte 2 (cierre de decisiones sobre pendientes, 2026-07-17)

| Ítem | Estado | Nota |
|---|---|---|
| 6 de 8 preguntas abiertas | Resueltas por decisión del Owner | Página legal (D2), CPTs (D3), moneda (D4), extensión de copy (D5), proceso para vacíos de marca (D6), interacciones de scroll (D7). Registradas en PROJECT.md → Decisiones. Ninguna aprobada por Product Lead/cliente — son decisiones del Owner sobre cómo proceder, no aprobaciones de producto. |
| Dirección de oficina vigente / autoría del blog | Pendiente | Mantenidas explícitamente como PENDIENTE por instrucción del Owner (no inventar). No bloquean C0. |
| Assets de las 3 imágenes de referencia visual | Resuelto | Guardadas por el Owner en `/inputs/references/` (`REFE_VISUAL_1.jpg`, `_2.jpg`, `_3.jpg`). Defecto D-01 de QA.md cerrado. |
| `git init` | Hecho | Repositorio inicializado 2026-07-17. Sin commits — no solicitados. |
| Ficha C0 | Pendiente | No producida. **No autoaprobada.** Corresponde a **Sesión 01**. |
| Narrativa / diseño / arquitectura WordPress | No iniciado | Fuera de alcance de esta sesión por instrucción explícita del Owner. |

### Sesión 01 (ficha C0, 2026-07-17)

| Ítem | Estado | Nota |
|---|---|---|
| Ficha C0 | Candidata | Producida en PROJECT.md → Ficha C0. **No autoaprobada.** Pendiente de validación de Product Lead. |
| Triangulación vendido/pedido/disponible | Candidata | Nueva tabla en PROJECT.md → Ficha C0, construida sobre las contradicciones ya registradas — no reemplaza el detalle de STATUS.md → Contradicciones detectadas. |
| Agenda sesión de calibración con Product Lead | Preparada | Registrada arriba (§ Agenda). No se solicita aprobación individual de referentes. |
| Narrativa / diseño / arquitectura WordPress | No iniciado | Fuera de alcance de esta sesión — pendiente de la sesión de calibración. |
| Conversión rediseñada (D8–D13) | ✅ Cerrada (histórico) | Registro original de esta sesión, superado por decisiones posteriores del mismo día: la jerarquía final es D17 (empresas=principal, talento=secundario contextual) y D18 (ADY=mecanismo destacado, "Consulta tu caso aquí"). Contradicción #6 ya no está abierta. Ver "C1 — incidencias cerradas". |
| Contraste con `Brief visión de la firma AAA Abogados.docx` | Completo | Documento leído íntegro y contrastado contra PROJECT/REFERENCES/STATUS. Añadió hechos de contacto/negocio, refinó D10 (D13), amplió la contradicción de dirección a 3 vías (#4), y agregó 3 contradicciones/vacíos nuevos (#7 eje narrativo fundadores, #8 n.º de casos, #9 Microsoft Clarity). Ninguna decisión previa fue eliminada. No se avanzó a C1. |

### Sesión 01 — parte 3 (D14/D15, 2026-07-23)

| Ítem | Estado | Nota |
|---|---|---|
| Dirección de oficina | ✅ Resuelta (D14) | Owner confirmó Calle 28 Norte #6BIS-26, Barrio San Vicente, Cali como definitiva. Cierra contradicción #4. |
| Objetivo principal del sitio | Cambiado (D15) | Owner instruyó que talento **no** es el objetivo principal; el principal es reconocimiento de marca + showcase de servicios. Talento pasa a secundario. Reemplaza la lectura previa basada en el brief — registrado, no eliminado. |
| Orden de conversión (D8 vs. D15) | ✅ Reconciliado (D16) | Orden final: 1) reconocimiento de marca/servicios, 2) formulario de talento (D8, reordenado), 3) captación B2B (D9, reordenado), 4) CTA a ADY (D10). Cierra contradicción #10. Pendiente de validación de Product Lead, como el resto de la ficha C0. |

### C1 — sitemap, narrativa, referentes, marco técnico (2026-07-23)

| Ítem | Estado | Nota |
|---|---|---|
| C0 | **Aprobado** | Reportado por el Owner: "Con Product Lead estamos OK hasta este punto". |
| Sitemap con CTA/propósito por página | Candidato | 8 páginas + ADY transversal, ningún CTA duplicado. Ver PROJECT.md → Ficha C1. |
| Narrativa global + outline por página | Candidato | Global en [content/00-narrativa-global.md](content/00-narrativa-global.md); por página en content/01–08. No es copy final. |
| Matriz de referentes (rasgo útil/límite/aplicación/riesgo) | Candidato | 6 referentes sintetizados en PROJECT.md → Ficha C1. No se copió identidad/código de ningún referente. |
| Principios visuales/narrativos propios | Candidato | 6 principios, traducidos de los referentes, no copiados. |
| Marco técnico preliminar | Candidato | WordPress + block theme propio + Gutenberg + theme.json + patterns/template parts + core blocks primero + JS mínimo + CSS por tokens — no reemplaza 03A. |
| C1 APROBADO | **✅ Registrado (2026-07-23)** | El Owner (Producer/Product Lead) aprobó C1 sin ronda separada de QA de Content, para avanzar a copywriting. Ver "C1 — Estado" abajo. |

### C1 — incidencias cerradas (D17, D18 — 2026-07-23, misma tarde)

| Incidencia | Estado | Decisión que cierra | Páginas/secciones afectadas |
|---|---|---|---|
| Jerarquía de conversión ambigua (talento vs. empresas) | ✅ Cerrada | D17: conversión principal = captar empresas; formulario de talento (D8) secundario y estrictamente contextual, solo en Talento AAA | Inicio, Capacidad Técnica, Talento AAA, Captación de empresas — CTAs actualizados en PROJECT.md → Ficha C1 y en content/01, 02, 05, 06 |
| Función de ADY subdefinida | ✅ Cerrada | D18: ADY = mecanismo destacado de la conversión principal, CTA "Consulta tu caso aquí", requisito obligatorio de C2 (accionable, desktop+mobile, estados, accesible) | Inicio, Capacidad Técnica, elemento transversal — detalle en [content/09-ady-cta-c2.md](content/09-ady-cta-c2.md) |

**Decisiones no afectadas (no se reabrieron):** D0–D7, D11, D12, D14, D15. D9 se reafirma con nuevo rango (principal); D8 se reafirma con rango restringido (secundario/contextual); D10, D13, D16 quedan reemplazadas por D18/D17 respectivamente, no eliminadas.

**Verificación de no-contradicción:** revisadas las decisiones vigentes tras D17/D18 — D15 (objetivo del sitio = reconocimiento de marca/servicios) no contradice a D17 (jerarquía de *conversión* = empresas primero): el objetivo de marca se sostiene mostrando servicios, y la conversión que demuestra ese interés real es, precisamente, la consulta de una empresa. No quedan contradicciones abiertas entre D15/D17/D18.

## C0 — Estado

**APROBADO (2026-07-23).** Ficha C0 producida por Sesión 01 en [PROJECT.md](PROJECT.md) → Ficha C0, con D14 (dirección definitiva), D15 (objetivo principal = reconocimiento de marca/servicios) y D16 (orden de conversión reconciliado, vigente al momento de la aprobación). El Owner reportó en este chat que Product Lead validó hasta este punto. Registrado como aprobación, no autoaprobado por ningún agente. *(D16 fue reemplazada esa misma tarde por D17/D18, dentro de C1 — no afecta la validez de la aprobación de C0, que versaba sobre el resto de la ficha.)* A partir de esta aprobación arranca **C1** (ver abajo).

## C1 — Estado

**✅ APROBADO (2026-07-23).** El Owner, en su rol de Producer/Product Lead, confirmó dar por buena la narrativa candidata de C1 (sitemap, narrativa global, matriz de referentes, marco técnico preliminar, D17–D20) sin correr una ronda separada de QA de Content — decisión explícita para poder avanzar a copywriting. Sitemap, narrativa y marco técnico quedan congelados como base; cambios posteriores se registran como nuevas decisiones, no como reapertura silenciosa de C1.

**Copywriting (2026-07-23, misma tarde):** copy candidato redactado para Inicio, Capacidad Técnica, Nuestra Experiencia, Nuestro Equipo, Talento AAA, Captación de empresas y Noticias/Análisis (ver [/content/](content/) 01–07). Alineado a la narrativa global y a D17/D18. Página Legal sin copy (regla D2). Placeholders explícitos (no inventados) en: casos de éxito, biografía de founders en "Quiénes somos", y casi todo el contenido de Talento AAA — todos por falta de insumo del cliente, no por omisión. Pendiente de QA de Content sobre claridad/tono/repetición/afirmaciones sin evidencia en la práctica (no bloquea, ya que C1 quedó aprobado explícitamente sin esa ronda).

### Sesión — ronda de correcciones SEO en Homepage (D27, 2026-08-10)

**Insumo:** `REVISIÓN 2 COPYS HOME.docx` (área de SEO), copiado a `inputs/resources/REVISION-2-COPYS-HOME.docx`. El documento no traía un único texto final por bloque — para 3 de los 4 puntos presentaba dos opciones sin ganador marcado, y para el cuarto sugería una cifra sin evidencia. Se le presentaron las 4 decisiones al Owner explícitamente (AskUserQuestion) en vez de elegir por defecto.

| Ítem | Estado | Nota |
|---|---|---|
| Hero H1 + párrafo | ✅ Cambiado (D27) | El H1 anterior ("Cuando un deudor entra en insolvencia...") abría con "deudor" — SEO señaló riesgo de confusión antes de que el lector entienda que representamos al acreedor. Owner eligió la "Propuesta inicial" del documento sobre "Opción 2" (tuteo) y sobre mantener el H1 anterior. |
| H2 "Situaciones" | ✅ Cambiado (D27) | De "Sabemos lo que está enfrentando." a "¿Eres acreedor y te enfrentas a alguno de estos riesgos?" (Opción B elegida por el Owner). Nota: en STATUS.md (iteraciones previas) hay referencias históricas al título anterior — se conservan como registro, no se editan retroactivamente. |
| Párrafo "Qué hace AAA" | ✅ Cambiado (D27) | Repetía la idea del párrafo del hero; reemplazado por el texto sugerido por SEO. No requirió elegir entre opciones. |
| H2 "Cómo intervenimos" | ✅ Cambiado (D27) | De "Tres formas de acompañar a nuestros clientes" a "Soluciones jurídicas para proteger, normalizar y recuperar activos" (Opción A elegida por el Owner). Esta misma frase ya está en el meta-description de `captacion-b2b.html` (D24) — solapamiento leve de meta-description vs. H2 de otra página, no un H1/H2 duplicado; no bloqueante, queda anotado. |
| H2 "Casos de éxito" | **Rechazado — sin cambio** | SEO sugería un titular con cifra de ejemplo ("+50 casos..."). Sin cifra real aprobada por el cliente, aplicarlo literalmente violaría la regla ya vigente de no inventar métricas/casos (AGENTS.md, REFERENTS.md). El Owner eligió mantener el H2 actual. |

**Archivos tocados:** `prototype/index.html` (4 cambios de copy), `prototype/css/components.css` (comentario descriptivo actualizado para que siga identificando la sección correcta), `content/01-inicio.md` (nueva sección de registro), `PROJECT.md` (D27), `inputs/resources/REVISION-2-COPYS-HOME.docx` (insumo copiado para trazabilidad).

**No se tocó:** `<title>` ni `<meta name="description">` de `index.html` — no estaban señalados en el documento de SEO; tocarlos habría sido ampliar el alcance de esta ronda sin pedido explícito.

### Sesión — ajuste de eyebrow y registro tú/usted en Situaciones (D28, 2026-08-10)

**Motivo:** el Owner revisó el resultado de D27 en navegador y señaló dos cosas: (1) el eyebrow "¿Se identifica con alguna de estas situaciones?" quedaba justo encima del nuevo H2 (también pregunta, por D27) — dos preguntas seguidas; (2) mezcla de tuteo/usted en el copy de Home.

**Aplicado en `prototype/index.html`:**
- Eliminado el `<p class="eyebrow">` de la sección Situaciones (las demás secciones conservan su eyebrow — no se tocaron).
- H2 de Situaciones de tuteo a usted: "¿Es acreedor y se enfrenta a alguno de estos riesgos?" (antes "¿Eres acreedor y te enfrentas...?", que era la Opción B recién elegida en D27).

**Hallazgo al revisar el resto del sitio (informativo, no aplicado):** la mezcla de registro es más amplia que este H2. El CTA global "Consulta tu caso aquí" (D18, fijo, en el header de las 8 páginas) es tuteo, igual que partes de `servicios.html` ("¿Un deudor puso en riesgo tu crédito?"), `captacion-b2b.html` ("Cuéntanos tu caso...") y `nuestro-equipo.html` (sección Talento AAA — audiencia distinta, podría ser intencional). Homogeneizar el registro en todo el sitio tocaría el texto exacto de D18 y no se resolvió aquí — queda como punto abierto para que el Owner decida si quiere abordarlo como una ronda aparte.

### Sesión — homogenización de registro a "usted" en las 8 páginas (D29, 2026-08-10)

**Motivo:** el Owner confirmó explícitamente extender a todo el sitio el ajuste que D28 había hecho solo en Situaciones.

**Inventario y verificación:** se buscó tuteo en las 8 páginas HTML de `prototype/` con varias pasadas de grep (pronombres `tú/tu/tus/te`, verbos en 2.ª persona singular `eres/tienes/puedes/quieres/necesitas/ves`, imperativos `cuéntanos/postúlate`), incluyendo una pasada case-insensitive para no perder mayúsculas de inicio de frase (la primera pasada sí las perdió, corregido antes de editar). Verificación final tras los cambios: 0 coincidencias en `prototype/*.html`.

**Aplicado en las 8 páginas de `prototype/`:**
- CTA global de header: "Consulta tu caso aquí" → "Consulte su caso aquí" (index, servicios, captación B2B, nuestro equipo, noticias-análisis, y las 2 páginas de noticia individual).
- `servicios.html`: hero "¿Un deudor puso en riesgo tu crédito?" → "...su crédito?"; cierre "¿Tu empresa tiene un crédito en riesgo...?" → "¿Su empresa...?"; CTA "Consulta tu caso con ADY" → "Consulte su caso con ADY".
- `captacion-b2b.html`: CTA de hero/cierre (mismo cambio global) + comentario de desarrollo actualizado para citar el texto correcto; cierre "Cuéntanos tu caso y te contactamos..." → "Cuéntenos su caso y le contactamos...".
- `nuestro-equipo.html` (incluye la sección de Postulación, antes Talento AAA): "¿Ves tu carrera en AAA? Cuéntanos quién eres." → "¿Ve su carrera en AAA? Cuéntenos quién es usted."; botón "Postúlate" → "Postúlese"; nota "Al postularte, tu información..." → "Al postularse, su información...". Se aplicó también aquí porque el Owner pidió "todo el sitio" explícitamente, no por inferencia.
- Aviso de cookies ("Puedes conocer más...") → "Puede conocer más..." en las 8 páginas.

**content/*.md actualizado en paralelo** (00, 01, 02, 03, 05, 06, 09) para que la documentación de copy no quede desincronizada de lo implementado. **No se tocó** la cita textual de Brigard Urrutia ("aquí empieza tu historia con nosotros") en `content/05-talento-aaa.md` — es una referencia externa citada, no copy propio.

**No se reabrió ni contradijo:** D18 (función/comportamiento de ADY), D24 (posicionamiento de Servicios/Contacto) y D8/D17 (función del formulario de talento) — solo se actualizó la literalidad exacta del copy que esas decisiones citaban entre comillas. Registrado como D29, no como edición retroactiva de D18/D24/D8/D17.

### Sesión — centralización de ramas: `main` alineado a producción (2026-08-12)

**Hallazgo:** `main` y `product-lead-ajustes-visuales` habían divergido. `main` tenía un commit propio ("feat: agregar botones flotantes 'volver arriba' y chat (responsive)", `02846de`) que **no** estaba en `product-lead-ajustes-visuales` ni en producción. La rama de trabajo tenía 5 commits (incluyendo D27–D29) que no estaban en `main`. Se verificó directamente contra la URL en vivo (`https://aaalegal.design-505.workers.dev/`, vía inspección del DOM, no solo por fecha de build) que **el sitio en producción refleja `product-lead-ajustes-visuales`, no `main`** — confirmado: header CTA "Consulte su caso aquí" y H2 "¿Es acreedor y se enfrenta a alguno de estos riesgos?" presentes en vivo; los botones flotantes de `main` **no** están en vivo. Conclusión: el proyecto de Cloudflare Workers Builds ("aaalegal") despliega a producción desde `product-lead-ajustes-visuales`, no desde `main` — a pesar de que ambas ramas generan un check-run que apunta a la misma ruta `/production/` en el dashboard de Cloudflare (causaba confusión sobre cuál era la fuente real).

**Acción (Owner, 2026-08-12):** se le presentaron dos rutas — (a) dejar `main` exactamente igual a lo que está en vivo, o (b) mergear ambas ramas sin perder el commit de botones flotantes. El Owner eligió (a) explícitamente, sabiendo que implicaba mover el commit de botones flotantes fuera de la punta de `main`.

**Ejecutado con salvaguarda:**
1. Se creó el tag `backup/main-botones-flotantes-2026-08-12` apuntando al commit `02846de` (botones flotantes) y se subió a origin — el commit no se pierde, queda accesible por ese tag.
2. `git push origin product-lead-ajustes-visuales:main --force-with-lease=main:02846de` — reescribe `origin/main` para que apunte exactamente a `986ad36` (mismo commit que `product-lead-ajustes-visuales`), con `force-with-lease` para no pisar ningún push ajeno que hubiera llegado entre el diagnóstico y la ejecución.
3. `main` local actualizado con `git reset --hard product-lead-ajustes-visuales`.
4. Verificado: `git diff main product-lead-ajustes-visuales` vacío (idénticas); ambas ramas apuntan a `986ad36`; el sitio en vivo se re-verificó después de la operación y no cambió (la operación no tocó producción, solo alineó el historial de `main`).

**Pendiente / no resuelto por esta acción:** la funcionalidad de "botones flotantes" (volver arriba / chat) sigue existiendo solo en el tag de respaldo, no en ninguna rama activa ni en producción. Si se quiere recuperar, se puede hacer `cherry-pick` o `merge` de `backup/main-botones-flotantes-2026-08-12` sobre `main` cuando el Owner lo autorice — no se hizo aquí porque no estaba en el pedido explícito ("dejar main justo como está la URL en vivo").

### Sesión — tipografía Big Caslon/Krub del manual de marca (D30, 2026-08-13)

**Pedido:** el Owner instruyó implementar Big Caslon (títulos) y "CRU" (descripciones) según el manual de marca.

**Aclaraciones resueltas antes de tocar código (AskUserQuestion):**
- "CRU" se confirmó como **Krub** — ya usada en este proyecto antes de D22/D26, es la tipografía secundaria del manual de marca.
- Big Caslon **no existe como webfont libre** (es una fuente de sistema de macOS/iOS; nunca se llegó a cargar realmente en este proyecto — se verificó contra el primer commit del repositorio). El Owner eligió **Libre Caslon Display** (Google Fonts, misma familia Caslon, gratuita, render idéntico en el 100% de navegadores) en vez de declarar "Big Caslon" con fallback a Georgia (solo se vería correcto en Mac/iPhone) o de licenciar la fuente original.

**Complicaciones técnicas encontradas y resueltas (verificadas contra la API de Google Fonts antes de implementar, no supuestas):**
- Libre Caslon Display solo trae el corte **400** (sin negrita real, sin itálica real). Pedir peso 500/600 (heredado de D26) habría producido negrita sintética — se bajaron esas declaraciones a 400 en `base.css` y `components.css`.
- `.text-gradient` (el énfasis en degradado dentro del H1 del hero) heredaba `font-style: italic` de `--font-display` — sin itálica real en Libre Caslon Display, el navegador la habría inclinado algorítmicamente (itálica sintética, se ve distorsionada en un serif). Se resolvió declarando `font-family: 'Libre Caslon Text'` (itálica real, misma familia tipográfica) específicamente para esa clase.
- Se quitó el tracking negativo de H1/H2 (`-0.02em`/`-0.03em`), calibrado en D26 para Playfair Display — un serif de época como Caslon se lee mejor sin tracking apretado. Marcado como criterio candidato, sujeto a QA visual.

**Verificación:** se sirvió el prototipo con un servidor estático local temporal y se revisaron las 8 secciones de Inicio con capturas de pantalla — hero (H1 + itálica en degradado), Situaciones, Qué hace AAA, Cómo intervenimos (cards), Por qué AAA, Casos de éxito, Sectores, Equipo (círculos de iniciales JA/AC/JM en Libre Caslon Display 400), cierre y footer. Sin negrita sintética visible, sin itálica distorsionada, sin regresión de contenido (verificado también por `get_page_text`, que coincide con lo que ya estaba en producción). Herramientas de verificación (script de servidor temporal, `launch.json` de esta sesión) no se commitearon — no son parte del entregable.

**No se tocó:** `prototype/type-lab.html` — es el laboratorio histórico que sirvió para aprobar D26; se deja cargando Playfair Display/Instrument Sans a propósito, como registro de esa exploración pasada, no como parte de la tipografía vigente del sitio.

**Siguiente paso sugerido, no ejecutado:** confirmar con Product Lead/cliente si el tracking normal (sin negativo) y el uso de Libre Caslon Display/Text como sustituto de Big Caslon quedan como criterio definitivo, o si el cliente puede proveer una licencia web real de Big Caslon (Adobe Fonts u otra) para una fidelidad de marca más estricta.

### Sesión — se retira CTA redundante en Situaciones (D31, 2026-08-20)

**Pedido:** el Owner señaló, con captura de pantalla, el CTA de texto "Si alguna de estas situaciones le resulta familiar, podemos ayudarle." al final de la sección Situaciones en Inicio, y pidió retirarlo.

**Aplicado:** eliminado el bloque `<p class="reveal">` con ese enlace (apuntaba a `captacion-b2b.html`) en `prototype/index.html`. La sección Situaciones ahora cierra directamente después de las 3 tarjetas. Verificado que no deja la página sin acceso a Captación B2B — el CTA primario del hero ("Hablemos de su caso") ya enlaza ahí. Verificado visualmente con servidor estático local: espaciado correcto, sin markup roto.

### Sesión — Servicios § "Nuestra metodología" rediseñada a flujograma sin scroll (D32, 2026-08-20)

**Pedido del cliente:** "Optimizar metodología: Reducir los espacios entre los módulos de metodología y rediseñar la disposición de los pasos (diagnóstico, estrategia, representación) para que se visualicen como un flujograma sin necesidad de hacer scroll."

**Confusión aclarada primero:** el Owner reportó que la sección "ya no está en Home" y preguntó si se cambió desde otra terminal. Se investigó el historial completo de git (todos los commits, ambas ramas, tags) con `git log -S` sobre `prototype/index.html` y `content/01-inicio.md` — **la sección nunca existió en Home** en este repositorio. Vive en `servicios.html` (coincide textualmente con el pedido: eyebrow "Nuestra metodología", pasos "Diagnóstico"/"Estrategia"/"Representación") y, con copy propio, en `captacion-b2b.html` § "Nuestro proceso" (mismo componente reutilizado, iteración 4, 2026-07-31). Se le presentó esto al Owner con AskUserQuestion antes de tocar código; confirmó aplicar el cambio **solo en Servicios**.

**Qué tenía el diseño anterior (por qué requería scroll):** cada paso reservaba `min-height: 50vh` a propósito, para que la activación del paso "se sintiera como una progresión pausada" (comentario original del código, brief del Owner de 2026-07-31, "Sección Metología - AAA Legal.docx") — con 3 pasos eso son ~1.5 alturas de pantalla completa solo para esa sección, más la columna de título sticky. Un `IntersectionObserver` en `js/main.js` activaba visualmente el paso que cruzaba el centro del viewport.

**Rediseño aplicado en `prototype/servicios.html`:** se reemplaza la estructura de 2 columnas (título sticky + pasos apilados) por un flujograma horizontal de 3 nodos (`.surface-solid`, mismo tratamiento de tarjeta clara sobre fondo oscuro que el resto del sitio) conectados por flechas, con número (01/02/03) + ícono + título + descripción cada uno. En mobile se apilan verticalmente con la flecha rotada a vertical. Todo el contenido es estático — sin `IntersectionObserver`, sin estados que activar, visible completo sin scroll en desktop.

**Decisión técnica: clases nuevas y aditivas, no modificación de las existentes.** `captacion-b2b.html` reutiliza literalmente las mismas clases del stepper original (`.stepper__grid`, `.stepper__intro`, `.stepper__steps`, `.stepper__step`) para su propia sección "Nuestro proceso", que el Owner **no** pidió cambiar. Modificar esas clases en `components.css` habría roto esa página. Se agregaron clases nuevas (`.stepper__flow`, `.stepper__node`, `.stepper__node-index`, `.stepper__node-icon`, `.stepper__connector`) que no colisionan con las anteriores; el CSS y el JS del stepper original quedan intactos.

**Verificación:** servidor estático local — desktop (flujograma completo visible sin scroll, flechas horizontales) y mobile 375px (apilado vertical, flecha rotada). Confirmado por separado que `captacion-b2b.html` sigue funcionando exactamente igual que antes (3 pasos, activación por scroll intacta, sin errores de consola). Ningún archivo de `content/` documentaba esta sección — no requirió actualización paralela.

### Sesión — reversión de D32: se conserva el diseño original, sin scroll y más compacto (D33, 2026-08-20)

**Pedido:** el Owner revisó D32 en vivo y pidió deshacerlo — el diseño de nodos conectados no era lo que quería. Instrucción explícita: mantener el diseño de 2 columnas original (el de 2026-07-31), quitar la activación por scroll, y reducir el espacio entre pasos para que se vean bien en el viewport.

**Aplicado en `prototype/servicios.html`:** se revierte la estructura al `.stepper__grid`/`.stepper__intro`/`.stepper__steps`/`.stepper__step` original (columna sticky + icono/título/párrafo por paso, sin números ni conectores) y se agrega el modificador `stepper--compact` a la sección.

**Aplicado en `components.css`:** se retira por completo el bloque de D32 (`.stepper__flow`/`.stepper__node`/`.stepper__connector`, sin uso ahora) y se agregan 2 reglas nuevas, scoped a `.stepper--compact`:
- `min-height: 0` (antes 50vh) — elimina el alto forzado que obligaba a hacer scroll.
- Override de opacidad/transform para que los pasos no se atenúen fuera de foco — neutraliza visualmente el `IntersectionObserver` de `js/main.js` sin tocar el JS (que sigue observando los pasos de Servicios igual que antes, solo que ya no tiene efecto visible ahí).

**Misma cautela que en D32:** el modificador es scoped — `.stepper__grid`/`.stepper__intro`/`.stepper__steps`/`.stepper__step` vuelven a ser exactamente las clases compartidas originales (sin el modificador no cambia nada), así que Captación B2B § "Nuestro proceso" no se ve afectada. Verificado explícitamente después del cambio: `min-height` de ese stepper sigue en ~50vh y el atenuado por scroll sigue activo.

**Hallazgo de paso (documentado, no corregido):** `.stepper__step` usa `padding-block: var(--space-10)`, un token que no existe en `tokens.css` (la escala llega hasta `--space-8` y salta a `--space-12`) — la declaración es inválida y nunca tuvo efecto, en ninguna de las dos páginas. No se tocó fuera del ámbito de `.stepper--compact` porque no se pidió corregirlo en Captación B2B.

**Verificación:** servidor estático local — desktop (las 3 tarjetas visibles sin dimming, toda la sección cabe holgadamente en un viewport estándar) y mobile 375px (columna única, título ya no sticky por debajo de 800px, igual que el diseño original). Confirmado que Captación B2B no cambió (mismo `min-height` y mismo atenuado que antes de D32/D33). Sin errores de consola en ninguna de las dos páginas.

### Sesión — menú: sin selector de idioma, CTA "Mi caso", logo real unificado (D34, 2026-08-20)

**Pedido del cliente/Owner (3 puntos):**
1. Quitar el selector de idioma "ES · EN" por ahora.
2. Acortar el texto del botón de header "Consulte su caso aquí" a algo corto — sugirió "Mi caso".
3. El Owner notó que el menú de Home es distinto al de las demás páginas; pidió aplicar los cambios en Home y replicarlos al resto.

**Investigación antes de replicar (punto 3):** el diagnóstico inicial ("Home tiene logo real, las demás páginas usan texto plano") resultó incompleto. Al revisar el CSS a fondo, la diferencia real es que **Home usa una arquitectura de header completamente distinta**: barra sólida de ancho completo, grid CSS de 3 columnas, min-height 78px, animación de aparición del isotipo, estilos de botón/enlace propios (`.home-page .site-header__inner`, `.home-page .brand`, etc.) — mientras las 6 páginas interiores usan la "píldora" flotante con efecto vidrio (blur, bordes redondeados, ancho acotado) que es el sistema visual vigente del sitio (D26). Esto se le presentó al Owner con AskUserQuestion en dos rondas (primero para el alcance del logo, luego con el hallazgo de la arquitectura distinta) antes de tocar código.

**Decisión del Owner:** no replicar la arquitectura completa de Home. Se mantiene la píldora flotante en las 6 páginas interiores — es el sistema visual actual (D26), reemplazarla habría sido un cambio de arquitectura, no de contenido. Se unifica **solo el logo**: el texto plano "AAA Estudio Legal" pasa a ser el isotipo + wordmark reales (mismos SVG que usa Home), dimensionados para la píldora (28px el isotipo, 62×31 el wordmark — más compactos que los 42px/92×46 de Home, pensados para una barra mucho más alta). Sin la animación de aparición del isotipo ni el swap claro/oscuro del wordmark de Home: ninguna página activa hoy `data-header-theme="light"` (queda dormido en ambos casos, código preparado para un futuro que no llegó), así que no se agregó esa complejidad en las páginas nuevas.

**Aplicado en 7 páginas** (Home + Servicios + Contacto + Nuestro Equipo + Blog + los 2 artículos): se quitó el `<span class="lang-toggle">` y se acortó `<span class="btn--header-label">` a "Mi caso" en las 7; se reemplazó el wordmark de texto plano por el logo real en las 6 páginas que no lo tenían. **`proximamente.html` se dejó sin tocar a propósito** — es un stub minimalista ("esta página no forma parte de este prototipo") sin menú completo, no le aplica ninguno de los 3 pedidos.

**Decisión técnica:** las reglas CSS nuevas (`.brand__mark`, `.brand__wordmark`, etc.) se agregaron **sin** el prefijo `.home-page` — por especificidad de cascada, `.home-page .brand__mark` (más específico) sigue ganando en Home, así que su tamaño de logo no cambió. Se eliminó `.lang-toggle` de `components.css` por completo (3 reglas: base, breakpoint 560px, variante `.home-page`) al quedar sin ningún uso en el HTML.

**No se tocó:** el CTA de **cuerpo** de página "Consulte su caso aquí" (hero y cierre de Captación B2B, y el similar de Servicios) — el pedido era sobre el botón del menú, no sobre llamadas a la acción dentro del contenido.

**Verificación:** servidor estático local — las 7 páginas en desktop (1440px, nav horizontal, logo+botón en una línea, sin desbordar la píldora) y mobile 375px (logo reducido vía el breakpoint de 560px ya existente, botón colapsado a solo-ícono vía el breakpoint de 480px ya existente, menú hamburguesa funcional). Sin errores de consola en ninguna página.

### Sesión — Home: Sectores antes que Casos de éxito; menú reestructurado (D35/D36, 2026-08-20)

**Pedido (3 puntos):**
1. En Home, "Sectores de experiencia" debe ir antes que "Casos de éxito" (D35).
2. No incluir la sección de Blog en el menú de esta fase; reemplazarla por "Trabaja con nosotros" — el Owner aclaró explícitamente que se refería al **main menú**, no a eliminar la página.
3. Navegación final: Inicio, Metodología, Quiénes somos, Trabaja con nosotros, Mi caso, Blog oculto.

**D35 — reorden en Home:** se movió el bloque completo de "Sectores de experiencia" (antes de "Casos de éxito") sin modificar el contenido de ninguna de las dos secciones — solo su posición. Se renumeraron los comentarios de sección en el HTML (6→Sectores, 7→Casos) para que la documentación en el código siga coincidiendo con el orden real.

**D36 — ambigüedades resueltas antes de tocar código (3 rondas de AskUserQuestion):**
- **"Trabaja con nosotros":** ¿página nueva o ancla a algo existente? El Owner confirmó: ancla a la sección de postulación que ya vive en `nuestro-equipo.html` (`#postulacion-heading`, trasladada ahí desde la antigua Talento AAA en la iteración 5) — no se construyó nada nuevo.
- **"Metodología" y "Quiénes somos":** ¿páginas nuevas o etiquetas nuevas sobre páginas existentes? El Owner confirmó: son renombres de Servicios y Nuestro Equipo respectivamente — mismas páginas, solo cambia el texto del menú.
- **"Contacto" / "Mi caso":** el Owner respondió a la pregunta sobre Contacto/Nuestra Experiencia con una instrucción no prevista en las opciones — "quita el botón de mi caso por ahora pero conserva el de contacto". Como esa frase admitía dos lecturas (¿el mismo botón destacado solo con otro texto, o se elimina el botón destacado y Contacto pasa a ser un enlace normal?), se hizo una pregunta adicional de desambiguación en vez de asumir. Confirmado: es el **mismo botón destacado**, solo cambia el texto de "Mi caso" a "Contacto" — no se elimina el estilo de botón ni se convierte en enlace de texto plano.

**Aplicado en las 7 páginas reales** (Home + Servicios + Contacto + Nuestro Equipo + Blog + 2 artículos):
- Menú `<ul>` regular: **Inicio, Metodología (=Servicios), Quiénes somos (=Nuestro Equipo), Trabaja con nosotros** (ancla a `nuestro-equipo.html#postulacion-heading`). Se quitan de esta lista: Nuestra Experiencia (seguía sin construirse), Blog (oculto, la página sigue existiendo) y Contacto (pasa a ser solo el botón destacado, ya no aparece también como enlace de texto en la lista — antes sí aparecían ambos).
- Botón destacado del header: texto revertido de "Mi caso" (D34) a **"Contacto"**, mismo estilo, mismo destino.
- `aria-current="page"` en Nuestro Equipo queda solo en "Quiénes somos", no en "Trabaja con nosotros" (es un ancla a una sección, no la identidad de la página).

**No se tocó:** el listado de navegación del **footer** ("Mapa del sitio", `<nav class="footer-links">`) en las 7 páginas — sigue con los 6 enlaces y nombres originales (Servicios, Nuestro Equipo, Blog, Contacto). El pedido fue explícitamente sobre "el main menú"; el footer es un elemento de navegación distinto que no se mencionó. Queda para una futura ronda si el Owner también lo quiere unificado.

**Verificación:** servidor estático local. Orden de secciones en Home confirmado programáticamente (`aria-labelledby` de cada `<section>` en `<main>`). Menú verificado en las 7 páginas, desktop (1280px) y mobile (375px, panel `<details>` abierto por JS). El enlace de ancla de "Trabaja con nosotros" se probó navegando directo a `nuestro-equipo.html#postulacion-heading` — aterriza correctamente en el formulario de postulación, con el offset del header ya resuelto (no tapa el título). Sin errores de consola en ninguna página.

### Sesión — se quitan Logos clientes y pills del equipo; texto antes que foto (D37, 2026-08-20)

**Pedido:** el Owner adjuntó 3 capturas de pantalla señalando bloques a quitar de Home, más dos pedidos adicionales de texto.

**Interpretación de las 3 capturas (verificada antes de actuar, no asumida a ciegas):** dos de las tres capturas correspondían a bloques que sí existen hoy en el sitio (franja "Logos clientes" en Casos de éxito; banda de pills del equipo en Dimensión humana) — esos se quitaron. La tercera imagen (una tarjeta "Financiero" con logos de bancos) no podía ser "algo existente a quitar" porque nada así existe hoy en el sitio — coincide en cambio con el pedido posterior del mismo mensaje sobre rediseñar Sectores de experiencia ("anexo ejemplo"). Se trató como referencia de diseño para esa tarea, no como algo a eliminar — ver más abajo, D38 queda pendiente de una aclaración antes de tocar código.

**Aplicado en `prototype/index.html`:**
- Se elimina la franja "Logos clientes" (círculos placeholder "Logo 01"–"Logo 06") de Casos de éxito.
- Se elimina la banda animada de "pills" del equipo (Julián Agudelo, Angélica Chamorro, Jaime Marmolejo) de Dimensión humana. Nota de trazabilidad: esa banda se había agregado explícitamente a pedido del Owner el 2026-08-04 (ver histórico más arriba) — su retiro ahora también es a pedido explícito, no una reversión no solicitada ni un olvido.
- En Dimensión humana, el bloque de texto pasa a ir **antes** que la fotografía — cambio de orden real en el DOM (no solo visual), relevante porque en Home esa cuadrícula colapsa a una sola columna (`.home-page .people-intro { grid-template-columns: 1fr; }`), así que el orden del HTML es exactamente el orden en que se lee/ve.

**Limpieza de código:** se eliminó el CSS de `.client-logo-*` y `.team-marquee`/`.team-pill` (base y variantes `.home-page`, más los ajustes responsive) — confirmado por búsqueda que ninguna de esas clases queda referenciada en ningún HTML del sitio. `.people-card` (contenedor redondeado que envuelve texto+foto) se conserva intacto; se actualizó su comentario explicativo, que hacía referencia a la banda de pills ya retirada.

**Verificación:** servidor estático local — confirmado visualmente que Casos de éxito cierra directo después de las 3 tarjetas de video (sin franja de logos) y que Dimensión humana muestra texto y luego foto, sin pills. Sin errores de consola.

### Sesión — Sectores de experiencia rediseñado: sector + logos en la misma caja (D38, 2026-08-20)

**Pedido:** el Owner adjuntó un ejemplo (tarjeta "Financiero" con logos de BBVA y Banco de Occidente) pidiendo que cada sector muestre, en la misma caja, el sector y los logos de sus clientes — pidiendo explícitamente mantener la coherencia visual y la paleta ya establecidas.

**Aclarado antes de tocar código:** el ejemplo usa nombres de bancos reales. Se le señaló al Owner que el proyecto no tiene ningún cliente real aprobado para asociar a un sector — mismo motivo por el que Casos de éxito (y la franja retirada en D37) eran placeholders. Confirmó explícitamente: placeholders genéricos ("Logo 01"/"Logo 02"), no nombres reales.

**Rediseño aplicado en `prototype/index.html` y `components.css`:** se reemplazan las dos filas de marquee con scroll continuo (solo ícono+nombre por tile) por una **grilla estática de 6 tarjetas** — cada una con ícono, nombre del sector, un divisor, y 2 chips placeholder de logo debajo, en la misma caja. Se reutilizan exactamente los mismos 6 íconos SVG que ya existían (ningún ícono nuevo). Paleta y tratamiento de tarjeta (fondo blanco, borde sutil, radio `--radius-md`, ícono en `--color-accent-main-strong`) igual que el resto del sitio (`.sector-tile` original, `.surface-solid`, etc.) — decisión propia de mantener la coherencia visual pedida, no un diseño desde cero. Se pasó de marquee animado a grilla estática porque, con tarjetas más densas (ícono+nombre+logos en vez de solo ícono+nombre), un desplazamiento continuo habría sido más difícil de leer — mismo patrón responsive (3→2→1 columnas) que ya usa `.focus-grid` en "Por qué AAA".

**Bug propio encontrado y corregido durante la verificación:** al escribir el comentario explicativo de esta decisión, se usó la notación `.sector-marquee*/.sector-tile*` para decir "esas dos familias de clases" — pero `*/ ` es exactamente la secuencia que cierra un comentario en CSS. El comentario se cortaba ahí a mitad de frase, y el resto del texto (más el cierre `*/` real, ahora huérfano) quedaba interpretado como CSS real inválido — lo que invalidaba silenciosamente la regla `.sector-grid` completa (sin ningún error visible en consola: el navegador simplemente no la aplicaba, `display` quedaba en `block` por defecto en vez de `grid`). Se detectó porque la grilla no se veía en columnas al verificar visualmente; el diagnóstico tomó varios pasos (confirmar que el HTML era el correcto, que el servidor devolvía el CSS correcto, que otras reglas del mismo bloque sí aplicaban) hasta aislar la secuencia `*/` accidental dentro del comentario. Corregido reescribiendo el comentario sin esa notación. Se verificó que no hay más casos iguales en todo el archivo (conteo de `/*` y `*/` balanceado: 150 y 150; sin coincidencias de `*/` pegado a texto sin espacio).

**Verificación:** servidor estático local — desktop 1400px (grilla de 3 columnas × 2 filas), ~800px (2 columnas) y mobile 375px (1 columna, apiladas). Confirmado con `getComputedStyle` que `.sector-grid` aplica `display:grid` después del arreglo. Sin errores de consola.

### Sesión — Sectores: corrección de margen + carrusel móvil; Dimensión humana: espacio; nueva sección "En cifras" (D39, D40, D41, 2026-08-20)

**Pedido:** el Owner envió dos capturas anotadas con tres pedidos en un mismo mensaje: (1) la grilla de "Sectores de experiencia" (D38) se estira hasta el margen total de la página, a diferencia del resto del sitio — pidió agregar "el mismo efecto de slide que ya teníamos aquí"; (2) un pequeño espacio entre "Conozca nuestra experiencia →" y la foto en Dimensión humana; (3) un contador animado (conteo ascendente 0→N) con casos gestionados, número de clientes y cartera recuperada debajo de Sectores de experiencia, usando como referencia visual/de animación el sitio de otra empresa ("Meléndez") — cuyas cifras son de esa empresa, no de AAA.

**D39 — desborde de Sectores de experiencia:**
**Investigado antes de tocar código:** se comparó la estructura de `.sector-grid` (D38) con las dos grillas del sitio que sí respetan el margen — `.situations-grid` (Situaciones) y `.case-video-grid` (Casos de éxito) — ambas están envueltas en `.container` dentro de su `<section>`. `.sector-grid`, en cambio, era hijo directo de `<section class="sector-experience">`, sin `.container` (a diferencia de `.sector-experience__header`, que sí lo tiene, en el mismo bloque) — confirmado como causa raíz con `getBoundingClientRect()` antes y después del arreglo (la grilla pasó de tocar los bordes de la ventana de 1920px a alinearse con el margen del encabezado de la sección).
**Aplicado:** se envuelve `.sector-grid` en un `<div class="container">` en `prototype/index.html`. Sobre el pedido "mismo efecto de slide que ya teníamos aquí": el patrón existente en el sitio es `.mobile-card-carousel` (clase ya usada en `.situations-grid` y `.case-video-grid`, activa solo en mobile ≤640px vía `.home-page .mobile-card-carousel` — scroll horizontal con `scroll-snap-type: x mandatory`) — se agrega esa misma clase a `.sector-grid` para que en mobile el comportamiento sea idéntico (swipe horizontal) en vez de apilarse en una columna, igual que las otras dos grillas. Se retira `.sector-experience { overflow: hidden; }` en `components.css` — residuo del antiguo marquee (D38) que ya no cumple ninguna función con el contenido acotado por `.container`.

**D40 — espacio en Dimensión humana:**
Se verificó primero que `.people-intro`/`.people-intro__copy` no se usa en ninguna otra página del prototipo (solo Home) — el cambio es seguro sin scope adicional. La sección usa `.home-page .people-intro { gap: 0; }` (columna única en Home) y ya tenía `padding-top: var(--space-8)` en `.people-intro__copy` para el espacio superior sobre el título; se agrega `padding-bottom: var(--space-6)` al mismo selector, solo en la regla de desktop (en mobile ya existe `gap: var(--space-8)` real entre bloques vía media query, así que no se duplica el espacio ahí).

**D41 — nueva sección "En cifras":**
**Antes de tocar código:** se le señaló al Owner (mismo criterio que D38 y Casos de éxito) que AAA no tiene cifras propias aprobadas para casos gestionados / clientes / cartera recuperada, y que la referencia "Meléndez" muestra cifras de otra empresa que no pueden copiarse. Se preguntó explícitamente con AskUserQuestion si ya había cifras reales aprobadas o si se construía con placeholders — el Owner confirmó placeholders "por ahora".
**Aplicado:** nueva sección `<section class="stats-counter" data-surface="dark">` entre Sectores de experiencia y Casos de éxito, con 3 tarjetas (Casos gestionados, Clientes atendidos, Cartera recuperada). Los tres valores (100 / 50 / $100 M) son **cifras de ejemplo, redondas a propósito para que no se lean como datos reales** — no se inventan cifras de AAA — y cada tarjeta lleva una leyenda visible "Cifra de ejemplo — pendiente de dato aprobado por el cliente" (mismo criterio que "Logo 01"/"Logo 02" de D38 y los IMG-xx pendientes del resto del sitio). El número (`.stat-card__number`) es `aria-hidden="true"` porque su contenido cambia dinámicamente durante la animación — la leyenda visible sí es accesible y ya deja claro que es un valor de ejemplo pendiente, sin necesidad de anunciar cifras intermedias a lectores de pantalla.
Mecanismo de conteo nuevo en `js/main.js`: `data-count-to` (más `data-count-prefix`/`data-count-suffix` opcionales, usados para "$100 M") en cada `.stat-card__number`, disparado por `IntersectionObserver` (mismo patrón que `.reveal`/`.stepper__step`) al entrar en viewport, animado con `requestAnimationFrame` y easing ease-out cúbico (~1.4s). Con `prefers-reduced-motion` salta directo al valor final sin animar — mismo criterio que el resto de animaciones del sitio. CSS nuevo en `components.css`: `.stats-grid` (3→1 columnas, breakpoint 720px) y `.stat-card` (usa los tokens de superficie oscura ya existentes — `--color-border-on-dark`, `--color-accent-on-dark`, `--color-text-on-dark` heredado de `section[data-surface="dark"]` — sin CSS de color nuevo).
**Cuando el Owner entregue las cifras reales:** basta reemplazar `data-count-to` y el texto de la leyenda en `index.html` — la animación funciona igual sobre el dato real, no requiere tocar JS/CSS.

**Verificación:** servidor estático local, desktop (1920px y 1281px) y mobile (375px). Confirmado con `getBoundingClientRect()` que `.sector-grid` ya no toca los bordes de la ventana; confirmado con `getComputedStyle()` que en mobile `.sector-grid` pasa a `display:flex`/`overflow-x:auto` (carrusel) con tarjetas de ~307px de ancho. Contador verificado visualmente llegando a los valores finales (100, 50, $100 M) con la leyenda de "cifra de ejemplo" visible bajo cada uno, en desktop y mobile. Espacio entre el enlace y la foto de Dimensión humana confirmado visualmente. Sin errores de consola en ninguna verificación.

**Nota de herramienta (no es un bug del sitio):** durante la verificación, el navegador del Browser pane quedó en un estado donde las capturas de pantalla devolvían un frame en blanco o mezclado con un frame anterior después de hacer scroll con la pestaña ya usada — confirmado que era un problema del propio Browser pane (los estilos computados vía `getBoundingClientRect`/`getComputedStyle` en esos mismos momentos mostraban el contenido correcto). Se resolvió cerrando la pestaña y abriendo una nueva con `preview_start`, sin relación con el código del sitio.
