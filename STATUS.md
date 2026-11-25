# STATUS.md — Estado del proyecto y síntesis de insumos

> Actualizado: 2026-09-07 (D114, implementación WordPress de las 5 páginas reales + Blog contra el prototipo actual — pendiente de verificación en vivo por el Owner en Local; D113, política de ramas; D112, cierre de GSAP/ScrollTrigger — cierran las dos preguntas pendientes de D111) · **C0 = APROBADO** · **C1 = APROBADO (narrativa + copy, v1 y v2)** · **C2 = dos flujos de trabajo en paralelo, ya unificados en el mismo commit (`1335235`): D1–D98 (este agente) + D99–D109 (Product Lead, rama `product-lead-refinement-v2`: motion GSAP en Home, fotografía temporal de banco, sistema editorial propagado a páginas internas, "Contacto" reestructurado) — GSAP/ScrollTrigger autorizados formalmente en D112; las 3 ramas (`main`, `product-lead-ajustes-visuales`, `product-lead-refinement-v2`) se mantienen abiertas por decisión D113, con `main` como fuente de verdad de producción** · **03A — Arquitectura WordPress = CERRADO (D110, renombrada desde "D99" por la colisión — 2026-09-07): block theme propio + Gutenberg nativo + `theme.json` + Polylang/Contact Form 7/Rank Math; checkpoint de seguridad vigente en el tag `checkpoint-mvp-unificado-2026-09-07`, sobre el commit unificado `1335235` (reemplaza al tag `checkpoint-prototype-estable-2026-09-07`, que quedó desactualizado); ver `WORDPRESS-SETUP.md` y `wp-content/themes/aaa-estudio-legal/`** · Previo, 2026-08-25 (D98) · **C2 = CANDIDATO A REVISIÓN (iteración 27 — retícula uniforme de confianza; + ronda de correcciones SEO, D27; + ajuste de eyebrow/registro tú-usted en Situaciones, D28; + homogenización a "usted" en las 8 páginas, D29; + tipografía Big Caslon/Krub del manual de marca, D30; + se retira CTA redundante en Situaciones, D31; + Servicios § "Nuestra metodología" vuelve a su diseño original de 2 columnas sin scroll y con menos espacio (D33, reemplaza D32 — el flujograma no se conservó); + menú: sin selector de idioma, CTA "Mi caso" (después revertido a "Contacto" por D36, y de vuelta a "Mi caso" por D42), logo real unificado en las 7 páginas (D34); + Home: Sectores de experiencia antes que Casos de éxito (D35); + reestructuración del menú principal — Blog oculto y reemplazado por "Trabaja con nosotros", Servicios→"Metodología", Nuestro Equipo→"Quiénes somos" (D36); + Home: se quitan Logos clientes y las pills del equipo, el texto de Dimensión humana pasa antes que la foto (D37); + Sectores de experiencia rediseñado con logos placeholder de clientes por sector, en grilla estática (D38); + se corrige el desborde de Sectores de experiencia al margen total de la página y se agrega el carrusel móvil que ya usan Situaciones/Casos de éxito (D39); + Dimensión humana: pequeño espacio entre "Conozca nuestra experiencia →" y la foto (D40); + nueva sección "En cifras" con contador animado bajo Sectores de experiencia, valores placeholder (D41); + el texto del botón destacado del header vuelve de "Contacto" a "Mi caso" en las 7 páginas (D42); + hero de Home: se quita el botón secundario "Conozca cómo lo hacemos" y el botón primario ahora hace scroll a "Cómo intervenimos" en vez de ir a la página de contacto (D43); + hero de Home: el texto del botón único cambia a "Conozca cómo lo hacemos"; se reduce el espacio entre título y cards en Situaciones (D44); + los títulos de las tarjetas en Sectores de experiencia y ¿Por qué AAA? pasan de la serif de display a Krub bold (D45); + "¿Por qué AAA?": se reduce el tamaño de los títulos de tarjeta de 1.5rem a 1.3rem, el texto quedaba casi pegado al borde inferior tras pasar a Krub bold (D46); + Home § "Cómo intervenimos": la descripción de cada bloque solo aparece con hover, complementando el efecto ya existente (D47); + Servicios § "Nuestra metodología" se rediseña a flujograma horizontal de 3 nodos conectados sin scroll, pedido nuevo del cliente — reemplaza D33 solo en esta sección, descripciones solo con hover como en D47 (D48); + en el flujograma, ícono al lado izquierdo del título en mobile/tablet ≤800px, en vez de encima, para ahorrar espacio (D49); + en el flujograma, se quita la línea divisoria horizontal entre pasos en mobile/tablet y se reemplaza por la misma flecha de desktop, rotada 90° apuntando hacia abajo (D50); + Home § "¿Por qué AAA?" se reordena y amplía de 5 a 6 atributos (Infraestructura para atención masiva, Equipo especializado, Tecnología (ADY), Seguridad de la información, Compliance, Cobertura nacional), se retira "Representación exclusiva del acreedor", grilla simplificada a 6→3→2 columnas con color alternado en ciclo de 3 (D51); + en desktop, esa misma grilla pasa de 6 columnas en una fila a 3+3 — el título más largo no cabía sin desbordarse (D52); + se reduce el espacio en blanco de cada tarjeta — ícono y título agrupados arriba en vez de estirados a los extremos, alto de card 220px→160px en las 4 vistas responsive (D53); + Sectores de experiencia: ícono + nombre centrado en cada tarjeta (D54); + header full-width de Home replicado idéntico en las 7 páginas reales, reemplaza la píldora flotante de las páginas interiores, revierte esa parte de D34 (D55); + Sectores de experiencia: cada chip de logo lleva una marca abstracta genérica de ejemplo (D56); + el header queda siempre alineado con el texto del hero/título en cualquier ancho de pantalla — header y hero pasan a usar `--container-padding`/`--container-max`; el hero de foto completa de Servicios/Contacto se acota también (confirmado con el Owner), Home no se ve afectada (D57); + Sectores de experiencia: los 12 chips placeholder de D56 se reemplazan por los 15 logos reales de clientes actuales de AAA (aportados por el Owner) — mapeo sector↔cliente confirmado por el Owner para 8, delegado a nuestro criterio para 6 sin encaje sectorial obvio (Neat, Nuestro Fondo, Constructora Meléndez, El Gran Langostino, Ma. Isabel, K-Listo); logos movidos a `assets/img/` plano, `.sector-card__logo` pasa de chip-con-texto a solo imagen (D58); + se quita la línea divisoria entre header y logos, y los logos suben de 40px a 64px de alto — se veían muy pequeños incluso en desktop (D59); + los logos suben otro poco, de 64px a 76px de alto — ajuste fino a pedido del Owner tras ver D59 en vivo (D60); + corrección de un valor de más, 76px→75px (D61); + se crean 2 sectores nuevos ("Construcción e inmobiliario": Constructora Meléndez, Neat; "Comercio y consumo": El Gran Langostino, Ma. Isabel, K-Listo) para los 5 logos que no encajaban bien en los 6 sectores originales de D58 — el sitio pasa de 6 a 8 sectores, párrafo de intro actualizado (D62); + Femcristar pasa de Solidario a Financiero, instrucción directa del Owner (D63); + "¿Por qué AAA?": las 6 tarjetas pasan a formato casi cuadrado y la fila de abajo (Seguridad de la información, Compliance, Cobertura nacional) invierte el orden de color respecto a la fila de arriba — azul oscuro, azul claro, blanco (D64); + se revierte D64 — las cards vuelven a rectangulares, con menos espacio vacío abajo y a la derecha del título, se quita el `max-width:13ch` del título (D65); + "En cifras": se quita la leyenda "Cifra de ejemplo — pendiente de dato aprobado por el cliente" (confirmado con el Owner que entiende el riesgo) y se agrega un ícono por tarjeta encima del número — carpeta, persona, flecha ascendente (D66); + Footer: se agrega la columna "Sitio" entre Contacto y Redes sociales (4 columnas en vez de 3) y se replica idéntico en las 7 páginas reales, reemplazando el footer simple de las 6 páginas interiores — mismo patrón que el header en D55 (D67); + corrige un bug de D67: el heading "Sitio" se veía gigante solo en Home por una regla genérica de tamaño de h2 que no debía aplicarle — se excluye la sección del footer de esa regla (D68); + Servicios § "Nuestra metodología": la descripción de los 3 pasos del flujograma queda siempre visible en desktop (antes solo con hover), y los nodos se alinean con el margen izquierdo del eyebrow/título (D69); + Servicios § "Nuestros servicios": el recuadro de imagen de los 3 bloques baja de 280px a 220px de alto mínimo, aceptando que quede cuadrado — se veía demasiado alto (D70); + corrige D70: el min-height no tenía efecto real (`.media-placeholder` fija `aspect-ratio:4/5` con más peso) — se agrega `aspect-ratio:1/1`, ahora sí queda cuadrado (320×320px) (D71); + nueva página `trabaja-con-nosotros.html`: "Nuestro equipo" y "Postulación" se mueven ahí desde `nuestro-equipo.html`, sin cambios de copy, con header/footer idénticos a las otras 6 páginas — el 4º ítem del menú deja de ser un ancla y pasa a apuntar a la página real (D72); + Servicios § "Transparencia" reusa el diseño de Home § "¿Qué hace AAA?"; se quita "¿Su empresa tiene un crédito en riesgo...?" y se reemplaza por el cierre real de Home, "Conversemos sobre su caso." (D73); + corrige D73: el cierre no coincidía visualmente con el de Home (degradado, halo, botón, tamaño de h2) — nuevo modificador `.cierre-grid--global`, sin tocar la tarjeta propia de Captación B2B (D74); + Quiénes somos: "¿Quiénes somos?" recicla el diseño de Home § "¿Qué hace AAA?" para corregir el desajuste de márgenes; "Filosofía" pasa de texto plano a 3 tarjetas de atributo; se retira el cierre de LinkedIn/Instagram (D75); + se quita el aviso de founders pendientes; se normaliza `.text-gradient` en todo el sitio al color dorado sólido de Home, quitando el degradado no aprobado por el cliente (D76); + se agrega el énfasis en cursiva dorada a los heroes de Quiénes somos y Trabaja con nosotros (criterio de estilo para páginas futuras); en Metodología, "su crédito?" se une con nbsp para quedar siempre en el mismo renglón (D77); + segundo rediseño de Filosofía (las 3 tarjetas de D75 no convencieron, ahora foto + tarjeta sólida con ícono, `.cierre-grid`/`.cierre-card`); se corrige el tamaño del H1 de Quiénes somos/Trabaja con nosotros a 48px, igual que Inicio/Metodología (D78); + Sectores de experiencia: se ensancha la columna derecha del encabezado; se fusionan Financiero+Fintech y Salud+Cajas de compensación — el sitio vuelve a 6 tarjetas en vez de 8, conservando los íconos de Financiero y Salud (D79); + los títulos de las 6 tarjetas bajan un punto de tamaño, a 1.3rem fijo (D80); + los logos de cliente suben un poco más de tamaño, de 75px/190px a 85px/210px (D81, 2026-08-21); + Metodología § "Nuestros servicios" pasa del layout horizontal de 3 bloques a una grilla de 3 columnas tipo blog card (imagen → eyebrow → título → texto), reutilizando `.surface-solid` para conservar el mismo efecto hover del resto del sitio (D82, 2026-08-25); + esa misma sección pierde el fondo con halos difuminados ("atmósfera") y queda sólido #F5F3EE, el mismo tono que ya usaba el fondo base del sitio (D83, 2026-08-25); + en esa sección, los títulos de tarjeta pasan de la serif de display a Krub bold (mismo criterio de D45/D46, evita negrita sintética) y los párrafos bajan de 17px a 15px, corrigiendo que el párrafo se viera más grande que el título (D84, 2026-08-25); + esas mismas 3 tarjetas pierden el brillo radial azul y el borde azul claro del hover, conservando el desplazamiento hacia arriba y la sombra (D85, 2026-08-25); + "Nuestra metodología" (el flujograma de 3 nodos) gana un efecto de entrada al scroll (staggered, vía `.reveal`) y un efecto hover (borde/ícono/título en acento claro + elevación) — se sentía "muy plana" (D86, 2026-08-25); + la sección final de cierre ("Conversemos sobre su caso.") pierde el fondo con halos difuminados y queda sólido #F5F3EE, mismo fix de D83, sin tocar el degradado navy propio de la tarjeta (D87, 2026-08-25); + en Quiénes somos, "¿Quiénes somos?" pasa a fondo #F5F3EE (texto adaptado vía tokens del sitio) y su eyebrow cambia de "Quiénes somos" a "Origen"; Filosofía se rediseña reutilizando el mismo elemento invertido (foto izquierda/texto derecha) y gana un CTA "Hablemos de su caso" (D88, 2026-08-25); + en Trabaja con nosotros, "Nuestro equipo" reutiliza ese mismo bloque "Origen", invertido (foto izquierda/contenido derecha), sin CSS nuevo (D89, 2026-08-25); + esa misma sección pierde el aviso "Contenido pendiente del cliente" — mismo criterio que D76, el vacío documentado sigue vigente (D90, 2026-08-25); + el eyebrow de "Nuestro equipo" cambia a "Equipo por función", repetía el título (D91, 2026-08-25); + nueva sección "Personas, no procesos" con 8 tarjetas flip (imagen+nombre+cargo al frente, descripción de funciones al reverso por hover real o click/tecla), referente ngds.ai/es solo en el patrón de interacción, contenido de las 8 tarjetas placeholder explícitamente autorizado por el Owner (D92, 2026-08-25); + corrección: solo 4 de las 8 tarjetas llevan foto+flip (las 4 personas), las otras 4 son fotografías simples intercaladas sin flip, y se corrige un bug de texto en espejo en el reverso agregando `visibility` como respaldo de `backface-visibility` (D93, 2026-08-25); + el flip baja de 700ms a 350ms y las tarjetas pasan de 3:4 a cuadradas (1:1), para ahorrar viewport (D94, 2026-08-25); + las 4 tarjetas flip dejan el patrón rayado de "foto pendiente" y pasan a azul mate plano con el isotipo de AAA como marca de agua en la esquina superior izquierda, y se pareja el radio de esquina de todas las cajas (D95, 2026-08-25); + la 2ª fila invierte su orden a Imagen/Flip/Imagen/Flip para quedar en damero respecto a la 1ª (D96, 2026-08-25); + se reduce el espacio vertical entre "Nuestro equipo" y "Personas, no procesos" (padding-bottom 160px→64px) y el título de "Postulación" recupera el margen izquierdo estándar de la página (D97, 2026-08-25); + se normaliza el párrafo de hero (subtítulo bajo el H1) al mismo tamaño `var(--text-base)`/1.0625rem en Metodología/Quiénes somos/Trabaja con nosotros, las dos últimas bajan de `--text-md` (D98, 2026-08-25), ver abajo)** · Decisiones vigentes hasta D98; el sitio pasa de 7 a 8 páginas reales (D72). La paleta reducida alineada con marca (D26) reemplaza D22/D23 y sigue aplicada en todo el prototipo; **la tipografía de D26 (Playfair Display/Instrument Sans) fue reemplazada por D30** (Libre Caslon Display/Text + Krub, fiel al manual de marca). La Home incorpora además la traducción compositiva completa registrada en la iteración 15, la escala editorial refinada desde la iteración 16, los ajustes de ritmo/iconografía/header/evidencia hasta la iteración 27, y el copy corregido por SEO (D27–D29, 2026-08-10).

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
- ✅ ~~C2 — definición de las interacciones de scroll (scrollytelling, sticky crossfade, parallax) de REFERENTS.md, con JS mínimo, progressive enhancement, fallback y `prefers-reduced-motion`~~ — resuelto: sin scrollytelling/sticky-crossfade (ver `prototype/README.md` § 5); parallax sutil de hero y motion editorial de Home con GSAP/ScrollTrigger, autorizados en D112.
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

### Sesión — el botón destacado del header vuelve a decir "Mi caso" (D42, 2026-08-20)

**Pedido:** el Owner confirmó que la URL a la que apunta el botón destacado del header corresponde al flujo de la plataforma ADY (intake de casos), del cual todavía no se comparte el enlace real — y pidió que el texto vuelva a "Mi caso" en vez de "Contacto" (D36 lo había revertido a "Contacto" el mismo día).

**Aplicado:** se cambia únicamente el texto del `<span class="btn--header-label">` del botón destacado del header, de "Contacto" a "Mi caso", en las 7 páginas reales (`index.html`, `servicios.html`, `nuestro-equipo.html`, `captacion-b2b.html`, `noticias-analisis.html`, `noticia-normalizacion-activos.html`, `noticia-insolvencia-acreedores.html`).

**No se tocó:** el destino del botón — en Home sigue apuntando a `captacion-b2b.html`, en las 6 páginas interiores sigue apuntando a `#nota-ady`. Ese enlace pendiente ya estaba documentado como conocido desde antes de esta sesión (`prototype/README.md` → tabla de pendientes: "CTA sin destino real — apunta a una nota explicativa, no a la URL externa de ADY, aún no compartida por el cliente"); el pedido de hoy fue solo sobre el texto, no sobre resolver ese enlace, así que se deja igual. Tampoco se tocó el enlace "Contacto" del **footer** (`.footer-links`) — mismo criterio de D36: es un enlace de texto en una lista de navegación, no "el botón".

**Verificación:** búsqueda por archivo confirmando las 7 ocurrencias del span cambiadas a "Mi caso" y que el enlace "Contacto" del footer y el `<title>`/eyebrow de la página de Contacto quedaron intactos (no eran parte del pedido).

### Sesión — hero de Home: un solo botón, ancla a "Cómo intervenimos" (D43, 2026-08-20)

**Pedido:** "vamos a quitar el botón azul del main hero, pero el texto de dicho botón lo vas a reemplazar por 'hablemos de su caso', también crea un ancla en este botón para que al dar clic el usuario vaya directamente a la sección 'Cómo intervenimos'".

**Ambigüedad detectada antes de tocar código:** el hero tiene dos botones — el primario naranja "Hablemos de su caso →" (a `captacion-b2b.html`) y el secundario de borde claro "Conozca cómo lo hacemos" (a `servicios.html`, identificado como "el botón azul" por su borde/color más frío frente al naranja del primario). La instrucción, leída literalmente, era internamente contradictoria: "quitar" ese botón pero también "reemplazar su texto" y "crear un ancla en él" — dos lecturas igual de válidas gramaticalmente: (a) eliminar el botón azul por completo y dejar un solo botón (el naranja, que ya decía "Hablemos de su caso") con la nueva ancla; o (b) conservar ambos botones, pero el azul cambia de texto/ancla y el naranja queda igual — resultando en dos botones con el mismo texto uno junto al otro. Se preguntó al Owner con AskUserQuestion mostrando ambas opciones; confirmó la opción (a).

**Aplicado en `prototype/index.html`:** se elimina por completo `<a class="btn btn--ghost" href="servicios.html">Conozca cómo lo hacemos</a>` del hero. El botón que queda (`.btn--primary`, texto "Hablemos de su caso", sin cambios de texto porque ya era el pedido) cambia su `href` de `captacion-b2b.html` a `#servicios-home-heading` — el `id` ya existente en el `<h2>` de la sección "Cómo intervenimos" (`aria-labelledby="servicios-home-heading"` en el `<section>`). El scroll suave ya existe a nivel global (`html { scroll-behavior: smooth }` en `base.css`, con `prefers-reduced-motion` cayendo a `auto`), así que no hizo falta JS nuevo.

**Consecuencia señalada explícitamente al Owner (no es un descuido):** el hero de Home ya no tiene ningún botón que lleve directo a la página de contacto (`captacion-b2b.html`) — el único CTA del hero ahora es informativo/de scroll interno. El acceso a la página de contacto sigue existiendo por otras vías (botón "Mi caso" del header, footer, CTA final de la página).

**Ajuste de offset del header fijo:** como el header de Home es `position: fixed` (78px de alto en desktop, 68px en mobile ≤640px), un salto de ancla sin compensación dejaría el título (y su eyebrow "Cómo intervenimos") tapado bajo la barra. Se agregó `scroll-margin-top` al `#servicios-home-heading` en `components.css`, calibrado para que también el eyebrow (que va justo encima del `<h2>`) quede visible, no solo el título:
- Desktop: `calc(78px + var(--space-12))` = 126px.
- Mobile ≤640px: `calc(68px + var(--space-16))` = 132px.

**Nota de calibración:** en las primeras pruebas, con márgenes más ajustados (`space-8`/`space-6`), el salto dejaba el título visible pero el eyebrow quedaba parcialmente tapado por el header — un faltante de ~20px consistente entre la posición esperada (`scroll-margin-top` calculado) y la posición real de scroll obtenida, reproducible incluso en pestañas nuevas sin caché, tanto en desktop como en mobile. En vez de perseguir la causa exacta (probablemente relacionada con cómo el entorno de automatización de este Browser pane resuelve el scroll de anclas, no algo específico de este sitio), se aumentó el margen con suficiente colchón hasta confirmar visualmente — con `getBoundingClientRect()` en una pestaña nueva — que tanto el eyebrow como el título quedan completamente visibles debajo del header, en ambos tamaños de viewport.

**Verificación:** servidor estático local, pestaña nueva sin caché (para evitar servir CSS viejo) en desktop (1280px) y mobile (375px). Clic real en el botón del hero probado en desktop, confirmando el scroll a la sección correcta. Sin errores de consola. `grep` confirmó que el botón secundario no queda referenciado en ningún otro lugar del HTML de Home tras el retiro.

### Sesión — texto del botón del hero y espacio en Situaciones (D44, 2026-08-20)

**Pedido:** (1) cambiar el texto del botón único del hero de "Hablemos de su caso" a "Conozca cómo lo hacemos"; (2) captura de pantalla señalando que, en Situaciones, el espacio entre el título "¿Es acreedor y se enfrenta a alguno de estos riesgos?" y las 3 cards es muy grande — pidió reducirlo, sin dejarlo pegado al título.

**Aplicado en `prototype/index.html`:** solo se cambia el texto del botón del hero (el mismo botón fijado en D43, con el mismo `href="#servicios-home-heading"` — sin tocar destino ni comportamiento).

**Aplicado en `prototype/css/components.css`:** el espacio grande en Situaciones venía de `.home-page .section-head { margin-bottom: var(--space-16) }` (64px) — regla compartida por **todas** las secciones de Home con `.section-head` (Situaciones, Cómo intervenimos, Por qué AAA, En cifras, Casos de éxito), no exclusiva de Situaciones. En vez de tocar esa regla compartida (que habría reducido el espacio en las 5 secciones), se agrega un override scoped solo a Situaciones: `section[aria-labelledby="situaciones-heading"] .section-head { margin-bottom: var(--space-8) }` (32px, la mitad — ni tan pegado ni tan separado).

**Verificación:** servidor estático local, desktop (1280px) y mobile (375px). Con `getComputedStyle` sobre los 5 `.section-head` de Home se confirmó que solo el de Situaciones bajó a 32px; los otros 4 siguen en 64px sin cambios. Confirmado visualmente el nuevo texto del botón del hero en ambos viewports. Sin errores de consola.

### Sesión — títulos de Sectores y ¿Por qué AAA? pasan a Krub bold (D45, 2026-08-20)

**Pedido:** dos capturas anotadas con flechas rojas señalando los nombres de sector ("Financiero", "Fintech", "Solidario", "Sector público", "Salud", "Cajas de compensación") y los 5 títulos de tarjeta en "¿Por qué AAA?" ("Representación exclusiva del acreedor.", "Tecnología propia (ADY).", "Cobertura nacional.", "Equipo especializado.", "Seguridad de la información.") — pidió cambiar la fuente de esos títulos a Krub bold.

**Investigado antes de tocar código:** ambos títulos usaban la serif de display (`var(--font-display)` = Libre Caslon Display, peso 400) — `.sector-card__name` en Sectores (D38) y `.home-page .focus-grid h3` en ¿Por qué AAA?. Krub ya estaba cargado con los 4 pesos (400/500/600/700) vía Google Fonts en `index.html` desde D30, así que "bold" no requería agregar ningún peso nuevo.

**Aplicado en `prototype/css/components.css`:** en ambos selectores, `font-family` pasa de `var(--font-display)` a `var(--font-sans)` (Krub) y `font-weight` de 400 a 700. Cambio acotado a esos dos selectores — no se tocó la fuente de display en ningún otro título de Home ni de las demás páginas.

**Verificación:** servidor estático local, desktop (1280px) y mobile (375px), en ambas secciones. Confirmado visualmente el cambio a sans-serif bold. Sin errores de consola.

### Sesión — "¿Por qué AAA?": se baja el tamaño de los títulos de tarjeta (D46, 2026-08-20)

**Pedido:** captura anotada con una flecha roja señalando que, en "¿Por qué AAA?", el texto de las tarjetas (p. ej. "Representación exclusiva del acreedor.") llega al borde de la caja — el Owner propuso dos alternativas: agregar padding, o bajar un poco el tamaño de la fuente.

**Investigado antes de tocar código:** el padding de las cards (`.home-page .focus-grid > .surface-solid`, `var(--space-8)` = 32px) no había cambiado — la causa real era el cambio de fuente de D45 (misma sesión, resuelta unos minutos antes): Krub bold es más ancha por carácter que la serif que reemplazó, así que al mismo tamaño (1.5rem) y `max-width: 13ch`, un título como "Representación exclusiva del acreedor." pasó de envolver en 3 líneas a 4 — esa línea extra no cabía dentro del alto fijo de la card (`grid-auto-rows: 220px`) sin quedar muy cerca del borde inferior.

**Aplicado en `prototype/css/components.css`:** se eligió la opción de bajar la fuente (ataca la causa — menos líneas — en vez de solo compensarla con más padding, que habría reducido aún más el espacio útil). `font-size` baja de 1.5rem a 1.3rem en `.home-page .focus-grid h3` y en el selector duplicado `.home-page .focus-grid > :first-child h3`. No se tocó el breakpoint mobile (≤560px), que ya tenía su propio tamaño (1.25rem) independiente de este ajuste.

**Verificación:** servidor estático local, desktop (1280px). El título de la primera tarjeta volvió a 3 líneas; con `getBoundingClientRect()` se confirmaron ~49px de aire entre el final del texto y el borde inferior de la card (antes prácticamente lo tocaba). Sin errores de consola.

### Sesión — "Cómo intervenimos": descripción solo visible en hover (D47, 2026-08-20)

**Pedido:** el Owner confirmó que le gusta el módulo (efecto hover + diseño) de "Cómo intervenimos" (`.focus-mosaic`, 3 bloques oscuros con degradado), y pidió específicamente que la descripción de cada bloque solo aparezca al hacer hover sobre ese bloque, ocultándose al retirar el mouse — para "complementar el efecto que ya tenemos" (el flex-grow/zoom/oscurecimiento que ya existía en `@media (hover: hover) and (pointer: fine) and (min-width: 1024px)`).

**Aplicado en `prototype/css/components.css`, dentro del mismo media query que ya guardaba el resto del efecto:** `.home-page .focus-mosaic .surface-visual__caption p` arranca en `opacity: 0` + `translateY(6px)`, con transición de 400ms usando el mismo `--motion-ease` del resto del componente; pasa a visible en `:hover` y `:focus-within` del `.surface-visual` contenedor. Se agregó `:focus-within` (no solo `:hover`) siguiendo el mismo patrón que ya usa `.surface-visual` genérico en otras partes del sitio, por si en el futuro se agrega algún elemento enfocable dentro del bloque.

**Decisión importante de accesibilidad (no pedida explícitamente, pero necesaria):** el ocultamiento queda **acotado al mismo guard de hover real** que ya usaba el resto del efecto (`(hover: hover) and (pointer: fine) and (min-width: 1024px)`) — en touch/mobile/tablet no existe un gesto de "hacer hover", así que si se ocultara ahí también, la descripción quedaría inaccesible sin ninguna forma de revelarla. La descripción se queda siempre visible en esos dispositivos. También se agregó una regla dentro de `@media (prefers-reduced-motion: reduce)` (que este componente ya tenía) para que ahí la descripción también quede siempre visible y sin transición — mismo criterio que el resto de animaciones del sitio: sin movimiento, ningún contenido debe depender de un gesto para aparecer.

**Verificación:** servidor estático local. A 1280px: `getComputedStyle` confirmó `opacity: 0` antes de interactuar y `window.matchMedia(...).matches === true` para el guard; hover real sobre el primer bloque reveló su descripción mientras los otros dos se mantuvieron ocultos, junto con el efecto de flex-grow/zoom ya existente. A 375px (mobile): `getComputedStyle` confirmó `opacity: 1` sin necesidad de interacción. Sin errores de consola.

### Sesión — Servicios § "Nuestra metodología": flujograma sin scroll (D48, 2026-08-20)

**Pedido:** el cliente (vía el Owner) pidió que "Nuestra metodología" quepa en una sola pantalla sin necesidad de scroll — Diagnóstico, Estrategia y Representación visibles en el mismo módulo — e "idealmente, si se logra de manera visual", que se vea como un flujograma.

**Verificación de historial antes de tocar código:** esta es la misma sección donde, más temprano el mismo día, se había probado un flujograma de nodos conectados (D32) que el Owner pidió revertir (D33) — se le señaló explícitamente esta historia con AskUserQuestion antes de proceder, para no repetir por error algo ya rechazado. Confirmó que este es un pedido nuevo e intencional del cliente. Segunda pregunta: cómo mostrar las 3 descripciones sin acortar el copy real para que quepan sin scroll — confirmó reutilizar el patrón de D47 (aparecen solo con hover/foco), en vez de reescribir los párrafos a versiones resumidas.

**Aplicado en `prototype/servicios.html`:** el modificador del `<section>` pasa de `stepper--compact` (D33) a `stepper--flowchart`. Se agregan 2 elementos `<span class="stepper__connector" aria-hidden="true">` (flecha SVG) entre los 3 `<article class="stepper__step">`, sin tocar el contenido/copy de los pasos.

**Aplicado en `prototype/css/components.css` (nuevo bloque `.stepper--flowchart`, después del bloque `.stepper--compact` de D33, sin modificarlo):**
- Base (mobile-first): `.stepper__grid` a 1 columna, `.stepper__intro` estático (ya no sticky), `.stepper__steps` apilado verticalmente, conectores ocultos — mismo criterio de D33 (sin atenuado por scroll, min-height:0).
- Desde 801px: `.stepper__steps` pasa a fila horizontal; cada `.stepper__step` se centra (ícono en círculo + título, sin párrafo visible); los conectores se muestran como flechas entre nodos.
- Desde 801px **y** con hover real (`(hover: hover) and (pointer: fine)`): `.stepper__step p` pasa a `position: absolute` bajo el nodo, oculto (`opacity: 0`, `pointer-events: none`) por defecto, y aparece como popover (fondo propio, borde, sombra) en `:hover`/`:focus-within` del nodo — mismo timing de transición que D47. Al ser `position: absolute`, no empuja ni desplaza el resto del contenido de la página al aparecer.
- Desde 801px **sin** hover real (`(hover: none)` o `(pointer: coarse)` — p. ej. una tablet en horizontal): la descripción vuelve a mostrarse siempre, en flujo normal (no depende de un gesto inexistente).
- `prefers-reduced-motion: reduce`: sin transición en el párrafo (igual criterio que el resto del sitio).

**No se tocó:** `.stepper__grid`/`.stepper__intro`/`.stepper__steps`/`.stepper__step` base, ni `.stepper--compact` (D33, que ya no se usa en esta página pero se deja intacto en el archivo por si se necesita revertir). Captación B2B § "Nuestro proceso" usa el mismo componente sin el modificador `.stepper--flowchart` — verificado explícitamente con `getComputedStyle` que conserva `flex-direction: column` y `min-height: 450px` (su comportamiento original, D33 tampoco la afectaba).

**Nota de herramienta:** el hover simulado por coordenadas de pantalla del Browser pane no siempre corresponde 1:1 con la posición real del elemento tras un `scrollIntoView` (se detectó comparando `document.querySelectorAll(':hover')` contra el elemento esperado) — se resolvió tomando una captura fresca inmediatamente antes de cada hover y usando esas coordenadas, en vez de coordenadas calculadas a partir de un `getBoundingClientRect()` de un momento distinto. No es un problema del sitio.

**Verificación:** servidor estático local. Desktop (1280px): captura confirma los 3 nodos completos (título + ícono + flechas) visibles sin scroll, dentro de una sola pantalla; hover real sobre "Diagnóstico" reveló su descripción completa en el popover, sin desplazar el layout; al retirar el mouse, se ocultó de nuevo. Mobile (375px): lista vertical con las 3 descripciones siempre visibles, sin conectores. Sin errores de consola.

### Sesión — flujograma: ícono al lado del título en mobile/tablet (D49, 2026-08-20)

**Pedido:** captura del flujograma de D48 en vista mobile/tablet, señalando que el ícono ocupaba su propia línea encima del título ("Estrategia", "Diagnóstico") — pidió mover el ícono al lado izquierdo del texto del título para ahorrar espacio, solo en esa vista (mobile/tablet), sin tocar el diseño de nodo circular ya aprobado en desktop.

**Aplicado en `prototype/servicios.html`:** se envuelve el `<span class="stepper__icon">` y el `<h3>` de cada uno de los 3 pasos en un nuevo `<div class="stepper__step-head">` — cambio de markup exclusivo de esta página (el componente base compartido con Captación B2B no tiene este wrapper, así que no se ve afectado).

**Aplicado en `prototype/css/components.css`:** en la regla base de `.stepper--flowchart` (sin media query, aplica en mobile/tablet ≤800px), `.stepper__step-head` es `display: flex; align-items: center; gap: var(--space-3)` — ícono y título quedan en la misma fila, con el margin-bottom que antes tenía el ícono movido al wrapper. Desde 801px, `.stepper__step-head` vuelve a `flex-direction: column` dentro del media query existente de D48, restaurando exactamente el diseño de nodo circular centrado (ícono arriba, título abajo) sin ningún cambio visual en desktop.

**Verificación:** servidor estático local. Mobile (375px) y tablet (768px): ícono y título en la misma línea en los 3 pasos, con menos alto total por paso. Desktop (1280px): sin cambios visuales respecto a D48 (nodo circular centrado). Sin errores de consola.

### Sesión — flujograma: flechas verticales en vez de líneas divisorias en mobile/tablet (D50, 2026-08-20)

**Pedido:** captura de la vista mobile/tablet del flujograma (D48/D49) señalando que la línea divisoria horizontal entre pasos rompía la sensación de "flujograma" — preguntó si se podían quitar esas líneas y usar líneas verticales, o las mismas flechas que ya tiene la versión desktop.

**Decisión de diseño:** se reutilizan las flechas ya existentes (`.stepper__connector`, en el HTML desde D48 pero con `display:none` en mobile) en vez de dibujar líneas verticales nuevas — mismo elemento visual (la flecha SVG `M4 12h14M13 6l6 6-6 6`) en las 3 vistas del componente, solo con distinta rotación, más consistente que introducir un elemento gráfico nuevo.

**Aplicado en `prototype/css/components.css`:**
- `.stepper--flowchart .stepper__step` pierde su `border-top` (override con más especificidad que la regla compartida del componente base; esa regla base no se toca, sigue intacta para Captación B2B).
- `.stepper--flowchart .stepper__connector` pasa de `display: none` a visible, centrado horizontalmente entre los pasos apilados.
- `.stepper--flowchart .stepper__connector svg` usa el mismo tamaño reducido (1.25rem) con `transform: rotate(90deg)` — la flecha horizontal (→) pasa a apuntar hacia abajo (↓).
- Dentro del `@media (min-width: 801px)` que ya sobrescribe `.stepper__connector` para la fila horizontal de desktop, se agrega `transform: none` al SVG, para que la rotación de mobile no se herede ahí (las flechas de desktop siguen horizontales, sin cambios).

**Verificación:** servidor estático local. Mobile (375px) y tablet (768px): sin línea divisoria, flecha apuntando hacia abajo entre cada par de pasos consecutivos (Diagnóstico→Estrategia, Estrategia→Representación). Desktop (1280px): flujograma horizontal sin cambios respecto a D48/D49. Sin errores de consola.

### Sesión — Home § "¿Por qué AAA?": reorden y ampliación a 6 atributos (D51, 2026-08-21)

**Pedido:** reordenar los atributos de "¿Por qué AAA?" izquierda→derecha así: Capacidad para atender masivamente con infraestructura y personal (pidiendo revisar el texto para que se transmita "bonito" o más corto), Equipo especializado, Tecnología (Ady), Seguridad de la información, Compliance, Cobertura nacional.

**Análisis antes de tocar código:** la sección tenía 5 tarjetas (Representación exclusiva del acreedor, Tecnología propia (ADY), Cobertura nacional, Equipo especializado, Seguridad de la información). La lista nueva tiene 6 ítems: no incluye "Representación exclusiva del acreedor" (se retira) y agrega dos nuevos ("Infraestructura para atención masiva" y "Compliance").

**Texto del primer atributo:** se presentaron 3 opciones cortas con AskUserQuestion, siguiendo el mismo tono del resto (sustantivo + punto, sin verbo conjugado): "Infraestructura para atención masiva.", "Capacidad de atención a gran escala.", "Atención masiva con infraestructura propia." — el Owner eligió la primera.

**Íconos:** en vez de crear 2 íconos nuevos, se reutilizó el ícono de escudo+check que antes tenía "Representación exclusiva del acreedor" para la nueva tarjeta "Compliance" (el concepto de verificación/certificación es prácticamente el mismo). Solo "Infraestructura para atención masiva" recibió un ícono genuinamente nuevo: un rack de servidores (3 barras horizontales con un indicador circular cada una), consistente con el estilo del resto (SVG 256×256, stroke 14, trazo redondeado). Los 4 atributos restantes (Equipo, Tecnología/ADY, Seguridad, Cobertura) conservan su texto e ícono existentes, solo se reordenan.

**Rediseño de la grilla (`prototype/css/components.css`):** con 6 tarjetas (número par) ya no hacía falta el mosaico asimétrico de spans/offsets por posición que exigía el conteo impar de 5 (D24) — se reemplaza por una grilla regular: 6 columnas ≥1200px, 3 columnas 801-1199px, 2 columnas ≤800px (y carrusel horizontal ≤640px vía `.mobile-card-carousel`, sin cambios en ese mecanismo). El color alternado (blanco / navy-deep / azul claro) pasa de estar hardcodeado a las posiciones 2/3/5 de la lista de 5, a un ciclo de 3 vía `:nth-child(3n+2)` (navy-deep) y `:nth-child(3n)` (azul claro) — con esto, el ritmo visual (1 de cada 3 tarjetas en cada color) se mantiene automáticamente sin importar cómo se reordenen las tarjetas en el futuro. Se limpiaron las reglas duplicadas de `:first-child h3` que ya no aportaban nada distinto de la regla base, y la referencia sobrante a `:nth-child(5)` en el bloque del carrusel móvil (redundante, ya cubierta por `.surface-solid`).

**Nota de herramienta:** el Browser pane no pudo tomar capturas de pantalla en este turno ("the Browser pane is not displayed") — se verificó en su lugar con `getComputedStyle`/`getBoundingClientRect()` vía JavaScript, cubriendo lo mismo que una inspección visual habría mostrado.

**Verificación:** servidor estático local, vía JavaScript en 4 anchos de viewport. 1280px: 6 tarjetas en una fila, orden y textos correctos ("Infraestructura para atención masiva." → "Equipo especializado." → "Tecnología propia (ADY)." → "Seguridad de la información." → "Compliance." → "Cobertura nacional."), colores en el ciclo esperado (blanco/navy/azul/blanco/navy/azul). 1000px: 3 columnas × 2 filas. 700px: 2 columnas × 3 filas, sin tarjeta sobrante descentrada. 375px: carrusel horizontal con las 6 tarjetas del mismo ancho (308px). Íconos verificados con dimensiones y cantidad de elementos hijos esperada (el ícono nuevo de servidores con 6 elementos: 3 rects + 3 circles; el ícono reutilizado de escudo+check con 2 paths). Sin errores de consola.

### Sesión — Home § "¿Por qué AAA?": desktop pasa a 3+3 en vez de 6 en una fila (D52, 2026-08-21)

**Pedido:** captura mostrando la grilla de 6 tarjetas en una sola fila (D51) con el título "Infraestructura para atención masiva." desbordándose fuera de la card ("Infraestructur..." cortado) — el Owner pidió pasar a 3 arriba + 3 abajo, aclarando explícitamente que reducir más el tamaño de fuente no era una opción (ya se había bajado una vez en D46 por un problema de espacio similar).

**Aplicado en `prototype/css/components.css`:** el breakpoint intermedio que D51 ya tenía para 801-1199px (3 columnas) se convierte en el layout **por defecto** de `.home-page .focus-grid` (sin media query), en vez de solo activarse por debajo de 1199px. Se elimina el bloque `@media (max-width: 1199px)` que quedó redundante (ya no hay una versión "ancha" distinta que sobrescribir). Sin cambios en el breakpoint de 2 columnas (≤800px) ni en el carrusel móvil (≤640px).

**Verificación:** servidor estático local. 1280px: captura confirma 2 filas de 3 tarjetas (Infraestructura/Equipo/Tecnología arriba, Seguridad/Compliance/Cobertura abajo), con el color alternado (blanco/navy/azul) manteniéndose consistente por fila; el título de "Infraestructura para atención masiva." se lee completo, sin desbordarse. 700px: `getComputedStyle` confirma que sigue en 2 columnas, sin cambios respecto a D51. Sin errores de consola.

### Sesión — Home § "¿Por qué AAA?": se reduce el espacio en blanco de las tarjetas (D53, 2026-08-21)

**Pedido:** captura anotada con recuadros negros señalando el vacío grande entre el ícono y el título, y entre el título y el borde inferior de la card "Infraestructura para atención masiva." — pidió reducir esos espacios para que el módulo no llenara el viewport con elementos tan grandes.

**Causa investigada antes de tocar código:** estas 6 tarjetas solo tienen ícono + título (nunca tuvieron párrafo), pero el contenedor (`.home-page .focus-grid > .surface-solid`) usaba `justify-content: space-between` dentro de una card de alto fijo (220px) — eso estiraba el ícono al extremo superior y el título al extremo inferior, dejando el vacío señalado en la captura en vez de agruparlos.

**Aplicado en `prototype/css/components.css`:**
- `justify-content: space-between` → `flex-start`, más `gap: var(--space-4)` entre ícono y título (quedan agrupados arriba con una separación chica, no estirados a los extremos).
- `.home-page .focus-grid h3`: se quita el `margin-bottom` (ya no hacía falta — el título es el último elemento visible de la card).
- Padding de la card: `var(--space-8)` → `var(--space-6)`.
- Alto de card reducido de 220px a 160px en las 4 vistas responsive: desktop (3+3, D52), tablet ≤800px, ≤560px, y el carrusel móvil ≤640px (antes 210px ahí).

**Bug de especificidad encontrado y corregido durante la verificación:** una regla combinada más abajo en el archivo, `.home-page .focus-grid > .surface-solid, .home-page .grid-2--stretch > .surface-solid { min-height: 210px }`, tenía la misma especificidad que la nueva regla de 160px del carrusel móvil y venía después en el código — habría ganado silenciosamente y dejado el carrusel móvil en 210px pese al cambio. Se quita `.focus-grid` de esa regla combinada, dejándola solo para `.grid-2--stretch` (Situaciones, que no era parte de este pedido y no cambia).

**Verificación:** servidor estático local. 1280px (desktop, 3+3): ícono y título agrupados arriba, sin vacío perceptible entre ellos ni antes del borde inferior. 700px (tablet, 2 columnas) y 375px (mobile, carrusel): mismo resultado, cards visiblemente más compactas en las 3 vistas. Sin errores de consola.

### Sesión — Sectores de experiencia: título centrado; header full-width unificado en las 7 páginas (D54, D55, 2026-08-21)

**Pedido 1 — Sectores de experiencia:** el Owner pidió centrar el ícono + nombre de cada una de las 6 tarjetas de sector (venían alineados a la izquierda). Se agregó `justify-content: center` a `.sector-card__header`; el divisor horizontal debajo (border-top de `.sector-card__logos`) sigue de borde a borde sin cambios. Verificado visualmente en desktop.

**Pedido 2 — header global:** el Owner pidió replicar exactamente el header full-width de Home en las 6 páginas interiores (que hasta ahora usaban la "píldora flotante" con glassmorphism, D26) y convertirlo en un elemento global para que un cambio futuro se refleje en todas las páginas automáticamente.

**Aclarado con el Owner antes de tocar código (AskUserQuestion, 2 preguntas):**
1. Se señaló explícitamente que en D34 el Owner ya había evaluado esto mismo y decidido NO replicar la arquitectura completa de Home, manteniendo la píldora flotante en las páginas interiores — se confirmó que este es un pedido nuevo e intencional, no una repetición por error.
2. Como este prototipo es HTML estático puro (cada página es un archivo completo, sin sistema de plantillas ni build), una reutilización realmente "global" (un cambio se aplica solo, en todas partes) no es técnicamente posible todavía en este entorno. Se presentaron dos caminos: (a) duplicar el HTML/CSS del header en las 7 páginas ahora — mismo criterio con el que se ha construido todo el sitio hasta hoy — dejando la reutilización real ("un cambio, se aplica en todas") para cuando exista el template part de WordPress (`header.html`, ya previsto en `README.md`); o (b) agregar ya mismo un mecanismo de include vía JavaScript, con el costo de que el menú apareciera un instante después de cargar la página (async fetch) y de que el sitio pasara a depender de JS para mostrar la navegación — algo que el sitio evita por diseño desde el inicio (D7/D18: "sin este archivo, la navegación... sigue siendo completamente operable"). El Owner eligió la opción (a).

**Aplicado en `prototype/css/components.css`:** nuevo modificador `.site-header--global`, puesto directamente en el elemento `<header>` (no en `<body>`, a diferencia de cómo Home activaba estos estilos hasta ahora vía `.home-page`) — así el resto de overrides de `.home-page` (hero inmersivo, secciones, `.focus-mosaic`, `.focus-grid`, el stepper, etc., que siguen siendo exclusivos del contenido de Home) no se ven arrastrados por este cambio. Se migran ~30 declaraciones de `.home-page .site-header`/`.site-header__inner`/`.brand`/`.brand__mark`/`.brand__isotype`/`.brand__wordmark`/`.nav`/`.nav__panel`/`.site-header__actions`/`.btn--header` (repartidas en la regla base y 3 media queries: 1180px, 1023px y 640px) a `.site-header--global` (mismo selector, mismos valores) — Home no cambia visualmente, solo cambia qué clase activa esas reglas.

**Aplicado en `prototype/index.html` y las 6 páginas interiores:** se agrega la clase `site-header--global` al `<header>` de Home (junto a `site-header`, que ya tenía) y se reemplaza por completo el header de las 6 páginas interiores por el HTML exacto de Home: logo real con isotipo + wordmark claro/oscuro (antes las páginas interiores tenían una versión más simple, un solo wordmark), las anotaciones `wp-block-*` de mapeo a WordPress, y el mismo menú de 4 ítems. Se conservó en cada página su `href` de CTA ya existente (`#nota-ady`, pendiente de la URL real de la plataforma ADY — D42, sin cambios) y el `aria-current="page"` correspondiente a cada una (ninguno en Captación B2B y Blog, que no tienen ítem propio en el menú — mismo criterio que ya regía, D36).

**Aplicado en `prototype/js/main.js`:** el breakpoint de colapso del menú a hamburguesa (antes 1180px solo en Home, 1023px en el resto, por diferencias entre los dos headers) pasa a ser 1180px en las 7 páginas, ya que ahora todas comparten el mismo header de 3 zonas y el mismo punto real de desbordamiento.

**No se tocó:** `proximamente.html` (stub minimalista, fuera del alcance de este C2 — mismo criterio ya aplicado en D34) ni `type-lab.html` (página de referencia visual/laboratorio de marca, no forma parte del sitio real).

**Nota de limpieza pendiente (no aplicada en esta sesión, para no ampliar el riesgo del cambio):** las reglas base sin scope `.brand__mark`/`.brand__isotype`/`.brand__wordmark` (versión compacta de 28px, agregadas en D34 para la píldora flotante) quedan sin ningún uso real ahora que las 7 páginas reales usan `.site-header--global` — se dejan intactas por ahora (inofensivas, quedan sobrescritas de todas formas) porque `proximamente.html` sigue usando `.brand` sin esos sub-elementos y no vale la pena el riesgo de tocar más CSS en esta misma pasada; queda como candidato a limpieza en una sesión futura.

**Verificación:** servidor estático local. Se confirmó que las 7 páginas reales tienen ahora `site-header--global` (excepto `proximamente.html`, excluida a propósito) y que `type-lab.html` no se vio afectado (usa su propio `.site-header-demo` aislado). Conteo de `<div>`/`</div>` balanceado en las 7 páginas tras la edición (`grep`). Visualmente: Home sin cambios; las 6 páginas interiores ahora muestran el header full-width sólido con el logo real, idéntico a Home, en desktop (1280px) y mobile (375px); colapso del menú a hamburguesa verificado a 1000px de ancho (antes se hubiera visto el menú horizontal ahí, con el breakpoint viejo de 1023px) y apertura del panel desplegable probada con clic real. Sin errores de consola en ninguna página.

### Sesión — Sectores de experiencia: logos de ejemplo abstractos (D56, 2026-08-21)

**Pedido:** el Owner pidió agregar "logos de ejemplo" en los chips de cada tarjeta de sector, para ilustrar al cliente cómo se vería el espacio con logos reales. En el mismo mensaje, hizo una pregunta exploratoria (no un pedido de implementación): "¿no sería bueno crear un efecto slide?" para el caso en que los logos no quepan en el contenedor.

**Respuesta sobre el slide (recomendación, sin implementar):** se recomendó NO usar un carrusel/slide dentro de la card por ahora — es un patrón poco descubrible y poco natural con mouse a esa escala. El patrón estándar para una pared de logos es dejarlos hacer *wrap* (que `.sector-card__logos` ya hace vía `flex-wrap: wrap`) o, si un sector llega a tener muchos logos reales, agregar un tope con "+N más". El `.mobile-card-carousel` que ya existe en el sitio queda como opción a evaluar más adelante si el wrap no alcanza, una vez haya cifras reales de cuántos logos por sector — no se implementó nada de esto en esta sesión, es solo la recomendación.

**Sobre los logos de ejemplo:** como no hay clientes reales aprobados por sector (mismo criterio de D38), se preguntó con AskUserQuestion qué tratamiento visual usar en los chips en vez de inventar marcas reales — el Owner eligió una marca abstracta genérica (sin ninguna marca real) + el texto "Logo 01"/"Logo 02" que ya existía.

**Aplicado en `prototype/index.html` y `prototype/css/components.css`:** se agregan 2 íconos SVG abstractos genéricos — un hexágono para la posición "Logo 01" y un mark tipo "órbita" (dos círculos) para "Logo 02" — reutilizados en las 12 ocurrencias (6 sectores × 2 logos) para que no se vean todas idénticas sin necesitar 12 formas distintas. `.sector-card__logo` pasa a `gap: var(--space-2)` para separar el ícono del texto; nueva clase `.sector-card__logo-mark` (15×15px).

**Verificación:** servidor estático local. Desktop: se usó zoom de página (×3, solo para inspección, revertido después) para confirmar el detalle del ícono a este tamaño pequeño — ambas formas se distinguen claramente. Mobile (carrusel horizontal): mismo resultado, íconos legibles. Sin errores de consola.

### Sesión — header alineado con el hero/título en todas las páginas (D57, 2026-08-21)

**Pedido:** captura de Home con un recuadro rojo marcando que el logo del header y el texto del hero comparten el mismo margen izquierdo — pidió normalizar ese mismo padding en las demás páginas, "solo mover el padding".

**Investigación (antes de tocar código):** medido con `getBoundingClientRect()`, en Home a 1280px el logo del header y el `<h1>` del hero NO estaban perfectamente alineados (32px vs 64.5px) — la causa real: el header usaba su propia escala de padding (`clamp(1.5rem, 4vw, 4rem)`), distinta de `--container-padding` (`clamp(1rem, 4vw, 2rem)`), el token que ya usan `.container` y el hero de Home. Además, el header tenía `max-width: 1440px` mientras el resto del sitio usa `--container-max` (1200px) — con paddings iguales pero anchos máximos distintos, ambos se centran en puntos diferentes en viewports intermedios (~1200-1440px).

**Aplicado en `prototype/css/components.css`:**
- `.site-header--global .site-header__inner`: `padding` pasa de la escala propia a `var(--container-padding)`; `max-width` pasa de `1440px` a `var(--container-max)`.
- Se quita el override redundante `padding: 0 var(--space-4)` del breakpoint ≤640px (la nueva regla base con `--container-padding` ya resuelve al mismo valor ahí).

Con esto, Home quedó perfectamente alineado en cualquier ancho (verificado 1280/1440/1850/1920px: logo y `<h1>` del hero en el mismo píxel).

**Hallazgo adicional durante la verificación (consultado con el Owner antes de tocarlo, AskUserQuestion):** Servicios y Contacto usan un hero de foto a pantalla completa (`.hero-shell`, sin límite de ancho a propósito desde 2026-07-31, referencia REF-BIOFARMA) que en monitores anchos (1920px) dejaba el texto del hero hasta ~350px más a la izquierda que el header, porque esa foto nunca respetaba `--container-max`. Se le presentó la disyuntiva: alinear el texto (la foto deja de llegar a los bordes en pantallas muy anchas) o dejarlo como estaba (el texto sigue desalineado en monitores anchos). El Owner eligió alinear el texto.

**Aplicado para resolver esto:**
- `.hero-shell` (regla base, usada por Servicios/Contacto y también por Home): se agrega `max-width: var(--container-max)` + `margin-inline: auto` (antes sin límite de ancho). Se agregó una restauración explícita en `.home-page .hero-shell` (`width:100%; max-width:none;`) para que Home no heredara este tope — su propio mecanismo de alineación (`.home-page .hero-shell__content`) ya funcionaba independientemente y no debía verse afectado.
- `.hero-shell__content` (base): en vez de compensar con un `calc()` (que solo daba resultado exacto en el modo "foto casi de borde a borde" y no en el modo "foto ya topada a su ancho máximo"), se adopta el mismo patrón que ya usa `.home-page .hero-shell__content`: `width: min(100%, var(--container-max))` + `margin-inline: auto` + `padding` con `var(--container-padding)` — con este patrón, ambos modos (foto angosta vs. foto topada) llegan exactamente al mismo resultado. El límite de ancho para el texto (antes `max-width: 64ch` en toda la caja) se traslada específicamente al párrafo (`.hero-shell__content > p`), ya que el título tiene su propio límite (`23ch`) y la caja contenedora necesitaba poder crecer hasta `--container-max` para el autocentrado.

**Verificación:** servidor estático local. `getBoundingClientRect()` confirmó alineación exacta (mismo píxel) entre el logo del header y el título del hero en: Home (1280/1440/1850/1920px), Servicios (1280/1920px) y Captación B2B (1440px) — antes de este ajuste, Servicios mostraba un desfase de hasta 352px a 1920px; después, 0px. Confirmado visualmente (captura) que la foto de Home sigue a pantalla completa sin cambios (ancho de `.hero-shell` ~1425px de 1440px de viewport, prácticamente sin recorte) y que la foto de Servicios/Contacto ahora se ve enmarcada con el mismo margen que el resto del sitio en pantallas anchas. Las 4 páginas con encabezado simple (Quiénes somos, Blog y sus 2 artículos) ya estaban alineadas de antes (confirmado, sin cambios). Verificado en mobile (375px) en Servicios y Captación B2B — sin regresiones. Sin errores de consola en ninguna página.

### Sesión — Sectores de experiencia: logos reales de clientes (D58, 2026-08-21)

**Pedido:** el Owner cargó localmente los logos de los 15 clientes actuales de AAA Estudio Legal (`assets/img/`) y pidió reemplazar con ellos los placeholders de D56 ("Logo 01"/"Logo 02" + marca abstracta) en Sectores de experiencia, y sincronizar el resultado al repositorio.

**Verificación previa a implementar (AskUserQuestion):** dado que ahora se trata de datos reales de clientes (no un placeholder cosmético), una asignación incorrecta de sector sería un error de dato, no un problema visual — mismo criterio "no inventar" de D38/D56, pero aplicado aquí a la *categorización* en vez de al contenido. Se inspeccionaron visualmente los 15 logos y se confirmó con el Owner:
- **8 mapeos claros** (confirmados por el Owner): BBVA→Financiero, Comfandi→Cajas de compensación, Gobernación del Valle del Cauca→Sector público, MetroCali→Sector público, Coopunidos→Solidario, Fetrabuv→Solidario, Fonalianza→Solidario, Promédico→Salud.
- **4 logos ambiguos por imagen sola**, aclarados por el Owner vía texto libre: Femcristar ("es un fondo de empleados" → Solidario, igual que Fetrabuv/Fonalianza/Coopunidos), K-Listo ("productos alimenticios"), Neat ("empresa boutique de gestión inmobiliaria"), Nuestro Fondo ("ofrece servicios de ahorro y crédito") — para estos 3 últimos, el Owner delegó la ubicación final ("por favor ubícalos donde te parezca más apropiado").
- **3 logos sin encaje sectorial real** (Constructora Meléndez — construcción, El Gran Langostino — pescados y mariscos, Ma. Isabel — productos alimenticios): el Owner pidió repartirlos igual entre los 6 sectores existentes ("van repartidos en los sectores existentes"), en vez de excluirlos o crear un séptimo sector.

**Asignación final (criterio propio para los 6 casos delegados, transparente para poder ajustarse si el Owner/cliente prefiere otra ubicación):**
- Financiero: BBVA, El Gran Langostino
- Fintech: Neat, Nuestro Fondo
- Solidario: Coopunidos, Fetrabuv, Fonalianza, Femcristar
- Sector público: Gobernación del Valle del Cauca, MetroCali, Constructora Meléndez
- Salud: Promédico, Ma. Isabel
- Cajas de compensación: Comfandi, K-Listo

**Trabajo técnico — assets:** se verificó con PowerShell/`System.Drawing` que los 15 PNG tienen fondo transparente real (alpha=0 en la esquina de cada archivo), por lo que se pueden colocar directamente sobre las cards blancas sin caja de fondo. Se movieron de la subcarpeta local `assets/img/Logos - Clientes/` (nombre con espacios, fuera de la convención kebab-case del proyecto) a la carpeta plana `assets/img/`, corrigiendo también `logo-construtora melendez.png` (typo "construtora" + espacio) a `logo-constructora-melendez.png`. El archivo fuente `.ai` no se copió (no es un asset web).

**Aplicado en `prototype/index.html`:** los 12 chips `<span class="sector-card__logo">` (SVG abstracto + texto "Logo 01"/"Logo 02") pasan a contener un `<img>` real por logo (`loading="lazy"`, `alt="Logo de [Cliente]"`); Solidario pasa a 4 logos y Sector público a 3, en vez de forzar 2 por card — se prioriza el conteo real de clientes por sector sobre la simetría visual (el `aria-label` de cada `.sector-card__logos` también se actualiza, ya sin lenguaje de "pendiente de aprobación"). El comentario HTML de D38/D39 se actualiza para reflejar que D58 reemplaza los placeholders de D56.

**Aplicado en `prototype/css/components.css`:** `.sector-card__logo` deja de ser una caja con borde/fondo/texto (tratamiento de placeholder) y pasa a ser solo un contenedor de imagen a altura fija (40px); nueva regla `.sector-card__logo img { max-height:100%; max-width:120px; object-fit:contain }`. Se elimina `.sector-card__logo-mark` (la marca SVG abstracta de D56, sin más uso tras el reemplazo).

**Verificación:** servidor estático local (`:4173`). Los 15 `<img>` cargan con 200 OK (confirmado vía `read_network_requests`), sin errores de consola. Desktop (1280px): logos nítidos, tamaño consistente entre sí, wrap correcto en las cards con más de 2 logos (Solidario, Sector público) sin necesitar carrusel/slide — mismo criterio ya sentado en D56. Mobile (375px): el carrusel horizontal (`mobile-card-carousel`) sigue funcionando igual con contenido real.

### Sesión — Sectores de experiencia: sin línea divisoria, logos más grandes (D59, 2026-08-21)

**Pedido:** sobre una captura del resultado de D58 (ya en producción), el Owner confirmó que le gustó la distribución de logos por sector, y pidió dos ajustes: quitar la línea que separa el título del sector de la fila de logos, y agrandar los logos ("se ven muy pequeños incluso en desktop").

**Aplicado en `prototype/css/components.css`:**
- `.sector-card__logos`: se quita `border-top: 1px solid var(--color-border-flat)` — el `padding-top: var(--space-4)` que ya existía se conserva como único separador de aire entre el header y la fila de logos, ahora sin línea.
- `.sector-card__logo`: `height` sube de `40px` a `64px`.
- `.sector-card__logo img`: `max-width` sube de `120px` a `160px` (mismo `object-fit: contain`, sin distorsión).

**Verificación:** servidor estático local (`:4173`). Confirmado visualmente que la línea divisoria desapareció y los logos se ven notablemente más grandes y legibles, tanto en desktop (1280px, wrap correcto en Solidario con 4 logos y Sector público con 3) como en mobile (carrusel horizontal, 375px). Sin errores de consola en ninguna vista.

### Sesión — Sectores de experiencia: logos un poco más grandes aún (D60, 2026-08-21)

**Pedido:** tras ver D59 en vivo, el Owner confirmó que le gustó el resultado y pidió un ajuste fino más: "hagamos los logos un tris más grande".

**Aplicado en `prototype/css/components.css`:** `.sector-card__logo` sube de `height: 64px` a `76px`; `.sector-card__logo img` sube de `max-width: 160px` a `190px` (mismo `object-fit: contain`).

**Verificación:** servidor estático local (`:4173`). Confirmado visualmente que los logos se ven más grandes sin romper el wrap de las cards con más de 2 logos (Solidario con 4, Sector público con 3 siguen en una sola fila a 1280px). Sin errores de consola.

### Sesión — Sectores de experiencia: ajuste a 75px + 2 sectores nuevos (D61/D62, 2026-08-21)

**Pedido:** dos cosas en el mismo mensaje. (1) Corregir el tamaño de logo de 76px (D60) a 75px. (2) El Owner vio en vivo el resultado completo de D58/D59/D60 y señaló que la distribución de logos por sector "no quedó muy bien" — pidió crear el bloque/sector correspondiente para los logos que necesiten uno nuevo, en vez de seguir forzándolos en los 6 sectores existentes.

**D61 — ajuste de tamaño:** `.sector-card__logo` baja de `height: 76px` a `75px` en `prototype/css/components.css`. Cambio trivial, sin necesidad de verificación exhaustiva aparte.

**D62 — restructuración de sectores:** antes de tocar código, se identificaron los 5 logos que en D58 habían quedado forzados dentro de sectores donde no encajaban de verdad (Constructora Meléndez en Sector público, Neat en Fintech, El Gran Langostino en Financiero, Ma. Isabel en Salud, K-Listo en Cajas de compensación — todos ubicados ahí por criterio propio, delegado por el Owner en D58, no por confirmación suya). Como crear sectores nuevos cambia una afirmación real de posicionamiento del sitio (el párrafo de intro nombra explícitamente los sectores donde AAA tiene experiencia comprobada), se confirmó con AskUserQuestion cómo agruparlos antes de implementar: se ofrecieron 3 caminos (2 sectores nuevos por afinidad temática; 1 sector genérico con los 5 juntos; que el Owner los nombrara/agrupara él mismo). **El Owner eligió 2 sectores nuevos por afinidad.**

**Grupos aplicados:**
- **Construcción e inmobiliario**: Constructora Meléndez (constructora) + Neat (gestión inmobiliaria boutique) — ambos del rubro de bienes raíces/construcción.
- **Comercio y consumo**: El Gran Langostino (pescados y mariscos) + Ma. Isabel + K-Listo (ambos productos alimenticios) — los 3 son comercio/retail de consumo.

Nuestro Fondo se queda en Fintech sin cambios (ahorro y crédito sí encaja ahí — no era parte del problema señalado por el Owner).

**Aplicado en `prototype/index.html`:**
- Se retiran los 5 logos de sus sectores originales: Financiero queda solo con BBVA, Fintech solo con Nuestro Fondo, Sector público con Gobernación del Valle del Cauca + MetroCali, Salud solo con Promédico, Cajas de compensación solo con Comfandi. Solidario no se toca (4 logos, todos confirmados por el Owner desde D58).
- Se agregan 2 tarjetas `.sector-card` nuevas al final de la grilla, con íconos SVG nuevos en el mismo estilo de línea del resto (viewBox 256, stroke-width 14, stroke-linecap/linejoin round): una casa/edificio para Construcción e inmobiliario, una bolsa de compras para Comercio y consumo.
- El párrafo de intro de la sección (`.sector-experience__intro p`) se actualiza de "financiero, fintech, solidario, público, salud y cajas de compensación" a los 8 nombres, incluyendo los 2 nuevos.
- El comentario HTML que documenta el historial de la sección se actualiza con la nota de D62.

**Verificación:** servidor estático local (`:4173`). Desktop (1280px): 8 tarjetas en la grilla (3→3→2), cada una con su ícono y logos correctos, sin logos huérfanos ni duplicados; texto de intro actualizado y legible. Mobile (carrusel horizontal, 375px): las 8 tarjetas se deslizan correctamente. Sin errores de consola en ninguna vista.

### Sesión — Femcristar de Solidario a Financiero (D63, 2026-08-21)

**Pedido:** el Owner pidió mover Femcristar de Solidario a Financiero — a diferencia de D58/D62, aquí dio la instrucción exacta y directa, sin delegar el criterio ni requerir pregunta previa.

**Aplicado en `prototype/index.html`:** se retira el `<img>` de Femcristar de la tarjeta Solidario (que queda con 3 logos: Coopunidos, Fetrabuv, Fonalianza) y se agrega a la tarjeta Financiero (que pasa a 2: BBVA, Femcristar). Se actualiza el comentario HTML que documenta el historial de la sección.

**Verificación:** servidor estático local (`:4173`). Confirmado visualmente que Femcristar aparece en Financiero junto a BBVA y ya no en Solidario. Sin errores de consola.

### Sesión — "¿Por qué AAA?": cards casi cuadradas + fila de abajo con otro orden de color (D64, 2026-08-21)

**Pedido:** sobre una captura del módulo "¿Por qué AAA?", el Owner pidió dos cosas: (1) que las 6 tarjetas se vean "casi como si fueran cuadrados" en vez de rectángulos anchos y bajos, "con el espacio justo para que no dañe los títulos"; (2) cambiar los colores de las 3 tarjetas de abajo para que no se vean iguales a las de arriba: Seguridad de la información = azul oscuro, Compliance = azul claro, Cobertura nacional = blanco.

**Forma de la card (aplicado en `prototype/css/components.css`):** el alto de card (`grid-auto-rows`) sube de 160px — el valor que D53 había fijado para eliminar espacio en blanco sobrante — a:
- 260px en desktop (3 columnas, sin media query, línea base de `.home-page .focus-grid`).
- 240px en tablet (`@media (max-width: 800px)`, 2 columnas).
- 230px en el carrusel móvil (`@media (max-width: 640px)`, donde `.home-page .focus-grid > .surface-solid` fija un `height`/`min-height` propio en vez de heredar `grid-auto-rows`).

Esto revierte parcialmente D53, pero por una razón distinta (forma, no espaciado sobrante): el contenido (ícono + título agrupados arriba, sin `space-between`, ya fijado en D53) sigue anclado arriba — con la card más alta, el título más largo ("Infraestructura para atención masiva.", ya ajustado en D45/D46) queda con aire de sobra debajo en vez de arriesgarse a desbordar.

**Color de la fila de abajo (aplicado en `prototype/css/components.css`):** el ciclo automático de D51 (`:nth-child(3n+2)` → azul oscuro, `:nth-child(3n)` → azul claro, aplicado por igual a las posiciones 2/5 y 3/6) dejó de servir, porque ahora la fila de abajo necesita un patrón *distinto* al de arriba, no el mismo repetido. Se reemplaza por selectores explícitos por posición (`:nth-child(1)` a `:nth-child(6)`): la fila de arriba conserva blanco/azul oscuro/azul claro (posiciones 1/2/3, sin cambios visuales); la fila de abajo pasa a azul oscuro/azul claro/blanco (posiciones 4/5/6) — Seguridad de la información, Compliance y Cobertura nacional, en ese orden.

**Verificación:** servidor estático local (`:4173`). Desktop (1280px, 3 columnas): las 6 cards se ven notablemente más cuadradas, títulos con aire de sobra, colores correctos (arriba: blanco/navy/azul claro; abajo: navy/azul claro/blanco). Tablet (700px, 2 columnas): mismo resultado. Carrusel móvil (375px, deslizado hasta la última tarjeta): "Cobertura nacional" se ve en blanco como se esperaba. Sin errores de consola en ninguna vista.

### Sesión — "¿Por qué AAA?": se revierte D64, cards rectangulares y compactas (D65, 2026-08-21)

**Pedido:** el Owner vio D64 en vivo (screenshot en el mensaje) y pidió lo contrario a lo que se acababa de implementar: "no, lo que necesito es que queden rectangulares, pero sin tanto espacio a la derecha ni abajo, estamos desperdiciando mucho el viewport" — con una captura anotada (un recuadro rojo sobre la primera card) mostrando la proporción/tamaño deseado, mucho más chico que el resultado de D64.

**Diagnóstico:** el "espacio desperdiciado" señalado tenía dos causas independientes, ambas de D64/D45-D46:
1. El alto de card que D64 había subido (260px desktop, 240px tablet, 230px carrusel móvil) sobraba mucho una vez que el contenido real es solo ícono + título corto (2-3 líneas) — quedaba una franja vacía visible debajo del título en cada card.
2. El título tenía `max-width: 13ch` desde D45/D46 (pensado en su momento para controlar cuántas líneas ocupaba el texto cuando la card era mucho más angosta) — con la card ya de vuelta a un ancho rectangular normal, ese tope de ancho dejaba el bloque de texto mucho más angosto que la card completa, con un vacío claramente visible a la derecha del título. Esto es justo lo que el recuadro rojo de la captura señalaba.

**Aplicado en `prototype/css/components.css`:**
- `.home-page .focus-grid` (base, desktop): `grid-auto-rows` baja de `260px` a `150px`.
- `@media (max-width: 800px)` (tablet, 2 columnas): `grid-auto-rows` baja de `240px` a `150px`.
- `@media (max-width: 640px)` (carrusel móvil): `.home-page .focus-grid > .surface-solid` baja `height`/`min-height` de `230px` a `150px`.
- `.home-page .focus-grid h3`: se quita `max-width: 13ch` por completo — el título ahora envuelve según el ancho real disponible de la card (con su padding), en vez de un tope de caracteres fijo pensado para un ancho de card distinto. "Infraestructura para atención masiva.", por ejemplo, pasa de envolver en 3 líneas angostas a 2 líneas que usan más del ancho de la card.

Los colores de D64 (fila de abajo invertida respecto a la de arriba) no se tocan — siguen vigentes.

**Verificación:** servidor estático local (`:4173`). Desktop (1280px, 3 columnas): cards visiblemente compactas y rectangulares, títulos usan bien el ancho disponible sin vacíos evidentes ni riesgo de desbordar. Tablet (700px, 2 columnas): mismo resultado. Carrusel móvil (375px): card compacta, título en 2 líneas con buen uso del ancho. Sin errores de consola en ninguna vista.

### Sesión — "En cifras": se quita la leyenda de aviso, se agregan íconos (D66, 2026-08-21)

**Pedido:** sobre una captura de la sección "En cifras", el Owner pidió (1) quitar el texto "Cifra de ejemplo — pendiente de dato aprobado por el cliente" bajo cada uno de los 3 números, y (2) agregar un ícono relacionado con cada cifra, encima del número.

**Verificación previa (AskUserQuestion):** esa leyenda se había agregado en D41 justamente para dejar explícito que 100 / 50 / $100M son valores de ejemplo, no cifras reales aprobadas por el cliente — el mismo criterio de "no inventar datos" aplicado en todo el sitio (Sectores de experiencia, Casos de éxito, etc.). Quitar la leyenda sin reemplazar los números por datos reales haría que el sitio muestre cifras inventadas como si fueran reales — se confirmó explícitamente con el Owner antes de proceder, presentando 3 caminos: (a) reemplazar por cifras reales si ya las tenía, (b) quitar la leyenda de todas formas entendiendo el riesgo, (c) usar un aviso más discreto en vez de eliminarlo del todo. **El Owner eligió (b)** — quitar la leyenda de todas formas, confirmando que entiende que los números siguen siendo de ejemplo sin dato aprobado.

**Aplicado en `prototype/index.html`:** se retira el `<p class="stat-card__pending">` de los 3 `.stat-card` (el texto de aviso). Se actualiza el `aria-label` de `.stats-grid` (de "Cifras de AAA Estudio Legal, pendientes de dato aprobado por el cliente" a solo "Cifras de AAA Estudio Legal") para no seguir anunciando el aviso a lectores de pantalla cuando la versión visual ya no lo muestra. Se agrega un `<svg class="stat-card__icon">` encima de cada número: una carpeta para "Casos gestionados", una silueta de persona para "Clientes atendidos", una flecha ascendente ("trending up") para "Cartera recuperada" — mismo estilo de línea (viewBox 256, stroke-width 14) que el resto de íconos del sitio, puramente ilustrativos del concepto, sin ninguna cifra ni dato nuevo.

**Aplicado en `prototype/css/components.css`:** nueva clase `.stat-card__icon` (40×40px, `display:block`, centrado con `margin:0 auto`, color `var(--color-accent-on-dark)` — mismo tono que el número). Se elimina la regla `.stat-card__pending` (sin más uso tras retirar el párrafo).

**Verificación:** servidor estático local (`:4173`). Desktop (1280px): los 3 íconos renderizan correctamente encima de cada número, centrados, con buen espaciado; la leyenda ya no aparece. Mobile (carrusel/columna, 375px): mismo resultado. Sin errores de consola en ninguna vista.

### Sesión — Footer: columna "Sitio" + replicado en las 7 páginas (D67, 2026-08-21)

**Pedido:** el Owner envió una captura del footer simple que ya tenían las 6 páginas interiores (columnas Marca / Sitio / Legal, con "Sitio" listando Inicio, Servicios, Nuestra Experiencia, Nuestro Equipo, Blog, Contacto) y pidió "rescatar" esa columna "Sitio" para agregarla al footer más elaborado de Home (que tenía Marca / Contacto / Redes sociales, sin mapa del sitio), ubicándola entre Contacto y Redes sociales — footer pasa de 3 a 4 columnas. Después de aplicar esto en Home, pidió replicar el resultado en las demás páginas, mismo patrón que se usó con el menú/header en D55.

**Verificación previa (AskUserQuestion):** antes de tocar código se notó que la captura mostraba nombres y páginas que ya no coinciden con la estructura vigente del sitio: D36 renombró "Servicios"→"Metodología" y "Nuestro Equipo"→"Quiénes somos" en el menú de header; "Nuestra Experiencia" no es una página construida (redirige al stub `proximamente.html`); no existe una página "Contacto" separada (el flujo real de conversión es `captacion-b2b.html`, Captación B2B). Se presentaron 3 caminos: (a) usar exactamente el menú actual del header (4 ítems), (b) un sitemap más completo con nombres/páginas actualizados a hoy (6 ítems, sin "Nuestra Experiencia"), o (c) que el Owner especificara los enlaces él mismo. **El Owner eligió (b)**, el sitemap más completo.

**Lista final de la columna "Sitio":** Inicio (`index.html`), Metodología (`servicios.html`), Quiénes somos (`nuestro-equipo.html`), Trabaja con nosotros (`nuestro-equipo.html#postulacion-heading`, mismo anchor que el 4º ítem del menú de header), Blog (`noticias-analisis.html`, página real aunque oculta del menú de header desde D36) y Contacto (`captacion-b2b.html`, el flujo real de conversión).

**Aplicado en `prototype/index.html` (Home):** nueva sección `<section class="home-footer__section home-footer__sitemap">` con un `<h2 class="home-footer__heading">Sitio</h2>` y `<nav class="home-footer__sitemap-list">` con los 6 enlaces, insertada entre `.home-footer__contact` y `.home-footer__social`. El `<footer>` gana la clase `site-footer--global`.

**Aplicado en `prototype/css/components.css`:**
- Todos los selectores `.home-page .site-footer`/`.home-page .home-footer__*` (antes exclusivos de Home) pasan a `.site-footer--global`/`.site-footer--global .home-footer__*` — mismo patrón que `.site-header--global` de D55, para que el footer se pueda replicar en cualquier página sin depender de la clase `.home-page` del `<body>`.
- `.home-footer__grid`: `grid-template-columns` pasa de 3 a 4 pistas (brand / contacto / sitio / social).
- Nuevas reglas `.home-footer__heading` (mismo tratamiento visual que el `<h2>` del footer simple retirado: mayúsculas, `--color-gold-100`, letter-spacing) y `.home-footer__sitemap-list` (lista de enlaces, mismo tratamiento de color/hover que el resto del footer).
- Breakpoints `≤1040px` (pasa a 2 columnas) y `≤640px` (apila a 1 columna) actualizados con el nuevo scope y con `.home-footer__sitemap-list a` incluido en la regla de `min-height: 44px` (objetivo táctil) en mobile.

**Aplicado en las 6 páginas interiores** (`servicios.html`, `nuestro-equipo.html`, `captacion-b2b.html`, `noticias-analisis.html`, `noticia-insolvencia-acreedores.html`, `noticia-normalizacion-activos.html`): se reemplaza por completo su footer simple anterior (`footer-grid`/`footer-links`/`footer-bottom`, con columnas Marca/Sitio/Legal) por el HTML exacto del nuevo footer de Home. Las clases CSS del footer simple (`.footer-grid`, `.footer-links`, `.footer-bottom`, `.brand`) no se tocan/eliminan porque `proximamente.html` y `type-lab.html` — fuera de alcance, mismo criterio que D34/D55 — todavía las usan.

**Verificación:** servidor estático local (`:4173`), en las 7 páginas reales. Desktop ancho (1400px): footer de 4 columnas (brand/contacto/sitio/social) en una sola fila. Tablet (851px, dentro del breakpoint ≤1040px): 2×2 (brand+sitio arriba, contacto+social abajo, orden de grid row-wise). Mobile (375px): las 4 secciones apiladas en una columna, "Sitio" con los 6 enlaces completos. Confirmado que los 6 `href` de la columna Sitio apuntan a las páginas/anchors correctos vía JavaScript. Confirmado que `proximamente.html` y `type-lab.html` no tienen la clase `site-footer--global` (sin cambios, siguen con su footer simple original). Sin errores de consola en ninguna de las 7 páginas.

### Sesión — bug de D67: heading "Sitio" gigante solo en Home (D68, 2026-08-21)

**Pedido:** el Owner señaló con una captura anotada (recuadro rojo sobre la palabra "SITIO") que el heading de la nueva columna se veía "demasiado grande" en Home, mientras que en las demás páginas se veía chico como se esperaba.

**Diagnóstico:** una regla preexistente en `components.css`, `.home-page section:not(.hero-immersive) h2 { font-size: 2.3rem; ... }`, pensada para los títulos reales de sección dentro de Home (ej. "Sectores de experiencia", "¿Por qué AAA?"), atrapaba también el nuevo `<h2 class="home-footer__heading">Sitio</h2>` agregado en D67 — porque ese `<h2>` vive dentro de un `<section>`, que es exactamente lo que la regla genérica selecciona. Por especificidad CSS, esa regla (2 clases + 2 elementos) le ganaba a la regla correcta y más específica en intención, `.site-footer--global .home-footer__heading` (2 clases, 0 elementos) — aunque esta última tiene más "peso" en clases, la genérica suma elementos adicionales que la empujan por delante en el desempate. En las 6 páginas interiores esa regla nunca se activaba (no tienen la clase `.home-page` en el `<body>`), por eso ahí el heading ya se veía correcto desde D67.

**Aplicado en `prototype/css/components.css`:** se agrega `:not(.home-footer__section)` a la regla genérica — tanto en su declaración base como en su variante dentro de un breakpoint responsive más abajo en el mismo archivo — excluyendo explícitamente la sección del footer de esa regla de tamaño de h2, sin tocar ningún otro título de sección de Home.

**Verificación:** servidor estático local (`:4173`). Confirmado con `getComputedStyle` que el heading "Sitio" mide 13px en Home (antes ~37px, `2.3rem`), igual que en las páginas interiores. Confirmado que otros `<h2>` de sección en Home (ej. "Sectores de experiencia") siguen midiendo 36.8px, sin cambios. Sin errores de consola.

### Sesión — Servicios § "Nuestra metodología": descripción siempre visible + alineación izquierda (D69, 2026-08-21)

**Pedido:** sobre el flujograma de "Nuestra metodología" (D48) ya en vivo, el cliente pidió (transmitido por el Owner) dos cosas: (1) que la descripción de los 3 pasos (Diagnóstico, Estrategia, Representación) se muestre siempre en desktop, sin necesitar pasar el mouse por encima; (2) que los 3 nodos se alineen con el margen izquierdo del eyebrow "NUESTRA METODOLOGÍA" y el título de la sección, en vez de quedar centrados y repartidos por todo el ancho.

**Contexto:** D48 había diseñado la descripción como un popover que aparece con `:hover`/`:focus-within` específicamente para no recortar el copy real de cada paso sin necesitar scroll junto a los otros 2 (mismo patrón de D47, Home § "Cómo intervenimos"). El cliente ahora prefiere ver el texto siempre, aceptando que la sección ocupe más alto en desktop.

**Aplicado en `prototype/css/components.css`**, todo dentro de `@media (min-width: 801px)` de `.stepper--flowchart` (la vista mobile/tablet ≤800px ya mostraba la descripción siempre visible desde D48, sin tocar nada ahí):
- Se elimina el bloque de popover absoluto (`position:absolute`, oculto por defecto, revelado por hover/focus) y el bloque paralelo que ya mostraba el texto en flujo normal solo para dispositivos sin hover — se consolidan en un único tratamiento: el párrafo queda siempre en flujo normal, bajo el título, `text-align:left`, `max-width:32ch`.
- `.stepper__step` pasa de `align-items:center; text-align:center` a `align-items:flex-start; text-align:left`.
- `.stepper__step-head` deja de forzarse a columna (ícono arriba, título abajo, centrado) — hereda el mismo layout de fila (ícono junto al título, izquierda) que la vista mobile/tablet ya usa desde D49.
- Se agrega `.stepper__step:first-child { padding-left: 0 }`: antes, el `padding` uniforme de los 3 pasos combinado con `text-align:center` dejaba el ícono del primer paso centrado dentro de su propia columna en vez de pegado al borde izquierdo real de la sección — con el padding retirado solo en el primer paso, su ícono ahora cae exactamente bajo el eyebrow/título.
- El conector (flecha entre pasos) pasa a `align-self: flex-start` para alinearse con la fila ícono+título en vez de intentar centrarse verticalmente contra un alto de card ahora variable (por la descripción siempre visible).

**Verificación:** servidor estático local (`:4173`). Desktop (1280px): la descripción de los 3 pasos se ve siempre, sin necesidad de hover; confirmado visualmente que el ícono de "Diagnóstico" alinea con el borde izquierdo exacto de "NUESTRA METODOLOGÍA" y el título. Tablet (700px) y carrusel/vista móvil (375px): sin cambios respecto a antes (ya mostraban la descripción siempre visible, apiladas verticalmente, desde D48/D49/D50). Sin errores de consola en ninguna vista.

### Sesión — Servicios § "Nuestros servicios": recuadro de imagen menos alto (D70, 2026-08-21)

**Pedido:** sobre una captura anotada de la sección "Nuestros servicios", el Owner señaló el espacio vacío arriba y abajo del texto de cada uno de los 3 bloques, generado porque el recuadro de imagen (`.service-block__media`) era más alto de lo que el texto necesitaba — pidió reducir el alto del recuadro, aceptando explícitamente que quede cuadrado en vez de mantener la proporción más ancha que alta. Pidió no tocar nada más del bloque (texto, tag, alternancia de lado de la imagen).

**Aplicado en `prototype/css/components.css`:** `.service-block__media` baja `min-height` de `280px` a `220px` — coincide con el extremo angosto del rango de ancho que ya tenía la columna (`minmax(220px, 320px)`), quedando cuadrado o casi cuadrado según el ancho real que tome la columna en cada viewport.

**Verificación:** servidor estático local (`:4173`). Desktop (1280px): los 3 recuadros (Defensa de acreedores, Normalización de activos, Derecho corporativo) se ven visiblemente más compactos y cercanos a cuadrados, sin el espacio vacío que señaló el Owner. Mobile (375px, columna única): sin cambios de comportamiento respecto a antes. Sin errores de consola.

### Sesión — corrige D70: el fix no tenía efecto real (D71, 2026-08-21)

**Pedido:** el Owner reportó, tras verificar D70 en producción, que no veía el cambio aplicado — "no veo los cambios aplicados? paso algo?".

**Diagnóstico:** se confirmó primero que el deploy sí había salido bien — se hizo `fetch()` del CSS servido en producción y el `min-height: 220px` de D70 efectivamente estaba presente en el archivo entregado por Cloudflare, así que no era un problema de build/deploy. El problema real: `.service-block__media` en el HTML lleva DOS clases (`class="media-placeholder service-block__media"`), y la clase base `.media-placeholder` (usada en todo el sitio para los recuadros de imagen pendiente) fija `aspect-ratio: 4 / 5`. Con el ancho real de la columna de imagen (320px en desktop), ese aspect-ratio calcula un alto de 400px — muy por encima de los 220px que D70 había fijado como `min-height`. `min-height` solo actúa como un piso mínimo cuando nada más determina un alto mayor; como el `aspect-ratio` heredado siempre resultaba en más de 220px, el `min-height` nunca llegó a tener efecto visible, ni antes (280px) ni después (220px) del cambio de D70 — de ahí que el Owner no notara ninguna diferencia.

**Fix real, aplicado en `prototype/css/components.css`:** se agrega `aspect-ratio: 1 / 1` a la regla `.service-block__media` — misma especificidad que la regla base (`.media-placeholder`, una sola clase cada una) pero declarada después en el archivo, así que gana por orden de cascada. Con el aspect-ratio correcto, el recuadro por fin queda cuadrado de verdad, y el `min-height: 220px` de D70 pasa a ser solo un piso de seguridad para anchos muy angostos (donde `aspect-ratio: 1/1` daría menos de 220px).

**Verificación:** servidor estático local (`:4173`). Confirmado con `getBoundingClientRect()` que el recuadro ahora mide 320×320px en desktop (1280px) — antes eran 320×400px, a pesar del min-height de D70. Visualmente, los 3 bloques se ven notablemente más compactos. Mobile (375px): recuadro cuadrado a ancho completo del contenedor, sin regresiones. Sin errores de consola.

### Sesión — nueva página "Trabaja con nosotros" (D72, 2026-08-21)

**Pedido:** el Owner pidió mover las secciones "Nuestro equipo" y "Postulación" (el formulario) de la página "Quiénes somos" (`nuestro-equipo.html`) a una página nueva, "Trabaja con nosotros" — recordando explícitamente mantener la misma distribución de header (D55) en la página nueva.

**Contexto:** el menú de header ya tenía un 4º ítem "Trabaja con nosotros" desde D36, pero apuntaba a un ancla (`nuestro-equipo.html#postulacion-heading`) dentro de la sección de Postulación, no a una página propia. Con este cambio, ese ítem pasa a ser una página real.

**Contenido movido, sin cambios de copy:**
- "Nuestro equipo" — eyebrow/h2 "Nuestro equipo", párrafo sobre el equipo multidisciplinario, y la nota `.ady-note` de contenido pendiente del cliente (fotos/organigrama, perfil de Jaime Marmolejo).
- "Postulación" — eyebrow "Postulación", h2 "¿Ve su carrera en AAA? Cuéntenos quién es usted.", el formulario completo (nombre, correo, CV, campo adicional pendiente de definir) y el CTA "Postúlese", con su nota de envío a `info@agudeloabogados.com` sin CRM (D12). Sigue siendo secundario y estrictamente contextual (D17) — sin CTA comercial en esta página, mismo outline ya documentado en `content/05-talento-aaa.md`.

**Hero nuevo para la página** (única pieza de copy nueva): eyebrow "Trabaja con nosotros" + h1 que reutiliza la línea de apertura ya aprobada en C1 para la extinta página "Talento AAA" — "Un lugar donde el rigor técnico se construye entre personas, no solo entre procesos." (`content/05-talento-aaa.md`) — no se inventa copy nuevo de cultura, beneficios o modalidad de trabajo, que sigue siendo un vacío crítico documentado en ese mismo archivo (sin insumo del cliente).

**`nuestro-equipo.html`** conserva Hero, "¿Quiénes somos?", "Filosofía" y el cierre de redes sociales (LinkedIn/Instagram) — sin cambios de copy en lo que queda, solo se retiran las dos secciones movidas.

**Replicación de header/footer** (mismo patrón que D55/D67): `trabaja-con-nosotros.html` usa el header y footer idénticos a las otras 6 páginas reales. En las 7 páginas existentes, el enlace de "Trabaja con nosotros" (en el menú de header y en la columna "Sitio" del footer) pasa de `nuestro-equipo.html#postulacion-heading` a `trabaja-con-nosotros.html`; en la página nueva ese ítem del menú lleva `aria-current="page"` (ya es una página real), en las demás no. Se actualizan dos comentarios HTML que habían quedado desactualizados: la nota sobre el ancla en `nuestro-equipo.html`, y la nota canónica de D36 en `index.html`.

**Verificación:** servidor estático local (`:4173`). `trabaja-con-nosotros.html` carga con header/footer idénticos al resto, "Trabaja con nosotros" resaltado como ítem activo del menú; "Nuestro equipo" y el formulario de "Postulación" renderizan correctamente. `nuestro-equipo.html` sin huecos ni artefactos donde estaban las secciones movidas — transición directa de "Filosofía" al cierre de LinkedIn/Instagram. Confirmado en `captacion-b2b.html` (vía JavaScript) que tanto el menú como el footer ya apuntan a `trabaja-con-nosotros.html`. Conteo de `<div>`/`</div>` balanceado en las 8 páginas tocadas. Mobile (375px) sin problemas de layout. Sin errores de consola en ninguna vista.

### Sesión — Servicios § "Transparencia" reusa diseño de Home; nuevo cierre (D73, 2026-08-21)

**Pedido:** el Owner pidió tres cambios juntos en Servicios (Metodología): (1) reusar el diseño de la sección de Home "¿Qué hace AAA?" (captura de referencia adjunta) para ajustar la sección "Transparencia"; (2) quitar la sección "¿Su empresa tiene un crédito en riesgo o en proceso de insolvencia?"; (3) volver a agregar la sección final de Inicio, "Conversemos sobre su caso.".

**Transparencia — aplicado en `prototype/servicios.html`:** se reemplaza el `.cierre-grid` de dos tarjetas (imagen + card con halo, fondo claro) que tenía la sección por la estructura exacta de "¿Qué hace AAA?" de Home: `.grid-2.what-we-do-grid` (columna de texto + `.media-placeholder.what-we-do-visual`, fondo oscuro). El copy no se toca — mismo eyebrow "Transparencia", mismo h2 "Sin promesas que no podemos sostener", mismo párrafo, mismo `data-img-id="IMG-13"` — solo cambia la estructura visual, siguiendo la captura de referencia.

**Aplicado en `prototype/css/components.css`:** las reglas `.what-we-do-grid`/`.what-we-do-visual`, hasta ahora exclusivas de Home vía el prefijo `.home-page` (mismo patrón que el header/footer antes de D55/D67), se generalizan quitando ese prefijo, para poder reutilizarlas en Servicios sin duplicar CSS. Confirmado que Home no se ve afectada visualmente por este cambio.

**Cierre — aplicado en `prototype/servicios.html`:** se retira por completo la sección "¿Su empresa tiene un crédito en riesgo o en proceso de insolvencia?" (con su CTA "Consulte su caso con ADY" hacia `#nota-ady`) y se reemplaza con el bloque de cierre real de Home — mismo HTML, mismo copy ("Conversemos sobre su caso.", con el párrafo de acompañamiento y la imagen a la izquierda en vez de a la derecha), mismo destino del CTA "Hablemos de su caso" (`captacion-b2b.html`) — una reutilización fiel, sin inventar una variante nueva de copy.

**Verificación:** servidor estático local (`:4173`). Desktop (1280px): "Transparencia" se ve idéntica al diseño de referencia de Home (fondo oscuro, recuadro con patrón rayado a la derecha); el nuevo cierre "Conversemos sobre su caso." reemplaza al anterior sin dejar huecos. Mobile (375px): ambas secciones apilan correctamente. Confirmado que la sección "¿Qué hace AAA?" de Home sigue viéndose igual tras generalizar el CSS. Sin errores de consola en ninguna vista/página.

### Sesión — corrige D73: el cierre no coincidía visualmente con Home (D74, 2026-08-21)

**Pedido:** el Owner señaló, con una captura de Home como referencia, que el cierre "Conversemos sobre su caso." recién agregado en Servicios (D73) usaba un estilo distinto al de Home — pidió ajustarlo para que se viera exactamente igual, "esto incluye texto y CTA, además de ese efecto de degradado".

**Diagnóstico:** el look distintivo del cierre de Home (degradado radial+lineal en vez de color sólido, halo decorativo oculto, h2 grande de 2.3rem sin límite de ancho angosto, botón dorado `--color-accent-main`) vivía completo bajo `.home-page .cierre-card*` — reglas que solo se activan cuando el `<body>` tiene la clase `.home-page`. D73 reutilizó las clases base (`.cierre-card`, `.cierre-card--cta`, `.cierre-card__halo`, etc.), que sin esa clase caen al estilo genérico original (color sólido, halo visible, botón blanco) — un estilo visualmente distinto, aunque estructuralmente el mismo componente.

**Por qué no se generalizó sin más (como D55/D67/D73):** `.cierre-card` también lo usa la tarjeta de cierre propia de Captación B2B, con un encabezado mucho más largo ("Cuéntenos su caso y le contactamos con un diagnóstico inicial"). Si se hubiera quitado el prefijo `.home-page` de todas las reglas sin más, ese encabezado habría heredado `max-width: 12ch` y `font-size: 2.3rem` pensados para el texto corto de Home ("Conversemos sobre su caso."), envolviendo en muchísimas líneas cortas y rompiendo la tarjeta.

**Fix aplicado en `prototype/css/components.css`:** se crea un modificador dedicado, `.cierre-grid--global`, y todas las reglas de estilo de Home (antes `.home-page .cierre-grid`, `.home-page .cierre-card`, `.home-page .cierre-card--cta`, `.home-page .cierre-card__halo`, `.home-page .cierre-card__content h2`/`p`, `.home-page .cierre-card__btn` y sus variantes `:hover`) pasan a vivir bajo `.cierre-grid--global .cierre-card*` — incluidas dos reglas responsive que estaban mezcladas dentro de selectores más generales de Home (el tamaño de h2 en el breakpoint intermedio, y el `min-height` en el breakpoint ≤640px), que se separaron en reglas propias.

**Aplicado en `prototype/index.html` y `prototype/servicios.html`:** se agrega la clase `cierre-grid--global` únicamente al `.cierre-grid` de Home y al de Servicios (el bloque "Conversemos sobre su caso." que comparten). Captación B2B no lleva esta clase y conserva su tarjeta de cierre original sin ningún cambio.

**Verificación:** servidor estático local (`:4173`). Desktop (1280px): el cierre de Servicios ahora es visualmente idéntico al de Home — mismo degradado, halo oculto, botón dorado "Hablemos de su caso →", h2 grande en dos líneas. Home confirmado sin cambios. Captación B2B confirmado sin cambios: color sólido, halo visible, botón blanco, encabezado largo sin recortar ni envolver de forma extraña. Mobile (375px) en Servicios: mismo resultado, apilado correctamente. Sin errores de consola en ninguna de las tres páginas.

### Sesión — Quiénes somos: márgenes, rediseño de Filosofía, quita cierre de redes (D75, 2026-08-21)

**Pedido:** el Owner pidió tres cambios en "Quiénes somos" (`nuestro-equipo.html`): (1) reciclar el diseño y estructura de la sección de Home "¿Qué hace AAA?" (captura de referencia adjunta) para la sección "¿Quiénes somos?", con el fin de ajustar los márgenes, que no coincidían con los de Inicio y Metodología; (2) rediseñar "Filosofía", que estaba "muy plana" y tenía el mismo problema de márgenes, con libertad de usar referencias ya construidas sin salirse de la línea gráfica del sitio; (3) quitar la sección "Conócenos también en LinkedIn e Instagram.".

**"¿Quiénes somos?" — aplicado en `prototype/nuestro-equipo.html`:** el `<div class="container" style="max-width: 68ch;">` (un contenedor angosto y propio, distinto al contenedor estándar del sitio) hacía que el margen izquierdo del contenido no coincidiera con el de las demás páginas. Se reemplaza por la estructura exacta de "¿Qué hace AAA?"/"Transparencia": `.grid-2.what-we-do-grid` (columna de texto + `.media-placeholder.what-we-do-visual`, ya generalizadas en D73/D74), con fondo oscuro plano en vez de "atmósfera". La nota `.ady-note` de founders pendientes del cliente (Decisión D19) se mueve dentro de la columna de texto, en vez de quedar como hermano suelto del contenedor — el copy no cambia en ningún punto.

**Filosofía — aplicado en `prototype/nuestro-equipo.html` y `prototype/css/components.css`:** la única línea de texto corrida ("Innovación con rigor. Solidez con tecnología. Dimensión humana. Tres principios...") se reemplaza por 3 tarjetas de atributo, una por pilar — mismos 3 pilares, sin cambios de copy, cada uno ahora con su propio ícono de línea (bombilla para "Innovación con rigor", columna/pilar para "Solidez con tecnología", corazón para "Dimensión humana") y su título en Krub bold. Nueva clase `.philosophy-grid`/`.philosophy-card`, con el mismo lenguaje visual que ya usa `.sector-card` en el resto del sitio (borde, `border-radius: var(--radius-md)`, ícono + título) — se decidió NO reutilizar/generalizar `.focus-grid` de Home, porque ese componente está diseñado específicamente para 6 tarjetas con un ciclo de color cada 3 (D51/D64/D65), no para 3 tarjetas parejas; forzarlo habría sido más riesgo que beneficio. El contenedor pasa a ser el estándar del sitio (sin `max-width` propio), resolviendo el mismo problema de margen que "¿Quiénes somos?". De paso, el heading pasa de `<h3>` a `<h2>` para quedar consistente con el resto de secciones de nivel superior de la página (todas usan h2).

**Cierre — aplicado en `prototype/nuestro-equipo.html`:** se retira por completo la sección "Conócenos también en LinkedIn e Instagram." — la página ahora termina en Filosofía, seguida directo del footer.

**Verificación:** servidor estático local (`:4173`). Desktop (1280px): "¿Quiénes somos?" alinea exactamente con el margen izquierdo del hero y con Inicio/Metodología; Filosofía se ve como 3 tarjetas con íconos y títulos, visualmente coherente con el resto del sitio; la nota de founders se ve correctamente sobre el fondo oscuro (color fijo claro, ya previsto en el CSS de `.ady-note`). Mobile (375px): las 3 tarjetas de Filosofía se apilan en una columna; el cierre de redes ya no aparece, la página pasa directo de Filosofía al footer. Sin errores de consola.

### Sesión — quita aviso de founders; normaliza el texto en cursiva del H1 (D76, 2026-08-21)

**Pedido:** dos cambios en el mismo mensaje. (1) Quitar el aviso "Founders — contenido pendiente del cliente" de "¿Quiénes somos?" (con una captura del aviso adjunta), ya no es necesario. (2) El Owner notó que el estilo de los textos del header/hero de Home es distinto al de las demás páginas, y pidió normalizar todo el sitio al mismo tratamiento — misma tipografía, mismo efecto de cursiva, mismo color dorado — sin usar el degradado, que no fue aprobado por el cliente.

**Aviso de founders — aplicado en `prototype/nuestro-equipo.html`:** se retira por completo el `.ady-note` de "Founders — contenido pendiente del cliente" de la sección "¿Quiénes somos?". La Decisión D19 (no inventar biografía, motivación ni anécdota fundacional de los founders sin insumo del cliente) sigue vigente igual — solo se quita el aviso visible en pantalla, no cambia el copy real (que ya no menciona biografía personal, solo la historia general de la firma).

**Texto en cursiva del H1 — investigación:** la frase resaltada en cursiva dentro del `<h1>` de cada hero (Inicio: "somos la voz del acreedor.", Metodología: "su crédito?", Captación B2B: "proteger, normalizar y recuperar activos") usa la clase `.text-gradient`. La regla BASE de esa clase (D26) siempre tuvo un degradado real vía `background-clip: text` — pero Home tenía un override, `.home-page .text-gradient`, que reemplazaba ese degradado por un color dorado sólido (`--color-accent-main`). Como ese override solo se activa cuando el `<body>` tiene la clase `.home-page` (solo Inicio la tiene), las demás páginas (Metodología, Captación B2B) mostraban el degradado real de la regla base — nunca aprobado por el cliente — en vez del dorado sólido de Home.

**Aplicado en `prototype/css/components.css`:** la regla base `.text-gradient` se reescribe para usar directamente `color: var(--color-accent-main)` (el mismo dorado sólido que ya tenía Home) en vez del degradado con `background-clip: text`. La variante para fondos claros pasa de un degradado navy→dorado a `color: var(--color-navy-900)` sólido, mismo criterio de contraste que ya regía esa variante. Se elimina el override `.home-page .text-gradient` (ya redundante — la regla base ahora coincide exactamente con lo que tenía Home) y el bloque `@supports not (background-clip: text)` (ya sin sentido, no queda ningún `background-clip` en la clase). El nombre de la clase se mantiene sin cambios (`.text-gradient`) para no tener que tocar el HTML de las 3 páginas que la usan — solo cambió qué hace la clase, no cómo se invoca. Se actualiza también un comentario en `prototype/css/tokens.css` que describía el tratamiento como "degradado".

**Verificación:** servidor estático local (`:4173`). Confirmado visualmente en Inicio, Metodología, Captación B2B (desktop 1280px y mobile 375px) que el texto en cursiva se ve idéntico en las 3 páginas — mismo dorado sólido, sin ningún rastro de degradado. Home confirmado sin cambios visuales (el resultado ya era el dorado sólido antes del cambio). Sin errores de consola en ninguna página.

### Sesión — heroes de Quiénes somos/Trabaja con nosotros sin énfasis dorado; ajuste de wrap en Metodología (D77, 2026-08-21)

**Pedido:** el Owner envió una captura de Metodología señalando con una flecha que "su" quedaba suelto al final de la primera línea del H1 (junto al texto blanco de "riesgo"), mientras "crédito?" caía solo en la segunda línea — pidió bajar "su" para que las dos palabras del texto dorado se leyeran juntas, en el mismo renglón. En el mismo mensaje, notó que los heroes de "Quiénes somos" y "Trabaja con nosotros" no tenían ningún fragmento en cursiva dorada (a diferencia de Inicio, Metodología y Captación B2B) y pidió que, de ahora en adelante, todos los headers de páginas nuevas o existentes usaran el mismo estilo — no solo un ajuste puntual, sino un criterio para páginas futuras también.

**Metodología — aplicado en `prototype/servicios.html`:** dentro del `<span class="text-gradient">` del H1, se une `su crédito?` con un espacio irrompible (`su&nbsp;crédito?`). Con las dos palabras como unidad indivisible para el navegador, cuando no caben junto al texto anterior en la primera línea, el bloque completo baja a la segunda línea en vez de partirse — a diferencia de un `<br>` fijo, este ajuste sigue funcionando correctamente en cualquier ancho de viewport (verificado también en mobile).

**Quiénes somos — aplicado en `prototype/nuestro-equipo.html`:** el H1 ("Sobre nosotros: AAA Estudio Legal") gana la clase `hero__title` (le faltaba — controla el margen inferior estándar que sí tienen los demás heroes) y envuelve "AAA Estudio Legal" en `.text-gradient`, mostrando el nombre de la firma en cursiva dorada, igual que el resto del sitio.

**Trabaja con nosotros — aplicado en `prototype/trabaja-con-nosotros.html`:** mismo tratamiento — el H1 gana `hero__title`, y se envuelve el tramo final de la frase ("entre personas, no solo entre procesos.") en `.text-gradient`, siguiendo el mismo patrón que usan los demás heroes narrativos del sitio (resaltar la cláusula final, más evocadora, de la oración). Ningún copy nuevo en ninguno de los dos casos — solo se envuelve texto ya existente en el span de énfasis.

**Verificación:** servidor estático local (`:4173`). Desktop (1280px): "su crédito?" queda siempre junto en un mismo renglón en Metodología; "AAA Estudio Legal" (Quiénes somos) y "entre personas, no solo entre procesos." (Trabaja con nosotros) se ven en dorado cursiva, visualmente consistentes con Inicio/Captación B2B. Mobile (375px): mismo resultado en Metodología, "su crédito?" no se separa. Sin errores de consola en ninguna de las 3 páginas.

### Sesión — segundo rediseño de Filosofía; corrige tamaño de H1 (D78, 2026-08-21)

**Pedido:** el Owner no quedó conforme con el rediseño de Filosofía de D75 (3 tarjetas de atributo) y adjuntó una captura de un sitio de referencia (foto de fondo a pantalla completa + tarjeta oscura flotante con ícono, título, párrafo y botón) — pidió recrear esa composición, aclarando explícitamente usar nuestra propia paleta de colores y tipografía, no las de la referencia (que usa verde oscuro y otra fuente). En el mismo mensaje, señaló que el tamaño del texto del H1 en "Quiénes somos" y "Trabaja con nosotros" (ya con el énfasis dorado agregado en D77) no coincidía con el de Inicio/Metodología, y pidió usar el mismo tamaño en todos los headers.

**Filosofía — aplicado en `prototype/nuestro-equipo.html`:** se retira por completo el diseño de D75 (`.philosophy-grid`, 3 tarjetas separadas con íconos) y se reutiliza el patrón ya construido `.cierre-grid` + `.cierre-card--image` (`.media-placeholder`, foto pendiente de material del cliente) + `.cierre-card--cta` con `.cierre-card__content--statement` — el mismo tratamiento visual que ya tenía "Transparencia" en Servicios antes de D73 (foto a un lado, tarjeta navy sólida con halo decorativo difuminado al otro), en vez de inventar un componente nuevo de foto con tarjeta superpuesta (que habría requerido CSS de posicionamiento absoluto nuevo, sin precedente en el sitio). El copy original de Filosofía vuelve como un solo párrafo, sin ningún cambio ("Innovación con rigor. Solidez con tecnología. Dimensión humana. Tres principios que sostienen cada decisión de la firma."), reemplazando las 3 tarjetas separadas de D75. Se agrega un ícono de brújula (círculo + aguja apuntando) arriba del título, como en la referencia — representa "principios/dirección", coloreado con `--color-accent-light` (mismo tono que ya usa el eyebrow en este tipo de tarjeta). No hay botón/CTA (a diferencia de la referencia) porque Filosofía no tiene una página de destino a la que enlazar — se prefirió omitirlo antes que inventar un enlace sin destino real.

**Limpieza — aplicado en `prototype/css/components.css`:** se eliminan las clases `.philosophy-grid`/`.philosophy-card` agregadas en D75, confirmadas sin ningún uso en el sitio tras el reemplazo.

**Tamaño del H1 — investigación:** Inicio, Metodología y Captación B2B envuelven su hero en `.hero-shell__content`, que trae su propio `font-size: var(--text-2xl)` (3rem/48px) para `.hero__title` (y Home además lo sobreescribe explícitamente a 3rem también, mismo valor). Quiénes somos y Trabaja con nosotros usan un hero simple, sin `.hero-shell` — su `.hero__title` nunca recibía ese `font-size`, así que caía al tamaño por defecto de cualquier `<h1>` del sitio (`--text-3xl`, 3.75rem/60px) — visiblemente más grande.

**Aplicado en `prototype/css/components.css`:** se fija `font-size: var(--text-2xl)` directamente en la clase base `.hero__title` (antes solo tenía `margin-bottom`) — así cualquier hero, tenga o no el wrapper `.hero-shell`, usa el mismo tamaño de 48px por defecto de ahora en adelante. Las reglas más específicas que ya existían (`.hero-shell__content .hero__title`, `.home-page .hero-shell__content .hero__title`) siguen ganando por especificidad donde ya se aplicaban, así que Inicio/Metodología/Captación B2B no cambian.

**Verificación:** servidor estático local (`:4173`). Confirmado con `getComputedStyle` que las 4 páginas con hero (Inicio, Metodología, Quiénes somos, Trabaja con nosotros) miden exactamente 48px de font-size en el H1. Filosofía se ve como foto + tarjeta con ícono/título/párrafo en desktop (1280px) y mobile (375px), coherente con la línea gráfica ya establecida del sitio. Sin errores de consola en ninguna página.

### Sesión — Sectores de experiencia: encabezado más parejo, 6 tarjetas en vez de 8 (D79, 2026-08-21)

**Pedido:** el Owner señaló, con una captura anotada de la sección "Sectores de experiencia" en Home, que el párrafo de la columna derecha ("Trabajamos con organizaciones...") era visiblemente más alto que el título/eyebrow de la columna izquierda, dejando un vacío feo arriba del eyebrow — pidió ensanchar la columna derecha para que el párrafo envuelva mejor y ambas columnas queden del mismo alto. En el mismo mensaje, el cliente pidió (vía el Owner) fusionar las categorías de Financiero+Fintech en una sola tarjeta y Salud+Cajas de compensación en otra, para volver a tener 6 tarjetas en total (como antes de D62, que había ampliado a 8) — conservando los íconos de Financiero y de Salud.

**Encabezado — aplicado en `prototype/css/components.css`:** la causa era que `.sector-experience__intro` (columna derecha) tenía un `max-width` de solo 42ch dentro de una columna de grid angosta (`minmax(280px, 0.7fr)`, frente a `1.45fr` de la columna izquierda) — el texto se veía forzado a envolver en más líneas de las necesarias para su contenido real. Se ensancha la columna a `minmax(340px, 0.95fr)` (ajustando la izquierda de `1.45fr` a `1.2fr` en proporción) y el `max-width` del párrafo a 50ch — con más ancho disponible, el párrafo envuelve en menos líneas y el vacío sobre el eyebrow se reduce notablemente.

**Fusión de tarjetas — aplicado en `prototype/index.html`:** "Financiero" y "Fintech" se combinan en una sola tarjeta, "Financiero y Fintech", conservando el ícono de banco de Financiero (se retira el ícono de teléfono/Fintech) — sus logos quedan juntos en la misma tarjeta (BBVA, Femcristar, Nuestro Fondo). "Salud" y "Cajas de compensación" se combinan igual, "Salud y cajas de compensación", conservando el ícono de corazón de Salud (se retira el ícono de personas/Cajas) — logos juntos (Promédico, Comfandi). Solidario, Sector público, Construcción e inmobiliario y Comercio y consumo (los 2 sectores nuevos de D62) no se tocan. El párrafo de intro de la sección no cambia — sigue nombrando los sectores individualmente (financiero, fintech, salud, cajas de compensación) como categorías reales que la firma atiende, independiente de cuántas tarjetas visuales los agrupen.

**Verificación:** servidor estático local (`:4173`). Desktop (1280px): el encabezado se ve visiblemente más parejo en alto entre ambas columnas; las 6 tarjetas resultantes renderizan con los logos e íconos correctos, sin duplicados ni huecos. Mobile (375px, carrusel): "Financiero y Fintech" se ve correctamente con sus 3 logos. Sin errores de consola en ninguna vista.

### Sesión — Sectores de experiencia: títulos un punto más chicos (D80, 2026-08-21)

**Pedido:** el Owner pidió bajar un punto de tamaño a los títulos de las 6 tarjetas de "Sectores de experiencia" ("Financiero y Fintech", "Solidario", etc.), sugiriendo 1.3rem.

**Aplicado en `prototype/css/components.css`:** `.sector-card__name` pasa de `clamp(1.15rem, 1.6vw, 1.5rem)` (tope de 1.5rem en desktop) a `1.3rem` fijo.

**Verificación:** servidor estático local (`:4173`). Confirmado con `getComputedStyle` que el título mide 20.8px (1.3rem). Sin errores de consola.

### Sesión — Sectores de experiencia: logos un poco más grandes (D81, 2026-08-21)

**Pedido:** el Owner pidió subir un poco el tamaño de los logos de cliente en "Sectores de experiencia", para darles más énfasis.

**Aplicado en `prototype/css/components.css`:** `.sector-card__logo` sube de `height: 75px` a `85px`; `.sector-card__logo img` sube `max-width` de `190px` a `210px`.

**Verificación:** servidor estático local (`:4173`). Desktop (1280px) y mobile (375px, carrusel): los logos se ven notablemente más grandes; las tarjetas con más logos (Solidario con 4, Comercio y consumo con 3) siguen cabiendo en una sola fila sin desbordar. Sin errores de consola.

### Sesión — "Nuestros servicios" pasa a grilla de 3 columnas tipo blog card (D82, 2026-08-25)

**Pedido:** el Owner adjuntó una captura del propio blog del sitio (tarjetas verticales: imagen arriba, luego eyebrow, título y texto) y pidió rediseñar "Nuestros servicios" en Metodología con esa misma distribución de 3 columnas — señaló que el layout horizontal vigente (imagen+texto alternado, con historial en D70/D71) gastaba mucho viewport y generaba mucho scroll. Pidió explícitamente conservar el efecto hover en las 3 tarjetas verticales y la línea gráfica de la firma.

**Aplicado en `prototype/css/components.css`:** se retiran `.service-block--media`, `.service-block--media-reverse` y `.service-block__media` (el layout horizontal de D70/D71, confirmado sin ningún otro uso en el sitio) y se agregan `.service-grid` (`display:grid`, 3 columnas iguales, 1 columna ≤900px) y `.service-card` (`display:flex; flex-direction:column`, imagen de 16:10 arriba vía `.service-card__media`). Cada tarjeta lleva la clase `.surface-solid` — el mismo sistema de "Superficies" que ya usan las tarjetas de blog y de "¿Por qué AAA?" en el resto del sitio (elevación + brillo radial + borde dorado al hover/foco de teclado) — para conservar el efecto hover pedido sin inventar uno nuevo. El eyebrow reutiliza `.service-block__tag` (ya existente) sin cambios.

**Aplicado en `prototype/servicios.html`:** los 3 `<article>` de "Nuestros servicios" (Defensa de acreedores en procesos de insolvencia, Normalización de activos, Derecho corporativo) se reordenan a imagen → eyebrow (`.service-block__tag`) → `<h3>` → párrafo(s), envueltos en `.service-grid`. Sin cambios de copy — el texto de los 3 servicios es exactamente el mismo, solo cambia el orden/estructura visual.

**Verificación:** servidor estático local (`:4173`). Desktop (1440px): grilla de 3 columnas confirmada, imagen-eyebrow-título-texto en cada tarjeta. Mobile (375px): 1 columna. Hover confirmado con `getComputedStyle` sobre la primera tarjeta: `transform: translateY(-4px)`, `box-shadow` elevada y `border-color` dorado activos al pasar el mouse. Sin errores de consola en ninguna vista.

### Sesión — "Nuestros servicios" pierde el fondo con halos, queda sólido #F5F3EE (D83, 2026-08-25)

**Pedido:** tras aprobar D82, el Owner pidió quitar el fondo degradado de la sección "Nuestros servicios" y dejar un fondo sólido de color #F5F3EE.

**Investigación:** la sección usaba `data-surface="atmosphere"`, que pinta un fondo base (`--color-surface-light`) y encima unos halos difuminados de color (`.atmosphere::before`/`::after`/`.atmosphere__halo`) — ese halo era el "degradado" que el Owner veía, no un color de fondo distinto. `--color-surface-light` ya está definido en `tokens.css` como exactamente `#F5F3EE` — el mismo valor que el Owner pidió — y es además el fondo por defecto del `<body>`.

**Aplicado en `prototype/servicios.html`:** se quita el atributo `data-surface="atmosphere"` del `<section>` de "Nuestros servicios" y se elimina el `<div class="atmosphere" aria-hidden="true">` que pintaba los halos (confirmado que la sección no contiene ningún botón `.btn--ghost`, el único elemento cuyo estilo dependía de ese atributo). Sin el atributo, la sección no fija ningún `background` propio — cae directamente al `#F5F3EE` del `<body>`, sin necesidad de escribir el color a mano ni tocar `components.css`. Las demás secciones con `data-surface="atmosphere"` (Situaciones/Confianza/Cierre en Inicio, Cierre en Metodología, 3 secciones en Captación B2B) no se tocan.

**Verificación:** servidor estático local (`:4173`). Confirmado con `getComputedStyle` que `background-color` del `<body>` es `rgb(245, 243, 238)` (= #F5F3EE exacto) y que la sección ya no tiene el div `.atmosphere` ni el atributo `data-surface`. Captura visual: fondo plano, sin halos, tarjetas sin cambios. Sin errores de consola.

### Sesión — "Nuestros servicios": título en negrita, párrafo más chico (D84, 2026-08-25)

**Pedido:** el Owner adjuntó una captura anotada señalando que, en cada tarjeta, el párrafo descriptivo se veía más grande que el título del servicio (ej. "Normalización de activos") — pidió bajar el tamaño de los párrafos y poner los títulos en negrita.

**Investigación:** el título (`<h3>`) hereda `--font-display` (Libre Caslon Display) a 20px con `font-weight: 400` — D30 dejó registrado que esta fuente **solo trae el corte 400** (sin negrita real disponible como webfont), así que pedirle `font-weight: bold` directamente habría producido negrita sintética (el navegador la "engorda" algorítmicamente, no es un corte tipográfico real) — el mismo tipo de atajo que el proyecto ya evitó con la itálica sobre esta misma fuente (D26/D30). A tamaño igual, ese peso 400 del serif se lee visualmente más liviano que el párrafo en Krub regular, de ahí la sensación de "título más chico".

**Aplicado en `prototype/css/components.css`:** se sigue el mismo criterio ya usado en D45/D46 para "Sectores de experiencia" y "¿Por qué AAA?" — el título de tarjeta pasa de la serif de display a `--font-sans` (Krub) en `font-weight: 700`, negrita real de la fuente (no sintética), conservando el mismo tamaño de 20px (`--text-md`) que ya tenía. El párrafo baja de `--text-base` (17px) a `--text-sm` (15px) — el mismo tamaño que ya usa `.blog-card p` en el blog del sitio, así que no se inventa un valor nuevo.

**Verificación:** servidor estático local (`:4174`, el `:4173` de la sesión anterior seguía ocupado). Confirmado con `getComputedStyle`: el `<h3>` de la primera tarjeta usa `font-family: Krub, ...`, `font-size: 20px`, `font-weight: 700`; el `<p>` usa `font-size: 15px`. Captura visual en desktop (1440px): los 3 títulos se leen claramente en negrita y más prominentes que el párrafo, jerarquía corregida. Sin errores de consola.

### Sesión — se quita el hover azul de "Nuestros servicios", queda solo el movimiento (D85, 2026-08-25)

**Pedido:** el Owner pidió prescindir del cambio de color en el hover de estas 3 tarjetas ("ese fondo azul en el hover mouse retiralo"), dejando el movimiento de la tarjeta.

**Investigación:** estas tarjetas usan `.surface-solid` (el sistema de "Superficies" reutilizado desde D82), que al pasar el mouse dispara 3 efectos a la vez: desplazamiento hacia arriba (`translateY(-4px)`), sombra elevada, y un brillo radial semitransparente en un pseudo-elemento `::before` con color `--color-accent-light` (`#B9CEED`, azul claro) que además cambia el color del borde al mismo azul. Ese brillo revelándose sobre el fondo claro de la tarjeta era el "fondo azul" que el Owner señaló — no un fondo sólido nuevo, sino el efecto de brillo ya existente en el sistema de hover del sitio.

**Aplicado en `prototype/css/components.css`:** se agrega un bloque `.service-card.surface-solid:hover`, `.service-card.surface-solid:focus-within` (selector de 3 clases, con más especificidad que `.surface-solid:hover` — gana sin tener que tocar esa regla global) que fija `border-color` de vuelta al valor base neutro (`--color-border-subtle`) y `opacity: 0` en el `::before`, dentro del mismo `@media (hover: hover) and (pointer: fine)` que ya usa el resto del sistema. El desplazamiento (`translateY`) y la sombra (`box-shadow`) no se tocan — siguen aplicando igual que antes, tal como pidió el Owner. El cambio queda acotado a `.service-card`: el resto del sitio (tarjetas de blog, "¿Por qué AAA?", etc.) conserva el brillo/borde de siempre, sin modificaciones.

**Verificación:** servidor estático local (`:4175`). Con la tarjeta en estado `:hover` real (confirmado con `el.matches(':hover')` = `true`), `getComputedStyle` mostró: `transform` = `matrix(1, 0, 0, 1, 0, -4)` (el mismo `translateY(-4px)` de siempre, sin cambios), `border-color` = `rgb(217, 217, 217)` (el neutro base, ya no el azul claro), y `opacity` del `::before` = `0` (sin brillo). Sin errores de consola.

### Sesión — "Nuestra metodología": efecto de entrada + hover en los 3 nodos (D86, 2026-08-25)

**Pedido:** el cliente, vía el Owner, señaló que la sección "Nuestra metodología" (el flujograma de 3 nodos — Diagnóstico, Estrategia, Representación) se sentía "muy plana" y sugirió agregar un efecto de entrada al llegar a la sección, o bien un efecto hover en los elementos. Se implementaron ambos: no son excluyentes y la sección no tenía ninguno de los dos.

**Entrada — aplicado en `prototype/servicios.html`:** los 3 `<article class="stepper__step">` ganan la clase `reveal` (el sistema de entrada por `IntersectionObserver` ya usado en el resto del sitio — fade + translateY una sola vez, al entrar en viewport) con `style="--stagger-index:0/1/2"` para que aparezcan uno detrás de otro en vez de los 3 a la vez, mismo patrón que ya usan las cards de "¿Por qué AAA?" y otras secciones.

**Problema encontrado y su fix, en `prototype/css/components.css`:** `.stepper__step` ya tenía una regla de D69 (`.stepper--flowchart .stepper__step[data-stepper-ready]:not(.is-active) { opacity:1; transform:none; }`, agregada para que la descripción de cada paso quedara siempre visible sin depender del scroll-alternado de `.is-active`) — esa regla tiene la misma especificidad que la regla base del sistema `.reveal` y está definida más abajo en el archivo, así que ganaba la cascada y anulaba por completo el fade-in de entrada (los nodos aparecían siempre en `opacity:1`, sin animación). Se agrega un selector de 5 clases/atributos (`.stepper--flowchart .stepper__step.reveal[data-reveal-ready]:not(.is-visible)`, uno más que los 4 de la regla de D69) que gana por especificidad sin tener que tocar esa regla ni el sistema `is-active`, del que sigue dependiendo Captación B2B § "Nuestro proceso" (el otro consumidor de `.stepper__step` sin el modificador `--flowchart`).

**Hover — aplicado en `prototype/css/components.css`, gateado a desktop (≥801px, donde el ícono es el nodo circular) y hover real (`(hover:hover) and (pointer:fine)`):** al pasar el mouse (o enfocar por teclado) un nodo, el ícono (borde + relleno tenue + color) y el título del paso pasan a `--color-accent-on-dark` (`#B9CEED`, el mismo tono que ya usa el eyebrow "Nuestra metodología" sobre el fondo oscuro) y el nodo completo se eleva `translateY(-6px)`. Mismo problema de especificidad que en la entrada: un primer intento con `.stepper--flowchart .stepper__step:hover` (3 selectores) perdía contra la regla de D69 (4 selectores) en cuanto el scroll-alternado movía `.is-active` a otro nodo — verificado en pruebas, el nodo bajo el mouse se quedaba sin elevar. Se corrigió subiendo ese selector también a 5 clases/atributos, igual que el de entrada.

**Verificación:** servidor estático local (`:4176`). Con `getComputedStyle`: los 3 nodos empiezan en `opacity:0` / `transform: translateY(20px)` al cargar la página, y pasan a `opacity:1` / sin transform (`is-visible` confirmado) al hacer scroll hasta la sección. Hover sobre un nodo específicamente NO activo (`is-active: false`, el caso exacto que había fallado en el primer intento) confirma `transform: translateY(-6px)`, `border-color` del ícono y `color` del título en `rgb(185, 206, 237)`. Mobile (375px): la sección se ve igual que antes, sin hover (no aplica en touch) y con la entrada funcionando en la lista vertical. Sin errores de consola en ninguna vista.

### Sesión — la sección de cierre de Metodología también pierde el fondo con halos (D87, 2026-08-25)

**Pedido:** el Owner, satisfecho con D86, señaló que en la última sección de Metodología ("Conversemos sobre su caso.") también se veía "ese efecto degradado para el fondo" y pidió el mismo fondo sólido #F5F3EE que ya se aplicó en D83 a "Nuestros servicios".

**Investigación:** exactamente el mismo caso que D83 — esta sección de cierre usaba `data-surface="atmosphere"` con su `<div class="atmosphere">` (aquí con un halo extra, `.atmosphere__halo`, el "tercer halo" reservado para las secciones de cierre, ver components.css). El halo difuminado sobre el fondo claro era lo que el Owner veía como "degradado" — no el fondo navy oscuro de la tarjeta `.cierre-card--cta` (ese es un degradado intencional y aprobado, agregado en D74 para que el cierre de Metodología coincidiera visualmente con el de Home; no se toca).

**Aplicado en `prototype/servicios.html`:** se quita `data-surface="atmosphere"` del `<section>` de cierre y su `<div class="atmosphere" aria-hidden="true"><div class="atmosphere__halo">...</div></div>` — mismo patrón exacto que D83. Sin el atributo, la sección cae al `#F5F3EE` del `<body>` sin fijar el color a mano. Confirmado que la sección no contiene ningún `.btn--ghost` que dependiera del atributo (solo lleva `.btn.cierre-card__btn`, con sus propios estilos vía `.cierre-grid--global`).

**Verificación:** servidor estático local (`:4177`). Con `getComputedStyle`: `background-color` del `<body>` es `rgb(245, 243, 238)` (= #F5F3EE); la sección ya no tiene el div `.atmosphere`; el `background-image` de la tarjeta `.cierre-card--cta` sigue siendo su degradado navy propio (`radial-gradient(...) , linear-gradient(...)`), sin cambios — confirma que no se tocó por error el fondo de la tarjeta. Captura visual en desktop (1440px): fondo plano detrás de las dos tarjetas (foto + "Conversemos sobre su caso."), sin halos. Sin errores de consola.

### Sesión — Quiénes somos: fondo claro + eyebrow distinto; Filosofía invertida con CTA (D88, 2026-08-25)

**Pedido:** el Owner pasó a la página "Quiénes somos" con dos pedidos en un mismo mensaje. Primero, que la sección "¿Quiénes somos?" tuviera fondo #F5F3EE en vez del fondo oscuro que tenía, adaptando los estilos de texto al nuevo fondo, para diferenciarla visualmente del hero oscuro justo encima; de paso, señaló que el eyebrow repetía el mismo texto del título ("Quiénes somos" / "¿Quiénes somos?") y pidió cambiarlo. Segundo, que la sección de Filosofía reutilizara el mismo elemento de "¿Quiénes somos?", pero invirtiendo el bloque — foto a la izquierda, texto de filosofía a la derecha — y agregando un CTA nuevo, sugiriendo "Hablemos de su caso" como ejemplo.

**"¿Quiénes somos?" — aplicado en `prototype/nuestro-equipo.html`:** la sección pasa de `data-surface="dark"` a `data-surface="light"`. No hizo falta fijar ningún color de texto a mano: `base.css` ya tiene la regla `section[data-surface="dark"] h1,h2,h3 { color:white }` (que deja de aplicar en cuanto se quita `dark`, cayendo al color por defecto de texto sobre superficie clara) y `.eyebrow` ya tiene su color base (`--color-accent-strong`, el dorado/cobre que usan los eyebrows en el resto de secciones claras del sitio) con un override que solo se activa en `dark` — quitar el atributo hace que ambos vuelvan solos a sus valores correctos para fondo claro, el mismo mecanismo que ya usa cualquier otra sección clara. El eyebrow cambia de "Quiénes somos" a "Origen" — no es un rótulo inventado: retoma el nombre que la propia estructura narrativa aprobada del contenido (`content/04-nuestro-equipo.md`, punto 2 del outline: "Origen — hechos confirmados como anclaje") ya usa para describir exactamente este bloque (fundación 2020, especialización, cobertura nacional).

**Filosofía — aplicado en `prototype/nuestro-equipo.html` y `prototype/css/components.css`:** se retira por completo el patrón `.cierre-grid`/`.cierre-card` de D78 (tarjeta navy con halo) y se reutiliza `.grid-2.what-we-do-grid` — el mismo componente que ya usa "¿Quiénes somos?" arriba — con el orden de columnas invertido: la foto (`.media-placeholder.what-we-do-visual`) va primero en el HTML, el bloque de texto (eyebrow + h2 + párrafo + CTA) va segundo. Se agrega un nuevo modificador `.what-we-do-grid--reverse` en `components.css`, gateado a desktop (≥801px): `.what-we-do-visual` tiene por defecto `justify-self:end` (pensado para cuando la foto es la segunda columna, así queda pegada al borde derecho del contenedor) — con la foto ahora en la primera columna, ese mismo `end` la habría dejado pegada al borde interno (junto al texto) en vez del borde izquierdo del contenedor; el modificador cambia ese valor a `start` solo quando aplica, sin tocar el comportamiento del componente base que sigue usando "¿Quiénes somos?". En mobile (≤800px) no hizo falta gatear nada extra: `.what-we-do-visual` ya fuerza `width:100%`/`justify-self:stretch` ahí sin importar el orden. El CTA nuevo (`<a class="btn btn--primary">Hablemos de su caso</a>`) usa el mismo texto, ícono de flecha y destino (`captacion-b2b.html`) que ya usan los demás bloques de cierre del sitio ("Conversemos sobre su caso" en Inicio y Metodología) — no un CTA nuevo inventado desde cero. El copy de Filosofía (título, párrafo) no cambia respecto a D78.

**Verificación:** servidor estático local (`:4178`). Con `getComputedStyle`: "¿Quiénes somos?" tiene `data-surface="light"`, el H2 se ve en `rgb(17, 24, 32)` (navy oscuro, buen contraste sobre `rgb(245, 243, 238)`), el eyebrow dice "Origen". En Filosofía, el primer hijo del grid es `.what-we-do-visual` (la foto) y el segundo es el bloque de texto; el CTA tiene `href="captacion-b2b.html"` y el texto "Hablemos de su caso". Verificado en desktop (1440px, foto a la izquierda pegada al borde del contenedor) y mobile (375px, foto arriba, luego eyebrow/título/texto/CTA apilados). Sin errores de consola en ninguna vista.

### Sesión — Trabaja con nosotros: "Nuestro equipo" reutiliza el bloque "Origen" invertido (D89, 2026-08-25)

**Pedido:** con la página "Quiénes somos" ya aprobada (D88), el Owner pasó a "Trabaja con nosotros" y pidió reutilizar el mismo bloque "Origen" (el que ahora usa "¿Quiénes somos?") para organizar mejor la sección "Nuestro equipo" de esta página — invirtiendo las columnas (foto a la izquierda, contenido del equipo a la derecha) y manteniendo los encabezados alineados a la izquierda.

**Contexto:** "Nuestro equipo" venía siendo una sola columna de texto angosta (`max-width:68ch`, sin fotografía), con un aviso `.ady-note` de "contenido pendiente del cliente" (fotos y nombres por área, perfil de Jaime Marmolejo) debajo del párrafo.

**Aplicado en `prototype/trabaja-con-nosotros.html`:** el contenedor pasa a `.container.grid-2.what-we-do-grid.what-we-do-grid--reverse` — el mismo componente que "Origen" en Quiénes somos, con el modificador `--reverse` que D88 ya creó para Filosofía (foto primero en el DOM/columna izquierda, texto segundo/columna derecha) — reutilizado tal cual, sin tocar `components.css`. Se agrega un `.media-placeholder.what-we-do-visual` para la fotografía del equipo, con su aria-label de "pendiente de material del cliente" (mismo criterio de siempre: nunca se inventa una fotografía real). El `.ady-note` se mueve dentro de la columna de texto, debajo del párrafo, mismo copy sin cambios. No hizo falta ningún ajuste de alineación para los encabezados — `.what-we-do-grid` ya alinea el texto a la izquierda por defecto (igual que "Origen" y Filosofía), así que el pedido de "mantener los encabezados alineados a la izquierda" ya queda cumplido con el componente tal cual, sin CSS adicional. El eyebrow y el H2 siguen diciendo ambos "Nuestro equipo" — esa duplicación no se tocó, no fue parte de este pedido (a diferencia de D88, donde el Owner sí pidió explícitamente cambiar el eyebrow de "Quiénes somos"/"¿Quiénes somos?").

**Verificación:** servidor estático local (`:4179`). Confirmado por DOM: el primer hijo del grid es la foto (`.what-we-do-visual`), el segundo es el bloque de texto; `getComputedStyle` del H2 da `text-align: start` (izquierda); el aviso de contenido pendiente aparece dentro de la columna de texto. Desktop (1440px): foto a la izquierda, "Nuestro equipo" + párrafo + aviso a la derecha. Mobile (375px): foto arriba, contenido apilado debajo. Sin errores de consola en ninguna vista.

### Sesión — se quita el aviso de contenido pendiente en "Nuestro equipo" (D90, 2026-08-25)

**Pedido:** el Owner, conforme con D89, pidió eliminar el aviso "Contenido pendiente del cliente" (fotos y nombres por área, perfil de Jaime Marmolejo) de la sección "Nuestro equipo" — ya no es necesario en pantalla.

**Aplicado en `prototype/trabaja-con-nosotros.html`:** se retira por completo el `<div class="ady-note">` que había quedado dentro de la columna de texto tras D89. Mismo criterio que D76 (el aviso equivalente de founders en "¿Quiénes somos?"): la Decisión D19 y el vacío documentado en `content/04-nuestro-equipo.md` (fotos/nombres por área y ubicación de Jaime Marmolejo, todo pendiente del cliente) siguen vigentes sin cambios — solo desaparece el aviso visible, no se inventa contenido para llenar ese vacío.

**Verificación:** servidor estático local (`:4180`). Confirmado por DOM que la sección ya no contiene ningún `.ady-note`; el orden de columnas (foto izquierda, texto derecha) de D89 no se vio afectado. Captura visual en desktop (1440px): la sección termina limpiamente después del párrafo, sin el recuadro de aviso. Sin errores de consola.

**Además, en esta misma sesión:** se cerraron 4 tareas en segundo plano que habían quedado corriendo de verificaciones locales anteriores (servidores estáticos temporales en los puertos 4176–4179, usados para D86–D89) — cada una ya había cumplido su propósito de verificación y su archivo `.tmp-static-server.js` correspondiente ya se había borrado, pero el proceso de Node seguía activo en segundo plano sin necesidad.

### Sesión — eyebrow de "Nuestro equipo" corregido; nueva sección de 8 tarjetas flip (D91–D92, 2026-08-25)

**Pedido:** en el mismo mensaje, el Owner pidió (1) corregir el eyebrow de "Nuestro equipo" (repetía el título) y (2) crear una sección completamente nueva debajo, usando como referente la grilla de tarjetas de ngds.ai/es (sección "Equipo de clase mundial detrás de cada transformación") — 8 cuadros con nombre e integrante y cargo (autorizando explícitamente inventar ese texto por ahora, ya que el equipo real de AAA son solo 4 personas) que al hacer hover hacen un efecto "flip" para mostrar una descripción corta de funciones — manteniendo la tipografía y paleta de colores propias de AAA, no las del referente.

**D91 — eyebrow, aplicado en `prototype/trabaja-con-nosotros.html`:** mismo ajuste que D88 hizo con "Origen" — el eyebrow pasa de "Nuestro equipo" a "Equipo por función", retomando el nombre que la estructura narrativa aprobada del contenido ya usa para este bloque (`content/04-nuestro-equipo.md`, punto 2 del outline: "Equipo por grupos/función").

**D92 — nueva sección, contenido:** se agrega la sección "Personas, no procesos" / "Quiénes hacen posible cada caso." (copy original de AAA — nunca se reproduce el texto del referente, solo se toma el patrón de interacción de su grilla de tarjetas) con 8 tarjetas flip. Cada tarjeta tiene, al frente, un placeholder de fotografía honesto (`.media-placeholder`, mismo patrón navy diagonal de todo el sitio — no se inventan fotos) con el nombre y cargo superpuestos abajo; al reverso, una descripción corta de funciones sobre el mismo degradado navy que ya usa `.cierre-grid--global .cierre-card--cta`. Los 8 perfiles (Mariana Restrepo, Andrés Salazar, Camila Ortiz, Santiago Vélez, Valentina Gómez, Felipe Cárdenas, Laura Méndez, Daniel Rojas — nombres, cargos y descripciones ficticios) son placeholder explícitamente autorizado por el Owner en el chat, pendiente de reemplazo por el equipo real. Deliberadamente no se usan los nombres reales ya documentados en el sitio (founders Julián Agudelo/Angélica Chamorro, director Jaime Marmolejo, D19) para no atribuirles funciones inventadas — los 8 nombres son ficticios y distintos de esos tres.

**D92 — componente, aplicado en `prototype/css/components.css`:** `.team-flip-grid` (grilla de 4 columnas en desktop, 2 en tablet, 1 en mobile) de `.team-flip-card`, cada una con `perspective` y una cara frontal/trasera en 3D (`transform-style:preserve-3d`, `backface-visibility:hidden`). Se sigue la misma arquitectura de movimiento ya documentada junto a "Superficies" más arriba en el archivo: el ESTADO del flip (`rotateY(180deg)`) se aplica siempre mediante la clase `.is-flipped`, sin gatear por media query — así funciona en cualquier dispositivo, incluido táctil, que no tiene hover real; la TRANSICIÓN (la animación del giro) solo se anima bajo `prefers-reduced-motion:no-preference`; el disparo automático por hover real de mouse (sin necesidad de click) vive aparte, gateado a `(hover:hover) and (pointer:fine)`.

**D92 — interacción, aplicado en `prototype/js/main.js`:** cada tarjeta (`tabindex="0"`, `role="button"`, `aria-pressed`) suma un listener de `click` y de `keydown` (Enter/Espacio) que alterna la clase `.is-flipped` — así el flip queda alcanzable por click de mouse, tap en touch (que no dispara `:hover` de forma confiable) y navegación por teclado, no solo por el hover automático de mouse.

**Verificación:** servidor estático local (`:4181`). Confirmado por DOM: 8 tarjetas, cada una con nombre/cargo/descripción correctos; el eyebrow de "Nuestro equipo" dice "Equipo por función". Toggle por click confirmado en ambos sentidos — `classList`/`aria-pressed` alternan, y tras un instante de espera (para dejar correr la transición) `getComputedStyle` confirma `transform: matrix3d(-1,0,0,0, 0,1,0,0, 0,0,-1,0, 0,0,0,1)` (exactamente `rotateY(180deg)`) sobre la tarjeta activa. Hover real de mouse confirmado disparando el mismo flip solo con CSS, sin usar el toggle JS (`el.matches(':hover')` verdadero + mismo transform correcto). Mobile (375px, grilla a 1 columna): el toggle por tap funciona igual (verificado disparando el evento `click` directamente). Sin errores de consola en ninguna vista.

### Sesión — corrección de D92: solo 4 tarjetas con flip, se arregla el texto en espejo (D93, 2026-08-25)

**Pedido:** viendo el resultado en vivo de D92, el Owner señaló dos correcciones en el mismo mensaje. Primero: en el referente no las 8 tarjetas llevan foto+flip — hay 4 bloques de fotografía simple (sin flip) intercalados entre las 4 tarjetas de personas reales del equipo; pidió corregir la sección para que solo esas 4 personas tengan el efecto flip, y los otros 4 bloques sean solo imagen. Segundo: el nombre y cargo de cada persona se veían "al revés" (en espejo) al hacer el flip, y pidió que el reverso de la tarjeta mostrara únicamente la descripción, sin el nombre/cargo.

**Conteo de tarjetas, aplicado en `prototype/trabaja-con-nosotros.html`:** de los 8 perfiles inventados en D92, se conservan 4 como tarjetas flip con nombre (Mariana Restrepo, Andrés Salazar, Camila Ortiz, Santiago Vélez) y se quitan como perfiles con nombre los otros 4 (Valentina Gómez, Felipe Cárdenas, Laura Méndez, Daniel Rojas) — esos 4 espacios de la grilla pasan a ser `.media-placeholder` sueltos (mismo placeholder honesto de siempre, sin nombre/cargo/interacción/flip). El orden de la grilla queda intercalado: persona, imagen, persona, imagen, persona, imagen, persona, imagen — igual patrón que el referente.

**Bug de texto en espejo, investigación:** el reverso de la tarjeta (`.team-flip-card__back`) nunca tuvo nombre/cargo en el HTML — solo el párrafo de descripción — así que lo que el Owner veía "en espejo" no podía ser una duplicación de contenido; era la cara FRONTAL (con nombre/cargo) asomando "por detrás" durante o después del flip. Esto es un bug conocido de `backface-visibility` en algunos navegadores/GPU: cuando esa propiedad no se aplica de forma confiable, un elemento rotado 180° en el eje Y se sigue pintando, pero en espejo horizontal — que es exactamente el síntoma de "texto al revés" que describió el Owner.

**Fix, aplicado en `prototype/css/components.css`:** se mantiene `backface-visibility:hidden` (no era incorrecto, solo insuficiente por sí solo en algunos navegadores) y se agrega `visibility` como mecanismo de respaldo independiente: cada cara alterna `visibility:hidden`/`visible` exactamente en el cruce de los 90° del giro, usando `transition-delay:350ms` sobre una rotación de 700ms — para que ese cruce caiga a la mitad exacta del tiempo, se cambia además la curva de animación del giro de la curva de entrada asimétrica (`--motion-ease-entrance`) a `ease-in-out`, simétrica. Con `visibility:hidden` la cara no activa queda garantizada invisible sin importar si el navegador soporta bien el backface-visibility nativo — mismo criterio de "estado siempre aplicado, animación gateada a `prefers-reduced-motion`" que ya sigue el resto del sitio.

**Verificación:** servidor estático local (`:4182`). Confirmado por DOM que la grilla queda en el orden persona/imagen intercalado (4 `.team-flip-card` + 4 `.media-placeholder` sueltos). Con `getComputedStyle`, antes del flip: frente `visibility:visible`, reverso `visibility:hidden`. Tras el flip (con espera para pasar el cruce de 350ms): frente `visibility:hidden`, reverso `visibility:visible`, junto con el `transform:matrix3d(...)` esperado de `rotateY(180deg)` — confirma que el reverso queda garantizado sin el nombre/cargo del frente, visible u oculto según corresponda. Verificado en desktop (1440px, patrón intercalado visible) y mobile (375px). Sin errores de consola en ninguna vista.

### Sesión — flip más rápido y tarjetas cuadradas (D94, 2026-08-25)

**Pedido:** el Owner, conforme con D93, pidió dos ajustes finos en el mismo mensaje: el efecto flip se sentía un poco lento, y las tarjetas eran muy altas — pidió hacerlas más cuadradas para ahorrar viewport.

**Aplicado en `prototype/css/components.css`:** la duración del giro (`.team-flip-card__inner`) baja de `700ms` a `350ms`, misma curva `ease-in-out`. El `transition-delay` de `visibility` — el mecanismo de respaldo que D93 agregó contra el bug de texto en espejo, sincronizado al cruce de los 90° del giro — baja en la misma proporción, de `350ms` a `175ms` (la mitad exacta de los nuevos 350ms), para seguir cruzando en el momento correcto con el giro más corto. Tanto `.team-flip-card` (las 4 tarjetas de personas) como `.team-flip-grid > .media-placeholder` (los 4 bloques de foto simple de D93) pasan de `aspect-ratio: 3/4` a `1/1` — se cambian ambos tipos de bloque igual, para que la grilla completa (personas + fotos) se siga viendo pareja en altura.

**Verificación:** servidor estático local (`:4183`). Confirmado con `getBoundingClientRect` que la tarjeta mide igual de ancho que de alto (ratio 1.00). Con `getComputedStyle`: `transition` de `.team-flip-card__inner` en `0.35s`, de `.team-flip-card__face` en `0.175s`. El toggle de flip probado de nuevo con el timing más corto sigue confirmando `visibility`/`transform` correctos tras el giro (mismo patrón de verificación de D93). Captura visual en desktop (1440px): las tarjetas se ven notablemente más cuadradas, la sección ocupa menos alto de pantalla. Sin errores de consola.

### Sesión — tarjetas flip sin patrón de "foto pendiente"; logo de marca de agua; radio parejo (D95, 2026-08-25)

**Pedido:** conforme con D94, el Owner señaló que las 8 tarjetas usaban el mismo patrón rayado (el de `.media-placeholder`, que en todo el sitio significa "aquí va una fotografía pendiente") — pero, como ya había explicado antes, las 4 tarjetas de personas con flip nunca van a llevar fotografía real, ni al frente ni al reverso. Pidió que esas 4 tarjetas usaran el azul mate del sitio, sin las líneas del patrón, y que se agregara el isotipo de AAA Estudio Legal (el mismo del footer) en la esquina superior izquierda de cada cuadro, con el mismo efecto semitransparente que ya tiene ese logo en el footer, para darle más sustento visual. Por último, pidió parejar el radio de las esquinas de todas las tarjetas, que notó distinto entre unas y otras.

**Fondo, aplicado en `prototype/trabaja-con-nosotros.html` y `prototype/css/components.css`:** se quita la clase `media-placeholder` del frente de las 4 tarjetas (ya no necesita el patrón rayado) y tanto el frente como el reverso de cada tarjeta pasan a un fondo plano `var(--color-navy-deep)` — el reverso, que desde D92 tenía su propio degradado radial+lineal, ahora comparte exactamente el mismo fondo que el frente, para que el flip se sienta como un mismo objeto girando, no dos tratamientos visuales distintos.

**Logo, aplicado en ambos archivos:** cada una de las 8 caras (4 tarjetas × 2 caras) suma un `<img class="team-flip-card__logo" src="assets/img/isotipo-AAA-legal.svg">` — el mismo isotipo que ya usa el watermark de fondo del footer (`.home-footer__pattern`) — posicionado en la esquina superior izquierda (40×40px), con el mismo filtro `grayscale(1) brightness(2.8)` que usa ese watermark para que el isotipo se lea como una marca clara sobre el fondo navy. La opacidad sube de 0.05 (la del footer, pensada para un patrón mucho más grande de fondo) a 0.22 — a 0.05 el isotipo se habría perdido por completo en un cuadro tan chico; 0.22 lo deja visible como marca de agua sutil, sin competir con el nombre/cargo o la descripción.

**Radio de esquina, investigación:** los 4 bloques de foto simple (`.team-flip-grid > .media-placeholder`, agregados en D93) heredaban `border-radius: var(--radius-xl)` (24px) directamente de la clase base `.media-placeholder`, que nunca se había sobreescrito para ese contexto — mientras que las tarjetas flip usaban `var(--radius-md)` (8px) desde el principio. Esa diferencia de 24px vs 8px era justo lo que el Owner notó. Se agrega `border-radius: var(--radius-md)` explícito a esos 4 bloques en `components.css`, para que las 8 cajas de la grilla (4 personas + 4 fotos) compartan el mismo radio.

**Verificación:** servidor estático local (`:4184`). Con `getComputedStyle`: el frente de una tarjeta confirma `background-image: none` (sin el patrón rayado) y `background-color: rgb(6, 59, 89)` (navy-deep); `border-radius` de `8px` idéntico tanto en las tarjetas flip como en los bloques de foto simple; el logo confirma `src="assets/img/isotipo-AAA-legal.svg"` y `opacity: 0.22`. Captura visual en desktop (1440px): el isotipo se ve como una marca de agua clara en la esquina superior izquierda de cada tarjeta de persona, las 4 fotos simples conservan su patrón rayado (siguen señalando "pendiente de material"), y las 8 cajas se ven con el mismo radio de esquina. El flip se probó de nuevo tras el cambio — el reverso sigue mostrando la descripción, ahora con el mismo fondo navy y el mismo logo que el frente. Sin errores de consola.

### Sesión — la 2ª fila de "Personas, no procesos" queda en damero (D96, 2026-08-25)

**Pedido:** el Owner, feliz con D95, pidió un último ajuste: la fila de abajo de la grilla debía cambiar su orden a Imagen/Flip/Imagen/Flip, para verse más consistente respecto a la fila de arriba.

**Contexto:** la 1ª fila ya iba Flip/Imagen/Flip/Imagen (Mariana Restrepo, imagen, Andrés Salazar, imagen); la 2ª fila repetía exactamente ese mismo orden (Camila Ortiz, imagen, Santiago Vélez, imagen) — con las dos filas iguales, cada columna de la grilla quedaba con dos bloques del mismo tipo apilados (columna 1: dos personas, columna 2: dos imágenes, etc.).

**Aplicado en `prototype/trabaja-con-nosotros.html`:** se reordenan los 4 bloques de la 2ª fila a imagen/Camila Ortiz/imagen/Santiago Vélez, y se reasignan sus `--stagger-index` (0 a 3) para que la entrada en cascada al hacer scroll siga el nuevo orden visual de izquierda a derecha. Ninguna tarjeta, texto ni comportamiento cambia — es puramente un reordenamiento de los mismos 8 bloques ya existentes. El resultado es un patrón de damero: cada columna de la grilla ahora tiene un bloque de persona y uno de imagen, nunca dos iguales verticalmente.

**Verificación:** servidor estático local (`:4185`). Confirmado por DOM el nuevo orden completo de los 8 hijos de `.team-flip-grid`: `flip(Mariana), image, flip(Andrés), image, image, flip(Camila), image, flip(Santiago)`. Captura visual en desktop (1440px): el damero se ve claramente — la 1ª fila empieza con una persona, la 2ª con una imagen. Sin errores de consola.

### Sesión — espacio entre secciones reducido; margen del título de Postulación corregido (D97, 2026-08-25)

**Pedido:** el Owner, con una captura marcada en rojo, señaló un espacio vertical excesivo entre "Nuestro equipo" y "Personas, no procesos" y pidió reducirlo para no alargar el viewport. En el mismo mensaje, notó que el título de la sección "Postulación" (al final de la página) no tenía el mismo margen izquierdo que usa el resto de la página.

**Espacio entre secciones — investigación:** "Nuestro equipo" y "Personas, no procesos" son ambas `data-surface="light"`, sin ningún divisor visual entre sí (mismo fondo #F5F3EE) — el vacío entre ellas era simplemente la suma del `padding-block` completo de `.section` de cada una (`--space-section`, un clamp de 6rem a 10rem — hasta 160px por lado, hasta ~320px juntos en pantallas anchas). Al no haber ningún elemento visual marcando la transición entre ambas, ese espacio se sentía como un vacío injustificado, no como un respiro entre bloques de temas distintos.

**Aplicado en `prototype/trabaja-con-nosotros.html`:** se agrega `style="padding-bottom: var(--space-16)"` a la sección de "Nuestro equipo" — mismo criterio que ya usa el hero de esta misma página (que también tiene su propio override de `padding-bottom`) — bajando ese lado de hasta 160px a 64px fijos. No se tocó el `padding-top` de "Personas, no procesos", que sigue con el espaciado estándar del sitio.

**Margen de "Postulación" — investigación:** el contenedor de esa sección era `<div class="container" style="max-width: 60ch;">` — el `max-width` angosto (pensado para limitar el ancho de lectura del formulario) estaba aplicado directamente sobre la clase `.container`, que ya centra su contenido con `margin-inline:auto`. Al angostar el propio `.container`, este se recentraba en el viewport con su propio margen calculado, en vez of heredar el margen izquierdo del `.container` estándar (1200px) que usa el resto de las secciones de la página — de ahí que el título se viera corrido hacia la derecha respecto al resto.

**Fix, aplicado en el mismo archivo:** se mueve el `style="max-width: 60ch;"` a un `<div>` interno, envolviendo el eyebrow, el H2 y el formulario — el mismo patrón que ya usan el hero de esta página y "¿Quiénes somos?" (`.container` sin restricción + un div interno angosto solo para el bloque de texto). El `.container` exterior queda sin ningún override, así que su margen izquierdo vuelve a coincidir con el de cualquier otra sección.

**Verificación:** servidor estático local (`:4186`). Con `getComputedStyle`, `padding-bottom` de "Nuestro equipo" confirmado en `64px`. Con `getBoundingClientRect`, el borde izquierdo del `.container` de "Postulación" (112.5px en un viewport de 1440px) coincide exactamente con el del `.container` del hero de la misma página. Captura visual en desktop (1440px): el espacio entre "Nuestro equipo" y "Personas, no procesos" se ve notablemente más compacto; el título de "Postulación" queda alineado con el mismo margen que el resto del contenido de la página. Verificado también en mobile (375px), sin cambios visuales inesperados. Sin errores de consola.

### Sesión — se normaliza el tamaño del párrafo de hero en Metodología/Quiénes somos/Trabaja con nosotros (D98, 2026-08-25)

**Pedido:** ya en un ajuste de carácter general (no de una sección puntual), el Owner señaló que el párrafo debajo del H1 del hero se veía de tamaño distinto en Metodología respecto a Quiénes somos y Trabaja con nosotros, y pidió normalizar los tres a 1.065rem.

**Investigación:** el párrafo de hero de Metodología (`prototype/servicios.html`) nunca tuvo un `font-size` propio — caía por defecto en `var(--text-base)` (1.0625rem), el valor más cercano de la escala de tokens del sitio al 1.065rem que pidió el Owner. Los párrafos de hero de Quiénes somos y Trabaja con nosotros, en cambio, sí tenían `style="font-size: var(--text-md)"` (1.25rem) — de ahí la diferencia que notó.

**Aplicado en `prototype/nuestro-equipo.html` y `prototype/trabaja-con-nosotros.html`:** el `font-size` de ese párrafo baja de `var(--text-md)` a `var(--text-base)` en ambas páginas. **Aplicado también en `prototype/servicios.html`:** aunque el valor ya coincidía por defecto, se agrega el mismo `style="font-size: var(--text-base)"` explícito, para que las 3 páginas queden documentadas con la misma decisión de diseño en vez de que una de ellas dependa de una coincidencia de que nunca se haya tocado. No se tocaron Inicio ni Captación B2B — usan su propio hero de dos columnas (`.hero-shell`), distinto del hero simple de estas 3 páginas, y no fueron parte de este pedido.

**Verificación:** servidor estático local (`:4187`). Con `getComputedStyle` sobre el párrafo inmediatamente después del `<h1>` en cada una de las 3 páginas: `17px` (1.0625rem) exacto en Metodología, Quiénes somos y Trabaja con nosotros. Sin errores de consola.

### Sesión — Home: primera fase de motion con GSAP (D99, 2026-08-28)

**Alcance autorizado por el Owner:** únicamente Inicio: entrada editorial del hero, parallax fotográfico sutil solo en desktop, reveal secuencial de los H2 (regular y luego énfasis italic/cobre), entrada coordinada de los tres paneles de Servicios y entrada/conteo de las tres métricas. No se implementaron SplitText, pinning, smooth scroll ni scroll-jacking, y no se modificaron páginas internas.

**Arquitectura aplicada:** GSAP 3.15.0 y ScrollTrigger 3.15.0 se sirven como dos archivos oficiales minificados locales desde `prototype/js/gsap/`, sin npm, build ni plugins adicionales. Toda la orquestación de Inicio queda aislada en `prototype/js/home-motion.js` y se conecta al HTML mediante atributos `data-motion`. `prototype/js/main.js` conserva las interacciones generales y deja de duplicar el parallax/conteo que ahora pertenecen a la capa de Home. Para la futura migración al Block Theme, GSAP y ScrollTrigger podrán registrarse como scripts del tema y `home-motion.js` encolarse condicionalmente solo en la plantilla de Inicio.

**Progressive enhancement y accesibilidad:** HTML y CSS muestran el estado final por defecto; si cualquiera de los scripts falla, el contenido sigue visible y funcional. `gsap.matchMedia()` separa desktop/tablet-mobile y `prefers-reduced-motion`; con reducción de movimiento no se crean timelines, el parallax queda desactivado y las cifras muestran directamente su valor final. Las animaciones usan solo `opacity` y `transform`, sin propiedades de layout ni saltos intencionales de geometría.

**Verificación:** sintaxis válida en `home-motion.js` y `main.js`; referencias de los cuatro scripts comprobadas; HTML revisado sin atributos `data-motion` duplicados o targets ausentes; `git diff --check` sin errores. Se verificaron por código las tres rutas de `gsap.matchMedia()` (desktop, mobile y reduced-motion) y el fallback de cifras. La recarga visual automatizada del documento `file://` no está disponible en el navegador de verificación por su política de seguridad; queda pendiente el gut-check visual final en el navegador local abierto por la Product Lead, sin afectar la validación técnica ni el fallback.

### Sesión — Home: prueba fotográfica temporal de prototipo (D100, 2026-08-28)

**Alcance autorizado por la Product Lead:** se reemplazan únicamente los placeholders principales de Inicio con siete fotografías de banco suministradas para validar dirección visual, narrativa y crops. Asignación: Hero (equipo con espacio negativo), Qué hace AAA (profesional revisando documentos), Servicios — acreedores (mano/libro), normalización (detalle de libro), corporativo (dos profesionales), Dimensión humana (grupo reunido) y CTA final (equipo en oficina). No se modifican layout, copy, spacing, motion ni componentes.

**Carácter temporal:** los archivos se nombran `temp-prototype-home-*`, los elementos HTML llevan `data-asset-status="temporary-prototype"` y los textos alternativos no presentan a las personas fotografiadas como integrantes de AAA. Los tres paneles de Servicios conservan además su `data-original-img-id` para facilitar el reemplazo posterior por los activos definitivos. La fotografía arquitectónica de Londres queda deliberadamente fuera por el riesgo de asociación geográfica y estética tradicional detectado en la auditoría.

**Crops:** cada destino usa una clase local `temp-home-photo--*` con `object-fit: cover` y `object-position` diferenciado para desktop/mobile. El CTA conserva su estructura y recibe la imagen como última capa del fondo bajo overlays navy de contraste. Los archivos originales entregados no se alteraron.

**Verificación:** siete referencias y siete archivos presentes; siete marcadores temporales; tres imágenes de Servicios conservan la clase `.media-placeholder` requerida por la animación GSAP existente; sintaxis JS y `git diff --check` sin errores. No se modificaron páginas internas.

### Sesión — Home: refinamiento de crops y previews temporales (D101, 2026-08-28)

**Pedido:** ajustar únicamente comportamiento fotográfico en Inicio: encuadre y overlay del Hero; full-bleed real de Qué hace AAA en desktop con retorno a retícula en mobile; mayor visibilidad de las fotografías de Servicios y fondo institucional de la sección; una preview temporal repetida en los tres reels de Casos; y altura controlada de Dimensión humana.

**Aplicado:** el Hero conserva `cover`, mueve el foco vertical para proteger los rostros y reduce la combinación de opacidad/scrim sin retirar el tratamiento azul. Qué hace AAA refuerza la imagen como mitad derecha full-bleed desde 641px y vuelve a 4:3 dentro del container en mobile. Servicios usa el azul institucional ya existente, overlay 0.56 por defecto y 0.38 en hover/focus, manteniendo expansión y captions. Los tres reels 9:16 reciben la misma fotografía temporal `temp-prototype-home-case-preview.jpg`, con play y carrusel intactos. Dimensión humana fuerza una altura panorámica acotada en desktop y cercana a 4:3 en mobile, siempre con `object-fit:cover`, en lugar de heredar la proporción intrínseca.

**Carácter temporal:** la nueva preview de Casos se identifica mediante `data-asset-status="temporary-prototype"` y texto alternativo vacío por ser un recurso visual repetido cuyo estado pendiente ya está anunciado por cada control de reproducción. No se presenta como un caso real de AAA.

**Verificación:** todas las referencias temporales existen; los tres reels conservan 9:16, controles y estructura; los breakpoints de Qué hace AAA y Dimensión humana mantienen anchos dentro del viewport; las capas de overlay conservan contraste de texto y permiten reconocer la fotografía; sintaxis JS y `git diff --check` sin errores. No se modificaron copy, tipografía, motion ni páginas internas.

### Sesión — Home: foco del Hero, orden de evidencia y peso de títulos (D102, 2026-08-28)

**Pedido:** ajustar solo en desktop el encuadre y la visibilidad de la fotografía temporal del Hero; situar En cifras después de Casos de éxito; y usar semibold en los nombres de Sectores y en los seis atributos de ¿Por qué AAA?.

**Aplicado:** desde 1024px el Hero conserva dimensiones, layout y gradiente, pero desplaza el punto focal de la fotografía hacia arriba para proteger las cabezas y reduce de forma contenida la densidad del scrim azul. Casos de éxito precede ahora a En cifras, moviendo ambos bloques completos sin alterar su contenido, motion ni estructura interna. `.sector-card__name` y los H3 de `.focus-grid` usan `font-weight: 600`, sin afectar otros encabezados ni la tipografía display.

**Verificación:** el HTML contiene una única instancia de Casos, Cifras y Dimensión humana, en ese orden; mobile conserva sus reglas previas de crop y overlay; sintaxis de `home-motion.js` y `main.js` válida; `git diff --check` sin errores. La política del navegador integrado bloquea la recarga automatizada de documentos `file://`, por lo que el encuadre final queda preparado para revisión visual en la pestaña local de la Product Lead.

**Ajustes posteriores:** a solicitud de la Product Lead, el Hero de Inicio aumenta su altura únicamente desde 1024px (`600–720px / 72vh` pasa a `690–820px / 82.8vh`). Casos de éxito y En cifras adoptan la misma separación de 32px entre encabezado y contenido usada por Nuestros servicios; en mobile, el énfasis cobre de ambos títulos comienza en una línea nueva. No cambian tablet, contenido, crop, overlay ni componentes compartidos.

**Motion y reels:** los contenedores 9:16 de Casos usan el radio discreto de card del sistema (`--radius-md`, 8px). En los H2 animados, el fragmento italic/cobre deja de esperar una segunda fase y aparece dentro del mismo reveal del título regular, evitando vacíos temporales en composiciones regular–italic–regular. El fallback sin JS y `prefers-reduced-motion` permanecen intactos.

**Footer global:** se elimina el rótulo visual “Sitio” en todas las páginas que comparten el footer, conservando íntegros el mapa de navegación, sus destinos y su `aria-label`. No se aplican todavía otros cambios responsive mientras la Product Lead revisa la propuesta de compactación mobile.

**Compactación mobile aprobada:** hasta 640px el footer reduce logo, padding y gaps; organiza contactos en dos columnas con dirección y correo a ancho completo; presenta el mapa del sitio en dos columnas y LinkedIn/Instagram en una fila; compacta la franja legal sin reducir los targets táctiles de 44px. El patrón decorativo también baja de escala. Adicionalmente, los tres paneles de Servicios eliminan todos sus bordes en desktop, tablet y mobile, conservando hover, foco, tamaño y contenido.

### Sesión — Home: carrusel responsive de ¿Por qué AAA? (D103, 2026-08-28)

**Aplicado:** desde 1024px los seis atributos se muestran completos en una sola fila, con seis columnas iguales, altura común y gap uniforme. Entre 641px y 1023px se conserva la retícula responsive previa. Hasta 640px el bloque se convierte en un carrusel nativo sin autoplay: dos cards completas por vista, tres páginas, swipe, `scroll-snap`, scrollbar oculto, indicador “n de 3” y flechas anterior/siguiente con estado `disabled` real en los extremos.

**Progressive enhancement:** sin JavaScript las cards siguen siendo desplazables mediante scroll táctil; los controles solo aparecen cuando JS está disponible. El script compartido se activa únicamente al encontrar `data-why-carousel` en Inicio, respeta `prefers-reduced-motion` para el desplazamiento programático y no modifica otros carruseles ni páginas internas.

**Iconografía y escala:** se verifica que las seis cards tienen icono asignado: Infraestructura, Equipo especializado, Tecnología propia, Seguridad de la información y Compliance usan los SVG entregados por la Product Lead —idénticos byte a byte a los ya incorporados— y Cobertura nacional conserva su SVG correspondiente. Los seis títulos se normalizan a 17px con interlínea 1.2 mediante una regla específica del carrusel, válida en desktop, tablet y mobile.

### Sesión — Servicios: introducción editorial (D104, 2026-08-28)

**Aplicado:** la Product Lead aprueba sustituir el encabezado genérico “Nuestros servicios” por una introducción que explicita el enfoque diferencial de AAA. El bloque conserva su posición y las tres cards existentes, e incorpora eyebrow “Servicios”, el H2 “Cada crédito en riesgo exige una estrategia jurídica propia.” con énfasis italic/cobre en la segunda frase, y un párrafo que conecta defensa en insolvencia, normalización de activos y derecho corporativo desde la representación exclusiva del acreedor.

**Alcance:** no se renombra todavía el enlace “Metodología” del menú, no se reordena la página y no se modifica el copy ni la estructura de las tres cards. El cambio queda limitado a la introducción de la sección y su tratamiento tipográfico local.

### Hito — Homepage: baseline visual aprobado internamente (D105, 2026-08-28)

**Estado:** la Homepage alcanza el baseline visual aprobado internamente por la Product Lead. La composición completa, su comportamiento responsive y la primera capa de motion con GSAP están implementados en el prototipo y constituyen la nueva referencia visual para la siguiente etapa del sitio.

**Activos temporales:** las fotografías actualmente incorporadas en Inicio son imágenes de banco usadas exclusivamente para validar dirección visual, encuadres y comportamiento de los componentes. Permanecen identificadas como activos temporales de prototipo y no se consideran fotografías finales de AAA.

**Gates y siguiente fase:** esta aprobación es interna y no equivale a la aprobación del cliente; Gate 1 continúa pendiente. La siguiente fase será la propagación controlada del sistema visual aprobado hacia Metodología, Quiénes somos y Trabaja con nosotros, validando una página a la vez.

**WordPress:** no se ha iniciado implementación WordPress, construcción de theme, integración con Gutenberg ni instalación de plugins. El trabajo permanece en la fase de prototipo HTML/CSS/JS.

### Sesión — coherencia editorial y motion en páginas internas (D106, 2026-08-30)

**Aplicado:** Metodología, Quiénes somos y Trabaja con nosotros adoptan el encabezado editorial compartido para sus H2 principales: eyebrow, escala de 42px en desktop / 31px en mobile y énfasis semántico italic/cobre. Los títulos de cards, labels y elementos de formulario permanecen fuera del alcance. En Metodología, el primer eyebrow cambia de “Servicios” a “En AAA Legal te acompañamos”, sin modificar el título ni el contenido restante.

**Motion reutilizado:** `prototype/js/home-motion.js` deja de ser una implementación exclusiva de Inicio para promover únicamente el reveal `eyebrow → regular → énfasis` como comportamiento compartido mediante `data-motion="section-title"`. El Hero, parallax y entrada de paneles continúan limitados a Home. Se conservan contenido visible por defecto, fallback sin GSAP, `prefers-reduced-motion` y animación exclusiva de `opacity`/`transform`.

**Contenido y evidencia:** en Inicio, las tres situaciones del acreedor pasan de primera persona individual a voz corporativa plural, sin alterar su componente. En Quiénes somos se reutiliza, inmediatamente después de Origen, el mismo componente de cifras de Home —estructura, métricas, jerarquía, responsive y conteo— bajo el mismo modificador compartido, sin duplicar reglas.

**Pendiente deliberado:** la compactación mobile de “Personas, no procesos” y la recomposición visual del formulario de postulación quedan en fase de recomendación; no se modificaron todavía sus cards, campos, lógica ni layout.

**Verificación:** `git diff --check` y sintaxis de `home-motion.js`/`main.js` sin errores. En las tres páginas internas, los H2 computan 42px en desktop y 31px en mobile; no existe overflow horizontal en los breakpoints revisados; el contenido permanece visible cuando GSAP no está disponible y los activos referenciados cargan correctamente.

### Ajuste — banner de cookies compacto (D107, 2026-08-30)

El aviso global de cookies conserva texto, enlaces, consentimiento y contraste, pero adopta una composición horizontal discreta en desktop: párrafo y dos acciones en una sola línea, padding reducido y controles de 40px. En mobile mantiene el texto en la primera fila y presenta las dos acciones completas debajo, evitando desbordes y preservando áreas táctiles adecuadas.

### Ajuste — formulario de postulación abierto y claro (D108, 2026-08-30)

En Trabaja con nosotros, la postulación adopta la alternativa visual clara aprobada: `light-base`, encabezado editorial centrado y formulario abierto dentro del container, sin card exterior. Desktop distribuye nombre/correo en dos columnas y conserva el CV a ancho completo; mobile vuelve a una columna. El selector nativo de archivo conserva accesibilidad y recibe únicamente tratamiento visual consistente con el sistema.

**Ajuste posterior:** el Owner reemplaza el encabezado por “Donde el talento se convierte en trayectoria. Conozca lo que significa ser parte de AAA.” e incorpora una descripción breve sobre crecimiento, rigor, criterio y excelencia. Se eliminan explícitamente el campo adicional pendiente y la nota técnica sobre correo/CRM/prototipo. En mobile, el CTA recibe separación adicional respecto al campo de carga de CV.

**Ajuste de proporción:** el encabezado deja de estar limitado a una columna tipográfica angosta y adopta el mismo ancho máximo de 1080px del formulario. En desktop, frase regular y énfasis italic forman dos líneas editoriales completas, reduciendo sensiblemente el alto del capítulo; mobile conserva el ajuste natural dentro de la retícula.

### Sesión — Contacto: propagación del sistema interno y formulario B2B (D109, 2026-08-31)

**Dirección aprobada:** Contacto se simplifica deliberadamente a tres capítulos: Hero editorial oscuro, contacto/formulario sobre `light-base` y footer azul profundo existente. Se retiran de esta página los bloques intermedios “Por qué AAA”, “Nuestro proceso”, “Objeciones resueltas”, “Evidencia de confianza” y el cierre anterior de dos cards; no se trasladan ni se reescriben en otro lugar.

**Hero:** adopta `.hero--editorial`, conserva únicamente eyebrow + título y mantiene la misma alineación, escala tipográfica, altura compacta y scrim de las páginas internas. Por instrucción de la Product Lead no se asigna fotografía: la superficie usa exclusivamente el azul institucional y una luz contenida construida con los tonos existentes.

**Contacto B2B:** el formulario queda a la izquierda y la fotografía que ya usaba el cierre de la página pasa a la derecha. Los campos responden al contexto organizacional de AAA: nombre, organización, cargo, correo corporativo, teléfono, tipo de organización, asunto de interés y contexto de la consulta. El prototipo no transmite datos (`onsubmit="return false"`) y no incorpora redacción legal nueva; la conexión real y la URL externa de ADY continúan pendientes de definición del cliente.

**Sistema compartido:** el bloque reutiliza `light-base`, `.chapter`, `.section-heading--editorial`, la presentación clara del formulario de postulación y el motion compartido mediante `data-motion="section-title"`. Desktop usa formulario/fotografía en dos columnas; tablet y mobile pasan a una columna con imagen 4:3 y campos de ancho completo. El footer no cambia.

**Verificación:** `git diff --check` y sintaxis de `main.js`/`home-motion.js` sin errores; el `<main>` contiene únicamente Hero y contacto/formulario antes del footer. La revisión automatizada `file://` sigue limitada por la política del navegador integrado, por lo que el QA visual final se realiza en la pestaña local de la Product Lead.

## Nota de unificación de ramas (2026-09-07)

**Pregunta pendiente registrada, no resuelta por invención (AGENTS.md § Fuentes de verdad):** esta sesión (agente A, instrucciones recibidas como "el Owner") venía trabajando sobre `product-lead-ajustes-visuales`/`main` con su propia numeración de decisiones D1–D98, sin visibilidad de que, en paralelo, otro flujo de trabajo (agente/proceso distinto, instrucciones de "la Product Lead", rama `product-lead-refinement-v2`) avanzaba **desde ese mismo D98** con un alcance mucho mayor — motion con GSAP en Home, fotografía temporal de banco, un rediseño editorial propagado a las páginas internas, y una reestructuración completa de Captación B2B → "Contacto" — documentado arriba como D99–D109 (2026-08-28 a 2026-08-31). Los dos flujos llegaron a numerar su siguiente decisión igual ("D99"), por dos cosas distintas. Al unificar las ramas (a pedido del Owner, 2026-09-07, tras detectar que un push de este agente a `main` había revertido accidentalmente el sitio en vivo a un estado anterior a D99–D109), se resuelve la colisión de numeración renombrando la decisión de este agente (03A — Arquitectura WordPress) de "D99" a **D110** — ver más abajo — sin tocar ni renumerar D99–D109 (arriba), que ya estaban implementadas, commiteadas y desplegadas antes de que este agente las viera. **Sigue pendiente de que el Owner/Product Lead confirmen:** (1) si el uso de GSAP/ScrollTrigger (D99, arriba) fue una decisión ya evaluada contra la restricción documentada en `prototype/README.md` § 5 y AGENTS.md ("no se instaló ninguna dependencia nueva — GSAP/AOS/Lenis"), o si sigue abierta; (2) qué proceso evita que ambos flujos vuelvan a numerar en paralelo o a pisarse el despliegue — mientras no se resuelva, cualquier push a `main`/`product-lead-ajustes-visuales` desde cualquiera de los dos flujos debería confirmarse contra el HEAD real de ambas ramas antes de pushear.

## 03A — Arquitectura WordPress: checkpoint de seguridad y andamiaje inicial del tema (D110, 2026-09-07)

**Pedido:** con el prototipo estático ya estable desde la perspectiva de este agente (D1–D98, las 8 páginas verificadas en vivo en https://aaalegal.design-505.workers.dev/ — sin visibilidad todavía de D99–D109, ver nota de unificación arriba), el Owner pidió (1) guardar un punto de control de seguridad, y (2) iniciar la infraestructura WordPress — desarrollo local con la app **Local** (WP Engine) — pidiendo explícitamente el paso a paso y la preparación de los temas y plugins necesarios, recordando que el alcance exige que el sitio sea administrable.

**Checkpoint:** se creó el tag anotado `checkpoint-prototype-estable-2026-09-07` sobre el commit `6456a00` (D98) en `main` — este tag quedó desactualizado en cuanto se descubrió D99–D109 (ver nota arriba). **Actualización (2026-09-07, tras D111):** ese tag se eliminó (local y remoto) y se reemplazó por `checkpoint-mvp-unificado-2026-09-07`, sobre el commit de merge `1335235` que unifica las 3 ramas — ese es el checkpoint vigente.

**03A — Arquitectura WordPress:** AGENTS.md y PROJECT.md (Ficha C1 § Marco técnico preliminar) ya tenían, desde la fase de C1, un marco técnico *candidato* completo para esto — block theme propio, Gutenberg nativo, `theme.json` como fuente de tokens, patterns/template parts, core blocks primero, plugins mínimos — a la espera de la decisión formal de 03A, que AGENTS.md marcaba explícitamente como "condición de parada" (detenerse y preguntar) hasta que el Owner autorizara instalar dependencias/inicializar WordPress. El pedido de esta sesión constituye esa autorización explícita. Se registra como **Decisión D110** (renombrada desde "D99" por la colisión de numeración, ver nota arriba; PROJECT.md/AGENTS.md actualizados igual): se ratifica el marco candidato sin reinventarlo — `prototype/css/tokens.css` ya declaraba en su propio comentario de cabecera la intención de mapear 1:1 a `theme.json`. Plugins decididos para esta fase: Polylang (ya en AGENTS.md § Stack), Contact Form 7 (formularios de Postulación y Contacto/B2B — cubre la notificación por correo sin CRM que ya exigía D12), Rank Math (SEO/metadatos editables). Explícitamente sin ACF ni plugins de caché/seguridad todavía (se evalúan solo si un contenido concreto los justifica, o en la fase de hosting real). CPTs quedan diferidos indefinidamente — el contenido actual no exige ninguno más allá de páginas/posts nativos (D3 sigue vigente). **Nota importante:** el andamiaje del tema (`theme.json`, `assets/css/components.css`, los 2 patterns de referencia) se construyó traduciendo `prototype/css/tokens.css`/`components.css` **tal como estaban en D98**, sin el sistema editorial/motion de D99–D109 todavía — habrá que revisar ese andamiaje contra el estado real del prototipo (post-unificación) antes de seguir portando patterns, ver `WORDPRESS-SETUP.md`.

**Aplicado:** AGENTS.md actualizado (marco técnico ya no "preliminar", condiciones de parada/prohibiciones ajustadas a la autorización de D110, estado de git corregido — ya no dice "sin commits todavía", carpetas protegidas ahora mencionan `wp-content/themes/aaa-estudio-legal/`); `.gitignore` ampliado para no versionar WordPress core ni plugins, solo el tema propio. Se crean `WORDPRESS-SETUP.md` (guía paso a paso completa: instalar Local, crear el sitio, permalinks, symlink del tema, plugins, próximos pasos) y `wp-content/themes/aaa-estudio-legal/` (andamiaje real del tema: `theme.json` completo traducido de `tokens.css`, `style.css`, `functions.php` con fuentes/soportes de tema, `parts/header.html` y `parts/footer.html` traducidos del header/footer reales del sitio, `templates/` mínimos, y 2 patterns de referencia). El resto de los patterns del inventario de `prototype/README.md` § 3 queda trackeado como pendiente en `WORDPRESS-SETUP.md`, no se construyó todo en esta sesión — se prioriza una base sólida y verificable sobre un volumen grande sin probar.

## Unificación de ramas ejecutada (D111, 2026-09-07)

**Pedido:** el Owner confirmó, tras la explicación de la causa raíz del incidente de despliegue, "Sí, unifica main y product-lead-ajustes-visuales con product-lead-refinement-v2".

**Aplicado:** se fusiona `origin/product-lead-refinement-v2` (D99–D109) en `main` (que tenía D1–D98 + D110, la infraestructura WordPress) — merge sin conflictos de archivo salvo `STATUS.md` (ambas ramas lo habían extendido), resuelto conservando ambas bitácoras completas en orden cronológico y renombrando la decisión de este agente de D99 a D110 para evitar la colisión (ver nota de unificación arriba). Después, `product-lead-ajustes-visuales` se actualiza para apuntar al mismo commit que `main`, de forma que **las tres ramas relevantes para Cloudflare Pages (`main`, `product-lead-ajustes-visuales`, `product-lead-refinement-v2`) queden en el mismo estado** — cualquiera de las tres que se construya a partir de ahora debe servir el mismo contenido, eliminando el riesgo de que un push a una rama revierta lo que ya está en otra. Verificado en vivo tras el push: https://aaalegal.design-505.workers.dev/ carga GSAP + ScrollTrigger + `home-motion.js` (v20260831-motion-phase-2) sin errores de consola — confirma que el sitio ya no está en la versión obsoleta reportada al inicio del incidente.

## Cierre de las preguntas pendientes de D111 (D112, D113 — 2026-09-07)

**Pedido:** el Owner respondió directamente a las dos preguntas abiertas registradas en la "Nota de unificación de ramas" (arriba): "1. eliminemos la restricción de usar GSAP/ScrollTrigger para cerrar el tema de las nuevas dependencias, debido a que el prototipo actual ya está aprobado con esas animaciones y demás. 2. Por ahora deja ambas ramas abiertas, pero el main debe seguir siendo la versión actual de https://aaalegal.design-505.workers.dev/".

**Aplicado — pregunta 1 (D112):** GSAP 3.15.0 + ScrollTrigger 3.15.0 quedan autorizados formalmente como la única excepción a "sin dependencias nuevas de animación" — no se instala nada nuevo (ya estaban implementados desde D99–D109), lo que se cierra es la evaluación pendiente contra la restricción documentada. `prototype/README.md` § 2 (línea que decía "no se instaló ninguna dependencia nueva — GSAP, AOS, Lenis") y § 5 (nota de cierre nueva) actualizados; AGENTS.md § Prohibiciones y § Reglas Git/dependencias actualizados para referenciar D112. Ninguna otra librería de animación queda autorizada por esto.

**Aplicado — pregunta 2 (D113):** las tres ramas (`main`, `product-lead-ajustes-visuales`, `product-lead-refinement-v2`) se mantienen abiertas indefinidamente — no se cierran ni se fuerza un único flujo de trabajo. Se fija como regla que `main` es la fuente de verdad de lo que está en producción: cualquier divergencia futura debe unificarse hacia `main`, no al revés. AGENTS.md § Reglas Git/dependencias amplía con un párrafo nuevo, "Política de ramas post-unificación". No se tocó el estado de las ramas en git (ya estaban las 3 en el mismo commit `1335235` desde D111) — esto es una regla de gobernanza hacia adelante, no una acción de merge.

Ambas preguntas quedan cerradas — ver PROJECT.md, filas D112 y D113.

## Implementación WordPress de las 5 páginas reales + Blog (D114, 2026-09-07)

**Pedido:** el Owner pidió retomar la construcción de WordPress: "ahora sí construyamos la parte que te mencioné para comenzar a implementar en wordpress y el paso a paso de como montarlo para que sea administrable".

**Investigación previa (plan mode, 3 agentes en paralelo):** dado que el andamiaje de D110 se había construido contra el prototipo tal como estaba en D98 (antes de D99–D109), antes de escribir código se exploró: (1) inventario completo de las 9 páginas reales del prototipo actual — clases, estructura, formularios, motion, contenido placeholder — página por página; (2) comparación exacta entre `theme.json`/`assets/css/components.css` (tema) y `prototype/css/tokens.css`/`components.css` (fuente de verdad real) para saber qué faltaba; (3) las restricciones ya decididas en AGENTS.md/PROJECT.md/`prototype/README.md` (plugins cerrados, CPTs diferidos, qué significa "administrable", riesgos de implementación ya documentados). El resultado de esa investigación se usó para escribir un plan (`EnterPlanMode`), aprobado por el Owner antes de tocar archivos.

**Aplicado — fundación (`theme.json`/`functions.php`/CSS base):**
- `theme.json`: se agrega el color `surface-light-alt`; se agregan los namespaces `custom.glass` (bg/border/blur/header-bg) y `custom.halo` (accent-main/cool/navy/blur) y `custom.leading.snug`, más tokens que faltaban en `custom.shadow` (glass/glass-highlight) y `custom.motion` (reveal-distance/parallax-distance/transition-smooth/transition-snap) — todos como composites literales (mismo criterio que ya usaba el archivo para `custom.shadow.sm/md/lg`), sin inventar una arquitectura nueva de tokens. Se quita `fontFace` de las 3 familias tipográficas — la carpeta `assets/fonts/` está vacía, no hay archivos `.woff2` reales en el repo; si se hubiera dejado, el tema cargaría sin ninguna tipografía de marca — y las fuentes pasan a cargarse vía Google Fonts en `functions.php`, exactamente como hace hoy cada página del prototipo (mismo criterio, sin inventar un mecanismo distinto). Se agrega `customTemplates` con la plantilla `page-motion` (título "Página con motion editorial (GSAP)"), asignable por página desde el editor.
- `functions.php`: encola Google Fonts; encola GSAP 3.15.0 + ScrollTrigger 3.15.0 + `home-motion.js` (copiados de `prototype/js/` a `assets/js/`) condicionalmente vía `is_front_page() || is_page_template('templates/page-motion.html')` — el prototipo real carga estos 3 scripts en 5 páginas (Home, Metodología, Quiénes somos, Trabaja con nosotros, Contacto), no solo Home como asumía la documentación anterior.
- `assets/css/components.css`: pasa de ~230 líneas a un sistema editorial completo, portado selector por selector desde `prototype/css/components.css` (leído directamente, no de memoria): sistema de encabezado editorial compartido, hero editorial (4 variantes de fondo/foto: services/about/careers/contact), hero inmersivo de Home, transparencia, cierre interno compartido + cierre de Home/Metodología (`.cierre-grid`/`.cierre-card`), mosaico de focos + superficie visual (Home § "Cómo intervenimos"), servicios editoriales (Metodología § "Nuestros servicios"), sectores de experiencia con logos, contador de cifras, stepper/flujograma de metodología, filosofía + cita editorial, atmósfera/halos decorativos, formularios (base + variante abierta + Contacto B2B), tarjetas flip de equipo completas (con el fix de `visibility` de D93), y el aviso de cookies reescrito a la versión D107 (compacta, grid, ya vigente en el prototipo real — la versión que tenía el tema era anterior a ese rediseño).
- `assets/js/main.js`: gana el toggle de tarjetas flip por click/teclado (portado de `prototype/js/main.js`).
- `parts/header.html`: se corrige un bug heredado del prototipo — el CTA "Mi caso" apuntaba a `#nota-ady` (ancla rota, nota interna de transparencia del prototipo) en las páginas internas; en WordPress se hace apuntar siempre a `/contacto/`. No es una decisión de diseño nueva, es la corrección de un enlace que nunca debió quedar así.
- `parts/footer.html`: se agrega el aviso de cookies (D107) directamente en el template part, para que aparezca en las 9 páginas sin que el Owner tenga que insertarlo a mano en cada una.

**Aplicado — 5 patterns de página completa, con el copy real de cada página ya puesto** (no texto de relleno — esto es lo que hace el sitio administrable: el cliente abre la página y ve/edita el contenido real): `patterns/home-full.php`, `patterns/metodologia-full.php`, `patterns/quienes-somos-full.php`, `patterns/trabaja-con-nosotros-full.php`, `patterns/contacto-full.php`. Cada uno se escribió leyendo el HTML real de la página correspondiente en `prototype/`, no de memoria ni de la exploración resumida. Los 2 formularios reales (Postulación, Contacto B2B) quedan como bloque HTML de referencia con los mismos campos/labels/orden exactos del prototipo, con una nota indicando dónde insertar el shortcode de Contact Form 7 una vez creado.

**Aplicado — Blog:** `templates/home.html` (listado vía Query Loop nativo, sin CPT — conforme a D3/D110) y `templates/single.html` (artículo). Sin sembrar los 2 posts de ejemplo del prototipo automáticamente — el propio prototipo los marca como "contenido de ejemplo, no se publica hasta resolver la autoría editorial" (nota `.ady-note` en `noticias-analisis.html`, y AGENTS.md § Prohibiciones ya registra la autoría del blog como pendiente) — crearlos queda como paso manual y explícito para el Owner si quiere probar la plantilla primero.

**Simplificaciones deliberadas, registradas explícitamente (no son errores ni se ocultan):** el carrusel móvil de arrastre (`mobile-card-carousel`, usado en Situaciones/Por qué AAA/Sectores/Casos de éxito) se renderiza como grilla responsive normal, sin el gesto de arrastre horizontal; la cinta de logos de Home (`home-logo-ribbon`) se renderiza como grilla estática centrada, sin el marquee de desplazamiento automático; el contador de "En cifras" muestra el número final estático en vez de animar el conteo ascendente (el mecanismo sigue en `home-motion.js`, pero los patterns no incluyen todavía el atributo `data-count-to` en los bloques); los íconos SVG decorativos de las tarjetas de "Situaciones" y "¿Por qué AAA?" se omitieron (el texto es lo prioritario para quedar administrable); ninguna fotografía real — todos los bloques Image quedan vacíos con alt text explicando que están pendientes de material del cliente, mismo criterio que ya traía `cierre-conversemos.php` desde D110. Todas quedan documentadas como checklist en `WORDPRESS-SETUP.md` § 8.

**Aplicado — `WORDPRESS-SETUP.md` reescrito:** plugins (config exacta, sin reabrir la decisión de cuáles), motion GSAP (nueva § 5bis explicando el mecanismo de plantilla), fuentes (actualizado — ya no asume `.woff2` reales), páginas (tabla de qué pattern insertar en cada una y qué plantilla asignar), formularios (campos exactos de Contact Form 7 para los 2 formularios), menús (nueva sección), checklist de patterns actualizado a la realidad de esta sesión (ya no al estado pre-D99).

**No verificado en vivo:** este entorno de trabajo no tiene PHP/MySQL/WordPress — no hay forma de instalar y ejecutar el sitio aquí. Se verificó: `theme.json` es JSON válido (`node -e "JSON.parse(...)"`), cada `.php` nuevo tiene exactamente un par `<?php`/`?>` (sin binario `php` para lint completo), y cada pattern se escribió comparando contra el HTML real del prototipo, no contra resúmenes. La verificación funcional (que el sitio se vea y funcione igual que https://aaalegal.design-505.workers.dev/) queda pendiente de que el Owner siga `WORDPRESS-SETUP.md` en Local — es el paso siguiente natural, no ejecutado en esta sesión.

**Pendiente de decisión del Owner/Product Lead (no resuelto aquí):** ~~si el uso de GSAP/ScrollTrigger sigue siendo aceptable frente a la restricción ya documentada de "sin dependencias nuevas"~~ — **resuelto por D112 (2026-09-07):** el Owner confirmó que sí, quedan autorizados. Sigue pendiente si el andamiaje de WordPress (D110) debe rehacerse contra el sistema editorial/motion de D99–D109 antes de seguir avanzando.

## Home — copy de hero actualizado y CTA secundario retirado (D115, 2026-09-29)

**Pedido (Owner, origen: cliente):** "vamos a continuar en el Home con una serie de cambios que ha requerido nuestro cliente. Vamos a cambiar el texto del main hero banner... eliminemos el CTA 'conozca como lo hacemos' y subamos un poco ese bloque de título + párrafo hacia arriba."

**Aplicado en `wp-content/themes/aaa-estudio-legal/`:**
- `patterns/home-full.php` — el H1 del hero pasa de "Insolvencia y derecho corporativo: *somos la voz del acreedor.*" a **"Soluciones legales estratégicas"** (texto plano, sin énfasis — el cliente no indicó qué fragmento destacar, no se inventó uno); el párrafo pasa a **"Acompañamos a empresas, empresarios y acreedores en asuntos concursales y corporativos, anticipando riesgos y diseñando soluciones integrales que protegen sus intereses."**; se elimina por completo el bloque `hero__actions` (botón "Conozca cómo lo hacemos", que hacía scroll a `#servicios-home-heading`).
- `assets/css/components.css` — `.hero-immersive .hero-shell__content` reduce su `padding-top` de `clamp(8rem,13vh,10rem)` a `clamp(6rem,10vh,7.5rem)` para subir el bloque; se agrega `.hero-immersive .hero__actions{display:none}` como respaldo inmediato sobre la página ya insertada (el texto nuevo sí exige reinsertar el pattern — CSS no cambia contenido).

**Pendiente:** el botón se retira "por ahora" (palabras del Owner) — no se interpreta como retiro definitivo; si vuelve, falta decidir destino (¿sigue siendo ancla a `#servicios-home-heading`, o cambia?).

**Seguimiento — D116 (2026-09-29):** el Owner respondió a la nota anterior: "cambia de color el título a dorado... para darle énfasis" — el H1 completo (no un fragmento) pasa a `accent-main` (el mismo dorado de `.aaa-text-emphasis`), sin cursiva. `.hero-immersive .hero-shell__content .hero__title` gana `color: var(--wp--preset--color--accent-main)`. Solo CSS — ya visible en la página insertada sin reinsertar el pattern.

## Home — ajustes del cliente según "Estructura y Copies del Sitio WEB" (D117, 2026-09-29)

**Pedido (Owner, origen: cliente vía PPTX `Estructura y Copies del Sitio WEB (1).pptx`, 24 slides):** "vas a realizar los cambios que ahí se proponen. Debes excluir por ahora los cambios relacionados con las imágenes... solo implementa los cambios que estén orientados al home... Primero, ajustemos todo lo que el documento dice para el inicio." Luego: "Sí, dale con el resto. Se muy preciso por favor". Alcance: slides 1–12 (Home + footer). Slides 13–24 (Metodología, Quiénes somos, Trabaja con nosotros) quedan fuera por instrucción explícita.

**Aplicado — `patterns/home-full.php`** (texto: exige reinsertar el pattern "Home — página completa"):
- Slide 2: se eliminan la cinta de logos "Empresas que ya confiaron" ("este slider de logos no debería ir acá") y la sección "¿Es acreedor y se enfrenta a alguno de estos riesgos?" ("ELIMINAR ESTA SECCION, porque es algo que se repite más abajo").
- Slide 3: eyebrow "Enfoque de la firma" → **"Nuestro enfoque"**; el CTA deja de ir a `/quienes-somos/` ("Conozca la firma →") y va al formulario: **"Solicitar evaluación jurídica"** → `/contacto/` (mismo texto/ícono que el CTA de cierre).
- Slide 4: H2 "Estrategias jurídicas *para proteger, normalizar y recuperar activos.*" → **"Estrategias jurídicas."** (se quita la frase, como pide el cliente); tarjetas → **"Derecho concursal"**, **"Normalización de Activos"** (mayúscula tal cual el documento), **"Línea corporativa y litigios"**. Descripciones de cada tarjeta sin cambio (el documento no trae reemplazo).
- Slide 6: eyebrow "¿Por qué AAA?" → **"¿Por qué confiar en nosotros?"**; "Infraestructura para atención masiva." → **"Manejo de gran número de casos."** (se corrige la tilde que el documento traía sin ella); "Tecnología propia (ADY)." → **"Trabajo respaldado en tecnología propia (ADY)."**. Las otras 4 tarjetas quedan igual (el cliente dice "el texto está OK" y no trae reemplazo para ellas).
- Slide 7: eyebrow "Sectores de experiencia" → **"Empresas que ya confiaron en nosotros"**. El cliente separa "el texto introductorio" (que da a entender que todo es insolvencia) de "el texto de Trabajamos con organizaciones…" (el de la alineación): el que habla de recuperación de crédito es el H2, así que solo se cambia su frase final: "donde *la recuperación del crédito exige…*" → "donde *cada decisión exige conocimiento jurídico y sectorial.*" — **propuesta del agente, pendiente de validación del cliente** (no trajo texto).
- Slide 8: bajo cada video de "Casos de éxito" se agrega un espacio de texto (`.case-video__caption`): línea "Empresa — Cargo" + 2–3 líneas, con placeholder honesto ("Texto pendiente de entrega por el cliente").
- Slide 9: cifras → **8754** casos gestionados, **30** clientes atendidos, **+10 mil millones** cartera recuperada. Se respeta el formato del cliente: el "+" solo va en la tercera (en cifras exactas diría "más de 30"); "8754" sin separador de miles porque así lo escribió el cliente y así lo pinta el contador animado.
- Slide 10: se elimina la sección "Dimensión humana" completa.
- Slide 11: H2 "Cada crédito comprometido exige…" → **"Cada caso requiere *una defensa con criterio.*"** (redacción del propio cliente en el comentario); párrafo → "Si su organización enfrenta un proceso concursal, necesita normalizar sus activos o requiere acompañamiento corporativo y en litigios, nuestro equipo puede evaluar la situación y definir una ruta de actuación." (las 3 líneas de negocio del slide 4) — **propuesta del agente, pendiente de validación del cliente**. El botón ya iba al formulario; sin cambio.

**Aplicado — ya visible sin reinsertar:**
- `functions.php` (`aaa_inject_motion_attributes()`): los `data-count-to` del contador pasan a 8754 / 30 / 10 (+ prefijo "+" y sufijo " mil millones" solo en la tercera).
- `assets/js/home-motion.js` (`renderCount()`): el sufijo se pinta dentro de `<span class="stat-card__unit">` en vez de texto plano. Motivo: "+10 mil millones" a tamaño de cifra (86px) medía 444px en una tarjeta de 400px, sin poder partir línea. Con la unidad a 0.4em mide 204px (desktop) / 160px en 343px (móvil, 375px). El pattern trae el mismo `<span>` como respaldo sin JS.
- `assets/css/components.css`: (a) Slide 7 — el párrafo intro de Sectores ahora arranca a la altura del H2, no del eyebrow (≥901px, `display:contents` en el wrapper del título; verificado: misma coordenada superior, diferencia de altura de mayúsculas <1px; en ≤900px queda el apilado de siempre); (b) Slide 7 — "logos más grandes y rotando al interior de cada tarjeta": rotador solo CSS, un logo a la vez (entra desde la derecha, sale a la izquierda), 3 s por logo, tarjetas desfasadas 0.5 s entre sí vía el `--stagger-index` que ya traía cada tarjeta, pausa al pasar el mouse; con `prefers-reduced-motion: reduce` se conserva la fila estática anterior (D7). Tamaño visible de logos: de ~96px máx. a 56–149px de ancho, todos dentro de la tarjeta (medido por píxeles no transparentes de cada archivo); (c) estilos de `.case-video__caption` y `.stat-card__unit`.
- `parts/footer.html` (Slide 12): Instagram → **@aaaestudio**, enlace real `https://www.instagram.com/aaaestudio/` (nueva pestaña); LinkedIn → etiqueta **"AAA Estudio Legal"**, pero el enlace sigue en `#url-linkedin-pendiente` — la URL de una página de empresa en LinkedIn no se deduce del nombre y el cliente no la envió.
- `WORDPRESS-SETUP.md` § 7 (Slide 12, "dentro de la estructura debemos eliminar el BLOG"): el menú del footer pasa de 6 a 5 enlaces, sin Blog. El menú principal ya no lo tenía. Hoy en Local no hay menú creado (el Navigation muestra el listado de páginas por defecto), así que no había ningún enlace "Blog" que quitar en vivo.

**Hallazgo (no causado por este cambio):** la página Home insertada en Local es una copia anterior del pattern — su sección "En cifras" no trae la clase `aaa-motion-stats`, así que el contador nunca animaba ahí. Se corrige solo al reinsertar el pattern.

**No aplicado / pendiente:**
- Todo lo relacionado con fotografía (slides 1, 3, 4, 9: "selección de fotos en la carpeta adjunta") — el Owner las cargará después. También el "logo actualizado de AAA" (slide 1) — es un archivo de imagen, cae en el mismo grupo.
- Slide 3, campos a eliminar del formulario (Tipo de organización, Asunto de interés, Contexto general del asunto): es el formulario de Contacto (Contact Form 7 / `patterns/contacto-full.php`), no Home — queda para cuando se trabaje esa página.
- Slide 4, "cuando ingrese a cada una, que se desglose una por una": exige páginas/vistas de detalle por línea de negocio (contenido de slide 5) que no existen — fuera del alcance de Home y posible cambio de alcance frente a la propuesta; las tarjetas siguen enlazando a `/metodologia/`.
- Slide 6, "cambiar el diseño para que genere más impacto" y "profundizar compliance": pedido abierto, sin dirección concreta ni texto — requiere propuesta de diseño/copy aparte.
- Slide 7 y 11: los textos marcados arriba como "propuesta del agente" deben validarlos cliente/Product Lead.
- Slide 12: URL real de LinkedIn. Y si "eliminar el BLOG" significa solo sacarlo del menú (lo aplicado) o retirarlo del alcance del sitio (las plantillas `templates/home.html`/`single.html` siguen en el tema, y el Blog está en el alcance de D114) — decisión de Product Lead frente a la propuesta comercial, no se resolvió aquí.
- Limpieza de CSS huérfano (`.home-logo-ribbon*`, `.situations-*`, `.people-card`/`.people-intro` en `components.css`, solo usados por las secciones retiradas): se deja hasta que el Owner reinserte el pattern, porque la página hoy insertada todavía los usa. **→ Hecha en D118.**

## Home — segunda revisión del PPTX: Áreas de práctica y "¿Por qué confiar en nosotros?" (D118, 2026-09-29)

**Pedido (Owner):** "vuelvas a revisar el archivo completamente y exhaustivamente… en la sección de áreas de práctica… los textos que aparecen sobre los cuadros no son los correctos… en la diapositiva 4 y 5 están todos estos datos… Utiliza cuatro o cinco de cada uno… no modificaste la sección porque confiar en nosotros la cual claramente dice que rediseñemos esa sección en la diapositiva número 6 para mostrar la información de una forma más intuitiva… puedes investigar sobre estructuras en otras páginas… de una firma de abogados". Corrige dos puntos que D117 había dejado como "pendiente" (slide 4 desglose, slide 6 rediseño).

**Revisión del PPTX:** además del texto, se revisaron las imágenes de las slides 1–12 (capturas del prototipo, sin anotaciones adicionales) y las notas del orador (vacías). Slide 5 = slide 16 (lista detallada de servicios por línea, pensada también para Metodología).

**Aplicado — Áreas de práctica (slides 4-5):**
- `patterns/home-full.php`: la descripción de cada panel se reemplaza por un bloque Lista nativo (`surface-visual__list`, editable desde el editor) con 4 ítems, priorizando los de slide 4 y completando con slide 5:
  - Derecho concursal: Insolvencia de persona natural · Insolvencia empresarial · **Ley 1116** · Ley 550 (los 4 de slide 4).
  - Normalización de activos: Diagnóstico jurídico y documental (s5) · Análisis de viabilidad de riesgo (s4) · Recuperación de cartera (s4) · Estructuración y constitución de garantías (s5).
  - Línea corporativa y litigios: Derecho societario y gobierno corporativo (s5) · Estructuración de negocios y operaciones contractuales (s5) · Acompañamiento en riesgo legal, comercial y laboral (s4) · Litigios y resolución de controversias (s5).
- "Ley 116" (así en el documento) se publica como **Ley 1116**: el propio brief ampliado del cliente cita "1116/2006" (régimen de insolvencia empresarial) — es error de digitación. Se retoman citas legales en el copy a pedido explícito del cliente (ver cautela en `content/02-capacidad-tecnica.md`).
- "Viabilidad" (slide 4, línea corporativa) no se usó: suelto no se entiende. Mayúsculas normalizadas a oración ("Insolvencia Empresarial" → "Insolvencia empresarial"); "Acompañamiento riesgo Legal, comercial y Laboral" → "Acompañamiento en riesgo legal, comercial y laboral".
- Título "Normalización de Activos" (D117) vuelve a "Normalización de activos": slide 5 lo escribe así y los otros dos títulos van en minúscula.
- `components.css`: en desktop con puntero la lista se despliega ítem por ítem al entrar el cursor al panel (80 ms entre ítems) y empuja el título hacia arriba ("que se desglose una por una"); en táctil/≤1023px siempre visible, y el caption pasa a flujo para que el panel crezca con su contenido (antes, `absolute` en 300px, la lista se salía). `prefers-reduced-motion` sin transición. Se retira el `min-height:6.2em` que reservaba alto para la descripción.

**Aplicado — "¿Por qué confiar en nosotros?" (slide 6), rediseño:**
- Investigación: en los referentes del propio cliente (REFERENCES.md) — Ávila Toro ("¿Por qué nosotros?": ícono + título + explicación de 30-40 palabras), Brigard Urrutia (pilares con título + descripción corta), Olarte Moure y Hurtado Gandini (narrativo) — y guías de sitios de firmas de abogados, cada razón se explica en términos de beneficio para el cliente. En AAA cada razón era solo un título de 1-5 palabras: ese era el faltante de "impacto".
- Estructura nueva (`why-trust`): la pregunta a la izquierda (sticky en ≥1024px) y las 6 razones a la derecha en 2 columnas; cada una con ícono en disco navy/dorado (se invierte al hover), título en Krub bold (como fijó D45 — en WordPress salían en la serif) y una línea explicativa. En móvil: ícono a la izquierda, texto a la derecha, 1 columna. Sin numeración (decisión previa: estas razones usan pictogramas). Mismos íconos que entregó la Product Lead.
- Títulos en lenguaje menos técnico (slide 6: "decir lo mismo con palabras menos técnicas… Etc."): "Seguridad de la información" → **"Su información, protegida."**; "Compliance" → **"Cumplimiento normativo (compliance)."**; "Cobertura nacional" → **"Presencia en todo el país."**. Se mantienen los 2 que dio el cliente y "Equipo especializado.".
- Descripciones, todas con fuente: casos → "procesos individuales y masivos" (D51/`content/02`); equipo → copy aprobado de "Dimensión humana"; ADY → copy aprobado del hero anterior ("anticipa, agiliza y permite recuperar activos con precisión"), sin explicar qué es ADY (D13/D18); seguridad → brochure (servidores propios, firewall→"seguridad digital", CCTV→"videovigilancia", plan de continuidad **alineado con** ISO 27001 — el brief dice que no hay certificaciones); presencia → copy aprobado de `content/04`. **Compliance es la única sin dato de respaldo**: "Cada actuación se ajusta a la normativa vigente y a estándares de ética y transparencia." — propuesta para "profundizar", a validar con el cliente (idealmente con el detalle real de su programa de cumplimiento).
- `components.css`: se retiran las reglas de las 6 tarjetas de colores (D64) y la grilla de 6 columnas de Home; `#confianza-heading` pasa a `overflow:clip` para que funcione el sticky.

**Aplicado — errores encontrados en la revisión exhaustiva:**
- **El contador de "En cifras" nunca animaba, ni siquiera tras reinsertar** (D117 decía que se arreglaba reinsertando — era incorrecto). Causa real: en el pattern, el JSON del bloque traía `className: "... aaa-motion-stats"` pero el `class` del `<section>` no; al abrir la página, Gutenberg reconstruye `className` desde el HTML guardado y la clase se perdía, así que el filtro nunca inyectaba `data-motion="stats"`. Se agrega la clase al HTML. Auditoría con script de los 113 bloques de `home-full.php` (JSON vs. clases/id del HTML): 0 discrepancias. En los demás patterns: 1 falso positivo (`cierre-conversemos.php`, el botón lleva los colores en el `<a>`) y `hero-simple.php` sin `has-text-color` — fuera de alcance, pendiente.
- Scroll horizontal en desktop (visible en Windows): la foto a sangre de "Nuestro enfoque" (+49px) y el mosaico de Áreas (+8px) se calculan con `vw`, que incluye la barra de scroll. `body.home-page { overflow-x: clip }` (no crea contenedor de scroll, no rompe sticky/fixed). Verificado: sin barra horizontal.
- Mosaico de Áreas en ≤1023px: el `width:100%` de `.home-page .focus-mosaic` anulaba el full-bleed y dejaba 32px sin foto a la derecha. `width:auto` en ≤1023px: ahora 0–375px en móvil, 0–761px en tablet.
- "mil millones" se veía apretado: heredaba el `letter-spacing` negativo del número (-3.5px). `letter-spacing:0` en `.stat-card__unit`.
- Limpieza (el Owner ya reinsertó el pattern): se eliminan del CSS las reglas de la cinta de logos, "¿Es acreedor…?" y "Dimensión humana" (conservando las compartidas con "Nuestro enfoque" y "En cifras"), el `display:none` provisional de `.hero__actions` de D115 (si el cliente pide volver a poner el botón del hero, esa regla lo escondería) y comentarios que describían secciones ya retiradas.

**Verificación:** marcado nuevo inyectado en el DOM de Local (sin tocar el contenido de WordPress) y medido/capturado en 1440, 1024, 768 y 375px: despliegue ítem por ítem al hover, colapso completo en reposo (0px), sticky, sin desborde horizontal, listas siempre visibles en móvil. `php -l` sin errores; CSS con llaves balanceadas.

**Requiere reinsertar el pattern "Home — página completa"** para ver: las listas de Áreas, el rediseño de "¿Por qué confiar?" y la animación del contador. Lo demás ya está en vivo.

**Pendiente:**
- ~~Validación del cliente: "Ley 1116" (en vez de "Ley 116")~~ **Resuelto (Oscar, 2026-10-15, D178): se usa "Ley 116" en el sitio y en toda la documentación.** Sigue pendiente la validación de la selección de 4 ítems por línea, los 3 títulos reformulados y las 6 descripciones de "¿Por qué confiar?" — en especial la de compliance.
- `hero-simple.php`: revisar `has-text-color` (fuera de Home).

## Home — ajustes sobre D118: paneles de Áreas más bajos y carrusel de logos con 2-3 a la vez (D119, 2026-09-29)

**Pedido (Owner):** "en la sección de áreas de práctica… los tres elementos están demasiado altos… la animación se ve un poco rara y además el viewport se rompe un poquito, se mueve demasiado. Solo colócalo un poco menos alto"; "en la sección empresas que ya confiaron en nosotros te quedó súper el slider… sin embargo me parece mejor mostrar de a tres o dos elementos ya que se ve extraño cuando hay un solo logo"; sobre "¿Por qué confiar en nosotros?": "veo mucho texto, dejémoslo para después, ya te anexo un referente… por ahora modifiquemos lo ya mencionado" → **esa sección no se toca en D119**; queda a la espera del referente del Owner.

**Aplicado:**
- `components.css` — paneles de "Áreas de práctica" en ≥1024px: `min-height` de `clamp(600px, 70svh, 780px)` a `clamp(460px, 60svh, 600px)` (900px de alto: 630 → 540px; 760px: 600 → 460px). Con el panel más alto que el viewport útil, parte del despliegue al hover quedaba fuera de pantalla. Peor caso medido (lista de 4 ítems desplegada a 1024px): 84px libres entre el índice y el título; el panel entero cabe bajo el header.
- `components.css` + `main.js` — "Empresas que ya confiaron": el rotador de un logo a la vez (D117, solo CSS) se reemplaza por una cinta continua por tarjeta que muestra ~2¼ logos a la vez (2 completos + parte del siguiente, con fundido en los bordes), pausa al hover y desfase entre tarjetas. `main.js` mete los logos en una pista y duplica el set las veces necesarias para que el loop no deje huecos (2 sets para tarjetas de 3 logos, 3 para las de 2), con `aria-hidden` y `alt` vacío en las copias — así el cliente edita cada logo una sola vez. Sin JS o con `prefers-reduced-motion`: la fila estática de siempre.
- Los logos son archivos cuadrados de 601×601 con la marca en una franja: el ancho visible lo manda el alto × la escala óptica (hasta 2.05). El alto se ata al ancho de la tarjeta (`min(56px, 18cqw)`) para que los logos anchos no se toquen en tarjetas angostas (a 1024px: de 0 a ≥26px de separación). La reducción de logos en móvil (pensada para 3 en fila) ya no aplica en modo carrusel.

**Verificación (Local, 1440/1024/768/375px):** separación mínima entre logos medida por píxeles de cada archivo: 37 / 26 / 29 / 32px; sin scroll horizontal; pista, copias y duración correctas en las 6 tarjetas; `node --check` de `main.js` y CSS balanceado.

**Pendiente:** referente del Owner para "¿Por qué confiar en nosotros?" (considera que el rediseño de D118 tiene mucho texto). **→ Resuelto en D120.**

## Home — "¿Por qué confiar en nosotros?" rediseñada sobre el referente del Owner (D120, 2026-09-29)

**Pedido (Owner):** "me parece que ya tiene demasiado texto. Vamos a utilizar los títulos y a rediseñar esta sección con el ejemplo que te anexo… seis elementos de imagen seguidos de un título. No es necesario que uses el leer más… sería prudente conservar los textos pero tratar de colocarlos más cortos de ser posible. De igual forma lo dejo a tu consideración." Referente: https://fidacta.ai/praktijkvoorbeelden (encabezado centrado + grilla 3×2 de imagen + título).

**Aplicado:**
- `patterns/home-full.php`: 6 tarjetas = bloque Image nativo (5:3) + título (los de D118, sin cambio) + una línea corta: "Procesos individuales y masivos, con infraestructura propia." / "Experiencia jurídica y conocimiento sectorial." / "Soluciones más ágiles y precisas en cada proceso." / "Servidores propios y continuidad alineada con ISO 27001." / "Ética y transparencia en cada actuación." / "Acompañamos organizaciones en todo el territorio nacional." Sin enlace "leer más". Se retiran los íconos sueltos (quedan dentro de las ilustraciones).
- Imágenes (temporales, reemplazables con "Reemplazar" en el editor): solo había 2 fotos libres en la Biblioteca que no se repiten en Home — `temp-prototype-home-dimension-humana.jpg` (Equipo) y `banner-AAA-abogados.jpg` (Tecnología/ADY, encuadrada con `object-position` sobre las personas). Para las otras 4 se crearon ilustraciones de marca en `assets/img/why-trust/` (casos, seguridad, cumplimiento, presencia): degradado navy, motivo por concepto y el ícono aprobado en dorado — mismo criterio del referente, que mezcla fotos con imágenes abstractas.
- `components.css`: encabezado centrado; grilla 3/2/1 columnas (≥1024 / ≥601 / móvil), 24px entre columnas y 48px entre filas; imagen 5:3 con zoom suave al hover (sin él con `prefers-reduced-motion`); título Krub bold. Fondo claro a propósito: "Áreas de práctica", justo arriba, ya es navy con fotos. Se retira el CSS de D118 (sticky, discos, filetes) y las reglas huérfanas `.focus-grid`/`.focus-card__icon` (sin marcado en ningún pattern).

**Hallazgo:** `hero-inicio.webp` (en la Biblioteca de medios y en `prototype/assets/img/`) muestra en una pantalla la marca de **otra firma** ("Ávila Arias & Asociados"). No se usa en ningún archivo del tema ni del prototipo; se agregó la advertencia en `WORDPRESS-SETUP.md` § 7bis-2 (que indicaba subir toda la carpeta). Conviene borrarla de la Biblioteca.

**Verificación:** marcado inyectado en Local a 1440/1024/375px: tarjetas de 384×230 a 1440 (referente: 381×232), sin scroll horizontal; auditoría de bloques (119, sin discrepancias), `php -l` y CSS balanceado. **Requiere reinsertar el pattern.**

**Pendiente:** fotografía del cliente para las 6 tarjetas; validación de las líneas cortas.

## Menús del sitio definidos en el tema (D121, 2026-09-29)

**Pedido (Owner):** "vamos a ir creando el main menú, no veo la opcion para crearlo de forma manual en wordpress, desde apariencia -> menus".

**Causa:** el tema es de bloques; WordPress no muestra Apariencia → Menús en temas de bloques (los menús se editan en Apariencia → Editor → Navegación). `WORDPRESS-SETUP.md` § 7ter indicaba esa pantalla. Sin menú creado, los dos bloques Navigation mostraban la lista automática de páginas ("Inicio, Sample Page, Test1").

**Aplicado:**
- `parts/header.html`: el bloque Navigation trae el menú principal dentro del tema (Inicio como `core/home-link` —se marca solo como página actual en la portada— + Metodología, Quiénes somos, Trabaja con nosotros como enlaces a `/metodologia/`, `/quienes-somos/`, `/trabaja-con-nosotros/`, los slugs de la § 7 de la guía). Panel del menú con los colores del bloque (`overlayBackgroundColor: navy-deep`, `overlayTextColor: white`): antes el panel móvil de WordPress era blanco y "Inicio" (blanco por ser la página actual) no se veía.
- `parts/footer.html`: menú de sitio con 5 enlaces (+ Contacto, sin Blog por D117) y `overlayMenu: "never"`: en móvil los enlaces del footer estaban escondidos detrás de un botón hamburguesa.
- `components.css`: mismo corte que el prototipo (`prototype/css/components.css:4272`): por debajo de 1181px el menú pasa a botón (el bloque de WordPress solo lo hacía por debajo de 600px; a 1024px "Trabaja con nosotros" se partía en una segunda línea); columnas del header `minmax(180px,1fr) auto auto` en ese rango; espaciado del menú `clamp(1rem, 1.65vw, 2rem)` como el prototipo; panel abierto alineado a la izquierda con enlaces de 22px. En ≤560px el botón "Mi caso" queda solo con la flecha (como el prototipo, `components.css:496`): antes, la grilla lo empujaba fuera de pantalla; con la nueva grilla aparecía partido en dos líneas. Su nombre accesible sigue siendo "Mi caso →".
- `WORDPRESS-SETUP.md` § 7ter reescrita (menús ya vienen en el tema; cómo editarlos en el Editor del sitio y qué implica guardarlos ahí) y § 7bis-2 actualizada (tabla de fotos con los nombres actuales de las secciones, sin la cinta de logos ni "Dimensión humana", con las imágenes de "¿Por qué confiar?").

**Verificación (Local):** 1440 y 1181px menú completo en una línea; 1180, 768 y 375px botón de menú + "Mi caso"; panel abierto navy en 768 y 375px con los 4 enlaces visibles; cierre con Escape; footer con sus 5 enlaces en móvil; sin scroll horizontal. Ya en vivo (partes de plantilla, no requiere reinsertar nada).

**Pendiente:** crear las páginas Metodología, Quiénes somos, Trabaja con nosotros y Contacto con esos slugs — hasta entonces sus enlaces dan "página no encontrada".

## Home — fotografía aprobada por el cliente, optimizada en WebP (D122, 2026-09-29)

**Pedido (Owner):** "ya he cargado las imágenes que están aprobadas por Studio AAA Legal. Vamos a reemplazar estas imágenes teniendo en cuenta la PPTX en donde son necesarias… debes comprimir dichas imágenes o de plano convertirlas en formato WebP… debes revisarlas todas y elegir cuáles son las que mejor se adaptan a dicha sección". Carpeta: `assets/img/aprobadas-web/` (21 fotos de 26 MP, 302 MB en total).

**Revisión:** se vieron las 21 fotos (hojas de contacto generadas fuera del proyecto). Se descartan para Home las fotos con diadema (IMG_9108, IMG_9127: leen como call center, y el brief pide que normalización de activos "se sienta premium, no como cobranza") y "ORIGEN Y ESPECIALIZACION.jpg" (retrato de los fundadores: por su nombre es para Quiénes somos, slide 20).

**Corrección de D117:** la slide 10 ("ELIMINAR ESTA PARTE") muestra solo el **texto** de "Dimensión humana"; la slide 9 ("En cifras") muestra las cifras **con la foto del equipo debajo** y pide fotos de la carpeta. En D117 se había retirado la sección completa (foto incluida). Se restituye la foto bajo "En cifras", sin el texto.

**Aplicado:**
- Asignación (una foto distinta por espacio, sin repetir en la página): hero ← IMG_9118 (recortada a la izquierda 84% para dejar el rostro fuera del texto: 65px de separación a 1440px); "Nuestro enfoque" ← IMG_9102; Áreas de práctica ← IMG_9091 (Derecho concursal), IMG_9086 (Normalización de activos), IMG_9119 (Línea corporativa y litigios); foto bajo "En cifras" ← 2.jpg; "¿Por qué confiar en nosotros?" ← IMG_9071 (casos), IMG_9073 (equipo), IMG_9116 (tecnología/ADY), IMG_9063 (seguridad), IMG_9095 (cumplimiento: vidrio/transparencia), IMG_9051 (presencia) — reemplazan las 2 fotos temporales y las 4 ilustraciones de D120.
- Optimización con PHP GD de Local (extensión ya incluida, cargada solo para el proceso; nada instalado): redimensionado al tamaño que usa cada espacio con margen para pantallas de alta densidad (2200px hero, 2000px cifras, 1800px paneles, 1300px enfoque, 1000px tarjetas) y WebP calidad 70-72. 12 fotos: **184,7 MB → ~700 KB**; revisadas a 100%, sin artefactos visibles. Salida en `assets/img/home/`; los originales no se tocan.
- `patterns/home-full.php`: 12 bloques Image apuntan a `get_theme_file_uri( 'assets/img/home/…webp' )` con `alt` descriptivo (los paneles de Áreas siguen con `alt=""`: el texto encima ya da el significado); nueva sección `stats-photo` después de "En cifras".
- `components.css`: encuadres por foto (`object-position`) con los nombres nuevos; sección `stats-photo` (misma técnica del prototipo: arriba el navy de "En cifras", la foto montada entre los dos fondos; 16:7 en desktop, 3:2 en móvil); "En cifras" baja su padding inferior a 48px.
- Se borran las 4 ilustraciones SVG de D120 (`assets/img/why-trust/`, ya sin uso).
- `.gitignore`: se excluye `assets/img/aprobadas-web/` (302 MB de originales; el sitio sirve los WebP).
- `WORDPRESS-SETUP.md` § 7bis-2: tabla de fotos de Home con los archivos nuevos y su origen.

**Verificación (Local, marcado inyectado en el DOM):** las 12 imágenes cargan; encuadres revisados en 1440/1024/375px (hero, enfoque, 3 paneles, foto de cifras, 6 tarjetas); auditoría de bloques (121, sin discrepancias), `php -l`, CSS balanceado. **Requiere reinsertar el pattern** — también para ver el rediseño de "¿Por qué confiar?" de D120, que la página de Local todavía no tiene (hoy muestra esa sección sin estilos, porque su CSS anterior ya se retiró).

**Pendiente:** "Casos de éxito" (3 miniaturas) y el fondo del panel "Conversemos" siguen con fotos temporales — la PPTX no pide cambiarlas (las miniaturas se reemplazan con los videos). "Logo actualizado de AAA" (slide 1): no viene en la carpeta. "ORIGEN Y ESPECIALIZACION.jpg" queda para Quiénes somos.

## Metodología reconstruida sobre el prototipo + PPTX + salvedad del cliente; Áreas de Inicio según la salvedad (D123, 2026-09-29)

**Pedido (Owner):** "vamos a pasar a la siguiente página, que es la página de metodología. Debes basarte en el prototipo… y arreglar o modificar la respectiva pattern… ten muy en cuenta la estructura del prototipo y por supuesto el contenido. Necesito que vuelvas a revisar la PPTX para que agregues… las nuevas modificaciones pedidas por cliente. También te estoy agregando una salvedad que hizo el cliente de última hora…". Fuentes: https://aaalegal.design-505.workers.dev/servicios, `prototype/servicios.html`, PPTX "Estructura y Copies del Sitio WEB" láminas 13–18 y el PDF "Pagina WEB AAA - SALVEDAD NUEVA DE CLIENTE" (correo de Francisco García, 23-sep).

**Qué pide cada fuente:**
- Lámina 13 (hero): "texto introductorio a lo que hacemos, de manera general que cobije Insolvencia y corporativo"; debajo, el texto exacto "Representamos exclusivamente los intereses del acreedor. Integramos defensa en procesos concursales, normalización de activos y línea corporativa y litigios…".
- Lámina 14 (Nuestra metodología): textos transversales, no solo de insolvencia (ejemplo del cliente: "Convertimos cada caso en una estrategia jurídica"), y "algo más dinámico en diseño".
- Lámina 15 (Representación especializada): aprueba la estructura "porque ya hablamos de la metodología y ahora sí profundizamos en los servicios"; textos simples y transversales.
- Lámina 16 + PDF: en Metodología, reemplazar los párrafos de cada tarjeta por los puntos de cada línea de servicio. En Inicio, solo los titulares de la lámina 4, desplegados al pasar el mouse.
- Lámina 17 (Transparencia): texto transversal y otra imagen de la carpeta de fotos aprobadas. Lámina 18: "El conversemos debe ser el mismo para todas las páginas, con el cambio en el CTA".

**Aplicado — `patterns/metodologia-full.php` (reescrito):**
- **Orden de la PPTX, no del prototipo:** hero → Nuestra metodología → Representación especializada → Transparencia → Conversemos. El prototipo tiene los servicios antes que la metodología; la PPTX ("Estructura y Copies") los presenta al revés y el cliente aprobó esa estructura en la lámina 15 con ese argumento. Si se prefiere el orden del prototipo, basta mover el bloque en el editor.
- **Hero:** eyebrow "Soluciones para acreedores"; H1 nuevo, general: "Ante la insolvencia o una decisión corporativa, *la estrategia jurídica es determinante.*" (propuesta, pendiente de validar por el cliente). Foto aprobada 1.jpg (B/N).
- **Nuestra metodología:** H2 del ejemplo del cliente, "Convertimos cada caso en *una estrategia jurídica.*" Pasos Diagnóstico / Estrategia / Representación con los textos del prototipo reescritos en tono transversal (sin "expediente", "proceso de insolvencia" ni "recuperación del crédito"; propuesta, pendiente de validar). Diseño "más dinámico": línea de tiempo con los mismos íconos del prototipo sobre un riel. Al entrar la sección, una línea cobre recorre el riel de nodo en nodo y cada nodo se enciende cuando la línea llega; en móvil el riel es vertical. Solo CSS sobre el revelado existente (`.aaa-reveal`); sin JS o con movimiento reducido queda en su estado final. Los íconos van como máscara CSS sobre Grupos vacíos, sin SVG en HTML crudo.
- **Representación especializada:** H2 transversal "Tres áreas de práctica, *un mismo criterio.*" (propuesta; "Cada caso exige…" repetía el H2 de la sección anterior). Párrafo EXACTO de la lámina 13. Tarjetas con los mismos títulos de Inicio (Derecho concursal / Normalización de activos / Línea corporativa y litigios) y las etiquetas del prototipo. Los párrafos se reemplazan por los 6 puntos de cada línea (lámina 16 = PDF, pasados a mayúscula inicial), en lista con separadores. Fotos: las mismas de cada área en Inicio, como hacía el prototipo, en versión de 1000px.
- **Transparencia:** "Nuestro compromiso es la defensa técnica más rigurosa de sus intereses…" (antes "del crédito"). Foto nueva aprobada (IMG_9074), a sangre hasta el borde derecho desde 641px, como el prototipo.
- **Conversemos:** mismo bloque que Inicio (panel navy con foto y marca de agua, "Cada caso requiere *una defensa con criterio.*", mismo texto, CTA "Solicitar evaluación jurídica →" a `/contacto/`).
- Fotos optimizadas con PHP GD de Local (nada instalado): 5 fotos, **77 MB → 242 KB** en `assets/img/metodologia/`.

**Aplicado — `components.css`:**
- Se reemplazan las reglas de Metodología del primer port (D114), que nunca aplicaban: colgaban de `body.services-page` (clase que WordPress no genera) o de `.hero-shell__media > img` (el `<img>` real está dentro de un `<figure>`). Nuevo bloque "METODOLOGÍA (D123)" al final del archivo, por clase de sección. Incluye el ritmo de secciones del prototipo (`clamp(6rem, 9vw, 10rem)`) y el énfasis en cobre de la sección clara, como el prototipo.
- El cierre de Inicio se generaliza con `:is(.home-page, .site-closing-cta--global)`, sin cambiar la especificidad. Inicio queda igual y la clase `site-closing-cta--global` se agregó también a su pattern.
- Las reglas del hero de Inicio (padding 90px, alto 690px+, foto al 50%, H1 dorado de 16ch) no tenían prefijo y también alcanzaban al hero interno. `:where(:not(.hero--editorial))` las limita a Inicio sin cambiar su especificidad: el hero de Inicio se midió igual antes y después.

**Aplicado — Inicio (salvedad del PDF):** las listas de Áreas quedan solo con los puntos de la lámina 4: Derecho concursal = Insolvencia de persona natural, Insolvencia empresarial, Ley 1116, Ley 550 (sin cambio); Normalización de activos = Análisis de viabilidad de riesgo, Recuperación de cartera; Línea corporativa y litigios = Viabilidad, Acompañamiento en riesgo legal, comercial y laboral.

**Corrección de D120/D122:** en el front, `aaa_move_image_class_to_img()` (functions.php) deja la clase del bloque Image en el `<img>`, no en el `<figure>`. Las reglas `.why-trust__media img` y `.stats-photo__media img` de D120/D122 nunca habrían aplicado: al reinsertar Inicio, las fotos de "¿Por qué confiar?" se habrían estirado y la de "En cifras" habría salido sin recorte. D120/D122 se verificaron inyectando el HTML guardado del pattern, no el renderizado. Se corrigieron los selectores (`img.why-trust__media`, `img.stats-photo__media` y el marco en `.wp-block-image`). Desde D123 la verificación se hace con el **render real de WordPress**: script de solo lectura con el PHP de Local, `do_blocks()` con los filtros del tema, inyectado en el sitio; los temporales se borraron.

**Verificación (Local, render real):** Metodología a 1280, 768 y 620px. Hero 432px, igual al prototipo; eyebrow→H1 16px; H2 42px; tarjetas 16:10 del mismo alto; foto de Transparencia a sangre; sin scroll horizontal. Secuencia del riel medida: tramo 1 350–1100ms, nodo 2 a 1100ms, tramo 2 hasta ~1850ms, nodo 3 al final. Inicio con su render real: hero sin cambios, fotos de "¿Por qué confiar?" 384×230 (5:3, `cover`), foto de cifras 16:7, listas nuevas, cierre con la clase global. Auditoría de bloques sin discrepancias (Metodología 88, Inicio 117), `php -l` y CSS balanceado.

**Pendiente:** crear la página Metodología (slug `metodologia`, plantilla "Página con motion editorial (GSAP)") e insertar el pattern; **reinsertar el pattern de Inicio** (acumula D120, D122 y D123); validación del cliente de los textos propuestos (H1 del hero, 3 pasos, H2 de servicios, frase de Transparencia) y del orden metodología → servicios.

## Quiénes somos y Trabaja con nosotros reconstruidas sobre el prototipo + PPTX (D124, 2026-09-29)

**Pedido (Owner):** "pasemos a las dos paginas faltantes 'quienes somos' y 'trabaja con nosotros'. Construye de forma correcta y lo mas fiel posible al prototipo sus respectivos patterns y agrega las imagenes y las correciones establecidas en la pptx de ser necesarias". Fuentes: `prototype/nuestro-equipo.html` y `prototype/trabaja-con-nosotros.html` (iguales a https://aaalegal.design-505.workers.dev/nuestro-equipo y /trabaja-con-nosotros), PPTX láminas 19–24.

**Qué pide la PPTX:**
- 19 (hero Quiénes somos): "la foto general de todos los colaboradores (foto del collage pendiente)".
- 20 (Origen): "Ver foto de la carpeta"; debajo, "los equipos de trabajo… administrativos, jurídicos, etc.", según el referente https://www.ngds.ai/es/#team.
- 21 ("Quiénes hacen posible cada caso"): "proponer una división para tener 2 o 3 agrupaciones, con su respectivo título y copie… (collage por cada uno de los equipos áreas pendientes). Este módulo ya está diseñado y está en trabaja con nosotros, creo que debemos traerlo a esta sección".
- 22 (Filosofía): texto OK; "Quitaría el CTA porque igual cerramos con el módulo de Conversemos"; foto de la carpeta.
- 23–24 (Trabaja con nosotros): estructura "1. ¿Por qué trabajar con nosotros?, 2. Vacantes disponibles, 3. Formulario (solo nombre, teléfono y adjuntar hoja de vida, cargo de interés)", con referentes. La lámina 24 trae el texto de "¿Por qué…?" y 4 vacantes (Abogado junior, Abogado senior, Dependiente judicial, Auxiliar jurídico).

**Aplicado — `patterns/quienes-somos-full.php`:** hero → Origen y especialización → Quiénes hacen posible cada caso → Filosofía → Conversemos.
- Hero: copy del prototipo. Foto: 2.jpg (toda la oficina), **temporal** hasta el collage.
- Origen: copy del prototipo y foto de los fundadores ("ORIGEN Y ESPECIALIZACION.jpg").
- Equipos: el módulo de tarjetas flip (D92–D96) pasa de Trabaja con nosotros a esta página. Los 4 perfiles ficticios se reemplazan por 3 equipos (tarjeta + foto por equipo, en damero como D96/ngds): **Equipo jurídico** / Estrategia y representación; **Equipo administrativo** / Gestión operativa y seguimiento; **Equipo de tecnología** / Herramientas propias (ADY). El intro es el párrafo aprobado de "Nuestro equipo" ("…integra criterio jurídico, gestión operativa y tecnología"), que da las tres áreas. Títulos, subtítulos y reversos son **propuesta pendiente de validar**; el reverso de tecnología reutiliza el copy del prototipo. Fotos aprobadas temporales (IMG_9095, IMG_9128, IMG_9123) hasta los collages por equipo.
- Filosofía: sin CTA; foto IMG_9049 (bolso con el logo).
- Conversemos: el mismo bloque global de Inicio/Metodología.
- **Sale "En cifras"**: no está en la estructura de la PPTX (19–22 pasan de Origen a equipos) y sus cifras eran de ejemplo (+100/+50/+$100 M, distintas de las aprobadas en Inicio).

**Aplicado — `patterns/trabaja-con-nosotros-full.php`:** hero → ¿Por qué trabajar con nosotros? → Vacantes disponibles → Postulación.
- Hero: copy del prototipo, foto IMG_9071.
- "¿Por qué…?": copy **textual** de la lámina 24, con eyebrow "Talento AAA". Galería como el referente: una foto grande y dos pequeñas (IMG_9073, IMG_9051, IMG_9108).
- Vacantes: 4 cargos con los datos de la lámina 24, en un tablero blanco sobre banda navy (referente de la lámina 23), íconos por dato y enlace "Postularme →" a `#postulacion`; eyebrow "Oportunidades".
- Postulación: encabezado del prototipo. Formulario **real** de Contact Form 7 vía `[contact-form-7 title="Postulación" …]`, que CF7 6.1.7 resuelve por título: campos nombre, teléfono, cargo de interés (los 4 cargos + "Otro") y hoja de vida; sale el correo, porque la lámina no lo lista.
- Salen "Nuestro equipo" y las tarjetas de perfiles (van a Quiénes somos). No lleva "Conversemos": la lámina 23 fija las 3 secciones y la página termina en la postulación, como el prototipo.

**Aplicado — tema:**
- `functions.php`: filtro `wpcf7_autop_or_not` que apaga el `autop` de CF7 solo en formularios (los correos quedan igual); insertaba `<p>`/`<br>` en la grilla del formulario.
- `components.css`, bloque D124: Origen, equipos, Filosofía, "¿Por qué…?", Vacantes y Postulación, con grilla del formulario, select con flecha, botón de archivo y respuesta de CF7.
  - Tarjetas flip: el botón "Ver funciones" solo se oculta con mouse. El prototipo lo ocultaba desde 641px aunque no hubiera hover, así que en tablets táctiles el reverso quedaba inaccesible.
  - Movimiento reducido respetado.
  - Correcciones: selectores del hero de estas páginas (`> img` no llegaba al `<img>`); `.philosophy-quote` usaba `--wp--preset--spacing--5`, que no existe, y perdía todo su padding; ahora tiene los 20px del prototipo.
- Fotos: 10 WebP en `assets/img/nosotros/` y `assets/img/trabaja/` (**134 MB → 450 KB**), recortadas donde el espacio lo pide.
- `WORDPRESS-SETUP.md`: § 7bis con la plantilla exacta del formulario "Postulación" (y adjuntar `[cv]` en el correo), § 7bis-2 con las fotos de ambas páginas y § 8.

**Verificación (Local, render real con `do_blocks()` + shortcodes; formulario CF7 armado en memoria sin crearlo en la BD):**
- Quiénes somos:
  - Desktop, 1280px: equipos 384×384 en damero; reversos de las tarjetas sin recorte a 1280, 1024, 910 y 375px.
  - Móvil: carril horizontal ≤900px.
  - Tarjetas: el volteo con el botón funciona y el foco pasa a "Volver".
- Trabaja con nosotros:
  - Galería 410×426 + 2×205.
  - Vacantes en 4/2/1 columnas con los CTA alineados.
  - Formulario 2×2 + botón (en móvil, una columna).
- Ambas páginas:
  - Sin scroll horizontal.
  - Énfasis en cobre como el prototipo.
- Auditoría de bloques sin discrepancias (Quiénes 47; Trabaja 62 + el bloque shortcode, que es texto plano), `php -l` y CSS balanceado.

**Pendiente:**
- Crear las páginas **Quiénes somos** (`/quienes-somos/`) y **Trabaja con nosotros** (`/trabaja-con-nosotros/`) con la plantilla "Página con motion editorial (GSAP)" e insertar los patterns; crear el formulario CF7 **Postulación** (WORDPRESS-SETUP § 7bis).
- En Local, la página Metodología (#97) quedó con la plantilla por defecto (sin GSAP) y el título "Metodologia", sin tilde.
- Del cliente: collage general (hero) y por equipo, validación de los textos de los equipos, buzón de destino de las postulaciones y confirmar "Abogado senior — con o sin experiencia" (lámina 24; parece contradictorio con "senior"). El texto de "¿Por qué…?" tutea ("Haz parte…") y el resto del sitio usa "usted": se dejó textual por ser copy del cliente.

## Ajustes del Owner: hero de Inicio, viñetas de Metodología, foto de Filosofía y formulario de Postulación en CF7 (D125, 2026-09-29)

**Pedido (Owner):**
- Hero de Inicio: "deberíamos mostrar una imagen más general y no solamente la de la chica… uses la imagen que se llama dos".
- Metodología, tarjetas de servicios: "las líneas que separan los bullets… sobra… elimina esas líneas".
- Filosofía (Quiénes somos): la foto del bolso "no es tan bonita… La idea es… que tampoco se repita más con otras imágenes que están dentro del sitio".
- Trabaja con nosotros: "crea el formulario usando… Contact Form 7. Ya está instalado, así que puedes utilizarlo".

**Aplicado — fotos:** 2.jpg ya estaba en la foto bajo "En cifras" de Inicio y en el hero de Quiénes somos. Para que no quedaran dos veces en Inicio ni dos heroes iguales, se reasignaron 6 fotos (mismas rutas, así que las páginas ya insertadas se actualizan sin reinsertar):

| Espacio | Antes | Ahora |
|---|---|---|
| Inicio — hero | IMG_9118 | 2.jpg |
| Inicio — foto bajo "En cifras" | 2.jpg | 1.jpg |
| Metodología — hero | 1.jpg | IMG_9128 |
| Quiénes somos — hero (provisional) | 2.jpg | IMG_9119 |
| Quiénes somos — equipo administrativo | IMG_9128 | IMG_9127 |
| Quiénes somos — Filosofía | IMG_9049 | IMG_9118 |

- IMG_9118 queda **solo** en Filosofía.
- Encuadres ajustados: rostros de 1.jpg en el tercio superior del banner de cifras; hero de Quiénes somos con el rostro principal debajo del header fijo; hero de Metodología corrido a la derecha en móvil.
- Alt actualizados en los patterns: hero de Inicio y Filosofía.
- Siguen repitiéndose entre páginas algunas fotos pequeñas (las fotos aprobadas son menos que los espacios): por ejemplo, IMG_9071, IMG_9073 e IMG_9051 en tarjetas de Inicio y en Trabaja con nosotros.

**Aplicado — Metodología:** listas de las tarjetas sin filetes, 10px entre puntos (se conserva el guion cobre).

**Aplicado — formulario:**
- Creado en el sitio Local el formulario CF7 **"Postulación" (#106)**, con autorización explícita del Owner y un script que no toca formularios existentes. Campos: nombre, teléfono, cargo de interés y hoja de vida (plantilla de WORDPRESS-SETUP § 7bis).
- Correo: a `[_site_admin_email]` hasta que el cliente defina el buzón de talento humano; asunto "Nueva postulación: [cargo] — [nombre]"; hoja de vida adjunta (`[cv]`); sin el `Reply-To: [your-email]` de la plantilla por defecto (el formulario no pide correo). El validador de CF7 queda sin errores.
- La página Trabaja con nosotros (#104) ya muestra el formulario real.
- En móvil, el indicador de envío de CF7 desplazaba el botón 36px: ahora va superpuesto dentro del botón.

**Corrección — motion de las páginas internas:** `functions.php` encolaba GSAP/ScrollTrigger/home-motion.js solo si `is_page_template( 'templates/page-motion.html' )`. En un tema de bloques WordPress guarda la plantilla como slug (`page-motion`; verificado en la BD en las páginas #97, #101 y #104), así que el motion **nunca cargaba** en Metodología, Quiénes somos ni Trabaja con nosotros. Ahora se aceptan ambas formas; verificado en vivo que GSAP y ScrollTrigger cargan.

**Verificación (Local, páginas reales creadas por el Owner):**
- Inicio: hero con 2.jpg y foto de cifras nueva.
- Metodología: sin filetes y hero nuevo.
- Quiénes somos: hero y Filosofía nuevos.
- Trabaja con nosotros: formulario #106 con los 4 campos, los cargos, solo PDF/Word y el botón alineado en móvil.
- Técnica: `php -l` y CSS balanceado.
- **No se envió ninguna postulación de prueba** (el formulario tiene datos personales y el sitio `.local` no está en la lista de hosts de prueba). Queda para que el Owner lo pruebe (en Local el correo lo captura Mailpit).

**Pendiente:** reinsertar el pattern de Inicio y de Quiénes somos solo si se quieren los textos alternativos nuevos (las fotos ya cambiaron); buzón real de postulaciones.

## Logo nuevo de la firma en todo el sitio (D126, 2026-09-30)

**Pedido (Owner, por solicitud del cliente):** "te estoy anexando el nuevo logo de la firma. Vamos a reemplazar este logo tanto en el header como en el footer de todo el sitio web. Y en donde se haga énfasis en ese logo… solo se elimina… el recuadro… Analiza el sitio y reemplaza el logo donde sea necesario". Insumos: `AAA_EstudioLegal LOGO NVO.pdf` y `AAA_EstudioLegal.ai` (3 mesas de trabajo: horizontal, isotipo solo y vertical, cada una en versión clara, navy y oscura).

**Dónde estaba el logo:** header (isotipo con recuadro + wordmark, desde la Biblioteca de medios), footer (logo completo PNG con recuadro + isotipo grande de marca de agua), marca de agua del panel "Conversemos" (Inicio, Metodología, Quiénes somos) y tarjetas de equipo de Quiénes somos. El sitio no tenía favicon ni ícono de sitio.

**Aplicado:**
- **SVG vectoriales extraídos del `.ai`**, sin rasterizar. El `.ai` es compatible con PDF; los trazados se leyeron con un script de node en el scratchpad, sin instalar nada. Quedan en `assets/img/brand/`:
  - `isotipo.svg` (cobre);
  - `isotipo-blanco.svg`;
  - `wordmark-blanco.svg` ("Estudio Legal");
  - `logo-horizontal-claro.svg` (isotipo cobre + texto blanco, la versión del cliente sobre navy);
  - `favicon.svg` (isotipo en caja cuadrada).
- Colores: navy CMYK 100/71/40/34 → #063B59 (el del manual); cobre CMYK 11/35/53/2 → **#DCA97E**. El logo nuevo es de tinta plana, sin el degradado #ECBC8A→#CB9270 del anterior.
- `functions.php`:
  - Header, logo del footer y marca de agua del footer salen del tema (nueva `aaa_brand_url()`) y no de la Biblioteca de medios; viajan con el tema a staging/producción.
  - Nuevo filtro `aaa_swap_legacy_isotype()`: cambia al vuelo la URL del isotipo viejo que guardaron las páginas ya insertadas, así que no hay que reinsertar nada.
  - Favicon con el isotipo nuevo, solo si no hay ícono de sitio configurado.
- Patterns (Inicio, Metodología, Quiénes somos): 9 referencias al isotipo viejo → `brand/isotipo-blanco.svg`.
- `components.css`:
  - El header toma las proporciones exactas del logo horizontal del cliente: isotipo 89,7% del alto, wordmark 82% desde el 18%, separación 12,9%. Queda en 138×48px (antes 146px de ancho); se conserva la animación de aparición del isotipo.
  - El isotipo de las tarjetas pasa de un cuadrado forzado a ancho fijo con alto proporcional (el nuevo es apaisado y se habría deformado).
- `WORDPRESS-SETUP.md`: tabla de archivos del logo y usos.

**Verificación (Local):**
- Inicio, Metodología, Quiénes somos, Trabaja con nosotros, una entrada del blog y la 404: **0 referencias** a los archivos del logo viejo y todas las imágenes de marca cargan.
- Header con el isotipo cobre sin recuadro y "Estudio Legal" en blanco; footer con el logo horizontal nuevo (220×77); marcas de agua nuevas; favicon presente.
- Técnica: `php -l` y CSS balanceado.

**Pendiente:** los archivos viejos del logo siguen en la Biblioteca de medios (ya sin uso); se pueden borrar desde WordPress cuando el Owner quiera. No los borré: AGENTS.md no permite tocar `uploads` sin respaldo y autorización.

## Inicio — "Nuestro enfoque" sin foto y centrado (D127, 2026-09-30)

**Pedido (Owner, por solicitud del cliente):** "eliminemos la imagen de la señora que está hablando por teléfono. Y que el contenido que va a la izquierda aparezca centrado… el fondo debe ser beige como lo tiene… ese cuadro de texto".

**Aplicado:**
- `patterns/home-full.php`: la grilla de 2 columnas (texto + foto IMG_9102 a sangre) pasa a un solo grupo `home-about-summary__content`. Mismo eyebrow, título, "No representamos al deudor.", párrafo y botón "Solicitar evaluación jurídica"; conserva la entrada animada del título.
- `components.css` (bloque D127):
  - Fondo beige de la sección (#EEEAE3, el mismo del cuadro de texto).
  - Contenido centrado a 760px de ancho, título a 22ch, párrafo a 60ch, botón centrado; título y énfasis con los colores de antes.
  - Las reglas cubren también el Inicio insertado antes de D127 (esconden la columna de la foto y centran la de texto), así que el cambio ya se ve sin reinsertar.

**Verificación (Local, 1280px y ancho del panel):** Inicio actual y pattern nuevo renderizado quedan idénticos: bloque centrado (253–1013px en un viewport de 1265), fondo beige, sin foto, sección de 552px. Auditoría de bloques (114, sin discrepancias), `php -l` y CSS balanceado.

**Pendiente:** al reinsertar el pattern de Inicio, la foto desaparece también del HTML (hoy solo está oculta) y `assets/img/home/nuestro-enfoque.webp` quedará sin uso.

## Inicio — "Áreas de práctica" en beige y espacio eyebrow→título uniforme (D128, 2026-09-30)

**Pedido (Owner, por solicitud del cliente):** eyebrow y título más juntos, como en "Nuestro enfoque", en todas las secciones de Inicio y con un espaciado uniforme en todo el sitio; franja de "Áreas de práctica" en el beige de la sección anterior y título "Estrategias jurídicas" en negro; las tres tarjetas "un poquitín más" altas; "Derecho concursal" a dos líneas; títulos de las tarjetas "en el medio o un poquito más abajito del medio"; "Ley 1116" → "Ley 116".

**Aplicado:**
- `components.css` (regla global D128 al final): el título que sigue a un eyebrow ya no recibe el margen de 24px que WordPress pone a los bloques. El espacio lo fija el eyebrow: 16px en todo el sitio. Antes, en Inicio, era de 24px en Áreas, Empresas, Casos de éxito y En cifras, y de 40px en "¿Por qué confiar?". El encabezado de Sectores (grilla) pasa de 24px a 16px de separación.
- `components.css` (Áreas de práctica):
  - Fondo: de navy-deep a beige #EEEAE3.
  - Colores: título en negro (ink-dark #111820) y eyebrow en cobre oscuro.
  - Separación con "Nuestro enfoque": como ahora comparten fondo, se quita el padding superior de Áreas. Quedan 96px entre el botón y el eyebrow, no 192px de beige vacío.
  - Tarjetas más altas: en escritorio `clamp(540px, 70svh, 680px)` en vez de `clamp(460px, 60svh, 600px)`, o sea 560px en lugar de 480px en una pantalla de 800px de alto; en móvil 340px en vez de 300px.
  - Posición del título: arranca justo a la mitad de la tarjeta (antes, al ~74%). Al pasar el cursor, la lista se despliega hacia abajo y el título ya no se mueve.
  - "Derecho concursal" en dos líneas, igual que los otros dos títulos.
- `patterns/home-full.php`: "Ley 1116" → "Ley 116".

**Verificación (Local):**
- Espacio eyebrow→título de 16px en las 7 secciones de Inicio y en Metodología, Quiénes somos y Trabaja con nosotros, a 1280px y 390px.
- Tarjetas a 1280px: 560px de alto, título al 50% y en 2 líneas en las tres. Con la lista desplegada el título sigue en su lugar y sobran 161–220px de tarjeta (a 680px).
- El pattern renderizado da lo mismo que la página actual.
- Auditoría de bloques (114, sin discrepancias), `php -l` y CSS balanceado.

**Pendiente:**
- ~~El cambio a "Ley 116" solo se ve al reinsertar el pattern de Inicio~~ — **resuelto el mismo día**, a pedido explícito del Owner. Se corrigió directamente en la página Inicio de Local (ID 82): era la única que contenía "Ley 1116" y se cambió solo ese ítem de la lista, tras guardar respaldo del contenido previo (fuera del repo) y con revisión nativa de WordPress. Verificado en el HTML servido: "Ley 116" aparece 1 vez y "Ley 1116", 0.
- **Para confirmar con el cliente:** el régimen de insolvencia empresarial en Colombia es la **Ley 1116 de 2006**; no encuentro una "Ley 116" relacionada con derecho concursal. Se aplicó el cambio por instrucción explícita del Owner, pero conviene confirmarlo antes de publicar, para no corregir un dato que quizá era correcto. **Resuelto (Oscar, 2026-10-15, D178): se usa "Ley 116" en el sitio y en toda la documentación.**

## Inicio — "Áreas de práctica": títulos e índices más grandes (D129, 2026-09-30)

**Pedido (Owner):** subir 2px los títulos de las tarjetas ("Derecho concursal", "Normalización de activos", "Línea corporativa y litigios") y los números "01/02/03", porque con las tarjetas más altas de D128 se veían pequeños.

**Aplicado (`components.css`, solo en esta sección):**
- Títulos: de 24px a 26px (1.625rem).
- Índices: de 13px a 15px (0.9375rem).
- El ancho máximo y el alto reservado del título están en ch/em, así que escalan con la letra.

**Verificación (Local, 1280px y 390px):** los tres títulos siguen en 2 líneas; en escritorio arrancan al 50% de la tarjeta de 560px. CSS balanceado. Aplica sin reinsertar el pattern.

## Inicio — foto de "En cifras" = foto del hero en blanco y negro (D130, 2026-09-30)

**Pedido (Owner):** la foto en blanco y negro bajo "En cifras" era "muy random" y no representaba las cifras. Se pidió usar la misma imagen del hero, conservando el blanco y negro "para darle un toque más artístico".

**Aplicado:**
- `patterns/home-full.php`: la imagen pasa de `home/cifras-equipo.webp` (1.jpg, con el gris ya aplicado en el archivo) a `home/hero.webp` (2.jpg, la oficina con el equipo completo).
- `components.css`:
  - `filter: grayscale(1)`: el gris va por CSS para reutilizar la foto que el navegador ya descargó para el hero.
  - `object-position: 50% 60%`: el recorte 16/7 centra al equipo en sus puestos, con poco techo y poco piso.
- Página Inicio en Local (ID 82): se cambió solo el `src` de esa imagen (1 referencia), por pedido explícito del Owner. Antes se guardó respaldo del contenido (fuera del repo) y quedó la revisión nativa de WordPress.
- `WORDPRESS-SETUP.md`: tabla de fotos de Inicio actualizada.

**Verificación (Local):**
- La página servida carga `hero.webp` con `grayscale(1)`.
- A 1280px se ve el equipo completo en la franja panorámica.
- A 620px (formato 3/2) se ve la foto entera.

**Pendiente:** `assets/img/home/cifras-equipo.webp` queda sin uso en el tema; se puede borrar en un commit posterior si el Owner lo confirma.

## LinkedIn del footer y textos de Sectores, "Conversemos" y banner de Metodología (D131, 2026-09-30)

**Pedido (Owner):** URL de LinkedIn en el footer y tres textos nuevos, dictados literalmente.

**Aplicado:**
- `parts/footer.html`: LinkedIn → `https://www.linkedin.com/company/agudelo-abogados-asociados/` (nueva pestaña, `rel="noopener noreferrer"`). **Cierra el pendiente de la Slide 12** (URL real de LinkedIn). Aplica en todas las páginas.
- Inicio, párrafo de "Empresas que ya confiaron": se agrega "en asuntos de insolvencia, normalización de activos, derecho corporativo y litigios" antes de "con estrategias ajustadas…".
- Cierre "Conversemos": "Si su organización enfrenta un reto jurídico, necesita proteger sus activos, gestionar riesgos o tomar decisiones corporativas, nuestro equipo puede evaluar la situación y definir una estrategia jurídica." Es el mismo bloque en Inicio, Metodología y Quiénes somos (Trabaja con nosotros no lo tiene), así que se cambió en los tres para que no difieran.
- Banner de Metodología: el H1 pasa a "Insolvencia, normalización de activos y línea corporativa, *con una estrategia clara.*". El banner no tiene párrafo, así que el texto reemplaza al título. El remate en cursiva sigue el mismo recurso que el resto de títulos del sitio.
- Patterns `home-full.php`, `metodologia-full.php`, `quienes-somos-full.php` y páginas ya insertadas en Local (Inicio 82, Metodología 97, Quiénes somos 101):
  - Se cambiaron solo esos textos, por pedido explícito del Owner.
  - Antes se guardó respaldo de cada página (fuera del repo) y quedó la revisión nativa de WordPress.

**Verificación (Local, HTML servido):**
- LinkedIn con la URL nueva en las 4 páginas.
- Los textos nuevos aparecen en las 3 páginas y no queda ninguno de los viejos.
- No hay copia del footer en la BD que tape el archivo del tema.
- `php -l` y auditoría de bloques sin discrepancias (114/88/47).

## Viñetas con balanza en Inicio y Metodología (D132, 2026-09-30)

**Pedido (Owner, por solicitud del cliente):** reemplazar las rayitas de las viñetas de Inicio y Metodología por "un bullet un poco más intuitivo… un martillo o la balanza… lo dejo a tu criterio".

**Decisión (a criterio delegado por el Owner):** balanza de la justicia.
- Es el símbolo jurídico más reconocible y se lee mejor que un martillo a 15–16px.
- Se dibujó en trazo fino, el mismo lenguaje de línea que los íconos de la línea de tiempo de Metodología.
- Mantiene el cobre de cada contexto: accent-main (#CAA181) sobre las fotos oscuras de Inicio y accent-main-strong (#9A6D4D) sobre las tarjetas claras de Metodología.

**Aplicado (`components.css`, bloque D132 al final):**
- SVG propio como máscara CSS (`--aaa-bullet-scale`) sobre el `::before` que ya dibujaba la rayita.
- El ícono mide 1.1em (16.5px) y va centrado en la primera línea de cada ítem; sangría de 1.6em.
- Aplica a `.surface-visual__list` (Áreas de práctica, Inicio) y `.service-card__list` (Representación especializada, Metodología).
- No hay SVG en el HTML, así que no hace falta reinsertar patterns.

**Verificación (Local):**
- Inicio a 620px y 1280px: al desplegar la lista (hover/foco) los ítems aparecen uno a uno como antes y ninguno recorta el ícono.
- Metodología a 620px.
- CSS balanceado.

## Quiénes somos — foto de "Origen y especialización" más alta (D133, 2026-09-30)

**Pedido (Owner):** la foto de los fundadores "en el archivo original… es un poco más grande y cuadrada… aprovecharla mejor… que sea un poco más alta".

**Aplicado:**
- `assets/img/nosotros/origen.webp` regenerado desde el original aprobado (`assets/img/aprobadas-web/`, no versionado) **sin recorte**.
  - Antes: 1200×800, con el 23% inferior cortado.
  - Ahora: 1200×1041, 41 KB, con los dos fundadores de cuerpo entero hasta las manos.
  - Mismo script de optimización (PHP GD de Local); el original no se toca.
- `components.css`: la foto se muestra en su proporción natural (`aspect-ratio: 1200 / 1041`, anclada arriba) en vez de 3/2 con tope de 360px.
  - Escritorio: 540×468px (antes 540×360).
  - Móvil (≤800px): tope de 460px (antes 320); si la pantalla la haría más alta, se recorta por abajo y los rostros siguen a la vista.
- Mismo archivo y misma ruta, así que no hace falta reinsertar el pattern. `WORDPRESS-SETUP.md` actualizado.

**Verificación (Local):**
- 1280px: 540×468px, el texto queda centrado a su lado.
- 620px: 555×460px.
- CSS balanceado.

## Quiénes somos — foto de "Origen y especialización" siempre completa (D134, 2026-09-30)

**Pedido (Owner):** "el alto está bien pero la imagen no está completa… estás recortando un poco abajo a las dos personas, necesito que uses la imagen completa".

**Diagnóstico:** el archivo de D133 ya estaba completo: el original mide 4160×3609 y la versión web 1200×1041, misma proporción. El recorte venía de tres lados:
1. La deriva de scroll de GSAP (`addMediaDrift` en `home-motion.js`, solo en escritorio) ampliaba la foto un 2,5–4,5% y la desplazaba verticalmente dentro de un marco con `overflow:hidden`.
2. En móvil, el tope de 460px de alto recortaba abajo.
3. Con el mismo nombre de archivo, el navegador podía seguir mostrando la versión 3/2 anterior (sin la parte de abajo) desde caché.

**Aplicado:**
- `components.css`:
  - Sin deriva en esta foto (`transform: none !important`); la entrada con clip-path del capítulo sigue igual.
  - En ≤800px la foto va entera en su proporción natural, sin tope de alto; el ancho se limita a 560px para que no crezca de más en tablet.
- Archivo renombrado a `assets/img/nosotros/origen-fundadores.webp` (evita la caché); se eliminó `origen.webp`, que no está versionado.
  - Actualizados el pattern `quienes-somos-full.php` y la página Quiénes somos en Local (ID 101): solo ese `src`, tras guardar respaldo fuera del repo y con revisión nativa.
- `WORDPRESS-SETUP.md` actualizado.

**Verificación (Local):**
- 1280px con GSAP activo y después de hacer scroll: foto 540×468, marco 540×468, `transform: none`, sin clip-path → se ve la foto entera.
- 620px: 555×482, proporción 1.151 (original 1.153).
- CSS balanceado.

## Página de Contacto con formulario CF7 conectada a los CTA (D135, 2026-09-30)

**Pedido (Owner):** revisar el prototipo, decir qué páginas faltan y construir ya la de Contacto, "con el respectivo formulario", conectada "a los CTA que corresponden", según la documentación y los cambios hechos.

**Revisión prototipo ↔ WordPress (Local):**

| Prototipo | WordPress |
|---|---|
| Inicio, Metodología (`servicios.html`), Quiénes somos (`nuestro-equipo.html`), Trabaja con nosotros | Creadas (82, 97, 101, 104) |
| Contacto (`captacion-b2b.html`) | **Creada en esta sesión (#116)** |
| Aviso legal / Política de privacidad (`proximamente.html`) | **No creadas**: el footer enlaza a `/aviso-legal/` y `/politica-de-privacidad/` (404). Pendiente del texto del cliente (D2: la IA no redacta contenido legal) |
| Blog (`noticias-analisis.html` + 2 artículos) | Plantillas `home.html`/`single.html` listas, sin página ni entradas. El cliente pidió sacarlo del menú; su alcance sigue abierto (ver Slide 12 más arriba) |
| `type-lab.html` | Referencia interna, no es página del sitio |

**Aplicado:**
- `patterns/contacto-full.php` reescrito según la última versión de `captacion-b2b.html`:
  - Sin hero. Una sola sección: título "Cuéntenos el contexto de su organización. *Nuestro equipo revisará su solicitud.*", introducción y datos de contacto (dirección; WhatsApp y correo) a la izquierda, formulario a la derecha.
  - La grilla pasa de Columnas a Grupo, porque el `is-layout-flex` de Columnas anulaba el `display:grid`.
  - El formulario de muestra en HTML se reemplaza por `[contact-form-7 title="Contacto B2B" …]`.
  - Motion: título con `aaa-motion-section-title`, formulario con `aaa-reveal`.
- Contact Form 7: creado **"Contacto B2B" (#115)**, validador sin errores. Pedido explícito del Owner.
  - Los 8 campos del prototipo, todos obligatorios, con `<label for>`; los desplegables arrancan en "Seleccione una opción".
  - Botón "Solicitar contacto →".
  - Correo a `info@agudeloabogados.com` (destino provisional de WORDPRESS-SETUP § 5), con `Reply-To: [correo]`. En Local, todo correo queda en Mailpit.
- Página **Contacto (#116)** creada en `/contacto/` con el pattern y la plantilla "Página con motion editorial (GSAP)".
- `components.css`, bloque "Contacto (D135)" portado de `prototype/css/components.css:2542-2648`:
  - Padding superior para librar el header fijo; alto mínimo de pantalla en escritorio.
  - Datos de contacto con etiqueta cobre; `address` sin cursiva; formulario sobre beige.
  - Ajustes propios para que "Seleccione una opción" nunca se corte:
    - columnas 1fr/1fr (el prototipo usa 1.25/0.95);
    - flecha del desplegable a 12px del borde;
    - relleno lateral del formulario con tope de 36px;
    - entre 901 y 1279px, un campo por fila.
- CTA: `patterns/cierre-conversemos.php` (pattern suelto, sin uso en páginas) apuntaba a `/captacion-b2b/` → `/contacto/`. Los demás ya apuntaban a `/contacto/`.
- `WORDPRESS-SETUP.md`: plantilla exacta y correo del formulario (§ 7bis) y estado de las páginas en Local (§ 7).

**Verificación (Local):**
- Las 5 páginas responden 200. Llegan a `/contacto/` 10 enlaces:
  - "Mi caso" del header en todas;
  - "Solicitar evaluación jurídica" ×2 en Inicio y ×1 en Metodología y en Quiénes somos;
  - "Contacto" del footer en todas.
- Ningún enlace a `captacion`/`#nota-ady`.
- Formulario renderizado con los 8 campos y sus etiquetas asociadas. A 1280px: 2 columnas, título a 136px del borde (header de 79px).
- Sin scroll horizontal a 1920/1440/1280/1100/900/768/390px; el texto de los desplegables cabe en todos.
- `php -l`, CSS balanceado. La auditoría de bloques solo marca el shortcode (sin etiqueta, esperado).
- **No se envió el formulario**: la prueba de envío (que llegue a Mailpit) queda para el Owner.

**Pendiente:**
- "Mi caso" sigue en `/contacto/` de forma provisional: según D42, su destino es la plataforma ADY, sin URL todavía.
- Correo de destino definitivo del formulario: a confirmar por el cliente.
- **Autorización de tratamiento de datos (Ley 1581 de 2012)** en Contacto y Postulación: ninguno la pide todavía. Se agrega como casilla `[acceptance]` cuando exista la Política de privacidad con texto del cliente (D2).
- Aviso legal y Política de privacidad: sin crear hasta tener el texto del cliente.

## Contacto con 5 campos, "Mi caso" provisional y nuevo aviso de cookies (D136, 2026-09-30)

**Pedido (Owner):**
1. Aplicar la lámina 3 de la PPTX: eliminar campos del formulario de Contacto, y revisar si la PPTX pide otros cambios de formularios.
2. "Mi caso" (header) no debe ir a Contacto: "deja un enlace dummy por ahora".
3. Aviso de cookies: solo el botón "Aceptar", con el enlace a la Política de privacidad integrado en el texto, y revisar su diseño, que "se ve un poco extraño".

**Revisión de la PPTX** ("Estructura y Copies del Sitio WEB (1).pptx": 24 láminas, más comentarios y notas):
- **Lámina 3:** "Eliminar del formulario: Tipo de organización, Asunto de interés, Contexto general del asunto". Son **3 campos**; el pedido decía "cuatro", pero la lámina y la lista del Owner nombran estos tres.
- Láminas 3, 11 y 18 (CTA al formulario, mismo "Conversemos" en todas) y lámina 22 (sin CTA en Filosofía): ya aplicadas.
- Lámina 23 (Postulación: nombre, teléfono, hoja de vida y cargo de interés): aplicada en D124.
- El único comentario de la PPTX (lámina 4) trata del despliegue de Áreas. **No hay más cambios de formularios.**

**Aplicado:**
- CF7 "Contacto B2B" (#115), tras guardar respaldo de su configuración (fuera del repo):
  - Quedan 5 campos: Nombre (a lo ancho), Empresa | Cargo, Correo | Teléfono.
  - Asunto y cuerpo del correo sin los campos eliminados.
  - Validador sin errores. El pattern no cambia: el shortcode busca el formulario por su título.
- `components.css` (Contacto): sin desplegables ya no hacen falta los ajustes de D135 para "Seleccione una opción". Se retiran y vuelven las proporciones del prototipo: columnas 1.25fr/0.95fr, relleno 3vw sin tope, dos campos por fila también entre 901 y 1279px.
- `parts/header.html`: "Mi caso" → `#mi-caso`. Es un ancla inexistente: no navega ni hace saltar la página, y es fácil de ubicar cuando llegue la URL de ADY (D42).
- `parts/footer.html` + `components.css`, aviso de cookies rediseñado:
  - **Texto:** "Usamos cookies propias y de terceros (Google Analytics, Google Tag Manager y Microsoft Clarity) para medir el uso del sitio y mejorar su experiencia. Conozca más en nuestra [Política de privacidad](/politica-de-privacidad/)." Es el mismo aviso informativo de D20 con los nombres de las herramientas completos y el enlace dentro de la frase; no agrega redacción legal (D2).
  - **Botón:** solo "Aceptar", cobre sobre navy como "Mi caso", de 44px de alto (área táctil). La lógica de `main.js` (`data-cookie-accept`, `localStorage`) no cambia.
  - **Diseño:** tarjeta navy de 760px máximo centrada abajo, con texto y botón en una fila en escritorio y apilados con botón a lo ancho en móvil. Entrada suave, respetando `prefers-reduced-motion`.
  - **Defectos corregidos:**
    - se salía por la derecha en móvil (`width` + `inset-inline` sobredimensionados);
    - "Consultar aviso de privacidad" quedaba navy sobre navy;
    - "Aceptar" aparecía sin estilo (sin radio, 17px), apilado debajo;
    - el enlace iba a `/aviso-legal/` en vez de a la política de privacidad.
- `WORDPRESS-SETUP.md` actualizado: plantilla de 5 campos, "Mi caso" provisional, destino del aviso.

**Verificación (Local):**
- Formulario con 5 campos: Nombre 421px; 2×2 de 198px a 1280px.
- "Mi caso" = `#mi-caso` en la página servida.
- Aviso de cookies:
  - móvil (605px útiles): 12px de margen a cada lado, botón de 547×44;
  - escritorio (1280px): 760×97 centrado;
  - "Aceptar" lo oculta, guarda `aaa-cookie-ack` y no vuelve a salir en otra página.
- CSS balanceado. No se envió ningún formulario.

**Pendiente:** el enlace del aviso lleva a `/politica-de-privacidad/`, que da 404 hasta tener el texto del cliente (D2). Sigue pendiente la casilla de autorización de datos en ambos formularios (D135).

## Autorización de tratamiento de datos en los formularios (D137, 2026-09-30)

**Pedido (Owner):** "agrega a todos los formularios ese acceptance… Un checkbox con un mensaje similar al de las cookies, pero basado en la protección de datos de la firma".

**Aplicado (Contact Form 7, en Local, tras guardar respaldo de cada formulario fuera del repo):**
- **Contacto B2B (#115) y Postulación (#106):** casilla obligatoria `[acceptance autorizacion-datos]`, a lo ancho y justo antes del botón.
  - Texto de Contacto: "Autorizo a Agudelo Abogados Asociados SAS — AAA Estudio Legal a tratar mis datos personales para atender esta solicitud, conforme a la Ley 1581 de 2012 y a su [Política de privacidad]."
  - En Postulación dice "mis datos personales y mi hoja de vida para gestionar esta postulación".
  - El enlace abre `/politica-de-privacidad/` en otra pestaña, para no perder lo ya escrito.
- `acceptance_as_validation: on`: el botón no se deshabilita. Si falta la casilla, CF7 avisa junto a ella al enviar ("Para enviar el formulario, autorice el tratamiento de sus datos personales.", en usted como el resto del sitio; el mensaje por defecto era en tuteo y hablaba de "términos y condiciones").
- El correo que recibe la firma deja constancia: "Autorización de tratamiento de datos personales: aceptada en el formulario."
- Validador de CF7 sin errores en ambos.
- `components.css` (bloque D137):
  - La casilla no usa `.talent-form__field`, cuyo estilo estiraba el checkbox a 100% × 52px.
  - Checkbox de 18px en navy, alineado con la primera línea.
  - Texto de 14px en gris (contraste 4.9:1 sobre el beige) con el enlace subrayado.
  - Aviso de error alineado con el texto.
- `WORDPRESS-SETUP.md`: plantillas de los 2 formularios con la casilla, más la configuración adicional, el mensaje y el correo.

**Verificación (Local, 1280 y 390px, las 2 páginas):**
- Casilla a lo ancho del formulario, antes del botón (24px); checkbox de 18×18 alineado con el texto.
- Enlace a `/politica-de-privacidad/` en pestaña nueva; botón habilitado.
- Sin scroll horizontal. CSS balanceado. No se envió ningún formulario.

**Pendiente — validación del cliente:** el texto de la casilla es una **propuesta provisional**: es texto de cumplimiento, y en una firma de abogados debe aprobarlo el cliente (espíritu de D2). Debe validarse junto con la Política de privacidad a la que enlaza, que sigue sin existir (404) hasta tener su texto.

## Metodología — "Nuestra metodología" rediseñada según referencia del cliente (D138, 2026-09-30)

**Pedido (Owner, por solicitud del cliente; tercera vuelta sobre esta sección):** rediseñar la sección "Convertimos cada caso en una estrategia jurídica" exactamente como la imagen de referencia que envió el Owner. Pedidos concretos:
- Conservar el efecto de la línea que pasa "de un paso de la metodología a otro" al hacer scroll.
- Reemplazar las 3 fotos stock de la referencia (balanza, ajedrez, apretón de manos) por otras más adecuadas para la firma.

**Aplicado:**
- `patterns/metodologia-full.php`, nueva estructura:
  - Grupo `stepper__layout` de dos columnas: a la izquierda el encabezado, a la derecha 3 tarjetas apiladas.
  - Cada tarjeta (`stepper__step`) lleva un nodo (`stepper__node`), la foto (bloque Imagen `stepper__photo`) y un cuerpo con número, título y texto. El copy no cambia.
  - Se retiran los íconos en máscara CSS de la versión anterior.
- `components.css`, bloque "Nuestra metodología — tarjetas con conector (D138)", que reemplaza por completo la línea de tiempo horizontal:
  - Eyebrow con espaciado 0.2em y filete cobre de 48px debajo, como en la referencia.
  - Título grande (64px a 1280px) con el énfasis en bloque: "Convertimos / cada caso en / *una estrategia / jurídica.*" (4 líneas).
  - Tarjetas translúcidas con borde tenue y radio de 16px.
  - Foto circular de 158px a 1280px con aro cobre de 2px.
  - Número espaciado y título en cobre, texto en blanco al 86%.
  - Nodos (aro y punto cobre) montados sobre el borde izquierdo de cada tarjeta.
  - Conector con esquinas redondeadas en un riel a la izquierda.
  - Fondo navy con dos halos suaves, como en la referencia.
  - Hover: borde cobre y leve acercamiento de la foto.
- **Efecto conservado y reforzado:** la línea cobre recorre el conector de un paso al siguiente y cada nodo se enciende al llegar.
  - La secuencia pasa a `main.js` (bloque "Metodología"): el tramo hacia el paso N se dibuja (750ms, recorte de arriba abajo) solo cuando ese paso está en pantalla y el anterior ya se encendió.
  - Funciona en orden tanto si las 3 tarjetas aparecen juntas como si entran una a una al hacer scroll.
  - Sin JS o con movimiento reducido, todo queda en su estado final.
  - Las tarjetas entran con un fundido escalonado, sin el desplazamiento de 20px de `.aaa-reveal`, que corría el conector unos 19px durante la entrada.
- **Responsive:**
  - ≤900px: encabezado arriba y tarjetas a todo el ancho.
  - ≤640px: riel de 28px, nodos de 22px, foto de 88px arriba del texto y contenido centrado en la tarjeta.
- **Fotos (stock, Licencia de Unsplash: uso comercial sin atribución obligatoria):** el Owner aprobó Diagnóstico y Estrategia y pidió cambiar Representación; aprobó la descarga de las 3 finales, con archivo, fuente y tamaño informados.
  - 01 `ZH4FUYiaczY` (Dimitri Karastelev): manos revisando documentos con cifras, en tono oscuro.
  - 02 `RbYg6fKSfcY` (Vitaly Gariev): equipo de traje analizando documentos.
  - 03 `MYbhN8KaaEc` (Hunters Race): abogado de traje azul marino abrochándose el saco.
  - Recortadas en cuadrado y optimizadas a WebP de 480×480 (8–18 KB) en `assets/img/metodologia/paso-*.webp`. Los originales quedan fuera del repo.
- Página Metodología en Local (#97): se reemplazó solo esa sección, tras guardar respaldo del contenido completo (fuera del repo) y con revisión nativa. El resto de la página no cambia.
- `WORDPRESS-SETUP.md`: filas de las 3 fotos con fuente y licencia.

**Verificación (Local):**
- **Geometría:** el conector cae exactamente en el centro de ambos nodos (desfase 0.0px en las dos puntas de cada tramo) a 1440, 1280, 1024, 768 y 390px, también durante la entrada.
- **Secuencia en scroll real:** paso 1 → tramo → paso 2 → tramo → paso 3, a 1280, 620 y 375px.
- **Sin desbordes:** sin scroll horizontal en ningún ancho. Título en 4 líneas a 1280px.
- **Técnica:** auditoría de bloques (95, sin discrepancias), `php -l`, `node --check main.js` y CSS balanceado.

**Nota:** son las primeras fotos de banco del sitio, por pedido explícito del Owner (el criterio candidato de D6 era "nunca banco genérico"). Si el cliente entrega fotos propias para estos pasos, basta con reemplazar los 3 archivos `paso-*.webp` con el mismo nombre.

## Metodología — ajuste de proporciones de "Nuestra metodología" (D139, 2026-09-30)

**Pedido (Owner):** el título de la izquierda era "demasiado grande, demasiadísimo": bajarlo considerablemente para que se vea uniforme. Aprovechar mejor el espacio de las tarjetas: número a la izquierda del título (no encima) y fotos más pequeñas, para que las 3 tarjetas se vean completas sin salirse de la pantalla.

**Aplicado (`components.css`, bloque D138; el pattern no cambia):**
- **Título:** usa el tamaño estándar de los títulos de sección del sitio (42px; 31px en móvil), en vez de 64–72px, con el énfasis aún en su propia línea. Eyebrow y filete cobre más ajustados (16px y 24px).
- **Columnas:** 0.75fr / 1.25fr (antes 0.82 / 1.18): más ancho para las tarjetas, texto en menos líneas.
- **Tarjetas:**
  - Número a la izquierda del título, alineado a su línea base ("01 Diagnóstico"), de 15px; el texto va debajo a todo el ancho.
  - Título de la tarjeta a 26px (como las tarjetas de Áreas en Inicio).
  - Fotos de ~113–120px (antes ~158–172px); 72px en móvil.
  - Relleno más ajustado y 20px entre tarjetas.

**Verificación (Local):**
- Las 3 tarjetas miden en total 594–638px, contra 689–1001px disponibles bajo el header, en 1024×768, 1280×800, 1366×768, 1440×900, 1536×864 y 1920×1080 (antes ~800px, no cabían).
- A 1280×800 la sección completa queda en pantalla.
- Conector alineado al centro de los nodos (desfase 0.0px); la secuencia de la línea sigue igual.
- Móvil (375px): título de 31px y sin scroll horizontal. CSS balanceado.

## Metodología — banner con la foto IMG_9102 (D140, 2026-09-30)

**Pedido (Owner):** "reemplaza la imagen del main banner de metodologia, por esta IMG_9102".

**Aplicado:**
- `assets/img/metodologia/hero-9102.webp`:
  - Franja 3:2 a todo el ancho del original vertical (4160×6240, y 14%–58%: del pelo al escritorio), 2200×1467, WebP q70, 65 KB. Mismo tamaño y calidad que los demás banners; el original no se toca.
  - Nombre nuevo para que ningún navegador muestre el banner anterior desde caché (misma lección que D134).
  - `metodologia/hero.webp` (IMG_9128, sin versionar, regenerable) se eliminó al quedar sin uso.
- `patterns/metodologia-full.php` y página Metodología en Local (#97): se cambiaron solo el `src` y el `alt` del banner ("Integrante de AAA Estudio Legal atendiendo una llamada en su puesto de trabajo"), tras guardar respaldo fuera del repo y con revisión nativa. Ninguna otra entrada usaba el banner viejo.
- `components.css` (`.hero--editorial--services`):
  - El título de este banner va centrado; con la foto vertical, a todo el ancho la cabeza ocupa casi todo el alto.
  - Con `object-position: 50% 60%` los ojos quedan visibles entre el header fijo y el eyebrow, y el texto cae sobre mentón, teléfono y saco (con 30–42% el título tapaba el rostro).
  - Desde 1600px, 52%: a 2560px el 60% dejaba los ojos bajo el header.
  - En móvil, 56% 50%: el título ocupa casi todo el banner y la foto queda de fondo bajo el degradado.
- `WORDPRESS-SETUP.md`: fila del banner actualizada.

**Verificación (Local):**
- Carga `hero-9102.webp` (2200×1467) con el nuevo alt.
- Encuadre revisado a 1024, 1280, 1440 y 1920px: ojos entre header y eyebrow, a ~130–205px del borde superior.
- Móvil (375px): texto legible sobre la foto.
- `php -l`, auditoría de bloques (95, sin discrepancias) y CSS balanceado.

**Nota:** IMG_9102 es la misma foto que el cliente pidió quitar de "Nuestro enfoque" en Inicio (D127). Allí ya no se muestra, así que no se repite en el sitio.

## Metodología — banner con la foto IMG_9116 (D141, 2026-09-30)

**Pedido (Owner):** "no me gustó el resultado, intentemos con esta otra imagen IMG_9116". Reemplaza D140 (IMG_9102).

**Aplicado:**
- `assets/img/metodologia/hero-9116.webp`: foto completa (original horizontal 6240×4160, 3:2) → 2200×1467, WebP q70, 70 KB.
  - Vista por encima del hombro, sin rostro, con la taza "Estudio Legal" al centro.
  - `hero-9102.webp` (D140) se eliminó al quedar sin uso.
- `patterns/metodologia-full.php` y página Metodología en Local (#97): se cambiaron solo el `src` y el `alt` ("Integrante de AAA Estudio Legal trabajando en su portátil, con la taza de la firma sobre el escritorio"), tras guardar respaldo fuera del repo y con revisión nativa.
- `components.css` (`.hero--editorial--services`):
  - Desde 1000px, `object-position: 50% calc(120px - 34.67vw)`. La foto cubre el ancho (alto = ancho / 1.5) y el logo de la taza está al 52% de su alto, así que cae siempre a ~120px del borde: entre el header fijo y el eyebrow, a cualquier ancho. Un porcentaje fijo lo escondía bajo el header a 1920px.
  - De 641 a 999px, 45%. En móvil, 60% 50%.
  - Se quitaron los ajustes de rostro de D140.
- `WORDPRESS-SETUP.md`: fila del banner.

**Verificación (Local):**
- A 1024, 1280 y 1920px la taza con el logo asoma sobre el título y el texto cae sobre el portátil. A 960px se ve la taza completa.
- La foto siempre cubre el banner.
- `php -l` y CSS balanceado.

**Nota:** IMG_9116 también se usa, en pequeño, en la tarjeta "Tecnología" de "¿Por qué confiar?" en Inicio.

## Metodología — banner con la foto IMG_9095 (D142, 2026-09-30)

**Pedido (Owner):** "nop, tampoco me gusta, usemos mejor IMG_9095". Reemplaza D141 (IMG_9116).

**Aplicado:**
- `assets/img/metodologia/hero-9095.webp`: foto completa (original 6240×4160) → 2200×1467, WebP q70, 79 KB.
  - Equipo en la oficina: un abogado al fondo detrás de los monitores y otro en primer plano a la derecha.
  - `hero-9116.webp` (D141) se eliminó al quedar sin uso.
- `patterns/metodologia-full.php` y página Metodología en Local (#97): se cambiaron solo el `src` y el `alt` ("Integrantes del equipo de AAA Estudio Legal trabajando en la oficina"), tras guardar respaldo fuera del repo y con revisión nativa.
- `components.css` (`.hero--editorial--services`):
  - 35% en escritorio: el rostro del fondo queda justo sobre el eyebrow y el de primer plano a la derecha del título centrado.
  - 70% 50% en móvil, para mostrar al de primer plano.
  - Se retiró el ancla de la taza de D141.
- `WORDPRESS-SETUP.md`: fila del banner.

**Verificación (Local):** encuadre revisado a 1024, 1280, 1920 y 375px. `php -l` y CSS balanceado.

**Nota:** IMG_9095 también aparece en una tarjeta de "¿Por qué confiar?" (Inicio) y en "Equipo jurídico" (Quiénes somos, temporal hasta el collage).

## Inicio — sin franja navy entre el menú y el banner (D143, 2026-09-30)

**Pedido (Owner, con captura marcada):** quitar el "pequeño espacio azul" entre el menú y la foto del banner de Inicio.

**Causa:** desde 1024px el hero de Inicio tenía `padding-top: 90px`, heredado del header más alto del prototipo. El header fijo mide 79px en todos los anchos desde D126, así que la foto empezaba 11px más abajo y dejaba ver el fondo navy de la sección. En móvil el padding ya era de 78px.

**Aplicado (`components.css`):** `.hero-immersive:where(:not(.hero--editorial))` usa 78px también desde 1024px, y se actualizó el comentario del header. Los héroes de las páginas internas no tenían el problema (su foto empieza detrás del header).

**Verificación (Local):** a 390, 1024, 1280, 1440 y 1890px la foto empieza justo en el borde del menú (0px de separación; queda 1px bajo el borde del header). CSS balanceado. No hizo falta reinsertar patterns.

## Inicio, header y menú móvil — ajustes de presencia y navegación (D144, 2026-10-01)

**Pedido (Owner, con capturas):**
1. Título "Soluciones legales estratégicas" con la composición serif + itálica de "Nuestro enfoque".
3. Menú con más altura y presencia sobre el banner.
4. Recuperar el botón anclado, o una flecha centrada hacia abajo con animación sutil.
5. Más espacio arriba y abajo en "Nuestro enfoque".
6. "Áreas de práctica" de nuevo sobre fondo azul.
7. Menú móvil con íconos e información de contacto y redes como en el prototipo; tarjetas de Áreas en móvil con espacios desiguales.

(La numeración sigue el mensaje del Owner, que no tenía punto 2.)

**Aplicado:**
- **Título del banner (pattern + página Inicio #82):** "Soluciones legales *estratégicas*": la parte regular en blanco y "estratégicas" en itálica cobre (`.aaa-text-emphasis`). Antes (D116) todo el H1 era cobre.
- **Header (`components.css`, bloque D144):**
  - Altura de 88px (80px en móvil), unificada en `--aaa-header-h`. Fondo navy-hover (un tono más profundo que el velo del banner), filete cobre y sombra suave. Logo de 54px (48px en móvil), enlaces de 16px con subrayado cobre al pasar el cursor y en la página actual.
  - Botón "Mi caso" de 46px; flecha solo en móvil, como antes.
  - El banner de Inicio y el `scroll-margin` de las anclas usan la misma variable, así que sigue sin haber franja entre header y banner (D143).
- **Flecha de scroll:** párrafo `hero__scroll` con enlace a `#nuestro-enfoque` (pattern + página #82; la sección recibe el ancla `nuestro-enfoque`).
  - Se eligió en lugar del botón "Conozca cómo lo hacemos", porque el cliente pidió quitar ese CTA (PPTX, lámina 2).
  - Centrada al pie del banner: círculo translúcido, flecha con máscara CSS, rebote sutil y entrada retrasada. Hover y foco en cobre.
  - El texto del enlace se conserva como nombre accesible. Scroll suave activado; con movimiento reducido no hay animación.
- **"Nuestro enfoque":** espacio de 96px a clamp(120px, 11vw, 160px), 88px en móvil. Cubre el markup del pattern y el de la página guardada (columna).
- **Áreas de práctica:** de nuevo navy-deep (revierte D128) con título blanco, eyebrow y énfasis cobre, y su espacio superior propio recuperado.
  - En móvil y tablet las tarjetas ya no tienen altura mínima fija: 48px tras el índice, sin espacios desiguales.
- **Menú móvil:**
  - `functions.php`, nueva `aaa_mobile_nav_extras()` sobre `render_block_core/navigation`. Agrega al panel el logo y un bloque de contacto, solo en el render final y solo en el menú del header. Contacto: dirección, WhatsApp, correo, LinkedIn e Instagram (mismos datos e íconos del footer), más un CTA "Solicitar evaluación jurídica →" a `/contacto/`.
  - CSS: degradado navy con marca de agua del isotipo al 6%; enlaces de 24px con un ícono cobre por página (casa, brújula, equipo, maletín), divisores y "→" en la página actual; foco cobre en lugar del anillo azul; entrada escalonada.
  - Nada de esto se ve en escritorio.
- `STATUS.md` (esta entrada).

**Verificación (Local):**
- Header: 89px a 1440 y 81px a 375.
- Páginas internas y Contacto: ningún título queda bajo el header.
- Flecha: al hacer clic deja "Nuestro enfoque" a 88px, justo bajo el header.
- "Nuestro enfoque": 158px de espacio a 1440.
- Áreas: navy con 96px de espacio superior; en móvil, tarjetas de 275–334px con 48px parejos del índice al título.
- Menú móvil abierto a 375px: logo, 4 enlaces con íconos, contacto, redes y CTA sin desbordes; los extras se ocultan en escritorio.
- `php -l` (functions, pattern), auditoría de bloques (115, sin discrepancias), CSS balanceado.

**Pendiente:** el CTA del menú móvil va a `/contacto/`; "Mi caso" sigue dummy (`#mi-caso`) hasta que llegue la URL de ADY (D136).

## Inicio — flecha del banner siempre visible y menú móvil compacto (D145, 2026-10-01)

**Pedido (Owner, con captura):**
- En su pantalla no se veía la flecha de scroll del banner porque "la imagen es más alta que el viewport".
- En iPhone el menú móvil tenía "fuente algo grande": el bloque de contacto y el CTA quedaban cortados, y además había un "scroll horizontal" extraño.

**Causa:**
- **Flecha:** el banner tenía una altura mínima fija de 690px más los 88px del header (~778px). En pantallas con menos alto visible (portátiles, o con la barra de administración de WordPress en una sesión iniciada) la flecha quedaba por debajo del borde.
- **Menú:** enlaces de 24px con espaciado generoso. La marca de agua del isotipo (`right: -4rem`) se salía del panel y causaba el scroll horizontal.

**Aplicado (`components.css`, bloque D145):**
- **Banner:** `min-height: clamp(520px, 100svh − header − barra de admin, 860px)`. Siempre coincide con el alto visible de la pantalla, así que la flecha queda a la vista; WordPress define la variable de la barra de admin (32px / 46px) solo cuando la barra se muestra.
- **Menú móvil:**
  - Enlaces de 20px (18px en pantallas de menos de 680px de alto), logo de 136px, bloque de contacto, íconos sociales y CTA más compactos.
  - El panel no tiene scroll horizontal y la marca de agua queda dentro (esquina inferior derecha, 6%).

**Verificación (Local):**
- **Flecha visible** a 1916×780, 1440×900, 1366×650, 1280×720, 1024×600 y 402×750, y con barra de admin simulada (1916×820). No se monta sobre el texto.
- **Excepción:** 375×560 (teléfono en horizontal), donde el banner necesita su piso de 520px.
- **Menú abierto:** cabe completo con el CTA visible y sin scroll vertical ni horizontal a 402×750 (iPhone 17), 402×620, 375×667 y 430×860.
- CSS balanceado.

**Nota:** no incluido en el checkpoint `checkpoint-wordpress-2026-10-01` (sin commit).

## Botón "Mi caso" en móvil centrado y con ícono propio (D146, 2026-10-01)

**Pedido (Owner, con captura a 393px):** en móvil la flecha del botón "Mi caso" se veía baja y el botón parecía más alto que el menú; "cambiar ese icono por uno que se ajuste mejor".

**Causa:**
- A ≤560px el botón mostraba solo "→" como carácter de texto, cuyas métricas de fuente lo dejaban bajo dentro de la caja.
- Con 46px el botón quedaba 6px por debajo del centro del header: el `<a>` es inline-grid dentro de un bloque con alto de línea de texto (27px), así que se apoyaba en la línea base.

**Aplicado (`components.css`, bloque D146, ≤560px):**
- Botón de 40×40px. El contenedor `.wp-block-button` pasa a flex, así que el botón queda exactamente centrado en el header.
- El carácter "→" se reemplaza por un **ícono de carpeta ("expediente")** dibujado, de 20px, centrado con máscara CSS en el color del botón: representa mejor "Mi caso" y no se confunde con la flecha de scroll del banner.
- El texto "Mi caso →" se mantiene como nombre accesible del enlace.
- Desde 561px el botón con texto no cambia.

**Verificación (Local):** a 375, 393 y 560px el botón mide 40×40 con su centro a 40.0px (header 40.5px, ícono del menú 40.0px); a 561 y 1440px el botón "Mi caso →" sigue igual. CSS balanceado.

**Nota:** no incluido en el checkpoint `checkpoint-wordpress-2026-10-01` (sin commit, como D145).

## Botón "Mi caso" en móvil: ícono de persona y centrado real (D147, 2026-10-01)

**Pedido (Owner):** cambiar la carpeta por el ícono de "mi cuenta" ofrecido en D146, y corregir que el ícono no quedaba centrado verticalmente dentro del botón.

**Causa:** el enlace es una grilla. El texto oculto ("Mi caso →", font-size 0) ocupaba su propia fila y el ícono (`::after`) quedaba en una segunda fila, así que no estaba en el centro real del botón.

**Aplicado (`components.css`, bloque D146, ≤560px):**
- **Ícono:** una persona (cabeza y hombros, "mi cuenta"), de 20px, con máscara CSS en el color del botón. El dibujo está equilibrado sobre el centro de su caja de 24px.
- **Centrado:** el ícono ahora se ubica con `position: absolute; inset: 0; margin: auto` sobre el enlace (`position: relative`). Este centrado no depende del texto oculto ni de la grilla.

**Verificación (Local, 393px):**
- Botón de 40×40 con su centro a 40px (header 40.5px).
- Ícono de 20×20 con 9px de margen por cada lado (centro exacto dentro de la caja interior de 38px).
- Revisado visualmente con zoom 3×.
- CSS balanceado.

**Nota:** sin commit, como D145–D146.

## Live link en Hostinger con Duplicator (D148, 2026-10-02)

**Pedido (Owner):** "Vamos a cargarlo a Hostinger para generar un live link para nuestro cliente, podemos usar un plugin como duplicator... entra a hostinger e instalalo". Elecciones del Owner: **Duplicator** (autoriza este plugin, fuera de la lista de D110, solo para la migración), **dominio temporal de Hostinger**, **oculto a Google (noindex)**.

**Proceso:**
1. Copia con Duplicator Lite 5.0.5 en Local: archivo `.daf` (72.881.656 bytes) + `installer.php`, guardados en `Desktop/AAA-Hostinger-paquete/`.
2. El administrador de archivos de hPanel limita la subida a 10 MB por archivo, así que el paquete se dividió en 8 partes y se reconstruyó en el servidor con un script de un solo uso. El script verificó tamaño y MD5 y luego se borró a sí mismo junto con las partes.
3. Instalador clásico de Duplicator en modo **Overwrite Install** sobre el WordPress en blanco que había creado Hostinger:
   - Las credenciales de la base de datos salieron del propio `wp-config.php` del servidor; ninguna se tecleó ni se registró aquí.
   - El Owner autorizó en el chat aceptar los avisos y sobrescribir.
4. Resultado: todo en "good" (archivos, base de datos, search & replace, plugins); 21 tablas / 643 filas.

**URL en vivo:** https://papayawhip-chicken-297614.hostingersite.com

**Verificación (en vivo, 2026-10-02):**
- Inicio, Metodología, Quiénes somos, Trabaja con nosotros y Contacto responden 200.
- Sin imágenes rotas ni referencias a `aaa-estudio-legal.local`.
- GSAP carga y los dos formularios CF7 se muestran.
- `/blog/` responde 404 igual que en Local: todavía no existe la página Blog, no es una falla de la migración.

**Pendiente para cerrar D148:**
- Entrar al WP admin de Hostinger; el usuario y la contraseña son los mismos de Local, así que hay que cambiarlos. Al entrar, Duplicator borra sus archivos de instalación.
- Activar Ajustes → Lectura → "Disuadir a los motores de búsqueda": el sitio respondía `index, follow`. *(Resuelto en D149.)*
- Quitar Duplicator tras la migración, si no se va a reutilizar.
- Confirmar el SMTP y el destinatario de los formularios en Hostinger.

**Gobierno:** según AGENTS.md, compartir este staging con el cliente es decisión de la Product Lead o del Owner; nada se autoaprobó. Gate 2 sigue requiriendo aprobación explícita del cliente.

## Auditoría SEO + GEO del staging y backlog para la responsable de SEO (2026-10-09)

**Pedido (Owner):** revisión SEO exhaustiva del sitio en Hostinger (incluido wp-admin) y un backlog para Nayeliz (contenido y metadatos) con las tareas técnicas del Owner, considerando la optimización para LLMs (GEO). En alcance: la propuesta incluye "SEO + GEO + performance".

**Método:** solo lectura. Se revisaron las 5 páginas públicas más `hello-world` (título, descripción, robots, canonical, OG, JSON-LD, encabezados, imágenes, peso), robots.txt, sitemaps, llms.txt, `/en/`, páginas legales y el endpoint REST de usuarios. En wp-admin: plugins, módulos de Rank Math, ajustes de lectura, enlaces permanentes y el listado de páginas. **No se cambió nada en el sitio.**

**Hallazgos principales:**
1. El staging era indexable (`index, follow`). "Disuadir a los motores de búsqueda" seguía desmarcado, contra la elección del Owner en D148. Solo Googlebot estaba bloqueado, por el robots.txt de Hostinger.
2. Metadatos generados solos: descripciones de 14–26 caracteres, la de Inicio cortada, sin palabra clave foco.
3. Schema débil: "Person/Organization" sin dirección, logo ni redes, "Article" en todas las páginas, y el usuario administrador expuesto como autor y en `/wp-json/wp/v2/users`.
4. "Hello world!" publicado y presente en el sitemap.
5. Páginas legales en 404 aunque están enlazadas desde el banner de cookies y los formularios.
6. Polylang sin configurar (`/en/` 404, sin hreflang); sin blog ni llms.txt.
7. Rendimiento: ~830 KB de logos PNG, 3 imágenes temporales de 326 KB, `<img>` sin width/height ni carga diferida, Google Fonts externas, HTML sin caché.

**Entregable:** artifact privado "Backlog SEO y GEO AAA" (https://claude.ai/artifact/3SrEF25ZW4CPVYK2qYq8iE), con 37 tareas en 5 fases (T = Owner, N = Nayeliz) y fichas por página con el estado actual y keywords candidatas. *(Reemplazado por el Excel y la guía de D149.)*

**Decisiones planteadas para la reunión (abiertas):**
- ~~Confirmar "Ley 116" vs Ley 1116 con el cliente~~ **Resuelto (Oscar, 2026-10-15, D178): se usa "Ley 116" en el sitio y en toda la documentación.**
- Nombre oficial de la entidad vs "Agudelo Abogados Asociados".
- Dominio final; autoría del blog.
- Política de rastreadores de IA (búsqueda vs entrenamiento).
- Mecanismo de traducción al inglés; plugin de caché.
- Datos que faltan del cliente: horario, año de fundación, biografías.

## Fase 0 del backlog SEO aplicada al staging y separación en dos archivos (D149, 2026-10-09)

**Pedido (Owner):** "Ejecuta la Fase 0, y separemos en dos archivos, uno para las tareas (backlog, puede ser un excel) y otro para Nayelis".

**Aplicado en el staging de Hostinger (wp-admin, con la sesión de Chrome del Owner):**
- **T01 (hecha):** "Disuade a los motores de búsqueda" marcada e "Indexado instantáneo" (IndexNow) de Rank Math apagado. Verificado desde fuera: las 5 páginas responden `nofollow, noindex`.
- **T02 (hecha):**
  - "Hello world!" movida a la papelera; vaciarla la hace el Owner (Claude no borra de forma definitiva).
  - La categoría por defecto se renombró a "Análisis" (`/analisis/`).
  - `sitemap_index.xml` ya solo lista `page-sitemap.xml`.
  - El borrador "Privacy Policy" se conserva hasta T12.
- **T03 (hecha):**
  - El nombre público del administrador ahora es "AAA Estudio Legal" (apodo y nombre visible; no se tocaron usuario ni contraseña).
  - Rank Math pasó a modo Avanzado, necesario para desactivar los archivos de autor. `/author/lucker/` redirige 301 a Inicio y el schema de ninguna página menciona "Lucker".
  - Filtro `aaa_hide_users_endpoint` en `functions.php` (oculta `/wp-json/wp/v2/users` a visitantes sin sesión); pasa `php -l`. Al principio no se pudo subir: la sesión de hPanel había expirado y el control de permisos del agente bloqueó la edición desde el editor de temas de WordPress. Ver la actualización al final de esta entrada.
- **T20 (pendiente, Owner):** crear el usuario de Nayeliz con rol Editor. Claude no crea cuentas ni maneja contraseñas.

**Entregables:**
- `seo/Backlog-SEO-GEO-AAA.xlsx`. Generado sin dependencias (Node + zlib). Tiene 4 hojas:
  - Cómo usar.
  - Backlog: 37 tareas; la columna Estado es una lista desplegable con color; estados de la Fase 0 ya cargados.
  - Resumen: fórmulas COUNTIFS, verificadas abriendo el archivo en Excel.
  - Decisiones: 8 decisiones abiertas.
- Claude Doc "Guía SEO y GEO para Nayeliz · AAA Estudio Legal" (https://claude.ai/code/artifact/198f7607-78b0-4db0-b830-a57052c6d018). Contiene:
  - Contexto y reglas de trabajo.
  - El diagrama del flujo de trabajo.
  - El estado por página.
  - Una plantilla de metadatos con estado desplegable.
  - Sus tareas por fase.
  - Una guía de escritura para IA (GEO).
  - Las decisiones que la bloquean.
- El artifact "Backlog SEO y GEO AAA" de la sesión anterior queda reemplazado por estos dos archivos como referencia.

**Actualización de D149 (2026-10-09, pedido del Owner "sube el functions.php"):** la sesión de hPanel había expirado (pedía login), así que el filtro se subió con el editor de temas de wp-admin (Apariencia → Editor de archivos de temas), por instrucción explícita del Owner. La copia del servidor coincidía con la versión del commit (525 líneas) y solo se agregó el filtro D149 al final. WordPress confirmó "El archivo ha sido editado con éxito". Verificado desde fuera: `/wp-json/wp/v2/users` y `/users/1` responden 404 sin sesión; las 5 páginas y `/wp-json/wp/v2/pages` responden 200. El servidor y el repo tienen ahora el mismo `functions.php`. T03 quedó marcada como hecha en el Excel.

**Entrega en zip (2026-10-09):** `seo/SEO-AAA-Backlog-y-Guia-Nayeliz.zip`, con el Excel y la guía exportada a Word (`seo/Guia-SEO-GEO-Nayeliz-AAA.docx`).

## Backlog sin la Fase 0 y registro en español (D150, 2026-10-09)

**Pedido (Owner):** quitar del backlog las tareas de la Fase 0 "porque ya se ejecutaron o ya deberían estar ejecutadas", y responder en español.

**Aplicado:**
- Backlog regenerado sin T01, T02, T03 ni T20: quedan 33 tareas (Fases 1 a 4). La hoja Resumen ya no tiene fila de Fase 0, y "Cómo usar" indica que la Fase 0 se ejecutó el 9 de octubre.
- `seo/SEO-AAA-Backlog-y-Guia-Nayeliz.zip` regenerado con el Excel nuevo.
- El Excel suelto `seo/Backlog-SEO-GEO-AAA.xlsx` estaba abierto en el Excel del Owner; se reemplazó cuando el Owner lo cerró y ahora es idéntico al del zip.
- Las entradas D143 a D149 de este archivo, que se habían escrito en inglés por error, se pasaron al español sin cambiar su contenido.

**Pendiente (Owner):** crear el usuario de Nayeliz (antes T20) en Usuarios → Añadir nuevo, con rol Editor y aviso por correo para que ella defina su contraseña. Claude no crea cuentas.

**Ajuste de D150 (2026-10-09, pedido del Owner):** en el backlog, "Owner" se reemplaza por **Oscar** (el Owner, que ejecuta las tareas técnicas) en la columna Responsable, el Resumen, la hoja Decisiones y los textos de las tareas; las frases se ajustaron ("revisada por Oscar", "autorización de Oscar"). Verificado en Excel: Oscar 15 tareas, Nayeliz 16, compartidas 2, total 33. Excel y zip actualizados en `seo/`.

**Ajuste de D150 (2026-10-09, pedido del Owner):** también en la guía de Nayeliz (Claude Doc) "Owner" pasa a **Oscar** en las 17 menciones del texto, con las frases ajustadas ("revisión de Oscar", "lo confirma Oscar"), y en el diagrama del flujo (título, caja 3 y nombre accesible). Verificado: 0 menciones de "Owner" en el documento. Se exportó de nuevo a Word (`seo/Guia-SEO-GEO-Nayeliz-AAA.docx`) y se rearmó el zip.

## Fotos de banco y favicon nuevo en el staging (D151, 2026-10-09)

**Pedido (Owner):** aplicar en el WordPress en vivo (staging de Hostinger) los cambios de imágenes que el cliente autorizó en la reunión del 2026-10-02 (notas de Gemini, «Revisemos avances web AAA Estudio Legal - 2026_10_02») y el cambio del favicon.

**Autorizaciones del cliente (transcripción):**
- **Inicio, "¿Por qué confiar?" (6 fotos):** las fotos de oficina "no son coherentes porque no fueron pensadas para eso" (Francisco); "lo del home sí es para que saquemos de banco de imágenes". El cliente dirá después si le convence.
- **Metodología, tres áreas de práctica (3 fotos):** Julián pide imágenes de las tres líneas "que no sean imágenes nuestras"; Paola: "¿las imágenes entonces de banco?", Francisco: "así es".
- **Quiénes somos, Filosofía (1 foto):** Julián pide una imagen de banco que transmita filosofía, principios, "no una imagen de alguien".
- **Favicon:** el resumen final menciona "el tema del favicon súper claro". El Owner confirmó que el problema es que se ve demasiado claro (isotipo cobre sobre fondo transparente).

**Fotos (Unsplash, licencia gratuita; ninguna Unsplash+). Elegidas por el Owner (todas las propuestas A):**

| Espacio | Archivo | Foto Unsplash | Autor |
|---|---|---|---|
| Manejo de gran número de casos | aaa-confianza-casos.webp | snNHKZ-mGfE | Wesley Tingey |
| Equipo especializado | aaa-confianza-equipo.webp | BJqzjxwQhK8 | sarah b |
| Tecnología propia (ADY) | aaa-confianza-tecnologia.webp | hpjSkU2UYSU | Carlos Muza |
| Su información, protegida | aaa-confianza-seguridad.webp | FnA5pAzqhMM | Towfiqu barbhuiya |
| Cumplimiento normativo | aaa-confianza-cumplimiento.webp | yKnIbJV0RbY | Jakub Żerdzicki |
| Presencia en todo el país | aaa-confianza-presencia.webp | kMO9FvbJM7E (Medellín, Colombia) | Dimitry B |
| Derecho concursal | aaa-area-concursal.webp | 8wLZi9OhsWU | Jakub Żerdzicki |
| Normalización de activos | aaa-area-normalizacion.webp | AT77Q0Njnt0 | Isaac Smith |
| Línea corporativa y litigios | aaa-area-corporativa.webp | GWe0dlVD9e0 | Benjamin Child |
| Filosofía | aaa-filosofia.webp | KL6y557DX8w | Maik Winnecke |

**Aplicado en vivo:**
- Las 10 fotos (WebP de 1600 px; Presencia de 1200 px, para no pasar de ~200 KB) y el ícono se subieron a la Biblioteca de medios (IDs 124–134).
- Se actualizaron las páginas Inicio (#82), Metodología (#97) y Quiénes somos (#101) por la API REST con la sesión del Owner (cada cambio deja revisión en WordPress). Cada bloque de imagen ahora lleva el id del adjunto y el tamaño "large", así WordPress sirve srcset. Textos alternativos nuevos y descriptivos; las tarjetas de Metodología siguen con alt vacío a propósito (el título está al lado).
- **Favicon:** isotipo cobre sobre cuadro navy redondeado. Se configuró como Ícono del sitio (`site_icon` = 134, PNG de 512 px): WordPress publica 32 px, 192 px y apple-touch-icon, y el SVG del tema deja de imprimirse.
- Verificado en vivo: las 10 fotos cargan en las tres páginas y el ícono responde 200 en sus dos tamaños.

**Repo:** las fotos van a `assets/img/home/`, `metodologia/` y `nosotros/` con prefijo `aaa-`. Los patterns home-full, metodologia-full y quienes-somos-full apuntan a ellas (`php -l` sin errores). `brand/favicon.svg` es la versión navy y `brand/aaa-icono-sitio-512.png` queda guardado; documentado en WORDPRESS-SETUP.md. Las fotos anteriores se conservan por si el cliente pide volver a ellas.

**Nota:** las reglas de encuadre de `components.css` que apuntan a `[src*="confianza-seguridad"]` y `[src*="confianza-presencia"]` también aplican a los archivos nuevos; mueven el recorte apenas unos píxeles y no afectan.

**Pendientes de la misma reunión (no se aplicaron; dependen de insumos o de una decisión):**
- Fotos que manda el cliente: hero de Inicio (más zoom a las personas o una foto nueva, con el logo en la pared), banner rotativo con Julián, pasos de Metodología, imagen de "Expectativas claras", fondo del CTA (Julián con el equipo), fotos de equipo unidas (Jonathan) y Julián con el equipo en Trabaja con nosotros.
- Textos: "Nuestro enfoque" (no limitarlo al acreedor; lo envía el cliente), quitar "para acreedores" en Metodología ("Soluciones") y la frase "Representamos exclusivamente…" del bloque de áreas, cifra "+8.700 casos", descripciones de vacantes.
- Marca: logo en lugar de "AAA Estudio Legal" en "Sobre nosotros", isotipo donde se mencione "AAA", explorar el logo como cursor o detalle interactivo y la animación de la A desde el centro.
- Formularios: "Teléfono" pasa a "Celular" con 10 dígitos numéricos; en Contacto, selector "Persona natural / Empresa"; correos de destino (info@ para comercial, Angi para talento).
- "Mi caso" pasa a "Nuestra plataforma" con la URL de ADY; segmentación correcta de clientes por sector (la manda el cliente); páginas legales (las redacta el cliente).

## Ajuste de fotos de banco: Cumplimiento, Presencia y pasos de Metodología (D152, 2026-10-09)

**Pedido (Owner):** cambiar dos fotos de "¿Por qué confiar?" que no le gustaron (Cumplimiento normativo y Presencia en todo el país) y reemplazar las tres fotos de los pasos de Metodología (Diagnóstico, Estrategia, Representación) por fotos de banco más enfocadas en cada paso.

**Ojo con el cliente:** en la reunión del 2026-10-02 el cliente dijo que las fotos de los pasos las escogería de su propio material. El Owner decidió usar banco; conviene avisarle al cliente.

**Elección (Owner), Unsplash, licencia gratuita, ninguna Unsplash+:**

| Espacio | Archivo | Foto Unsplash | Autor |
|---|---|---|---|
| Cumplimiento normativo | aaa-confianza-cumplimiento-sello.webp | 7PMGUqYQpYc, recortada hacia el sello | Markus Spiske |
| Presencia en todo el país | aaa-confianza-presencia-bandera.webp | EBAqM8b7Mqc (Cartagena) | Christine Ellsay |
| 01 Diagnóstico | aaa-paso-diagnostico.webp | -LgSTma8GJs | Harshit Suryawanshi |
| 02 Estrategia | aaa-paso-estrategia.webp | 9iY3Sqr1UWY | Mesh |
| 03 Representación | aaa-paso-representacion.webp | NzIV4vOBA7s, recortada solo a las manos | Rock Staar |

**Revisión antes de publicar (se detectaron problemas que no se veían en las miniaturas):**
- Sello: la foto original muestra a la izquierda un libro con texto en alemán ("VermAnlG", "Gesetzes"). Se recortó hacia el sello; el texto restante sale desenfocado.
- Diagnóstico: la primera opción elegida (lupa sobre un rollo religioso en hebreo) no se publicó. El Owner eligió la alternativa B, lupa sobre un libro.
- Representación: la primera opción tenía una pistola sobre la mesa. El Owner eligió usarla recortada solo a las manos; la pistola no aparece en el encuadre.

**Aplicado en vivo (staging de Hostinger):**
- Subidas a la Biblioteca de medios: IDs 138, 139, 140, 143 y 144.
- Inicio (#82) y Metodología (#97) actualizadas por la API REST, con revisión nativa de WordPress.
- Pasos en 480×480 (tamaño "full"), alt vacío como antes porque son decorativos y el título va al lado. Tarjetas con alt descriptivo nuevo.
- Verificado: las 5 cargan; los círculos de los pasos y las tarjetas se ven bien.

**Repo:**
- Copias en `assets/img/home/` y `assets/img/metodologia/`.
- `home-full.php` y `metodologia-full.php` apuntan a ellas (`php -l` sin errores).
- WORDPRESS-SETUP.md tiene el origen y la licencia de cada foto.
- Se quitaron del repo las dos fotos de la primera ronda que el Owner descartó.
- En la Biblioteca de medios de Hostinger siguen los adjuntos 128 y 129 (Cumplimiento y Presencia de D151) sin uso; borrarlos queda a criterio del Owner.
- Las fotos de los pasos de D138 (`paso-*.webp`) se conservan por si el cliente prefiere volver a ellas.

## Estrategia, Representación y Filosofía: fotos definitivas (D153, 2026-10-09)

**Pedido (Owner):** cambiar la foto de ajedrez de Estrategia ("ellos dijeron que no era buena mostrar ajedrez"), buscar para Representación algo de "representación legal en un juzgado" y cambiar la imagen de Filosofía según lo que se dijo en la reunión del 2026-10-02.

**Fuente de la restricción:** en la transcripción del 2026-10-02 no se menciona el ajedrez. La exclusión viene del pedido del cliente en D138 (2026-09-30): reemplazar las fotos de la referencia (balanza, ajedrez y apretón de manos) "por otras más adecuadas para la firma". Por eso también se cambió el apretón de manos de Representación (D152).

**Elección (Owner), Unsplash, licencia gratuita, ninguna Unsplash+:**

| Espacio | Archivo | Origen |
|---|---|---|
| 02 Estrategia | aaa-paso-estrategia-equipo.webp (480×480) | 6jAq8MkbULo, Sebastian Herrmann: equipo de abogados de traje revisando documentos |
| 03 Representación | aaa-paso-representacion-tribunal.webp (480×480) | P5YN73KrUAA, Saúl Bucio: abogado de traje frente a un tribunal. Recortada hacia la derecha para centrar al abogado, porque el recorte centrado dejaba protagonista a una jueza con gesto de aburrimiento |
| Filosofía | aaa-filosofia-biblioteca.webp (1108×738, 70 KB) | composición: biblioteca A32Uo8lf-JE (Jonathan Gong) + velo navy al 62% + isotipo cobre centrado con sombra suave |

**Filosofía, criterio:** en la reunión Julián pidió una imagen que transmita "principios, una dogmática", sin personas ("la filosofía trasciende a las personas"), y "conjugar esa imagen con el logo". Se mostraron tres composiciones con el isotipo (mármol, biblioteca con velo navy, luz y sombra) y el Owner eligió la biblioteca. La composición se hizo en el navegador (canvas) con el isotipo del tema y se subió directo a la Biblioteca de medios. Francisco dijo en la reunión que buscarían un referente; si lo mandan, esta imagen se reemplaza.

**Aplicado en vivo:**
- Biblioteca de medios: IDs 146 (Estrategia), 147 (Representación) y 149 (Filosofía).
- Metodología (#97) y Quiénes somos (#101) actualizadas por la API REST, con revisión nativa.
- Verificado: las tres cargan y se ven bien.
- Sin usar en la Biblioteca: 140 (ajedrez), 144 (apretón de manos), 133 (columna) y 128/129 de D151; borrarlos queda a criterio del Owner.

**Repo:**
- Copias en `assets/img/metodologia/` y `assets/img/nosotros/`.
- Los patterns `metodologia-full` y `quienes-somos-full` apuntan a ellas (`php -l` sin errores).
- WORDPRESS-SETUP.md tiene el origen de cada foto.
- Se quitaron del repo las fotos descartadas: ajedrez, apretón de manos y columna.

## Metodología sin "para acreedores" y campo "Celular" en los formularios (D154, 2026-10-09)

**Pedido (Owner):** "quita para acreedores en Metodología y cambia Teléfono por Celular". Los dos puntos salieron de la reunión con el cliente del 2026-10-02:
- Julián: "Soluciones, sí, pero no para acreedores", y quitar "para acreedores" del título de áreas.
- Francisco y Luisa: "pongamos celular", con condición de 10 números.

**Aplicado en vivo (staging de Hostinger):**
- **Metodología (#97):** la etiqueta del banner pasa de "Soluciones para acreedores" a "Soluciones", y la del bloque de áreas de "Representación especializada para acreedores" a "Representación especializada". Se cambió por la API REST, con revisión nativa. Ya no queda "para acreedores" en la página.
- **Formularios (Contact Form 7):**
  - Postulación (#106): "Teléfono" pasa a "Celular". Contacto B2B (#115): "Teléfono de contacto" pasa a "Celular de contacto".
  - El campo ahora exige 10 caracteres (`minlength:10 maxlength:10`). CF7 ya rechaza letras en campos de tipo teléfono, así que en la práctica pide 10 dígitos.
  - Mensaje de error nuevo: "Ingrese un número de celular válido de 10 dígitos."
  - El correo que llega dice "Celular: [telefono]". El nombre interno del campo (`telefono`) no cambia, así que la plantilla del correo sigue funcionando.
  - Se guardó por la API de CF7 con `context: save`; el primer intento sin ese parámetro no persistió.
  - Se verificó que la casilla de autorización de datos, `acceptance_as_validation` y el destinatario quedaron intactos.
- **Verificado desde fuera:** "Celular" y "Celular de contacto" con `minlength=10 maxlength=10` en Trabaja con nosotros y en Contacto.

**Aviso de CF7 (ya existía):** "La dirección de correo electrónico del remitente no pertenece al dominio del sitio". Puede mandar los correos a spam. Se resuelve junto con el SMTP y los correos de destino que debe definir el cliente.

**Repo:** `patterns/metodologia-full.php` con las dos etiquetas nuevas; WORDPRESS-SETUP.md con las plantillas de CF7 actualizadas.

**Sigue pendiente de la reunión:** quitar la frase "Representamos exclusivamente los intereses del acreedor." del párrafo de áreas de Metodología (Julián: "le quitaría... representamos exclusivamente, no lo metamos"). No se tocó porque no se pidió en este mensaje.

## Pendientes de la reunión aplicados: cifras, Metodología, selector en Contacto, "Nuestra plataforma" y logo en "Sobre nosotros" (D155, 2026-10-09)

**Contexto:** el Owner pidió revisar los pendientes de la reunión del 2026-10-02 (notas de Gemini) y eligió aplicar ya tres grupos:
- Cifras y frase de Metodología.
- Selector en Contacto.
- "Nuestra plataforma" y logo en "Sobre nosotros".

El bloque de videos sigue visible; no se eligió ocultarlo.

**Aplicado en vivo (staging de Hostinger):**
- **Cifras (Inicio #82):** "8754" pasa a "+8.700" y "30" a "+30", como pidió Francisco ("más de 8.700 casos, más de 30 clientes", igual que "+10 mil millones").
  - `functions.php`: el conteo ahora termina en 8700 con prefijo "+" (y en 30 con "+").
  - `assets/js/home-motion.js`: el número animado lleva separador de miles con punto (8.700).
  - El HTML sin JavaScript también dice "+8.700" y "+30".
- **Metodología (#97):** se quitó "Representamos exclusivamente los intereses del acreedor." del párrafo de áreas (pedido de Julián).
- **Contacto, formulario CF7 #115:**
  - Nuevo campo obligatorio "Persona natural o empresa" (lista desplegable, en ese orden), pedido en la reunión para que las personas naturales no sientan que el formulario es solo para empresas.
  - "Empresa u organización" pasa a "Empresa (si aplica)" y "Cargo" a "Cargo (si aplica)", ambos opcionales. "Correo corporativo" pasa a "Correo electrónico".
  - El correo incluye "Persona natural o empresa: [tipo-cliente]". El asunto pasa a "Nueva solicitud de contacto ([tipo-cliente]): [nombre]" para no quedar con un hueco cuando no hay empresa.
  - Se verificó que la autorización de datos y `acceptance_as_validation` quedaron intactos.
- **Header (`parts/header.html`):** "Mi caso →" pasa a "Nuestra plataforma →" (Julián: "Nuestra plataforma. Ya, punto."). El enlace sigue provisional (`#mi-caso`) hasta que llegue la URL de ADY.
  - Medido: botón de 197×48 en una línea; desde 1280px queda a más de 150px del menú; por debajo el menú es hamburguesa; en móvil sigue el ícono de 40px.
- **Quiénes somos (#101):** en "Sobre nosotros: AAA Estudio Legal" el nombre se reemplazó por el logo horizontal claro (isotipo cobre + "Estudio Legal"), a 1.4em de alto y centrado con el texto (193×67px a 1280).
  - Para lectores de pantalla y buscadores el H1 sigue diciendo "Sobre nosotros: AAA Estudio Legal" (texto alternativo del logo).
- Las ediciones de archivos del tema se hicieron con el editor de temas de wp-admin (respuesta "El archivo ha sido editado con éxito"). Las de páginas y del formulario, por la API REST con revisión nativa.

**Verificado desde fuera:**
- Botón "Nuestra plataforma →".
- Cifras con `data-count-to="8700" data-count-prefix="+"` y texto "+8.700" / "+30".
- `home-motion.js` nuevo publicado.
- Contacto con sus 6 campos y las opciones "Persona natural" / "Empresa".
- Metodología sin la frase.
- No se pudo ver la animación de las cifras terminar porque la pestaña de Chrome estaba en segundo plano y el navegador pausa la animación. Se verificó la función de formato aparte (8700 → "8.700").

**Repo:**
- `functions.php`, `assets/js/home-motion.js` y `parts/header.html` quedaron idénticos a los del servidor (comparados).
- Patterns `home-full`, `metodologia-full` y `quienes-somos-full` actualizados (`php -l` y `node --check` sin errores).
- WORDPRESS-SETUP.md con la plantilla nueva del formulario de Contacto y la nota de "Nuestra plataforma".

**Sugerencia, no aplicada:** el título de Contacto dice "Cuéntenos el contexto de su organización…". Con el selector nuevo podría ajustarse para incluir a personas naturales; es copy aprobado y lo decide el cliente.

**Siguen pendientes de la reunión:**
- **Lo podemos hacer nosotros:** isotipo en lugar de "AAA" en los textos, ocultar el bloque de videos, acercar la foto del banner de Inicio, explorar el logo interactivo y la animación de la "A".
- **Dependen del cliente:** textos (banner, "Nuestro enfoque", vacantes, áreas); fotos (banner rotativo, CTA, equipos, "Expectativas claras", Trabaja con nosotros); segmentación de sectores; URL de ADY; correos de destino; accesos al hosting; páginas legales.

## Isotipo en lugar de "AAA" en los textos y revisión responsive (D156, 2026-10-09)

**Pedido (Owner):** "Isotipo en lugar de 'AAA' en los textos" y revisar el responsive "por si algo se rompe". Origen: reunión del 2026-10-02. Julián: "cada vez que en la página se hable de triple A, pongan el logo… el isotipo". Óscar respondió que había que modificar el bloque.

**Solución:** un filtro al mostrar la página, para no tener que editar cada texto ni romper la edición del cliente.
- `functions.php`, `aaa_isotype_in_text()` sobre `render_block` (prioridad 30), en párrafos, títulos, ítems de lista y bloques HTML. Cambia cada "AAA" (palabra completa) por `<span class="aaa-isotype"><span class="aaa-isotype__text">AAA</span></span>`.
  - Solo toca texto entre etiquetas, nunca atributos: `alt` y `aria-label` siguen con "AAA".
  - No entra en bloques con formularios de CF7: la autorización de datos conserva "Agudelo Abogados Asociados SAS — AAA Estudio Legal" literal.
  - No entra en bloques con scripts.
  - En el editor el texto sigue diciendo "AAA".
- `components.css`, bloque D156: `.aaa-isotype` dibuja el isotipo con máscara CSS (`../img/brand/isotipo.svg`) en el color del texto que lo rodea, a 1.35×0.85em, apoyado en la línea de texto. `.aaa-isotype__text` deja "AAA" oculto a la vista, para lectores de pantalla y buscadores.
- Probado con PHP en 7 casos: párrafo, título, footer HTML con `aria-label`, énfasis, formulario CF7, script e imagen. Solo cambian los que corresponden; "AAAA" no se toca.

**Dónde aparece ahora:**
- Quiénes somos: "En [isotipo] Estudio Legal hemos conformado…", título de Filosofía "[isotipo] Estudio Legal" y "En [isotipo] Estudio Legal actuamos…".
- Trabaja con nosotros: "Talento [isotipo]", "En [isotipo] creemos…", "Haz parte de [isotipo]…" y "ser parte de [isotipo]."
- Footer de todas las páginas: LinkedIn "[isotipo] Estudio Legal" y "© 2026 Agudelo Abogados Asociados SAS — [isotipo] Estudio Legal."
- Conteo verificado en vivo: Inicio 2, Quiénes somos 5, Trabaja con nosotros 6, Contacto 2.

**Subido al servidor** con el editor de temas de wp-admin ("El archivo ha sido editado con éxito"). `components.css` del servidor es idéntico al del repo (comparado). En `functions.php` se verificaron la función, la expresión regular, la marca y el filtro, una sola vez.

**Revisión responsive (en vivo, sin barra de administración):**
- **Desplazamiento lateral:** ninguno en Inicio, Metodología, Quiénes somos, Trabaja con nosotros ni Contacto, a 360, 390, 430, 768, 1024 y 1440px. Se probó forzando el desplazamiento horizontal. El primer barrido marcaba 8px en todas las páginas, pero era la barra de desplazamiento del marco de prueba y la barra de administración, no un error.
- **Visual a 360px:** encabezado con el ícono de "Nuestra plataforma"; H1 de Quiénes somos con el logo en una segunda línea, centrado; isotipos en Trabaja con nosotros, Filosofía y footer; formulario de Contacto con el selector y las etiquetas "(si aplica)"; cifras "+8.700" y "+30".
- **Visual a 768px:** botón "Nuestra plataforma →" con menú hamburguesa, sin choques; isotipo en cobre dentro de "ser parte de [isotipo]."
- **Visual a 1440px:** encabezado completo y copyright con isotipo.
- **Animación de cifras en pestaña visible:** termina en "+8.700 / +30 / +10 mil millones".
- No se encontró nada roto.

**Repo:** `functions.php` y `components.css` con el bloque D156 (`php -l` sin errores, llaves CSS balanceadas). WORDPRESS-SETUP.md con una nota para quien edite el sitio.

## Logo completo en los títulos y nombre escrito en los párrafos (D157, 2026-10-09; reemplaza D156)

**Pedido (Oscar, con captura de Trabaja con nosotros):** el isotipo suelto dentro de los párrafos ("En [isotipo] creemos…", "Haz parte de [isotipo]…") "se ve extraño". En los títulos debe ir el logo completo (isotipo + "Estudio Legal"), como el del sitio. En los párrafos se deja el nombre de la firma escrito, "AAA Estudio Legal".

**Aplicado:**
- **`functions.php`:** `aaa_isotype_in_text` (D156) se reemplaza por `aaa_logo_in_headings`.
  - Solo actúa en títulos (`core/heading`). Cambia "AAA" o "AAA Estudio Legal" por `<span class="aaa-logo-inline">` con "AAA Estudio Legal" oculto dentro, para lectores de pantalla y buscadores.
  - Párrafos, listas, footer y formularios ya no se tocan.
- **`components.css`:** el bloque D156 se reemplaza por D157, `.aaa-logo-inline`, armado sobre el logo del sitio sin crear un archivo de marca nuevo:
  - "Estudio Legal": la silueta de `logo-horizontal-claro.svg` como máscara, recortada desde el 52% del ancho, en el color del título (navy sobre claro, blanco sobre navy, cobre dentro de un énfasis).
  - Isotipo: `isotipo.svg` en cobre de marca, encima de su posición exacta en el logo (49,7% × 89,7%, medido sobre el SVG).
  - Tamaño: 1.4em de alto, igual que el logo de "Sobre nosotros".
- **Trabaja con nosotros (#104 y pattern):** "En AAA creemos…" pasa a "En AAA Estudio Legal creemos…" y "Haz parte de AAA y…" a "Haz parte de AAA Estudio Legal y…".
- **Probado con PHP:**
  - El título "AAA Estudio Legal" y "ser parte de AAA." dentro de un énfasis se convierten en el logo.
  - El H1 con imagen, los párrafos y el footer quedan iguales.

**Dónde queda el logo:** título de Filosofía (Quiénes somos) y "Conozca lo que significa ser parte de [logo]." (Trabaja con nosotros). Ya estaba también en "Sobre nosotros: [logo]" (D155, como imagen).

**Texto escrito:**
- "En AAA Estudio Legal hemos conformado…" y "En AAA Estudio Legal actuamos…" (Quiénes somos).
- Las dos frases de Trabaja con nosotros.
- Footer (LinkedIn y copyright).
- "Talento AAA" queda como estaba (etiqueta pequeña, sin isotipo).

**Subido al servidor** con el editor de temas ("El archivo ha sido editado con éxito"). `components.css` del servidor es idéntico al del repo (comparado). En `functions.php` se verificó que está la función nueva con su expresión regular y que no queda la anterior.

**Verificado en vivo:**
- Un logo en Quiénes somos y uno en Trabaja con nosotros; cero restos de `aaa-isotype`.
- Párrafos y footer con "AAA Estudio Legal" escrito.
- Visual a 390, 700 y 760px: el logo se ve igual que el del encabezado.
- Sin desplazamiento lateral a 360, 390, 768, 1024 y 1440px. Logo de 124×43px en móvil y 169×59px desde 768px, siempre dentro de la pantalla.

**Repo:** `functions.php`, `components.css` y `patterns/trabaja-con-nosotros-full.php` (`php -l` sin errores, llaves CSS balanceadas). WORDPRESS-SETUP.md con la nota actualizada.

## Trabaja con nosotros: logo del título más chico y sin punto final (D158, 2026-10-09)

**Pedido (Oscar, con captura):** "bájale un poquito al tamaño de este logo y quítale ese punto al final", sobre el logo de "Conozca lo que significa ser parte de [logo]".

**Aplicado:**
- **`components.css`:** nueva regla `.aaa-text-emphasis .aaa-logo-inline` con 1.15em de alto (antes 1.4em) y `vertical-align: -0.24em`. Solo afecta al logo que va dentro de un énfasis en cursiva; el de Filosofía y el de "Sobre nosotros" no cambian.
- **Trabaja con nosotros (#104 y pattern):** "ser parte de AAA." pasa a "ser parte de AAA"; el título ya no termina en punto.
- Subido con el editor de temas. `components.css` del servidor es idéntico al del repo (comparado).

**Verificado en vivo:** el logo pasa de 169×59 a 138×48px en escritorio (1100px) y mide 102×36px en móvil (390px). El título termina en el logo, sin punto.

## Checkpoint antes de los cambios definitivos (2026-10-13)

**Pedido (Oscar):** crear un checkpoint antes de los cambios definitivos.

**Aplicado:** commit en `main` con D145–D158 (staging en Hostinger, backlog y guía SEO/GEO en `seo/`, fotos de banco, favicon, cifras, selector de Contacto, "Nuestra plataforma" y logo en títulos) y tag anotado `checkpoint-staging-2026-10-13` sobre ese commit. Reemplaza a `checkpoint-wordpress-2026-10-01` como punto de control vigente.

**Estado:** el repo coincide con el staging en vivo (https://papayawhip-chicken-297614.hostingersite.com). Commit y tag quedan solo en local: no se hizo push (`main` está conectada a Cloudflare Pages y ya iba un commit por delante de `origin/main`), queda a decisión de Oscar.

## Textos definitivos del cliente, Bloque 1 (D159, 2026-10-13)

**Fuente:** documento del cliente "Sitio web AAA Estudio Legal — Textos e instrucciones para el desarrollo" (12-oct-2026). Oscar aprobó el Bloque 1 (textos) con el enlace de ADY, ocultar Casos de éxito completo, cifras visibles sin resaltado y el isotipo provisional en títulos.

**Aplicado en vivo (páginas por REST, con revisión) y en los patterns del repo:**
- **Inicio (#82):**
  - Portada con titular y subtítulo nuevos.
  - Nuestro enfoque: título y dos párrafos; sale "No representamos al deudor".
  - Áreas de práctica: "Tres áreas que se alimentan entre sí." y las tres tarjetas con nombre, frase y viñetas nuevas.
  - ¿Por qué confiar?: título y seis tarjetas nuevas.
  - Organizaciones: título y texto nuevos, sin la etiqueta "Empresas que ya confiaron".
  - Casos de éxito oculto con la visibilidad nativa de bloques (`metadata.blockVisibility:false`, WordPress 7.1). Sigue en el editor para mostrarlo cuando haya videos y no publica los textos de relleno.
  - En cifras: línea "Cifras en verificación por el área de Operaciones." Las cifras siguen visibles, sin resaltado.
  - Cierre: título, texto y botón "Solicitar el estudio de su caso".
- **Metodología (#97):** título de portada, "Primero estudiamos, después decidimos." y los tres pasos; Áreas de práctica en detalle, con la nota "En el sector financiero, normalización de activos."; Transparencia y cierre.
- **Quiénes somos (#101):**
  - Portada: "Sobre nosotros" / "Una firma con una causa: el crédito.".
  - Origen: queda un solo párrafo nuevo, sin el título "Origen y especialización", con la misma foto.
  - Equipo: cuatro equipos, se suma el de negociaciones con un panel navy en lugar de foto.
  - Filosofía en dos párrafos, y el cierre.
- **Encabezado (`parts/header.html`):** "Nuestra plataforma" apunta a https://adyapp.agudeloabogados.com/login. El texto del botón no cambia.
- **CSS (`components.css`):**
  - Bloque D159: nota de cifras, etiqueta de las áreas de Metodología en cursiva (ahora son oraciones), nota del área y grilla de cuatro equipos en damero. Entre 901 y 1100px se reduce el relleno y la letra del reverso para que no se corte.
  - D157 → D159: los títulos con "AAA" muestran solo el isotipo de las tres A (`isotipo.svg`, provisional hasta el archivo oficial del diseñador).
- **`functions.php`:** solo se actualizó el comentario de `aaa_logo_in_headings`.
- Los tres archivos se subieron con el editor de temas y son idénticos al repo.

**Verificado en vivo:**
- Textos presentes; Casos de éxito y "Texto pendiente" ausentes del HTML; enlace de ADY en el encabezado.
- Sin desplazamiento lateral a 360–1440px en Inicio, Metodología, Quiénes somos y Trabaja con nosotros. Los 8px a 390px en Inicio son la barra de desplazamiento del iframe de prueba: con la barra oculta, como en un teléfono, da 0.
- Reverso de las cuatro tarjetas de equipo sin cortes a 901, 1024 y 1440px.

**Notas:**
- **Ediciones de Nayeliz (administradora) del 13-oct:** cambió la etiqueta de la portada de Metodología a "Soluciones JURÍDICAs" (09:23–09:42) y guardó datos de SEO de las tres páginas (10:38–10:40). Se conservaron sin cambios.
- **Patterns del servidor:** siguen como en el despliegue D148. El sitio muestra el contenido de las páginas, no los patterns.

**Pendiente de terceros (no se publica):**
- Foto AAA1313 para la portada; la foto actual, de la oficina con diademas, no debe ir ahí.
- Ubicación de la foto AAA1379.
- Gestión Humana: fotos de equipos con autorizaciones, vacantes y formulario.
- Anyelin: lista de logos por sector, GNB Sudameris, política de privacidad y aviso legal.
- Operaciones: cifras.
- Julián: texto del botón principal y de ADY, videos, WhatsApp y correos.
- Archivo oficial del logo de tres A.
- Página de Contacto.

## Correcciones de Nayeliz y Bloque 2 de imágenes (D160, 2026-10-13)

**Pedido (Oscar):** arrancar el Bloque 2 (imágenes del documento del cliente), corregir "Soluciones JURÍDICAs" y el título SEO "¡protegemos activos empresariales!".

**Aplicado:**
- **Metodología (#97):** etiqueta de portada "Soluciones jurídicas", en la página y en el pattern.
- **Quiénes somos (#101), título SEO (Rank Math, `/rankmath/v1/updateMeta`):** "Somos AAA Estudio Legal: ¡protegemos el crédito!", en vez de "activos empresariales". Verificado en `<title>` y `og:title`.
- **¿Por qué confiar? (Inicio #82 y pattern):** tres fotos de Unsplash elegidas por Oscar entre opciones revisadas en grande (sin rostros ni texto legible), con la guía del documento. Subidas a la Biblioteca de medios, con el crédito en la leyenda, y al tema en `assets/img/home/`:

| Tarjeta | Archivo | Medio | Fuente |
|---|---|---|---|
| Seguimiento en tiempo real (antes: tablero con cifras legibles) | `aaa-confianza-tiempo-real.webp` | 176 | Thomas Lefebvre, Unsplash `gp8BLyaTaA0` |
| Su información, protegida (antes: candado) | `aaa-confianza-sello-lacre.webp` | 177 | mk. s, Unsplash `KGDVTn9lYDE` |
| Cumplimiento normativo (antes: sello sobre texto en alemán) | `aaa-confianza-reloj-arena.webp` | 178 | Nathan Dumlao, Unsplash `LPRrEJU2GbQ`, recortada sin las flores (`rect=1949,1150,4771,3181`) |

- **Presencia en todo el país:** Oscar eligió la bandera en primer plano (`aaa-confianza-presencia-bandera-tela.webp`, medio 181, engin akyurt, Unsplash `tnlUkY7aXv0`; 1024×683 para que pese 190 KB). Reemplaza la vista de Cartagena desde lo alto; el documento pide evitar vistas aéreas.
- Se conservan "Volumen con estructura" y "Equipo especializado", que cumplen la guía.
- **Nuestro enfoque:**
  - Vuelve a llevar foto, en dos columnas como eligió Oscar: `aaa-enfoque-documento.webp` (medio 180, Guille B, Unsplash `xYnominUM0I`, mano señalando un documento). Reemplaza la foto de la abogada al teléfono, que mostraba el rostro.
  - **CSS:** el bloque D127 queda solo para la variante sin foto. El nuevo bloque D160 deja la foto en 3:2, centrada en altura y sangrando a la derecha; en ≤640px va debajo del texto.
  - El pattern pasa a la grilla de dos columnas, igual que la página.
  - Sin desplazamiento lateral a 360–1440px.

**Pendiente:**
- **Descripciones SEO de Nayeliz con "empresa(s)":** Inicio, Metodología y Quiénes somos.

## Descripciones SEO sin "empresa" y logo de GNB Sudameris (D161, 2026-10-13)

**Pedido (Oscar):** corregir las descripciones SEO que dicen "empresa(s)" y agregar el logo de GNB Sudameris, como pide el documento del cliente.

**Descripciones SEO (Rank Math, `rank_math_description`).** Las vistas previas para redes (`og:description` y `twitter:description`) toman el mismo texto:

| Página | Antes | Ahora |
|---|---|---|
| Inicio (#82) | "…acreedores y empresas con soluciones legales…" | "En AAA Estudio Legal protegemos los intereses de acreedores y organizaciones con soluciones legales en asuntos concursales y corporativos. Asesórese hoy." (153 caracteres) |
| Metodología (#97) | "…defensa concursal, normalización de activos y litigios corporativos… protegiendo a su empresa." (161) | "Estrategias jurídicas en insolvencia, recuperación de cartera y litigios corporativos, anticipando riesgos y protegiendo a su organización." (139). También pasa a los términos nuevos del sitio. |
| Quiénes somos (#101) | "…proteger los derechos de su empresa…" | "…proteger los derechos de su organización. Conozca más aquí." (146) |

- Trabaja con nosotros y Contacto no usaban "empresa".
- Las palabras clave de Metodología todavía incluyen "normalización de activos"; queda a criterio de Nayeliz.

**GNB Sudameris:**
- **Archivo:** `gnb_logo.png` del sitio oficial (gnbsudameris.com.co, 281×62, fondo transparente). Es la versión más grande que publican; no hay SVG ni versión en Wikimedia.
- **Descarga:** el servidor del banco bloquea las descargas que no vienen de un navegador, así que se bajó desde Chrome.
- **Publicación:** subido a la Biblioteca de medios como `logo-gnb-sudameris.png` (medio 183) y agregado junto a BBVA en la tarjeta "Financiero y Fintech" del Inicio (página y pattern), en sus colores originales.
- **Sin cambios:** según el documento, no se agregan ni retiran otros logos hasta que Anyelin confirme la lista y los sectores.
- **Resolución:** al ser un PNG pequeño, puede verse un poco suave en pantallas de alta densidad. Si el cliente consigue el logo vectorial del banco, se reemplaza el archivo.

## ¿Por qué confiar?: segunda fila alineada al sitio de la firma (D162, 2026-10-13)

**Pedido (Oscar, con captura):** las fotos de "Su información, protegida", "Cumplimiento normativo" y "Presencia en todo el país" (D160) no seguían los lineamientos. Revisar agudeloabogados.com y reemplazarlas.

**Lectura del sitio actual de la firma:**
- Sus fondos (`fondo-uno` a `fondo-cuatro`) son escenas de despacho (carpetas sobre escritorio, mazo sobre madera) lavadas en un velo de color de marca: bronce y arena, navy u hueso.
- Las fotos son de bajo contraste, claras y suaves, sin negros profundos ni colores saturados.
- Los fundadores van sobre fondo hueso con el isotipo de marca de agua.
- **Por qué no encajaban las de D160:** el reloj de arena tenía fondo negro, la bandera colores primarios saturados, y el sobre madera oscura con lacre naranja.

**Aplicado (elección de Oscar entre una simulación con la primera fila real; cada foto toma un color de la marca):**

| Tarjeta | Archivo | Medio | Fuente |
|---|---|---|---|
| Su información, protegida | `aaa-confianza-carpetas-manila.webp` | 185 | George Diama, Unsplash `hwQuHrv6p8c` (bronce) |
| Cumplimiento normativo | `aaa-confianza-lomos-carpetas.webp` | 186 | Robert Koorenny, Unsplash `jUnTd0qYy8E` (navy y hueso) |
| Presencia en todo el país | `aaa-confianza-colinas-meta.webp` | 187 | Felipe, Unsplash `UpJj3u1T-R8`, Villavicencio, Meta (velo cálido; 1280×853, 145 KB) |

- **Revisión:** las tres se revisaron en grande; no tienen rostros ni texto legible (la escritura de las pestañas manila está desenfocada), y no hay vistas aéreas.
- **Dónde quedó:** Inicio #82 y el pattern; WORDPRESS-SETUP.md actualizado.
- **Sin uso en la Biblioteca:** los medios 177, 178 y 181 de D160. Borrarlos es decisión de Oscar.

## Nuestro enfoque: la foto ya no salta al hacer scroll (D163, 2026-10-13)

**Pedido (Oscar):** la imagen de "Nuestro enfoque" (D160) daba un pequeño salto al hacer scroll hacia abajo.

**Causa:**
- La foto recibe la deriva de GSAP (`addMediaDrift` en `home-motion.js`): `yPercent` ±1.2 y `scale` 1.025→1.045 con `scrub` de 1.05s.
- Desde D160 el `<img>` medía 776px de ancho, más que su columna (576px a 1536px), por el sangrado heredado del diseño previo a D127, y nada lo recortaba arriba ni abajo.
- Al escalar y desplazarse se movían los bordes del propio marco respecto al texto, y seguían moviéndose un segundo después de soltar el scroll.

**Aplicado (`components.css`, bloque D160):**
- El `figure` pasa a ser un marco fijo 3:2 con `overflow: hidden`, del ancho de la columna.
- El `<img>` lo llena con `object-fit: cover`, así que la deriva solo mueve la escena dentro del marco (parallax sutil, sin saltos).
- La foto queda alineada a la columna, sin sangrado.

**Verificado en vivo:**
- La distancia marco–texto se mantiene constante (198px) de 0 a 900px de scroll, mientras la escena se desplaza por dentro.
- Marco de 576×384 a 1440px, 456×304 a 1024px y 329×220 a 768px. A 390px va debajo del texto, sin deriva.
- Sin desplazamiento lateral. El CSS del servidor es idéntico al del repo.

## ¿Por qué confiar?: segunda fila con enfoque actual y tecnológico (D164, 2026-10-13)

**Pedido (Oscar, con captura):** las fotos de D162 no le gustaron. Pidió un enfoque más actual y tecnológico, más alusivo a cada título y basado en la descripción del documento del cliente. Para Presencia pidió algo relacionado con la bandera de Colombia.

**Criterio:**
- Cada foto ilustra el texto de su tarjeta y respeta la guía del documento: plano cerrado, sin rostros ni texto legible, sin la interfaz de ADY, sin candados, escudos, engranajes, listas genéricas, mapas con puntos luminosos ni vistas aéreas.
- **Descartadas:**
  - interfaces de Google Analytics con cifras legibles;
  - gráficos de bolsa;
  - fotos de servidores con marcas visibles;
  - candados e íconos de nube con candado;
  - videollamadas con rostros;
  - banderas sobre multitudes;
  - una foto marcada (`flagged`) en Unsplash.

| Tarjeta | Archivo | Medio | Fuente |
|---|---|---|---|
| Su información, protegida ("reserva profesional") | `aaa-confianza-huella-digital.webp` | 189 | George Prentzas, Unsplash `SRFG7iwktDk`: huella en un lector biométrico, azul marino |
| Cumplimiento normativo ("controles internos, reportería") | `aaa-confianza-reportes-pantalla.webp` | 190 | Lukas Blazek, Unsplash `mcSDtbWXUZU`: portátil con reportes; a tamaño de tarjeta no se lee ninguna cifra |
| Presencia en todo el país (bandera) | `aaa-confianza-bandera-capitolio.webp` | 191 | Brian Kyed, Unsplash `6o3KrwENlUc`: bandera sobre el Capitolio Nacional, Bogotá. En la original la bandera toca el borde superior, así que se descargó ya en 5:3 anclada arriba (`rect=0,0,5760,3456`, 1280×768) para que la tarjeta no la recorte. |

- **Elección:** Oscar eligió entre dos simulaciones con la primera fila real.
- **Dónde quedó:** Inicio #82, el pattern y WORDPRESS-SETUP.md.
- **Verificado en vivo:** la tarjeta conserva 5:3 a 390, 768 y 1440px, así que la bandera se ve completa en todos los anchos.
- **Sin uso en la Biblioteca:** los medios 185, 186 y 187 de D162.

## Presencia en todo el país: Capitolio con la estatua de Bolívar (D165, 2026-10-13)

**Pedido (Oscar):** usar la opción del Capitolio con la estatua de Bolívar en vez de la bandera sola sobre la fachada (D164).

**Aplicado:**
- `aaa-confianza-capitolio-bolivar.webp` (medio 193; Jhonny Estrada, Unsplash `6HAzIKfCcaw`). La original es 4:3; se descargó en 5:3 anclada arriba (`crop=top`, 1280×768, 112 KB) para que la bandera quede completa y con aire. Solo se pierde abajo la franja de columnas.
- Alt: "Estatua de Simón Bolívar frente al Capitolio Nacional, con la bandera de Colombia, en Bogotá".
- Actualizado en Inicio #82, el pattern y WORDPRESS-SETUP.md. Verificado en vivo.
- El medio 191 (bandera sobre la fachada) queda sin uso.

## Logo de GNB más pequeño (D166) e isotipo en "Sobre nosotros" (D167), 2026-10-13

**D166, pedido de Oscar:** el logo de GNB Sudameris se veía grande frente a los demás de "Organizaciones que confían en nosotros". Es muy ancho (281×62) y tomaba la escala por defecto (1.55). Nueva regla en `components.css`: `--sector-logo-scale: 1.1` solo para ese logo. Probado en vivo; ahora queda del ancho de BBVA.

**D167, pedido de Oscar (con captura):** en Quiénes somos, el párrafo de "Sobre nosotros" se veía solo a la izquierda de la foto de los fundadores.
- Se agrega el isotipo cobre de marca encima del texto, como `::before` de `.origin-block__copy` (decorativo, sin cambiar el contenido de la página #101).
- Mide 84px de ancho a 390px y 128px desde ~1420px, con espacio inferior `spacing--8`.
- Verificado: sin desplazamiento lateral a 390 y 1440px.
- `components.css` subido con el editor de temas; idéntico al repo.

## Bordes redondeados en todas las fotos de bloque (D168, 2026-10-13)

**Pedido (Oscar):** que toda imagen dentro de un bloque o sección tenga el borde redondeado, con el radio de "¿Por qué confiar?" como referencia (8px, `radius--md`).

**Revisión:** barrido de todas las `<img>` de Inicio, Metodología, Quiénes somos y Trabaja con nosotros a 1440 y 390px. Ya tenían 8px:
- tarjetas de ¿Por qué confiar?, foto bajo En cifras y panel del cierre;
- áreas de Metodología;
- fundadores, equipos y Filosofía;
- las tres fotos de Trabaja con nosotros;
- todas en móvil.

**Faltaban en escritorio:**
- **Nuestro enfoque:** el radio va en el marco con `overflow: hidden` de D163, así la deriva sigue recortada.
- **Transparencia (Metodología):** sangra a la derecha, así que se ven redondeadas las esquinas del lado del texto.

**Sin radio, a propósito:**
- imágenes a sangre completa (portadas y paneles de Áreas de práctica en Inicio);
- los círculos de los pasos de Metodología.

**Verificado en vivo:** 8px a 390, 768 y 1440px y sin desplazamiento lateral. `components.css` subido; idéntico al repo.

## "Sobre nosotros": eyebrow "Origen y especialización" e isotipo más pequeño (D169, 2026-10-13)

**Pedido (Oscar, con captura):** agregar el eyebrow "Origen y especialización" antes del párrafo y hacer el isotipo de D167 un poco más pequeño.

**Aplicado:**
- **Página #101 (REST, con revisión) y pattern `quienes-somos-full.php`:** nuevo párrafo `aaa-eyebrow` "Origen y especialización" antes de "Desde 2020 acompañamos…". El orden queda isotipo → eyebrow → párrafo.
- **`components.css` (bloque D167):** el isotipo pasa de `clamp(84px, 9vw, 128px)` a `clamp(68px, 7vw, 100px)` y su espacio inferior de `spacing--8` a `spacing--6`. Subido; idéntico al repo.
- **Verificado en vivo:** isotipo de 100px a 1440px y eyebrow en cobre como el resto del sitio.

**Nota D169 (15:57):** Nayeliz guardó Quiénes somos desde el editor 39 segundos después del cambio, con una copia abierta antes, y el eyebrow desapareció (revisión 201; no cambió nada más). Se volvió a aplicar sobre su versión y ya se ve en el HTML público. La página seguía abierta en su editor (bloqueada): si vuelve a guardar desde esa ventana sin recargar, se perderá otra vez.

## Sitio administrable: auditoría y conversión a bloques nativos (D170, 2026-10-13)

**Pedido (Oscar):** revisar todos los patterns y páginas porque había bloques que no se podían editar desde "Editar página"; el sitio debe ser lo más administrable posible antes de cargar la versión final. Aprobó los puntos 1, 2, 3, 4, 5 y 7 de la auditoría.

**Auditoría (validación con `wp.blocks.parse`, el mismo analizador del editor):**
- Inicio tenía 1 bloque inválido (panel del cierre) y 2 bloques HTML (logos de sectores y Casos de éxito).
- Quiénes somos tenía 4 bloques HTML (tarjetas de equipo).
- El pie tenía 3 bloques HTML (contacto, redes y aviso de cookies).
- Las cifras de "En cifras" estaban fijas en `functions.php`.
- Los patterns del servidor seguían como en D148.

**Aplicado:**
1. **Cifras (`home-motion.js`, `functions.php`):** la animación lee la cifra del texto de cada `.stat-card__number` (prefijo, punto de miles, coma decimal, texto o `<span class="stat-card__unit">` después) y al terminar deja exactamente lo escrito en el editor. Se quitaron `data-count-to`/`-prefix`/`-suffix` del mapa del filtro. Probado con "+9.250", "95,5 %", "+1.250.000", "Más de 40" y "12 años".
2. **Cierre "Conversemos" (Inicio #82, Metodología #97, Quiénes somos #101 y patterns):**
   - La foto pasa a la imagen de fondo nativa del Grupo `.site-closing-cta__panel` (medio 36), editable en Grupo → Fondo.
   - El velo navy pasa a `::before`.
   - El bloque de Inicio deja de ser inválido.
3. **Pie (`parts/footer.html`):**
   - Contacto y redes pasan a párrafos nativos `aaa-site-footer__item--{direccion|telefono|whatsapp|correo|linkedin|instagram}`: etiqueta en `<strong>` y dato como enlace.
   - Los íconos van por CSS (`mask`), con los mismos SVG.
   - Se editan en Apariencia → Editor → Pie de página.
   - El aviso de cookies queda en HTML: es un componente funcional, no contenido.
4. **Logos por sector (Inicio):**
   - Cada sector es un Grupo `.sector-card.sector-card--{slug}` con un párrafo `.sector-card__name` y un Grupo `.sector-card__logos` con un bloque Imagen por logo (16 logos con sus IDs de la Biblioteca).
   - Las 17 reglas de `.sector-card__logo` cubren también `.sector-card__logos .wp-block-image`, y `main.js` suma cualquier imagen al carrusel: agregar un logo es insertar una Imagen en la tarjeta.
   - El ícono del sector va por CSS según la clase (por defecto, el financiero).
5. **Tarjetas de equipo (Quiénes somos):**
   - Pasan a Grupos y párrafos (nombre, cargo, descripción).
   - `main.js` crea los botones "Ver funciones"/"Volver", con etiqueta accesible ("Ver funciones del equipo jurídico").
   - El isotipo va por `::before`.
   - En el editor las dos caras se muestran una debajo de la otra, sin girar (regla sobre `.block-editor-block-list__block`), para editar también el reverso.
6. **Patterns:**
   - Los 7 subidos al servidor e idénticos al repo; todos válidos y con el mismo texto que las páginas. El de Contacto se igualó al título editado por Nayeliz ("Nuestro equipo jurídico revisará…").
   - `cierre-conversemos.php` (cierre de dos columnas del prototipo) pasa a ser el cierre oficial actual.
   - `hero-simple.php` pasa a ser la portada interna actual (foto + eyebrow + H1), con textos de ejemplo.

**Verificado en vivo:**
- 0 bloques inválidos en las 5 páginas y en el pie.
- Bloques HTML restantes: solo Casos de éxito (oculto; se rehace con los videos) y el aviso de cookies.
- Carrusel de logos, escalas (GNB 1.1), íconos de sector, giro de tarjetas, cifras y cierre iguales que antes.
- Sin desplazamiento lateral a 390 y 1440px en las 5 páginas.
- `components.css`, `main.js`, `home-motion.js`, `functions.php`, `parts/footer.html` y los 7 patterns, idénticos al repo.
- **Incidente corregido:** un `\b` en una expresión regular se escribió como carácter de retroceso al generarse por script; quedó `/^equipo /i` y se revisaron todos los archivos tocados: 0 caracteres de control.

## Checkpoint con los textos definitivos y el sitio administrable (2026-10-13)

**Pedido (Oscar):** crear el checkpoint de D159–D170 antes de cargar la versión final.

**Aplicado:** commit en `main` con D159–D170 y tag anotado `checkpoint-textos-definitivos-2026-10-13`. Reemplaza a `checkpoint-staging-2026-10-13` como punto de control vigente.
- **Incluye:** textos definitivos del documento del cliente, fotos de banco, logo de GNB, ajustes visuales y conversión a bloques nativos.
- **Estado del repo:** coincide con el staging en vivo (páginas, tema y patterns).
- **Push:** el commit y el tag quedan solo en local, a decisión de Oscar (`main` dispara Cloudflare Pages).

## Foto de "Equipo de negociaciones" e imágenes de los patterns (D171, 2026-10-13)

**Pedido (Oscar, con captura):** la tarjeta de Equipo de negociaciones (D159) no tenía foto. Buscar una de banco relacionada, por ahora.

**Aplicado:**
- **Foto:** `equipo-negociaciones.webp` (medio 209; Carrie Allen, Unsplash `1H1LBKvD7ew`; 1200×800). Dos personas de traje intercambian un documento y una pluma: sin rostros, texto ilegible y sin apretón de manos (excluido por el cliente en D138). Elegida por Oscar (opción A entre tres simuladas en la tarjeta).
- **Dónde:** reemplaza el panel navy de D159 como bloque Imagen `team-profile-pair__photo`, en Quiénes somos #101 y en el pattern. Mide 282×282 a 1440px y 16:9 en móvil, con borde de 8px y sin desplazamiento lateral.
- **Hallazgo:** 14 imágenes de los patterns (¿Por qué confiar?, Nuestro enfoque, áreas y pasos de Metodología, Filosofía) apuntaban a `assets/img/…` del tema, que no existen en el servidor (desde D151 las fotos solo se suben a la Biblioteca); daban 404 si se insertaba el pattern. Las páginas no estaban afectadas.
- **Corrección:**
  - Los 14 pasan a `aaa_media_url()`.
  - `aaa_media_url()` ahora, si no encuentra el título del adjunto (por ejemplo, retitulado "Equipo de negociaciones"), busca por el nombre real del archivo en `_wp_attached_file`.
  - Verificado: las 59 imágenes de los 7 patterns responden 200 y todos los bloques son válidos.
- `functions.php` y los patterns de Inicio, Metodología y Quiénes somos subidos; idénticos al repo.
- **Commit:** los cambios están en el repo pero fuera del checkpoint `checkpoint-textos-definitivos-2026-10-13`; no tienen commit todavía.

## Áreas de práctica (Inicio): título y contenido más arriba (D172, 2026-10-14)

**Pedido (Oscar, con captura):** con los textos definitivos, al pasar el cursor el contenido de los tres paneles quedaba muy pegado abajo. Subir títulos y contenido sin cambiar el tamaño de los paneles.

**Aplicado (`components.css`, desde 1024px):** la primera fila de la grilla interna del panel baja de 50% (D128) a 34%. Mediciones antes → después, con la lista desplegada:
- **Título:** sube ~90px, de 315 a 224px desde el borde superior.
- **Aire bajo la lista:** a 1280px pasa de 15px a 105px en "Derecho concursal" y de 80 a 171px en los otros dos; a 1920px pasa de 103 a 194px.

**Sin cambios:** el tamaño de los paneles (540–630px de alto). Subido; idéntico al repo. Verificado en vivo con el cursor sobre el panel.

## Logos por sector: primera tarjeta alineada (D173, 2026-10-14)

**Pedido (Oscar, con captura):** en "Organizaciones que confían en nosotros" la primera tarjeta quedaba más alta que las demás.

**Causa:** desde D170 la grilla es un Grupo nativo con layout "flow", y WordPress suma 24px de `margin-block-start` a cada hijo menos al primero. Es el mismo efecto ya corregido en los paneles de Áreas.

**Aplicado:** `.sector-grid > .sector-card { margin-block: 0; }` en el bloque D170 de `components.css`. Subido; idéntico al repo.

**Verificado:** misma altura de inicio para las tarjetas de cada fila a 1440px (3 por fila) y 768px (2 por fila); en móvil se apilan sin margen extra.

## Pedidos del cliente: pestaña nueva, foto de Metodología, animaciones e isotipo (D174, 2026-10-15)

**Pedido (Oscar, de parte del cliente):**
1. "Nuestra plataforma" en el menú se abre en una pestaña nueva.
2. En Metodología, la imagen de "Asesoría corporativa y litigios" pasa a ser la del banner de Inicio.
3. Animaciones más intuitivas y modernas, sin recargar.
4. El isotipo de los títulos se anima al entrar en la página o al hacer scroll, como el del menú.

**Aplicado:**
1. **`parts/header.html`:** el botón lleva `linkTarget: _blank` y `rel="noreferrer noopener"` (bloque válido). Verificado: `target="_blank"` en vivo.
2. **Metodología #97 y pattern:** la tercera tarjeta de áreas usa `home/hero.webp` (foto del banner de Inicio; existe en el servidor), con alt "Equipo de AAA Estudio Legal trabajando en su oficina".
3. **Animaciones**, eligiendo solo donde aporta, porque el sitio ya tiene revelado de tarjetas, deriva de fotos, cifras, carrusel y zoom al pasar el cursor en "¿Por qué confiar?" y Metodología:
   - **`home-motion.js` (revealChapter):** las fotos editoriales (Nuestro enfoque, Transparencia, Origen, Filosofía, Trabaja con nosotros) pasan de un recorte del 3% casi imperceptible a un revelado tipo cortina de abajo hacia arriba (1.15s; 0.85s en móvil).
   - **CSS (solo con mouse y sin "reducir movimiento"):** la flecha de los botones se desplaza 4px al pasar el cursor, y las fotos de equipos (Quiénes somos) hacen zoom 1.04 dentro de su marco.
4. **Isotipo:**
   - **`main.js`:** pone `.is-inview` (IntersectionObserver) en `.aaa-logo-inline` y `.origin-block__copy`.
   - **CSS:** el isotipo arranca oculto y se revela con el keyframe `aaa-header-isotype-reveal` del encabezado. Aplica a Filosofía, "ser parte de [logo]", Origen y especialización y "Talento AAA".
   - **`functions.php` (`aaa_logo_in_headings`):** ahora también procesa eyebrows (`.aaa-eyebrow`), así "Talento AAA" muestra el isotipo (1.9em) y el texto oculto sigue diciendo "AAA Estudio Legal" para lectores de pantalla.
   - Sin JS se ve normal; con "reducir movimiento" no se anima.

**Verificado en vivo:**
- Cortina de la foto de Origen capturada en tres momentos; isotipo de "Talento AAA" revelado al llegar a la sección.
- Sin desplazamiento lateral a 390 y 1440px en las 5 páginas; 0 caracteres de control en los archivos.
- `components.css`, `main.js`, `home-motion.js`, `functions.php`, `parts/header.html` y `patterns/metodologia-full.php` subidos; idénticos al repo.

## Fundido de fotos y preloader de entrada (D175, 2026-10-15)

**Pedido (Oscar, de parte del cliente):**
1. El revelado tipo cortina de las fotos (D174) se ve extraño: mejor un fundido, pero no tan lento que parezca que la imagen no termina de cargar.
2. Un preloader muy corto y estético antes de cargar el sitio, con el logo completo del menú (isotipo + "Estudio Legal") y una animación distinta a la del encabezado, por ejemplo las A una tras otra y luego el texto.

**Aplicado:**
1. **`home-motion.js` (revealChapter):** la foto editorial entra con un fundido de opacidad 0→1 en 0.55s (0.45s en móvil), con curva `power2.out`, que llega casi entera en el primer tercio. Ya no hay recorte ni escala, porque la deriva de la foto ya anima la escala. El texto del capítulo entra 0.1s después.
2. **Preloader:**
   - **Cuándo aparece:** un script al inicio del `<head>` (`aaa_preloader_flag`) marca `<html class="aaa-preloading">` solo en la primera página de cada sesión de pestaña (`sessionStorage`) y si el usuario no pidió "reducir movimiento". En las páginas siguientes no vuelve a salir. Sin JS nunca aparece (el marcado lleva `hidden`).
   - **Marcado (`aaa_preloader_markup`, en `wp_body_open`):** isotipo en línea con los trazos de `assets/img/brand/isotipo.svg`, separado en sus tres A. La A izquierda son los trazos 2 y 3 del archivo. Las otras dos comparten el trazo 1 y se separan con dos polígonos trazados por los huecos donde una pierna pasa sobre la otra; la tercera A es el resto (máscara inversa). Al lado va `wordmark-blanco.svg`, el mismo archivo del menú. Si algún día cambia la estructura del isotipo, el preloader lo anima completo como una sola pieza.
   - **Animación (CSS, `components.css` § D175), ~0.95s en total:** las tres A suben desde la línea base una tras otra (0–0.48s); "Estudio Legal" entra de izquierda a derecha (0.28–0.6s); el telón azul se retira con un fundido (0.66–0.96s). No espera a que cargue nada: la página carga debajo.
   - **Coordinación:** mientras el telón se retira, el isotipo del encabezado hace su revelado de siempre (retrasado 0.6s). Las entradas GSAP (Hero incluido) y el isotipo de los eyebrows esperan 0.6s para no animarse escondidos detrás. `main.js` retira el nodo al terminar.

**Verificado:**
- **Local:** la separación de las A, pintada en tres colores, da tres A completas sin cruces; además, tira de cuadros de la secuencia.
- **En vivo (Inicio):** capturas reales de la recarga, que muestran las A completas, "Estudio Legal" entrando y el telón saliendo con el isotipo del encabezado empezando su revelado. Logo completo sin costuras en las uniones.
- **Segunda página de la sesión** (Metodología): sin preloader.
- **Foto de Transparencia:** entra con el fundido.
- **"Talento AAA":** el isotipo sigue revelándose al llegar a la sección.
- **Errores y desplazamiento:** 0 errores en consola; sin desplazamiento lateral (el preloader es fijo y no ocupa espacio en la página).
- **Archivos subidos:** `functions.php`, `components.css`, `main.js` y `home-motion.js`, idénticos al repo; el servidor no tenía cambios ajenos antes de subir.

**Nota:** si el diseñador entrega el logo oficial con otro isotipo, hay que recalcular los dos polígonos de `aaa_preloader_markup`. Si el archivo nuevo no tiene exactamente 3 trazos, el preloader cae solo al modo "isotipo completo"; si tiene 3 pero con otra forma, los cortes quedarían mal.

## Fotos stock nuevas entregadas por Oscar (D176, 2026-10-15)

**Pedido:** reemplazar imágenes con 8 fotos stock nuevas, nombradas según la sección (dos opciones para Volumen, Seguimiento y Cumplimiento), eligiendo las mejores, comprimidas.

**Elegidas y aplicadas** (WebP, recortadas al formato de cada tarjeta, 32–181 KB; originales de 6–12 MB):
- **Volumen con estructura** (Inicio, "¿Por qué confiar?"): pila de expedientes con biblioteca al fondo. Descartada: escritorio con lámpara (menos alusiva a "volumen"). Media 212.
- **Seguimiento en tiempo real:** manos con reloj sobre el portátil con reportes; el reloj refuerza "tiempo real". Descartada: mano con lápiz digital, muy oscura. Media 213.
- **Cumplimiento normativo:** mano firmando un documento. Descartada: escudo con candado digital, que la guía del documento excluye (candados y escudos). Media 214, título `aaa-confianza-cumplimiento-1` porque ya existía uno con el nombre anterior.
- **Derecho concursal** (panel 01 de Inicio y tarjeta de Metodología): reunión con balanza de la justicia. Media 215.
- **Recuperación de cartera y garantías** (panel 02 de Inicio y tarjeta de Metodología): reportes de crédito junto a un portátil. Media 216.

**Cómo:** las fotos se redujeron a 2400 px (PowerShell/System.Drawing) y se codificaron a WebP en el navegador; se subieron a la Biblioteca con texto alternativo. En Inicio #82 y Metodología #97 se cambió solo el `src`/`id`/`alt` de esos bloques Imagen (0 bloques inválidos antes y después; ninguna otra edición entre la lectura y el guardado). Patterns `home-full.php` y `metodologia-full.php` actualizados (`aaa_media_url`) y subidos, idénticos al repo.

**Pendiente de decisión de Oscar:** las fotos reemplazadas (`aaa-confianza-casos`, `-tiempo-real`, `-reportes-pantalla`, `aaa-area-concursal`, `aaa-area-normalizacion`) siguen en la Biblioteca; borrarlas es decisión suya. Nota: Recuperación de cartera muestra textos en inglés en las hojas ("Loan Comparison", "Budget") y el portátil de Seguimiento un titular en inglés; a tamaño de tarjeta casi no se leen.

## Documento de SEO de Nayeliz aplicado al staging (D177, 2026-10-15)

**Pedido (Oscar):** aplicar "AAA LEGAL SEO _ ACCIONES.docx" de Nayeliz y dar el estatus frente al backlog SEO + GEO (D149–D150).

**Contenido del documento:** descripción canónica en 3 versiones (N09), revisión de slugs y anclas del sitio anterior (N05), encabezados ("No le veo sentido", es decir N08 sin cambios), 8 preguntas frecuentes (N10) y el texto de llms.txt (N13).

**Aplicado:**
- **Rank Math, módulos (T06):** se encendieron SEO local, Redirecciones y Monitor 404. LLMS Txt se encendió y se volvió a apagar, porque el archivo lo sirve el tema (ver abajo). Content AI y AI Visibility siguen encendidos; apagarlos depende de si se van a pagar.
- **Entidad de la firma (T04), en Títulos y meta → SEO local:**
  - Organización tipo LegalService, nombre "AAA Estudio Legal" y nombre alterno "Agudelo Abogados Asociados".
  - Razón social (legalName) "Agudelo Abogados Asociados SAS" y año de fundación 2020.
  - Descripción: la versión de 51 palabras de Nayeliz.
  - Logo: isotipo cuadrado (medio 134).
  - Correo, dirección D14 (Cali, Valle del Cauca, CO) y teléfono +57 317 655 1931.
  - Página "Acerca de" = Quiénes somos y página de contacto = Contacto.
  - Se quitaron los horarios genéricos de 9 a 17 que traía Rank Math, porque el cliente no los ha confirmado.
  - En Meta social se agregaron LinkedIn e Instagram (sameAs).
- **Schema por página (T05):**
  - Probar "Ninguno" como tipo por defecto dejó Metodología y Trabaja sin ningún schema, así que se volvió a "Artículo".
  - El filtro `aaa_schema_pages` (functions.php, `rank_math/json_ld`) quita Article y Person (autor) en las páginas.
  - Metodología suma un Service por cada tarjeta de área y un FAQPage leído de los bloques Detalles. Si se editan las preguntas en la página, el schema se actualiza solo.
  - Resultado: Inicio y Trabaja = WebPage; Quiénes somos = AboutPage; Contacto = ContactPage; Metodología = WebPage + 3 Service + FAQPage (8 preguntas). La ficha LegalService aparece en todas y ninguna lleva Article.
- **Preguntas frecuentes (N10):**
  - Sección nueva en Metodología, entre Transparencia y el cierre (página #97 y pattern), con las 8 preguntas tal cual las entregó Nayeliz.
  - Usa bloques Detalles nativos, editables desde la página. CSS D177: título editorial a la izquierda (fijo en escritorio) y acordeón a la derecha.
  - 0 bloques inválidos. Ancla `#preguntas-frecuentes`.
- **llms.txt (N13/T16):** `aaa_llms_txt` sirve /llms.txt (200, texto plano) con el texto exacto de Nayeliz. Los enlaces salen de `home_url()`, así que tras migrar apuntan solos al dominio final.
- **Anclas del sitio anterior (N05):** los `#` no llegan al servidor, así que no admiten un 301. Un script al inicio del `<head>` de Inicio redirige #lafirma y #equipo → /quienes-somos/, #comolohacemos → /metodologia/ y #contacto → /contacto/. #nuestrosclientes se queda en Inicio. Verificado: `/#comolohacemos` abre /metodologia/.

**Por confirmar (Oscar / cliente):**
- **H2 de las preguntas:** "Dudas comunes del acreedor." es un texto provisional mío (el documento no trae título); necesita aprobación.
- **Revisión jurídica:** el backlog pide que un abogado de la firma valide las respuestas antes del lanzamiento.
- **Slug de Metodología:** Nayeliz propone `/soluciones-juridicas/`. No se cambió: su propio llms.txt usa /metodologia. Si se aprueba, hay que actualizar el menú, el footer, los enlaces internos, el llms.txt y crear una redirección 301.
- **Términos:** la descripción canónica y el llms.txt dicen "normalización de activos", mientras el sitio usa "Recuperación de cartera y garantías" (D161). Para la entidad conviene un solo término.
- ~~**Ley 1116:** las preguntas usan "Ley 1116 de 2006"~~ **Resuelto (Oscar, 2026-10-15, D178): se usa "Ley 116" en el sitio y en toda la documentación.** Las preguntas frecuentes ya dicen "Ley 116".

## Preguntas ocultas, Ley 116, término definitivo, imágenes para compartir, fuentes propias y caché (D178, 2026-10-15)

**Pedido (Oscar):**
- Ocultar las preguntas frecuentes, que aún no están aprobadas.
- "Recuperación de cartera y garantías" como término definitivo.
- La ley es "Ley 116", en toda la documentación.
- Imagen y metadatos para compartir en Inicio y Contacto.
- Fuentes propias en lugar de Google Fonts.
- Instalar y configurar un plugin de caché con cuidado.
- Apagar Content AI y AI Visibility de Rank Math.

**Aplicado:**
- **Preguntas frecuentes, ocultas (no borradas):**
  - Se usó la opción nativa de WordPress 7.1 para ocultar bloques: `metadata.blockVisibility: false` en la sección, con el nombre "Preguntas frecuentes (pendiente de aprobación)" (página #97 y pattern).
  - No se muestran en la página, y el filtro de schema ignora bloques ocultos: ya no sale el FAQPage.
  - Para publicarlas: en el editor de Metodología, Vista de lista → esa sección → menú ⋮ → "Mostrar".
  - Sus respuestas ya dicen "Ley 116".
- **Ley 116:**
  - Las 5 menciones de las preguntas (página y pattern) pasaron a "Ley 116".
  - En el backlog (Excel), la decisión 1 quedó "Resuelta" con su resolución, y la tarea N01 dice usar "Ley 116".
  - En la guía de Nayeliz (Word) se ajustaron la keyword de ejemplo, el ejemplo de cita y la decisión, que figura como resuelta.
  - El zip de entrega (`seo/`) se rearmó; Excel y Word se verificaron abriéndolos.
  - En este archivo, las notas que lo dejaban pendiente quedaron como resueltas.
  - No se tocaron las citas textuales del brief del cliente ("1116/2006") en `content/` y en la Sesión 01, porque reproducen lo que dice ese documento.
- **"Recuperación de cartera y garantías":** se usa en la descripción de la firma (Rank Math, SEO local), el llms.txt, las palabras clave de Metodología, la plantilla del blog (`templates/home.html`) y la guía de Nayeliz. Se conserva la nota de Metodología "En el sector financiero, normalización de activos.", texto del cliente que explica la equivalencia.
- **Imágenes para compartir (1200×630, JPEG):**
  - `aaa-og-inicio.jpg` (medio 230, 91 KB): foto del banner con velo azul de marca, logo completo y la frase del H1 de Inicio.
  - `aaa-og-contacto.jpg` (medio 231, 58 KB): reunión con manos conversando, sin rostros, con "Cuéntenos el contexto de su organización."
  - Inicio, título para compartir: "AAA Estudio Legal | Defensa estratégica del acreedor". Descripción: la de Nayeliz, con "su empresa" → "su organización".
  - Contacto, título: "Solicite su evaluación jurídica | AAA Estudio Legal". Descripción tomada de su H1 y de la descripción canónica.
  - X (Twitter) usa los mismos datos; antes la descripción de Inicio para X decía "acreedores y empresas".
  - La imagen de Inicio también es la imagen por defecto de Rank Math para páginas sin imagen propia.
- **Fuentes propias (T10):**
  - Krub 400–700, Libre Caslon Display y Libre Caslon Text itálica: los .woff2 latinos de Google (licencia OFL, ~99 KB).
  - Ubicación: en el repo, en `assets/fonts/`; en el staging, en la Biblioteca de fuentes de WordPress (`/wp-content/uploads/fonts/`, subidas por la API REST nativa, sin plugin).
  - `functions.php` (`aaa_font_faces`, `aaa_print_fonts`, `aaa_editor_fonts`) imprime las @font-face (font-display: swap), precarga las 3 del primer pantallazo y las agrega al editor. Se quitó Google Fonts.
  - Verificado como visitante: las 6 fuentes cargan y no hay ninguna petición a fonts.googleapis.com.
- **Rank Math:** Content AI y AI Visibility, apagados.
- **Caché (LiteSpeed Cache 7.9.1):** ya estaba instalado e inactivo; WP Fastest Cache sigue inactivo.
  - Caché de página para visitantes; sin caché para usuarios con sesión ni para la API REST.
  - TTL público y de portada: 600 s.
  - Minificación de CSS y JS, sin combinar ni diferir. Se quitan los emojis de WordPress.
  - Sin carga diferida de imágenes, optimización de imágenes, QUIC.cloud, caché de objetos ni crawler.
  - Medición: Inicio pasa de ~420 ms a ~90 ms.
  - **CDN de Hostinger:** guarda el HTML durante el TTL de LiteSpeed (comprobado con 60 s: pasa a EXPIRED a los 60 s) y **no se vacía con las purgas del plugin**, ni con "Purgar todo". Por eso el TTL quedó en 10 minutos: una edición la ve un visitante en 10 minutos como máximo; quien tiene sesión la ve al instante.
  - `functions.php` también purga todo al guardar contenido o metadatos de Rank Math, para la caché del servidor.
  - Verificado como visitante en Inicio, Metodología y Trabaja: formularios inicializados, GSAP y línea de tiempo funcionando, 0 errores en consola y sin desplazamiento lateral.

**Pendiente (Oscar):**
- **Purgar una vez el CDN desde hPanel** (Sitio web → Rendimiento → CDN → Purgar caché). Las copias de las 5 páginas guardadas antes de bajar el TTL tienen 7 días de vida en el CDN; hoy son el contenido actual, pero una edición en esas páginas no se vería hasta purgarlas.
- Vaciar del todo los plugins inactivos (WP Fastest Cache y los 3 de Hostinger) cuando lo decidas; Claude no borra de forma definitiva.
- La guía de Nayeliz también existe como Claude Doc en claude.ai (D149); esa copia no se actualizó.

## Backlog SEO al día (Drive y repo) y checkpoint del MVP (D179, 2026-10-15)

**Pedido (Oscar):** actualizar el backlog en nuestra documentación y en el archivo compartido de Google Drive que también revisa Nayeliz, y crear un checkpoint antes de subir el MVP al servidor del cliente. Oscar ya purgó el CDN de Hostinger.

**Backlog:**
- **Versión maestra:** el archivo de Drive (`Backlog-SEO-GEO-AAA.xlsx`, compartido).
  - Nayeliz ya había marcado ahí como hechas N01, N02, N03, N04, N05, N07, N09, N10 y N13, con N06 en curso.
  - Ya no tiene la tarea N17 (página por vacante), así que esa versión manda.
  - Se editó en Hojas de cálculo sin tocar su trabajo, y su filtro de Responsable ("Nayeliz" y "Oscar + Nayeliz") quedó como estaba.
- **Tareas de Oscar:**
  - T04, T05, T06, T07, T10 y T16 → Hecho (2026-10-15) con notas.
  - T11 → En curso: falta borrar los plugins inactivos y Duplicator tras la migración.
- **Tareas de Nayeliz:**
  - Notas en N01, N04, N05, N07, N09 y N13.
  - N08 → Hecho: ella no propone cambios a los encabezados.
  - N10 → Bloqueado: preguntas ocultas hasta la aprobación de la firma.
- **Decisiones:** la 1 (Ley 116) y la 7 (LiteSpeed Cache) quedan resueltas. La 2 (nombre) y la 8 (datos del cliente) llevan avances.
- **Resumen:** 47% del backlog hecho (antes 31%) y 63% de las urgentes (P0).
- **Repo:** la versión de Drive se descargó, se verificó en Excel y reemplazó a `seo/Backlog-SEO-GEO-AAA.xlsx`. El zip `seo/SEO-AAA-Backlog-y-Guia-Nayeliz.zip` se rearmó con la guía D178.

**Checkpoint:** commit de D171–D179 y tag `checkpoint-mvp-final-2026-10-15` en `main`, local y sin push. Las ramas `product-lead-*` y `origin/main` no tenían commits ausentes en `main`.

**Para subir al servidor del cliente (revisar al migrar):**
- **Fuentes:** están en la Biblioteca de fuentes (`wp-content/uploads/fonts/`), que viaja con las subidas. Si el tema se sube desde el repo, también están en `assets/fonts/`.
- **Caché:** LiteSpeed Cache solo cachea si el servidor es LiteSpeed. El TTL de 10 min responde al CDN de Hostinger; en otro hosting se puede revisar. Purgar todo después de migrar.
- **URLs:** el llms.txt y la redirección de anclas toman solos el dominio. Las URLs del staging en la base de datos (SEO local de Rank Math, imágenes para compartir) se reemplazan con la búsqueda y reemplazo de la migración.
- **Indexación:** al lanzar, desmarcar "Disuade a los motores de búsqueda" y revisar robots.txt (T15, T17).
- **Pendiente:** las preguntas frecuentes siguen ocultas en Metodología hasta su aprobación.

## Migración al servidor del cliente: en pausa por permisos de CloudPanel (2026-10-15)

**Pedido (Oscar):** subir la versión actual a un enlace de desarrollo en el servidor de preproducción del cliente, para medir la velocidad en su ambiente, sin afectar lo que ya funciona.

**Lo que se comprobó (sin usar credenciales):**
- **Servidor:** `agudeloabogados.com` y el panel `srv1288430.hstgr.cloud` están en el mismo VPS de Hostinger (145.79.7.167) con CloudPanel. El sitio en producción del cliente vive ahí mismo.
- **DNS:** el del dominio está en Dongee (ns1-3.dongee.com) y lo maneja el cliente.
- **Servidor web:** NGINX, no LiteSpeed. LiteSpeed Cache no cachea páginas ahí; el sitio actual tampoco tiene caché de página.
- **Enlace sin DNS:** `aaa-dev.145-79-7-167.sslip.io` resuelve al VPS sin tocar el DNS del cliente. Oscar lo aprobó para no indexar nada bajo agudeloabogados.com.
- **Llave SSH:** se generó en el equipo de Oscar (`~/.ssh/aaa_dev_cloudpanel`), para no usar la clave de SFTP de producción.

**Bloqueo:**
- El usuario de CloudPanel entregado (`agudelo-cpanel`) es un usuario normal, con acceso solo al sitio de producción (usuario `aaa-web`). No puede crear sitios ni ver el área de administración.
- Crear la copia dentro del sitio de producción (carpeta o vhost) se descartó por riesgo.
- Claude no inició sesión con las contraseñas compartidas en el chat (CloudPanel, SFTP y base de datos): Oscar inició sesión en el panel y las contraseñas de los formularios las escribe él. Se recomendó cambiar esas claves.

**Para retomar:** el administrador del servidor crea el sitio (Add Site → PHP Site, plantilla WordPress, dominio `aaa-dev.145-79-7-167.sslip.io`, PHP 8.3, usuario `lusamine`) y lo asigna a `agudelo-cpanel`, o le da a ese usuario el rol Site Manager. Después: base de datos `lusamine_dev` / `lusamine_db`, SSL, llave SSH, Varnish (con su plugin "CLP Varnish Cache", autorizado por Oscar solo para ese sitio) y el paquete de Duplicator.

**Paquete de Duplicator:** generado en el staging el 2026-10-15 (`20261016_aaaestudiolegal`, 78,8 MB), después de los cambios D180–D181, sin cifrado; se guarda en `wp-content/duplicator-backups` del staging.

## Fotos de los fundadores y páginas legales del cliente (D180–D181, 2026-10-15)

**Pedido (Oscar):** analizar los archivos pendientes del cliente (dos fotos y tres documentos legales) y construir lo que falta en el staging.

**D180 — Fotos (documento del 12-oct):**
- **Portada de Inicio = AAA1313**, los dos fundadores sobre fondo azul. La foto es vertical: `aaa-portada-fundadores.webp` (2560×1080, 47 KB, medio 232) extiende el mismo fondo de estudio hacia la izquierda, con un degradado tomado de la propia foto, y deja a los fundadores a la derecha.
  - CSS D180: la foto va nítida, sin la desaturación de la foto anterior. El velo oscurece solo la mitad del texto en escritorio. En móvil queda detrás del texto, atenuada (opacidad 0.6), porque las caras están en la parte alta.
  - La foto de la oficina (`hero.webp`) sigue en Metodología y en la foto de cifras.
- **Quiénes somos, bloque "Origen" = AAA1379**, Julián solo: `aaa-origen-julian-agudelo.webp` (1200×1041, 66 KB, medio 233), en lugar de `origen-fundadores.webp`. El documento deja su ubicación final "por confirmar".
- Páginas #82 y #101 y patterns actualizados; 0 bloques inválidos.

**D181 — Documentos legales (texto del cliente sin cambios, D2):**
- **"Términos y condiciones y política de privacidad"** (PDF): página `/terminos-y-condiciones/` (#236), secciones 1–18 y 13.1–13.7. Anclas `#privacidad` y `#cookies`.
- **"Política de tratamiento de datos personales"** (docx): página `/politica-de-tratamiento-de-datos-personales/` (#237), con la numeración del documento (I–XVII, 6.1–6.8 y 14.1–14.3) y las tablas de datos y canales.
- **Construcción:** bloques nativos (encabezados, párrafos, listas y tablas), generados desde los documentos con un convertidor, sin transcribir a mano; 0 bloques inválidos. Portada interna con eyebrow "Información legal". CSS D181: columna de lectura de 780px y tablas apiladas en móvil.
- **Enlaces:**
  - Pie de página: "Términos y condiciones · Política de tratamiento de datos personales". El nombre del enlace a la Política es el que pide el propio documento de Términos.
  - Aviso de cookies: "Conozca más en nuestros Términos y condiciones" → `#cookies`.
  - Formularios Postulación (106) y Contacto B2B (115): la casilla de autorización enlaza a la Política nueva, con su nombre. Su configuración de correo se conservó.
- **"Autorización para el tratamiento de datos personales y para la consulta y reporte…"** (docx): es un formato para firmar (casillas SÍ/NO, firma y fecha), no una página web. No se publicó. Su campo "[MEDIO O ENLACE DE CONSULTA]" puede llevar la URL de la Política.

**Para confirmar con el cliente (Anyelin) antes de publicar:**
- **Espacios en blanco de la Política:** los tres de publicación ("____") y la fila "Página web" se completaron con www.agudeloabogados.com.
- **Correos que no coinciden:** los Términos dan ja@agudeloabogados.com como canal general (numerales 1 y 17), Info@ para datos (numeral 1) y datospersonales@agudeloabogados.com para solicitudes de datos (13.7). La Política usa info@ para todo.
- **Término del área:** los Términos (numeral 3) dicen "normalización de activos"; el sitio usa "Recuperación de cartera y garantías". Se publicó tal cual.
- **Cookies:** los Términos piden que la analítica opcional se active después del consentimiento y con opción de rechazar (numeral 14); el aviso actual solo tiene "Aceptar". Se resuelve con T14 (GTM con Consent Mode).
- **Formularios:** la Política pide autorizaciones separadas y sin casillas premarcadas para usos opcionales, como conservar la hoja de vida un año o recibir boletines. Se puede agregar al formulario de Postulación cuando Gestión Humana lo confirme.
- **Borrador sobrante:** "Privacy Policy" (#3, el borrador de WordPress) sigue sin publicar.

**Backlog (Drive y repo, 2026-10-15):** T12 → Hecho, con los puntos por confirmar con Anyelin; notas en N12 (faltan los metadatos SEO de las dos páginas legales) y T17 (migración en pausa). Copia de Drive descargada a `seo/` y zip rearmado.

## Foto de "Origen" revertida y pendientes de SEO de Oscar (D182–D183, 2026-10-15)

**Pedido (Oscar):**
- Volver a la foto anterior en "Origen y especialización", porque ese no es el lugar de la foto de Julián.
- Resolver los pasos del backlog de SEO que le corresponden, para que solo falten el visto bueno de Nayeliz y los recursos de la firma.
- Desde ahora, Duplicator solo cuando él lo pida.

**Foto de Origen:**
- Quiénes somos (#101) y su pattern vuelven a `origen-fundadores.webp`.
- La foto AAA1379 (`aaa-origen-julian-agudelo.webp`, medio 233) queda en la Biblioteca, sin usar, hasta que la firma confirme dónde va.

**D182 — Blog (T13):**
- **Página "Blog":** `/blog/` (#239), asignada como página de entradas.
  - Queda en `noindex` y sin enlace en el menú ni en el pie hasta que existan las primeras entradas (N11). Así no se publica una sección vacía.
  - Lleva la descripción SEO provisional que N12 pide reemplazar.
- **Plantillas:**
  - El listado tiene portada navy ("Análisis jurídico *desde el lado del acreedor.*"), tarjetas con foto 3:2, categoría, fecha y extracto, paginación y un mensaje cuando no hay entradas.
  - La entrada tiene categoría, título, autor, "Publicado:" y "Actualizado:" (este último solo si se editó), foto 16:9 y columna de lectura de 780px.
  - Fechas en español ("15 de octubre de 2026").
- **Prueba:** con una entrada privada se vieron el listado y la entrada, y su schema sale como BlogPosting con autor y fecha de actualización. La entrada quedó en la papelera.
- **El autor:** hoy sale "AAA Estudio Legal", el usuario de WordPress. Para GEO debe ser el abogado que firme (decisión 4, N11).

**D183 — Imágenes, analítica con consentimiento, robots.txt y carga (T09, T14, T15):**
- **T09, imágenes:**
  - Todas las fotos de los bloques salen con ancho y alto, y también el logo del encabezado.
  - La portada carga con prioridad y sin diferir; desde la segunda foto, se difieren.
  - Las fotos de la Biblioteca suman `srcset`, así que el móvil baja la versión de ~768 px y no la de 1800–2560.
  - Las portadas de Metodología, Quiénes somos y Trabaja pasaron de archivos del tema a la Biblioteca (`aaa-hero-*.webp`, medios 249–251), para tener esas versiones.
  - Los 6 logos de más de 15 KB (Femcristar, Coopunidos, MetroCali, Promédico, Ma. Isabel, K-listo) pasaron a WebP de 360 px y 9–15 KB (medios 242–247). Los PNG siguen en la Biblioteca con "-png" al final del título.
- **Carga:**
  - GSAP, ScrollTrigger y el motion se cargan con `defer`; el motion se verificó igual.
  - Contact Form 7 solo carga en Contacto y Trabaja con nosotros.
- **PageSpeed móvil (2026-10-15):**

  | Página | Rendimiento | LCP antes | LCP después |
  |---|---|---|---|
  | Inicio | 96 | 3,6 s | 2,6 s |
  | Metodología | 96 | 3,0 s | 2,6 s |
  | Quiénes somos | 96 | — | 2,7 s |
  | Trabaja con nosotros | 97 | — | 2,7 s |
  | Contacto | 97 | — | 2,2 s |

  - CLS: 0 en las cinco páginas.
  - En Chrome real, la LCP es igual a la primera pintura (~0,6 s).
  - La décima que falta para la meta (2,5 s) es la ruta crítica de CSS y fuentes en la simulación de 4G lenta. Conviene medir de nuevo en el servidor del cliente.
- **T14, analítica:**
  - El aviso de cookies tiene "Rechazar" y "Aceptar", con el mismo peso.
  - El pie de página tiene "Preferencias de cookies", que vuelve a abrir el aviso.
  - Google Consent Mode v2 arranca en "denegado" y se actualiza con la elección, que se guarda en el navegador.
  - **Google Tag Manager** solo se carga si hay un ID en Ajustes → Generales → "ID de Google Tag Manager". Hoy está vacío, así que el sitio no llama a Google.
  - `main.js` envía a dataLayer: `aaa_contact_submit`, `aaa_application_submit`, `aaa_whatsapp_click`, `aaa_platform_click` ("Nuestra plataforma"; en el sitio no existe un enlace "Mi caso"), `aaa_phone_click`, `aaa_email_click` y `aaa_consent_update`.
  - **Contenedor para importar en GTM:** `seo/gtm-contenedor-aaa-estudio-legal.json`. Trae la etiqueta de Google GA4, 6 eventos y Clarity, que solo se carga con consentimiento.
  - Solo hay que reemplazar dos constantes: el ID de medición de GA4 y el ID de proyecto de Clarity.
  - Probado en el staging: rechazar, reabrir, aceptar y los eventos.
- **T15, robots.txt (filtro del tema):**
  - Permite a todos, salvo `/wp-admin/`.
  - Declara explícitamente los buscadores con IA que citan fuentes: OAI-SearchBot, ChatGPT-User, PerplexityBot, Perplexity-User, Claude-SearchBot, Claude-User y bingbot.
  - Declara el sitemap de Rank Math.
  - Los rastreadores de entrenamiento siguen permitidos hasta la decisión 5 del cliente.
  - En el staging no se ve, porque Hostinger sirve su propio archivo robots.txt para el dominio temporal; aplica en el dominio final.
- **T11:** ya no quedan plugins inactivos. Solo falta retirar Duplicator después de la migración final.

**Lo que queda del lado de Oscar (cuentas y decisiones, no código):**
1. **T14:**
   - Crear las cuentas de GTM, GA4 y Clarity, idealmente con el Google de la firma.
   - Importar el contenedor, poner los dos IDs y publicar.
   - Pegar el ID de GTM en Ajustes → Generales.
   - Marcar como eventos clave `form_contacto`, `form_postulacion`, `clic_whatsapp` y `clic_plataforma`, y probarlos en DebugView.
2. **T08, inglés:** la decisión 6, el mecanismo de traducción. Polylang gratis no traduce solo, y un plugin nuevo requiere su autorización.
3. **T17, T18 y T19:** lanzamiento. Dependen del dominio final (decisión 3) y de la migración en pausa.

**Lo que queda de Nayeliz y de la firma:**
- **Nayeliz:**
  - N06: alt de las imágenes.
  - N11: las dos entradas del blog.
  - N12: metadatos de las páginas legales y del blog.
  - N14: metadatos en inglés, después de T08.
- **La firma:**
  - Decisiones 2 a 5 y 8: nombre oficial, dominio, autoría del blog, rastreadores de IA y datos (horario, biografías, casos).
  - Validar las preguntas frecuentes (N10).
  - Lista final de logos.
  - Ubicación de la foto AAA1379.

## Sitio de pruebas en el servidor del cliente: webtest.agudeloabogados.com (D184, 2026-10-30)

**Pedido (Oscar):** el cliente autorizó subir el proyecto a su propio servidor, bajo un subdominio, para probar el rendimiento en CloudPanel. Se usa `webtest.agudeloabogados.com`, que estaba vacío. Oscar autorizó: descargar el paquete, guardar la llave SSH en el usuario del sitio, subir `max_execution_time` y reemplazar el `index.php` de prueba.

**Estado previo, comprobado:** el sitio de CloudPanel `webtest.agudeloabogados.com` (usuario `aaa-webtest`, mismo VPS 145.79.7.167, NGINX) solo tenía el `index.php` "Hello World" de CloudPanel. No tenía base de datos ni usuarios SSH/FTP. Ya tenía SSL de Let's Encrypt hasta el 18-ene-2027. El acceso a CloudPanel fue por el navegador integrado, con el inicio de sesión de Oscar.

**Hecho:**
- **CloudPanel:**
  - `max_execution_time` pasó de 1 a 5 min; PHP 8.4 y 512 MB quedaron como estaban.
  - La llave pública SSH (`uhura-aaa-web`) quedó en el usuario del sitio. Así se trabaja por SSH sin contraseñas.
  - Oscar creó la base de datos `webtest01aaa` con el usuario `webtest01` y él tiene la contraseña.
- **Paquete:** un Duplicator nuevo en el staging (`20261030_aaaestudiolegal`, 79,5 MB, con D182–D183). El servidor lo descargó directo desde el staging; no pasó por el equipo de Oscar.
- **Instalador de Duplicator:** validación completa en verde y 0 avisos. Oscar escribió la contraseña de la base de datos y luego inició sesión, y los archivos del instalador se borraron solos.
  - URL: `https://webtest.agudeloabogados.com`.
  - Ninguna referencia al dominio del staging quedó en el contenido.
- **Sin indexar:** "Disuadir a los motores" quedó activo (`blog_public=0`) y todas las páginas llevan `noindex, nofollow`.
- **Caché:**
  - Varnish activo en CloudPanel, con una vida de caché de 1 h mientras dure la revisión del cliente (CloudPanel trae 7 días), y su plugin "CLP Varnish Cache", autorizado solo para este sitio.
  - LiteSpeed Cache sigue minificando CSS y JS. En NGINX no hace caché de página.
  - La primera visita a cada página después de migrar provocó una purga, porque Rank Math procesa sus enlaces internos. Después Varnish sirve desde caché.
- **Revisado:**
  - Las 9 URL (5 páginas, blog, 2 legales y `/llms.txt`) responden 200.
  - Los formularios de Contacto y Trabaja cargan.
  - El log de PHP está vacío.
  - La portada se ve igual que en el staging.

**PageSpeed móvil en el servidor del cliente:**

| Página | FCP | LCP (staging de Hostinger → servidor del cliente) | CLS |
|---|---|---|---|
| Inicio | 1,1 s | 2,6 → 1,8 s | 0 |
| Metodología | 1,0 s | 2,6 → 1,8 s | 0 |
| Quiénes somos | 0,9 s | 2,7 → 1,8 s | 0 |
| Trabaja con nosotros | 1,0 s | 2,7 → 2,0 s | 0 |
| Contacto | 1,1 s | 2,2 → 1,1 s | 0 |

Rendimiento: 96 en Inicio y Metodología. Se cumple el criterio de T09: LCP menor de 2,5 s y CLS menor de 0,1 en las 5 páginas.

**Pendientes y avisos:**
- **Correo de los formularios:** el servidor envía con `sendmail`, pero el SPF del dominio no incluye 145.79.7.167, así que los correos pueden llegar a spam. Falta la cuenta SMTP de Google Workspace (mensaje al cliente) y autorizar un plugin de SMTP.
- **Restos del hosting anterior:** quedaron los mu-plugins de Hostinger (`hostinger-preview-domain`, `hostinger-auto-updates`, `local-by-flywheel-live-link-helper`) y dos plugins de Hostinger inactivos. En este servidor no hacen nada visible. Retirarlos es decisión de Oscar.
- **Paquetes en el staging:** los dos paquetes de Duplicator siguen en el staging, en `wp-content/duplicator-backups`. Se pueden descargar con su enlace secreto, sin iniciar sesión. Conviene borrarlos cuando ya no se necesiten (decisión de Oscar).
- **Paso a producción:** el sitio queda listo para la revisión del cliente. Antes de pasar a producción falta todo lo del mensaje de accesos: dominio final, respaldo, Search Console y fecha.

## Vacantes definitivas y enlace de ADY (D185, 2026-10-30)

**Pedido de Oscar:** poner el texto definitivo de las ofertas laborales que entregó el cliente, confirmar el enlace de ADY y borrar los paquetes de Duplicator del staging.

**Hecho:**
- **Enlace de ADY:** `https://adyapp.agudeloabogados.com/login` responde 200 con el título "ADY | AAA". Es el mismo que ya usa el botón "Nuestra plataforma" del encabezado (`parts/header.html`) y el evento `aaa_platform_click`. No hubo que cambiar nada, y deja de estar pendiente la URL externa de ADY.
- **Vacantes:** el tablero pasa de 4 cargos a los 3 del cliente, en su orden: Dependiente judicial, Abogado(a) junior y Abogado(a) senior.
  - Cada tarjeta lleva la descripción literal del cliente y los datos "Contrato: Término indefinido", "Horario: Lunes a viernes" y "Ubicación: Cali".
  - Los íconos son documento, reloj y ubicación.
  - Sale "Auxiliar jurídico".
  - Títulos en minúscula inicial, como el resto de títulos del sitio.
- **Formulario "Postulación" (CF7 106):** la lista "Cargo de interés" queda en Dependiente judicial / Abogado(a) junior / Abogado(a) senior / Otro. También se actualizó en `WORDPRESS-SETUP.md`.
- **Estilos:** el tablero queda en 3 columnas y en una sola por debajo de 860 px, con un nuevo párrafo `.job-card__summary`.
- **Dónde se aplicó:**
  - Repo: `patterns/trabaja-con-nosotros-full.php` y `assets/css/components.css`.
  - Staging: editor de temas, página 104 por REST (sin ediciones desde el 2026-10-15) y formulario 106 desde el editor de CF7. Correo y mensajes del formulario sin cambios.
  - webtest: por SSH + WP-CLI. Hay respaldo previo en `~/d185/` del usuario `aaa-webtest`.
- **Verificación:** en webtest se revisó a la vista en móvil y escritorio; en staging se revisó el HTML publicado y el CSS minificado de LiteSpeed.

**Paquetes de Duplicator del staging:** quedan 2, `20261030_aaaestudiolegal` (79 MB) y `20261016_aaaestudiolegal` (79 MB). Borrarlos es definitivo, así que el borrado lo hace Oscar desde Duplicator → Backups; queda la página abierta. Pendiente de confirmar.

## Sitio sin estilos en webtest: Varnish con HTML viejo (D186, 2026-10-30)

**Síntoma (Oscar, en Firefox):** webtest.agudeloabogados.com se veía sin diseño: menú en lista, logo e íconos gigantes.

**Causa:**
- En el servidor del cliente el HTML lo guarda **Varnish**.
- "Purgar todo" de LiteSpeed se ejecuta en cada guardado de contenido (D178) y en los cambios de tema. Esa purga borra los CSS/JS minificados (`/wp-content/litespeed/css|js/…`) y los regenera con otro nombre.
- Varnish no se enteraba y seguía sirviendo páginas, algunas con más de 1 h, que pedían los archivos borrados. Esos archivos daban 404, así que la página llegaba sin CSS.
- El cambio de vacantes (D185) disparó una de esas purgas. Inicio y Quiénes somos quedaron rotas, y después de la purga de prueba todas.
- El plugin CLP Varnish Cache solo carga sus clases dentro del admin. No vacía nada cuando se guarda por REST, por WP-CLI ni cuando la purga la hace LiteSpeed.

**Arreglo:**
- **Función nueva** `aaa_purge_varnish()` en `functions.php`, conectada a `litespeed_purged_all` y `litespeed_purged_all_cssjs`.
  - Si CLP Varnish Cache está activo, carga su clase y vacía Varnish por host y por la etiqueta del sitio.
  - En el staging de Hostinger no hace nada, porque allá no está ese plugin.
- **Dónde se aplicó:** en webtest por SSH, con el respaldo previo en `~/d185/functions.php.bak`; en staging desde el editor de temas; y en el repo.
- **Verificación:**
  - Vaciado inmediato: las 7 URL quedaron con `X-Cache-Age: 0` y 0 recursos CSS/JS rotos.
  - Prueba del caso automático: `do_action('litespeed_purge_all')` hizo 2 PURGE a Varnish (200), y las páginas volvieron a 0 recursos rotos.

**Ojo:** el comando `wp litespeed-purge all` de WP-CLI no ejecuta el gancho, porque manda la purga al servidor web. Si se usa por terminal, hay que vaciar Varnish también, desde CloudPanel → Varnish Cache → Purge, o con el botón de la barra del admin.

## Nueva foto del equipo de negociaciones en webtest (D187, 2026-11-03)

**Pedido de Oscar:** en https://webtest.agudeloabogados.com/quienes-somos/ reemplazar la foto del "Equipo de negociaciones" por la que envió: 4 integrantes sobre fondo blanco, 2000×1386.

**Hecho (solo en webtest):**
- **Imagen:** se convirtió a WebP (calidad 82, sin metadatos) y quedó en la Biblioteca como adjunto 257, `uploads/2026/11/equipo-negociaciones-aaa.webp`, con el texto alternativo "Cuatro integrantes del equipo de negociaciones de AAA Estudio Legal".
- **Página 101:** el bloque de imagen pasa del adjunto 209 al 257 y suma la clase `team-profile-pair__photo--grupo`. Respaldo previo en `~/d187/backup-101.html`.
- **Estilos:** nueva regla `.team-groups img.team-profile-pair__photo--grupo` en `components.css`: `object-fit: contain` sobre fondo blanco.
  - En el cuadro 1:1 de escritorio, recortar la foto habría dejado por fuera a las personas de los extremos. Así se ven las cuatro completas y el blanco se funde con el fondo de la foto.
  - En móvil el marco es 16:9 y se ven igual de completas.
- **Verificación:** al guardar, Varnish se vació solo (`X-Cache-Age: 0`) gracias a D186. Ningún recurso roto, y la revisión a la vista en escritorio salió bien.

**Pendiente:** el staging de Hostinger conserva la foto anterior. El adjunto 209 sigue en la Biblioteca de webtest y no se borró.

**Ajuste (2026-11-03, pedido de Oscar: "la imagen queda cortada abajo"):** la foto original corta a las personas a media pierna. Centrada con `contain`, quedaba una franja blanca debajo que hacía ver el recorte. Se agrega `object-position: center bottom` para que los cuerpos lleguen al borde inferior del marco. Revisado a la vista en escritorio (cuadro 1:1) y en móvil (16:9), sin recursos rotos.

## Fotos reales de los otros tres equipos en webtest (D188, 2026-11-05)

**Pedido de Oscar:** poner las otras tres fotos grupales en sus bloques del equipo en https://webtest.agudeloabogados.com/quienes-somos/ y comprimirlas.

**Hecho (solo en webtest):**
- **Correspondencia:** se usó el orden de envío, que es el mismo de la página.
  - Equipo jurídico: foto de 8 personas, adjunto 259.
  - Equipo administrativo: foto de 7 personas, adjunto 260.
  - Equipo de tecnología: foto de 10 personas, adjunto 261.
- **Compresión:** se recortó el blanco sobrante de los bordes (con un margen fino), se redujo a 1600 px de ancho y se pasó a WebP q80 sin metadatos. Los pesos pasaron de 223/253/190 KB a 56/58/51 KB. WordPress generó los tamaños intermedios, y el sitio sirve la versión de 1024 px o menor según la pantalla (`srcset`).
- **Página 101:** los tres bloques pasan de las fotos del tema (`assets/img/nosotros/equipo-*.webp`) a los adjuntos nuevos, con la misma clase `team-profile-pair__photo--grupo` de D187: completas, sobre blanco y ancladas abajo. Respaldo previo en `~/d188/backup-101.html`.
- **Verificación:** Varnish se vació solo, ningún recurso roto y las 4 fotos cargan. Revisado a la vista en escritorio (cuadros 1:1) y en móvil (16:9).

**Notas:**
- Las fotos son muy panorámicas (2,3 a 3,3:1). En el cuadro 1:1 de escritorio las personas se ven pequeñas, con blanco arriba. En móvil se ven bien.
- El staging de Hostinger conserva las fotos anteriores. Las fotos del tema no se borraron.

## Caja de luz para las fotos de los equipos y ajustes de móvil (D189, 2026-11-06)

**Pedido de Oscar:**
- Que las fotos de los equipos se amplíen a pantalla completa al tocarlas, en escritorio y en móvil.
- Corregir los detalles de móvil que mandó el cliente en un screenshot: texto poco legible en "Qué hacemos" de Inicio, la palabra "caso" sola en el botón del cierre, el énfasis del título de Contacto en el otro tono, y el enlace "Política de privacidad" del formulario, que no cargaba.

**Hecho (webtest + repo):**
- **Caja de luz** (Quiénes somos → equipos). Está en `main.js` con un `<dialog>` nativo, sin librerías.
  - Cada foto queda como botón accesible: se abre con clic, toque, Enter o Espacio, y tiene el `aria-label` "Ampliar foto: …".
  - Se carga la versión más grande del `srcset` (1600 px) y se muestra completa sobre fondo navy, con el texto alternativo como pie.
  - Se cierra con la ×, con Esc o tocando fuera; el foco vuelve a la foto y el scroll de la página queda bloqueado mientras está abierta.
  - Respeta `prefers-reduced-motion`. Sin JS las fotos quedan como antes.
  - Probado en 390 px y 1440 px.
- **Inicio, "Qué hacemos" (≤1023 px):** la capa navy sobre la foto pasa del 70 % al 86 %, y los textos a blanco 90–92 %. En móvil el texto va sobre toda la foto, y en la de cartera (foto clara) no se leía.
- **Botón del cierre (≤640 px):** `text-wrap: balance` y menos interletra. Ahora queda "Solicitar el / estudio de su caso", en lugar de "caso" sola.
- **Contacto:** el énfasis del título ("Nuestro equipo jurídico revisará su solicitud.") pasa de navy a cobre, como en el resto de títulos.
- **Formularios Contacto (115) y Postulación (106):**
  - El enlace apuntaba a `/politica-de-privacidad/`, que no existe (404). Ahora va a `/politica-de-tratamiento-de-datos-personales/` (página 237, responde 200).
  - El texto del enlace pasa a "Política de tratamiento de datos personales", que es el nombre de esa página. El resto de la autorización no cambió.
  - Se actualizó también en `WORDPRESS-SETUP.md`. Respaldo de ambos formularios en `~/d189/`.
- **Verificación:** 5 páginas con 0 recursos rotos y Varnish vaciado solo (D186).

**Pendiente:**
- El staging de Hostinger no tiene estos cambios.
- La opción de WordPress "Página de política de privacidad" sigue apuntando al borrador "Privacy Policy" (ID 3), que no se usa.

## Sección "La capacidad detrás de cada caso" compacta en el editor (D190, 2026-11-11)

**Pedido de Oscar:** en el editor de la página Inicio, la sección "La capacidad detrás de cada caso" obligaba a un scroll muy largo: las 6 tarjetas salían una debajo de otra, con cada foto a todo el ancho. Como el cliente va a editar ese contenido, se pidió que se viera más claro al editar.

**Causa:** todas las reglas de esa sección en `components.css` empiezan por `.home-page #confianza-heading`. `.home-page` es la clase que el tema pone en el `<body>` del Inicio público, y en el editor no existe. Por eso el editor cargaba el CSS del sitio pero la sección quedaba sin su grilla.

**Hecho (webtest + repo):**
- **`assets/css/editor.css`** (nuevo): se carga solo en el editor, con `add_editor_style()` después de `components.css`, y WordPress le antepone `.editor-styles-wrapper`, así que no llega al sitio público. Da a la sección la misma maqueta que tiene el sitio:
  - 3 columnas (2 por debajo de 1024 px y 1 por debajo de 600 px);
  - fotos en proporción 5:3 recortadas;
  - títulos y textos con el tamaño del sitio.
- **`functions.php`:** `add_editor_style()` ahora recibe las dos hojas.
- **Sitio público:** sin cambios. El Inicio responde 200, `php -l` está limpio y hay respaldo en `~/d190/`.

**Pendiente:** la verificación a la vista dentro del editor, que requiere sesión en WordPress. Otras secciones del Inicio con reglas `.home-page` pueden verse distintas en el editor; si Oscar lo nota, se suman a `editor.css`.

## Revisión de los cambios de Laura y ajustes posteriores (D191, 2026-11-23)

**Escaneo pedido por Oscar:**
- En el repo no hay cambios de nadie más.
- En webtest, **Laura Gomez** (usuario `Laura`, administradora, creada el 2026-11-17) editó el 2026-11-18 desde el editor:
  - fotos principales y de secciones de Inicio, Metodología, Quiénes somos y Trabaja con nosotros;
  - textos ampliados de las 3 vacantes;
  - 12 fotos subidas.
- Los archivos del tema no se tocaron.

**Problemas de esas ediciones, corregidos a pedido de Oscar (webtest + repo):**
1. **Fotos principales borrosas en pantallas grandes.**
   - Causa: al cambiar la foto desde el editor, el bloque queda vinculado a la Biblioteca (`wp-image-ID`), y WordPress le asigna después `sizes="(max-width: 1024px) 100vw, 1024px"`. Con eso el navegador descargaba la versión de 1024 px y la estiraba.
   - Arreglo: `aaa_image_dimensions()` en `functions.php` ahora también pone `srcset` (hasta 2560 px) y `sizes="100vw"` en la foto principal (`hero-shell__img`) cuando está vinculada. WordPress respeta ese srcset y ya no lo reemplaza.
   - Queda verificado en las 4 páginas.
2. **Fotos sin texto alternativo.** Se pusieron, en la página y en la Biblioteca, en las 2 fotos del Inicio (portada 272 y "Nuestro enfoque" 268) y en las fotos principales de Metodología (285), Quiénes somos (300) y Trabaja con nosotros (302).
3. **Fotos pesadas del Inicio.**
   - Portada: de 1279 KB a 70 KB.
   - "Nuestro enfoque": de 882 KB a 67 KB.
   - Se pasaron a WebP q80 sin metadatos, con el mismo nombre de archivo, y se regeneraron sus tamaños intermedios.
   - Los originales de 6240 px de las otras fotos de Laura siguen en el servidor. No se sirven a los visitantes, porque se usan las versiones reducidas.

**Animación de entrada más notable (pedido del cliente, 2,5 s propuestos por Oscar):**
- El preloader pasa de ~0,95 s a 2,5 s: las tres A (0–1,16 s), "Estudio Legal" (0,75–1,45 s), el logo sostenido y el fundido (1,95–2,5 s).
- Se movieron igual las esperas que dependen de él: el isotipo del encabezado (`components.css`), y `introDelay` en `main.js` (1950 ms) y en `home-motion.js` (1,95 s). La retirada de respaldo del preloader pasa a 3,2 s.
- Sigue apareciendo solo en la primera página de la sesión y nunca con movimiento reducido.
- Verificado en el navegador: tiempos correctos y logo completo a 1,6 s.

**Respaldo:** `~/d191/` en webtest (archivos del tema, fotos originales y contenido previo de las páginas 82, 97, 101 y 104). Todo se aplicó con `php -l` limpio y sin recursos rotos. El staging de Hostinger no tiene estos cambios.

## Ajustes del cliente antes del cierre: logos y tarjetas de equipo (D192, 2026-11-25)

**Origen:** mensaje de Paola Monsalve (cliente) para Laura, reenviado por Oscar, con el orden de los logos.

**Hecho en webtest:**
- **"Organizaciones que confían en nosotros"**
  - Los logos ya no se detienen al pasar el cursor: se quitó `animation-play-state: paused` en hover.
  - La grilla se rehízo con los 5 grupos del documento y en su orden:
    - Sector financiero: BBVA, GNB Sudameris.
    - Sector solidario: Promédico, Fetrabuv, Fonalianza, Nuestro Fondo, Femcristar, Coopunidos.
    - Organismos públicos: Metro Cali, Gobernación del Valle.
    - Sector real: Constructora Meléndez, El Gran Langostino, K-Listo, Ma. Isabel, Neat.
    - Cajas de compensación familiar: Comfandi.
  - Se usaron los 16 bloques de logo existentes, sin cambios.
  - **Faltan los archivos de 16 logos del documento:** Banco de Occidente, Banco Unión, Ban100, Fenalco, Juriscoop, Fedejohnson, Creciat, Emcali, Hero Motos, Colombina, Recamier, BAT, Aldor, Trolli, Eurobelleza e IGT. Se agregan cuando el cliente los envíe.
- **Equipo (Quiénes somos)**
  - Cada equipo queda como una sola tarjeta horizontal: 2×2 en escritorio (proporción 12:5) y 1 por fila en móvil (2:1).
  - El frente no cambia (nombre y rol).
  - El reverso muestra la foto del equipo con un pie de foto con su nombre. Se gira con hover, o con "Ver equipo" en táctil.
  - Salió la foto suelta de al lado y el texto de funciones del reverso. Ese texto queda en el respaldo `~/d192/backup-101.html` por si se quiere recuperar.
  - **Fotos al mismo tamaño:** las 4 se pusieron en un lienzo idéntico de 2320×800, con el grupo apoyado abajo y a la misma altura (672 px). Negociaciones y administrativo van al 86 % y al 92 %, porque esas fotos cortan más arriba del cuerpo; así las cabezas quedan parejas. Son los adjuntos 340–343, de 29 a 81 KB.
  - La caja de luz (D189) funciona también sobre la foto del reverso.
  - En móvil, el isotipo de fondo del frente se achica para no rozar el nombre.
- **Código** (`components.css`, `main.js`): nuevo bloque CSS D192, el botón pasa a "Ver equipo", y la caja de luz toma también `img.team-flip-card__photo`.
- **Verificación:**
  - Revisado a la vista en escritorio (1440 px) y en móvil (375 px).
  - La pista de logos sigue en `running` con el cursor encima, y no hay recursos rotos en Inicio ni en Quiénes somos.
  - Antes de guardar se comprobó que nadie más estuviera editando: Laura y Nayeliz habían editado ese día, pero ninguna tenía la página abierta.

**Nota:** el contenido vivo de las páginas es la fuente de verdad (sitio administrable, D159–D170). Los patterns del repo no se actualizaron con esta reorganización de contenido; el CSS y el JS sí.
