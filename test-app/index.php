<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/18/20
 * Time: 3:55 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/test-app/session_handler.php";


if (get_from_session(USER_NAME_KEY) == null) {
    header("Location: login.php");
} else {
    header("Location: home.php");
}

?>