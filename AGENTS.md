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
- **Marco técnico (candidato en C1, confirmado como decisión final por 03A — Arquitectura WordPress, Decisión D110, 2026-09-07):** block theme propio + Gutenberg nativo + `theme.json` (traducido de `prototype/css/tokens.css`) + patterns/template parts + core blocks primero + JS mínimo + CSS por tokens + plugins mínimos (Polylang, Contact Form 7, Rank Math — sin ACF ni caché/seguridad en esta fase). Ver `WORDPRESS-SETUP.md` y `wp-content/themes/aaa-estudio-legal/`.

## Prohibiciones

- No diseñar ni tomar decisiones de identidad visual más allá de lo ya definido en el manual de marca sin que quede registrado como decisión (ver PROJECT.md → Decisiones).
- No implementar WordPress, temas, plugins ni ningún artefacto de construcción del sitio **sin autorización explícita del Owner** (autorización dada para el andamiaje del tema/plugins listados en Decisión D110, 2026-09-07 — no amplía a nada fuera de esa lista sin una nueva decisión registrada).
- No instalar dependencias (paquetes npm, composer, plugins, etc.) sin autorización explícita del Owner.
- No autoaprobar C0 ni ningún gate/checkpoint en nombre del cliente o del Product Lead.
- No ampliar el alcance vendido (propuesta comercial) usando el brief o el brochure como justificación.
- No convertir los insumos (brief, brochure, manual de marca) en informes extensos o reescrituras — se sintetizan, no se reproducen.
- No eliminar ni sobrescribir contenido de `wp-content/uploads/`, base de datos, ni `.env` sin respaldo y autorización explícita.
- No hacer push, merge a rama principal, ni cambios en producción/staging sin aprobación del Product Lead (interno) o del cliente (prototipo/staging), según corresponda.
- No redactar ni validar contenido de la página legal — se usa únicamente texto entregado o aprobado por el cliente (Decisión D2, PROJECT.md).
- No definir ni crear Custom Post Types sin decisión registrada; 03A (D110) los deja diferidos indefinidamente — priorizar páginas/posts/bloques nativos (Decisión D3) salvo que un contenido concreto lo justifique.
- No definir animaciones o interacciones de scroll detalladas antes de C2; cuando se implementen, deben usar JavaScript mínimo, progressive enhancement, fallback funcional sin JS y respetar `prefers-reduced-motion` (Decisión D7).
- No inventar reglas de marca para cubrir los vacíos del manual (área de protección, mal uso, fotografía, iconografía); solo se proponen criterios candidatos en C1, validados en prototipo (Decisión D6).
- ~~No inventar la dirección de oficina vigente~~ — **resuelto** (Decisión D14: Calle 28 Norte #6BIS-26, Barrio San Vicente, Cali). No inventar la autoría del blog — sigue como PENDIENTE hasta confirmación explícita (ver STATUS.md).
- No copiar frases, taglines ni identidad textual de los referentes (REFERENTS.md) al redactar copy — se reinterpreta, no se cita literalmente (ver corrección en STATUS.md, Sesión 01, copy de Talento AAA).

## Comandos

*(Sin comandos de build/test/lint todavía — no hay implementación. Esta sección se completa cuando exista `package.json`, `composer.json` o equivalente.)*

## Carpetas protegidas

Desde D110 (2026-09-07) ya existe `wp-content/themes/aaa-estudio-legal/` (el tema, versionado normalmente). Como mínimo, además:

- `wp-content/uploads/` — contenido subido por el cliente, no se toca sin respaldo (ya en `.gitignore`, no se versiona).
- `wp-config.php` — credenciales y configuración sensible, nunca se versiona (ver `.gitignore`).
- Cualquier carpeta de base de datos o backups (ver `.gitignore`).
- WordPress core (`wp-admin/`, `wp-includes/`, `wp-*.php` de raíz) y `wp-content/plugins/` no se versionan en este repo — se instalan vía WP admin siguiendo la lista de `WORDPRESS-SETUP.md`; el repo solo versiona el tema propio.

## Verificación

- Todo cambio de alcance, contenido o diseño debe verificarse contra la propuesta comercial antes de darse por válido.
- QA en 3 capas antes de cualquier entrega a cliente: técnico, visual, funcional (ver [QA.md](QA.md)).
- El prototipo (Gate 1) y el staging (Gate 2) requieren aprobación explícita del cliente — no se avanza de fase sin esa aprobación registrada en STATUS.md.

## Registro de cambios

- Todo cambio relevante de alcance, decisión de diseño, o resolución de una contradicción/vacío debe quedar registrado en PROJECT.md (tabla de Decisiones) o STATUS.md (bitácora), con fecha y origen (Owner / Product Lead / cliente).
- No se documentan aquí detalles derivables del código o del historial de git — para eso está `git log` / `git blame` cuando exista repositorio con commits.

## Reglas Git / seguridad / dependencias

- **Git:** repositorio inicializado el 2026-07-17 (`git init`); en commits activos desde el prototipo. Tres ramas quedan conectadas a Cloudflare Pages Builds del proyecto "aaalegal" — `main`, `product-lead-ajustes-visuales` y `product-lead-refinement-v2` — **cualquiera de las tres puede disparar un build y quedar promovida como el despliegue activo**, no solo la que se considere "la de despliegue" en un momento dado (esto causó un incidente real el 2026-09-07: un push a `main` sin las últimas decisiones de otra rama revirtió el sitio en vivo). Por eso, **antes de pushear a cualquiera de esas tres ramas, verificar que las otras dos no tengan commits que esta rama no tenga** (`git log <rama> --oneline` cruzado) — si los tienen, se unifica primero (merge), nunca se pushea a ciegas. Commits solo cuando el Owner los solicite explícitamente; nunca `--force`, `--no-verify`, ni reescritura de historia sin autorización explícita; nunca commitear secretos (`.env`, `wp-config.php`, credenciales) — ver `.gitignore`. Puntos de control de seguridad se guardan como tags anotados (ej. `checkpoint-prototype-estable-2026-09-07` — ojo: ese tag específico quedó desactualizado el mismo día que se creó, ver STATUS.md § Nota de unificación de ramas).
- **Multiplicidad de agentes/flujos:** este proyecto puede tener más de un agente u operador trabajando en paralelo bajo roles distintos ("el Owner" vs. "la Product Lead" ya se confirmó que son procesos separados, con su propia numeración de Decisiones — ver STATUS.md § Nota de unificación de ramas, 2026-09-07). Antes de asumir que el estado local/la rama con la que se está trabajando es "la" versión vigente del proyecto, verificar contra `git log --all --oneline` y las otras ramas remotas.
- **Seguridad:** no se ingresan credenciales, tokens ni contraseñas en ningún archivo del repositorio ni en el chat. Cualquier credencial necesaria se gestiona fuera de este flujo (gestor de contraseñas / variables de entorno no versionadas).
- **Dependencias:** no se instala ninguna dependencia (plugin de WordPress, paquete npm/composer) sin autorización explícita del Owner. La elección de stack técnico para WordPress fue autorizada y registrada en D110 (2026-09-07) — cualquier plugin o dependencia fuera de la lista de esa decisión sigue necesitando autorización nueva.

## Condiciones de parada

Un agente debe **detenerse y preguntar** (no asumir) cuando:

- Se le pida autoaprobar C0, Gate 1 o Gate 2.
- Se le pida ampliar el alcance vendido (ej. agregar páginas, secciones, integraciones no listadas en la propuesta) sin autorización explícita registrada.
- Encuentre una contradicción entre fuentes que no esté ya registrada en STATUS.md, y deba tomar una decisión de contenido, diseño o alcance para continuar.
- Se le pida instalar dependencias, plugins o temas fuera de la lista ya autorizada en D110, o tocar credenciales/producción.
- Se le pida definir CPTs sin necesidad concreta documentada, animaciones/scroll detalladas antes de C2, o reglas de marca no cubiertas por el manual antes de C1.
- Se le pida inventar la dirección de oficina vigente o la autoría del blog en vez de dejarlas como pendientes.

**Estado actual (2026-09-07): C0 = APROBADO, C1 = APROBADO, copy final = APROBADO (D21), C2 = prototipo estable (8 páginas reales, decisiones D1–D98, verificado en vivo en https://aaalegal.design-505.workers.dev/), 03A — Arquitectura WordPress = CERRADO (D110).** El prototipo estático vive en [`/prototype/`](prototype/) y ya tiene un checkpoint de seguridad (tag `checkpoint-prototype-estable-2026-09-07`). Arranca ahora la fase de infraestructura WordPress: desarrollo local con la app **Local** (WP Engine), tema propio en `wp-content/themes/aaa-estudio-legal/`, guía paso a paso en `WORDPRESS-SETUP.md`. Sigue pendiente: contenido real del cliente para founders/Talento AAA/casos de éxito y fotografía (todo lo demás sigue como placeholder honesto), la URL externa de ADY, y la migración del contenido aprobado del prototipo estático a los patterns/páginas de WordPress. Ver [STATUS.md](STATUS.md) para el detalle sesión por sesión. Ningún agente autoaprobó nada en nombre de Product Lead o cliente.
