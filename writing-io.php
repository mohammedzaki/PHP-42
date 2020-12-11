<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/11/20
 * Time: 4:01 PM
 */

$filename = "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/newfile.txt";

$file     = fopen($filename, "w");
if ($file == false) {
    echo("Error in opening new file");
    exit();
}
fwrite($file, "This is a simple test\n");
fclose($file);

?>