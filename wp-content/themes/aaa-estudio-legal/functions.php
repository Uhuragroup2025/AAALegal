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
 * Krub + Libre Caslon Display/Text ya se auto-hospedan vía `file:./assets/fonts/`
 * en theme.json (settings.typography.fontFamilies[].fontFace) — WordPress genera
 * el @font-face automáticamente, no hace falta un <link> a Google Fonts como en
 * el prototipo (README.md § 7 ya señalaba esto como mejora pendiente: elimina la
 * dependencia externa a fonts.googleapis.com). Los .woff2 reales todavía no están
 * en assets/fonts/ — ver WORDPRESS-SETUP.md § Fuentes para dónde conseguirlos.
 */
function aaa_theme_assets() {
	wp_enqueue_style(
		'aaa-components',
		get_theme_file_uri( 'assets/css/components.css' ),
		array(),
		AAA_THEME_VERSION
	);

	wp_enqueue_script(
		'aaa-main',
		get_theme_file_uri( 'assets/js/main.js' ),
		array(),
		AAA_THEME_VERSION,
		array( 'strategy' => 'defer', 'in_footer' => true )
	);
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
