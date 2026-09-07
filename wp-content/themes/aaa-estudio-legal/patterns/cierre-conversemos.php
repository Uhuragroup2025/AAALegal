<?php
/**
 * Title: Cierre — "Conversemos sobre su caso."
 * Slug: aaa-estudio-legal/cierre-conversemos
 * Categories: aaa-estudio-legal
 * Description: Bloque de cierre de dos columnas (fotografía + tarjeta navy con CTA) usado al final de Inicio y Metodología (Decisiones D73/D74/D87). La columna de fotografía usa el estilo de bloque "Placeholder de fotografía" — reemplazar por una imagen real cuando llegue el material del cliente, quitando ese estilo de bloque.
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns">

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:image {"className":"is-style-media-placeholder","style":{"border":{"radius":"var:preset|spacing|0"}}} -->
		<figure class="wp-block-image is-style-media-placeholder"><img src="" alt="Espacio reservado para fotografía institucional — pendiente de material del cliente" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"backgroundColor":"navy-deep","textColor":"white","style":{"spacing":{"padding":{"all":"var:preset|spacing|8"}},"border":{"radius":"var:preset|spacing|2"}}} -->
	<div class="wp-block-column has-white-color has-navy-deep-background-color has-text-color has-background" style="padding:var(--wp--preset--spacing--8)">

		<!-- wp:heading {"level":2,"fontSize":"xl"} -->
		<h2 class="wp-block-heading has-xl-font-size">Conversemos sobre su caso.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Si enfrenta un proceso de insolvencia o necesita fortalecer la protección de su cartera, nuestro equipo está listo para acompañarlo.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"accent-main","textColor":"navy-hover"} -->
			<div class="wp-block-button">
				<a class="wp-block-button__link has-navy-hover-color has-accent-main-background-color has-text-color has-background wp-element-button" href="/captacion-b2b/">Hablemos de su caso →</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
