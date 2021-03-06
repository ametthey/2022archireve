<?php

/***********************************************************************
 * Add support for
 * - title-tag
 * - post-thumbnails
 ***********************************************************************/
require_once( 'lib/theme-supports.php' );

/***********************************************************************
 * Remove Genericons
 * Disable emojis
 * Hide WORDPRESS Version
 * remove jquery & jquery migrate
 ***********************************************************************/
require_once( 'lib/cleanup.php');

/***********************************************************************
 * enqueue scripts and style
 ***********************************************************************/
require_once( 'lib/enqueue-assets.php' );

/***********************************************************************
 * Login customization
 ***********************************************************************/
require_once( 'lib/login-customization.php' );

/***********************************************************************
 * Custom Post Type : Reves & Reveurs
 ***********************************************************************/
require_once( 'lib/custom-post-type.php' );


/***********************************************************************
 * Custom Post Taxonomy : Niveau de lucidité, Typologie & Tags
 ***********************************************************************/
require_once( 'lib/custom-post-taxonomy.php' );
require_once( 'lib/taxonomy-modalites.php' );


/***********************************************************************
 * Custom Admin Bar
 ***********************************************************************/
require_once( 'lib/custom-admin-bar.php' );


/***********************************************************************
 * Custom Images Size
 ***********************************************************************/
// require_once( 'lib/custom-images-size.php' );


/***********************************************************************
 * ACF customs settings
 ***********************************************************************/
require_once( 'lib/acf.php' );
require_once( 'lib/acf-forms.php' );

/***********************************************************************
 * First user login
 ***********************************************************************/
require_once( 'lib/first-user-login.php' );

/***********************************************************************
 * Logins
 ***********************************************************************/
require_once( 'lib/logins.php' );
