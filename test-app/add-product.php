<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/11/20
 * Time: 6:00 PM
 */

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    die("Not Allowed");
}

/*
 $_FILES['file']['tmp_name']- the uploaded file in the temporary directory on the web server.

 $_FILES['file']['name'] - the actual name of the uploaded file.

 $_FILES['file']['size'] - the size in bytes of the uploaded file.

 $_FILES['file']['type'] - the MIME type of the uploaded file.

 $_FILES['file']['error'] - the error code associated with this file upload.
*/

if ($_FILES['file']['name'] != '' && isset($_POST['p_name'])) {
//    try {
//        // $res = 5 / 0;
//        $error = 'Always throw this error';
//        throw new Exception($error);
//    } catch (\Exception $ex) {
//        die($ex->getMessage());
//    }

    $res = $num / 0;

    $p_name = $_POST['p_name'];

    $destPath = "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/test-app/" . $_FILES['file']['name'];

    copy($_FILES['file']['tmp_name'], $destPath);

    echo $_FILES['file']['name'] . " And $p_name are saved.";

} else {
    die("No product name Or image specified!");
}

