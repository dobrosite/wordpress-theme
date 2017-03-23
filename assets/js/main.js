/**
 * Главный файл клиентских скриптов темы оформления.
 *
 * @copyright  2017, Добро.сайт, http://добро.сайт/
 * @license http://opensource.org/licenses/MIT MIT
 */
jQuery( function( $ ) {
	'use strict';

	var $document = $( document );
	var $site      = $( '.site' );

	$document.scroll( function() {
		if ( $document.scrollTop() > 0 ) {
			$site.addClass( 'site_scrolled' );
		} else {
			$site.removeClass( 'site_scrolled' );
		}
	} )
} );
