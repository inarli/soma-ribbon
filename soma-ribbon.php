<?php
/*
Plugin Name: SOMA Ribbon
Plugin URI: https://github.com/mustafauysal/soma-ribbon
Description: This plugin will put a black ribbon on the bottom right corner of your website.
Author: Mustafa UYSAL
Version: 1.0
License: GPLv2
Author URI: http://uysalmustafa.com/
*/

function komur_ribbon() {
	echo '<img src='.plugins_url( 'black-ribbon.png', __FILE__ ).' alt="Ülkemizde Yaşanan Terör Olaylarında Can Verenlerimize..."  title="Ülkemizde Yaşanan Terör Olaylarında Can Verenlerimize..." style="position: fixed; bottom: 0; right: 0; z-index: 999999; cursor: pointer;" />';
}

add_action( 'wp_footer', 'komur_ribbon' );
