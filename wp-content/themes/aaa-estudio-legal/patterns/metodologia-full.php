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
			<figure class="wp-block-image hero-shell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/hero-9095.webp' ) ); ?>" alt="Integrantes del equipo de AAA Estudio Legal trabajando en la oficina" /></figure>
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
				<figure class="wp-block-image stepper__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/aaa-paso-diagnostico.webp' ) ); ?>" alt="" /></figure>
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
				<figure class="wp-block-image stepper__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/aaa-paso-estrategia-equipo.webp' ) ); ?>" alt="" /></figure>
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
				<figure class="wp-block-image stepper__photo"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/aaa-paso-representacion-tribunal.webp' ) ); ?>" alt="" /></figure>
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
			<figure class="wp-block-image service-card__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/aaa-area-concursal.webp' ) ); ?>" alt="" /></figure>
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
			<figure class="wp-block-image service-card__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/aaa-area-normalizacion.webp' ) ); ?>" alt="" /></figure>
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
			<figure class="wp-block-image service-card__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/metodologia/aaa-area-corporativa.webp' ) ); ?>" alt="" /></figure>
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
