<?php
$user = wp_get_current_user();
$username = $user->user_nicename;
if ( is_user_logged_in() ) {
    if ( $username && current_user_can('editor') ) {
        echo '<h1 class="user-pseudo">' . $username . '</h1>';
    }
} else {
    // Silence is golden
}
?>




