<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WELCOME | RENT YOUR SPACE</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">SEARCH ROOMS</h2>

        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder=" Find Your Near Room" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="Locations-heading" style="text-align:center; font-weight:700">
            Our Service Available
        </h1>
        <hr>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=sagar">
                    
                        <img src="https://i.ytimg.com/vi/JfJokKRC5Jo/maxresdefault.jpg"  style="width:170px; height:170px;  border-radius:20px"   />
                       
                        <h6>SAGAR</h2>
                    
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=BHOPAL">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9SzXDpZMftXe1tD3Dp1ahYnsjrWG9L50egF3CGnpPiBpG1LA8EcJH4uaRiPXgnyIy87U&usqp=CAU"  style="width:170px; height:170px;  border-radius:20px"   />
                        
                        <h6>INDORE</h2>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=INDORE">
                <img src="https://wpassets.adda247.com/wp-content/uploads/multisite/sites/5/2023/05/19102748/maxresdefault.jpg"  style="width:170px; height:170px;  border-radius:20px"   />
                        
                        <h6>BHOPAL</h2>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=JABALPUR">
                <img src="https://i.ytimg.com/vi/Ba9RGiiS4SU/maxresdefault.jpg"  style="width:170px; height:170px;  border-radius:20px"   />
                       
                        <h6>JABALPUR</h2>
                </a>
            </div>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>
