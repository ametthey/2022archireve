<?php
/*
 * If failed login redirect to custom login page
 */
function _themename_login_failed() {
  $login_page  = home_url( '/connexion/' );
  wp_redirect( $login_page . '?login=failed' );
  exit;
}
add_action( 'wp_login_failed', '_themename_login_failed' );

/*
 * if wrong password redirection to custom login page
 */
function _themename_verify_username_password( $user, $username, $password ) {
  $login_page  = home_url( '/connexion/' );
    if( $username == "" || $password == "" ) {
        // wp_redirect( $login_page . "?login=empty" );
        wp_redirect( $login_page );
        exit;
    }
}
add_filter( 'authenticate', '_themename_verify_username_password', 1, 3);
