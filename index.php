<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include ("env/config.php");

?>

HI THIS IS THE INDEX PAGE. AS YOU CAN SEE ITS NOT BUILT YET.

but login and logout functions work i think

<?php
if( $_SESSION != null) { ?>
    <li><a href="logout.php">Logout</a></li>
<?php }
?>
<?php
if( $_SESSION == null) { ?>
    <li><a href="login.php">Login</a></li>
<?php } ?>
</body>
</html>