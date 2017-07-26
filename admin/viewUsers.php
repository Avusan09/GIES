<?php
include("../env/config.php");
/*include("../env/usersessions.php");*/
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

    <div class="col-xs-2" style="border:1px solid #ccc;height:100vh; background-image:url('../../gies/public/admin.png');background-size: 100% 100%;opacity: 100%">
        <!-- Side Navigation fixed -->
        <?php include("admin-layout/admin-nav.php"); ?>
    </div>


    <div class="col-xs-10" style="padding: 0px;background-color: #3E4551;color:white;height: 100%">
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
        <!--Shopping Cart table-->
        <div class="container" style="padding:0 40px 0 40px">
        <div class="table-responsive">
            <center>
            <table class="table product-table">
                <!--Table head-->
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Joined on</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <!--/Table head-->

                <!--Table body-->
                <tbody>
                <?php
                include("../../gies/env/config.php");

                $usersInfo = "select * from user";
                $userInfoQuery = mysqli_query($conn,$usersInfo);
                while ($rs_res = mysqli_fetch_assoc($userInfoQuery))
                {
                ?>

                <!--First row-->
                <tr rowspan="2">

                        <th scope="row">
                            <a href="../../gies/admin/userInformation.php?id=<?php echo $rs_res['id']; ?>">
                           <?php $image = $rs_res['image'];
                           echo "<img src='../../gies/public/images/users/". $image . "'>"; ?>
                            </a>
                        </th>
                        <td>
                            <a href="../../gies/admin/userInformation.php?id=<?php echo $rs_res['id']; ?>">
                        <h5><strong><?php echo $rs_res["username"]; ?></strong></h5>
                            </a>
                        </td>
                    <td>
                        <a href="../../gies/admin/rolesHelp.php">
                        <?= $rs_res["role"];?>
                        </a>
                    </td>

                    <td>
                        <a href="../../gies/admin/userInformation.php?id=<?php echo $rs_res['id']; ?>">
                        <?= $rs_res["email"];?>
                        </a>
                    </td>
                    <td><?= $rs_res["Created_At"];?></td>

                    <td><button value="edit">edit</button></td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove item">X
                        </button>
                    </td>



                </tr>
                <!--/First row-->
                <?php } ?>

                </tbody>
                <!--/Table body-->
            </table>
            </center>
        </div>
        <!--/Shopping Cart table-->
        </div>

        <!-- rest of the page ends here-->
    </div>

</div>
</div>



<script src="../public/js/compiled.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>
</body>

</html>



