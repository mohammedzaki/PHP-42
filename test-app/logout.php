<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/11/20
 * Time: 5:19 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/test-app/session_handler.php";

reset_session_data();

header("Location: home.php");