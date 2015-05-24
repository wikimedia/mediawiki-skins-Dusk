<?php
/**
 * Dusk MediaWiki skin by Gregory S. Hayes
 * Based on WordPress "Dusk" theme by Becca Wei
 *
 * @file
 * @ingroup Skins
 * @author Gregory S. Hayes -- original MediaWiki skin
 * @author Becca Wei (http://beccary.com/) -- WordPress Dusk theme
 * @author Jack Phoenix <jack@countervandalism.net> -- updates & modernization
 * @date 30 November 2014
 *
 * To install, place the Dusk folder (the folder containing this file!) into
 * skins/ and add this line to your wiki's LocalSettings.php:
 * wfLoadSkin( 'Dusk' );
 */

if ( function_exists( 'wfLoadSkin' ) ) {
	wfLoadSkin( 'Dusk' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Dusk'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for Dusk skin. Please use wfLoadSkin instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the Dusk skin requires MediaWiki 1.25+' );
}
