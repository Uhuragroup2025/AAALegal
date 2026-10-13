<?php
/**
 * Title: Home — página completa
 * Slug: aaa-estudio-legal/home-full
 * Categories: aaa-estudio-legal
 * Description: Página de Inicio completa, reconstruida 1:1 desde prototype/index.html
 * (fuente de verdad del diseño aprobado) — bloques nativos de Gutenberg, con los
 * mismos íconos SVG inline, las mismas imágenes (resueltas por nombre de archivo
 * contra la Biblioteca de medios vía aaa_media_url(), ver functions.php) y los
 * mismos ganchos de motion (data-motion/data-count-*, inyectados en render vía
 * clases marcador aaa-motion-*, ver aaa_inject_motion_attributes() en functions.php)
 * que traía el prototipo. Asignar como página de inicio estática (Ajustes → Lectura)
 * y la plantilla "Página" (is_front_page() activa el motion sola).
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","className":"hero-immersive is-dark-surface aaa-motion-hero","align":"full"} -->
<section class="wp-block-group alignfull hero-immersive is-dark-surface aaa-motion-hero">
	<!-- wp:group {"className":"hero-shell"} -->
	<div class="wp-block-group hero-shell">
		<!-- wp:group {"className":"hero-shell__media"} -->
		<div class="wp-block-group hero-shell__media">
			<!-- wp:image {"className":"hero-shell__img"} -->
			<figure class="wp-block-image hero-shell__img"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hero.webp' ) ); ?>" alt="Oficina de AAA Estudio Legal con el equipo trabajando" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"hero-shell__scrim"} --><div class="wp-block-group hero-shell__scrim"></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"hero-shell__content"} -->
		<div class="wp-block-group hero-shell__content">
			<!-- wp:heading {"level":1,"className":"hero__title"} -->
			<h1 class="wp-block-heading hero__title">Soluciones legales <em class="aaa-text-emphasis">estratégicas</em></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Acompañamos a empresas, empresarios y acreedores en asuntos concursales y corporativos, anticipando riesgos y diseñando soluciones integrales que protegen sus intereses.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"className":"hero__scroll"} -->
		<p class="hero__scroll"><a href="#nuestro-enfoque">Ver más contenido</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"nuestro-enfoque","className":"home-about-summary","backgroundColor":"surface-light-alt","layout":{"type":"constrained"}} -->
<section class="wp-block-group home-about-summary has-surface-light-alt-background-color has-background" id="nuestro-enfoque">
	<!-- wp:group {"className":"home-about-summary__content aaa-motion-section-title"} -->
	<div class="wp-block-group home-about-summary__content aaa-motion-section-title">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Nuestro enfoque</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Defendemos exclusivamente <em class="aaa-text-emphasis">los intereses del acreedor.</em></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph --><p><strong>No representamos al deudor.</strong></p><!-- /wp:paragraph -->
		<!-- wp:paragraph --><p>Anticipamos riesgos, protegemos el crédito del acreedor y maximizamos las posibilidades de recuperación, incluso en los escenarios más complejos y en diferentes sectores de la economía.</p><!-- /wp:paragraph -->
		<!-- wp:buttons {"className":"home-about-summary__action"} -->
		<div class="wp-block-buttons home-about-summary__action"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contacto/">Solicitar evaluación jurídica <svg class="btn--icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div><!-- /wp:button --></div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"servicios-home-heading","backgroundColor":"surface-light","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-surface-light-background-color has-background" id="servicios-home-heading">
	<!-- wp:group {"className":"aaa-motion-section-title"} -->
	<div class="wp-block-group aaa-motion-section-title">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Áreas de práctica</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Estrategias jurídicas.</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"focus-mosaic aaa-motion-service-panels","align":"full","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull focus-mosaic aaa-motion-service-panels">
		<!-- wp:group {"className":"surface-visual"} -->
		<div class="wp-block-group surface-visual">
			<!-- wp:image {"className":"media-placeholder"} -->
			<figure class="wp-block-image media-placeholder"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/area-concursal.webp' ) ); ?>" alt="" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"surface-visual__caption"} -->
			<div class="wp-block-group surface-visual__caption">
				<!-- wp:paragraph {"className":"focus-card__index"} --><p class="focus-card__index">01</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><a href="/metodologia/">Derecho concursal</a></h3><!-- /wp:heading -->
				<!-- wp:list {"className":"surface-visual__list"} -->
				<ul class="wp-block-list surface-visual__list">
					<!-- wp:list-item --><li>Insolvencia de persona natural</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Insolvencia empresarial</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Ley 116</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Ley 550</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"surface-visual"} -->
		<div class="wp-block-group surface-visual">
			<!-- wp:image {"className":"media-placeholder"} -->
			<figure class="wp-block-image media-placeholder"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/area-normalizacion.webp' ) ); ?>" alt="" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"surface-visual__caption"} -->
			<div class="wp-block-group surface-visual__caption">
				<!-- wp:paragraph {"className":"focus-card__index"} --><p class="focus-card__index">02</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><a href="/metodologia/">Normalización de activos</a></h3><!-- /wp:heading -->
				<!-- wp:list {"className":"surface-visual__list"} -->
				<ul class="wp-block-list surface-visual__list">
					<!-- wp:list-item --><li>Análisis de viabilidad de riesgo</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Recuperación de cartera</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"surface-visual"} -->
		<div class="wp-block-group surface-visual">
			<!-- wp:image {"className":"media-placeholder"} -->
			<figure class="wp-block-image media-placeholder"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/area-corporativa.webp' ) ); ?>" alt="" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"surface-visual__caption"} -->
			<div class="wp-block-group surface-visual__caption">
				<!-- wp:paragraph {"className":"focus-card__index"} --><p class="focus-card__index">03</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><a href="/metodologia/">Línea corporativa y litigios</a></h3><!-- /wp:heading -->
				<!-- wp:list {"className":"surface-visual__list"} -->
				<ul class="wp-block-list surface-visual__list">
					<!-- wp:list-item --><li>Viabilidad</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>Acompañamiento en riesgo legal, comercial y laboral</li><!-- /wp:list-item -->
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

<!-- wp:group {"tagName":"section","className":"is-atmosphere-surface","align":"full","anchor":"confianza-heading","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-atmosphere-surface" id="confianza-heading">
	<!-- wp:group {"className":"atmosphere"} --><div class="wp-block-group atmosphere"></div><!-- /wp:group -->
	<!-- wp:group {"className":"why-trust"} -->
	<div class="wp-block-group why-trust">
		<!-- wp:group {"className":"why-trust__intro aaa-motion-section-title"} -->
		<div class="wp-block-group why-trust__intro aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">¿Por qué confiar en nosotros?</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Más que asesoría jurídica, <em class="aaa-text-emphasis">construimos confianza</em> durante todo el proceso.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"why-trust__grid"} -->
		<div class="wp-block-group why-trust__grid">
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-0"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-0">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/aaa-confianza-casos.webp' ) ); ?>" alt="Pilas de expedientes y carpetas de archivo en una oficina" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Manejo de gran número de casos.</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Procesos individuales y masivos, con infraestructura propia.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-1"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-1">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/aaa-confianza-equipo.webp' ) ); ?>" alt="Profesionales revisando documentos alrededor de una mesa de trabajo" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Equipo especializado.</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Experiencia jurídica y conocimiento sectorial.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-2"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-2">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/aaa-confianza-tecnologia.webp' ) ); ?>" alt="Computador portátil con un tablero de indicadores en pantalla" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Trabajo respaldado en tecnología propia (ADY).</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Soluciones más ágiles y precisas en cada proceso.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-3"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-3">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/aaa-confianza-seguridad.webp' ) ); ?>" alt="Candado dorado sobre el teclado de un computador" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Su información, protegida.</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Servidores propios y continuidad alineada con ISO 27001.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-4"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-4">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/aaa-confianza-cumplimiento-sello.webp' ) ); ?>" alt="Sello de revisión apoyado sobre un documento normativo" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Cumplimiento normativo (compliance).</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Ética y transparencia en cada actuación.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-5"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-5">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/aaa-confianza-presencia-bandera.webp' ) ); ?>" alt="Bandera de Colombia ondeando sobre la ciudad de Cartagena" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Presencia en todo el país.</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Acompañamos organizaciones en todo el territorio nacional.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sector-experience","backgroundColor":"surface-light","layout":{"type":"constrained"}} -->
<section class="wp-block-group sector-experience has-surface-light-background-color has-background">
	<!-- wp:group {"className":"sector-experience__header aaa-motion-section-title"} -->
	<div class="wp-block-group sector-experience__header aaa-motion-section-title">
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Empresas que ya confiaron en nosotros</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Experiencia especializada en sectores donde <em class="aaa-text-emphasis">cada decisión exige conocimiento jurídico y sectorial.</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"className":"sector-experience__intro"} --><p class="sector-experience__intro">Trabajamos con organizaciones de los sectores financiero, fintech, solidario, público, salud, cajas de compensación, construcción e inmobiliario, y comercio y consumo, en asuntos de insolvencia, normalización de activos, derecho corporativo y litigios, con estrategias ajustadas a sus marcos jurídicos y dinámicas operativas.</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:html -->
	<div class="sector-grid">
	<article class="sector-card aaa-reveal" style="--stagger-index:0">
		<div class="sector-card__header"><svg class="sector-card__icon" viewBox="0 0 256 256" fill="none" stroke="currentColor" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M24 104h208M40 104V88l88-48 88 48v16M48 104v80M88 104v80M128 104v80M168 104v80M208 104v80M24 184h208M16 216h224"/></svg><span class="sector-card__name">Financiero y Fintech</span></div>
		<div class="sector-card__logos">
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-bbva.png') ); ?>" alt="Logo de BBVA" /></span>
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-femcristar.png') ); ?>" alt="Logo de Femcristar" /></span>
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-nuestro-fondo.png') ); ?>" alt="Logo de Nuestro Fondo" /></span>
		</div>
	</article>
	<article class="sector-card aaa-reveal" style="--stagger-index:1">
		<div class="sector-card__header"><svg class="sector-card__icon" viewBox="0 0 256 256" fill="none" stroke="currentColor" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m88 104 32-32a24 24 0 0 1 34 0l14 14M56 152l42 42a24 24 0 0 0 34 0l68-68M24 112l32-32 32 24-40 48ZM232 112l-32-32-32 24 40 48Z"/><path d="m112 144 24 24M136 120l32 32"/></svg><span class="sector-card__name">Solidario</span></div>
		<div class="sector-card__logos sector-card__logos--spaced">
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-coopunidos.png') ); ?>" alt="Logo de Coopunidos" /></span>
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-fetrabuv.png') ); ?>" alt="Logo de Fetrabuv" /></span>
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-fonalianza.png') ); ?>" alt="Logo de Fonalianza" /></span>
		</div>
	</article>
	<article class="sector-card aaa-reveal" style="--stagger-index:2">
		<div class="sector-card__header"><svg class="sector-card__icon" viewBox="0 0 256 256" fill="none" stroke="currentColor" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M32 216h192M48 216V88h64v128M112 216V40h96v176M72 120h16M72 152h16M136 72h16M168 72h16M136 104h16M168 104h16M136 136h16M168 136h16"/></svg><span class="sector-card__name">Sector público</span></div>
		<div class="sector-card__logos">
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-gobernacion-valle-del-cauca-ribbon.png') ); ?>" alt="Logo de la Gobernación del Valle del Cauca" /></span>
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-metrocali.png') ); ?>" alt="Logo de MetroCali" /></span>
		</div>
	</article>
	<article class="sector-card aaa-reveal" style="--stagger-index:3">
		<div class="sector-card__header"><svg class="sector-card__icon" viewBox="0 0 256 256" fill="none" stroke="currentColor" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M128 216S40 168 40 96a48 48 0 0 1 88-26 48 48 0 0 1 88 26c0 72-88 120-88 120Z"/><path d="M72 128h32l16-32 24 64 16-32h24"/></svg><span class="sector-card__name">Salud y cajas de compensación</span></div>
		<div class="sector-card__logos">
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-promedico.png') ); ?>" alt="Logo de Promédico" /></span>
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-comfandi.png') ); ?>" alt="Logo de Comfandi" /></span>
		</div>
	</article>
	<article class="sector-card aaa-reveal" style="--stagger-index:4">
		<div class="sector-card__header"><svg class="sector-card__icon" viewBox="0 0 256 256" fill="none" stroke="currentColor" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M32 216h192M56 216V112L128 56l72 56v104M96 216v-64h64v64"/></svg><span class="sector-card__name">Construcción e inmobiliario</span></div>
		<div class="sector-card__logos">
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-constructora-melendez.png') ); ?>" alt="Logo de Constructora Meléndez" /></span>
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-neat.png') ); ?>" alt="Logo de Neat" /></span>
		</div>
	</article>
	<article class="sector-card aaa-reveal" style="--stagger-index:5">
		<div class="sector-card__header"><svg class="sector-card__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M3 10V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V10"/><path d="M14.8333 21V15C14.8333 13.8954 13.9379 13 12.8333 13H10.8333C9.72874 13 8.83331 13.8954 8.83331 15V21" stroke-miterlimit="16"/><path d="M21.8183 9.36418L20.1243 3.43517C20.0507 3.17759 19.8153 3 19.5474 3H15.5L15.9753 8.70377C15.9909 8.89043 16.0923 9.05904 16.2532 9.15495C16.6425 9.38698 17.4052 9.81699 18 10C19.0158 10.3125 20.5008 10.1998 21.3465 10.0958C21.6982 10.0526 21.9157 9.7049 21.8183 9.36418Z"/><path d="M14 10C14.5675 9.82538 15.2879 9.42589 15.6909 9.18807C15.8828 9.07486 15.9884 8.86103 15.9699 8.63904L15.5 3H8.5L8.03008 8.63904C8.01158 8.86103 8.11723 9.07486 8.30906 9.18807C8.71207 9.42589 9.4325 9.82538 10 10C11.493 10.4594 12.507 10.4594 14 10Z"/><path d="M3.87567 3.43517L2.18166 9.36418C2.08431 9.7049 2.3018 10.0526 2.6535 10.0958C3.49916 10.1998 4.98424 10.3125 6 10C6.59477 9.81699 7.35751 9.38698 7.74678 9.15495C7.90767 9.05904 8.00913 8.89043 8.02469 8.70377L8.5 3H4.45258C4.18469 3 3.94926 3.17759 3.87567 3.43517Z"/></svg><span class="sector-card__name">Comercio y consumo</span></div>
		<div class="sector-card__logos sector-card__logos--spaced">
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-elgranlangostino.png') ); ?>" alt="Logo de El Gran Langostino" /></span>
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-ma-isabel.png') ); ?>" alt="Logo de Ma. Isabel" /></span>
			<span class="sector-card__logo"><img src="<?php echo esc_url( aaa_media_url('logo-k-listo.png') ); ?>" alt="Logo de K-Listo" /></span>
		</div>
	</article>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"is-dark-surface","backgroundColor":"navy-deep","textColor":"white","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-dark-surface has-white-color has-navy-deep-background-color has-text-color has-background">
	<!-- wp:group {"className":"aaa-motion-section-title"} -->
	<div class="wp-block-group aaa-motion-section-title">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Casos de éxito</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">La confianza se construye <em class="aaa-text-emphasis">con resultados.</em></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:html -->
	<div class="case-video-grid">
		<article class="case-video aaa-reveal" style="--stagger-index:0"><div class="case-video__frame"><img src="<?php echo esc_url( aaa_media_url('temp-prototype-home-case-preview.jpg') ); ?>" alt="" /><button class="case-video__play" type="button" disabled aria-label="Caso 1: video pendiente de entrega por el cliente"><svg viewBox="0 0 256 256" aria-hidden="true"><path d="M240,128a15.74,15.74,0,0,1-7.9,13.66l-144,88A16,16,0,0,1,64,216V40A16,16,0,0,1,88.1,26.34l144,88A15.74,15.74,0,0,1,240,128Z"/></svg></button></div><div class="case-video__caption"><p class="case-video__meta">Empresa — Cargo</p><p class="case-video__quote">Espacio para 2 o 3 líneas que resuman lo más importante del testimonio. Texto pendiente de entrega por el cliente.</p></div></article>
		<article class="case-video aaa-reveal" style="--stagger-index:1"><div class="case-video__frame"><img src="<?php echo esc_url( aaa_media_url('temp-prototype-home-case-preview.jpg') ); ?>" alt="" /><button class="case-video__play" type="button" disabled aria-label="Caso 2: video pendiente de entrega por el cliente"><svg viewBox="0 0 256 256" aria-hidden="true"><path d="M240,128a15.74,15.74,0,0,1-7.9,13.66l-144,88A16,16,0,0,1,64,216V40A16,16,0,0,1,88.1,26.34l144,88A15.74,15.74,0,0,1,240,128Z"/></svg></button></div><div class="case-video__caption"><p class="case-video__meta">Empresa — Cargo</p><p class="case-video__quote">Espacio para 2 o 3 líneas que resuman lo más importante del testimonio. Texto pendiente de entrega por el cliente.</p></div></article>
		<article class="case-video aaa-reveal" style="--stagger-index:2"><div class="case-video__frame"><img src="<?php echo esc_url( aaa_media_url('temp-prototype-home-case-preview.jpg') ); ?>" alt="" /><button class="case-video__play" type="button" disabled aria-label="Caso 3: video pendiente de entrega por el cliente"><svg viewBox="0 0 256 256" aria-hidden="true"><path d="M240,128a15.74,15.74,0,0,1-7.9,13.66l-144,88A16,16,0,0,1,64,216V40A16,16,0,0,1,88.1,26.34l144,88A15.74,15.74,0,0,1,240,128Z"/></svg></button></div><div class="case-video__caption"><p class="case-video__meta">Empresa — Cargo</p><p class="case-video__quote">Espacio para 2 o 3 líneas que resuman lo más importante del testimonio. Texto pendiente de entrega por el cliente.</p></div></article>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"stats-counter stats-counter--editorial is-dark-surface aaa-motion-stats","backgroundColor":"navy-hover","textColor":"white","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull stats-counter stats-counter--editorial is-dark-surface aaa-motion-stats has-white-color has-navy-hover-background-color has-text-color has-background">
	<!-- wp:group {"className":"aaa-motion-section-title"} -->
	<div class="wp-block-group aaa-motion-section-title">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">En cifras</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Resultados que respaldan <em class="aaa-text-emphasis">nuestro trabajo.</em></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"stats-grid","layout":{"type":"flex"}} -->
	<div class="wp-block-group stats-grid">
		<!-- wp:group {"className":"stat-card"} -->
		<div class="wp-block-group stat-card">
			<!-- wp:paragraph {"className":"stat-card__number aaa-stat-cases"} --><p class="stat-card__number aaa-stat-cases">+8.700</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"stat-card__label"} --><p class="stat-card__label">Casos gestionados</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"stat-card"} -->
		<div class="wp-block-group stat-card">
			<!-- wp:paragraph {"className":"stat-card__number aaa-stat-clients"} --><p class="stat-card__number aaa-stat-clients">+30</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"stat-card__label"} --><p class="stat-card__label">Clientes atendidos</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"stat-card"} -->
		<div class="wp-block-group stat-card">
			<!-- wp:paragraph {"className":"stat-card__number aaa-stat-recovered"} --><p class="stat-card__number aaa-stat-recovered">+10<span class="stat-card__unit"> mil millones</span></p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"stat-card__label"} --><p class="stat-card__label">Cartera recuperada</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"stats-photo","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull stats-photo">
	<!-- wp:image {"className":"stats-photo__media"} -->
	<figure class="wp-block-image stats-photo__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/home/hero.webp' ) ); ?>" alt="Equipo de AAA Estudio Legal trabajando en su oficina" /></figure>
	<!-- /wp:image -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"cierre-heading","className":"site-closing-cta site-closing-cta--internal site-closing-cta--global","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull site-closing-cta site-closing-cta--internal site-closing-cta--global has-surface-light-background-color has-background" id="cierre-heading">
	<!-- wp:group {"className":"site-closing-cta__panel"} -->
	<div class="wp-block-group site-closing-cta__panel" style="--cierre-photo-url:url('<?php echo esc_url( aaa_media_url('temp-prototype-home-cta.jpg') ); ?>')">
		<!-- wp:image {"className":"site-closing-cta__watermark"} -->
		<figure class="wp-block-image site-closing-cta__watermark"><img src="<?php echo esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ); ?>" alt="" /></figure>
		<!-- /wp:image -->
		<!-- wp:group {"className":"site-closing-cta__heading aaa-motion-section-title"} -->
		<div class="wp-block-group site-closing-cta__heading aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Conversemos</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Cada caso requiere <em class="aaa-text-emphasis">una defensa con criterio.</em></h2><!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"site-closing-cta__content"} -->
		<div class="wp-block-group site-closing-cta__content">
			<!-- wp:paragraph {"className":"site-closing-cta__text"} --><p class="site-closing-cta__text">Si su organización enfrenta un reto jurídico, necesita proteger sus activos, gestionar riesgos o tomar decisiones corporativas, nuestro equipo puede evaluar la situación y definir una estrategia jurídica.</p><!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"site-closing-cta__button"} -->
				<div class="wp-block-button site-closing-cta__button"><a class="wp-block-button__link wp-element-button" href="/contacto/">Solicitar evaluación jurídica <svg class="btn--icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
