<?php

/**
 * @package Akismet
 */
/*
Plugin Name: Chicago Events Widget Powered By Everyblock 
Plugin URI: http://tirespider.com/
Description: Add a Chicago Events Widget to a post or page.
Version: 1.0
Author: Jeff S
Author URI: http://tirespider.com/
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

function display_events_widget($atts) {
	$code = "<iframe src='http://chicago.everyblock.net/wordpress/neighbor-events' width='300' height='500' frameborder='0' scrolling='no'></iframe>";
	 
	return get_html_for_embed_events(stripslashes($code));
}

function get_html_for_embed_events($embedCode) {
	return '<div class="widget_block">' . stripslashes($embedCode) .'</div>';  
}

add_shortcode('display_events_widget', display_events_widget);
?>
