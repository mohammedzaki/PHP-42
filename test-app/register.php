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
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    if (!empty($username) && !empty($password) && !empty($firstname) && !empty($lastname)) {

        $res = insert_new_user($firstname, $lastname, $username, $password);

        if ($res['success']) {
            header("Location: login.php?message=" . $res['message']);
        } else {
            echo $res['message'];
        }

    } else {
        echo 'please enter valid data!';
    }
}

?>

<html>
<head>

</head>
<body>

<form action="<?php $_PHP_SELF ?>" method="POST">
    First Name: <input type="text" name="firstname"/> <br>
    Last Name: <input type="text" name="lastname"/> <br>
    Username: <input type="text" name="username"/> <br>
    Password: <input type="text" name="password"/> <br>
    <input type="submit"/>
</form>

</body>

</html>