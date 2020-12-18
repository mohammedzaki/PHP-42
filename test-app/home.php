<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 6:21 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/test-app/session_handler.php";

$name = '';

if (get_from_session(USER_NAME_KEY) != null) {
    $name = get_from_session(USER_NAME_KEY);
} else {
    // header("Location: login.php");
}

?>

<html>
<head>

</head>
<body>

<?php require ("menu.php"); ?>

<div>
    Welcome to <?php echo $name ?>
</div>

</body>

</html>
