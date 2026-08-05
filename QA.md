# QA.md — Plan de control de calidad

> Plantilla operativa. Las capas de QA completas (técnico/visual/funcional) se activan a partir de que exista prototipo (Gate 1). **Actualización 2026-07-29:** existe un prototipo candidato (Inicio + Capacidad Técnica) en [`/prototype/`](prototype/) — ver STATUS.md → "C2 — Prototipo". Ningún ítem del checklist de abajo se ha marcado todavía: falta QA de Content, consolidación de Product Lead, y no se ha corrido esta checklist formalmente — no le corresponde al mismo agente que construyó el prototipo autocalificarlo.

## Defectos abiertos (fase de inicialización — B00)

> No son defectos de producto (no existe prototipo ni sitio todavía): son hallazgos de completitud/insumos detectados durante la inspección read-only, que pueden afectar la calidad de la ficha C0 o de fases posteriores si no se resuelven.

| ID | Descripción | Severidad | ¿Bloquea? | Responsable de resolver | Estado |
|---|---|---|---|---|---|
| D-01 | Las 3 imágenes de referencia visual citadas en [REFERENTS.md](REFERENTS.md) se compartieron embebidas en el chat, no como archivos en disco. | Alta | Sí, para cualquier fase de diseño que dependa de inspeccionarlas visualmente | Owner | **Cerrado** (2026-07-17) — guardadas en `/inputs/references/` (`REFE_VISUAL_1.jpg`, `_2.jpg`, `_3.jpg`) |
| D-02 | El brochure (53 páginas) solo tiene capa de texto extraíble en la página 1; el resto es contenido gráfico no inspeccionado, sin instalar herramientas adicionales (fuera de alcance de esta fase). | Media | No bloquea C0, pero limita qué tan completa es la síntesis de contenido institucional existente | Owner / Product Lead (decidir si amerita autorizar herramienta de OCR) | Abierto |
| D-03 | Pregunta abierta sin respuesta: autoría de las entradas de blog. (Dirección de oficina resuelta por Decisión D14, 2026-07-23. Las otras 6 de las 8 originales quedaron resueltas el 2026-07-17 — ver PROJECT.md → Decisiones D2–D7.) | Media | No bloquea C0/C1, pero impide publicar el blog con certeza total | Product Lead / cliente | Abierto (reducido a 1 ítem) |
| D-04 | Inconsistencia interna de la propia propuesta comercial: timeline con framing distinto en slides 7/10/11 (ver [STATUS.md](STATUS.md) → Contradicción #3). *(La inconsistencia de copy extenso vs. UX Writing completo, antes también registrada aquí, quedó resuelta por Decisión D5.)* | Media | No bloquea C0; sí debería aclararse antes de comprometer el timeline con el cliente | Product Lead (con Uhura/cliente) | Abierto (reducido — solo timeline) |

*(D-01 cerrado en Sesión 01. D-02, D-03 (reducido) y D-04 siguen abiertos, sin bloquear C0 ni C1 — ambos ya aprobados (STATUS.md, 2026-07-23). Ninguno fue aprobado ni descartado por Product Lead o cliente — su cierre parcial corresponde a decisiones del Owner, no a aprobaciones de producto.)*

## Defectos abiertos — Prototipo C2, iteración 2 "profundidad visual" (2026-07-29)

> Hallazgos de la iteración que reinterpreta REF-BIOFARMA (ver REFERENCES.md y prototype/README.md). Ninguno bloquea seguir mostrando el prototipo como candidato — se registran para que QA de Content / Product Lead los tengan presentes antes de Gate 1.

| ID | Descripción | Severidad | ¿Bloquea? | Responsable de resolver | Estado |
|---|---|---|---|---|---|
| D-05 | Rendimiento de `backdrop-filter` (tarjetas de vidrio) y `filter:blur()` (halos de fondo) no se probó en un dispositivo físico de gama baja — solo se verificó en el navegador de este entorno | Media | No bloquea mostrar el prototipo; sí debería validarse antes de comprometerse a implementarlo tal cual en WordPress | Product Lead / QA técnico con dispositivo real | Abierto |
| D-06 | `prefers-reduced-motion` se verificó por inspección de código (todas las duraciones y la deriva de halos están correctamente condicionadas), no por emulación real del sistema operativo — el entorno de navegador usado para QA no expone ese control | Baja | No bloquea — el código está estructuralmente correcto; falta la verificación empírica final | Quien revise con un navegador/SO real que sí permita forzar la preferencia | Abierto |
| D-07 | La dirección teal y Space Grotesk de D22/D23 permanecían en la Home implementada, reemplazadas como dirección futura por el Visual Language Lab aprobado en D26 pero sin migrar. | N/A (transición de diseño, no defecto técnico) | No bloquea sincronización | Product Lead / implementación visual | **Cerrado (2026-08-05)** — migración ejecutada en las 7 páginas del sitio (tokens.css, base.css, components.css, Google Fonts); ver sección "Migración D26" abajo |
| D-08 | El mosaico asimétrico dependía de 4 focos y spans fijos; D24 redujo el portafolio a 3 macroservicios y el layout fue ajustado explícitamente a esa nueva estructura | Media | No | Owner / prototipo C2 | **Cerrado (2026-08-04)** — el mosaico y su CSS ahora asumen los 3 macroservicios aprobados |
| D-09 | El texto en degradado (`.text-gradient`) y las superficies de vidrio dependen de soporte de navegador moderno (`background-clip:text`, `backdrop-filter`); ambos tienen respaldo sólido (`@supports`) verificado por código, pero no probado en un navegador antiguo real | Baja | No bloquea — el respaldo ya está implementado | QA técnico | Abierto |
| D-10 | Los degradados atmosféricos y la iconografía Phosphor del Visual Language Lab seguían en refinamiento: los degradados debían mostrarse como fondos de sección, no como cards, y los iconos debían diferenciarse mediante peso, selección y uso contextual sin clichés jurídicos. Revisión (2026-08-05): los degradados ya solo aparecían en `.atmosphere-sample--light/--dark` y en el scrim de `.photo-treatment` (fondos de sección/foto a pantalla completa) — ningún botón, card, badge o formulario los usaba; ese punto ya estaba resuelto. Se encontró y corrigió un incumplimiento real de selección de símbolo: el ícono de la tarjeta "Materia" era el Phosphor "Scales" (balanza de la justicia), el cliché jurídico explícito que esta regla pide evitar — reemplazado por "Target" (rigor/precisión). Auditoría completa del set: "Dirección" usaba por error la misma flecha de los CTA (corregido a "MapPin"); "Cobertura nacional" repetía el ícono de "Organización" sin diferenciarse (corregido a "Compass"); se introdujo diferenciación por peso (Bold reservado a la flecha de los CTA de conversión principal — botón primario y CTA de header —, Regular para el resto). Verificado en navegador, sin roturas. No están aplicados en la Home todavía (D26: implementación pendiente). | N/A (refinamiento de la referencia interna) | No bloquea la sincronización | Product Lead / diseño | **Cerrado (2026-08-05)** |

## Defectos encontrados y corregidos — Migración D26 a Home/sitio (2026-08-05)

> La Product Lead aprobó el Visual Language Lab como referencia interna (D26, ver Iteración 11 de STATUS.md); esta migración lo aplica a las 7 páginas construidas del prototipo (tokens.css/base.css/components.css son compartidos, así que el cambio no se limitó a Home). Verificado en navegador a 1440px/1024px/768px/390px, sin overflow horizontal en ninguna página. Ninguno de estos hallazgos detiene la migración — todos quedaron corregidos en la misma sesión.

| ID | Descripción | Severidad | ¿Bloquea? | Estado |
|---|---|---|---|---|
| D-11 | `.surface-solid` (fondo siempre claro) nunca fijaba su propio color de texto — heredaba el del contenedor. Dentro de secciones `data-surface="dark"` (p. ej. "Casos de éxito" en Inicio), la regla de base.css que pone los encabezados en blanco ganaba por especificidad, dejando texto blanco sobre una card clara — ilegible. Detectado por inspección de computed styles, no a simple vista en la primera captura. | Alta (contenido ilegible) | Sí, para las secciones afectadas | **Corregido** — `.surface-solid` fija `color: var(--color-text-on-light)`, más un override `section[data-surface="dark"] .surface-solid h1/h2/h3` a tinta oscura |
| D-12 | `prototype/assets/img/latam-map.svg` (mapa de Latinoamérica en "Sectores", Inicio) tiene colores de relleno/borde fijos en el propio archivo (`fill:#189AB4`, `stroke:#04445F`, `stroke:#F7F8F5` — la paleta teal de D23), no referenciados vía CSS/tokens. La migración de tokens no lo alcanzó por ser un asset estático. | Media (inconsistencia visual, no ilegibilidad) | No, pero rompía la coherencia de marca de la sección | **Corregido** — recoloreado a `#063B59`/`#032C43`/`#F5F3EE` (equivalentes D26) directamente en el SVG |
| D-13 | La paleta D26 no tiene, a diferencia de la teal de D23, un tono único que cumpla 3:1 tanto sobre navy como sobre blanco — afecta el anillo de foco global y varios usos directos de `--color-accent-main`. Corregido con tokens duales (claro por defecto + override en `[data-surface="dark"]`), pero una de las reglas específicas (`.talent-form__field input/textarea:focus-visible`, Nuestro Equipo) ya tenía su propio `outline` con especificidad más alta que el override genérico, por lo que seguía ganando el valor claro (invisible sobre el fondo oscuro real del formulario). | Alta (foco de teclado invisible en el único formulario real del prototipo) | Sí, para accesibilidad de teclado | **Corregido** — la regla del formulario referencia directamente `--color-focus-ring-on-dark`, sin depender del override genérico |
| D-14 | `.cierre-card--cta` (tarjeta de cierre "Conversemos sobre su caso") tenía un fondo en degradado (`linear-gradient` navy→cobre→azul), incumpliendo la regla ya cerrada en D-10 ("degradados solo como fondo de sección, nunca en cards"). Quedó sin detectar en el cierre de D-10 porque esa revisión fue sobre el laboratorio (`type-lab.html`), no sobre los componentes reales de Home. | Media | No, pero es una inconsistencia de regla ya aprobada | **Corregido** — fondo aplanado a color sólido (`--color-navy-elevated`); el halo decorativo (`.cierre-card__halo`, blur circular) se conserva sin cambios, no es un degradado de identidad |

## Defecto encontrado y corregido — orden de cascada en `.grid-2--stretch` (2026-08-05)

| ID | Descripción | Severidad | ¿Bloquea? | Estado |
|---|---|---|---|---|
| D-15 | El modificador `.grid-2--stretch` (iteración 9, "situaciones" en Inicio) y la clase base `.grid-2` tienen la misma especificidad (una clase cada una); `.grid-2--stretch` estaba definida ANTES que `.grid-2` en `components.css`, así que el `align-items:center` de la clase base ganaba por orden de cascada — la 4ª tarjeta ("Necesito visibilidad y seguimiento...") se veía centrada y más baja que las otras 3 en vez de estirada a la misma altura. Reportado por el Owner con captura de pantalla. | Media (visual, no de contenido) | No | **Corregido** — `.grid-2--stretch` movida a inmediatamente después de `.grid-2` en el archivo; verificado que las 4 cards miden exactamente lo mismo (173.6px) |

## Capas de QA (según propuesta comercial)

1. **Técnico** — funcionamiento, performance, SEO/GEO básico, formularios, CPTs, responsive, sin errores de consola/enlaces rotos.
2. **Visual** — fidelidad al prototipo aprobado en Gate 1, consistencia con manual de marca (paleta, tipografía, logo), maquetación sin desbordes ni desalineaciones.
3. **Funcional** — flujos de usuario (**acción central actualizada, D17, 2026-07-23: captación de empresas — el CTA "Consulta tu caso aquí" vía ADY, D18, debe ser el flujo más prominente; el formulario de Talento AAA es secundario y debe verificarse que NO aparece como CTA global**), navegación, formularios, blog, traducción automática ES/EN.

Responsables: **Content** ejecuta QA; **Product Lead** aprueba internamente antes de exponer al cliente; **cliente** aprueba formalmente en cada gate.

## Gates de aprobación (según propuesta comercial)

| Gate | Qué se valida | Ventana cliente | Rondas incluidas |
|---|---|---|---|
| **Gate 1** | Prototipo navegable — arquitectura, UX, UI, integraciones definidas | Hasta 5 días hábiles | 1 ronda principal de ajustes |
| **Gate 2** | Sitio implementado en URL temporal — funcionalidad | Hasta 5 días hábiles | Hasta 2 rondas de QA cliente (1 principal + 1 menor de afinación) |

Reglas de gate (propuesta comercial):
- Los ajustes deben llegar consolidados en un solo documento, dentro del plazo acordado (máximo 2 semanas).
- Cambios estructurales o de diseño base posteriores a un gate (arquitectura, layout principal, nuevas secciones/páginas, integraciones) → **Change Request**: se cotiza, se mueve el timeline, se hace consciente el impacto. No se ejecutan como ajuste gratuito.
- Un gate aprobado congela las decisiones de esa fase.

## Checklist de prototipo (Gate 1) — plantilla, completar cuando exista prototipo

- [ ] Las 6 secciones del sitemap están representadas (Inicio, Talento AAA, Servicios, Equipo, Clientes, Blog) + página de captación de empresas si D11 se confirma como contratada
- [ ] Página legal presente como página adicional (no como una de las 6 principales), con plantilla simple/reutilizable y contenido provisto/aprobado por el cliente (Decisión D2)
- [ ] **Actualizado (D17):** el CTA principal del sitio ("Consulta tu caso aquí") es visible desde Inicio y Capacidad Técnica; el formulario de Talento AAA aparece **únicamente** en su propia página — no en header, footer, ni como CTA global
- [ ] Narrativa de Talento AAA con Julián Agudelo como eje visible (eje separado de "Quiénes somos"/Nuestro Equipo, que cuenta a Julián + Angélica Chamorro — Decisión D19)
- [ ] Portafolio de servicios acotado a los 3 macroservicios aprobados por D24 (Defensa de acreedores en procesos de insolvencia, Normalización de Activos, Derecho Corporativo); Derecho Concursal integrado en el primero, no como bloque independiente — sin filtración de las demás áreas del sitio actual/brochure
- [ ] Presentación de clientes/casos de éxito no reducida a "muro de logos"
- [ ] **Actualizado (D18):** CTA de ADY ("Consulta tu caso aquí") presente, sin integración real, dirigido a URL externa; accionable en desktop y mobile, con estados normal/hover/focus/activado, y accesible (teclado, lector de pantalla, contraste AA)
- [ ] Paleta y tipografía del manual de marca aplicadas (o desviación justificada y registrada como Decisión)
- [ ] Aprobación explícita del cliente registrada en STATUS.md con fecha

## Checklist de sitio en staging (Gate 2) — plantilla

- [ ] Sitio publicado en URL temporal, WordPress administrable
- [ ] Hasta 2 CPT funcionando con sus campos definidos
- [ ] Hasta 3 formularios operativos, envíos verificados
- [ ] SEO/GEO básico y performance verificados
- [ ] Traducción automática ES/EN (Polylang) funcionando, hreflang correcto
- [ ] GA4 + GTM instalados, eventos principales y conversiones configurados
- [ ] Blog con las 2 entradas iniciales publicadas
- [ ] Datos de contacto reconciliados (dirección, teléfonos — ver contradicción en STATUS.md)
- [ ] QA en 3 capas (técnico/visual/funcional) completado por Content
- [ ] Aprobación interna de Product Lead antes de exponer al cliente
- [ ] Aprobación explícita del cliente registrada en STATUS.md con fecha

## Registro de rondas de ajuste

*(Se completa durante la ejecución — no hay rondas todavía.)*

| Fase | Ronda | Fecha solicitud | Consolidado en un solo doc | Dentro de plazo (≤2 semanas) | Resultado |
|---|---|---|---|---|---|
| — | — | — | — | — | — |

## Change Requests

*(Registro de cualquier cambio posterior a un gate que implique reproceso — se estima, se cotiza, mueve timeline.)*

| # | Descripción | Gate afectado | Cotizado | Impacto en timeline | Aprobado por |
|---|---|---|---|---|---|
| — | — | — | — | — | — |
