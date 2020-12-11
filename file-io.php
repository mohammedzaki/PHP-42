<html>
<head>
    <title>Reading a file using PHP</title>
</head>
<body>
<?php
$filename = "/Applications/mampstack-7.4.10-0/apache2/htdocs/php-42/tmp.txt";
$file     = fopen($filename, "r");

if (!$file) {
    echo("Error in opening file");
    exit();
}

$filesize = filesize($filename);
$filetext = fread($file, $filesize);

fclose($file);

echo("File size : $filesize bytes");

echo("<pre>$filetext</pre>");

?>

</body>
</html>