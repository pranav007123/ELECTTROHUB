<?php

include("../DBConnection/dbconnection.php");


?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kerala</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
        * Template Name: Yummy - v1.1.0
        * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
  </head>

  <body>

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      



    </section><!-- End Menu Section -->



    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--below of these must be import otherwise bootstrap not work -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


        <!--dont know what purpose its for-->
        <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!--dont end up-->

        <!--it too important to show pagination, number of entries, search, list of table show-->
        <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>

        <!--Pagination src-->
        <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>

        <!--this one down only arrow showing but -->
        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

        <!--this one up and down arrow showing-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" />


        <script>
            $(document).ready(function () {
                $('#datatable').dataTable();

                $("[data-toggle=tooltip]").tooltip();

            });
        </script>  
        <style>
            .pagination>li {
                display: inline;
                padding:0px !important;
                margin:0px !important;
                border:none !important;
            }
            .modal-backdrop {
                z-index: -1 !important;
            }
            /*
            Fix to show in full screen demo
            */
            iframe
            {
                height:700px !important;
            }

            .btn {
                display: inline-block;
                padding: 6px 12px !important;
                margin-bottom: 0;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.42857143;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-image: none;
                border: 1px solid transparent;
                border-radius: 4px;
            }

            .btn-primary {
                color: #fff !important;
                background: #428bca !important;
                border-color: #357ebd !important;
                box-shadow:none !important;
            }
            .btn-danger {
                color: #fff !important;
                background: #d9534f !important;
                border-color: #d9534f !important;
                box-shadow:none !important;
            }
        </style></head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <h2 class="text-center">Search Charage Station by Address</h2>
            </div>
<br><br><br>
            <div class="row">
                <div class="col-md-12">

                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>Station Name</th>
                    <th>Location</th>
                    <th>License</th>
                    <th>Price per 1 kWh</th>
                    <th>Price per Hour</th>
                    <th>Parking Price</th>
                    <th>Opening Time</th>
                    <th>Closing Time</th>
                    <th>Owner</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                            </tr>
                        </thead>

                        <?php
        $qry = "SELECT * FROM `station`";

          $result=mysqli_query($conn,$qry);
          if(mysqli_num_rows($result)>0){
          
while($row=mysqli_fetch_array($result)){
    ?>

                        <tbody>

                            <tr>
                                <td><?php echo $row['st_name'];?></td>
                                <td><?php echo $row['st_address'];?></td>
                                <td><?php echo $row['st_l_no'];?></td>
                                <td><?php echo $row['st_price_one_kwh'];?></td>

                                <td><?php echo $row['st_price_per_hour'];?></td>
                                <td><?php echo $row['st_parking_price'];?></td>
                                <td><?php echo $row['st_open'];?></td>
                                <td><?php echo $row['st_close'];?></td>
                                <td><?php echo $row['st_owner'];?></td>
                                <td><?php echo $row['st_phone'];?></td>  
                                 <td><?php echo $row['st_email'];?></td>
                                 <td>
<button style="color:white;border:none;padding:8px;border-radius:10px">    
     <a href="bookStationform.php?stid=<?php echo $row['st_id'];?>" > Book </a></button>

</td>
                            </tr>
                        </tbody>
                        
     
            <?php
            }
          
        }
        
        ?>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>

  </body>

  </html>

 