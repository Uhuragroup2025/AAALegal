<?php
/**
 * Title: Contacto — página completa
 * Slug: aaa-estudio-legal/contacto-full
 * Categories: aaa-estudio-legal
 * Description: Página "Contacto" completa, fiel a la última versión de prototype/captacion-b2b.html (D109 + ajustes posteriores): sin hero, una sola sección editorial con título, introducción y datos de contacto a la izquierda y el formulario "Contacto B2B" (Contact Form 7, 8 campos) a la derecha. El shortcode busca el formulario por su título — ver WORDPRESS-SETUP.md § 7bis. Asignar la plantilla "Página con motion editorial (GSAP)" a esta página (D135).
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","anchor":"contacto-formulario","className":"contact-intake surface-theme--light-base aaa-section","backgroundColor":"surface-light","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull contact-intake surface-theme--light-base aaa-section has-surface-light-background-color has-background" id="contacto-formulario">
	<!-- wp:group {"className":"contact-intake__grid"} -->
	<div class="wp-block-group contact-intake__grid">
		<!-- wp:group {"className":"contact-intake__content"} -->
		<div class="wp-block-group contact-intake__content">
			<!-- wp:group {"className":"section-heading--editorial aaa-motion-section-title"} -->
			<div class="wp-block-group section-heading--editorial aaa-motion-section-title">
				<!-- wp:heading {"level":1,"className":"contact-intake__title"} -->
				<h1 class="wp-block-heading contact-intake__title">Cuéntenos el contexto de su organización. <em class="aaa-text-emphasis">Nuestro equipo revisará su solicitud.</em></h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"contact-intake__intro"} -->
				<p class="contact-intake__intro">Comparta la información inicial necesaria para que podamos comprender el asunto y establecer el canal de contacto adecuado.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"tagName":"address","className":"contact-intake__details"} -->
			<address class="wp-block-group contact-intake__details">
				<!-- wp:group {"className":"contact-intake__detail"} -->
				<div class="wp-block-group contact-intake__detail">
					<!-- wp:paragraph {"className":"contact-intake__label"} --><p class="contact-intake__label">Dirección</p><!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p>Calle 28 Norte # 6BIS - 26<br>Barrio San Vicente, Cali, Valle del Cauca</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"contact-intake__detail"} -->
				<div class="wp-block-group contact-intake__detail">
					<!-- wp:paragraph {"className":"contact-intake__label"} --><p class="contact-intake__label">Contacto directo</p><!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p><a href="https://wa.link/g02tqj" target="_blank" rel="noreferrer noopener">+57 317 655 1931</a></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p><a href="mailto:info@agudeloabogados.com">info@agudeloabogados.com</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</address>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"contact-intake__form aaa-reveal"} -->
		<div class="wp-block-group contact-intake__form aaa-reveal">
			<!-- wp:shortcode -->
[contact-form-7 title="Contacto B2B" html_class="talent-form talent-form--open contact-form"]
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
