<?php
/**
 * Title: Metodología — página completa
 * Slug: aaa-estudio-legal/metodologia-full
 * Categories: aaa-estudio-legal
 * Description: Página "Metodología" completa (prototype/servicios.html + cambios del cliente de la PPTX "Estructura y Copies", láminas 13–18, y de la salvedad del 23-sep — D123): hero editorial, "Nuestra metodología" (línea de tiempo de 3 pasos), "Representación especializada" (3 tarjetas con los servicios en viñetas), Transparencia y el mismo cierre "Conversemos" de Inicio. Asignar la plantilla "Página con motion editorial (GSAP)" a esta página.
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","className":"hero-immersive hero--editorial hero--editorial--services is-dark-surface","align":"full"} -->
<section class="wp-block-group alignfull hero-immersive hero--editorial hero--editorial--services is-dark-surface">
	<!-- wp:group {"className":"hero-shell"} -->
	<div class="wp-block-group hero-shell">
		<!-- wp:group {"className":"hero-shell__media"} -->
		<div class="wp-block-group hero-shell__media">
			<!-- wp:image {"className":"hero-shell__img"} -->
			<figure class="wp-block-image hero-shell__img"><img src="<?php echo esc_url( aaa_media_url( 'aaa-hero-metodologia.webp' ) ); ?>" alt="Integrantes del equipo de AAA Estudio Legal trabajando en la oficina" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"hero-shell__scrim"} --><div class="wp-block-group hero-shell__scrim"></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"hero-shell__content"} -->
		<div class="wp-block-group hero-shell__content">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Soluciones jurídicas</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"className":"hero__title"} -->
			<h1 class="wp-block-heading hero__title">Insolvencia, recuperación de cartera y asesoría corporativa, <em class="aaa-text-emphasis">bajo un mismo método.</em></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"stepper stepper--timeline surface-theme--dark-primary is-dark-surface aaa-section","backgroundColor":"navy-deep","textColor":"white","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull stepper stepper--timeline surface-theme--dark-primary is-dark-surface aaa-section has-white-color has-navy-deep-background-color has-text-color has-background">
	<!-- wp:group {"className":"stepper__layout"} -->
	<div class="wp-block-group stepper__layout">
		<!-- wp:group {"className":"stepper__intro section-heading--editorial aaa-motion-section-title"} -->
		<div class="wp-block-group stepper__intro section-heading--editorial aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Nuestra metodología</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Primero estudiamos, <em class="aaa-text-emphasis">después decidimos.</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"stepper__steps"} -->
		<div class="wp-block-group stepper__steps">
			<!-- wp:group {"className":"stepper__step aaa-reveal aaa-stagger-0"} -->
			<div class="wp-block-group stepper__step aaa-reveal aaa-stagger-0">
				<!-- wp:group {"className":"stepper__node"} --><div class="wp-block-group stepper__node"></div><!-- /wp:group -->
				<!-- wp:image {"className":"stepper__photo"} -->
				<figure class="wp-block-image stepper__photo"><img src="<?php echo esc_url( aaa_media_url( 'aaa-paso-diagnostico.webp' ) ); ?>" alt="" /></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"stepper__body"} -->
				<div class="wp-block-group stepper__body">
					<!-- wp:paragraph {"className":"stepper__index"} --><p class="stepper__index">01</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Diagnóstico</h3><!-- /wp:heading -->
					<!-- wp:paragraph --><p>Antes de actuar, estudiamos el caso completo: el título, la garantía, la situación del deudor y el momento del proceso. De ese estudio sale una ruta viable y proporcional a lo que está en juego.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"stepper__step aaa-reveal aaa-stagger-1"} -->
			<div class="wp-block-group stepper__step aaa-reveal aaa-stagger-1">
				<!-- wp:group {"className":"stepper__node"} --><div class="wp-block-group stepper__node"></div><!-- /wp:group -->
				<!-- wp:image {"className":"stepper__photo"} -->
				<figure class="wp-block-image stepper__photo"><img src="<?php echo esc_url( aaa_media_url( 'aaa-paso-estrategia-equipo.webp' ) ); ?>" alt="" /></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"stepper__body"} -->
				<div class="wp-block-group stepper__body">
					<!-- wp:paragraph {"className":"stepper__index"} --><p class="stepper__index">02</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Estrategia</h3><!-- /wp:heading -->
					<!-- wp:paragraph --><p>Asignamos cada caso a la vía que mejor lo respalda: prevenir el riesgo, actuar dentro de un proceso o recuperar el crédito. Cuando el volumen es alto, esa ruta se repite con orden, por fases y con un responsable por cada caso.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"stepper__step aaa-reveal aaa-stagger-2"} -->
			<div class="wp-block-group stepper__step aaa-reveal aaa-stagger-2">
				<!-- wp:group {"className":"stepper__node"} --><div class="wp-block-group stepper__node"></div><!-- /wp:group -->
				<!-- wp:image {"className":"stepper__photo"} -->
				<figure class="wp-block-image stepper__photo"><img src="<?php echo esc_url( aaa_media_url( 'aaa-paso-representacion-tribunal.webp' ) ); ?>" alt="" /></figure>
				<!-- /wp:image -->
				<!-- wp:group {"className":"stepper__body"} -->
				<div class="wp-block-group stepper__body">
					<!-- wp:paragraph {"className":"stepper__index"} --><p class="stepper__index">03</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Representación</h3><!-- /wp:heading -->
					<!-- wp:paragraph --><p>Ejecutamos la estrategia con seguimiento permanente y control de cada etapa, para que el cliente sepa en qué punto está su caso.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"services-intro surface-theme--light-base aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull services-intro surface-theme--light-base aaa-section has-surface-light-background-color has-background">
	<!-- wp:group {"className":"services-intro__head section-heading--editorial aaa-motion-section-title"} -->
	<div class="wp-block-group services-intro__head section-heading--editorial aaa-motion-section-title">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Áreas de práctica</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Lo que hacemos <em class="aaa-text-emphasis">en cada área.</em></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"services-intro__copy"} -->
		<p class="services-intro__copy">Cada área tiene su propio alcance y todas parten del mismo estudio del caso. Este es el detalle de lo que hacemos en cada una.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"service-grid--editorial"} -->
	<div class="wp-block-group service-grid--editorial">
		<!-- wp:group {"className":"service-card--editorial aaa-reveal aaa-stagger-0"} -->
		<div class="wp-block-group service-card--editorial aaa-reveal aaa-stagger-0">
			<!-- wp:image {"className":"service-card__media"} -->
			<figure class="wp-block-image service-card__media"><img src="<?php echo esc_url( aaa_media_url( 'aaa-area-derecho-concursal.webp' ) ); ?>" alt="Reunión de abogados revisando documentos junto a una balanza de la justicia" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"service-card__body"} -->
			<div class="wp-block-group service-card__body">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Derecho concursal</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"service-block__tag"} --><p class="service-block__tag">Del lado del acreedor, en cada etapa del proceso.</p><!-- /wp:paragraph -->
				<!-- wp:list {"className":"service-card__list"} -->
				<ul class="wp-block-list service-card__list">
					<!-- wp:list-item --><li>Insolvencia de la persona natural no comerciante y del pequeño comerciante: representación del acreedor en la negociación de deudas, el acuerdo y la liquidación patrimonial.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Reorganización y liquidación judicial: graduación y calificación de créditos, objeciones y votación del acuerdo.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Acuerdos de reestructuración, vistos desde el acreedor.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Controversias y acciones propias del concurso.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Protección de la garantía y negociación de las condiciones del acuerdo.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Los demás procesos concursales y mercantiles de liquidación.</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"service-card--editorial aaa-reveal aaa-stagger-1"} -->
		<div class="wp-block-group service-card--editorial aaa-reveal aaa-stagger-1">
			<!-- wp:image {"className":"service-card__media"} -->
			<figure class="wp-block-image service-card__media"><img src="<?php echo esc_url( aaa_media_url( 'aaa-area-recuperacion-cartera.webp' ) ); ?>" alt="Revisión de reportes financieros y de crédito junto a un computador portátil" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"service-card__body"} -->
			<div class="wp-block-group service-card__body">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Recuperación de cartera y garantías</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"service-block__tag"} --><p class="service-block__tag">Estudiamos la cartera antes de elegir la vía.</p><!-- /wp:paragraph -->
				<!-- wp:list {"className":"service-card__list"} -->
				<ul class="wp-block-list service-card__list">
					<!-- wp:list-item --><li>Estudio jurídico y documental de la cartera: los títulos, las garantías y el estado de cada obligación.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Análisis de viabilidad: cuándo conviene el proceso y cuándo otra vía.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Procesos ejecutivos, incluido el cobro del aval del Fondo Nacional de Garantías.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Procesos de restitución de tenencia.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Estructuración y constitución de garantías, incluida la garantía mobiliaria sobre libranza.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Gestión de cartera, con cobro jurídico dirigido por abogados.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Rutas por fases y con responsable asignado para los procesos masivos.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"service-card__note"} --><p class="service-card__note">En el sector financiero, normalización de activos.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"service-card--editorial aaa-reveal aaa-stagger-2"} -->
		<div class="wp-block-group service-card--editorial aaa-reveal aaa-stagger-2">
			<!-- wp:image {"className":"service-card__media"} -->
			<figure class="wp-block-image service-card__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hero.webp' ) ); ?>" alt="Equipo de AAA Estudio Legal trabajando en su oficina" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"service-card__body"} -->
			<div class="wp-block-group service-card__body">
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Asesoría corporativa y litigios</h3><!-- /wp:heading -->
				<!-- wp:paragraph {"className":"service-block__tag"} --><p class="service-block__tag">Anticipamos el riesgo legal, comercial y laboral antes de que se vuelva conflicto.</p><!-- /wp:paragraph -->
				<!-- wp:list {"className":"service-card__list"} -->
				<ul class="wp-block-list service-card__list">
					<!-- wp:list-item --><li>Contratos y estructuración de negocios</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Derecho societario y gobierno corporativo</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Asesoría laboral preventiva</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Planeación patrimonial y sucesoral</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Litigios y resolución de controversias</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"transparency-block surface-theme--dark-deep is-dark-surface aaa-section","backgroundColor":"navy-hover","textColor":"white","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull transparency-block surface-theme--dark-deep is-dark-surface aaa-section has-white-color has-navy-hover-background-color has-text-color has-background">
	<!-- wp:group {"className":"transparency-block__grid aaa-motion-chapter"} -->
	<div class="wp-block-group transparency-block__grid aaa-motion-chapter">
		<!-- wp:group {"className":"transparency-block__copy section-heading--editorial aaa-motion-section-title"} -->
		<div class="wp-block-group transparency-block__copy section-heading--editorial aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Transparencia</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Expectativas claras, <em class="aaa-text-emphasis">decisiones sustentadas.</em></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph --><p>Nuestro compromiso es el análisis más riguroso de su caso y una representación diligente de sus intereses. No prometemos resultados: nos obligamos a estudiar, a actuar con cuidado y a informarle en qué punto está. Los honorarios se definen caso a caso, en proporción a lo que está en juego.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"transparency-block__media"} -->
		<div class="wp-block-group transparency-block__media">
			<!-- wp:image {"className":"transparency-block__visual aaa-motion-media"} -->
			<figure class="wp-block-image transparency-block__visual aaa-motion-media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/transparencia.webp' ) ); ?>" alt="Integrante del equipo de AAA Estudio Legal en su puesto de trabajo" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Preguntas frecuentes (pendiente de aprobación)","blockVisibility":false},"tagName":"section","anchor":"preguntas-frecuentes","className":"aaa-faq surface-theme--light-base aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section id="preguntas-frecuentes" class="wp-block-group alignfull aaa-faq surface-theme--light-base aaa-section has-surface-light-background-color has-background">
	<!-- wp:group {"className":"aaa-faq__grid"} -->
	<div class="wp-block-group aaa-faq__grid">
		<!-- wp:group {"className":"aaa-faq__head section-heading--editorial aaa-motion-section-title"} -->
		<div class="wp-block-group aaa-faq__head section-heading--editorial aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Preguntas frecuentes</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Dudas comunes <em class="aaa-text-emphasis">del acreedor.</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"aaa-faq__list"} -->
		<div class="wp-block-group aaa-faq__list">
			<!-- wp:details {"className":"aaa-faq__item"} -->
			<details class="wp-block-details aaa-faq__item"><summary>¿Cómo puede mi empresa proteger sus cuentas por cobrar frente al riesgo de insolvencia de un cliente?</summary><!-- wp:paragraph -->
			<p>La clave es la anticipación. Garantizar acreencias desde la firma del contrato mediante garantías reales o mobiliarias (Ley 1676 de 2013), establecer cláusulas de aceleración y monitorear permanentemente la salud financiera de los clientes permite reaccionar a tiempo y asegurar prioridad de cobro antes de que la empresa entre en cesación de pagos.</p>
			<!-- /wp:paragraph --></details>
			<!-- /wp:details -->
			<!-- wp:details {"className":"aaa-faq__item"} -->
			<details class="wp-block-details aaa-faq__item"><summary>¿Qué ocurre con la deuda cuando un cliente o deudor entra en proceso de reorganización?</summary><!-- wp:paragraph -->
			<p>Los cobros ejecutivos se suspenden temporalmente, pero la deuda no desaparece. La empresa debe hacerse parte formal del proceso concursando sus créditos ante el juez o la Superintendencia de Sociedades (Ley 116 de 2006) dentro de los plazos legales para defender su derecho a voto y asegurar que sea incluida en el acuerdo de pago.</p>
			<!-- /wp:paragraph --></details>
			<!-- /wp:details -->
			<!-- wp:details {"className":"aaa-faq__item"} -->
			<details class="wp-block-details aaa-faq__item"><summary>Si el deudor incumple el acuerdo de reorganización, ¿qué alternativa legal tiene el acreedor?</summary><!-- wp:paragraph -->
			<p>Puede solicitar el fracaso o incumplimiento del acuerdo ante la Superintendencia de Sociedades (Ley 116 de 2006, Art. 45 y 46). Esto desencadena la apertura del proceso de liquidación judicial, donde se embargan y rematan los bienes del deudor para pagar a los acreedores según la prelación legal.</p>
			<!-- /wp:paragraph --></details>
			<!-- /wp:details -->
			<!-- wp:details {"className":"aaa-faq__item"} -->
			<details class="wp-block-details aaa-faq__item"><summary>¿Es posible recuperar dinero o bienes si el deudor los traspasó a terceros antes de declararse en quiebra?</summary><!-- wp:paragraph -->
			<p>Sí. La legislación mercantil y concursal en Colombia contempla la Acción Revocatoria Concursal (Ley 116 de 2006, Art. 74). Este mecanismo permite dejar sin efecto las ventas, traspasos o donaciones sospechosas realizadas en los 18 meses anteriores al proceso, retornando los bienes al deudor para responder a los acreedores.</p>
			<!-- /wp:paragraph --></details>
			<!-- /wp:details -->
			<!-- wp:details {"className":"aaa-faq__item"} -->
			<details class="wp-block-details aaa-faq__item"><summary>¿Qué diferencia hay entre una garantía normal y una garantía real o mobiliaria al momento de cobrar?</summary><!-- wp:paragraph -->
			<p>Una factura o pagaré simple otorga un crédito ordinario (sin preferencia). En cambio, las garantías reales (hipoteca) o mobiliarias (inventario, maquinaria, cuentas de cobro inscritas en el RUGM según la Ley 1676 de 2013) otorgan prelación de pago. Esto significa que su empresa cobra primero sobre el valor de ese bien específico.</p>
			<!-- /wp:paragraph --></details>
			<!-- /wp:details -->
			<!-- wp:details {"className":"aaa-faq__item"} -->
			<details class="wp-block-details aaa-faq__item"><summary>¿Cuánto tiempo puede tardar la recuperación de una cartera en vía judicial frente a una negociación estratégica?</summary><!-- wp:paragraph -->
			<p>Un litigio o ejecutivo judicial tradicional puede tomar de 2 a 4 años. A través de la negociación estratégica, reestructuración extrajudicial o ejecución especial de garantías ante notarios/cámaras de comercio, los tiempos pueden reducirse a meses, minimizando costos y recuperando flujo de caja de manera más ágil.</p>
			<!-- /wp:paragraph --></details>
			<!-- /wp:details -->
			<!-- wp:details {"className":"aaa-faq__item"} -->
			<details class="wp-block-details aaa-faq__item"><summary>Si mi empresa es uno de los mayores acreedores, ¿qué control tiene en el proceso de insolvencia?</summary><!-- wp:paragraph -->
			<p>El peso del voto en las decisiones del concurso depende del porcentaje del pasivo que represente su crédito (Ley 116 de 2006, Art. 31). Los acreedores con alta participación tienen poder de veto sobre la fórmula de pago, pueden proponer alternativas de salvamento o exigir la liquidación si el plan no es viable.</p>
			<!-- /wp:paragraph --></details>
			<!-- /wp:details -->
			<!-- wp:details {"className":"aaa-faq__item"} -->
			<details class="wp-block-details aaa-faq__item"><summary>¿Cuánto tiempo tarda un proceso de insolvencia en Colombia y cómo afecta el cobro de la garantía?</summary><!-- wp:paragraph -->
			<p>Un proceso de reorganización suele durar entre 8 y 18 meses, mientras que una liquidación judicial toma de 2 a 4 años. Respecto a la garantía, los acreedores con garantía real (hipoteca o prenda) tienen prelación de pago sobre el bien o el producto de su venta (Ley 116, Art. 50 y Ley 1676 de 2013).</p>
			<!-- /wp:paragraph --></details>
			<!-- /wp:details -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"cierre-heading","className":"site-closing-cta site-closing-cta--internal site-closing-cta--global aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull site-closing-cta site-closing-cta--internal site-closing-cta--global aaa-section has-surface-light-background-color has-background" id="cierre-heading">
	<!-- wp:group {"className":"site-closing-cta__panel","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( aaa_media_url( 'temp-prototype-home-cta.jpg' ) ); ?>","source":"file","title":"temp-prototype-home-cta"},"backgroundSize":"cover","backgroundPosition":"50% 52%"}}} -->
	<div class="wp-block-group site-closing-cta__panel">
		<!-- wp:image {"className":"site-closing-cta__watermark"} -->
		<figure class="wp-block-image site-closing-cta__watermark"><img src="<?php echo esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ); ?>" alt="" /></figure>
		<!-- /wp:image -->
		<!-- wp:group {"className":"site-closing-cta__heading aaa-motion-section-title"} -->
		<div class="wp-block-group site-closing-cta__heading aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Conversemos</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Cada caso se estudia <em class="aaa-text-emphasis">antes de decidir.</em></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"site-closing-cta__content"} -->
		<div class="wp-block-group site-closing-cta__content">
			<!-- wp:paragraph {"className":"site-closing-cta__text"} --><p class="site-closing-cta__text">Si usted es una entidad financiera con cartera en mora, un fondo de empleados, una persona natural que quiere recuperar lo que le deben o una organización que necesita anticipar un riesgo legal, estudiamos su situación y le proponemos la vía que mejor la respalda.</p><!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"site-closing-cta__button"} -->
				<div class="wp-block-button site-closing-cta__button"><a class="wp-block-button__link wp-element-button" href="/contacto/">Solicitar el estudio de su caso <svg class="btn--icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
