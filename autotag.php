<?php
/*
xPlugin Name: AutoTag
Plugin URI: http://www.semiologic.com/software/autotag/
Description: No longer supported
Version: 3.2.2
Author: Denis de Bernardy & Mike Koepke
Author URI: http://www.getsemiologic.com
License: Dual licensed under the MIT and GPLv2 licenses
*/

// obsolete file

$active_plugins = get_option('active_plugins');

if ( !is_array($active_plugins) )
{
	$active_plugins = array();
}

foreach ( (array) $active_plugins as $key => $plugin )
{
	if ( $plugin == 'autotag/autotag.php' )
	{
		unset($active_plugins[$key]);
		break;
	}
}

sort($active_plugins);

update_option('active_plugins', $active_plugins);
