<?php
include("../env/config.php");
/*include("../env/usersessions.php");*/
?>

<?php
include("../env/config.php");
if(isset($_POST['submit']))
{
    $target_dir = "../public/images/users/";
    $target_file = $target_dir . basename($_FILES["uploadImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["uploadImage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $image = $_FILES['uploadImage']['name'];

    $sql="insert into user(username, password,role,email,image) value ('$user','$pass','$role','$email','$image')";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("Location: admin-master.php");
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
    <title>Admin | Add Users</title>

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
        </div>


    <div class="col-xs-10" style="padding: 0px;background-color: #3E4551;color:white;height: 100vh">
        <!-- Rest of the page -->
        <div class="container-fluid" style="padding:0px">
            <div class="navbar-dark rgba-blue-strong" style="height: 50px" role="navigation">

                <div class="container">

                    <!--Collapse content-->
                    <div class="collapse navbar-toggleable-xs" id="collapseEx2">
                        <!--Navbar Brand-->
                        <a class="navbar-brand" style="color:white">Dashboard > ADD USERS</a>
                        <!--Links-->

                        <button href="#" class=" btn  btn-primary btn-sm btn-rounded navbar-link waves-effect waves-ripple"  style="float: right"> Contact</button>
                        <button href="#" class=" btn btn-danger btn-sm btn-rounded navbar-link waves-effect waves-ripple"  style="float: right"> Logout</button>



                        <!--/.Collapse content-->

                    </div>

                </div>
                <!--/.Navbar-->
            </div>
        </div>
        <br>

        <!--rest of the page actually begins here-->
        <div class="container" style="padding:0 200px 0 200px;">

            <h1 style="text-align: center">Add Users Forms </h1>

            <form action="" method="post" enctype="multipart/form-data">

                <div class="md-form form-group">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form91" name="username" class="form-control validate" required>
                    <label for="form91" data-error="wrong" data-success="right" style="color:white">UserName</label>
                </div>


                <div class="md-form form-group">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form92" name="password" class="form-control validate" required>
                    <label for="form92" data-error="wrong" data-success="right" style="color:white">Password</label>
                </div>


                <label for="sel1" class="md-form form-group" style="margin-left: 50px">Select Role:</label>
                <select class="form-control" id="sel1" name="role" style="margin-left: 50px;width: 95%;color: white;background-color:#3E4551">
                    <option value="Super Admin">SuperAdmin</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>

                <div class="md-form form-group">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="email" id="form91" name="email" class="form-control validate" required>
                    <label for="form91" data-error="wrong" data-success="right" style="color:white">Email Address</label>
                </div>

                <div class="file-field">
                    <div class="btn btn-outline-primary btn-sm" style="margin-left: 45px">
                        <span style="color: white;">Choose Image to upload</span>
                        <input type="file" name="uploadImage">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" style="color: white" type="text" placeholder="Upload your file" width="95%">
                    </div>
                </div>

                <br><br>
                <div class="md-form form-group" style="margin-left: 15px" >
                    <input type="submit" style="color: white" class="btn btn-primary btn-xs btn-block" name="submit" value="Submit Information" style="width: 95%">
                </div>
            </form>



            <!-- rest of the page ends here-->
        </div>
    </div>




</div>
</div>



<script src="../public/js/compiled.js"></script>
</body>

</html>


