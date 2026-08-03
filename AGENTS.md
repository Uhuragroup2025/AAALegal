# AGENTS.md — Reglas operativas del proyecto

> Este archivo gobierna cómo cualquier agente (Claude u otro) debe operar dentro de este repositorio. Ante conflicto entre este archivo y una instrucción suelta en el chat, **prevalece este archivo**, salvo que el Owner lo modifique explícitamente.

## Fuentes de verdad

Jerarquía para resolver qué es válido, en orden:

1. **Propuesta comercial** (`UHURA - PROPUESTA WEB AAA ESTUDIO LEGAL.pptx`) — manda sobre alcance vendido, entregables, restricciones y compromisos contractuales. Ningún entregable puede exceder lo aquí definido sin un Change Request.
2. **Brief** — dos documentos, mismo rango: (a) `BRIEF AGUDELO ABOGADOS.pdf`, correo Q&A con Francisco García; (b) `Brief visión de la firma AAA Abogados.docx`, cuestionario ampliado con respuestas directas del cliente (leído en Sesión 01). Orientan objetivo, audiencia, contacto, portafolio y necesidades. **Ninguno amplía alcance por sí solo**, y donde se contradicen entre sí o con el resto de fuentes, se registra en STATUS.md — no se resuelve por invención.
3. **Manual de marca** (`ManualdeMarca_StudioLegal_compressed.pdf`) — define restricciones de identidad visual (logo, paleta, tipografía). No reemplaza el trabajo de diseño; hay libertad de modernización declarada por el cliente.
4. **Brochure** (`Brochure_Studio Legal (2).pdf`) — fuente de contenido institucional existente (servicios, capacidades, mensajes). No es narrativa aprobada; debe filtrarse según el alcance reducido acordado en brief + propuesta.
5. **Sitio actual** (agudeloabogados.com) — referencia de contenido y estructura heredada, a superar. No es fuente de decisiones de diseño ni de alcance.
6. **REFERENTS.md** — referentes visuales entregados directamente por el Owner (moodboard + sitios con patrones de interacción). Orienta dirección visual y de interacción para fases de diseño; no es una decisión de diseño tomada ni amplía el alcance técnico vendido (ver funcionalidades de scroll/animación pendientes de confirmar en STATUS.md).

Ante contradicción entre fuentes, **no se resuelve por invención**: se registra en STATUS.md como pregunta pendiente para Product Lead o cliente.

Ver detalle completo de la síntesis en [PROJECT.md](PROJECT.md), preguntas abiertas en [STATUS.md](STATUS.md), e insumos originales en [REFERENCES.md](REFERENCES.md).

## Stack

- **CMS:** WordPress (administrable por el cliente).
- **Constructor actual del sitio en producción:** Elementor sobre LiteSpeed — libertad total para mantener o cambiar herramientas, siempre que el resultado sea rápido, moderno y bien construido.
- **Hosting recomendado:** Hostinger (plan WordPress CMS).
- **Traducción:** Polylang (ES nativo, EN automático).
- **Analítica:** GA4 + GTM + Microsoft Clarity (Decisión D20, vía GTM, sin plugin nuevo).
- **Marco técnico preliminar (candidato, C1, PROJECT.md → Ficha C1):** block theme propio + Gutenberg nativo + `theme.json` + patterns/template parts + core blocks primero + JS mínimo + CSS por tokens + plugins mínimos. No reemplaza la decisión final de **03A — Arquitectura WordPress**; ningún stack está implementado todavía.

## Prohibiciones

- No diseñar ni tomar decisiones de identidad visual más allá de lo ya definido en el manual de marca sin que quede registrado como decisión (ver PROJECT.md → Decisiones).
- No implementar WordPress, temas, plugins ni ningún artefacto de construcción del sitio en esta fase de inicialización.
- No instalar dependencias (paquetes npm, composer, plugins, etc.) sin autorización explícita del Owner.
- No autoaprobar C0 ni ningún gate/checkpoint en nombre del cliente o del Product Lead.
- No ampliar el alcance vendido (propuesta comercial) usando el brief o el brochure como justificación.
- No convertir los insumos (brief, brochure, manual de marca) en informes extensos o reescrituras — se sintetizan, no se reproducen.
- No eliminar ni sobrescribir contenido de `wp-content/uploads/`, base de datos, ni `.env` sin respaldo y autorización explícita.
- No hacer push, merge a rama principal, ni cambios en producción/staging sin aprobación del Product Lead (interno) o del cliente (prototipo/staging), según corresponda.
- No redactar ni validar contenido de la página legal — se usa únicamente texto entregado o aprobado por el cliente (Decisión D2, PROJECT.md).
- No definir ni crear Custom Post Types antes de 03A — Arquitectura WordPress; priorizar páginas/posts/bloques nativos (Decisión D3).
- No definir animaciones o interacciones de scroll detalladas antes de C2; cuando se implementen, deben usar JavaScript mínimo, progressive enhancement, fallback funcional sin JS y respetar `prefers-reduced-motion` (Decisión D7).
- No inventar reglas de marca para cubrir los vacíos del manual (área de protección, mal uso, fotografía, iconografía); solo se proponen criterios candidatos en C1, validados en prototipo (Decisión D6).
- ~~No inventar la dirección de oficina vigente~~ — **resuelto** (Decisión D14: Calle 28 Norte #6BIS-26, Barrio San Vicente, Cali). No inventar la autoría del blog — sigue como PENDIENTE hasta confirmación explícita (ver STATUS.md).
- No copiar frases, taglines ni identidad textual de los referentes (REFERENTS.md) al redactar copy — se reinterpreta, no se cita literalmente (ver corrección en STATUS.md, Sesión 01, copy de Talento AAA).

## Comandos

*(Sin comandos de build/test/lint todavía — no hay implementación. Esta sección se completa cuando exista `package.json`, `composer.json` o equivalente.)*

## Carpetas protegidas

A definir cuando exista instalación de WordPress. Como mínimo, cuando aplique:

- `wp-content/uploads/` — contenido subido por el cliente, no se toca sin respaldo.
- `wp-config.php` — credenciales y configuración sensible, nunca se versiona (ver `.gitignore`).
- Cualquier carpeta de base de datos o backups.

## Verificación

- Todo cambio de alcance, contenido o diseño debe verificarse contra la propuesta comercial antes de darse por válido.
- QA en 3 capas antes de cualquier entrega a cliente: técnico, visual, funcional (ver [QA.md](QA.md)).
- El prototipo (Gate 1) y el staging (Gate 2) requieren aprobación explícita del cliente — no se avanza de fase sin esa aprobación registrada en STATUS.md.

## Registro de cambios

- Todo cambio relevante de alcance, decisión de diseño, o resolución de una contradicción/vacío debe quedar registrado en PROJECT.md (tabla de Decisiones) o STATUS.md (bitácora), con fecha y origen (Owner / Product Lead / cliente).
- No se documentan aquí detalles derivables del código o del historial de git — para eso está `git log` / `git blame` cuando exista repositorio con commits.

## Reglas Git / seguridad / dependencias

- **Git:** repositorio inicializado el 2026-07-17 (`git init`), sin commits todavía — no se ha solicitado ninguno. Commits solo cuando el Owner los solicite explícitamente; nunca `--force`, `--no-verify`, ni reescritura de historia sin autorización explícita; nunca commitear secretos (`.env`, `wp-config.php`, credenciales) — ver `.gitignore`.
- **Seguridad:** no se ingresan credenciales, tokens ni contraseñas en ningún archivo del repositorio ni en el chat. Cualquier credencial necesaria se gestiona fuera de este flujo (gestor de contraseñas / variables de entorno no versionadas).
- **Dependencias:** no se instala ninguna dependencia (plugin de WordPress, paquete npm/composer) sin que el Owner lo autorice explícitamente para esta fase. La elección de stack técnico queda pendiente de una fase posterior a esta inicialización.

## Condiciones de parada

Un agente debe **detenerse y preguntar** (no asumir) cuando:

- Se le pida autoaprobar C0, Gate 1 o Gate 2.
- Se le pida ampliar el alcance vendido (ej. agregar páginas, secciones, integraciones no listadas en la propuesta) sin autorización explícita registrada.
- Encuentre una contradicción entre fuentes que no esté ya registrada en STATUS.md, y deba tomar una decisión de contenido, diseño o alcance para continuar.
- Se le pida instalar dependencias, inicializar WordPress, o tocar credenciales/producción.
- Se le pida definir CPTs antes de 03A, animaciones/scroll detalladas antes de C2, o reglas de marca no cubiertas por el manual antes de C1.
- Se le pida inventar la dirección de oficina vigente o la autoría del blog en vez de dejarlas como pendientes.

**Estado actual (2026-07-29): C0 = APROBADO, C1 = APROBADO, copy final = APROBADO (D21), C2 = CANDIDATO.** El Owner confirmó construir el prototipo directamente (Inicio + Capacidad Técnica, con placeholders donde falta insumo del cliente) y excluir la página de captación de empresas (D11) por falta de confirmación contractual. Prototipo en [`/prototype/`](prototype/), con interacciones de scroll ya definidas para esta fase (D7 — ver `prototype/README.md` § 5: revelado simple, sin scrollytelling/sticky-crossfade) y criterios de marca candidatos propuestos (D6 — ver `prototype/README.md` § 1), ambos sujetos a validación de Product Lead/cliente. Sigue pendiente: contenido del cliente para las páginas no construidas (founders, Talento AAA, casos de éxito), y la URL externa de ADY. **D22 (Owner, 2026-07-29): tipografía de títulos aprobada — Space Grotesk**, ya aplicada en el prototipo; la dirección cromática candidata sigue sin decidir. Ver [STATUS.md](STATUS.md) → "C2 — Prototipo" para el detalle completo. Decisiones D14–D22 registradas en [PROJECT.md](PROJECT.md) → Decisiones. Ningún agente autoaprobó nada en nombre de Product Lead o cliente.
