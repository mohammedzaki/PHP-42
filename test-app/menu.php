<?php
/**
 * Created by PhpStorm.
 * User: mohamedzaki
 * Date: 12/5/20
 * Time: 6:56 PM
 */
?>

<menu>
    <a href="home.php">Home Page</a> -
    <a href="products.php">Products</a> -
    <a href="add-new-product.html">Add New Product</a> -



    <?php
    if (get_from_session(USER_NAME_KEY) != null) {
        $name = get_from_session(USER_NAME_KEY);
        echo "<a href='logout.php'>Logout, {$name}</a>";
    } else {
        echo '<a href="login.php">Login</a>';
    }
    ?>
</menu>
