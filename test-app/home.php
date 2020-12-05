<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 6:21 PM
 */
echo 'Request Type is: ' . $_SERVER['REQUEST_METHOD'] ;

$name = '';

if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
}

?>

<html>
<head>

</head>
<body>

<?php require ("menu.php"); ?>

<div>
    Welcome to <?php echo $name ?>
</div>


<div>
    Welcome to <?php echo $name ?>
</div>
<div>
    Welcome to <?php echo $name ?>
</div>
<div>
    Welcome to <?php echo $name ?>
</div>
<div>
    Welcome to <?php echo $name ?>
</div>

</body>

</html>
