new-hsl-wp
==========

Wordpress subtheme of twentyeleven for legacy WP content on new HSL redesign

You'll want to take the new-hsl index.html and put the top half in header.php and the bottom half in footer.php. Header includes everything up until and including the span9 div where the main image would normally be kept, footer everything else.

Sadly theres a few more changes to make. That span9 should probably be a span7 and you'll add in style includes in order to get the wordpress styles from style.css
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

You can then zip the directory, go to http://www.heatsynclabs.org/wp-admin/themes.php, change the theme to something else, delete the old new-hsl-wp theme, upload the new copy, and activate it.
