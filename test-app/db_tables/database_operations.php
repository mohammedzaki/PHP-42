<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/12/20
 * Time: 4:08 PM
 */

define("DB_HOST", "localhost");
define("DB_USER", "db_user2");
define("DB_PASS", "E!7jv]+B6#HwKx4");
define("DB_NAME", "ecommercephp40");


// SQL -> Standard Query Language


// 1. connect db
function connect_db()
{
    // Create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
    return $conn;
}

// 2. create table


// select data

function test_select_data()
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

// Returns one selected row
function select_data($sql)
{
    // 1. Set DB connection
    $conn = connect_db();

    // 2. Fetch result from the executed sql
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
    // 1. Set DB connection
    $conn = connect_db();

    // 2. Fetch result from the executed sql

    $data = [];

    if (mysqli_query($conn, $sql)) {
        $data['success'] = true;
        $data['message'] = "New record created successfully";

    } else {

        $data['success'] = false;
        $data['message'] = mysqli_error($conn);
    }
    return $data;
}

// delete data

function delete_data($sql)
{
    // 1. Set DB connection
    $conn = connect_db();

    // 2. Fetch result from the executed sql

    $data = [];

    if (mysqli_query($conn, $sql)) {
        $data['success'] = true;
        $data['message'] = "Record deleted successfully";

    } else {

        $data['success'] = false;
        $data['message'] = mysqli_error($conn);
    }
    return $data;
}

// update data

function update_data($sql)
{
    // 1. Set DB connection
    $conn = connect_db();

    // 2. Fetch result from the executed sql

    $data = [];

    if (mysqli_query($conn, $sql)) {
        $data['success'] = true;
        $data['message'] = "Record updated successfully";

    } else {

        $data['success'] = false;
        $data['message'] = $sql . '<br>'. mysqli_error($conn);
    }
    return $data;
}


// selectـdata();