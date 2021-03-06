<?php
/**
 * Initialisation file for the BootStrapSkin
 *
 * BootStrapSkin is a skin built on top of a modified Vector theme from
 * MediaWiki and utilises Bootstrap 3.3.2 for base layout,
 * typography, and additional widgets.
 * 
 * @file
 * @ingroup Skins
 * @authors Lee Miller
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );
 
$wgExtensionCredits['skin'][] = array(
        'path' => __FILE__,
        'name' => 'BootStrapSkin',
        'url' => "http://www.mediawikibootstrapskin.co.uk/",
        'author' => 'Lee Miller and [http://www.vanhamel.nl/wiki/Main_page Dennis Groenewegen]',
        'descriptionmsg' => 'bootstrapskin-desc',
		'version' => '1.0.45',
);

$wgValidSkinNames['bootstrapskin'] = 'Bootstrap';
$wgAutoloadClasses['SkinBootstrap'] = dirname(__FILE__).'/Bootstrapskin.skin.php';
$wgExtensionMessagesFiles['SkinBootstrap'] = dirname(__FILE__).'/Bootstrapskin.i18n.php';
 
$wgResourceModules['skins.bootstrapskin'] = array(
        'styles' => array(
                'bootstrap/bootstrap/css/menu.css' => array( 'media' => 'screen' ),
                'bootstrap/bootstrap/css/menu-blue.css' => array( 'media' => 'screen' ),
		'bootstrap/bootstrap/css/bootstrap.css' => array( 'media' => 'screen' ),
		'bootstrap/bootstrap/css/bootstrap.css.map' => array( 'media' => 'screen' ),
                'bootstrap/screen.css' => array( 'media' => 'screen' ),
                'bootstrap/theme.css' => array( 'media' => 'screen' ),
		'bootstrap/bootstrap/css/docs.css' => array( 'media' => 'screen' ),
                'bootstrap/bootstrap/awesome/css/font-awesome.css' => array( 'media' => 'screen' ),				
	),

	'scripts' => array(
	    'bootstrap/bootstrap/js/jquery.js',
            'bootstrap/bootstrap/js/bootstrap.js',
	    'bootstrap/skin.js',
	),	
        'remoteBasePath' => &$GLOBALS['wgStylePath'],
        'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);

# Default options to customise skin

$wgBootstrapSkinLogoLocation = 'bodycontent';
$wgBootstrapSkinLoginLocation = 'footer';
$wgBootstrapSkinAnonNavbar = true;
$wgBootstrapSkinUseStandardLayout = false;
$wgBootstrapSkinDisplaySidebarNavigation = false;
# Show print/export in navbar by default
$wgBootstrapSkinSidebarItemsInNavbar = array( 'coll-print_export' );

$wgFooterIcons['poweredby']['bootstrapskin'] = array(
	      "src" => "http://www.mediawikibootstrapskin.co.uk/images/BootStrapSkin_mediawiki_88x31",
	      "url" => "http://www.mediawikibootstrapskin.co.uk/",
	      "alt" => "Powered by BootStrapSkin",
          );
		  
$wgFooterIcons['poweredby']['youricon'] = array(
	      "src" => "", //url to your wiki logo
	      "url" => "", //url to your wiki
	      "alt" => "", //alt text
          );
