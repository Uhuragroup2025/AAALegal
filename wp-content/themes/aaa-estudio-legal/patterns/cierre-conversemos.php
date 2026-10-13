<?php
/**
 * Title: Cierre — "Conversemos"
 * Slug: aaa-estudio-legal/cierre-conversemos
 * Categories: aaa-estudio-legal
 * Description: Cierre oficial del sitio (D170): panel navy con foto de fondo, eyebrow "Conversemos", título, texto y botón a Contacto — el mismo de Inicio, Metodología y Quiénes somos. La foto se cambia desde el bloque Grupo del panel (Fondo → Imagen de fondo). Reemplaza al cierre de dos columnas del prototipo (D73/D74/D87).
 *
 * @package aaa-estudio-legal
 */
?>
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
