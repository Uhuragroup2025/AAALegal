# PROJECT.md — AAA Estudio Legal · Rediseño Web

> Documento vivo. Última síntesis: 2026-08-20 (D35 Home: Sectores de experiencia antes que Casos de éxito; D36 reestructuración del menú principal — Blog oculto y reemplazado por "Trabaja con nosotros", Servicios→"Metodología", Nuestro Equipo→"Quiénes somos", el botón destacado vuelve a decir "Contacto" — ver Decisiones). Previo: 2026-08-20 (D31 se retira CTA de texto redundante en Situaciones; D33 "Nuestra metodología" en Servicios vuelve a su diseño original, sin scroll y con menos espacio — reemplaza D32; D34 menú: sin selector de idioma, CTA acortado a "Mi caso", logo real unificado en las 7 páginas); 2026-08-13 (D30 tipografía Big Caslon/Krub del manual de marca, vía Libre Caslon Display + Libre Caslon Text + Krub, reemplaza el Visual Language Lab de D26); 2026-08-10 (D27 ronda de correcciones SEO en Homepage; D28 ajuste de eyebrow y registro tú/usted en Situaciones; D29 homogenización a "usted" en las 8 páginas del sitio); 2026-08-05 (D24 posicionamiento y tres macroservicios; D25 narrativa de Homepage; D26 Visual Language Lab).
> Fuente de verdad para alcance: **propuesta comercial**. El brief orienta objetivo/necesidad pero no amplía alcance por sí solo. Ver [AGENTS.md](AGENTS.md) para jerarquía completa de fuentes y [REFERENCES.md](REFERENCES.md) para insumos originales.

---

## Resumen

AAA Estudio Legal (antes "Agudelo Abogados Asociados") encarga un rediseño de su sitio web corporativo actual (agudeloabogados.com, WordPress + Elementor sobre LiteSpeed). No es un simple rediseño visual: es la materialización de un reposicionamiento de marca — de una firma percibida como generalista y con imagen de +5 años de antigüedad, hacia una firma más madura, tecnológica y especializada, operando bajo el nombre "Estudio" (adoptado en 2024) y el monograma AAA (nacido en 2020).

El proyecto fue vendido por Uhura Group mediante propuesta comercial de hasta 6 secciones, prototipo UX/UI previo a construcción, implementación en WordPress administrable, y dos gates formales de aprobación del cliente.

## Objetivo

Evolucionar la plataforma digital de AAA Estudio Legal perfeccionando su usabilidad, para reposicionar estratégicamente la marca proyectando una identidad corporativa más madura, tecnológica y humana (fuente: propuesta comercial, slide 3).

**Reemplazado (Decisión D15, Owner, 2026-07-23) — sustituye la lectura previa basada en el brief, no se elimina, se registra el cambio:**
1. **Nivel principal — Reconocimiento de marca y showcase de servicios**: que el mercado (clientes potenciales, aliados, mercado en general) reconozca a AAA Estudio Legal y comprenda su oferta de servicios.
2. **Nivel secundario — Atracción de talento** ("Talento AAA"): pasa de principal a secundario. Sigue siendo un objetivo del sitio, ya no el que determina la acción central.

*(Lectura anterior, ya no vigente pero conservada por trazabilidad: "Nivel principal — Atracción de talento... Nivel secundario — Confianza del cliente", basada en una inferencia del brief original. D15 la reemplaza explícitamente.)*

**✅ Cerrado (Decisión D17, Owner, 2026-07-23).** La tensión entre D8 (talento como acción de conversión principal) y D15 (talento no es el objetivo principal) queda resuelta: D17 fija que la conversión principal es captar empresas; el formulario de talento (D8) es secundario y estrictamente contextual. Ver [Conversión](#conversión) y STATUS.md → contradicción #6 (resuelta).

## Audiencia

**Actualizado (D15):** dado que el objetivo principal pasa a reconocimiento de marca/servicios, la audiencia primaria se reordena en consecuencia:

- **Primaria: mercado general y clientes potenciales/corporativos** (incluye clientes con procesos de insolvencia y entidades públicas/financieras) que necesitan reconocer la marca y validar su oferta de servicios, solidez y seguridad de la información (ISO 27001, brief/brochure).
- **Secundaria: talento profesional potencial** (candidatos con perfil jurídico de alto nivel) — pasa de primaria a secundaria (D15).
- Nota: el sitio actual está en español, con habilitación de inglés vía traducción automática (Polylang) — no se construye contenido nativo en inglés (propuesta, slide 9).

## Conversión

**Reemplazado (Decisiones D17 y D18, Owner, 2026-07-23) — cierran las incidencias de jerarquía de conversión y función de ADY. Reemplazan cualquier interpretación anterior contradictoria (D9, D10, D13, D16). Historial conservado abajo, no eliminado.**

**D17 — Jerarquía de conversión:**

Acción de conversión **principal**: captar **empresas** que necesiten los servicios jurídicos de AAA Estudio Legal. El formulario/flujo principal está dirigido a empresas interesadas en consultar o contratar los servicios de la firma (contenido de este formulario: D9, ahora elevado a principal).

Acción **secundaria y contextual**: el formulario de **AAA Talento** (D8). Su única función es recibir postulaciones y hojas de vida. **No debe tratarse como** conversión principal, CTA global, objetivo central del sitio, ni como formulario equivalente al de empresas. Debe aparecer **únicamente** en el contexto de la página Talento AAA o de contenido sobre oportunidades profesionales — nunca en header, footer, u otras páginas como CTA site-wide.

**D18 — Función de ADY:**

ADY representa la tecnología, innovación y robustez de AAA Estudio Legal, y funciona como el **mecanismo destacado de la conversión principal** mediante el CTA **"Consulta tu caso aquí"**. Su comportamiento debe transmitir la claridad e inmediatez de un botón de compra de e-commerce — sin representar ni sugerir una compra, carrito o pago. Dirige a una **URL externa** (a compartir más adelante) que inicia o continúa el flujo principal de consulta. Reemplaza la definición previa de D10/D13 (botón discreto de solo-login sin explicar qué es ADY) — ahora es un CTA prominente, no discreto.

**Requisito obligatorio de C2 (prototipo), registrado por D18:** el CTA de ADY debe, en el prototipo:
- ser claramente accionable (visual y funcionalmente);
- funcionar en desktop y mobile;
- contemplar estados normal, hover, focus y activado;
- ser accesible (teclado, lector de pantalla, contraste AA mínimo).

**Pregunta abierta (no se resuelve aquí):** si el formulario nativo de empresas (D9/D12, entrega por correo sin CRM) y el CTA de ADY hacia la URL externa son el **mismo flujo** o **dos entradas distintas** al mismo objetivo. Se deja para 03A/C2 cuando se conozca la URL externa.

**Historial de la jerarquía (nada se borra, D17/D18 reemplazan el orden vigente):**
- 2026-07-17: D8 (talento=principal) > D9 (B2B=secundaria) > D10 (ADY=terciaria).
- 2026-07-23 (mañana): D15 invierte el objetivo de fondo (talento ya no es principal); D16 reconcilia: reconocimiento de marca/servicios (principal) > talento (D8, secundaria) > B2B (D9, terciaria) > ADY (D10/D13, cuaternaria — solo login, sin explicar).
- 2026-07-23 (esta actualización): D17/D18 reemplazan D16 — empresas/B2B (D9, principal, con ADY como su mecanismo destacado vía D18) > talento (D8, secundaria y contextual, nunca global). El objetivo de marca general (D15) no se toca — sigue siendo el objetivo del *sitio*; D17 es específicamente sobre la jerarquía de *conversión*.

**Límite técnico (no negociable sin Change Request):** los formularios de empresas y talento caben en el presupuesto contractual de "hasta 3 formularios, envíos ilimitados". Cualquier integración de esos leads con CRM/ERP (enrutamiento automático, calificación, sincronización) está **explícitamente fuera de alcance** (propuesta, slide 7: "Integraciones ERP/CRM") — se recibirían como envíos de formulario, no como pipeline comercial integrado, salvo Change Request.

**Confirmado (D12, Owner, 2026-07-17):** los leads (talento y empresas) llegan por **notificación de correo con opciones nativas de WordPress** — sin CRM. Qué plugin/mecanismo concreto de formularios se usa es una decisión de **03A — Arquitectura WordPress**, no se define aquí.

**Página dedicada para captación de empresas (D11):** el Owner autorizó explorar una **página nueva y dedicada** para esta acción, ahora principal. Esto suma una **8ª página** al sitemap (6 vendidas + página legal ya autorizada como adicional [D2] + esta). **No queda contratada por esta decisión** — requiere confirmación de Product Lead sobre fricción contractual con Uhura, y muy probablemente **Change Request**. Nombre/contenido de esta página: pendiente.

## Alcance

**Fuente que manda: propuesta comercial.** Incluye:
- Hasta 6 secciones/páginas (ver Sitemap) **+ 1 página legal adicional, no contabilizada dentro de las 6** (Decisión D2)
- Prototipo UX/UI navegable (generado con IA, usando contenido actual) — Gate 1
- Implementación en WordPress: homepage custom + páginas internas administrables
- Custom Post Types: **no se definen en esta fase** — hasta 2 CPT, hasta 6 campos c/u, disponibles como techo contractual; su necesidad/estructura/destino se decide en **03A — Arquitectura WordPress**, priorizando páginas/posts/bloques nativos antes de crear CPTs (Decisión D3)
- Hasta 6 banners web
- Hasta 3 formularios (envíos ilimitados)
- SEO + GEO (motores de búsqueda y motores de IA) + performance
- UX Writing: reescritura completa del copy en tono dinámico, serio y sofisticado (no migración del contenido actual)
- Redacción inicial de hasta 2 entradas de blog (modelo para seguir alimentando)
- Migración de hosting a infraestructura cloud (hosting recomendado: Hostinger WordPress CMS Plan, ~$70 USD/mes, 4 años, incluye SSL)
- Traducción automática ES→EN vía Polylang (gestión de URLs/hreflang automática, sin costo)
- Analítica: GA4 + GTM, eventos principales, seguimiento de conversiones
- Capacitación básica de administración del sitio (1 hora)
- QA en capas (técnico / visual / funcional) + 1 ronda de ajustes post-QA cliente

**Explícitamente fuera de alcance (propuesta, slide 7 y 17):**
- Integraciones ERP/CRM
- Funcionalidades a medida complejas
- Rediseños posteriores al Gate 1 (cambios estructurales post-gate → Change Request, se cotiza aparte)
- Copy extenso (⚠️ ver contradicción en STATUS.md respecto a "UX Writing" completo)
- Compra de banco de imágenes, fotografía o producción de video
- Compra de plugins o suscripciones adicionales no listadas en costos operativos
- Mantenimiento posterior al lanzamiento (salvo plan adicional)

**Resuelto (Decisión D2, Owner, 2026-07-17):** la página legal es obligatoria, se autoriza como página adicional **no** contabilizada dentro de las 6 páginas principales. Debe usar una plantilla sencilla y reutilizable. La IA no redacta ni valida contenido legal — se usa únicamente texto entregado o aprobado por el cliente. *(Nota para Product Lead: esto añade una 7ª página respecto a la lectura literal de "hasta 6 secciones" de la propuesta — confirmar que no genera fricción contractual con Uhura; no bloquea C0.)*

## Sitemap

Según propuesta comercial (slide 6), el mapa de sitio vendido — y que se interpreta como el tope de "hasta 6 secciones" — es:

1. **Inicio (Home)**
2. **Talento AAA** — página vendida (propuesta, slide 6); **objetivo secundario del sitio** (D15) y formulario secundario/contextual (D17, no CTA global). Narrativa inspiracional, visión de la firma contada a través de Julián Agudelo (socio cofundador) como eje narrativo. Copy candidato en [content/05-talento-aaa.md](content/05-talento-aaa.md).
3. **Capacidad Técnica (Servicios)** — alta profundidad técnica, acotada a tres macroservicios: Defensa de acreedores en procesos de insolvencia / Normalización de Activos / Derecho Corporativo. Derecho Concursal deja de ser un bloque independiente y se integra en el primer macroservicio (D24). Sostiene la conversión principal (D17). Copy candidato en [content/02-capacidad-tecnica.md](content/02-capacidad-tecnica.md).
4. **Nuestro Equipo** — módulos con perfiles "con altura": Julián Agudelo, Angélica Chamorro (socios), Jaime Marmolejo (director); incluye la sección "Quiénes somos" (estructura D19, copy candidato en [content/04-nuestro-equipo.md](content/04-nuestro-equipo.md)).
5. **Nuestra Experiencia (Clientes)** — hasta 4 casos de éxito, sectores: Financiero, Fintech, Solidario, Organismos Públicos. Copy candidato (casos en placeholder) en [content/03-nuestra-experiencia.md](content/03-nuestra-experiencia.md).
6. **Noticias y Análisis (Blog)** — publicaciones/análisis jurídico; single page listado + hasta 2 entradas iniciales (autoría **pendiente**, ver STATUS.md). Copy de encabezado en [content/07-noticias-analisis.md](content/07-noticias-analisis.md).
7. **Página Legal** — adicional, fuera del conteo de las 6 anteriores; plantilla simple y reutilizable; contenido provisto/aprobado por el cliente, no redactado por la IA (Decisión D2). Sin outline de copy — ver [content/08-pagina-legal.md](content/08-pagina-legal.md).
8. **Captación de empresas (insolvencia)** — página nueva y dedicada, **no contratada todavía**; pendiente de confirmación de Product Lead y probable Change Request (Decisión D11). Es la **acción de conversión principal** (D17). Copy candidato en [content/06-captacion-b2b.md](content/06-captacion-b2b.md).

Elemento transversal (no es página propia): **Acceso a ADY** — mecanismo destacado de la conversión principal, CTA "Consulta tu caso aquí" (Decisión D18, reemplaza D10). Especificación en [content/09-ady-cta-c2.md](content/09-ady-cta-c2.md).

## Narrativa

- **Eje narrativo humano:** Julián Agudelo (cofundador) como figura central de la historia de Talento AAA. *(Nota: Brigard Urrutia usa la línea "aquí empieza tu historia con nosotros" como su propio tagline — es solo referente de dirección, no se copia literalmente; el copy candidato en content/05 usa una frase propia.)*
- **Especialización, no generalismo:** el sitio actual y el brochure exhiben una oferta amplia de áreas de práctica (14 áreas en el sitio vivo: concursal, financiero/fiduciario, contractual, corporativo, competencia y consumo, inmobiliario, público, disciplinario, patrimonio, litigios especiales, economía solidaria, asesoría empresarial, controversias comerciales, normalización de activos). D24 actualiza y reduce el relato a tres macroservicios: Defensa de acreedores en procesos de insolvencia, Normalización de Activos y Derecho Corporativo. Derecho Concursal se conserva como vocabulario técnico dentro del primer macroservicio, no como bloque independiente. El brochure es fuente de contenido existente, no narrativa aprobada — debe filtrarse, no migrarse íntegro.
- **Tres valores rectores** (brief, pregunta 3): (1) innovación con rigor — ideas jurídicas distintas sostenidas en análisis profundo; (2) solidez con tecnología — estabilidad estructural con la tecnología como eje; (3) dimensión humana — "somos una empresa de personas". Tono transversal que une los tres: **dinamismo**.
- **Seguridad de la información como mensaje sutil de marca:** alineación con ISO 27001, firewalls, copias de respaldo — relevante para clientes corporativos/públicos (brief pregunta 8, reforzado por brochure).
- **Tono de copy:** dinámico, serio y sofisticado — reescritura completa, no migración (brief pregunta 5). **Resuelto (Decisión D5, Owner, 2026-07-17):** no existe una regla previa de "copy corto" o "copy extenso" como categoría fija; la extensión de cada bloque se define según narrativa, storytelling, intención, claridad y escaneabilidad — evitando relleno y texto artificialmente largo. Content hará QA de esto posteriormente.

## Marco técnico

- **Plataforma:** WordPress, administrable por el cliente (no headless, no funcionalidades a medida).
- **Stack actual confirmado:** WordPress + Elementor sobre LiteSpeed (brief, pregunta 8). El cliente da libertad total para elegir plataforma/herramientas, con una única expectativa de fondo: el sitio debe sentirse rápido, moderno y bien construido.
- **Hosting recomendado:** Hostinger — plan WordPress CMS, soporte global, CMS, SSL, contrato de 4 años, ~$70 USD/mes (propuesta, slide 12).
- **Traducción:** Polylang (plan automático, gratuito), gestión de URLs y hreflang editable desde WordPress.
- **Formularios:** hasta 3, envíos ilimitados, sin costo adicional declarado.
- **Analítica:** GA4 + GTM, eventos principales y seguimiento de conversiones. **+ Microsoft Clarity (D20)**, complemento gratuito para heatmaps/session replay, implementado vía el mismo contenedor GTM — sin plugin nuevo, sin costo. Requiere aviso de cookies/privacidad que lo cubra (a incorporar en el banner de consentimiento del sitio).
- **CPTs:** techo contractual de hasta 2, hasta 6 campos cada uno — **no se definen en esta fase** (Decisión D3). Se deciden en 03A — Arquitectura WordPress, priorizando páginas/posts/bloques nativos antes de crear CPTs.
- **Referencia a ADY:** CTA destacado ("Consulta tu caso aquí", D18) que dirige a una URL externa (a compartir) — sin integración técnica real, sin cambio de alcance técnico. Requisitos de interacción obligatorios para C2 en Decisiones → D18.
- **Seguridad:** sin requerimiento técnico explícito más allá de lo estándar de hosting/SSL; el mensaje ISO 27001 es de posicionamiento de marca, no necesariamente una implementación técnica nueva en el sitio.
- **Interacciones de scroll (scrollytelling, sticky crossfade, parallax):** no se definen en esta fase (Decisión D7). Se definen en **C2** según propósito narrativo, accesibilidad, rendimiento y factibilidad en WordPress; deben usar JavaScript mínimo, progressive enhancement, fallback funcional sin JS, y respetar `prefers-reduced-motion`.
- **Moneda del proyecto:** COP — pesos colombianos (Decisión D4). El sitio opera en Colombia.

## Decisiones

> Registro de decisiones tomadas. Ninguna decisión de diseño, alcance ampliado o interpretación de contradicción debe asumirse aquí sin registrar su origen (usuario, Product Lead o cliente).

| # | Decisión | Origen | Estado |
|---|----------|--------|--------|
| D0 | La propuesta comercial es la fuente que manda sobre alcance vendido; el brief no amplía alcance por sí solo | Instrucción del Owner (B00) | Vigente |
| D1 | El manual de marca define restricciones de identidad (logo, color, tipografía) pero no reemplaza el trabajo de diseño; hay libertad para modernizar sin sujeción literal | Brief, pregunta 2 | Vigente |
| D2 | Página legal obligatoria, autorizada como página adicional no contabilizada dentro de las 6 principales; plantilla simple y reutilizable; contenido provisto/aprobado por el cliente, no redactado ni validado por la IA | Owner (cierre de pendientes B00) | Vigente |
| D3 | Los CPT no se definen todavía; su necesidad, estructura y destino se deciden en 03A — Arquitectura WordPress, según el contenido real; priorizar páginas/posts/bloques nativos antes de crear CPTs | Owner (cierre de pendientes B00) | Vigente |
| D4 | Moneda del proyecto: COP (pesos colombianos) | Owner (cierre de pendientes B00) | Vigente |
| D5 | No hay regla fija de "copy corto" vs. "copy extenso"; la extensión de cada bloque se define por narrativa, storytelling, claridad y escaneabilidad, evitando relleno; Content hace QA de esto después | Owner (cierre de pendientes B00) | Vigente |
| D6 | Los vacíos del manual de marca no se resuelven inventando reglas de marca; en C1 se podrán proponer criterios candidatos, validados durante el prototipo — no son decisiones de fondo aprobadas todavía | Owner (cierre de pendientes B00) | Vigente (de proceso, no de contenido) |
| D7 | Las interacciones de scroll (scrollytelling, sticky crossfade, parallax) no se definen en B00; se definen en C2 según propósito narrativo, accesibilidad, rendimiento y factibilidad en WordPress, con JS mínimo, progressive enhancement, fallback y `prefers-reduced-motion` | Owner (cierre de pendientes B00) | Vigente |
| D8 | Formulario de captación de talento en Talento AAA (capacidades/experiencia/trayectoria); campos exactos pendientes de C1/prototipo | Owner (Sesión 01) | Vigente como contenido — **estado de rango: ver D17 (secundario y contextual, no global)** |
| D9 | Captación de empresas/leads B2B de clientes con insolvencia — invierte la lectura previa basada en el brief ("no es lead comercial directo") | Owner (Sesión 01) | Vigente; **elevado a acción de conversión principal por D17** |
| D10 | Acceso a ADY se presenta como botón/CTA visible (no solo referencia pasiva); sin integración real, sin cambio de alcance técnico | Owner (Sesión 01) | **Reemplazado por D18** (ADY pasa de CTA discreto a mecanismo destacado de conversión) |
| D11 | Se autoriza explorar una 8ª página dedicada para captación de empresas, fuera de las 6 vendidas y de la página legal (D2) | Owner (Sesión 01) | **No contratada** — pendiente confirmación de Product Lead y probable Change Request |
| D12 | Los leads (talento y empresas) llegan por notificación de correo con opciones nativas de WordPress, sin CRM/ERP — dentro de lo excluido por la propuesta; el mecanismo/plugin concreto se decide en 03A | Owner (Sesión 01) | Vigente |
| D13 | El botón/CTA de ADY debe llevar directo al portal de login, sin explicar qué es ADY — solo transmitir que hay tecnología detrás (refina D10) | Brief visión de la firma AAA Abogados.docx (Sesión 01) | **Reemplazado por D18** |
| D14 | Dirección de oficina vigente y definitiva: Calle 28 Norte # 6BIS-26, Barrio San Vicente, Cali, Valle — cierra la contradicción de 3 vías (brochure "701", sitio actual "403", ambas descartadas) | Owner, 2026-07-23 | Vigente — cierra contradicción #4 (STATUS.md) |
| D15 | El objetivo principal **del sitio** es reconocimiento de marca y showcase de servicios; la atracción de talento **no** es el objetivo principal — pasa a secundario. No confundir con D17 (jerarquía de *conversión*, más específica) | Owner, 2026-07-23 | Vigente en Objetivo/Audiencia |
| D16 | Orden de conversión: reconocimiento de marca/servicios (principal) > talento (secundario) > B2B (terciario) > ADY (cuaternario) | Owner, 2026-07-23 | **Reemplazado por D17/D18** (mismo día, actualización posterior) |
| D17 | Jerarquía de conversión final: acción **principal** = captar empresas que necesiten los servicios jurídicos (formulario dirigido a empresas, D9 elevado); el formulario de AAA Talento (D8) es **secundario y estrictamente contextual** — no es CTA global, no es objetivo central, no equivale al formulario de empresas, y solo aparece en Talento AAA / contenido de oportunidades profesionales | Owner, 2026-07-23 (tarde) | Vigente — reemplaza D16 |
| D18 | ADY representa tecnología/innovación/robustez y funciona como el mecanismo destacado de la conversión principal, CTA "Consulta tu caso aquí", con claridad e inmediatez de botón de e-commerce (sin ser una compra); dirige a URL externa (a compartir) que inicia el flujo principal de consulta. Requisito obligatorio de C2: accionable, desktop+mobile, estados normal/hover/focus/activado, accesible | Owner, 2026-07-23 (tarde) | Vigente — reemplaza D10/D13 |
| D19 | Se crea la estructura narrativa de "quiénes somos" (fundadores Julián Agudelo y Angélica Chamorro) dentro de Nuestro Equipo, sin fusionarla con el eje narrativo de Talento AAA (solo Julián); el copy es placeholder hasta que el cliente lo cuente | Owner, 2026-07-23 (tarde) | Vigente — cierra contradicción #7 (STATUS.md) |
| D20 | Se adopta la propuesta de agregar Microsoft Clarity como complemento gratuito de GA4+GTM, vía el mismo contenedor de GTM ya contratado — sin plugin nuevo, sin costo, sin Change Request | Producer, propuesta adoptada por el Owner, 2026-07-23 (tarde) | Vigente — cierra contradicción #9 (STATUS.md) |
| D21 | Copy final aprobado para las 7 páginas con contenido (v1: Nuestra Experiencia, Talento AAA, Noticias y Análisis; v2 corregido por SEO: Inicio, Capacidad Técnica, Nuestro Equipo, Captación de empresas); se instruye avanzar a preparación de Gate 1 (prototipo). Los placeholders de contenido pendiente del cliente no quedan aprobados como finales por esta decisión | Owner, 2026-07-24 | Vigente |
| D22 | Tipografía de títulos: se aprueba **Space Grotesk** (alternativa "C" del comparativo `prototype/type-lab.html`) como fuente de encabezados (H1–H4, marca), reemplazando a Big Caslon. Krub se mantiene sin cambios en cuerpo de texto/UI. Aplica libertad de modernización ya reconocida por D1 (el manual de marca no se reemplaza, se moderniza su aplicación tipográfica). La dirección cromática candidata (§ prototype/README.md 1.2) sigue **sin decidir** — esta decisión es solo sobre tipografía | Owner, 2026-07-29 | **Reemplazado por D26** como dirección futura; permanece en la Home actual hasta implementar el Design Language aprobado |
| D23 | **Reemplazo de la paleta institucional.** Se sustituye el navy `#063B59` + gama dorada del manual de marca por una nueva paleta turquesa/teal: navy-deep `#04445F`, accent-main `#189AB4`, accent-light `#74E7DA`, surface-soft `#D4F2F4`, ink-dark `#101820`, surface-light `#F7F8F5`. A diferencia de D22 (modernización de aplicación tipográfica dentro de la libertad de D1), esto **no** es una modernización de aplicación — es un cambio de identidad de color que ya no corresponde a ningún valor del manual de marca. El Owner confirmó explícitamente reemplazarla (no conservarla como candidata), entendiendo que requiere registro como decisión y validación formal de Product Lead/cliente antes de Gate 1 — no queda aprobada como identidad de marca definitiva por esta sola instrucción de prototipo | Owner, 2026-07-29 | **Reemplazado por D26** como dirección futura; persiste únicamente en estilos heredados de la Home hasta su siguiente iteración |
| D24 | **Posicionamiento y portafolio de servicios.** AAA representa exclusivamente a acreedores en procesos de insolvencia; no asesora ni representa al deudor insolvente. El servicio antes presentado como “Insolvencia” pasa a denominarse **“Defensa de acreedores en procesos de insolvencia”**. Derecho Concursal deja de ser un macroservicio independiente y se integra como disciplina técnica dentro de ese servicio. El portafolio visible se reduce de cuatro focos a tres: Defensa de acreedores en procesos de insolvencia, Normalización de Activos y Derecho Corporativo. En Inicio se conservan sin cambios el H1, el subhead y la banda de credibilidad; el mosaico se titula “Tres focos, un mismo rigor técnico”. Los contenidos de hero de Servicios y Contacto se intercambian: Servicios recibe el posicionamiento “Soluciones para acreedores / ¿Un deudor puso en riesgo tu crédito?” y Contacto recibe “Soluciones jurídicas para proteger, normalizar y recuperar activos”. | Cliente (Julián), reunión reportada y aprobada por el Owner, 2026-08-04 | Vigente — reemplaza la estructura anterior de cuatro focos |
| D25 | **Iteración 2 — Narrativa de Homepage.** La Homepage adopta un recorrido de siete momentos: reconocimiento del problema → qué hace AAA → cómo interviene → razones para confiar → evidencia/casos de éxito → equipo → contacto. El hero se reemplaza por el problema explícito del acreedor y usa “Hablemos de su caso” como CTA a Contacto y “Conozca cómo lo hacemos” como CTA a Servicios. Se incorporan bloques de situaciones, definición de AAA, tres servicios, cinco razones de confianza y casos de éxito. Los casos, logos, testimonio y cifra se muestran únicamente como placeholders hasta recibir evidencia publicable del cliente. La sección de sectores se conserva sin cambios. El equipo usa una fotografía, texto corto, CTA y una banda animada de pills con los tres integrantes/cargos confirmados; no se inventan perfiles y las fotos individuales permanecen como avatares pendientes. El cierre pasa a “Conversemos sobre su caso”. No se crean archivos, carpetas, componentes ni cambios de arquitectura; se reutiliza el sistema existente de Homepage. | Owner, 2026-08-04 | Vigente en la Homepage candidata C2 — pendiente de QA y Gate 1 |
| D26 | **Visual Language Lab como sistema vigente.** La Product Lead aprueba la dirección visual general de `prototype/type-lab.html`. El sistema adopta Playfair Display para títulos y énfasis, Instrument Sans para lectura/UI, una paleta reducida alineada con marca (`#063B59`, `#B9CEED`, `#F5F3EE`, `#FFFFFF`, `#CAA181`, `#D9D9D9`, `#111820`) y una escala de espaciado `4/8/12/16/24/32/48/64/96/128`. Se conserva la estructura y el responsive existentes; no se crean dependencias, frameworks ni arquitectura nueva. **Migración ejecutada (2026-08-05):** aplicado a las 7 páginas construidas del prototipo vía `tokens.css`/`base.css`/`components.css` (compartidos por todo el sitio, no solo Home) y el `<link>` de Google Fonts en cada página. De paso se cerraron dos pendientes de refinamiento del laboratorio (degradados/iconografía, ver QA.md → D-10) y se corrigieron cuatro defectos encontrados durante la migración misma (ver QA.md → D-11 a D-14): texto ilegible en cards claras dentro de secciones oscuras, un asset SVG (mapa de sectores) con colores fijos de la paleta anterior, un anillo de foco de teclado invisible en el formulario de postulación, y una card de cierre que todavía tenía degradado. | Product Lead, 2026-08-05; migración ejecutada 2026-08-05 | Vigente e implementado en las 7 páginas del prototipo |
| D27 | **Ronda de correcciones SEO en Homepage.** Insumo: `inputs/resources/REVISION-2-COPYS-HOME.docx`. El documento presentaba, para 3 bloques, dos opciones de copy sin ganador marcado, y una sugerencia adicional que requería fabricar una cifra. El Owner resolvió cada punto explícitamente (no se asumió ninguno por defecto): (1) Hero H1+p → "Propuesta inicial" del documento ("Insolvencia y derecho corporativo: somos la voz del acreedor" + párrafo), sobre "Opción 2" (tuteo, habría requerido cambiar CTAs de todo el sitio) y sobre mantener el H1 anterior (abría con "deudor", señalado por SEO como potencialmente confuso); (2) H2 "Situaciones" → "¿Eres acreedor y te enfrentas a alguno de estos riesgos?" (Opción B del documento); (3) H2 "Cómo intervenimos" → "Soluciones jurídicas para proteger, normalizar y recuperar activos" (Opción A, coherente con los 3 servicios listados debajo — nota: esta misma frase ya aparece en el meta-description de `captacion-b2b.html`/Contacto por D24; es solapamiento leve de meta-description vs. H2 de otra página, no un H1/H2 duplicado, no se considera bloqueante). Además, se aplicó sin necesidad de elegir entre opciones el ajuste del párrafo de "Qué hace AAA" (repetía la idea del párrafo del hero). **Rechazado explícitamente:** la sugerencia de SEO de titular "Casos de éxito" con una cifra de ejemplo ("+50 casos...") — no hay cifra real aprobada por el cliente; contradice la regla ya vigente de no inventar métricas/casos (ver AGENTS.md → Prohibiciones, REFERENTS.md → Principios obligatorios). El H2 de esa sección se mantiene sin cambios. | Owner, 2026-08-10 | Vigente — aplicado en `prototype/index.html` |
| D28 | **Ajuste post-D27 en Home.** (1) Se retira el eyebrow "¿Se identifica con alguna de estas situaciones?" de la sección Situaciones — quedaba una pregunta justo encima de otra pregunta (el H2 de D27). (2) El H2 de esa misma sección pasa de tuteo a "usted": "¿Es acreedor y se enfrenta a alguno de estos riesgos?" (antes: "¿Eres acreedor y te enfrentas...?"), por consistencia de registro con el resto del copy de Home. **Nota de alcance más amplio, no aplicada por esta decisión:** el Owner señaló mezcla de tuteo/usted en el Home; al revisar el resto del prototipo se confirmó que el CTA global "Consulta tu caso aquí" (fijado literalmente por D18, aparece en el header de las 8 páginas) y varias piezas de `servicios.html`, `captacion-b2b.html` y `nuestro-equipo.html` usan tuteo. Homogeneizar el registro en todo el sitio es una decisión de mayor alcance (toca D18) que no se asume aquí — queda pendiente de que el Owner la autorice explícitamente. | Owner, 2026-08-10 | Vigente — aplicado en `prototype/index.html` |
| D29 | **Homogenización de registro a "usted" en todo el sitio.** El Owner confirmó extender el ajuste de D28 (solo Situaciones) a las 8 páginas del prototipo. Cambia: el CTA global "Consulte su caso aquí" (antes "Consulta tu caso aquí", fijado literalmente por D18 — este cambio actualiza esa literalidad, no la función/comportamiento del CTA); hero de Servicios "¿Un deudor puso en riesgo su crédito?" y su CTA de cierre "¿Su empresa tiene un crédito en riesgo...? / Consulte su caso con ADY" (wording literal de D24, actualizada aquí); Contacto/Captación B2B "Cuéntenos su caso y le contactamos con un diagnóstico inicial"; Nuestro Equipo/Postulación "¿Ve su carrera en AAA? Cuéntenos quién es usted.", botón "Postúlese" (antes "Postúlate", D8/D17), y la nota de envío del formulario; y el aviso de cookies ("Puede conocer más...") en las 8 páginas. content/*.md actualizado en paralelo para que la documentación no quede desincronizada del prototipo. Las decisiones D18/D24/D8/D17 no se eliminan ni se recontradicen en su función — solo se actualiza la literalidad del copy que citaban. | Owner, 2026-08-10 | Vigente — aplicado en las 8 páginas de `prototype/` y en `content/*.md` |
| D30 | **Tipografía: reemplazo del Visual Language Lab (D26) por la del manual de marca.** Títulos en Big Caslon, cuerpo/descripciones en Krub — alineado al manual de marca (D1), reemplaza Playfair Display + Instrument Sans (D26). Big Caslon no existe como webfont libre (fuente de sistema de macOS/iOS, ausente en Windows/Android); presentadas las opciones, el Owner eligió **Libre Caslon Display** como sustituto gratuito de la misma familia Caslon, con render idéntico en el 100% de navegadores — no es el archivo original, es una decisión explícita y documentada, no una aproximación silenciosa. Complicaciones técnicas resueltas: Libre Caslon Display solo trae el corte 400 (sin negrita real, sin itálica real) — se bajó `font-weight` de encabezados de 500/600 a 400 en `base.css`/`components.css` para evitar negrita sintética, y `.text-gradient` (usado para el énfasis en degradado dentro de H1) pasa a usar **Libre Caslon Text** (itálica real, misma familia) en vez de heredar una itálica sintética de Libre Caslon Display. También se quitó el tracking negativo calibrado para Playfair Display (D26) — un serif clásico como Caslon se lee mejor sin tracking apretado; criterio candidato, sujeto a QA visual. Verificado visualmente en las 8 páginas vía servidor estático local antes de publicar — sin negrita ni itálica distorsionada, sin regresiones de contenido. `prototype/type-lab.html` (laboratorio histórico de D26) se dejó sin tocar — sigue cargando Playfair Display/Instrument Sans a propósito, como registro de esa exploración pasada. | Owner, 2026-08-13 | Vigente — aplicado en las 8 páginas de `prototype/` |
| D31 | Se retira el CTA de texto "Si alguna de estas situaciones le resulta familiar, podemos ayudarle." (enlace a `captacion-b2b.html`) al final de la sección Situaciones en Inicio — quedaba redundante bajo el H2 en pregunta (D27/D28). No deja la página huérfana de acceso a Captación B2B: el CTA primario del hero ("Hablemos de su caso") ya enlaza ahí. | Owner, 2026-08-20 | Vigente — aplicado en `prototype/index.html` |
| D32 | **Rediseño de "Nuestra metodología" en Servicios, a flujograma sin scroll (pedido del cliente).** El cliente pidió reducir el espacio entre los módulos de la metodología y que los 3 pasos (diagnóstico, estrategia, representación) se vean como un flujograma sin necesidad de hacer scroll. Investigado antes de tocar código: esta sección **nunca existió en Home** (`index.html`/`content/01-inicio.md`) en el historial completo del repositorio (todos los commits, ambas ramas) — el Owner la buscó ahí por confusión. Vive en `servicios.html` (coincide textualmente con "Diagnóstico"/"Estrategia"/"Representación") y, con copy distinto, en `captacion-b2b.html` § "Nuestro proceso". El Owner confirmó aplicar el cambio **solo en Servicios**. Se retira el stepper con scroll (cada paso reservaba 50vh, activación por `IntersectionObserver` al cruzar el centro del viewport, columna sticky) y se reemplaza por 3 nodos conectados con flechas, visibles enteros sin scroll en desktop. Clases nuevas y **aditivas** en `components.css` (`.stepper__flow`/`.stepper__node`/`.stepper__connector`) — las clases del stepper original (`.stepper__grid`/`.stepper__intro`/`.stepper__steps`/`.stepper__step`) no se tocan y siguen intactas en Captación B2B, verificado que su comportamiento no cambió. Sin JS nuevo: los nodos son estáticos desde el primer render, no hay estado que observar. Verificado visualmente en desktop y mobile (conector rotado a vertical al apilarse) con servidor estático local antes de publicar. | Owner, 2026-08-20 | **Reemplazado por D33** — el Owner pidió revertir el flujograma; el diseño de nodos conectados no se conserva |
| D33 | **Reversión de D32: se conserva el diseño original de "Nuestra metodología" en Servicios, sin scroll y con menos espacio.** El Owner pidió deshacer D32 (no quería el flujograma de nodos) y en su lugar mantener el diseño de 2 columnas de 2026-07-31 (columna sticky + 3 pasos con icono/título/párrafo) — pero sin la activación por scroll (los pasos ya no se atenúan fuera de foco) y con el espacio entre pasos reducido. Se agregó el modificador `.stepper--compact` (nuevo, scoped a la sección de Servicios) en vez de modificar las clases compartidas — `.stepper__grid`/`.stepper__intro`/`.stepper__steps`/`.stepper__step` vuelven a ser exactamente las originales, así que Captación B2B § "Nuestro proceso" (mismo componente, sin el modificador) no se ve afectada; verificado explícitamente (min-height y atenuado por scroll intactos ahí). `.stepper--compact` sobrescribe `min-height: 50vh` → `0` y neutraliza el atenuado de pasos fuera de foco (`opacity/transform` forzados a su estado "visible" sin importar `.is-active`). De paso quedó documentado (no corregido, fuera de este ámbito) un bug preexistente: `.stepper__step` usa `padding-block: var(--space-10)`, token que no existe en la escala de `tokens.css` — la declaración original es inválida y no tiene efecto; sigue así en Captación B2B, no se tocó. No se modificó `js/main.js`: el `IntersectionObserver` que activa/desactiva `.is-active` sigue corriendo también sobre los pasos de Servicios, pero ya no tiene efecto visual dentro de `.stepper--compact`. Verificado visualmente en desktop y mobile con servidor estático local. | Owner, 2026-08-20 | Vigente — aplicado solo en `prototype/servicios.html` |
| D34 | **Header/menú: se quita el selector de idioma, se acorta el CTA a "Mi caso", y se unifica el logo real en las 8 páginas.** Tres pedidos del cliente/Owner sobre el menú principal: (1) quitar el selector "ES · EN" por ahora; (2) acortar el texto del botón de header de "Consulte su caso aquí" a **"Mi caso"**; (3) el Owner notó que el menú de Home es distinto al de las demás páginas y pidió aplicar los cambios en Home y replicarlos. Investigado antes de replicar: la diferencia no era solo "logo vs. texto" — Home usa una arquitectura de header completamente distinta (barra sólida de ancho completo, grid de 3 columnas) mientras las demás páginas usan la píldora flotante con efecto vidrio del sistema visual vigente (D26). Presentado esto al Owner con AskUserQuestion, **se descartó replicar la arquitectura completa de Home** — se mantiene la píldora flotante en las 6 páginas interiores (es el sistema visual actual) y solo se reemplaza el texto plano "AAA Estudio Legal" por el logo real (isotipo + wordmark SVG), dimensionado para esa píldora (más compacto que el de Home, que está pensado para una barra de 78px de alto). Sin animación de aparición del isotipo ni swap claro/oscuro del wordmark (ninguna página activa hoy `data-header-theme="light"`, queda dormido en ambos casos). Aplicado en las 7 páginas reales (Home + Servicios + Contacto + Nuestro Equipo + Blog + 2 artículos) — `proximamente.html` se dejó sin tocar a propósito, es un stub minimalista sin menú completo. Reglas CSS nuevas sin scope `.home-page`, así que Home conserva su propio tamaño de logo por especificidad de cascada, sin cambios. El botón "Consulte su caso aquí" del **cuerpo** de página (hero y cierre de Captación B2B) no se tocó — el pedido era sobre el botón del menú, no sobre CTAs de contenido. Verificado visualmente en las 7 páginas, desktop y mobile, sin errores de consola. | Owner, 2026-08-20 | **Parcialmente reemplazado por D36** — el texto del botón de header ("Mi caso") vuelve a "Contacto"; el resto (sin selector de idioma, logo real unificado) sigue vigente |
| D35 | Se reordena Home: la sección "Sectores de experiencia" pasa a ubicarse **antes** que "Casos de éxito" (antes iba después). Solo cambia el orden de las dos secciones completas — ningún contenido dentro de ellas se modificó. | Owner, 2026-08-20 | Vigente — aplicado en `prototype/index.html` |
| D36 | **Reestructuración del menú principal (las 7 páginas reales).** (1) Se decide no incluir la sección de Blog en el menú visible de esta fase — **no se elimina la página**, `noticias-analisis.html` y los 2 artículos siguen existiendo y accesibles por URL directa, solo se quita el enlace del menú ("oculto"). (2) El enlace de Blog se reemplaza en el menú por **"Trabaja con nosotros"**, que apunta a la sección de postulación ya existente dentro de Nuestro Equipo (`nuestro-equipo.html#postulacion-heading`) — no se construyó página nueva, confirmado explícitamente por el Owner tras presentarle la alternativa (página independiente, como la antigua Talento AAA). (3) Las etiquetas del menú se renombran sobre las mismas páginas existentes, sin crear páginas nuevas (confirmado explícitamente): "Servicios" → **"Metodología"**, "Nuestro Equipo" → **"Quiénes somos"**. (4) "Nuestra Experiencia" se quita del menú (seguía sin construirse, apunta a `proximamente.html`). (5) "Contacto" se quita de la lista de enlaces regulares — el Owner inicialmente pidió "Mi caso" en su lugar (ya estaba así desde D34), pero corrigió: se mantiene el mismo botón destacado del header, solo que su texto vuelve a **"Contacto"** (revierte esa parte de D34, confirmado explícitamente con una pregunta de desambiguación). Menú final (`<ul>` de navegación regular): Inicio, Metodología, Quiénes somos, Trabaja con nosotros — más el botón destacado "Contacto" fuera de esa lista. En Nuestro Equipo, `aria-current="page"` queda solo en "Quiénes somos" — "Trabaja con nosotros" no lo lleva aunque apunte a la misma página, por ser un ancla a una sección, no la identidad de la página. **No se tocó** el segundo listado de navegación que existe en el **footer** ("Mapa del sitio") de las 7 páginas — el pedido del Owner fue explícitamente sobre "el main menú"; el footer conserva los 6 enlaces originales (Servicios/Nuestro Equipo/Blog/Contacto con sus nombres previos). Verificado visualmente en las 7 páginas (desktop y mobile) y probado el enlace de ancla de "Trabaja con nosotros" navegando directo a la URL — aterriza correctamente en el formulario de postulación, sin errores de consola. | Owner, 2026-08-20 | Vigente — aplicado en las 7 páginas reales del prototipo (menú de header); footer sin cambios |

*(Autoría del blog **sigue pendiente**, sin decisión — ver STATUS.md. No bloquea C0.)*

## Ficha C0 (candidata — Sesión 01, pendiente de validación Product Lead)

> No autoaprobada. Producida por Sesión 01 a partir de AGENTS.md, PROJECT.md, REFERENCES.md, REFERENTS.md, STATUS.md y QA.md. Sintetiza por referencia — no reproduce las secciones ya desarrolladas arriba.

| Dimensión | Síntesis | Detalle |
|---|---|---|
| Negocio | Rediseño de agudeloabogados.com como materialización de un reposicionamiento de marca (de generalista/antigua a especializada/madura/tecnológica), bajo "AAA Estudio Legal" | [Resumen](#resumen) |
| Objetivo | **Actualizado (D15):** principal = reconocimiento de marca y showcase de servicios; secundario = atracción de talento (invierte la lectura previa). Cerrado con Conversión (D17) — sin tensión | [Objetivo](#objetivo) |
| Usuarios | **Actualizado (D15):** primario = mercado/clientes potenciales y corporativos; secundario = talento jurídico potencial | [Audiencia](#audiencia) |
| Conversión | **Cerrado (D17/D18):** principal = captar empresas (D9, formulario) con ADY como mecanismo destacado ("Consulta tu caso aquí", D18); secundario y contextual = formulario de talento (D8), solo en Talento AAA | [Conversión](#conversión) |
| Alcance incluido | Hasta 6 secciones + página legal (D2), WordPress administrable, hasta 2 CPT (diferido, D3), hasta 6 banners, hasta 3 formularios, SEO/GEO, UX Writing, 2 posts de blog, migración de hosting, Polylang, GA4/GTM, capacitación 1h | [Alcance](#alcance) |
| Alcance excluido | Integraciones ERP/CRM, funcionalidades a medida, copy extenso (ver D5), banco de imágenes/video, plugins adicionales, mantenimiento post-lanzamiento, animaciones de scroll detalladas (diferidas a C2, D7), CPTs definidos (diferido a 03A, D3) | [Alcance](#alcance) |
| Hechos confirmados | Marca, colores (`#063B59` + gama dorada), tipografías (Big Caslon/Krub), stack actual (WordPress+Elementor+LiteSpeed), moneda COP (D4) | [STATUS.md → Hechos confirmados](STATUS.md) |
| Hipótesis | "Hasta 4 casos de éxito" consistente entre slides pero ausente de la tabla de especificaciones técnicas — no confirmado como compromiso duro | [STATUS.md → Hipótesis](STATUS.md) |
| Vacíos (no bloquean C0) | ✅ Dirección resuelta (D14). Quedan: autoría del blog; **crítico:** casi todo el contenido de Talento AAA sin responder; casos de éxito estructurados sin llenar; estatus del párrafo narrativo de servicios sin aclarar; **nuevo:** orden de conversión sin reconfirmar tras D15 | [STATUS.md → Vacíos pendientes](STATUS.md) |
| Riesgos principales | (1) 7ª y 8ª página (legal, B2B) como posible fricción contractual; (2) filtración de las 14 áreas de práctica hacia los 3 macroservicios vigentes (D24); (3) ambición visual vs. factibilidad WordPress (D7); (4) D9 (B2B como conversión terciaria) sigue sin sustento directo del cliente — pendiente Product Lead; (5) vacío crítico de contenido en Talento AAA | [STATUS.md → Riesgos](STATUS.md) |
| Sitemap preliminar | 8 páginas: Inicio, Talento AAA, Capacidad Técnica, Nuestro Equipo, Nuestra Experiencia, Noticias y Análisis, Página Legal (D2, fuera de conteo), Captación B2B (D11, **no contratada**, pendiente Product Lead/Change Request) + elemento transversal ADY (CTA) | [Sitemap](#sitemap) |

### Contradicciones — vendido / pedido / disponible

| Eje | Vendido (propuesta) | Pedido (brief) | Disponible (brochure / sitio actual) | Tensión y estado |
|---|---|---|---|---|
| N.º de páginas | "Hasta 6 secciones" (slide 6) | No amplía | — | 7ª página legal autorizada fuera del conteo (D2); 8ª página de captación B2B (D11) **no contratada**, probable Change Request. Ambas pendientes de confirmación con Product Lead/Uhura — abierta |
| Conversión / audiencia | No define acción de conversión | Prioriza talento sobre lead comercial directo (interpretación previa) | — | ✅ Resuelta (D17, Owner, 2026-07-23): conversión principal = empresas (B2B); talento es secundario y estrictamente contextual. Cierra contradicciones #6 y #10 |
| Áreas de práctica | No fija número | D24 reduce el relato a 3 macroservicios (Defensa de acreedores en insolvencia, Normalización de Activos, Corporativo); Concursal queda integrado en el primero | Brochure y sitio actual listan 14 áreas | Riesgo de filtración si el brochure se usa sin aplicar el filtro acordado (STATUS.md, contradicción #5) |
| Extensión de copy | Excluye "copy extenso" (slide 7) | Pide reescritura completa / "UX Writing" (slide 6, pregunta 5) | — | Resuelta (D5): extensión por criterio narrativo/escaneabilidad, no por regla fija de longitud |
| CPTs | Techo hasta 2 CPT / 6 campos c/u | No menciona | — | Diferido a 03A (D3) |
| Datos de contacto | No define | No define | Brochure: Oficina 701; sitio actual: Oficina 403; brief ampliado: Calle 28 Norte #6BIS-26 | ✅ Resuelta (D14, Owner, 2026-07-23): dirección definitiva = Calle 28 Norte #6BIS-26, Barrio San Vicente, Cali |
| Identidad de marca | No define visualmente | Marca "AAA Estudio Legal" (2024) | Sitio actual publica "Agudelo Abogados Asociados" | No es contradicción a resolver — es la evidencia que justifica el proyecto |
| Timeline | 3 cifras distintas entre slides 7/10/11 (4–6 sem. / 4 sem. / 6 sem. laborables) | No menciona | — | Abierta, no bloquea C0 (STATUS.md, contradicción #3) |

**Estado de la ficha:** ✅ Aprobada (STATUS.md, 2026-07-23). Base congelada para C1 — cambios posteriores se registran como nuevas decisiones (D14+), no como reapertura silenciosa.

## Ficha C1 (candidata — pendiente de QA de Content y consolidación de Product Lead)

> Base: C0 aprobado (STATUS.md, 2026-07-23). No es diseño ni código — solo narrativa, sitemap, referentes y marco técnico preliminar. No se copió identidad ni código de los referentes. Contenido extenso por página vive en [/content/](content/); aquí solo se sintetiza y se apunta.

### Sitemap propuesto (propósito y CTA distintos por página)

| # | Página | Propósito | CTA principal |
|---|---|---|---|
| 1 | Inicio | Reconocimiento de marca; presentar de inmediato la conversión principal | "Consulta tu caso aquí" (D18, vía ADY) |
| 2 | Capacidad Técnica (Servicios) | Profundidad técnica en los 3 macroservicios, con representación exclusiva del acreedor explícita (D24) | "Consulta tu caso aquí" (D18) |
| 3 | Nuestra Experiencia (Clientes) | Prueba social editorial, sectores y casos | "Ver casos" (enlaza suave a la conversión principal) |
| 4 | Nuestro Equipo | Solidez humana — founders y equipo | Enlaces a LinkedIn/perfiles (sin CTA comercial) |
| 5 | Talento AAA | Cultura genuina; formulario **secundario y contextual** (D17) — no aparece fuera de esta página | "Postúlate" (solo aquí, nunca global) |
| 6 | Captación de empresas (insolvencia) | Comprador B2B, objeciones resueltas — acción **principal** (D17); página **no contratada** (D11) | "Consulta tu caso aquí" / formulario nativo de empresas |
| 7 | Noticias y Análisis (Blog) | SEO/GEO, especialización técnica | "Lee el análisis completo" |
| 8 | Página Legal | Cumplimiento (D2) — sin outline de contenido | Ninguno |
| — | ADY (transversal, D18) | Mecanismo destacado de la conversión principal | "Consulta tu caso aquí" → URL externa (a compartir) |

**Nota de jerarquía (D17/D18):** el CTA "Consulta tu caso aquí" es el mismo mensaje en todas sus apariciones (Inicio, Servicios, ADY) — es la conversión principal del sitio. El formulario de Talento AAA usa un CTA distinto ("Postúlate") y nunca compite por el mismo espacio visual que el CTA principal.

Outline por página, insumos y vacíos específicos: ver [/content/](content/) (archivos 00–08 y 09).

### Narrativa global (resumen — detalle en [content/00-narrativa-global.md](content/00-narrativa-global.md))

Mensaje central: AAA Estudio Legal representa exclusivamente al acreedor — no al deudor insolvente — con rigor técnico y tecnología visible. Su portafolio se articula en tres macroservicios: Defensa de acreedores en procesos de insolvencia, Normalización de Activos y Derecho Corporativo (D24). **Jerarquía de conversión (D17/D18):** captar empresas es la acción principal, con ADY ("Consulta tu caso aquí") como su mecanismo destacado; talento es secundario y solo aparece en su propio contexto. Tensiones de tono a vigilar: "normalización de activos" premium (no cobranza), masividad sin perder calidad.

### Matriz de referentes

| Referente | Rasgo útil | Límite | Aplicación en este proyecto | Riesgo |
|---|---|---|---|---|
| Visual 01 — Autoridad | Hero oscuro con prueba social e indicadores integrados; cards editoriales para servicios | Dorado solo acento, sin saturar; no caer en tono "abogado independiente" | Hero de Inicio (con foto real); cards de los 3 macroservicios en Capacidad Técnica | Inventar cifras/certificaciones si no hay datos reales aprobados |
| Visual 02 — Sistema modular | Retícula modular, cards con distinto peso, hover states claros | No convertir todo en dashboard; evitar exceso de cards pequeñas | Grid de los 3 macroservicios y de beneficios/capacidades | Restar seriedad institucional por exceso de lenguaje "startup" |
| Visual 03 — Elegancia institucional | Hero fotográfico con overlay, transición curva, equipo con fotografía vertical | Sin balanzas/mazos/iconografía jurídica genérica; dorado opaco, no metálico | Nuestro Equipo (founders + equipo); transición hero→contenido en Inicio | Caer en cliché de "bufete tradicional" con fotografía de stock |
| OlarteMoure — carrera-om | Cultura contada por personas reales, no enunciada | Requiere testimonios reales, no se puede simular | Talento AAA — pero **no ejecutable todavía** (sin testimonios ni respuestas del cliente) | Inventar testimonios o cultura no confirmada |
| Kreisson — scrollytelling progresivo | Narrativa que evoluciona con el scroll | Diferido a C2 (D7); requiere JS mínimo y fallback | Candidato para Capacidad Técnica o Inicio | Sobrecargar performance/accesibilidad si se implementa sin cuidado |
| Sheff&Cook — sticky crossfade | Contenido fijo + imagen que cambia por bloque activo | Diferido a C2 (D7); requiere `prefers-reduced-motion` y fallback sin JS | Candidato para Capacidad Técnica (los 3 macroservicios) | Igual que arriba — no se implementa hasta que C2 confirme factibilidad en WordPress |

### Principios visuales/narrativos propios (traducidos de los referentes, no copiados)

1. Autoridad editorial, no comercial genérica: contenido real (casos, experiencia, cifras aprobadas) antes que adjetivos vagos.
2. Alternancia clara/oscura como ritmo de marca, no decoración — oscuro para momentos de autoridad, claro para lectura pausada.
3. Sistema modular consistente (retícula + cards de distinto peso) que se sienta digital sin perder seriedad institucional.
4. Fotografía y voz humana genuina (equipo real, sin stock genérico ni testimonios inventados) como prueba de solidez.
5. Tecnología como trasfondo narrativo (ADY representa innovación/robustez, D18) que ahora también actúa como el CTA de conversión más visible del sitio — no se explica qué es ADY, pero sí se hace evidente que hay tecnología detrás del "Consulta tu caso aquí".
6. Progressive enhancement en toda interacción avanzada (scroll, crossfade): funcional sin JS, respetando `prefers-reduced-motion`.

### Marco técnico preliminar (candidato — no reemplaza 03A)

- **CMS:** WordPress, administrable sin código.
- **Tema:** block theme propio (no Elementor, no plugins de constructor de página).
- **Editor:** Gutenberg nativo, sin modo experimental (AGENTS.md, prohibiciones).
- **Diseño por datos:** `theme.json` como fuente de tokens (color, tipografía, spacing) — no CSS suelto por bloque.
- **Composición:** patterns + template parts reutilizables; **core blocks primero** — bloques custom solo si un core block no alcanza, y con decisión registrada.
- **JavaScript:** mínimo, progressive enhancement, sin frameworks (D7 ya fija esto para scroll/interacciones).
- **HTML:** semántico, accesible por defecto (landmarks, encabezados jerárquicos).
- **CSS:** por tokens de `theme.json` / custom properties, no clases utilitarias ad-hoc ni Tailwind (restricción ya vigente para el prototipo, se traslada al tema).
- **Plugins:** mínimos — ninguno nuevo sin necesidad y decisión registrada (AGENTS.md). CPTs diferidos a 03A (D3).
- **Entornos:** Local → Staging → Producción, repositorio Git privado (ya inicializado).
- **Administrabilidad:** todo el contenido editable desde WordPress, sin dependencia de código para cambios de contenido.
- **Responsive:** mobile-first o adaptado, no solo reducción proporcional del desktop (REFERENTS.md → principios obligatorios).
- **Accesibilidad:** contraste AA mínimo, estados hover/focus/active, `prefers-reduced-motion` respetado.
- **SEO básico:** URLs limpias, metadatos editables, hreflang vía Polylang (ya contratado).

### Contenido/evidencia faltante (consolidado — detalle en STATUS.md → Vacíos)

Casi todo el contenido de Talento AAA; casos de éxito estructurados (Nuestra Experiencia); estatus del párrafo narrativo candidato de servicios; fotografías/logos (confirmados disponibles, no entregados); testimonios de talento (no existen); autoría del blog.

### Preguntas de decisión (para Product Lead)

- ¿Se confirma la página de captación de empresas (D11) como Change Request formal, o se descarta a favor de alojar el formulario en una página ya vendida (p. ej. Capacidad Técnica)?
- Nombre final de esa página (candidatos sin decidir en [content/06-captacion-b2b.md](content/06-captacion-b2b.md)).
- Cuando se comparta la URL externa de ADY (D18), ¿el CTA "Consulta tu caso aquí" y el formulario nativo de empresas (D9/D12) son el mismo flujo, o dos entradas distintas al mismo objetivo? No se resuelve hasta conocer la URL.
- Reparto de los "hasta 3 formularios" entre empresas, Talento y cualquier otra necesidad (contacto general, newsletter).

*(Cerradas en esta actualización: "quiénes somos" — D19, estructura creada, copy pendiente del cliente; Microsoft Clarity — D20, propuesta adoptada.)*

**Estado:** ✅ C1 aprobado (2026-07-23) y ✅ **copy final aprobado (D21, 2026-07-24)** — v1 para Nuestra Experiencia/Talento AAA/Noticias y Análisis, v2 (SEO) para Inicio/Capacidad Técnica/Nuestro Equipo/Captación de empresas. Página Legal (08) sin outline de contenido por regla D2; ADY (09) es especificación técnica. Placeholders explícitos donde falta insumo del cliente (Talento AAA, biografía de founders, casos de éxito) — no aprobados como finales, no inventados. **C2 — prototipo candidato construido (2026-07-29)**, ver [STATUS.md](STATUS.md) → "C2 — Prototipo": `/prototype/` (Inicio + Capacidad Técnica), pendiente de QA de Content y consolidación de Product Lead antes de Gate 1. La página de empresas (D11) no se incluyó por falta de confirmación contractual.

## Definition of Done

Para B00 (inicialización + cierre de decisiones sobre pendientes), el DoD es:
- [x] Insumos inspeccionados en solo lectura (brief, propuesta, brochure, manual de marca, sitio actual, repositorio)
- [x] Estructura documental creada (AGENTS.md, PROJECT.md, REFERENCES.md, STATUS.md, QA.md, REFERENTS.md, .gitignore)
- [x] Contradicciones, hipótesis, vacíos y riesgos hechos visibles (STATUS.md)
- [x] Git inicializado (sin commits — no solicitados)
- [x] Decisiones del Owner sobre los 8 pendientes registradas (D2–D7 arriba; dirección de oficina y autoría del blog quedan explícitamente pendientes, sin bloquear C0)
- [x] Ficha C0 producida y **aprobada** (2026-07-23, ver STATUS.md).

Para el **proyecto completo**, el DoD (a nivel propuesta, sujeto a Gate 2) es:
- Sitio implementado en WordPress, administrable, con hasta 6 secciones + blog
- SEO/GEO + performance verificados
- QA en 3 capas (técnico/visual/funcional) superado
- Gate 2 aprobado por el cliente (funcionalidad validada, hasta 2 rondas de QA cliente)
- 1 ronda de ajustes post-QA cliente consolidada e incorporada
- Capacitación de administración entregada (1 hora)
