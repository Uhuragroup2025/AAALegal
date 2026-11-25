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
			<figure class="wp-block-image hero-shell__img"><img src="<?php echo esc_url( aaa_media_url( 'aaa-portada-fundadores.webp' ) ); ?>" alt="Fundadores de AAA Estudio Legal sobre fondo azul" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"hero-shell__scrim"} --><div class="wp-block-group hero-shell__scrim"></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"hero-shell__content"} -->
		<div class="wp-block-group hero-shell__content">
			<!-- wp:heading {"level":1,"className":"hero__title"} -->
			<h1 class="wp-block-heading hero__title">Quien conoce cómo se pierde un crédito <em class="aaa-text-emphasis">sabe cómo protegerlo.</em></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Representamos al acreedor en insolvencia y recuperación de cartera. Con esa experiencia estructuramos garantías y acompañamos a organizaciones en su riesgo legal, comercial y laboral.</p>
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
	<!-- wp:columns {"className":"what-we-do-grid aaa-motion-chapter"} -->
	<div class="wp-block-columns what-we-do-grid aaa-motion-chapter">
		<!-- wp:column {"className":"aaa-motion-section-title"} -->
		<div class="wp-block-column aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Nuestro enfoque</p><!-- /wp:paragraph -->
			<!-- wp:heading -->
			<h2 class="wp-block-heading">Lo que aprendimos en la insolvencia, <em class="aaa-text-emphasis">lo aplicamos antes del conflicto.</em></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph --><p>Nacimos representando acreedores en la insolvencia, y seguimos del mismo lado. Allí aprendimos cómo se pierde un crédito, y esa experiencia hoy acompaña su recorrido completo: la garantía y el contrato que lo respaldan, el cobro cuando el pago se tensiona, la insolvencia cuando llega y la asesoría corporativa que previene el conflicto.</p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p>Esa lealtad no nace de un contrato sino de una convicción: en insolvencia y recuperación de cartera, solo representamos acreedores.</p><!-- /wp:paragraph -->
			<!-- wp:buttons {"className":"home-about-summary__action"} -->
			<div class="wp-block-buttons home-about-summary__action"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contacto/">Solicitar evaluación jurídica <svg class="btn--icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div><!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"className":"what-we-do-visual aaa-motion-media"} -->
			<figure class="wp-block-image what-we-do-visual aaa-motion-media"><img src="<?php echo esc_url( aaa_media_url( 'aaa-enfoque-documento.webp' ) ); ?>" alt="Manos sobre un escritorio: una señala un documento y otra toma notas" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"servicios-home-heading","backgroundColor":"surface-light","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-surface-light-background-color has-background" id="servicios-home-heading">
	<!-- wp:group {"className":"aaa-motion-section-title"} -->
	<div class="wp-block-group aaa-motion-section-title">
		<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Áreas de práctica</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Tres áreas que se alimentan <em class="aaa-text-emphasis">entre sí.</em></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"focus-mosaic aaa-motion-service-panels","align":"full","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull focus-mosaic aaa-motion-service-panels">
		<!-- wp:group {"className":"surface-visual"} -->
		<div class="wp-block-group surface-visual">
			<!-- wp:image {"className":"media-placeholder"} -->
			<figure class="wp-block-image media-placeholder"><img src="<?php echo esc_url( aaa_media_url( 'aaa-area-derecho-concursal.webp' ) ); ?>" alt="" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"surface-visual__caption"} -->
			<div class="wp-block-group surface-visual__caption">
				<!-- wp:paragraph {"className":"focus-card__index"} --><p class="focus-card__index">01</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><a href="/metodologia/">Derecho concursal</a></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Representamos al acreedor en cada etapa del proceso, desde la admisión hasta el cumplimiento del acuerdo o la liquidación.</p><!-- /wp:paragraph -->
				<!-- wp:list {"className":"surface-visual__list"} -->
				<ul class="wp-block-list surface-visual__list">
					<!-- wp:list-item --><li>Persona natural no comerciante y pequeño comerciante</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Insolvencia empresarial: reorganización y liquidación judicial</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Acuerdos de reestructuración</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Los demás procesos concursales y mercantiles de liquidación</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"surface-visual"} -->
		<div class="wp-block-group surface-visual">
			<!-- wp:image {"className":"media-placeholder"} -->
			<figure class="wp-block-image media-placeholder"><img src="<?php echo esc_url( aaa_media_url( 'aaa-area-recuperacion-cartera.webp' ) ); ?>" alt="" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"surface-visual__caption"} -->
			<div class="wp-block-group surface-visual__caption">
				<!-- wp:paragraph {"className":"focus-card__index"} --><p class="focus-card__index">02</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><a href="/metodologia/">Recuperación de cartera y garantías</a></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Estudiamos cada cartera y definimos la vía de recuperación: la garantía, el título o el proceso que mejor la respalda.</p><!-- /wp:paragraph -->
				<!-- wp:list {"className":"surface-visual__list"} -->
				<ul class="wp-block-list surface-visual__list">
					<!-- wp:list-item --><li>Procesos ejecutivos</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Procesos de restitución de tenencia</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Estructuración y constitución de garantías</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Gestión de cartera</li><!-- /wp:list-item -->
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
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading"><a href="/metodologia/">Asesoría corporativa y litigios</a></h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Anticipamos el riesgo legal, comercial y laboral para que cada decisión de la organización tenga respaldo jurídico.</p><!-- /wp:paragraph -->
				<!-- wp:list {"className":"surface-visual__list"} -->
				<ul class="wp-block-list surface-visual__list">
					<!-- wp:list-item --><li>Contratos y estructuración de negocios</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Derecho societario y gobierno corporativo</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Asesoría laboral preventiva</li><!-- /wp:list-item -->
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

<!-- wp:group {"tagName":"section","className":"is-atmosphere-surface","align":"full","anchor":"confianza-heading","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-atmosphere-surface" id="confianza-heading">
	<!-- wp:group {"className":"atmosphere"} --><div class="wp-block-group atmosphere"></div><!-- /wp:group -->
	<!-- wp:group {"className":"why-trust"} -->
	<div class="wp-block-group why-trust">
		<!-- wp:group {"className":"why-trust__intro aaa-motion-section-title"} -->
		<div class="wp-block-group why-trust__intro aaa-motion-section-title">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">¿Por qué confiar en nosotros?</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">La capacidad <em class="aaa-text-emphasis">detrás de cada caso.</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"why-trust__grid"} -->
		<div class="wp-block-group why-trust__grid">
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-0"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-0">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( aaa_media_url( 'aaa-confianza-volumen.webp' ) ); ?>" alt="Pila de expedientes y carpetas sobre un escritorio de oficina" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Volumen con estructura.</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Procesos individuales y masivos, atendidos por fases y con responsables asignados.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-1"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-1">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( aaa_media_url( 'aaa-confianza-equipo.webp' ) ); ?>" alt="Profesionales revisando documentos alrededor de una mesa de trabajo" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Equipo especializado.</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Experiencia jurídica y conocimiento sectorial.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-2"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-2">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( aaa_media_url( 'aaa-confianza-seguimiento.webp' ) ); ?>" alt="Manos con reloj trabajando en un computador portátil con reportes" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Seguimiento en tiempo real.</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Cada proceso se registra y se reporta con herramientas propias, para que el cliente sepa en qué etapa está su cartera.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-3"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-3">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( aaa_media_url( 'aaa-confianza-huella-digital.webp' ) ); ?>" alt="Huella digital iluminada sobre un lector biométrico" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Su información, protegida.</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Cada caso se maneja bajo reserva profesional, con el cuidado que exige la información de nuestros clientes.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-4"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-4">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( aaa_media_url( 'aaa-confianza-cumplimiento-1.webp' ) ); ?>" alt="Mano firmando un documento con pluma en una mesa de reuniones" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Cumplimiento normativo.</h3><!-- /wp:heading -->
				<!-- wp:paragraph --><p>Controles internos, reportería y seguimiento de términos en cada proceso.</p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"why-trust__item aaa-reveal aaa-stagger-5"} -->
			<div class="wp-block-group why-trust__item aaa-reveal aaa-stagger-5">
				<!-- wp:image {"className":"why-trust__media"} -->
				<figure class="wp-block-image why-trust__media"><img src="<?php echo esc_url( aaa_media_url( 'aaa-confianza-capitolio-bolivar.webp' ) ); ?>" alt="Estatua de Simón Bolívar frente al Capitolio Nacional, con la bandera de Colombia, en Bogotá" /></figure>
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
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Organizaciones que <em class="aaa-text-emphasis">confían en nosotros.</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"className":"sector-experience__intro"} --><p class="sector-experience__intro">Entidades financieras, fondos de empleados, cajas de compensación y organizaciones del sector real que encuentran en la firma algo más que un proceso: una práctica que acompaña el crédito desde su origen.</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"className":"sector-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group sector-grid">
		<!-- wp:group {"className":"sector-card sector-card--financiero aaa-reveal aaa-stagger-0","layout":{"type":"default"}} -->
		<div class="wp-block-group sector-card sector-card--financiero aaa-reveal aaa-stagger-0">
			<!-- wp:group {"className":"sector-card__header","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__header"><!-- wp:paragraph {"className":"sector-card__name"} -->
			<p class="sector-card__name">Financiero y Fintech</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"sector-card__logos","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__logos">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-bbva.png') ); ?>" alt="Logo de BBVA"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-gnb-sudameris.png') ); ?>" alt="Logo de Banco GNB Sudameris"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-femcristar.webp') ); ?>" alt="Logo de Femcristar"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-nuestro-fondo.png') ); ?>" alt="Logo de Nuestro Fondo"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"sector-card sector-card--solidario aaa-reveal aaa-stagger-1","layout":{"type":"default"}} -->
		<div class="wp-block-group sector-card sector-card--solidario aaa-reveal aaa-stagger-1">
			<!-- wp:group {"className":"sector-card__header","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__header"><!-- wp:paragraph {"className":"sector-card__name"} -->
			<p class="sector-card__name">Solidario</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"sector-card__logos sector-card__logos--spaced","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__logos sector-card__logos--spaced">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-coopunidos.webp') ); ?>" alt="Logo de Coopunidos"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-fetrabuv.png') ); ?>" alt="Logo de Fetrabuv"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-fonalianza.png') ); ?>" alt="Logo de Fonalianza"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"sector-card sector-card--publico aaa-reveal aaa-stagger-2","layout":{"type":"default"}} -->
		<div class="wp-block-group sector-card sector-card--publico aaa-reveal aaa-stagger-2">
			<!-- wp:group {"className":"sector-card__header","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__header"><!-- wp:paragraph {"className":"sector-card__name"} -->
			<p class="sector-card__name">Sector público</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"sector-card__logos","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__logos">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-gobernacion-valle-del-cauca-ribbon.png') ); ?>" alt="Logo de la Gobernación del Valle del Cauca"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-metrocali.webp') ); ?>" alt="Logo de MetroCali"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"sector-card sector-card--salud aaa-reveal aaa-stagger-3","layout":{"type":"default"}} -->
		<div class="wp-block-group sector-card sector-card--salud aaa-reveal aaa-stagger-3">
			<!-- wp:group {"className":"sector-card__header","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__header"><!-- wp:paragraph {"className":"sector-card__name"} -->
			<p class="sector-card__name">Salud y cajas de compensación</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"sector-card__logos","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__logos">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-promedico.webp') ); ?>" alt="Logo de Promédico"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-comfandi.png') ); ?>" alt="Logo de Comfandi"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"sector-card sector-card--construccion aaa-reveal aaa-stagger-4","layout":{"type":"default"}} -->
		<div class="wp-block-group sector-card sector-card--construccion aaa-reveal aaa-stagger-4">
			<!-- wp:group {"className":"sector-card__header","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__header"><!-- wp:paragraph {"className":"sector-card__name"} -->
			<p class="sector-card__name">Construcción e inmobiliario</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"sector-card__logos","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__logos">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-constructora-melendez.png') ); ?>" alt="Logo de Constructora Meléndez"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-neat.png') ); ?>" alt="Logo de Neat"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"sector-card sector-card--comercio aaa-reveal aaa-stagger-5","layout":{"type":"default"}} -->
		<div class="wp-block-group sector-card sector-card--comercio aaa-reveal aaa-stagger-5">
			<!-- wp:group {"className":"sector-card__header","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__header"><!-- wp:paragraph {"className":"sector-card__name"} -->
			<p class="sector-card__name">Comercio y consumo</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"sector-card__logos sector-card__logos--spaced","layout":{"type":"default"}} -->
			<div class="wp-block-group sector-card__logos sector-card__logos--spaced">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-elgranlangostino.png') ); ?>" alt="Logo de El Gran Langostino"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-ma-isabel.webp') ); ?>" alt="Logo de Ma. Isabel"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( aaa_media_url('logo-k-listo.webp') ); ?>" alt="Logo de K-Listo"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"blockVisibility":false},"tagName":"section","className":"is-dark-surface","backgroundColor":"navy-deep","textColor":"white","align":"full","layout":{"type":"constrained"}} -->
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
<!-- wp:paragraph {"className":"stats-counter__note"} --><p class="stats-counter__note">Cifras en verificación por el área de Operaciones.</p><!-- /wp:paragraph -->
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
