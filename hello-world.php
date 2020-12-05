<?php

// produce hello world plus your input name
// echo "Hello World " . $_REQUEST['name']

// echo 'Request Type is: ' . $_SERVER['REQUEST_METHOD'] ;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Welcome " . $_REQUEST['name'] . "<br>";
    echo "You are " . $_REQUEST['age'];
    exit();
} else {
    echo ' امشي العب بعيد يا ممدوح !';
}

?>

<html>
<head>

</head>
<body>

<form action="hello-world.php" method="POST">
    Name: <input type="text" name="name"/> <br>
    Age: <input type="text" name="age"/> <br>
    <input type="submit"/>
</form>

</body>

</html>
