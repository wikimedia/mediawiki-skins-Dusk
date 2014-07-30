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
 * @date 6 January 2014
 *
 * To install, place the Dusk folder (the folder containing this file!) into
 * skins/ and add this line to your wiki's LocalSettings.php:
 * require_once("$IP/skins/Dusk/Dusk.php");
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not a valid entry point.' );
}

// Skin credits that will show up on Special:Version
$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Dusk',
	'version' => '2.0',
	'author' => array( 'Gregory S. Hayes', 'Becca Wei', 'Jack Phoenix' ),
	'description' => 'Dusk MediaWiki skin, based on WordPress Dusk theme',
	'url' => 'https://www.mediawiki.org/wiki/Skin:Dusk',
);

// The first instance must be strtolower()ed so that useskin=dusk works and
// so that it does *not* force an initial capital (i.e. we do NOT want
// useskin=Dusk) and the second instance is used to determine the name of
// *this* file.
$wgValidSkinNames['dusk'] = 'Dusk';

// Autoload the skin class, make it a valid skin, set up i18n, set up CSS & JS
// (via ResourceLoader)
$wgAutoloadClasses['SkinDusk'] = __DIR__ . '/Dusk.skin.php';
$wgResourceModules['skins.dusk'] = array(
	'styles' => array(
		// MonoBook also loads these
		'skins/common/commonElements.css' => array( 'media' => 'screen' ),
		'skins/common/commonContent.css' => array( 'media' => 'screen' ),
		'skins/common/commonInterface.css' => array( 'media' => 'screen' ),
		// Styles custom to the Dusk skin
		'skins/Dusk/resources/css/main.css' => array( 'media' => 'screen' )
	),
	'position' => 'top'
);

// Theme(s)
$wgResourceModules['skins.dusk.green'] = array(
	'styles' => array(
		'skins/Dusk/resources/themes/green/green.css' => array( 'media' => 'screen' )
	),
	'position' => 'top'
);