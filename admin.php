<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true)
    {
        header('location:login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <title>admin</title>
</head>

<style>
    * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }

    .header {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(15, 9, 9, 1), rgba(247, 244, 244, 0.158)), url("./images/skincare17.jpg");
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

    .anchor {
        position: relative;
        left: 440px;
        padding: 10px 15px;
        text-decoration: none;
        color: white;
        transition: ease-out 0.3s;
        z-index: 1;
    }

    .anchor:hover {
        /* background-color: #ee9696; */
        cursor: pointer;
    }

    .anchor:before {
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

    .anchor:hover:before {
        transition: 0.5s all ease;
        left: 0;
        right: 0;
        opacity: 1;
        z-index: -1;
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
    .anchor:hover {
        color: white;
    }

    .sec-a {
        background-color: #ee9696;
        height: 600px;
    }

    .text-baba {
        display: inline-block;
        font-size: 50px;
        color: white;
        margin-top: 50px;
        margin-left: 520px;
        letter-spacing: 0.5rem;
    }

    .main-div {
        background-color: #ee9696;
        width: 70%;
        height: 400px;
        position: absolute;
        margin-left: 200px;
        background-image: url("./images/slider1.jpg");
        background-size: 100% 100%;
        box-shadow: 1px 2px 10px white;
        animation: slider 10s infinite linear;
    }


    footer{
    position: absolute;
    bottom: 0;
    height : 100px;
    width: 100%;
}

.leftbox {
    float:left; 
    background:black;
    color: white;
    width:25%;
    height:280px;
}
.middlebox{
    float:left; 
    background:black;
    width:50%;
    height:280px;
}
.center {
    position: relative;
    display: block;
    margin-left: auto;
    margin-right: auto;
    top: 25%;
    width: 50%;
  }
.rightbox{
    float:right;
    background:black;
    color: white;
    width:25%;
    height:280px;
}
.rightbox h3{
    /* position: relative; */
    margin-right: 2%;
}
.jj{
    margin-left: 10px;
}
</style>

<body>
    <section class="header">
        <img class="logo" height="120" width="280" src="./images/skincarelogo.png" />

        <div class="nav">
            <a class="anchor" href="admin.php">HOME</a>
            <span style="left :450px; margin-top:0px;" class="dropdown">
                <button class="dropbtn">PRODUCTS</button>
                <div class="dropdown-content">
                    <a href="adminaddproducts.php">Add Products</a>
                    <a href="adminupdateproducts.php">Delete Products</a>
                </div>
            </span>
            <a class="anchor" href="adminaddcategories.php">CATEGORIES</a>
            <a class="anchor" href="">MY PROFILE</a>
            <a class="anchor" href="logout.php">LOGOUT</a>
        </div>

    </section>

    <section class="sec-a">
        <h1 class="text-baba">OUR BRANDS</h1>
        <div class="main-div">

        </div>
    </section>

    <section class="footer">
        <div class = "boxes">
            <div class = "leftbox">
                <h3 class="jj">CONTACT DETAILS</h3>
                <p class="jj">0333-9392929</p>
                <p class="jj">contact@info.com</p>
                <p class="jj">Copyright © 2022 Parfums de Luxe | Powered by Parfums de Luxe</p>
            </div> 
            <div class = "middlebox">
                <img src="./images/skincarelogo.png" class="center"/>
            </div>
            <div class="rightbox">
                <h3 class="jj">ADDRESS</h3>
                <p class="jj">3rd floor, Lucky one mall, Karachi, Pakistan.</p>
            </div>
        </div>
    </section>
</body>

</html>