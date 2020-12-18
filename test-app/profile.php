<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 6:06 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/test-app/session_handler.php";

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/test-app/db_tables/users_tbl.php";

//TODO: load user data first

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username  = isset($_POST['username']) ? $_POST['username'] : null;
    $password  = isset($_POST['password']) ? $_POST['password'] : null;
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
    $lastname  = isset($_POST['lastname']) ? $_POST['lastname'] : null;

    $user_id = get_from_session(USER_ID);

    //TODO: make update optional for all fields

    $res = update_user_data($user_id, $firstname, $lastname, $username, $password);

    if ($res['success']) {

        //TODO: Update first_name and last_name in session data after update user profile data

        echo $res['message'];
    } else {
        echo $res['message'];
    }


}

?>

<html>
<head>

</head>
<body>

<?php require ("menu.php"); ?>

<form action="<?php $_PHP_SELF ?>" method="POST">
    First Name: <input type="text" name="firstname"/> <br>
    Last Name: <input type="text" name="lastname"/> <br>
    Username: <input type="text" name="username"/> <br>
    Password: <input type="text" name="password"/> <br>
    <input type="submit"/>
</form>

</body>

</html>