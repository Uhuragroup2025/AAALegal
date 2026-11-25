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

	// El editor usa el mismo CSS de front-end. editor.css solo suple, para el
	// editor, la maqueta de las secciones que en el front dependen de la clase
	// `.home-page` del <body>, que en el editor no existe (D190).
	add_editor_style( array( 'assets/css/components.css', 'assets/css/editor.css' ) );
}
add_action( 'after_setup_theme', 'aaa_theme_setup' );

/**
 * D178 — Fuentes propias (backlog SEO T10): ya no se piden a Google Fonts
 * (petición externa que bloqueaba el render y enviaba la IP del visitante a
 * Google). Son los mismos .woff2 de Google, solo el subconjunto latino
 * (español completo), con licencia SIL OFL. theme.json sigue declarando
 * solo las familias; las @font-face salen de aquí.
 *
 * Los archivos se buscan primero en `assets/fonts/` del tema (repo y
 * entornos locales) y, si no están, en la Biblioteca de fuentes de WordPress
 * (`wp-content/fonts/`), que es donde se subieron en el staging: el editor de
 * archivos de WordPress no permite subir binarios al tema.
 */
function aaa_font_faces() {
	static $faces = null;
	if ( null !== $faces ) {
		return $faces;
	}
	$fonts   = array(
		array( 'Krub', 'normal', 400, 'krub-400-latin.woff2', true ),
		array( 'Krub', 'normal', 500, 'krub-500-latin.woff2', false ),
		array( 'Krub', 'normal', 600, 'krub-600-latin.woff2', false ),
		array( 'Krub', 'normal', 700, 'krub-700-latin.woff2', false ),
		array( 'Libre Caslon Display', 'normal', 400, 'libre-caslon-display-400-latin.woff2', true ),
		array( 'Libre Caslon Text', 'italic', 400, 'libre-caslon-text-400-italic-latin.woff2', true ),
	);
	$library = function_exists( 'wp_get_font_dir' ) ? wp_get_font_dir() : null;
	$faces   = array();
	foreach ( $fonts as $font ) {
		if ( file_exists( get_theme_file_path( 'assets/fonts/' . $font[3] ) ) ) {
			$url = get_theme_file_uri( 'assets/fonts/' . $font[3] );
		} elseif ( $library && file_exists( trailingslashit( $library['path'] ) . $font[3] ) ) {
			$url = trailingslashit( $library['url'] ) . $font[3];
		} else {
			continue;
		}
		$faces[] = array(
			'family'  => $font[0],
			'style'   => $font[1],
			'weight'  => $font[2],
			'url'     => $url,
			'preload' => $font[4],
		);
	}
	return $faces;
}

function aaa_font_face_css() {
	$range = 'U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD';
	$css   = '';
	foreach ( aaa_font_faces() as $face ) {
		$css .= sprintf(
			"@font-face{font-family:'%s';font-style:%s;font-weight:%d;font-display:swap;src:url('%s') format('woff2');unicode-range:%s;}",
			$face['family'],
			$face['style'],
			$face['weight'],
			esc_url( $face['url'] ),
			$range
		);
	}
	return $css;
}

/**
 * Las tres fuentes del primer pantallazo (cuerpo, título y su itálica) se
 * precargan; el resto se pide cuando el CSS las usa.
 */
function aaa_print_fonts() {
	foreach ( aaa_font_faces() as $face ) {
		if ( $face['preload'] ) {
			printf( '<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin />' . "\n", esc_url( $face['url'] ) );
		}
	}
	$css = aaa_font_face_css();
	if ( $css ) {
		echo '<style id="aaa-fonts">' . $css . "</style>\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- CSS armado arriba con URLs escapadas.
	}
}
add_action( 'wp_head', 'aaa_print_fonts', 2 );

// Las mismas fuentes dentro del editor de bloques (su vista va en un iframe).
function aaa_editor_fonts( $settings ) {
	$css = aaa_font_face_css();
	if ( $css ) {
		$settings['styles'][] = array( 'css' => $css );
	}
	return $settings;
}
add_filter( 'block_editor_settings_all', 'aaa_editor_fonts' );

/**
 * Encolado del CSS de componentes y los scripts.
 */
function aaa_theme_assets() {
	wp_enqueue_style(
		'aaa-components',
		get_theme_file_uri( 'assets/css/components.css' ),
		array(),
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
			array( 'in_footer' => true, 'strategy' => 'defer' )
		);
		wp_enqueue_script(
			'aaa-gsap-scrolltrigger',
			get_theme_file_uri( 'assets/js/gsap/ScrollTrigger-3.15.0.min.js' ),
			array( 'aaa-gsap' ),
			'3.15.0',
			array( 'in_footer' => true, 'strategy' => 'defer' )
		);
		wp_enqueue_script(
			'aaa-home-motion',
			get_theme_file_uri( 'assets/js/home-motion.js' ),
			array( 'aaa-gsap', 'aaa-gsap-scrolltrigger' ),
			aaa_asset_version( 'assets/js/home-motion.js' ),
			array( 'in_footer' => true, 'strategy' => 'defer' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'aaa_theme_assets' );

/**
 * D183 — Contact Form 7 carga sus scripts y estilos en todas las páginas; solo
 * Contacto y Trabaja con nosotros tienen formulario. En las demás se omiten
 * (PageSpeed móvil: menos archivos antes de mostrar la portada).
 */
function aaa_cf7_only_with_form() {
	if ( ! is_singular() ) {
		return false;
	}
	$content = (string) get_post_field( 'post_content', get_queried_object_id() );
	return has_shortcode( $content, 'contact-form-7' ) || false !== strpos( $content, 'wp:contact-form-7/' );
}
add_filter( 'wpcf7_load_js', 'aaa_cf7_only_with_form' );
add_filter( 'wpcf7_load_css', 'aaa_cf7_only_with_form' );

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
	// D171: si el título se cambió en la Biblioteca (p. ej. "Equipo de
	// negociaciones"), se busca por el nombre real del archivo subido.
	if ( ! $attachment_id ) {
		$attachment_id = $wpdb->get_var(
			$wpdb->prepare(
				"SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key = '_wp_attached_file' AND ( meta_value = %s OR meta_value LIKE %s ) LIMIT 1",
				$filename,
				'%/' . $wpdb->esc_like( $filename )
			)
		);
	}
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
		// D170: las cifras de "En cifras" ya no van aquí; home-motion.js las lee
		// del texto de cada `.stat-card__number`, así el cliente las cambia en el editor.
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
			'<span class="brand__mark" aria-hidden="true"><img class="brand__isotype" src="%3$s" alt="" width="676" height="425" /></span>' .
			'<span class="brand__wordmark" aria-hidden="true"><img class="brand__wordmark-light" src="%4$s" alt="" width="623" height="389" /></span>' .
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
 * D175 — Preloader de entrada: el logo completo del encabezado (isotipo +
 * "Estudio Legal") sobre azul, en menos de un segundo y solo en la primera
 * página de cada sesión. Es estético: no espera a que cargue nada (la página
 * carga debajo) y toda la animación es CSS (components.css § D175).
 *
 * Este script, lo primero del <head>, decide si se muestra: marca <html> con
 * `aaa-preloading` solo si es la primera página de la sesión y el usuario no
 * pidió movimiento reducido. Sin JS nunca aparece (el marcado lleva `hidden`).
 */
function aaa_preloader_flag() {
	echo "<script>(function(){try{if(sessionStorage.getItem('aaa-intro')||window.matchMedia('(prefers-reduced-motion: reduce)').matches)return;sessionStorage.setItem('aaa-intro','1');document.documentElement.classList.add('aaa-preloading');}catch(e){}})();</script>\n";
}
add_action( 'wp_head', 'aaa_preloader_flag', 1 );

/**
 * Marcado del preloader. El isotipo va en línea (no como <img>) para animar
 * cada A por separado, con los trazos del propio isotipo.svg: la A izquierda
 * son sus trazos 2 y 3, y las otras dos comparten el trazo 1. Los polígonos
 * (coordenadas del viewBox del archivo) separan esas dos por los huecos donde
 * una pierna pasa sobre la otra; la tercera A es el resto (máscara inversa).
 * Si el archivo cambia de estructura, el isotipo entra completo de una vez.
 */
function aaa_preloader_markup() {
	$svg = file_get_contents( get_theme_file_path( 'assets/img/brand/isotipo.svg' ) );
	if ( ! $svg || ! preg_match( '/viewBox="([^"]+)"/', $svg, $view ) || ! preg_match_all( '/<path[^>]*\sd="([^"]+)"/', $svg, $paths ) ) {
		return;
	}
	$fill = preg_match( '/fill="(#[0-9A-Fa-f]{3,6})"/', $svg, $color ) ? $color[1] : '#DCA97E';
	$d    = array_map( 'esc_attr', $paths[1] );

	if ( 3 === count( $d ) ) {
		$middle_a   = '1250,200 1585.7,200 1460,560 1397,625 1397,660 1250,660';
		$middle_leg = '1531,660 1531,540 1541.3,490 1560,440 1600,440 1650,583 1660,625 1660,660';
		$mark = sprintf(
			'<defs><clipPath id="aaa-preloader-a2"><polygon points="%1$s"/><polygon points="%2$s"/></clipPath>' .
			'<mask id="aaa-preloader-a3" maskUnits="userSpaceOnUse" x="1100" y="150" width="750" height="550"><rect x="1100" y="150" width="750" height="550" fill="#fff"/><polygon points="%1$s" fill="#000"/><polygon points="%2$s" fill="#000"/></mask></defs>' .
			'<g class="aaa-preloader__a aaa-preloader__a--1"><path d="%3$s"/><path d="%4$s"/></g>' .
			'<g class="aaa-preloader__a aaa-preloader__a--2"><path clip-path="url(#aaa-preloader-a2)" d="%5$s"/></g>' .
			'<g class="aaa-preloader__a aaa-preloader__a--3"><path mask="url(#aaa-preloader-a3)" d="%5$s"/></g>',
			$middle_a,
			$middle_leg,
			$d[1],
			$d[2],
			$d[0]
		);
	} else {
		$mark = '<g class="aaa-preloader__a aaa-preloader__a--1"><path d="' . implode( '"/><path d="', $d ) . '"/></g>';
	}

	printf(
		'<div class="aaa-preloader" aria-hidden="true" hidden><div class="aaa-preloader__logo">' .
			'<svg class="aaa-preloader__mark" viewBox="%1$s" width="676" height="425" fill="%2$s" focusable="false">%3$s</svg>' .
			'<img class="aaa-preloader__wordmark" src="%4$s" alt="" width="623" height="389" />' .
		'</div></div>' . "\n",
		esc_attr( $view[1] ),
		esc_attr( $fill ),
		$mark,
		esc_url( aaa_brand_url( 'wordmark-blanco.svg' ) )
	);
}
add_action( 'wp_body_open', 'aaa_preloader_markup' );

/**
 * D177 — Schema de las páginas (backlog SEO T05 y N10). Rank Math marca cada
 * página como "Article" con un autor, como si fuera una entrada del blog; si
 * se cambia el tipo por defecto a "Ninguno", deja Metodología y Trabaja sin
 * ningún schema, ni siquiera la ficha de la firma. Por eso se conserva su
 * salida y aquí, solo en páginas:
 * - se quitan Article y Person (autor);
 * - Metodología suma un Service por cada tarjeta de área (`.service-card--editorial`);
 * - toda página con preguntas frecuentes (bloques Detalles dentro de un grupo
 *   `.aaa-faq`) suma su FAQPage, leída del contenido: lo que se edite en la
 *   página queda en el schema sin tocar código.
 */
function aaa_page_schema_parts( $blocks, &$faq, &$services, $in_faq = false, $in_service = false ) {
	foreach ( $blocks as $block ) {
		// D178: un bloque oculto desde el editor ("Ocultar") no entra al schema.
		if ( false === ( $block['attrs']['metadata']['blockVisibility'] ?? true ) ) {
			continue;
		}
		$class      = $block['attrs']['className'] ?? '';
		$block_faq  = $in_faq || false !== strpos( $class, 'aaa-faq' );
		$block_serv = $in_service || false !== strpos( $class, 'service-card--editorial' );
		$name       = $block['blockName'] ?? '';
		if ( $block_faq && 'core/details' === $name ) {
			$question = preg_match( '#<summary[^>]*>(.*?)</summary>#s', $block['innerHTML'], $match ) ? $match[1] : '';
			$answer   = implode( ' ', array_map( 'render_block', $block['innerBlocks'] ) );
			$question = trim( html_entity_decode( wp_strip_all_tags( $question ), ENT_QUOTES, 'UTF-8' ) );
			$answer   = trim( preg_replace( '/\s+/', ' ', html_entity_decode( wp_strip_all_tags( $answer ), ENT_QUOTES, 'UTF-8' ) ) );
			if ( $question && $answer ) {
				$faq[] = array(
					'@type'          => 'Question',
					'name'           => $question,
					'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $answer ),
				);
			}
			continue;
		}
		if ( $block_serv && 'core/heading' === $name ) {
			$services[] = trim( html_entity_decode( wp_strip_all_tags( $block['innerHTML'] ), ENT_QUOTES, 'UTF-8' ) );
			continue;
		}
		if ( ! empty( $block['innerBlocks'] ) ) {
			aaa_page_schema_parts( $block['innerBlocks'], $faq, $services, $block_faq, $block_serv );
		}
	}
}

function aaa_schema_pages( $data ) {
	if ( ! is_page() ) {
		return $data;
	}
	foreach ( $data as $key => $entity ) {
		$types = (array) ( $entity['@type'] ?? array() );
		if ( array_intersect( $types, array( 'Article', 'BlogPosting', 'NewsArticle', 'Person' ) ) ) {
			unset( $data[ $key ] );
		} elseif ( is_array( $entity ) && isset( $entity['author'] ) ) {
			unset( $data[ $key ]['author'] );
		}
	}

	$post     = get_post();
	$url      = get_permalink( $post );
	$faq      = array();
	$services = array();
	aaa_page_schema_parts( parse_blocks( $post->post_content ), $faq, $services );

	foreach ( array_values( array_unique( array_filter( $services ) ) ) as $index => $service ) {
		$data[ 'aaaService' . $index ] = array(
			'@type'       => 'Service',
			'@id'         => $url . '#servicio-' . ( $index + 1 ),
			'name'        => $service,
			'serviceType' => $service,
			'url'         => $url,
			'provider'    => array( '@id' => home_url( '/#organization' ) ),
			'areaServed'  => array( '@type' => 'Country', 'name' => 'Colombia' ),
		);
	}
	if ( $faq ) {
		$data['aaaFAQPage'] = array(
			'@type'      => 'FAQPage',
			'@id'        => $url . '#preguntas-frecuentes',
			'mainEntity' => $faq,
		);
	}
	return $data;
}
add_filter( 'rank_math/json_ld', 'aaa_schema_pages', 999 );

/**
 * D177 — /llms.txt con el texto entregado por Nayeliz (backlog N13/T16). Lo
 * sirve el tema y no el módulo de Rank Math, que arma su propio encabezado y
 * toma descripciones automáticas. Los enlaces salen de home_url(), así que al
 * migrar al dominio final apuntan solos a él. Si cambia el slug de una página,
 * se actualiza aquí.
 */
function aaa_llms_txt() {
	$path = trim( (string) wp_parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );
	if ( 'llms.txt' !== $path ) {
		return;
	}
	$lines = array(
		'# AAA Estudio Legal - Insolvencia, recuperación de cartera y asesoría corporativa, bajo un mismo método.',
		'',
		'> AAA Estudio Legal es una firma colombiana especializada en la protección del crédito y la defensa del acreedor. Integra criterio jurídico, gestión operativa y tecnología para atender asuntos en derecho concursal, insolvencia, recuperación de cartera y garantías, litigios corporativos y gestión del riesgo legal y comercial en organizaciones.',
		'',
		'## Páginas clave del sitio web',
		'',
		'- [Página de inicio](' . home_url( '/' ) . '): Responde a la presentación general de la firma, la metodología integradora y la visión global de servicios de protección del crédito.',
		'- [Soluciones y metodología](' . home_url( '/metodologia/' ) . '): Responde a los detalles técnicos de las áreas de práctica: derecho concursal, recuperación de cartera y garantías, asesoría corporativa y litigios.',
		'- [Equipo / Quiénes somos](' . home_url( '/quienes-somos/' ) . '): Responde a la trayectoria, origen y especialización, equipos, filosofía.',
		'- [Contacto](' . home_url( '/contacto/' ) . '): Responde a la página de contacto, canales directos de atención y formulario de solicitud evaluación jurídica.',
	);
	status_header( 200 );
	header( 'Content-Type: text/plain; charset=utf-8' );
	echo implode( "\n", $lines ) . "\n"; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- texto plano fijo.
	exit;
}
add_action( 'init', 'aaa_llms_txt', 0 );

/**
 * D177 — El sitio anterior (agudeloabogados.com) era de una sola página con
 * anclas. Los fragmentos (#…) no llegan al servidor, así que no admiten una
 * redirección 301: este script, lo primero del <head> de Inicio, lleva cada
 * ancla vieja a su página nueva antes de pintar nada (documento de SEO de
 * Nayeliz). #nuestrosclientes se queda en Inicio.
 */
function aaa_legacy_hash_redirect() {
	if ( ! is_front_page() ) {
		return;
	}
	$map = array(
		'lafirma'       => home_url( '/quienes-somos/' ),
		'equipo'        => home_url( '/quienes-somos/' ),
		'comolohacemos' => home_url( '/metodologia/' ),
		'contacto'      => home_url( '/contacto/' ),
	);
	printf(
		"<script>(function(m){var h=window.location.hash.slice(1).toLowerCase();if(h&&m[h])window.location.replace(m[h]);})(%s);</script>\n",
		wp_json_encode( $map )
	);
}
add_action( 'wp_head', 'aaa_legacy_hash_redirect', 0 );

/**
 * D183 — Ancho y alto en las imágenes del tema (backlog SEO T09). WordPress
 * solo los agrega a las imágenes de la Biblioteca de medios; las que vienen
 * del tema (portadas, fotos de los patterns) salían sin ellos, lo que provoca
 * saltos de diseño (CLS) y le impedía a WordPress reconocer la foto de
 * portada como la imagen principal: le daba prioridad de carga a otra. Aquí
 * se leen las medidas del archivo y, en la foto de portada (`hero-shell__img`),
 * se pide carga prioritaria y sin diferir.
 * Además (PageSpeed móvil): las fotos de la Biblioteca salían sin `srcset`, así
 * que el móvil bajaba el archivo de 1800 px para mostrarlo a ~700; se agregan
 * sus tamaños intermedios. Y desde la segunda foto de la página, las que no
 * tienen `loading` se difieren, para no competir con la portada.
 */
function aaa_image_dimensions( $block_content, $block ) {
	if ( 'core/image' !== ( $block['blockName'] ?? '' ) || false === strpos( $block_content, '<img' ) ) {
		return $block_content;
	}
	static $cache = array();
	static $seen  = 0;
	++$seen;
	$is_hero  = false !== strpos( $block['attrs']['className'] ?? '', 'hero-shell__img' );
	$is_first = 1 === $seen;
	return preg_replace_callback(
		'/<img\b[^>]*>/',
		function ( $match ) use ( &$cache, $is_hero, $is_first ) {
			$img = $match[0];
			if ( ! $is_hero && ! $is_first && false === strpos( $img, ' loading=' ) ) {
				$img = str_replace( '<img ', '<img loading="lazy" ', $img );
			}
			// D191: si la foto se cambió desde el editor (lleva `wp-image-ID`),
			// WordPress le pone después su propio srcset con `sizes` según el
			// tamaño del bloque (1024px máx.) y la portada salía borrosa en
			// pantallas grandes. La portada siempre ocupa la pantalla: se
			// adelanta aquí con 100vw y WordPress ya no la toca.
			$wp_id = preg_match( '/\bwp-image-(\d+)/', $img, $wp_match ) ? (int) $wp_match[1] : 0;
			if ( false === strpos( $img, ' srcset=' ) && ( ! $wp_id || $is_hero ) && preg_match( '/\ssrc="([^"]+)"/', $img, $src ) ) {
				$id = $wp_id ? $wp_id : attachment_url_to_postid( strtok( $src[1], '?' ) );
				$srcset = $id ? wp_get_attachment_image_srcset( $id, 'full' ) : false;
				if ( $srcset ) {
					$sizes = $is_hero ? '100vw' : '(max-width: 1023px) 100vw, 60vw';
					$img   = str_replace( '<img ', sprintf( '<img srcset="%s" sizes="%s" ', esc_attr( $srcset ), esc_attr( $sizes ) ), $img );
				}
			}
			if ( ! preg_match( '/\swidth="/', $img ) && preg_match( '/\ssrc="([^"]+)"/', $img, $src ) ) {
				$url  = strtok( $src[1], '?' );
				$path = '';
				$up   = wp_upload_dir();
				if ( 0 === strpos( $url, get_theme_file_uri() ) ) {
					$path = get_theme_file_path( substr( $url, strlen( get_theme_file_uri() ) ) );
				} elseif ( 0 === strpos( $url, $up['baseurl'] ) ) {
					$path = $up['basedir'] . substr( $url, strlen( $up['baseurl'] ) );
				}
				if ( $path && ! isset( $cache[ $path ] ) ) {
					$size           = file_exists( $path ) ? wp_getimagesize( $path ) : false;
					$cache[ $path ] = $size ? array( (int) $size[0], (int) $size[1] ) : false;
				}
				if ( $path && $cache[ $path ] ) {
					$img = str_replace( '<img ', sprintf( '<img width="%d" height="%d" ', $cache[ $path ][0], $cache[ $path ][1] ), $img );
				}
			}
			if ( $is_hero && false === strpos( $img, 'fetchpriority=' ) ) {
				$img = str_replace( '<img ', '<img fetchpriority="high" loading="eager" decoding="async" ', $img );
			}
			return $img;
		},
		$block_content
	);
}
add_filter( 'render_block', 'aaa_image_dimensions', 5, 2 );

/**
 * D183 — robots.txt (backlog SEO T15). Solo lo usa WordPress cuando no hay un
 * archivo robots.txt físico (el staging de Hostinger tiene uno propio para el
 * dominio temporal). Con el sitio en "disuadir a los motores" se respeta lo
 * que pone WordPress (todo bloqueado). En el sitio público:
 * - permite a todos, salvo el escritorio de WordPress;
 * - permite de forma explícita a los buscadores con IA que citan fuentes
 *   (ChatGPT Search, Perplexity, Claude, Copilot/Bing);
 * - los rastreadores de entrenamiento (GPTBot, ClaudeBot, Google-Extended,
 *   CCBot) quedan permitidos por la regla general hasta que el cliente decida
 *   (decisión 5 del backlog); para bloquearlos, se agregan aquí;
 * - declara el sitemap de Rank Math.
 * Reemplaza lo que se edite en Rank Math → Editar robots.txt.
 */
function aaa_robots_txt( $output, $public ) {
	if ( ! $public ) {
		return $output;
	}
	$lines = array(
		'User-agent: *',
		'Disallow: /wp-admin/',
		'Allow: /wp-admin/admin-ajax.php',
		'',
		'# Buscadores con IA que citan fuentes',
		'User-agent: OAI-SearchBot',
		'User-agent: ChatGPT-User',
		'User-agent: PerplexityBot',
		'User-agent: Perplexity-User',
		'User-agent: Claude-SearchBot',
		'User-agent: Claude-User',
		'User-agent: bingbot',
		'Allow: /',
		'Disallow: /wp-admin/',
		'',
		'Sitemap: ' . home_url( '/sitemap_index.xml' ),
	);
	return implode( "\n", $lines ) . "\n";
}
add_filter( 'robots_txt', 'aaa_robots_txt', 99, 2 );

/**
 * D183 — Analítica con consentimiento (backlog T14, D20: GTM + GA4 + Clarity
 * vía GTM, sin plugin). Google Consent Mode v2 arranca en "denegado" para la
 * analítica y la publicidad; el aviso de cookies (pie de página + main.js)
 * guarda la elección del visitante y la actualiza. Google Tag Manager solo se
 * carga si hay un ID en Ajustes → Generales → "ID de Google Tag Manager":
 * mientras esté vacío, el sitio no hace ninguna petición a Google.
 * La elección se recuerda en el navegador (`aaa-cookie-ack`: granted/denied;
 * el valor antiguo "1" cuenta como aceptado).
 */
function aaa_consent_and_gtm() {
	$gtm = trim( (string) get_option( 'aaa_gtm_id', '' ) );
	echo "<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}(function(){var c=null;try{c=localStorage.getItem('aaa-cookie-ack');}catch(e){}var g=(c==='granted'||c==='1')?'granted':'denied';gtag('consent','default',{ad_storage:'denied',ad_user_data:'denied',ad_personalization:'denied',analytics_storage:g,functionality_storage:'granted',security_storage:'granted',wait_for_update:500});})();</script>\n";
	if ( preg_match( '/^GTM-[A-Z0-9]{4,12}$/', $gtm ) ) {
		printf(
			"<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','%s');</script>\n",
			esc_js( $gtm )
		);
	}
}
add_action( 'wp_head', 'aaa_consent_and_gtm', 1 );

function aaa_register_gtm_setting() {
	register_setting(
		'general',
		'aaa_gtm_id',
		array(
			'type'              => 'string',
			'sanitize_callback' => function ( $value ) {
				$value = strtoupper( trim( (string) $value ) );
				return preg_match( '/^GTM-[A-Z0-9]{4,12}$/', $value ) ? $value : '';
			},
			'default'           => '',
		)
	);
	add_settings_field(
		'aaa_gtm_id',
		__( 'ID de Google Tag Manager', 'aaa-estudio-legal' ),
		function () {
			printf(
				'<input name="aaa_gtm_id" id="aaa_gtm_id" type="text" class="regular-text" value="%s" placeholder="GTM-XXXXXXX" /><p class="description">%s</p>',
				esc_attr( get_option( 'aaa_gtm_id', '' ) ),
				esc_html__( 'Se carga solo si el visitante acepta las cookies (Consent Mode v2). Déjelo vacío para no cargar analítica.', 'aaa-estudio-legal' )
			);
		},
		'general'
	);
}
add_action( 'admin_init', 'aaa_register_gtm_setting' );

/**
 * D178 — Caché (LiteSpeed Cache). El CDN de Hostinger guarda el HTML que
 * LiteSpeed marca como cacheable, pero solo se vacía con "Purgar todo": la
 * purga por página que LiteSpeed hace al guardar no le llega, y el CDN
 * seguiría sirviendo la versión vieja. Como el sitio tiene pocas páginas, cada
 * guardado de contenido (páginas, entradas, plantillas, menús, estilos,
 * formularios) y cada cambio de metadatos SEO de Rank Math vacía todo.
 * Sin el plugin activo, la acción no hace nada.
 */
function aaa_purge_all_cache( $post_id = 0 ) {
	static $done = false;
	if ( $done ) {
		return;
	}
	if ( $post_id && ( wp_is_post_revision( $post_id ) || wp_is_post_autosave( $post_id ) || 'attachment' === get_post_type( $post_id ) ) ) {
		return;
	}
	$done = true;
	do_action( 'litespeed_purge_all' );
}
add_action( 'save_post', 'aaa_purge_all_cache', 99 );

function aaa_purge_on_seo_meta( $meta_id, $post_id, $meta_key ) {
	if ( 0 === strpos( (string) $meta_key, 'rank_math_' ) ) {
		aaa_purge_all_cache( $post_id );
	}
}
add_action( 'added_post_meta', 'aaa_purge_on_seo_meta', 10, 3 );
add_action( 'updated_post_meta', 'aaa_purge_on_seo_meta', 10, 3 );

/**
 * D186 — En el servidor del cliente (CloudPanel) el HTML lo guarda Varnish, no
 * LiteSpeed. "Purgar todo" de LiteSpeed borra sus CSS/JS minificados y genera
 * otros con otro nombre, pero Varnish seguía sirviendo páginas que pedían los
 * archivos borrados (404): el sitio se veía sin estilos. Cada vez que LiteSpeed
 * vacía todo o sus CSS/JS, se vacía también Varnish. Sin el plugin CLP Varnish
 * Cache activo (staging de Hostinger) no hace nada. El plugin solo carga sus
 * clases dentro del admin, así que fuera de él se carga aquí.
 */
function aaa_purge_varnish() {
	static $done = false;
	$plugin = 'clp-varnish-cache/clp-varnish-cache.php';
	$file   = WP_PLUGIN_DIR . '/clp-varnish-cache/class.varnish-cache-manager.php';
	if ( $done || ! in_array( $plugin, (array) get_option( 'active_plugins', array() ), true ) ) {
		return;
	}
	if ( ! class_exists( 'ClpVarnishCacheManager' ) && file_exists( $file ) ) {
		require_once $file;
	}
	if ( ! class_exists( 'ClpVarnishCacheManager' ) ) {
		return;
	}
	$manager = new ClpVarnishCacheManager();
	if ( ! $manager->is_enabled() ) {
		return;
	}
	$done = true;
	$manager->purge_host( (string) wp_parse_url( home_url(), PHP_URL_HOST ) );
	$prefix = $manager->get_cache_tag_prefix();
	if ( $prefix ) {
		$manager->purge_tag( $prefix );
	}
}
add_action( 'litespeed_purged_all', 'aaa_purge_varnish' );
add_action( 'litespeed_purged_all_cssjs', 'aaa_purge_varnish' );

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

/**
 * D149 — Fase 0 del backlog SEO: el endpoint público de usuarios
 * (/wp-json/wp/v2/users) exponía el nombre de usuario del administrador.
 * Solo se oculta a visitantes sin sesión; el editor de bloques y wp-admin
 * lo siguen usando con normalidad.
 */
function aaa_hide_users_endpoint( $endpoints ) {
	if ( is_user_logged_in() ) {
		return $endpoints;
	}
	unset( $endpoints['/wp/v2/users'], $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
	return $endpoints;
}
add_filter( 'rest_endpoints', 'aaa_hide_users_endpoint' );

/**
 * D157 (reemplaza D156) — Logo en los títulos donde dice "AAA".
 * Pedido de Julián en la reunión del 2026-10-02 ("cada vez que se hable de
 * triple A, pongan el logo"), ajustado por Oscar: en los títulos va el logo;
 * en párrafos y textos pequeños se deja el nombre escrito, "AAA Estudio
 * Legal". Desde D159 (documento del cliente del 2026-10-12) el logo es solo
 * el de las tres A, sin "Estudio Legal". Se hace al mostrar la página: en el
 * editor y en el HTML el título sigue diciendo "AAA Estudio Legal" (oculto a
 * la vista, así lo leen los lectores de pantalla y los buscadores) y el logo
 * se dibuja con CSS (.aaa-logo-inline, components.css). Solo toca texto entre
 * etiquetas, nunca atributos.
 */
function aaa_logo_in_headings( $block_content, $block ) {
	$name = $block['blockName'] ?? '';
	// D174: también los eyebrows ("Talento AAA"), que son título de sección.
	$is_eyebrow = 'core/paragraph' === $name && false !== strpos( $block['attrs']['className'] ?? '', 'aaa-eyebrow' );
	if ( ( 'core/heading' !== $name && ! $is_eyebrow ) || false === strpos( $block_content, 'AAA' ) ) {
		return $block_content;
	}
	$mark = '<span class="aaa-logo-inline"><span class="aaa-logo-inline__text">AAA Estudio Legal</span></span>';
	return preg_replace_callback(
		'/>([^<]*)</',
		function ( $matches ) use ( $mark ) {
			return '>' . preg_replace( '/\bAAA(?:\s+Estudio\s+Legal)?\b/', $mark, $matches[1] ) . '<';
		},
		$block_content
	);
}
add_filter( 'render_block', 'aaa_logo_in_headings', 30, 2 );
