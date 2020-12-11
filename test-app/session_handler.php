<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/11/20
 * Time: 4:58 PM
 */

define('USER_NAME_KEY', 'username');

session_start();

function get_from_session($key) {
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    } else {
        return null;
    }
}

function save_into_session($key, $value) {
    $_SESSION[$key] = $value;
}

function reset_session_data() {
    session_destroy();
}