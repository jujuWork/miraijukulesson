<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

    // Setting cookie parameters
session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => '127.0.0.1',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

    // Creating session
session_start(); 

    // Checking if the session is inside the browser
if (!isset($_SESSION["last_regeneration"])) {
    regenerate_session_id();
} else {
    $interval = 60 * 30; // 1min(60secs) * 30mins
     if (time() - $_SESSION["last_regeneration"] >= $interval) {
        regenerate_session_id();
     }
}
    // function to prevent duplicating a code
function regenerate_session_id() {
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
}