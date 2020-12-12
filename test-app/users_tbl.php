<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/12/20
 * Time: 6:34 PM
 */


define("DB_HOST", "localhost");
define("DB_USER", "db_user2");
define("DB_PASS", "E!7jv]+B6#HwKx4");
define("DB_NAME", "ecommercephp40");




function check_user($username, $password) {

    // 1. connect on the database server

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // 2. execute sql command the conn (select user from database)

    // SELECT * FROM users WHERE users.username = 'm_zaki' AND users.password = '123456'

    $sql = "SELECT * FROM users WHERE users.username = '{$username}' AND users.password = '{$password}'";

    // 3. fetch data from the executed command then put it on into var

    $result = mysqli_query($conn, $sql);

    // 4. check the returned result array length > 0

    if (mysqli_num_rows($result) > 0) {
        // 5. if res > 0 return the data of the selected row

        $row = mysqli_fetch_assoc($result);

        return $row;

    } else {
        return null;
    }

    // 6. close the database conn

    mysqli_close($conn);

}