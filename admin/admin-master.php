<?php
    include("../env/config.php");
   /* include("../env/usersessions.php");*/
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

                <div class="col-xs-2" style="border:1px solid #ccc;height:100vh; background:#1C2A48;">
                    <!-- Side Navigation fixed -->
                    <?php include("admin-layout/admin-nav.php"); ?>
                </div>


                <div class="col-xs-10" style="padding: 0px;">
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
                        <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <!--no of products-->

                                <div class="card card-cascade wider">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="http://blog.infotrends.com/wp-content/uploads/2013/06/SamsungProducts.png" style="height: 300px;width: 100%" class="img-fluid">
                                        <a href="#">
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-center">
                                        <!--Title-->
                                        <h4 class="card-title" style="text-align: center"><strong>Total Number of Products</strong></h4>
                                        <br>
                                        <h1 style="text-align: center">XX</h1>

                                        <p class="card-text" style="text-align: center">Includes phones and Computer Parts</p>



                                    </div>
                                    <!--/.Card content-->

                                </div>
                                </div>


                            <div class="col-md-4">
                                <!--no of products-->

                                <div class="card card-cascade wider">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="https://www.or-technology.com/images/Menubilder/Medici/Medici-general.png" style="height: 300px;width: 100%" class="img-fluid">
                                        <a href="#%21">
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-center">
                                        <!--Title-->
                                        <h4 class="card-title" style="text-align: center"><strong>Total  Categories</strong></h4>
                                        <br>
                                        <h1 style="text-align: center">XX</h1>

                                        <p class="card-text" style="text-align: center">Includes categories like laptop, phones</p>



                                    </div>
                                    <!--/.Card content-->

                                </div>
                            </div>

                            <div class="col-md-4">
                                <!--no of products-->

                                <div class="card card-cascade wider">

                                    <!--Card image-->
                                    <div class="view overlay hm-white-slight">
                                        <img src="https://cdn0.iconfinder.com/data/icons/large-glossy-icons/512/Customers.png" style="height: 300px;width: 100%" class="img-fluid">
                                        <a href="#">
                                            <div class="mask waves-effect waves-light"></div>
                                        </a>
                                    </div>
                                    <!--/Card image-->

                                    <!--Card content-->
                                    <div class="card-block text-center">
                                        <!--Title-->
                                        <h4 class="card-title" style="text-align: center"><strong>Total Number of Users</strong></h4>
                                        <br>
                                        <h1 style="text-align: center">

                                            <?php

                                                include_once("../env/config.php");

                                                $userCount = "select count(*) c from user";

                                                $userCountResult = mysqli_query($conn,$userCount);
                                                $row = mysqli_fetch_assoc($userCountResult);
                                                echo "<strong>" . $row['c'] . "</strong>";

                                                /*echo $userCountResult;*/

                                            ?>



                                        </h1>

                                        <p class="card-text" style="text-align: center">Users and their roles</p>



                                    </div>
                                    <!--/.Card content-->

                                </div>
                            </div>

                        </div>
                    </div>

              </div>
            </div>



            <script src="../public/js/compiled.js"></script>
</body>

</html>
