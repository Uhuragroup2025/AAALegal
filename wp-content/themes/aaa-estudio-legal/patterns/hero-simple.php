<?php
/**
 * Title: Hero simple (eyebrow + H1 + párrafo)
 * Slug: aaa-estudio-legal/hero-simple
 * Categories: aaa-estudio-legal
 * Description: Hero de una columna con eyebrow, H1 (con énfasis opcional en cursiva vía el estilo de texto "Énfasis") y un párrafo de apertura. Traducido de las 3 páginas de hero simple del prototipo (Metodología, Quiénes somos, Trabaja con nosotros) — Decisión D98 normalizó el párrafo a 1.0625rem en las tres, ya reflejado aquí (fontSize "base"). Editar el texto de ejemplo directamente en el bloque: no depende de ningún campo personalizado (D99 — bloques nativos antes que ACF).
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","className":"has-navy-deep-background-color has-white-color","style":{"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|16"}}},"backgroundColor":"navy-deep","textColor":"white","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-navy-deep-background-color has-white-color has-background">

	<!-- wp:paragraph {"className":"aaa-eyebrow"} -->
	<p class="aaa-eyebrow">Eyebrow de la página</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"fontSize":"2xl"} -->
	<h1 class="wp-block-heading has-2xl-font-size">Título de la página <em class="aaa-text-emphasis">con la frase de énfasis</em></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"base"} -->
	<p class="has-base-font-size">Párrafo de apertura — una o dos frases que resumen el propósito de esta página, mismo tamaño (1.0625rem) en las 3 páginas de hero simple (Decisión D98).</p>
	<!-- /wp:paragraph -->

</section>
<!-- /wp:group -->
