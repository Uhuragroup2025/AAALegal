<?php
/**
 * Title: Home — página completa
 * Slug: aaa-estudio-legal/home-full
 * Categories: aaa-estudio-legal
 * Description: Página de Inicio completa (traducida de prototype/index.html): hero, cinta de logos, situaciones, "qué hace AAA", cómo intervenimos, por qué AAA, sectores de experiencia, casos de éxito, cifras, equipo y cierre. Asignar como página de inicio estática (Ajustes → Lectura) y la plantilla "Página con motion editorial (GSAP)". Los íconos decorativos de "Situaciones"/"¿Por qué AAA?" se omiten aquí (ver prototype/index.html para el SVG exacto de cada uno) — el texto es lo prioritario para quedar administrable.
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","className":"hero-immersive"} -->
<section class="wp-block-group hero-immersive">
	<!-- wp:group {"className":"hero-shell"} -->
	<div class="wp-block-group hero-shell">
		<!-- wp:group {"className":"hero-shell__media"} -->
		<div class="wp-block-group hero-shell__media">
			<!-- wp:image {"className":"hero-shell__img"} -->
			<figure class="wp-block-image hero-shell__img"><img src="" alt="Fotografía temporal de prototipo — pendiente de material del cliente" /></figure>
			<!-- /wp:image -->
			<!-- wp:group {"className":"hero-shell__scrim"} --><div class="wp-block-group hero-shell__scrim"></div><!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"hero-shell__content"} -->
		<div class="wp-block-group hero-shell__content">
			<!-- wp:heading {"level":1,"className":"hero__title"} -->
			<h1 class="wp-block-heading hero__title">Insolvencia y derecho corporativo: <em class="aaa-text-emphasis">somos la voz del acreedor.</em></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Somos especialistas en la defensa del acreedor, con soluciones potenciadas por tecnología propia que anticipa, agiliza y permite recuperar activos con precisión.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#servicios-home-heading">Conozca cómo lo hacemos →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"className":"home-logo-ribbon"} -->
<div class="wp-block-group home-logo-ribbon">
	<!-- wp:paragraph {"className":"home-logo-ribbon__title"} --><p class="home-logo-ribbon__title">Empresas que ya confiaron</p><!-- /wp:paragraph -->
	<!-- wp:group {"className":"home-logo-ribbon__track","layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group home-logo-ribbon__track">
		<!-- wp:image {"className":"home-logo-ribbon__item","width":100} --><figure class="wp-block-image home-logo-ribbon__item"><img src="" alt="Logo de cliente" /></figure><!-- /wp:image -->
		<!-- wp:image {"className":"home-logo-ribbon__item","width":100} --><figure class="wp-block-image home-logo-ribbon__item"><img src="" alt="Logo de cliente" /></figure><!-- /wp:image -->
		<!-- wp:image {"className":"home-logo-ribbon__item","width":100} --><figure class="wp-block-image home-logo-ribbon__item"><img src="" alt="Logo de cliente" /></figure><!-- /wp:image -->
		<!-- wp:image {"className":"home-logo-ribbon__item","width":100} --><figure class="wp-block-image home-logo-ribbon__item"><img src="" alt="Logo de cliente" /></figure><!-- /wp:image -->
		<!-- wp:image {"className":"home-logo-ribbon__item","width":100} --><figure class="wp-block-image home-logo-ribbon__item"><img src="" alt="Logo de cliente" /></figure><!-- /wp:image -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","layout":{"type":"constrained"}} -->
<section class="wp-block-group" data-surface="atmosphere">
	<!-- wp:group {"className":"atmosphere"} --><div class="wp-block-group atmosphere"></div><!-- /wp:group -->
	<!-- wp:heading {"level":2,"align":"center"} -->
	<h2 class="wp-block-heading has-text-align-center">¿Es acreedor y se enfrenta a <em class="aaa-text-emphasis">alguno de estos riesgos?</em></h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"className":"situations-grid"} -->
	<div class="wp-block-columns situations-grid">
		<!-- wp:column {"className":"is-style-surface-solid","style":{"spacing":{"padding":{"all":"var:preset|spacing|8"}}}} -->
		<div class="wp-block-column is-style-surface-solid" style="padding:var(--wp--preset--spacing--8)">
			<!-- wp:paragraph --><p>Una contraparte comercial o un proveedor entró en insolvencia y nuestro crédito está comprometido.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"is-style-surface-solid","style":{"spacing":{"padding":{"all":"var:preset|spacing|8"}}}} -->
		<div class="wp-block-column is-style-surface-solid" style="padding:var(--wp--preset--spacing--8)">
			<!-- wp:paragraph --><p>Necesitamos entender qué posibilidades reales tenemos de recuperar nuestra cartera.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"is-style-surface-solid","style":{"spacing":{"padding":{"all":"var:preset|spacing|8"}}}} -->
		<div class="wp-block-column is-style-surface-solid" style="padding:var(--wp--preset--spacing--8)">
			<!-- wp:paragraph --><p>Buscamos una firma que represente nuestros intereses durante todo el proceso.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/contacto/">Solicitar evaluación jurídica →</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","backgroundColor":"surface-light"} -->
<section class="wp-block-group has-surface-light-background-color has-background">
	<!-- wp:columns {"className":"what-we-do-grid"} -->
	<div class="wp-block-columns what-we-do-grid">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Enfoque de la firma</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Defendemos exclusivamente <em class="aaa-text-emphasis">los intereses del acreedor.</em></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph --><p><strong>No representamos al deudor.</strong></p><!-- /wp:paragraph -->
			<!-- wp:paragraph --><p>Anticipamos riesgos, protegemos el crédito del acreedor y maximizamos las posibilidades de recuperación, incluso en los escenarios más complejos y en diferentes sectores de la economía.</p><!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/quienes-somos/">Conozca la firma →</a></div><!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"className":"what-we-do-visual"} -->
			<figure class="wp-block-image what-we-do-visual"><img src="" alt="Fotografía temporal de prototipo — pendiente de material del cliente" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"servicios-home-heading","backgroundColor":"surface-light"} -->
<section class="wp-block-group has-surface-light-background-color has-background" id="servicios-home-heading">
	<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Áreas de práctica</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading">Estrategias jurídicas para <em class="aaa-text-emphasis">proteger, normalizar y recuperar activos.</em></h2>
	<!-- /wp:heading -->
	<!-- wp:html -->
	<div class="focus-mosaic">
		<a class="surface-visual" href="/metodologia/">
			<img src="" alt="Fotografía temporal de prototipo" />
			<div class="surface-visual__caption">
				<span class="focus-card__index">01</span>
				<h3>Defensa de acreedores en insolvencia</h3>
				<p>Protegemos los derechos del acreedor durante procesos de insolvencia empresarial y de persona natural.</p>
			</div>
		</a>
		<a class="surface-visual" href="/metodologia/">
			<img src="" alt="Fotografía temporal de prototipo" />
			<div class="surface-visual__caption">
				<span class="focus-card__index">02</span>
				<h3>Normalización de activos</h3>
				<p>Diseñamos estrategias jurídicas preventivas y reactivas para normalizar y recuperar activos.</p>
			</div>
		</a>
		<a class="surface-visual" href="/metodologia/">
			<img src="" alt="Fotografía temporal de prototipo" />
			<div class="surface-visual__caption">
				<span class="focus-card__index">03</span>
				<h3>Derecho corporativo</h3>
				<p>Estructuramos decisiones jurídicas orientadas a proteger la continuidad y la estabilidad empresarial.</p>
			</div>
		</a>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section"} -->
<section class="wp-block-group" data-surface="atmosphere">
	<!-- wp:group {"className":"atmosphere"} --><div class="wp-block-group atmosphere"></div><!-- /wp:group -->
	<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">¿Por qué AAA?</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading">Más que asesoría jurídica, <em class="aaa-text-emphasis">construimos confianza</em> durante todo el proceso.</h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"className":"focus-grid"} -->
	<div class="wp-block-columns focus-grid">
		<!-- wp:column {"className":"is-style-surface-solid","style":{"spacing":{"padding":{"all":"var:preset|spacing|6"}}}} --><div class="wp-block-column is-style-surface-solid" style="padding:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"md"} --><h3 class="wp-block-heading has-md-font-size">Infraestructura para atención masiva.</h3><!-- /wp:heading --></div><!-- /wp:column -->
		<!-- wp:column {"className":"is-style-surface-solid","style":{"spacing":{"padding":{"all":"var:preset|spacing|6"}}}} --><div class="wp-block-column is-style-surface-solid" style="padding:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"md"} --><h3 class="wp-block-heading has-md-font-size">Equipo especializado.</h3><!-- /wp:heading --></div><!-- /wp:column -->
		<!-- wp:column {"className":"is-style-surface-solid","style":{"spacing":{"padding":{"all":"var:preset|spacing|6"}}}} --><div class="wp-block-column is-style-surface-solid" style="padding:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"md"} --><h3 class="wp-block-heading has-md-font-size">Tecnología propia (ADY).</h3><!-- /wp:heading --></div><!-- /wp:column -->
		<!-- wp:column {"className":"is-style-surface-solid","style":{"spacing":{"padding":{"all":"var:preset|spacing|6"}}}} --><div class="wp-block-column is-style-surface-solid" style="padding:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"md"} --><h3 class="wp-block-heading has-md-font-size">Seguridad de la información.</h3><!-- /wp:heading --></div><!-- /wp:column -->
		<!-- wp:column {"className":"is-style-surface-solid","style":{"spacing":{"padding":{"all":"var:preset|spacing|6"}}}} --><div class="wp-block-column is-style-surface-solid" style="padding:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"md"} --><h3 class="wp-block-heading has-md-font-size">Compliance.</h3><!-- /wp:heading --></div><!-- /wp:column -->
		<!-- wp:column {"className":"is-style-surface-solid","style":{"spacing":{"padding":{"all":"var:preset|spacing|6"}}}} --><div class="wp-block-column is-style-surface-solid" style="padding:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3,"fontSize":"md"} --><h3 class="wp-block-heading has-md-font-size">Cobertura nacional.</h3><!-- /wp:heading --></div><!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"sector-experience","backgroundColor":"surface-light"} -->
<section class="wp-block-group sector-experience has-surface-light-background-color has-background">
	<!-- wp:group {"className":"sector-experience__header"} -->
	<div class="wp-block-group sector-experience__header">
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Sectores de experiencia</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Experiencia especializada en sectores donde <em class="aaa-text-emphasis">la recuperación del crédito exige conocimiento jurídico y sectorial.</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"className":"sector-experience__intro"} -->
		<p class="sector-experience__intro">Trabajamos con organizaciones de los sectores financiero, fintech, solidario, público, salud, cajas de compensación, construcción e inmobiliario, y comercio y consumo, con estrategias ajustadas a sus marcos jurídicos y dinámicas operativas.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html -->
	<div class="sector-grid">
		<article class="sector-card">
			<div class="sector-card__header"><span class="sector-card__name">Financiero y Fintech</span></div>
			<div class="sector-card__logos">
				<span class="sector-card__logo"><img src="" alt="Logo de BBVA"></span>
				<span class="sector-card__logo"><img src="" alt="Logo de Femcristar"></span>
				<span class="sector-card__logo"><img src="" alt="Logo de Nuestro Fondo"></span>
			</div>
		</article>
		<article class="sector-card">
			<div class="sector-card__header"><span class="sector-card__name">Solidario</span></div>
			<div class="sector-card__logos">
				<span class="sector-card__logo"><img src="" alt="Logo de Coopunidos"></span>
				<span class="sector-card__logo"><img src="" alt="Logo de Fetrabuv"></span>
				<span class="sector-card__logo"><img src="" alt="Logo de Fonalianza"></span>
			</div>
		</article>
		<article class="sector-card">
			<div class="sector-card__header"><span class="sector-card__name">Sector público</span></div>
			<div class="sector-card__logos">
				<span class="sector-card__logo"><img src="" alt="Logo de la Gobernación del Valle del Cauca"></span>
				<span class="sector-card__logo"><img src="" alt="Logo de MetroCali"></span>
			</div>
		</article>
		<article class="sector-card">
			<div class="sector-card__header"><span class="sector-card__name">Salud y cajas de compensación</span></div>
			<div class="sector-card__logos">
				<span class="sector-card__logo"><img src="" alt="Logo de Promédico"></span>
				<span class="sector-card__logo"><img src="" alt="Logo de Comfandi"></span>
			</div>
		</article>
		<article class="sector-card">
			<div class="sector-card__header"><span class="sector-card__name">Construcción e inmobiliario</span></div>
			<div class="sector-card__logos">
				<span class="sector-card__logo"><img src="" alt="Logo de Constructora Meléndez"></span>
				<span class="sector-card__logo"><img src="" alt="Logo de Neat"></span>
			</div>
		</article>
		<article class="sector-card">
			<div class="sector-card__header"><span class="sector-card__name">Comercio y consumo</span></div>
			<div class="sector-card__logos">
				<span class="sector-card__logo"><img src="" alt="Logo de El Gran Langostino"></span>
				<span class="sector-card__logo"><img src="" alt="Logo de Ma. Isabel"></span>
				<span class="sector-card__logo"><img src="" alt="Logo de K-Listo"></span>
			</div>
		</article>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","backgroundColor":"navy-deep","textColor":"white"} -->
<section class="wp-block-group has-white-color has-navy-deep-background-color has-text-color has-background">
	<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Casos de éxito</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading">La confianza se construye <em class="aaa-text-emphasis">con resultados.</em></h2>
	<!-- /wp:heading -->
	<!-- wp:html -->
	<div class="case-video-grid">
		<article class="case-video"><div class="case-video__frame"><img src="" alt="Video pendiente de entrega por el cliente" /><button class="case-video__play" type="button" disabled aria-label="Caso 1: video pendiente de entrega por el cliente">▶</button></div></article>
		<article class="case-video"><div class="case-video__frame"><img src="" alt="Video pendiente de entrega por el cliente" /><button class="case-video__play" type="button" disabled aria-label="Caso 2: video pendiente de entrega por el cliente">▶</button></div></article>
		<article class="case-video"><div class="case-video__frame"><img src="" alt="Video pendiente de entrega por el cliente" /><button class="case-video__play" type="button" disabled aria-label="Caso 3: video pendiente de entrega por el cliente">▶</button></div></article>
	</div>
	<!-- /wp:html -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"stats-counter stats-counter--editorial","backgroundColor":"navy-hover","textColor":"white"} -->
<section class="wp-block-group stats-counter stats-counter--editorial has-white-color has-navy-hover-background-color has-text-color has-background">
	<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">En cifras</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading">Resultados que respaldan <em class="aaa-text-emphasis">nuestro trabajo.</em></h2>
	<!-- /wp:heading -->
	<!-- wp:group {"className":"stats-grid","layout":{"type":"flex"}} -->
	<div class="wp-block-group stats-grid">
		<!-- wp:group {"className":"stat-card"} --><div class="wp-block-group stat-card"><!-- wp:paragraph {"className":"stat-card__number"} --><p class="stat-card__number">+100</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"stat-card__label"} --><p class="stat-card__label">Casos gestionados</p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"stat-card"} --><div class="wp-block-group stat-card"><!-- wp:paragraph {"className":"stat-card__number"} --><p class="stat-card__number">+50</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"stat-card__label"} --><p class="stat-card__label">Clientes atendidos</p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"stat-card"} --><div class="wp-block-group stat-card"><!-- wp:paragraph {"className":"stat-card__number"} --><p class="stat-card__number">+$100 M</p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"stat-card__label"} --><p class="stat-card__label">Cartera recuperada</p><!-- /wp:paragraph --></div><!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:paragraph {"fontSize":"xs","style":{"typography":{"fontStyle":"italic"}}} -->
	<p class="has-xs-font-size" style="font-style:italic">Cifras de ejemplo — pendientes de dato aprobado por el cliente.</p>
	<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section"} -->
<section class="wp-block-group">
	<!-- wp:group {"className":"people-card"} -->
	<div class="wp-block-group people-card">
		<!-- wp:columns {"className":"people-intro"} -->
		<div class="wp-block-columns people-intro">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"className":"is-style-media-placeholder people-intro__media"} -->
				<figure class="wp-block-image is-style-media-placeholder people-intro__media"><img src="" alt="Fotografía temporal de prototipo — pendiente de material del cliente" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"className":"people-intro__copy"} -->
			<div class="wp-block-column people-intro__copy">
				<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Dimensión humana</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":2} -->
				<h2 class="wp-block-heading">Detrás de cada proceso hay <em class="aaa-text-emphasis">un equipo especializado.</em></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph --><p>Combinamos experiencia jurídica, conocimiento sectorial y tecnología propia con una interlocución directa que permite comprender cada asunto y acompañar decisiones críticas con criterio.</p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p><a href="/quienes-somos/">Conozca nuestra experiencia →</a></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"site-closing-cta site-closing-cta--internal","backgroundColor":"surface-light-alt"} -->
<section class="wp-block-group site-closing-cta site-closing-cta--internal has-surface-light-alt-background-color has-background">
	<!-- wp:group {"className":"site-closing-cta__panel"} -->
	<div class="wp-block-group site-closing-cta__panel">
		<!-- wp:group {"className":"site-closing-cta__heading"} -->
		<div class="wp-block-group site-closing-cta__heading">
			<!-- wp:paragraph {"className":"aaa-eyebrow"} --><p class="aaa-eyebrow">Conversemos</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Cada crédito comprometido exige <em class="aaa-text-emphasis">una defensa con criterio.</em></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"site-closing-cta__content"} -->
		<div class="wp-block-group site-closing-cta__content">
			<!-- wp:paragraph {"className":"site-closing-cta__text"} -->
			<p class="site-closing-cta__text">Si su organización enfrenta un proceso de insolvencia o necesita fortalecer la protección de su cartera, nuestro equipo puede evaluar la situación y definir una ruta de actuación.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"site-closing-cta__button"} -->
				<div class="wp-block-button site-closing-cta__button"><a class="wp-block-button__link wp-element-button" href="/contacto/">Solicitar evaluación jurídica →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
