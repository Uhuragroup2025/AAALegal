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
		AAA_THEME_VERSION
	);

	wp_enqueue_script(
		'aaa-main',
		get_theme_file_uri( 'assets/js/main.js' ),
		array(),
		AAA_THEME_VERSION,
		array( 'strategy' => 'defer', 'in_footer' => true )
	);

	// Motion editorial (GSAP + ScrollTrigger + home-motion.js) — Decisión D112
	// autoriza esta única excepción a "sin dependencias nuevas". En el prototipo
	// carga en 5 páginas (Home, Metodología, Quiénes somos, Trabaja con nosotros,
	// Contacto), no solo en Home — aquí se encola en portada + en cualquier página
	// que use la plantilla `page-motion.html` (ver templates/page-motion.html).
	$is_motion_page = is_front_page() || is_page_template( 'templates/page-motion.html' );
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
			AAA_THEME_VERSION,
			array( 'in_footer' => true )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'aaa_theme_assets' );

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
