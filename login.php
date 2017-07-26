<?php
include('../gies/env/config.php');

if(isset($_POST['submit'])){

    $username = addslashes($_POST['user']);
    $password1 = addslashes($_POST['pass']);

    $query = "select * from user where username = '$username' and password = '$password1'";

    $result = mysqli_query($conn,$query);
    $result1 = mysqli_fetch_assoc($result);

    if($result1){


        $_SESSION["user_id"] = $result1["id"];
        $_SESSION["user_role"] = $result1["role"];

        print_r($_SESSION["user_id"]);
        print_r($_SESSION["user_role"]);
         /*die;*/
        if($_SESSION["user_role"] == "User" ){
            header("Location: index.php");
        }
        else{
            header("Location:admin/admin-master.php");
        }



    }
    else{

        header("Location:login.php");

    }
}
        ?>

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

<form action="" method="post">
    <input type="text" name="user" value="">
    <input type="password" name="pass" value="">
    <input type="submit" name="submit">

</form>

</body>
</html>