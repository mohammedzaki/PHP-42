<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/12/20
 * Time: 6:34 PM
 */

require_once "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/test-app/db_tables/database_operations.php";


//function check_user_old($username, $password)
//{
//
//    // 1. connect on the database server
//
//    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//
//    if (!$conn) {
//        die("Connection failed: " . mysqli_connect_error());
//    }
//
//    // 2. execute sql command the conn (select user from database)
//
//    // SELECT * FROM users WHERE users.username = 'm_zaki' AND users.password = '123456'
//
//    $sql = "SELECT * FROM users WHERE users.username = '{$username}' AND users.password = '{$password}'";
//
//    // 3. fetch data from the executed command then put it on into var
//
//    $result = mysqli_query($conn, $sql);
//
//    // 4. check the returned result array length > 0
//
//    if (mysqli_num_rows($result) > 0) {
//        // 5. if res > 0 return the data of the selected row
//
//        $row = mysqli_fetch_assoc($result);
//
//        return $row;
//
//    } else {
//        return null;
//    }
//
//    // 6. close the database conn
//
//    mysqli_close($conn);
//
//}


function check_user($username, $password)
{
    $sql = "SELECT * FROM users WHERE users.username = '{$username}' AND users.password = '{$password}'";

    return select_data($sql);
}

function insert_new_user($firstname, $lastname, $username, $password)
{
    // ID Auto Generate

    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `password`) VALUES ('{$firstname}','{$lastname}','{$username}','{$password}')";

    return insert_data($sql);
}


function update_user_data($id, $firstname = null, $lastname = null, $username = null, $password = null) {

    // UPDATE `users` SET firstname`=[value-2],`lastname`=[value-3],`username`=[value-4],`password`=[value-5] WHERE users.ID = 1

    $sql = "UPDATE `users` SET firstname = '{$firstname}', `lastname`='$lastname' WHERE users.ID = {$id};";


    return update_data($sql);

}


function delete_user($id) {

    // UPDATE `users` SET firstname`=[value-2],`lastname`=[value-3],`username`=[value-4],`password`=[value-5] WHERE users.ID = 1

    $sql = "DELETE FROM `users` WHERE users.ID = {$id};";

    return delete_data($sql);

}