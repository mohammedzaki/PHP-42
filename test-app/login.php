<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 6:06 PM
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo "Welcome " . $_REQUEST['username'] . "<br>";
    //echo "You are " . $_REQUEST['password'];

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        if ($username == 'abc' && $password == '123456') {
            // go to  home
            header("Location: home.php?name=" . $username);
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

<form action="<?php $_PHP_SELF ?>" method="POST">
    Username: <input type="text" name="username"/> <br>
    Password: <input type="text" name="password"/> <br>
    <input type="submit"/>
</form>

</body>

</html>