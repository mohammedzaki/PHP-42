<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 6:06 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/test-app/session_handler.php";

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/test-app/db_tables/users_tbl.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo "Welcome " . $_REQUEST['username'] . "<br>";
    //echo "You are " . $_REQUEST['password'];

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {

        $user = check_user($username, $password);

        if ($user != null) {
            // go to  home
            $session->save(SessionKeys::USER_NAME_KEY, $user['firstname'] . ' ' . $user['lastname']);
            save_into_session(SessionKeys::USER_ID, $user['ID']);

            header("Location: home.php");
        } else {
            echo 'please enter valid username and password!';
        }

    } else {
        echo 'username and password are required.';
    }
}

?>

<html>
<head>

</head>
<body>

<?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?>

<form action="<?php $_PHP_SELF ?>" method="POST">
    Username: <input type="text" name="username"/> <br>
    Password: <input type="text" name="password"/> <br>
    <input type="submit"/>
</form>
<a href="register.php">Register</a>

</body>

</html>