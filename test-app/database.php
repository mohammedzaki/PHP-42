<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/12/20
 * Time: 4:08 PM
 */


// SQL -> Standard Query Language


// 1. connect db
function connect_db()
{
    $servername = "localhost";
    $username   = "db_user2";
    $password   = "E!7jv]+B6#HwKx4";
    $database   = "ecommercephp40";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
    return $conn;
}

// 2. create table


// select data

function test_selectـdata()
{
    /*
        1. connect
        2. select
       SELECT * FROM users WHERE users.username = 'm_zaki' AND users.password = '123456';
        3. save into var
        4. close the db connection
        5. return the data in the saved var
     */

    $conn = connect_db();

    $sql    = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: {$row['ID']} - Name: {$row['firstname']} {$row['lastname']} <br>";
        }
    } else {
        echo "0 result";
    }

}

function selectـdata($sql)
{

    $conn = connect_db();

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return null;
    }

}

// insert data

function insert_data($sql)
{
    return null;
}

// delete data

function delete_data($sql)
{
    return null;
}

// update data

function update_data($sql)
{
    return null;
}


// selectـdata();