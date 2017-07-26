<?php
include("../env/config.php");
/*include("../env/usersessions.php");*/
$id = $_GET["id"];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/compiled.css">
    <link rel="stylesheet" href="../public/css/mdb.min.css">
    <link rel="stylesheet" href="../public/css/style.css">

    <style>
        /*temporary before i move them into files*/

        .pad
        {
            padding:10px;
            border:0px;
            margin-top: 20px;
            background-color: transparent;
            color:white;

        }

        .pad:hover{
            background: rgba(2,31,65,0.9);
            color:white;
        }

        .no-box-shadow
        {
            box-shadow: 0 0 0 0 rgba(0,0,0,.16), 0 0 rgba(0,0,0,.12);
        }
    </style>

</head>
<body>
<!--Navigation page-->


<div class="row" style="margin-right:0px;">

<div class="col-xs-2" style="border:1px solid #ccc;height:100vh; background-image:url('../../gies/public/admin.png');background-size: 100% 100%">
        <!-- Side Navigation fixed -->
        <?php include("admin-layout/admin-nav.php"); ?>
        <!-- End of side Navigation       -->
    </div>


<div class="col-xs-10" style="padding: 0px;background-color: #3E4551;color:white;height: 100vh">
        <!-- Rest of the page -->
        <div class="container-fluid" style="padding:0px">
            <div class="navbar-dark rgba-blue-strong" style="height: 50px" role="navigation">

                <div class="container">

                    <!--Collapse content-->
                    <div class="collapse navbar-toggleable-xs" id="collapseEx2">
                        <!--Navbar Brand-->
                        <a class="navbar-brand" style="color:white">Dashboard</a>
                        <!--Links-->

                        <button href="#" class=" btn  btn-primary btn-sm btn-rounded navbar-link waves-effect waves-ripple"  style="float: right"> Contact</button>
                        <button href="#" class=" btn btn-danger btn-sm btn-rounded navbar-link waves-effect waves-ripple"  style="float: right"> Logout</button>



                        <!--/.Collapse content-->

                    </div>

                </div>
                <!--/.Navbar-->
            </div>
        </div>
        <br><br>

        <!--rest of the page actually begins here-->
            <div class="container" style="padding: 0 200px 0 200px">

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cum deserunt, dolor, dolores facilis harum illo nemo possimus quo reiciendis veniam veritatis voluptate. Excepturi facilis laborum repellendus repudiandae sapiente sunt.


                        <h1>TOO LAZY TO DESIGN THIS RIGHT NOW , i GOT PHP NEEDS.</h1>

                <?php

                    include("../../gies/env/config.php");
                    $id = $_GET["id"];
                    $id = mysqli_real_escape_string($conn,$id);

                $usersInfo = "select * from user where id like $id";
                $userInfoQuery = mysqli_query($conn,$usersInfo);
                    if($userInfoQuery) {
                        while ($row = mysqli_fetch_array($userInfoQuery)) {
                            echo $row['username'] . "<br>";
                            echo $row['role'] . "<br>";
                            echo $row['email'] . "<br>";
                        }
                    }
                ?>

            </div>

        <!-- rest of the page ends here-->
    </div>

</div>
</div>



<script src="../public/js/compiled.js"></script>
</body>

</html>



