<?php
/**
 * AAA Estudio Legal — funciones del tema.
 *
 * Decisión D99 (03A — Arquitectura WordPress, 2026-09-07): block theme propio,
 * Gutenberg nativo, theme.json como fuente de tokens. Este archivo solo cubre
 * lo que theme.json no puede expresar (fuentes locales ya declaradas ahí vía
 * fontFace, la hoja de componentes con los patrones de "Superficies"/hover del
 * prototipo, y el registro de patterns/bloques). Sin frameworks JS — mismo
 * criterio de JS mínimo/progressive enhancement que prototype/js/main.js.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AAA_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Versión de un asset del tema basada en su fecha de modificación real, en
 * vez del número fijo de style.css (que nunca cambiaba — cada ajuste a
 * components.css/main.js se seguía sirviendo con el mismo `?ver=0.1.0` de
 * siempre, y el navegador podía seguir usando la copia vieja en caché sin
 * que hubiera forma de saber, desde afuera, si el archivo nuevo ya había
 * cargado o no). Con filemtime(), cada edición cambia el número solo.
 */
function aaa_asset_version( $relative_path ) {
	$file = get_theme_file_path( $relative_path );
	return file_exists( $file ) ? (string) filemtime( $file ) : AAA_THEME_VERSION;
}

/**
 * Soporte del tema. Nada de esto reemplaza theme.json (fuente de verdad de
 * diseño) — son capacidades que solo se declaran por PHP.
 */
function aaa_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );

	// El editor usa el mismo CSS de front-end — sin una hoja "solo editor" que
	// pueda desincronizarse (mismo principio de fidelidad que el prototipo).
	add_editor_style( 'assets/css/components.css' );
}
add_action( 'after_setup_theme', 'aaa_theme_setup' );

/**
 * Encolado de fuentes y CSS de componentes.
 *
 * Fuentes vía Google Fonts (mismo mecanismo que usa hoy prototype/*.html —
 * README.md § 7 registra el auto-hospedaje como mejora futura, no como
 * bloqueante de Gate 1). theme.json solo declara los fontFamily/fallback;
 * no hay archivos .woff2 reales en el repo todavía, así que fontFace no se usa.
 */
function aaa_theme_assets() {
	wp_enqueue_style(
		'aaa-google-fonts',
		'https://fonts.googleapis.com/css2?family=Krub:wght@400;500;600;700&family=Libre+Caslon+Display&family=Libre+Caslon+Text:ital@1&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'aaa-components',
		get_theme_file_uri( 'assets/css/components.css' ),
		array( 'aaa-google-fonts' ),
		aaa_asset_version( 'assets/css/components.css' )
	);

	wp_enqueue_script(
		'aaa-main',
		get_theme_file_uri( 'assets/js/main.js' ),
		array(),
		aaa_asset_version( 'assets/js/main.js' ),
		array( 'strategy' => 'defer', 'in_footer' => true )
	);

	// Motion editorial (GSAP + ScrollTrigger + home-motion.js) — Decisión D112
	// autoriza esta única excepción a "sin dependencias nuevas". En el prototipo
	// carga en 5 páginas (Home, Metodología, Quiénes somos, Trabaja con nosotros,
	// Contacto), no solo en Home — aquí se encola en portada + en cualquier página
	// que use la plantilla `page-motion.html` (ver templates/page-motion.html).
	// En un tema de bloques WordPress guarda la plantilla personalizada por su
	// slug (`page-motion`), no por la ruta del archivo: con solo
	// 'templates/page-motion.html' la condición nunca se cumplía y GSAP no
	// cargaba en ninguna página interna (D125). Se aceptan ambas formas.
	$is_motion_page = is_front_page() || is_page_template( array( 'page-motion', 'templates/page-motion.html' ) );
	if ( $is_motion_page ) {
		wp_enqueue_script(
			'aaa-gsap',
			get_theme_file_uri( 'assets/js/gsap/gsap-3.15.0.min.js' ),
			array(),
			'3.15.0',
			array( 'in_footer' => true )
		);
		wp_enqueue_script(
			'aaa-gsap-scrolltrigger',
			get_theme_file_uri( 'assets/js/gsap/ScrollTrigger-3.15.0.min.js' ),
			array( 'aaa-gsap' ),
			'3.15.0',
			array( 'in_footer' => true )
		);
		wp_enqueue_script(
			'aaa-home-motion',
			get_theme_file_uri( 'assets/js/home-motion.js' ),
			array( 'aaa-gsap', 'aaa-gsap-scrolltrigger' ),
			aaa_asset_version( 'assets/js/home-motion.js' ),
			array( 'in_footer' => true )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'aaa_theme_assets' );

/**
 * home-motion.js (portado tal cual desde prototype/js/) detecta la portada
 * buscando `document.body.classList.contains('home-page')` — así estaba en el
 * prototipo estático, donde `<body class="home-page">` se escribía a mano en
 * cada HTML. WordPress no agrega esa clase por defecto (agrega `front-page`),
 * así que sin esto `isHome` siempre da `false` y el reveal del hero, el
 * parallax de la foto del hero y el reveal de "Áreas de práctica" nunca se
 * ejecutan. Se agrega la clase aquí en vez de tocar el script, para no
 * reescribir lógica de motion ya construida.
 */
function aaa_add_home_page_body_class( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'home-page';
	}
	return $classes;
}
add_filter( 'body_class', 'aaa_add_home_page_body_class' );

/**
 * Registro de patterns propios. Cada archivo en patterns/ ya trae su propia
 * cabecera de bloque (Title/Slug/Categories) — register_block_pattern no es
 * necesario en temas con soporte de patterns por carpeta (WP 6.0+), pero se
 * registra la categoría propia explícitamente para que no queden sueltos en
 * "Sin categoría" dentro del inserer.
 */
function aaa_register_pattern_categories() {
	register_block_pattern_category(
		'aaa-estudio-legal',
		array( 'label' => __( 'AAA Estudio Legal', 'aaa-estudio-legal' ) )
	);
}
add_action( 'init', 'aaa_register_pattern_categories' );

/**
 * Resuelve la URL real de un archivo ya subido a la Biblioteca de medios a
 * partir de su nombre (sin ruta) — evita tener que adivinar la carpeta
 * año/mes que WordPress asigna a `wp-content/uploads/` según la fecha de
 * subida, que no es controlable desde un archivo de tema. Busca por el
 * título del adjunto, que por defecto coincide con el nombre de archivo
 * sin extensión (comportamiento estándar del subidor de medios de
 * WordPress). Si no lo encuentra, devuelve cadena vacía — el bloque de
 * imagen queda vacío, mismo criterio que los demás placeholders del tema,
 * en vez de apuntar a una URL inventada que rompería en producción.
 */
function aaa_media_url( $filename ) {
	static $cache = array();
	if ( isset( $cache[ $filename ] ) ) {
		return $cache[ $filename ];
	}
	global $wpdb;
	$name          = pathinfo( $filename, PATHINFO_FILENAME );
	$attachment_id = $wpdb->get_var(
		$wpdb->prepare(
			"SELECT ID FROM {$wpdb->posts} WHERE post_type = 'attachment' AND post_title = %s LIMIT 1",
			$name
		)
	);
	$url                   = $attachment_id ? wp_get_attachment_url( (int) $attachment_id ) : '';
	$cache[ $filename ]    = $url;
	return $url;
}

/**
 * home-motion.js (heredado tal cual del prototipo estático) engancha sus
 * animaciones vía atributos `data-motion`/`data-count-*` en el HTML — así
 * vivían escritos a mano en prototype/index.html. main.js (D99, porteado con
 * un nombre de clase propio) observa `.aaa-reveal` y lee `--stagger-index`
 * inline para escalonar la entrada de tarjetas en grilla. Un bloque nativo
 * de Gutenberg no tiene forma, desde la UI, de agregar un atributo `data-*`
 * o una propiedad CSS personalizada arbitraria sin registrar soporte de
 * bloque nuevo (JS de build, fuera del criterio "core blocks primero" de
 * D110). La alternativa: marcar el bloque con una clase propia (`aaa-motion-*`,
 * `aaa-stagger-N`, un atributo `className` normal y válido) y agregar aquí,
 * en el render final — no en el markup guardado — el atributo real. Como el
 * editor de bloques valida el markup guardado contra sus propios atributos,
 * no contra el HTML ya renderizado, este filtro nunca puede marcar un bloque
 * como inválido.
 */
function aaa_inject_motion_attributes( $block_content, $block ) {
	$class = $block['attrs']['className'] ?? '';
	if ( '' === $class ) {
		return $block_content;
	}
	$map = array(
		'aaa-motion-hero'           => 'data-motion="hero"',
		'aaa-motion-section-title'  => 'data-motion="section-title"',
		'aaa-motion-chapter'        => 'data-motion="chapter"',
		'aaa-motion-service-panels' => 'data-motion="service-panels"',
		'aaa-motion-stats'          => 'data-motion="stats"',
		'aaa-motion-media'          => 'data-motion-media',
		'aaa-stat-cases'            => 'data-count-to="8754"',
		'aaa-stat-clients'          => 'data-count-to="30"',
		'aaa-stat-recovered'        => 'data-count-to="10" data-count-prefix="+" data-count-suffix=" mil millones"',
	);
	foreach ( $map as $marker => $attr ) {
		if ( false !== strpos( $class, $marker ) ) {
			$block_content = preg_replace( '/^(\s*<[a-zA-Z0-9]+)/', '$1 ' . $attr, $block_content, 1 );
		}
	}
	// --stagger-index, para el escalonado de .aaa-reveal (main.js) — se funde con
	// el style="" ya existente (p. ej. el padding de una columna) en vez de pisarlo.
	for ( $i = 0; $i <= 8; $i++ ) {
		$marker = 'aaa-stagger-' . $i;
		if ( false === strpos( $class, $marker ) ) {
			continue;
		}
		$css = '--stagger-index:' . $i;
		if ( preg_match( '/style="([^"]*)"/', $block_content, $m ) ) {
			$block_content = str_replace(
				'style="' . $m[1] . '"',
				'style="' . rtrim( $m[1], '; ' ) . ';' . $css . '"',
				$block_content
			);
		} else {
			$block_content = preg_replace( '/^(\s*<[a-zA-Z0-9]+)/', '$1 style="' . $css . '"', $block_content, 1 );
		}
	}
	return $block_content;
}
add_filter( 'render_block', 'aaa_inject_motion_attributes', 10, 2 );

/**
 * parts/header.html es un archivo .html — WordPress lo carga como markup de
 * bloques puro, nunca lo ejecuta como PHP (a diferencia de patterns/*.php).
 * Por eso el logo (isotipo + wordmark, dos imágenes ya en la Biblioteca de
 * medios) no se puede resolver con aaa_media_url() directo ahí adentro. En
 * su lugar, el template part solo trae un marcador vacío
 * (`aaa-brand-lockup`) y este filtro reemplaza su contenido completo en el
 * render final — misma técnica y mismas garantías que
 * aaa_inject_motion_attributes: nunca toca el markup guardado.
 */
function aaa_render_brand_lockup( $block_content, $block ) {
	$class = $block['attrs']['className'] ?? '';
	if ( false === strpos( $class, 'aaa-brand-lockup' ) ) {
		return $block_content;
	}
	// D126: logo nuevo del cliente (sin recuadro), desde el propio tema.
	$isotype  = esc_url( aaa_brand_url( 'isotipo.svg' ) );
	$wordmark = esc_url( aaa_brand_url( 'wordmark-blanco.svg' ) );
	return sprintf(
		'<a class="brand" href="%1$s" aria-label="%2$s">' .
			'<span class="brand__mark" aria-hidden="true"><img class="brand__isotype" src="%3$s" alt="" /></span>' .
			'<span class="brand__wordmark" aria-hidden="true"><img class="brand__wordmark-light" src="%4$s" alt="" /></span>' .
		'</a>',
		esc_url( home_url( '/' ) ),
		esc_attr__( 'AAA Estudio Legal — Inicio', 'aaa-estudio-legal' ),
		$isotype,
		$wordmark
	);
}
add_filter( 'render_block', 'aaa_render_brand_lockup', 10, 2 );

/**
 * Mismo problema y misma técnica que aaa_render_brand_lockup, para el logo
 * del footer (parts/footer.html): `core/site-logo` tira del ícono del sitio
 * configurado en Ajustes → General (un campo que este proyecto no usa), no
 * del archivo real de la Biblioteca de medios — sin logo de sitio configurado
 * renderiza vacío, que es exactamente la columna vacía que se veía en el
 * footer. Se reemplaza por el mismo marcador vacío + resolución en el
 * render final que ya usa el header.
 */
function aaa_render_footer_logo( $block_content, $block ) {
	$class = $block['attrs']['className'] ?? '';
	if ( false !== strpos( $class, 'aaa-footer-logo' ) ) {
		// D126: logo horizontal nuevo (isotipo cobre + "Estudio Legal" blanco, sin recuadro).
		$logo = esc_url( aaa_brand_url( 'logo-horizontal-claro.svg' ) );
		return sprintf(
			'<a class="aaa-site-footer__logo" href="%1$s" aria-label="%2$s"><img src="%3$s" width="220" height="77" alt="AAA Estudio Legal" /></a>',
			esc_url( home_url( '/' ) ),
			esc_attr__( 'AAA Estudio Legal — Inicio', 'aaa-estudio-legal' ),
			$logo
		);
	}
	/* Marca de agua del footer (D67, `.aaa-site-footer__watermark`): mismo
	   marcador vacío que el logo de arriba, en vez del `wp:image {className,
	   sizeSlug:"full"} src=""` original — ese wp:image nunca llegaba a
	   renderizar nada (ni figure ni img) en este template part, con o sin el
	   filtro que le rellena el src; el marcador + reemplazo total ya
	   demostrado con el logo es la técnica confiable acá. */
	if ( false !== strpos( $class, 'aaa-footer-watermark' ) ) {
		$watermark = esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) );
		return sprintf(
			'<img class="aaa-site-footer__watermark" src="%1$s" alt="" aria-hidden="true" />',
			$watermark
		);
	}
	return $block_content;
}
add_filter( 'render_block', 'aaa_render_footer_logo', 10, 2 );

/**
 * D144 — Menú móvil más completo (pedido del Owner: íconos, contacto y redes,
 * como el panel del prototipo, `.nav__mobile-contact`). El bloque Navigation
 * solo admite enlaces dentro del panel desplegable, así que el logo y el
 * bloque de contacto/redes se agregan en el render final, justo después de la
 * lista de enlaces y dentro del contenedor del panel. Solo aplica al menú con
 * panel (el del header); el del footer usa `overlayMenu: never`. En escritorio
 * el CSS lo oculta: se ve únicamente con el panel abierto. Mismos datos e
 * íconos que el footer (parts/footer.html).
 */
function aaa_mobile_nav_extras( $block_content, $block ) {
	if ( 'never' === ( $block['attrs']['overlayMenu'] ?? 'mobile' ) ) {
		return $block_content;
	}
	if ( false === strpos( $block_content, 'wp-block-navigation__responsive-container-content' ) ) {
		return $block_content;
	}
	$last_list = strrpos( $block_content, '</ul>' );
	if ( false === $last_list ) {
		return $block_content;
	}
	$icon = static function ( $paths ) {
		return '<svg class="aaa-nav-extra__icon" viewBox="0 0 256 256" fill="none" stroke="currentColor" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths . '</svg>';
	};
	$extras = sprintf(
		'<a class="aaa-nav-brand" href="%1$s" aria-label="%2$s"><img src="%3$s" width="176" height="62" alt="" /></a>' .
		'<div class="aaa-nav-extra">' .
			'<p class="aaa-nav-extra__label">%4$s</p>' .
			'<ul class="aaa-nav-extra__list">' .
				'<li class="aaa-nav-extra__item">%5$s<span>Calle 28 Norte # 6BIS - 26<br>Barrio San Vicente, Cali</span></li>' .
				'<li><a class="aaa-nav-extra__item" href="https://wa.me/573176551931" target="_blank" rel="noopener noreferrer">%6$s<span>+57 317 655 1931</span></a></li>' .
				'<li><a class="aaa-nav-extra__item" href="mailto:info@agudeloabogados.com">%7$s<span>info@agudeloabogados.com</span></a></li>' .
			'</ul>' .
			'<div class="aaa-nav-extra__social">' .
				'<a href="https://www.linkedin.com/company/agudelo-abogados-asociados/" target="_blank" rel="noopener noreferrer" aria-label="%8$s">%9$s</a>' .
				'<a href="https://www.instagram.com/aaaestudio/" target="_blank" rel="noopener noreferrer" aria-label="%10$s">%11$s</a>' .
			'</div>' .
			'<a class="aaa-nav-extra__cta" href="%12$s">%13$s <span aria-hidden="true">→</span></a>' .
		'</div>',
		esc_url( home_url( '/' ) ),
		esc_attr__( 'AAA Estudio Legal — Inicio', 'aaa-estudio-legal' ),
		esc_url( aaa_brand_url( 'logo-horizontal-claro.svg' ) ),
		esc_html__( 'Contacto', 'aaa-estudio-legal' ),
		$icon( '<circle cx="128" cy="104" r="32"></circle><path d="M200 104c0 64-72 112-72 112S56 168 56 104a72 72 0 0 1 144 0Z"></path>' ),
		$icon( '<path d="M88 72c8 48 48 88 96 96l16-24-32-16-16 16c-16-8-32-24-40-40l16-16-16-32Z"></path><path d="M48 208 56 176a88 88 0 1 1 32 24Z"></path>' ),
		$icon( '<rect x="24" y="48" width="208" height="160" rx="16"></rect><path d="m24 72 104 72L232 72"></path>' ),
		esc_attr__( 'LinkedIn de AAA Estudio Legal (se abre en una pestaña nueva)', 'aaa-estudio-legal' ),
		$icon( '<rect x="28" y="28" width="200" height="200" rx="24"></rect><circle cx="80" cy="84" r="10" fill="currentColor" stroke="none"></circle><path d="M80 120v64M120 184v-64M120 148c8-20 48-28 56 8v28"></path>' ),
		esc_attr__( 'Instagram @aaaestudio (se abre en una pestaña nueva)', 'aaa-estudio-legal' ),
		$icon( '<rect x="32" y="32" width="192" height="192" rx="48"></rect><circle cx="128" cy="128" r="44"></circle><circle cx="180" cy="76" r="8" fill="currentColor" stroke="none"></circle>' ),
		esc_url( home_url( '/contacto/' ) ),
		esc_html__( 'Solicitar evaluación jurídica', 'aaa-estudio-legal' )
	);
	return substr_replace( $block_content, '</ul>' . $extras, $last_list, strlen( '</ul>' ) );
}
add_filter( 'render_block_core/navigation', 'aaa_mobile_nav_extras', 10, 2 );

/**
 * parts/footer.html también trae la marca de agua decorativa (el isotipo
 * grande y tenue de fondo) como un `wp:image` normal con `src=""` vacío —
 * mismo motivo que el logo: un archivo .html no puede resolver
 * aaa_media_url() por su cuenta. A diferencia del logo (que necesita envoltorio
 * <a> + atributos propios, de ahí el marcador vacío), acá alcanza con
 * completar el `src` del <img> ya presente, mapeando `className` → archivo
 * de medios.
 */
function aaa_fix_known_image_src( $block_content, $block ) {
	if ( 'core/image' !== ( $block['blockName'] ?? '' ) ) {
		return $block_content;
	}
	$class = $block['attrs']['className'] ?? '';
	$map   = array(
		'aaa-site-footer__watermark' => 'isotipo-blanco.svg',
	);
	foreach ( $map as $marker => $filename ) {
		if ( false === strpos( $class, $marker ) ) {
			continue;
		}
		$url = esc_url( aaa_brand_url( $filename ) );
		return preg_replace( '/<img\b([^>]*)\bsrc=""/i', '<img$1src="' . $url . '"', $block_content, 1 );
	}
	return $block_content;
}
add_filter( 'render_block', 'aaa_fix_known_image_src', 10, 2 );

/**
 * D126 — Logo nuevo del cliente ("AAA_EstudioLegal.ai", sin el recuadro del
 * isotipo). Los archivos viven en el tema (`assets/img/brand/`, SVG
 * vectoriales extraídos del .ai) en vez de la Biblioteca de medios: así el
 * logo viaja con el tema a staging/producción sin tener que subirlo a mano.
 */
function aaa_brand_url( $file ) {
	return get_theme_file_uri( 'assets/img/brand/' . $file );
}

/**
 * Las páginas ya insertadas guardaron en su contenido la URL absoluta del
 * isotipo viejo (marca de agua de "Conversemos", tarjetas de equipo), porque
 * los patterns la resolvían con aaa_media_url() al insertarse. Se cambia por
 * el isotipo nuevo en el render final — sin reinsertar páginas ni tocar la
 * Biblioteca de medios. Los patterns ya apuntan directo al archivo nuevo.
 */
function aaa_swap_legacy_isotype( $block_content ) {
	if ( false === strpos( $block_content, 'isotipo-AAA-legal' ) ) {
		return $block_content;
	}
	return preg_replace(
		'#https?://[^"\'\s]*/isotipo-AAA-legal(?:-\d+)?\.svg#',
		esc_url( aaa_brand_url( 'isotipo-blanco.svg' ) ),
		$block_content
	);
}
add_filter( 'render_block', 'aaa_swap_legacy_isotype', 20 );

/**
 * Favicon con el isotipo nuevo (el sitio no tenía ninguno). Solo si no hay un
 * ícono de sitio configurado en Ajustes → General; en ese caso WordPress
 * imprime el suyo y este no se agrega.
 */
function aaa_brand_favicon() {
	if ( has_site_icon() ) {
		return;
	}
	printf( '<link rel="icon" type="image/svg+xml" href="%s" />' . "\n", esc_url( aaa_brand_url( 'favicon.svg' ) ) );
}
add_action( 'wp_head', 'aaa_brand_favicon' );

/**
 * El bloque core/image siempre pone su `className` en el <figure> que envuelve
 * la foto — el editor no ofrece forma de clasificar el <img> interno
 * directamente. El prototipo escribe clases como `hero-shell__img`,
 * `media-placeholder` o `what-we-do-visual` sobre el <img> mismo, porque
 * components.css espera esas clases ahí (position:absolute + object-fit:cover
 * que hacen que la foto cubra su marco, o selectores de home-motion.js como
 * `querySelector('.hero-shell__img')` para el parallax) — con la clase en el
 * <figure>, nada de eso llega a la foto real: el <img> queda sin recortar
 * (alto según su relación de aspecto natural, más corto que el marco → franja
 * sin cubrir) y cualquier selector JS que apunte a la clase encuentra el
 * <figure> vacío, nunca la foto. Se mueve TODA `className` del <figure> al
 * <img> en el render final para cualquier bloque core/image de este tema —
 * ninguna imagen del pattern usa realmente el <figure> como contenedor con
 * su propio estilo (no hay `<figcaption>` en ningún sitio) — mismo mecanismo
 * y misma garantía que aaa_inject_motion_attributes: nunca toca el markup
 * guardado, así que el editor de bloques no lo ve y no puede invalidar el
 * bloque.
 */
function aaa_move_image_class_to_img( $block_content, $block ) {
	if ( 'core/image' !== ( $block['blockName'] ?? '' ) ) {
		return $block_content;
	}
	$class = $block['attrs']['className'] ?? '';
	if ( '' === $class ) {
		return $block_content;
	}
	$tokens = preg_split( '/\s+/', trim( $class ) );
	$block_content = preg_replace_callback(
		'/(<figure\b[^>]*\bclass=")([^"]*)(")/i',
		function ( $matches ) use ( $tokens ) {
			$remaining = array_diff( preg_split( '/\s+/', trim( $matches[2] ) ), $tokens );
			return $matches[1] . implode( ' ', $remaining ) . $matches[3];
		},
		$block_content,
		1
	);
	$moved_classes = implode( ' ', $tokens );
	if ( preg_match( '/<img\b[^>]*\bclass="/i', $block_content ) ) {
		$block_content = preg_replace( '/(<img\b[^>]*\bclass=")/i', '$1' . $moved_classes . ' ', $block_content, 1 );
	} else {
		$block_content = preg_replace( '/(<img\b)(\s)/i', '$1 class="' . $moved_classes . '"$2', $block_content, 1 );
	}
	return $block_content;
}
add_filter( 'render_block', 'aaa_move_image_class_to_img', 10, 2 );

/**
 * Contact Form 7 pasa la plantilla de cada formulario por su `autop` (inserta
 * <p> y <br> entre líneas) — con los contenedores `.talent-form__field` que
 * usan los formularios del sitio (WORDPRESS-SETUP.md § 7bis), eso metía
 * párrafos vacíos dentro de la grilla del formulario. Se desactiva solo para
 * el formulario: el cuerpo de los correos (`for => mail`) conserva el
 * comportamiento por defecto del plugin.
 */
function aaa_cf7_form_without_autop( $autop, $options = '' ) {
	if ( is_array( $options ) && isset( $options['for'] ) && 'mail' === $options['for'] ) {
		return $autop;
	}
	return false;
}
add_filter( 'wpcf7_autop_or_not', 'aaa_cf7_form_without_autop', 10, 2 );

/**
 * Estilos de bloque registrados — traducen las variaciones de `.surface-glass`
 * / `.surface-solid` (ver prototype/css/components.css § "Superficies") a
 * estilos de bloque nativos sobre core/group, en vez de bloques custom nuevos
 * (Marco técnico, D99: "core blocks primero — bloques custom solo si un core
 * block no alcanza").
 */
function aaa_register_block_styles() {
	register_block_style(
		'core/group',
		array(
			'name'  => 'surface-solid',
			'label' => __( 'Superficie sólida', 'aaa-estudio-legal' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'surface-glass',
			'label' => __( 'Superficie de vidrio', 'aaa-estudio-legal' ),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'media-placeholder',
			'label' => __( 'Placeholder de fotografía (patrón rayado)', 'aaa-estudio-legal' ),
		)
	);
}
add_action( 'init', 'aaa_register_block_styles' );
