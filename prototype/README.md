# Prototipo C2 — AAA Estudio Legal

> Candidato para QA de Content → consolidación de Product Lead → **Gate 1 (cliente)**. **Estado: candidato a revisión, no aprobado.**
> Alcance: **Inicio** (`index.html`) + **Capacidad Técnica** (`servicios.html`), navegables entre sí.
> Las demás páginas del sitemap (Nuestra Experiencia, Nuestro Equipo, Talento AAA, Noticias y Análisis, Página Legal) apuntan a `proximamente.html` — no están construidas todavía (no forman parte de este C2, ver [PROJECT.md](../PROJECT.md) → Ficha C1).
> La página de Captación de Empresas (D11) **no se incluyó**: no está confirmada contractualmente y construirla habría ampliado alcance sin autorización (condición de parada, AGENTS.md).
> Cómo ver el prototipo: abrir `prototype/index.html` directamente en un navegador (no requiere servidor). Comparación tipográfica: `prototype/type-lab.html`.

## Iteración 2 (2026-07-29) — profundidad visual

La primera versión de este prototipo (iteración 1) se sintió **plana y repetitiva**: secciones resueltas casi siempre como "cuadrícula de 3–4 tarjetas idénticas", sin variación de peso visual, sin capas, con ritmo casi monótono entre secciones. Causas concretas identificadas:

1. Un único tipo de tarjeta (`.focus-card`) se repetía en todas partes — nunca alternaba con superficies de otro peso (vidrio, foto, editorial simple).
2. El hero era un grid de 2 columnas plano — sin profundidad de capas, sin elemento que se superpusiera a otro.
3. Nada conectaba visualmente una sección con la siguiente — cada `.section` era un bloque de color sólido aislado, sin atmósfera ni continuidad.
4. No había ningún momento de énfasis tipográfico — todos los títulos tenían el mismo tratamiento, sin jerarquía de "mensaje hero" vs. "título de sección".
5. El movimiento se limitaba a un fade-in genérico — no había ritmo (stagger), ni un gesto de marca en el header, ni contenido explorable (rail).

Esta iteración reinterpreta principios de **REF-BIOFARMA** (https://biofarma.com.ar/ — ver [REFERENCES.md](../REFERENCES.md) § "Referente de profundidad visual" para el detalle completo de qué se tomó y qué no) para resolver estas cinco causas, sin copiar su identidad, paleta, fotografías ni estructura literal. Ver § 1.1 más abajo.

---

## 1. Dirección — qué principio viene de qué referente

No se mezclan los tres referentes visuales con el mismo peso (regla explícita de REFERENTS.md). Cada uno aporta una función distinta:

| Referente | Qué se tomó | Dónde se aplicó en este prototipo | Qué se dejó fuera deliberadamente |
|---|---|---|---|
| **01 — Autoridad** (`REFE_VISUAL_1.jpg`) | Hero oscuro con retrato protagonista; cards editoriales para servicios con distinto peso; alternancia de módulos oscuros/claros como ritmo de marca | Hero de Inicio y Capacidad Técnica (`.hero`, `data-surface="dark"`); grid de los 4 focos (`.focus-grid`); alternancia dark/muted/light entre secciones | **Indicadores/cifras** (años, casos, %) — no hay ninguna cifra real aprobada todavía (ver STATUS.md → vacíos); inventarlas está prohibido. Se sustituyó por contenido cualitativo (chips de sectores, sin números) |
| **02 — Sistema modular** (`REFE_VISUAL_2.jpg`) | Retícula modular, cards con un elemento destacado en oscuro, hover states claros, lenguaje digital sin perder seriedad | `.focus-grid` (4 cards, una en `--emphasis`), `.btn` con estados hover/focus/active, navegación clara y persistente | Composiciones tipo "bento" muy fragmentadas — se mantuvo una retícula simple de 3–4 columnas para no restar seriedad institucional (riesgo explícito del referente) |
| **03 — Elegancia institucional** (`REFE_VISUAL_3.jpg`) | Transición curva entre hero y contenido como gesto de marca recurrente; paleta cálida y dorado opaco (nunca metálico/brillante); espacio en blanco generoso | `.curve-divider` (SVG estático) al final de cada hero; dorado (`--color-gold-100/200`) reservado a acentos de texto/borde, nunca como fondo sólido con texto encima | Hero fotográfico real con tratamiento cinematográfico — no hay fotografía institucional entregada todavía; se usa un **placeholder explícito**, no una imagen de banco (regla: no comprar banco de imágenes, no inventar contenido) |
| **OlarteMoure / Kreisson / Sheff&Cook** (storytelling en scroll) | — | **No aplicado en este C2** | Ver § 5 Animaciones — decisión explícita de no implementar scrollytelling/sticky-crossfade en Inicio/Capacidad Técnica; ver justificación de C2 abajo |

**Consistencia con el manual de marca:** los colores (`#063B59` navy + gama dorada `#ECBC8A/#CB9576/#CA916F`) y tipografías (Big Caslon serif, Krub sans) se tomaron del manual sin modificarlos — la dirección visual arriba solo define *cómo se componen*, no *qué colores/fuentes* se usan (D1: el manual no se reemplaza, se moderniza su aplicación).

**Criterios de marca candidatos (D6)** — propuestos aquí, sujetos a validación en este mismo prototipo, no aprobados como reglas de fondo:
- Dorado nunca como relleno con texto blanco encima (falla contraste, ver § 6) — solo como texto/borde/ícono sobre navy, o como texto navy sobre superficie clara.
- El gesto de la curva (`.curve-divider`) se propone como transición de marca recurrente entre hero y contenido, no como adorno de una sola página.
- Fotografía pendiente: mientras no llegue material real, se usa un placeholder consistente (patrón diagonal + etiqueta), nunca fotografía de banco genérica.

### 1.1 Qué se tomó de REF-BIOFARMA y cómo se adaptó

| Principio observado en REF-BIOFARMA | Reinterpretación en este prototipo |
|---|---|
| Hero contenido en un bloque único redondeado, con capas (foto + overlay + contenido) | `.hero-shell`: foto de fondo (placeholder) + `.hero-shell__scrim` (degradado navy) + `.hero-shell__content` superpuesto — nunca fotografía real del referente |
| Banda de tarjetas superpuesta al borde inferior del hero | `.credibility-band`: 4 tarjetas de vidrio con `margin-top` negativo, contenido 100% real (enfoque en el acreedor, ADY, presencia nacional, ISO 27001) — **sin cifras**, a diferencia del referente |
| Fondo "nebulosa" continuo entre secciones | `[data-surface="atmosphere"]` + `.atmosphere` (halos difuminados en dorado/azul frío/navy, muy baja opacidad) |
| Texto con degradado en un mensaje narrativo | `.text-gradient`, aplicado exactamente 2 veces en todo el sitio (un H1 por página) — nunca en párrafos ni navegación |
| Mosaico de fotografías con tamaños distintos | `.focus-mosaic`: retícula asimétrica de 12 columnas, con una card destacada de doble alto |
| Tarjetas de vidrio alternadas con sólidas | `.surface-glass` / `.surface-solid` / `.surface-visual` conviviendo en la misma sección |

**No adoptado:** paleta rosa/violeta saturada, logotipo/iconografía, carrusel de logos de marcas de terceros, cualquier cifra mostrada en las tarjetas del referente.

---

### 1.2 Dirección cromática — ✅ Decisión D23 (Owner, 2026-07-29): reemplazo de paleta

> **Historial:** esta sección documentaba 3 alternativas que solo *expandían* el navy/dorado del manual de marca (candidata B aplicada como acento adicional, sin tocar el navy/dorado institucional). El Owner confirmó explícitamente **reemplazar** esa paleta — no expandirla — por una nueva dirección turquesa/teal. Ver PROJECT.md → Decisiones D23. A diferencia de D22 (tipografía, dentro de la libertad de modernización de D1), esto es un cambio de identidad de color que **no** estaba en el manual de marca — queda registrado como decisión de prototipo, pendiente de validación de Product Lead/cliente antes de considerarse la nueva identidad definitiva.

| Token | Valor | Rol |
|---|---|---|
| `--color-navy-deep` | `#04445F` | Fondo profundo / navegación oscura (reemplaza `#063B59`) |
| `--color-accent-main` | `#189AB4` | Acento principal / interacción (reemplaza el dorado medio) |
| `--color-accent-light` | `#74E7DA` | Acento sobre fondo oscuro — 7.1:1 sobre navy-deep (reemplaza el dorado claro) |
| `--color-surface-soft` | `#D4F2F4` | Fondos suaves / tarjetas claras (reemplaza el gris de marca) |
| `--color-ink-dark` | `#101820` | Texto sobre superficies claras |
| `--color-surface-light` | `#F7F8F5` | Fondo general claro |

Los nombres de variable antiguos (`--color-navy-900`, `--color-gold-100/200/300`, `--color-gray-100`, `--color-ink`) se conservan en `tokens.css` como **alias** remapeados a esta paleta — así las ~50 reglas de `components.css` ya construidas en las iteraciones anteriores no necesitaron reescribirse una por una.

**Ajustes de contraste respecto a los valores de referencia** (verificados con la fórmula de luminancia relativa, no a ojo):
- Foco (`--color-focus-ring`) reasignado de accent-light a **accent-main** — accent-light da 7.1:1 sobre navy-deep pero solo 1.5:1 sobre blanco (falla el mínimo de 3:1 para indicadores no textuales); accent-main cumple 3:1 en ambos fondos (~3.2 y ~3.3).
- Se añadió `--color-accent-main-strong` (`#106475`, variante oscurecida) para texto pequeño sobre fondo claro — accent-main puro da solo 3.3:1 sobre blanco, insuficiente para texto normal (necesita 4.5:1); la variante oscurecida da 6.8:1.
- Opacidad del vidrio del header ajustada de la referencia (0.85) a **0.88** — a 0.85 el contraste del texto blanco caía a ~4.3:1 en el peor caso (sección clara detrás), por debajo del mínimo AA (4.5:1).

---

### 1.3 Tipografía de títulos — ✅ Decisión D22 (Owner, 2026-07-29): Space Grotesk

Comparación completa conservada en **`prototype/type-lab.html`** (H1 de hero, título narrativo grande, título de página interior), con la opción aprobada marcada. El Owner aprobó la **alternativa C — Space Grotesk** como fuente de títulos (H1–H4 y marca), reemplazando a Big Caslon. Krub **no cambia** — sigue siendo la fuente de cuerpo de texto/UI.

| Alternativa | Personalidad | Razón | Combina con | Estado |
|---|---|---|---|---|
| Conservar Big Caslon | Serif clásica institucional | Ya estaba en el manual | Krub | Descartada (D22) |
| A — Fraunces | Serif editorial cálida, contemporánea | "Editorial premium", sin caer en lo genérico | Krub | Descartada (D22) |
| B — Newsreader | Serif literaria serena, nativa de pantalla | Reducía el riesgo de licencia de Big Caslon | Krub | Descartada (D22) |
| **C — Space Grotesk** | Sans geométrica técnica | Refuerza el pilar "solidez con tecnología" (ADY) | Krub (cuerpo de texto sin cambios) | **✅ Aprobada (D22)** |

**Implementación:** token `--font-display` en `tokens.css` (antes `--font-serif`) — actualizado en `base.css` (`h1,h2,h3,h4`), `.brand` y `.focus-card__index` en `components.css`. Fuente cargada vía Google Fonts (`Space+Grotesk:wght@400;500;600;700`) junto a Krub en `index.html`, `servicios.html` y `proximamente.html`.

**Riesgo aceptado conscientemente (registrado en el comparativo, no ignorado):** Space Grotesk es la alternativa que más se aleja del carácter "jurídico clásico" — el Owner la aprobó explícitamente priorizando el pilar de marca "solidez con tecnología" sobre la estética serif tradicional. Si en la práctica del prototipo (Gate 1) se percibe demasiado "startup" para una firma legal, es una decisión reversible (un solo token) — no bloquea seguir adelante.

---

## 2. Foundations y tokens (`css/tokens.css`)

Mapeo directo a `theme.json` cuando se implemente el block theme:

| Token CSS | Mapea a (theme.json) | Valor / fuente |
|---|---|---|
| `--color-navy-900`, `--color-gold-100/200/300`, `--color-gray-100`, `--color-white` | `settings.color.palette` | Manual de marca (STATUS.md → Hechos confirmados), sin modificar |
| `--font-display`, `--font-sans` | `settings.typography.fontFamilies` | Space Grotesk (Decisión D22 — títulos), Krub (cuerpo de texto) — ambas Google Fonts de uso libre, sin riesgo de licencia |
| `--text-xs` … `--text-3xl` | `settings.typography.fontSizes` | Escala modular propia, no de un referente |
| `--space-1` … `--space-32` | `settings.spacing.spacingSizes` | Escala de 4px |
| `--radius-sm/md/container/lg/xl/pill` | `custom.radius` (vía `theme.json` `custom`) | `--radius-container` (20px) es el nuevo estándar de contenedores principales (18–24px, § esta iteración); `--radius-xl` (40px) se reserva a paneles fotográficos grandes (hero) |
| `--shadow-sm/md/lg`, `--glass-shadow`, `--glass-highlight` | `custom.shadow` | Suaves, nunca duras (Ref. 02); `--glass-*` añade el reflejo/sombra de las superficies de vidrio (§ 8 del encargo) |
| `--gutter-mobile/desktop`, `--container-padding` | `settings.spacing` | Gutter fluido con `clamp()` entre 1rem (mobile) y 2rem (desktop) — no un salto brusco |
| `--space-section`, `--space-section-mobile` | `settings.spacing.spacingSizes` | Ritmo entre secciones fluido: ~96–160px desktop, ~64–96px mobile (`clamp()`) |
| `--color-accent-cool-100/200`, `--color-surface-atmosphere`, `--halo-gold/cool/navy` | `settings.color.palette` (candidatos, dirección B — ver § 1.2) | Expanden la paleta institucional, no la reemplazan |
| `--glass-bg`, `--glass-border`, `--glass-blur` | No tiene equivalente en theme.json — vive en el CSS del tema | Superficies translúcidas (§ 8 del encargo) — ver riesgo de soporte de navegador en § 7 |
| `--motion-*`, `--motion-entrance`, `--motion-stagger-step`, `--reveal-distance`, `--parallax-distance` | No tiene equivalente directo en theme.json — vive en el JS/CSS del tema | Hovers/estados 200–600ms, entradas 550–900ms. Se anula completamente bajo `prefers-reduced-motion` (ver § 5) |

No se usó ninguna clase utilitaria tipo Tailwind — todo el CSS lee de estas variables, consistente con la restricción ya vigente (AGENTS.md, Marco técnico). No se instaló ninguna dependencia nueva (GSAP, AOS, Lenis, etc.) — todo el movimiento es CSS + `IntersectionObserver` nativo.

---

## 3. Inventario de componentes

Cada componente está pensado como un **pattern** o **template part** independiente — no como HTML monolítico por página.

| Componente | Archivo/clase | Candidato WordPress | Contenido dinámico esperado |
|---|---|---|---|
| Header / navegación (sticky con glass) | `.site-header`, `.nav` | Template part `header.html` | Logo, enlaces de menú (core Navigation block), CTA principal |
| CTA principal (ADY) | `.btn.btn--primary` | Pattern reutilizable (core Button, variación registrada) | Texto del botón + URL externa (pendiente) |
| Hero inmersivo (capas) | `.hero-shell`, `.hero-shell__media`, `.hero-shell__scrim`, `.hero-shell__content` | Pattern `hero-inmersivo` (Group con Cover interno o Group anidado) | Eyebrow, H1 (con posible `.text-gradient` en una frase), subhead, foto de fondo, CTA |
| Banda de credibilidad | `.credibility-band` + `.credibility-card` | Pattern `banda-credibilidad` sobre core Columns/Group | 4 elementos cualitativos de confianza (icono + texto corto) |
| Atmósfera de fondo | `[data-surface="atmosphere"]` + `.atmosphere` | `custom.background` en el pattern de sección — no es contenido, es decorativo (`aria-hidden`) | — |
| Superficie de vidrio | `.surface-glass` | Variación de bloque Group (fondo + borde + `backdrop-filter`) | Cualquier contenido — requiere fondo con atmósfera detrás para verse |
| Superficie sólida | `.surface-solid` | Variación de bloque Group (ya existía como `.focus-card`) | — |
| Superficie visual (foto + caption) | `.surface-visual` + `.surface-visual__caption` | Pattern sobre core Cover | Imagen (`IMG-xx`, ver `IMAGE-BRIEF.md`) + título corto |
| Mosaico asimétrico de los 4 focos | `.focus-mosaic` | Pattern `mosaico-focos` sobre core Group con layout tipo Grid (spans manuales) | 4 focos — 1 vidrio destacado + 1 sólida + 1 visual + 1 sólida |
| Texto en degradado | `.text-gradient` | Clase de bloque / estilo de bloque registrado — **máx. 2 usos en todo el sitio** | Frase corta dentro de un H1 |
| Rail arrastrable | `.rail` + `js/main.js` (pointer events) | Pattern con overflow-x — no requiere bloque nuevo | Lista de chips/tarjetas (sectores, capacidades) |
| Placeholder de fotografía | `.media-placeholder` | Solo de prototipo — en producción es una imagen real (core Image) | — (se retira cuando llegue material real, ver `IMAGE-BRIEF.md`) |
| Bloques de servicio editorial (variados) | `.service-block__tag` + `.surface-glass`/`.surface-visual`/texto simple | 3 patterns distintos, no uno repetido | Tag, título, 1–2 párrafos — cada bloque con tratamiento propio |
| Franja de sectores | `.sector-chip` (ahora dentro de `.rail`) | Pattern simple sobre core Group | Lista de sectores (texto, sin logos) |
| Nota ADY (transparencia de prototipo) | `.ady-note` | **No pasa a producción** — es explicativa de este prototipo | — |
| Footer | `.site-footer` | Template part `footer.html` | Dirección, correo, navegación de sitio, legal |
| Aviso de cookies | `.cookie-banner` | Pattern o snippet vía GTM/plugin de consentimiento | Texto del aviso, enlace a política |
| Divisor curvo | `.curve-divider` (SVG inline) | SVG embebido en el pattern del hero, o `custom.svg` en `theme.json` | — (decorativo, `aria-hidden`) — se conserva donde no hay hero inmersivo |
| Revelado en scroll (con stagger) | `.reveal` + `[style="--stagger-index"]` + `main.js` | Vive en `theme.json`/JS del tema, no en un bloque | — |

---

## 4. Responsive

**Breakpoints:** mobile `<640px` · tablet `640–1023px` · desktop `≥1024px` (el menú colapsado usa `1023px` como corte).

| Elemento | Desktop (≥1024px) | Tablet (640–1023px) | Mobile (<640px) |
|---|---|---|---|
| Navegación | Enlaces horizontales siempre visibles | Igual que mobile — colapsa a menú `≡` (ancho insuficiente para todos los enlaces + CTA) | Menú `≡` (`<details>`), colapsado por defecto |
| CTA de header | Botón completo con texto | Igual | Bajo 480px: solo ícono (texto accesible vía `visually-hidden`, ver § 6) |
| Hero inmersivo | `.hero-shell` con `min-height:560px`, contenido anclado abajo sobre el scrim | Igual, altura fluida por contenido | `min-height:440px`, radio de contenedor reducido a 20px |
| Banda de credibilidad | 4 columnas, se superpone ~64px al hero | 2×2 | 1 columna, se superpone solo ~32px (evita ocupar demasiado alto en pantallas chicas) |
| Mosaico de 4 focos | Retícula asimétrica 12 columnas (1 card destacada de doble alto + 3 variadas) | 2 columnas, sin spans especiales | 1 columna — cada card conserva su tratamiento (vidrio/sólida/visual) aunque pierda el layout asimétrico |
| Rail de sectores | Todos los chips caben sin scroll en la mayoría de anchos | Puede requerir scroll horizontal según cantidad | Scroll horizontal + arrastre táctil/puntero, `scroll-snap` |
| Bloques de servicio (Capacidad Técnica) | Vidrio ancho / texto+visual en 2 columnas / editorial simple | Igual, columnas se angostan | 1 columna en todos los tratamientos |
| Footer | 3 columnas | 1 columna (mismo corte que `.grid-2`, 800px) | 1 columna |

**Nota tablet:** el mosaico de 4 focos pierde su asimetría en tablet (spans especiales solo activos desde 1024px) pero conserva la variación de tipos de tarjeta (vidrio/sólida/visual) — se decidió así porque a ese ancho un layout asimétrico de 12 columnas se vuelve demasiado angosto por celda; 2 columnas simples es más legible sin perder la variedad de superficies, que es lo que realmente resuelve la "planitud".

---

## 5. Animaciones — especificación C2

Decisión de esta fase: **no implementar scrollytelling, sticky-crossfade ni parallax** (Kreisson/Sheff&Cook) en Inicio ni Capacidad Técnica.

**Justificación (evaluando propósito narrativo, accesibilidad, rendimiento y factibilidad, como pide D7):**
- Propósito narrativo: ambas páginas son informativas/de conversión (posicionamiento + captación B2B), no narran una historia secuencial larga — el caso de uso real de sticky-crossfade (contar una evolución paso a paso) encaja mejor con una página de storytelling dedicada (p. ej. Talento AAA, inspirada en OlarteMoure), que no está en el alcance de este C2.
- Rendimiento/factibilidad en WordPress: sticky-crossfade con imágenes reales de alta calidad añade peso y complejidad de layout (posicionamiento sticky anidado, medias sincronizadas) sin contenido fotográfico real todavía para poblarlo.
- Accesibilidad: un sistema scroll-triggered + sticky + crossfade es más difícil de hacer perfectamente operable por teclado y con `prefers-reduced-motion` que una revelación simple.
- No se agrega una animación solo porque aparece en un referente (restricción explícita del encargo).

**Lo que sí se implementó**, cada uno con propósito/disparador/intensidad/fallback/reduced-motion documentado:

| Animación | Propósito | Disparador | Intensidad | Fallback sin JS | `prefers-reduced-motion` |
|---|---|---|---|---|---|
| Revelado de secciones con stagger (`.reveal`) | Dar ritmo de lectura suave a bloques largos, y que elementos relacionados (cards de un mosaico, chips de un rail) entren en secuencia, no todos a la vez | `IntersectionObserver`, una sola vez por elemento, `threshold:0.15` | Fade + `translateY(20px)`, 700ms, `cubic-bezier(0.16,1,0.3,1)`; retraso `--stagger-index × 90ms` por elemento | El contenido ya es 100% visible por defecto (`.reveal{opacity:1}`); JS solo añade el estado inicial oculto | Anulado por completo: `--reveal-distance:0`, `--motion-entrance:0` y `--motion-stagger-step:0` — el contenido aparece igual que sin JS |
| ~~Header oculto al bajar~~ | **Retirado (2026-07-29)** — el Owner reportó que el menú "se perdía" al hacer scroll. Reemplazado por un header sticky permanente con glassmorphism (`--header-glass-bg`, blur 16px) — nunca se oculta | — | — | El header sticky siempre visible es en sí mismo el comportamiento sin-JS | No aplica (ya no hay animación de ocultar) |
| Parallax muy sutil del hero | Dar sensación de profundidad entre la foto de fondo y el contenido superpuesto, sin distraer del CTA | `scroll` dentro de los límites del hero (con `requestAnimationFrame`) | Desplazamiento vertical máximo de 24px (`--parallax-distance`) — imperceptible como "efecto", perceptible como profundidad | Sin JS, la imagen simplemente no se mueve — composición idéntica, sin capas perdidas | El script ni siquiera se activa si `prefers-reduced-motion: reduce` (chequeo explícito), y `--parallax-distance:0` lo neutraliza igualmente por CSS |
| Rail arrastrable (sectores) | Explorar una lista más larga de la que cabe en una fila sin partirla en columnas verticales | Scroll nativo (trackpad/touch/flecha con el rail enfocado) + arrastre con puntero | Scroll 1:1 con el gesto — nunca inercia artificial ni animación propia | El `overflow-x:auto` nativo ya es 100% funcional sin una línea de JS; el arrastre con mouse es una mejora, no un requisito | No aplica (es desplazamiento controlado por el usuario, no una animación automática) |
| Hover de cards (`.surface-glass/solid:hover`) | Micro-feedback de interactividad en cards clicables | `:hover` nativo | `translateY(-4px)` + sombra/borde, 300ms | No aplica (CSS puro, sin JS) | Se mantiene (cambio de posición mínimo, no continuo) |
| Estados de botón (`.btn`) | Cumplir el requisito D18: el CTA debe sentirse tan claro como un botón de e-commerce | `:hover`, `:focus-visible`, `:active` | Cambio de color/borde + `scale(0.97)` en active, 200ms | No aplica (CSS puro) | Se mantiene (duración mínima, sin desplazamiento grande) |
| Menú móvil (`<details>`) | Mostrar/ocultar navegación en pantallas angostas | Click/tap/teclado nativo en `<summary>` | Instantáneo (nativo del navegador) | **Es** el fallback — funciona sin una sola línea de JS | No aplica |
| Deriva ambiental de los halos (`.atmosphere`) | Dar una sensación de "vida" extremadamente sutil al fondo — puramente decorativo | Automático, en bucle, solo si `prefers-reduced-motion: no-preference` | Traslado de 3–4% del tamaño del halo, 42–54s por ciclo — deliberadamente lento e imperceptible como movimiento discreto | Sin JS, los halos simplemente quedan estáticos — visualmente idénticos, sin la deriva | Se desactiva por completo vía `@media (prefers-reduced-motion: no-preference)` — nunca se anima si el usuario pidió reducir movimiento |

JS mínimo, progresivo (`js/main.js`): añade `class="js"` a `<html>`, gestiona el estado del menú, el header oculto-al-bajar, el parallax del hero, el arrastre del rail, el `IntersectionObserver` del revelado, y el aviso de cookies. Ninguna funcionalidad depende de que este archivo cargue. **No se instalaron dependencias** (sin GSAP/AOS/Lenis) — todo es CSS + JS nativo.

---

## 6. Evaluación de accesibilidad y performance

### Contraste (WCAG 2.1 AA — ratio mínimo 4.5:1 texto normal, 3:1 texto grande/UI)

Calculado sobre los colores reales de marca (fórmula de luminancia relativa estándar):

| Combinación | Ratio | Resultado | Uso permitido |
|---|---|---|---|
| Blanco sobre navy `#063B59` | 11.8:1 | AAA | Texto de cualquier tamaño sobre fondo oscuro |
| Navy sobre blanco | 11.8:1 | AAA | Texto de cuerpo estándar |
| Navy sobre gris `#D9D9D9` | 8.4:1 | AAA | Cards/fondos secundarios claros |
| Dorado claro `#ECBC8A` sobre navy | 6.8:1 | AA (ambos tamaños) | Eyebrows, acentos, texto sobre fondo oscuro |
| Dorado medio `#CB9576` sobre navy | 4.56:1 | AA solo texto grande | Reservado a bordes, íconos, texto ≥24px — **no** texto de cuerpo pequeño |
| Blanco sobre dorado medio `#CB9576` | 2.6:1 | **Falla** | Nunca usar dorado como fondo sólido con texto blanco encima (por eso el CTA usa fondo navy, no dorado) |
| Azul frío `#A9C7DE` sobre navy (nuevo, dirección B) | 6.7:1 | AA (ambos tamaños) | Halos, bordes, extremo del degradado de `.text-gradient` sobre fondo oscuro |
| `.text-gradient` (dorado → azul frío) sobre navy | 6.7–6.8:1 en ambos extremos | AA en todo el recorrido | Ambos colores del degradado ya son individualmente AA sobre navy — la interpolación entre dos tonos claros no puede caer por debajo de ninguno de los dos de forma relevante |
| `.text-gradient` (navy → azul frío medio) sobre blanco | Navy 11.8:1 / azul frío medio 4.5:1 aprox. | AA en el extremo más bajo — válido solo en texto grande (H1) | Variante usada cuando el degradado cae sobre una sección clara, no oscura |

Bugs encontrados y corregidos durante esta verificación: (1) la nota `.ady-note` heredaba texto blanco de su sección oscura contenedora sobre su propio fondo gris claro fijo — corregido fijando `color` explícito en el componente (no depende del padre); (2) las superficies de vidrio (`.surface-glass`) sin soporte de `backdrop-filter` caen a un fondo sólido casi opaco (`@supports not`) — el texto nunca pierde legibilidad por transparencia excesiva, incluso en navegadores sin soporte.

### Teclado y foco

- Todos los interactivos (`<a>`, `<button>`, `<summary>`) son elementos nativos — operables por teclado sin JS adicional.
- `:focus-visible` con anillo dorado de 3px y offset, nunca se suprime el foco (`outline:none` solo se aplica junto con el reemplazo `:focus-visible`, nunca solo).
- Verificado con navegación por Tab: skip-link → marca → menú/enlaces de navegación → CTA de header → contenido. El menú móvil es alcanzable y operable por teclado (`<summary>` es nativamente enfocable).
- Se corrigió un bug real durante la verificación: si el usuario cruza el breakpoint de 1023px sin recargar la página (resize, rotación), el menú podía quedar cerrado e inalcanzable porque el script solo sincronizaba el estado una vez al cargar. Ahora usa un listener de `matchMedia` que resincroniza en cada cambio de breakpoint.
- CTA "Consulta tu caso aquí": accesible por teclado, con estados normal/hover/focus/activo (requisito obligatorio D18), y `aria-hidden` en el ícono decorativo.

### Contenido largo / restricciones de edición (Gutenberg)

- Ningún componente depende de una longitud de texto fija: los `.focus-card`, `.service-block` y el hero usan alto automático (no alturas fijas), así que un administrador puede escribir más o menos texto sin romper el layout.
- Las cards con `--emphasis` (fondo oscuro) son una clase, no un bloque distinto — en Gutenberg esto se resuelve con una variación de bloque o un atributo de color de fondo por bloque Group, no con un CPT nuevo.
- El grid de 4 focos asume 4 elementos (según Ref. 02 y el copy aprobado); si en el futuro cambia el número, el CSS Grid con `repeat(4, 1fr)` necesitaría ajustarse — no es una limitación bloqueante, pero sí una dependencia a documentar en 03A.

### Performance

- Sin frameworks JS, sin dependencias npm — un solo archivo `main.js` (~2 KB sin minificar).
- Tipografía: Krub vía Google Fonts (`display=swap`, evita texto invisible mientras carga); Big Caslon depende de estar instalada localmente o de una fuente web con licencia (ver riesgo § 7).
- Imágenes: en este prototipo son placeholders CSS (gradiente + patrón), no archivos — cero peso de imagen. En producción, el riesgo de performance pasa a depender de la optimización de las fotografías reales (fuera del control de este prototipo).
- `prefers-reduced-motion` deshabilita toda transición vía variables CSS globales (`tokens.css`), no solo el scroll-reveal — ninguna animación queda "olvidada" fuera de esa regla.

---

## 7. Riesgos de implementación WordPress

| Riesgo | Detalle | Mitigación propuesta |
|---|---|---|
| ~~Licencia de Big Caslon para web~~ | **Cerrado por Decisión D22** (Owner, 2026-07-29): Big Caslon queda retirada de los encabezados, reemplazada por Space Grotesk (Google Fonts, uso libre) — el riesgo de licencia deja de existir | — |
| **Carga de Google Fonts (Krub + Space Grotesk) vía CDN externo** | Cada visita hace una petición a `fonts.googleapis.com` — implica una dependencia externa y envío de IP a Google | Evaluar auto-hospedar ambas fuentes (`.woff2` local vía `theme.json`/`enqueue`) en 03A — elimina la dependencia externa y mejora privacidad/rendimiento, sin costo de licencia (ambas son de uso libre) |
| **Grid de 4 focos asume exactamente 4 elementos** | El layout (`repeat(4, 1fr)`) no está pensado para un número variable | En 03A decidir si es un pattern fijo (4 bloques manuales) o si necesita lógica de bloque distinta si el número de focos cambiara |
| **CTA "Consulta tu caso aquí" sin destino real** | Apunta a una nota explicativa (`#nota-ady`), no a la URL externa de ADY (aún no compartida) ni al formulario nativo de empresas (mecanismo pendiente de 03A) | No implementar el enlace real hasta que el cliente comparta la URL de ADY y se resuelva si es el mismo flujo que el formulario nativo (pregunta abierta registrada en PROJECT.md → Conversión) |
| **Aviso de cookies como HTML estático** | En este prototipo es un componente de ejemplo (localStorage propio); en producción debe integrarse con el mecanismo real de consentimiento antes de que GTM dispare GA4/Clarity | Definir en 03A si se usa un plugin de consentimiento mínimo o un snippet propio vía GTM (Decisión D20 ya aprueba Clarity vía el mismo contenedor, sin plugin nuevo — el aviso de cookies es la única pieza aún sin mecanismo definido) |
| **Fotografía pendiente** | Todo el prototipo depende de placeholders; el layout (aspect-ratio, recorte) no está validado contra fotografías reales | Cuando llegue material real (STATUS.md → pre-requisitos), validar que el aspect-ratio/objet-fit elegido no recorta mal caras/elementos clave |
| **`<details>` como patrón de navegación** | Es un patrón robusto y accesible, pero poco común en temas WordPress estándar (la mayoría usa el bloque Navigation nativo con su propio JS de colapso) | En 03A decidir si se replica este patrón a mano en el template part, o si se adopta el comportamiento nativo del bloque Navigation de Gutenberg (que ya resuelve mobile/desktop de forma equivalente) — evaluar sin perder el fallback sin-JS que sí tiene el patrón `<details>` |
| **`backdrop-filter` (superficies de vidrio) y soporte de navegador** | Es una propiedad CSS moderna, bien soportada en navegadores actuales, pero con costo de rendimiento en dispositivos de gama baja si se abusa (muchas superficies de vidrio grandes simultáneas en pantalla) | Ya mitigado parcialmente: fallback sólido vía `@supports`, y el vidrio se usa con moderación (nunca todas las cards a la vez, ver criterio de aplicación en `REFERENCES.md`). Validar rendimiento real en un dispositivo de gama media/baja antes de Gate 1 |
| **Halos de fondo (`.atmosphere`) con `filter:blur()`** | `blur()` en elementos grandes (`46vw`) puede ser costoso en GPUs débiles si se combina con la animación de deriva | La deriva ya está limitada a navegadores con `prefers-reduced-motion: no-preference`; si en dispositivos reales se detecta costo alto, la mitigación es reducir el tamaño de los halos o quitar la animación de deriva y dejarlos estáticos (no afecta la composición, solo el "extra" de vida sutil) |
| **Mosaico asimétrico (`.focus-mosaic`) con spans manuales** | Los `grid-column`/`grid-row` fijos por `:nth-child` asumen exactamente 4 elementos en un orden específico — un CPT o bloque repetidor genérico no podría variar el número sin ajustar el CSS | Igual que el riesgo ya registrado del grid de 4 focos: en 03A, si el layout de Gutenberg necesita soportar un número variable, este mosaico debe convertirse en variaciones de bloque explícitas (p. ej. "card destacada" como bloque distinto de "card simple"), no en una repetición genérica |

---

## 8. Verificado en navegador

### Iteración 1 (C2 inicial)

- Desktop (1440px) y mobile (375px), en Inicio y Capacidad Técnica.
- Navegación por teclado (Tab, Enter/foco visible) en header, menú, CTA.
- Apertura/cierre del menú móvil por click (verificado) — por teclado depende del soporte nativo de `<summary>` del navegador real del usuario (no del entorno de automatización usado para esta verificación).
- Aviso de cookies: aparece, se descarta, y no vuelve a aparecer (persistencia por `localStorage`).
- Bugs encontrados y corregidos: (1) imagen del hero se anteponía al texto/CTA en mobile; (2) header desbordaba en mobile (CTA de texto completo + toggle de idioma); (3) nota ADY con contraste insuficiente; (4) menú podía quedar inalcanzable si el viewport cruzaba el breakpoint sin recargar.

### Iteración 2 — profundidad visual (2026-07-29)

- **Anchos verificados:** 1440px, 1024px, 768px (vía viewport intermedio), 390px — Inicio y Capacidad Técnica. Sin overflow horizontal en ningún ancho (`document.documentElement.scrollWidth` = ancho de viewport en 1440 y 390; verificado explícitamente por script).
- **Teclado:** recorrido de Tab verificado en Capacidad Técnica — skip-link → marca → enlaces de navegación (en orden) → CTA de header, con anillo de foco dorado visible en cada parada. El rail de sectores es alcanzable por teclado (`tabindex="0"`) y desplazable con flechas (comportamiento nativo del navegador sobre un contenedor con overflow).
- **`prefers-reduced-motion`:** verificado por inspección de código (no por emulación del sistema operativo, no disponible en este entorno de navegador): todas las duraciones de movimiento (`--motion-*`, `--motion-entrance`, `--motion-stagger-step`, `--reveal-distance`, `--parallax-distance`) se anulan en la media query de `tokens.css`; el parallax del hero además comprueba `prefersReducedMotion` en JS antes de activarse; la deriva de los halos solo se anima bajo `prefers-reduced-motion: no-preference` explícitamente.
- **Contraste:** recalculado para los tokens nuevos (azul frío, degradado) — ver tabla en § 6. Ratios AA o mejores en todos los usos de texto.
- **Estabilidad de carga:** los placeholders de imagen reservan su tamaño vía `aspect-ratio`/`min-height` fijo — no hay salto de layout (CLS) al cargar tipografías web (`font-display: swap` en Krub).
- **Header sticky con glass:** verificado que permanece visible y legible en todo momento del scroll (ya no se oculta). Opacidad de `--header-glass-bg` (0.88) calculada para mantener AA en blanco incluso con una sección clara detrás — ver justificación en `tokens.css`.
- **Banda de credibilidad y mosaico:** verificados en 1440px (superposición correcta sobre el borde del hero, mosaico asimétrico con card destacada) y en 390px (colapso a 1 columna, sin recortes ni solapamientos).
- **Bugs encontrados y corregidos en esta iteración:** (1) el numeral de la card destacada del mosaico dejaba un vacío visual sin intención — se agregó como numeral editorial de fondo (gesto tipográfico, no contenido inventado); (2) verificación de que `align-items:flex-end` en `.hero-shell` no genera espacio muerto cuando el contenido ya excede la `min-height` (comportamiento esperado de flexbox, no un defecto).
- **Bugs encontrados y corregidos (2026-07-29, ronda de refinamiento):** (3) `.surface-glass:hover` (regla genérica) bajaba la opacidad del fondo de las tarjetas de credibilidad a 0.26 en hover, por empate de especificidad con `.credibility-card.surface-glass` — sobre el hero oscuro esto casi eliminaba el contraste del texto; corregido con una regla más específica que en hover sube la opacidad en vez de bajarla; (4) el header oculto-al-bajar se retiró por pedido explícito (el menú "se perdía" al usuario) y se reemplazó por sticky permanente con glassmorphism.
- **No verificado en este entorno (limitación de la herramienta, no del código):** emulación real de `prefers-reduced-motion` del sistema operativo; perfil de rendimiento en un dispositivo físico de gama baja para `backdrop-filter` y `filter:blur()` (ver riesgos § 7).
