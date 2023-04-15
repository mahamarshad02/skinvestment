<?php
    include "connection.php";
    include "component.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <!-- ===========BOOTSTRAP============ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>shop</title>
</head>

<style>
    * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }

    /* --------------SECTION HEADER--------------- */
    #header{
        background-image: linear-gradient(rgba(15, 9, 9, 1), rgba(247, 244, 244, 0.158)), url("./images/skincare17.jpg");
        height: 30vh;
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .logo{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .logo img{
        height: 100px;
    }

    .navbar{
        z-index: 10000;
        transition: all 0.1s ease-in-out;
        height: auto;
    }
    .navbar-nav a{
        position: relative;
        color: white;
        border-radius: 10px;
    }
    .navbar-nav a:hover{
        color: white;
        background-color: #f78094;
        box-shadow: #f78094;
    }

    .active {
        position: absolute;
        margin-top: 130px;
        margin-left: 400px;
        text-decoration: none;
        color: white;
    }
    
    td{
        padding:20px;
    }
    badge:after{
        content:attr(value);
        font-size:15px;
        color: white;
        background:#ee9696;
        border-radius:50%;
        padding: 0 5px;
        position:relative;
        left:-8px;
        top:-10px;
        opacity:0.9;
    }
    /* ----------MEDIA QUERIES FOR NAVBAR-------------- */
    @media screen and (min-width:1400px){
        .container-fluid{
            padding-left: 25rem;
        }
        .navbar li{
            padding: 15px;
        }
    }
    @media screen and (min-width:1300px) and (max-width:1399px) {
        .navbar li{
            padding: 15px;
        }
        .container-fluid{
            padding-left: 15rem;
        }
    }
    @media screen and (max-width:1299px)and ( min-width: 991px)  {
        .navbar li{
            padding: 9px;
        }
        .container-fluid{
            padding-left: 12rem;
        }
    }
</style>
</style>

<body>
    <section id="header">
        <div class="logo">
            <img src="./images/skincarelogo.png" alt="">
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="header.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cshop.php">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="header.php#section-4">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="header.php#section-5">TESTIMONIALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">SKIN QUIZ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clogout.php">LOGOUT</a>
                    </li>
                    <li>
                        <a href="mycart.php"><i style="font-size:2rem;"class="fa fa-shopping-cart"></i></a>
                    </li>
                    
                </ul>
                </div>
            </div>
        </nav>

        <!-- <div class="nav">
            <a href="header.php">HOME</a>
            <a href="cshop.php">SHOP</a>
            <a href="header.php#section-5">ABOUT US</a>
            <a href="header.php#section-6">TESTIMONIALS</a>
            <a href="index.php">SKIN QUIZ</a>
            <a class="anchor" href="clogout.php">LOGOUT</a>
            <a href="mycart.php"><i style="color:white ;" class="fa badge fa-lg">&#xf07a;</i></a>
        </div> -->
        
    </section>
    <section>
        <div class="products">
            <div class="container">
                <div class="row text-centre py-5">
                    <?php 
                        $query1 = "SELECT * FROM product";
                        $result = mysqli_query($conn,$query1);
                        while($result2=mysqli_fetch_array($result))
                        {
                            ?>
                                <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                    <div class="card shadow" style="width: 16rem;">
                                        <img style="height:250px ; width: 250px;" src="<?php echo $result2['product_pic'] ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $result2['product_name']?></h5>
                                            <p class="card-text">Rs. <?php echo $result2['price'] ?></p>
                                            <form action="shopindividual.php" method="post">
                                                <input type="hidden" name="product_id" value="<?php echo $result2['product_id'] ?>">
                                                <input type="submit" name="add" class="btn btn-outline-danger" value="View More">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                        // if(isset($_POST['add'])){
                        //     echo $var = $_POST['product_id'];
                        // }
                        
                    ?> 
                </div>
            </div>  
        </div>
    </section>
</body>

</html>