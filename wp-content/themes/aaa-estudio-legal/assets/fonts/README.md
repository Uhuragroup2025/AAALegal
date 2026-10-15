# Fuentes del sitio (D178)

Krub (400, 500, 600, 700), Libre Caslon Display (400) y Libre Caslon Text (400 itálica),
descargadas de Google Fonts el 2026-10-15, solo el subconjunto latino (cubre el español).
Licencia: SIL Open Font License 1.1 (https://openfontlicense.org); el aviso de copyright
viaja dentro de cada archivo .woff2.

`functions.php` (`aaa_font_faces`) las declara con @font-face. Toma esta carpeta si los
archivos están en el servidor y, si no, la Biblioteca de fuentes de WordPress
(`wp-content/uploads/fonts/` en el staging de Hostinger, donde se subieron porque el editor
de archivos de WordPress no permite subir binarios al tema).
