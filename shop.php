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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>shop</title>
</head>

<style>
    * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }

    .header {
        width: 100%;
        height: 45vh;
        background-image: linear-gradient(rgba(15, 9, 9, 1), rgba(247, 244, 244, 0.158)), url("images/shopheader1.jpg");
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .header .logo {
        position: absolute;
        left: 590px;
    }

    .nav {
        margin-top: 130px;
        position: absolute;
        width: 100%;
    }

    .nav a {
        position: relative;
        left: 440px;
        padding: 10px 15px;
        text-decoration: none;
        color: white;
        transition: ease-out 0.3s;
        z-index: 1;
    }

    .nav a :hover {
        background-color: #ee9696;
        cursor: pointer;
    }

    .nav a:before {
        transition: 0.5s all ease;
        position: absolute;
        top: 0;
        left: 50%;
        right: 50%;
        bottom: 0;
        opacity: 0;
        content: "";
        background-color: #ee9696;
    }

    .nav a:hover:before {
        transition: 0.5s all ease;
        left: 0;
        right: 0;
        opacity: 1;
        z-index: -1;
    }

    .active {
        position: absolute;
        margin-top: 130px;
        margin-left: 400px;
        text-decoration: none;
        color: white;
    }
    .nav2 {
        margin-top: 190px;
        position: absolute;
        width: 100%;
    }

    .nav2 a {
        position: relative;
        left: 440px;
        padding: 10px 15px;
        text-decoration: none;
        color: white;
        transition: ease-out 0.3s;
        z-index: 1;
    }

    .nav2 a :hover {
        background-color: #ee9696;
        cursor: pointer;
    }

    .nav2 a:before {
        transition: 0.5s all ease;
        position: absolute;
        top: 0;
        left: 50%;
        right: 50%;
        bottom: 0;
        opacity: 0;
        content: "";
        background-color: #ee9696;
    }

    .nav2 a:hover:before {
        transition: 0.5s all ease;
        left: 0;
        right: 0;
        opacity: 1;
        z-index: -1;
    }
    td{
        padding:20px;
    }
    /* Dropdown Button */
    .dropbtn {
        background-color: transparent;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropbtn:hover {
        cursor: pointer;
        background-color: #ee9696;
    }
    .dropbtn :before{
        transition: 0.5s all ease;
        position: absolute;
        top: 0;
        left: 50%;
        right: 50%;
        bottom: 0;
        opacity: 0;
        content: "";
        background-color: #ee9696;
    }
    .dropbtn :hover:before{
        transition: 0.5s all ease;
        left: 0;
        right: 0;
        opacity: 1;
        z-index: -1;
    }
</style>

<body>
    <section class="header">
        <img class="logo" height="120" width="280" src="images/skincarelogo.png" />

        <div class="nav">
            <a href="mainpage.php">HOME</a>
            <a href="shop.php">SHOP</a>
            <a href="mainpage.php#section-5">ABOUT US</a>
            <a href="mainpage.php#section-6">TESTIMONIALS</a>
            <a href="">CONTACT</a>
            
        </div>
        <!-- <div class="nav2">
            <a href="">MOISTURIZERS</a>
            <a href="">LIP BALMS</a>
            <a href="">CLEANSERS</a>
            <a href="">TONERS</a>
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