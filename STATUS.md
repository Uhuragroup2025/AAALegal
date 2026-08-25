# STATUS.md — Estado del proyecto y síntesis de insumos

> Actualizado: 2026-08-25 (D93) · **C0 = APROBADO** · **C1 = APROBADO (narrativa + copy, v1 y v2)** · **C2 = CANDIDATO A REVISIÓN (iteración 27 — retícula uniforme de confianza; + ronda de correcciones SEO, D27; + ajuste de eyebrow/registro tú-usted en Situaciones, D28; + homogenización a "usted" en las 8 páginas, D29; + tipografía Big Caslon/Krub del manual de marca, D30; + se retira CTA redundante en Situaciones, D31; + Servicios § "Nuestra metodología" vuelve a su diseño original de 2 columnas sin scroll y con menos espacio (D33, reemplaza D32 — el flujograma no se conservó); + menú: sin selector de idioma, CTA "Mi caso" (después revertido a "Contacto" por D36, y de vuelta a "Mi caso" por D42), logo real unificado en las 7 páginas (D34); + Home: Sectores de experiencia antes que Casos de éxito (D35); + reestructuración del menú principal — Blog oculto y reemplazado por "Trabaja con nosotros", Servicios→"Metodología", Nuestro Equipo→"Quiénes somos" (D36); + Home: se quitan Logos clientes y las pills del equipo, el texto de Dimensión humana pasa antes que la foto (D37); + Sectores de experiencia rediseñado con logos placeholder de clientes por sector, en grilla estática (D38); + se corrige el desborde de Sectores de experiencia al margen total de la página y se agrega el carrusel móvil que ya usan Situaciones/Casos de éxito (D39); + Dimensión humana: pequeño espacio entre "Conozca nuestra experiencia →" y la foto (D40); + nueva sección "En cifras" con contador animado bajo Sectores de experiencia, valores placeholder (D41); + el texto del botón destacado del header vuelve de "Contacto" a "Mi caso" en las 7 páginas (D42); + hero de Home: se quita el botón secundario "Conozca cómo lo hacemos" y el botón primario ahora hace scroll a "Cómo intervenimos" en vez de ir a la página de contacto (D43); + hero de Home: el texto del botón único cambia a "Conozca cómo lo hacemos"; se reduce el espacio entre título y cards en Situaciones (D44); + los títulos de las tarjetas en Sectores de experiencia y ¿Por qué AAA? pasan de la serif de display a Krub bold (D45); + "¿Por qué AAA?": se reduce el tamaño de los títulos de tarjeta de 1.5rem a 1.3rem, el texto quedaba casi pegado al borde inferior tras pasar a Krub bold (D46); + Home § "Cómo intervenimos": la descripción de cada bloque solo aparece con hover, complementando el efecto ya existente (D47); + Servicios § "Nuestra metodología" se rediseña a flujograma horizontal de 3 nodos conectados sin scroll, pedido nuevo del cliente — reemplaza D33 solo en esta sección, descripciones solo con hover como en D47 (D48); + en el flujograma, ícono al lado izquierdo del título en mobile/tablet ≤800px, en vez de encima, para ahorrar espacio (D49); + en el flujograma, se quita la línea divisoria horizontal entre pasos en mobile/tablet y se reemplaza por la misma flecha de desktop, rotada 90° apuntando hacia abajo (D50); + Home § "¿Por qué AAA?" se reordena y amplía de 5 a 6 atributos (Infraestructura para atención masiva, Equipo especializado, Tecnología (ADY), Seguridad de la información, Compliance, Cobertura nacional), se retira "Representación exclusiva del acreedor", grilla simplificada a 6→3→2 columnas con color alternado en ciclo de 3 (D51); + en desktop, esa misma grilla pasa de 6 columnas en una fila a 3+3 — el título más largo no cabía sin desbordarse (D52); + se reduce el espacio en blanco de cada tarjeta — ícono y título agrupados arriba en vez de estirados a los extremos, alto de card 220px→160px en las 4 vistas responsive (D53); + Sectores de experiencia: ícono + nombre centrado en cada tarjeta (D54); + header full-width de Home replicado idéntico en las 7 páginas reales, reemplaza la píldora flotante de las páginas interiores, revierte esa parte de D34 (D55); + Sectores de experiencia: cada chip de logo lleva una marca abstracta genérica de ejemplo (D56); + el header queda siempre alineado con el texto del hero/título en cualquier ancho de pantalla — header y hero pasan a usar `--container-padding`/`--container-max`; el hero de foto completa de Servicios/Contacto se acota también (confirmado con el Owner), Home no se ve afectada (D57); + Sectores de experiencia: los 12 chips placeholder de D56 se reemplazan por los 15 logos reales de clientes actuales de AAA (aportados por el Owner) — mapeo sector↔cliente confirmado por el Owner para 8, delegado a nuestro criterio para 6 sin encaje sectorial obvio (Neat, Nuestro Fondo, Constructora Meléndez, El Gran Langostino, Ma. Isabel, K-Listo); logos movidos a `assets/img/` plano, `.sector-card__logo` pasa de chip-con-texto a solo imagen (D58); + se quita la línea divisoria entre header y logos, y los logos suben de 40px a 64px de alto — se veían muy pequeños incluso en desktop (D59); + los logos suben otro poco, de 64px a 76px de alto — ajuste fino a pedido del Owner tras ver D59 en vivo (D60); + corrección de un valor de más, 76px→75px (D61); + se crean 2 sectores nuevos ("Construcción e inmobiliario": Constructora Meléndez, Neat; "Comercio y consumo": El Gran Langostino, Ma. Isabel, K-Listo) para los 5 logos que no encajaban bien en los 6 sectores originales de D58 — el sitio pasa de 6 a 8 sectores, párrafo de intro actualizado (D62); + Femcristar pasa de Solidario a Financiero, instrucción directa del Owner (D63); + "¿Por qué AAA?": las 6 tarjetas pasan a formato casi cuadrado y la fila de abajo (Seguridad de la información, Compliance, Cobertura nacional) invierte el orden de color respecto a la fila de arriba — azul oscuro, azul claro, blanco (D64); + se revierte D64 — las cards vuelven a rectangulares, con menos espacio vacío abajo y a la derecha del título, se quita el `max-width:13ch` del título (D65); + "En cifras": se quita la leyenda "Cifra de ejemplo — pendiente de dato aprobado por el cliente" (confirmado con el Owner que entiende el riesgo) y se agrega un ícono por tarjeta encima del número — carpeta, persona, flecha ascendente (D66); + Footer: se agrega la columna "Sitio" entre Contacto y Redes sociales (4 columnas en vez de 3) y se replica idéntico en las 7 páginas reales, reemplazando el footer simple de las 6 páginas interiores — mismo patrón que el header en D55 (D67); + corrige un bug de D67: el heading "Sitio" se veía gigante solo en Home por una regla genérica de tamaño de h2 que no debía aplicarle — se excluye la sección del footer de esa regla (D68); + Servicios § "Nuestra metodología": la descripción de los 3 pasos del flujograma queda siempre visible en desktop (antes solo con hover), y los nodos se alinean con el margen izquierdo del eyebrow/título (D69); + Servicios § "Nuestros servicios": el recuadro de imagen de los 3 bloques baja de 280px a 220px de alto mínimo, aceptando que quede cuadrado — se veía demasiado alto (D70); + corrige D70: el min-height no tenía efecto real (`.media-placeholder` fija `aspect-ratio:4/5` con más peso) — se agrega `aspect-ratio:1/1`, ahora sí queda cuadrado (320×320px) (D71); + nueva página `trabaja-con-nosotros.html`: "Nuestro equipo" y "Postulación" se mueven ahí desde `nuestro-equipo.html`, sin cambios de copy, con header/footer idénticos a las otras 6 páginas — el 4º ítem del menú deja de ser un ancla y pasa a apuntar a la página real (D72); + Servicios § "Transparencia" reusa el diseño de Home § "¿Qué hace AAA?"; se quita "¿Su empresa tiene un crédito en riesgo...?" y se reemplaza por el cierre real de Home, "Conversemos sobre su caso." (D73); + corrige D73: el cierre no coincidía visualmente con el de Home (degradado, halo, botón, tamaño de h2) — nuevo modificador `.cierre-grid--global`, sin tocar la tarjeta propia de Captación B2B (D74); + Quiénes somos: "¿Quiénes somos?" recicla el diseño de Home § "¿Qué hace AAA?" para corregir el desajuste de márgenes; "Filosofía" pasa de texto plano a 3 tarjetas de atributo; se retira el cierre de LinkedIn/Instagram (D75); + se quita el aviso de founders pendientes; se normaliza `.text-gradient` en todo el sitio al color dorado sólido de Home, quitando el degradado no aprobado por el cliente (D76); + se agrega el énfasis en cursiva dorada a los heroes de Quiénes somos y Trabaja con nosotros (criterio de estilo para páginas futuras); en Metodología, "su crédito?" se une con nbsp para quedar siempre en el mismo renglón (D77); + segundo rediseño de Filosofía (las 3 tarjetas de D75 no convencieron, ahora foto + tarjeta sólida con ícono, `.cierre-grid`/`.cierre-card`); se corrige el tamaño del H1 de Quiénes somos/Trabaja con nosotros a 48px, igual que Inicio/Metodología (D78); + Sectores de experiencia: se ensancha la columna derecha del encabezado; se fusionan Financiero+Fintech y Salud+Cajas de compensación — el sitio vuelve a 6 tarjetas en vez de 8, conservando los íconos de Financiero y Salud (D79); + los títulos de las 6 tarjetas bajan un punto de tamaño, a 1.3rem fijo (D80); + los logos de cliente suben un poco más de tamaño, de 75px/190px a 85px/210px (D81, 2026-08-21); + Metodología § "Nuestros servicios" pasa del layout horizontal de 3 bloques a una grilla de 3 columnas tipo blog card (imagen → eyebrow → título → texto), reutilizando `.surface-solid` para conservar el mismo efecto hover del resto del sitio (D82, 2026-08-25); + esa misma sección pierde el fondo con halos difuminados ("atmósfera") y queda sólido #F5F3EE, el mismo tono que ya usaba el fondo base del sitio (D83, 2026-08-25); + en esa sección, los títulos de tarjeta pasan de la serif de display a Krub bold (mismo criterio de D45/D46, evita negrita sintética) y los párrafos bajan de 17px a 15px, corrigiendo que el párrafo se viera más grande que el título (D84, 2026-08-25); + esas mismas 3 tarjetas pierden el brillo radial azul y el borde azul claro del hover, conservando el desplazamiento hacia arriba y la sombra (D85, 2026-08-25); + "Nuestra metodología" (el flujograma de 3 nodos) gana un efecto de entrada al scroll (staggered, vía `.reveal`) y un efecto hover (borde/ícono/título en acento claro + elevación) — se sentía "muy plana" (D86, 2026-08-25); + la sección final de cierre ("Conversemos sobre su caso.") pierde el fondo con halos difuminados y queda sólido #F5F3EE, mismo fix de D83, sin tocar el degradado navy propio de la tarjeta (D87, 2026-08-25); + en Quiénes somos, "¿Quiénes somos?" pasa a fondo #F5F3EE (texto adaptado vía tokens del sitio) y su eyebrow cambia de "Quiénes somos" a "Origen"; Filosofía se rediseña reutilizando el mismo elemento invertido (foto izquierda/texto derecha) y gana un CTA "Hablemos de su caso" (D88, 2026-08-25); + en Trabaja con nosotros, "Nuestro equipo" reutiliza ese mismo bloque "Origen", invertido (foto izquierda/contenido derecha), sin CSS nuevo (D89, 2026-08-25); + esa misma sección pierde el aviso "Contenido pendiente del cliente" — mismo criterio que D76, el vacío documentado sigue vigente (D90, 2026-08-25); + el eyebrow de "Nuestro equipo" cambia a "Equipo por función", repetía el título (D91, 2026-08-25); + nueva sección "Personas, no procesos" con 8 tarjetas flip (imagen+nombre+cargo al frente, descripción de funciones al reverso por hover real o click/tecla), referente ngds.ai/es solo en el patrón de interacción, contenido de las 8 tarjetas placeholder explícitamente autorizado por el Owner (D92, 2026-08-25); + corrección: solo 4 de las 8 tarjetas llevan foto+flip (las 4 personas), las otras 4 son fotografías simples intercaladas sin flip, y se corrige un bug de texto en espejo en el reverso agregando `visibility` como respaldo de `backface-visibility` (D93, 2026-08-25), ver abajo)** · Decisiones vigentes hasta D93; el sitio pasa de 7 a 8 páginas reales (D72). La paleta reducida alineada con marca (D26) reemplaza D22/D23 y sigue aplicada en todo el prototipo; **la tipografía de D26 (Playfair Display/Instrument Sans) fue reemplazada por D30** (Libre Caslon Display/Text + Krub, fiel al manual de marca). La Home incorpora además la traducción compositiva completa registrada en la iteración 15, la escala editorial refinada desde la iteración 16, los ajustes de ritmo/iconografía/header/evidencia hasta la iteración 27, y el copy corregido por SEO (D27–D29, 2026-08-10).

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
