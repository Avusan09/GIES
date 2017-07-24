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

                <div class="col-xs-2" style="border:1px solid #ccc;height:100vh; background: url('https://www.planwallpaper.com/static/images/abstract_color_background_picture_8016-wide.jpg');
                      background-size: inherit;
                      background-repeat: no-repeat;">
                    <!-- Side Navigation fixed -->
                    <div class="container">
                    <h3 class="text-xs-center" style="margin-top:30px;color:white">Admin Panel</h3>
                    <hr style="height:5px;color:white">

                    <ul class="list-group no-box-shadow">
                        <li class="divider"></li>

                        <a href="#"><li class="list-group-item pad waves-effect waves-light"> Add Users</li></a>
                        <a href="#"><li class="list-group-item pad waves-effect waves-light"> Add Products</li></a>
                        <a href="#"><li class="list-group-item pad waves-effect waves-light"> Add Categories</li></a>
                        <a href="#"><li class="list-group-item pad waves-effect waves-light"> View Users</li></a>
                        <a href="#"><li class="list-group-item pad waves-effect waves-light"> View Products</li></a>
                        <a href="#"><li class="list-group-item pad waves-effect waves-light"> View Carts</li></a>
                        <a href="#"><li class="list-group-item pad waves-effect waves-light"> Checkout History</li></a>




                    </ul>






                </div>
                </div>


                <div class="col-xs-10">
                  <!-- Rest of the page -->
                    <h1>this is the rest of the page where data is shown.</h1>

                    <h4>This is arranged properly thanks.</h4>
                </div>

              </div>


            <script src="../public/js/compiled.js"></script>
</body>

</html>
