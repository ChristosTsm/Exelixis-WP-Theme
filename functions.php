<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once dirname( __FILE__ ) . '/includes/remove-understrap-scripts.php';

require_once dirname( __FILE__ ) . '/includes/enqueue-styles.php';

require_once dirname( __FILE__ ) . '/includes/custom-post-types.php';

require_once dirname( __FILE__ ) . '/includes/navigation-menus.php';

require_once dirname( __FILE__ ) . '/includes/text-domain.php';

require_once dirname( __FILE__ ) . '/includes/custom-excerpt.php';
