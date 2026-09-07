<?php
/**
 * Title: Contacto — página completa
 * Slug: aaa-estudio-legal/contacto-full
 * Categories: aaa-estudio-legal
 * Description: Página "Contacto" completa (Decisión D109 — restructuración de Captación B2B): contexto + datos de contacto a la izquierda, formulario B2B de 8 campos a la derecha. Sin hero — composición editorial directa. El formulario usa Contact Form 7 (shortcode a insertar manualmente tras crear el formulario "Contacto B2B" — ver WORDPRESS-SETUP.md § Formularios); mientras tanto se deja como bloque HTML de referencia visual con los mismos campos/etiquetas reales.
 *
 * @package aaa-estudio-legal
 */
?>
<!-- wp:group {"tagName":"section","className":"contact-intake surface-theme--light-base","style":{"spacing":{"padding":{"top":"clamp(9rem, 15vh, 11rem)","bottom":"var:preset|spacing|24"}}},"backgroundColor":"surface-light","layout":{"type":"constrained"}} -->
<section class="wp-block-group contact-intake surface-theme--light-base has-surface-light-background-color has-background">

	<!-- wp:columns {"className":"contact-intake__grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|12","left":"var:preset|spacing|12"}}}} -->
	<div class="wp-block-columns contact-intake__grid">

		<!-- wp:column {"className":"contact-intake__content"} -->
		<div class="wp-block-column contact-intake__content">

			<!-- wp:group {"className":"section-heading--editorial"} -->
			<div class="wp-block-group section-heading--editorial">
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
					<!-- wp:paragraph {"fontSize":"xs"} --><p class="has-xs-font-size"><span>Dirección</span></p><!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p>Calle 28 Norte # 6BIS - 26<br>Barrio San Vicente, Cali, Valle del Cauca</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"contact-intake__detail"} -->
				<div class="wp-block-group contact-intake__detail">
					<!-- wp:paragraph {"fontSize":"xs"} --><p class="has-xs-font-size"><span>Contacto directo</span></p><!-- /wp:paragraph -->
					<!-- wp:paragraph -->
					<p><a href="https://wa.link/g02tqj">+57 317 655 1931</a><br><a href="mailto:info@agudeloabogados.com">info@agudeloabogados.com</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</address>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:html -->
			<div class="talent-form contact-form">
				<!--
				Reemplazar este bloque por el shortcode de Contact Form 7 una vez creado
				el formulario "Contacto B2B" (ver WORDPRESS-SETUP.md § Formularios) —
				por ejemplo [contact-form-7 id="..." title="Contacto B2B"]. Se deja el
				markup real (mismos campos/labels/orden que el prototipo) como
				referencia visual mientras tanto.
				-->
				<div class="talent-form__field">
					<label for="contact-name">Nombre completo</label>
					<input type="text" id="contact-name" name="nombre" autocomplete="name" required>
				</div>
				<div class="talent-form__field">
					<label for="contact-company">Empresa u organización</label>
					<input type="text" id="contact-company" name="organizacion" autocomplete="organization" required>
				</div>
				<div class="talent-form__field">
					<label for="contact-role">Cargo</label>
					<input type="text" id="contact-role" name="cargo" autocomplete="organization-title" required>
				</div>
				<div class="talent-form__field">
					<label for="contact-email">Correo corporativo</label>
					<input type="email" id="contact-email" name="correo" autocomplete="email" required>
				</div>
				<div class="talent-form__field">
					<label for="contact-phone">Teléfono de contacto</label>
					<input type="tel" id="contact-phone" name="telefono" autocomplete="tel" required>
				</div>
				<div class="talent-form__field">
					<label for="contact-organization-type">Tipo de organización</label>
					<select id="contact-organization-type" name="tipo-organizacion" required>
						<option value="">Seleccione una opción</option>
						<option>Entidad financiera</option>
						<option>Fintech</option>
						<option>Empresa</option>
						<option>Sector salud o caja de compensación</option>
						<option>Entidad pública</option>
						<option>Otra organización</option>
					</select>
				</div>
				<div class="talent-form__field talent-form__field--wide">
					<label for="contact-interest">Asunto de interés</label>
					<select id="contact-interest" name="asunto" required>
						<option value="">Seleccione una opción</option>
						<option>Defensa de acreedores en procesos de insolvencia</option>
						<option>Normalización de activos</option>
						<option>Derecho corporativo</option>
						<option>Otra consulta</option>
					</select>
				</div>
				<div class="talent-form__field talent-form__field--wide">
					<label for="contact-context">Contexto general del asunto</label>
					<textarea id="contact-context" name="contexto" rows="5" required></textarea>
				</div>
				<button class="wp-element-button" type="submit">Solicitar contacto →</button>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
