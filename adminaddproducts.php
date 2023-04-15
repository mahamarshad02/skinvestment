<?php
    require "connection.php";
    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $product_name = $_POST['product_name'];
        $c_id = $_POST['c_id'];
        $c_name = $_POST['c_name'];
        $b_id = $_POST['b_id'];
        $b_name = $_POST['b_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $short_desc = $_POST['short_desc'];
        $long_desc = $_POST['long_desc'];
        $file = $_FILES['product_pic'];

        //print_r($file);

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        if($fileerror==0)
        {
            $destfile = 'upload/'.$filename;
            //echo "$destfile";
            move_uploaded_file($filepath,$destfile);
            $insertquery = "INSERT INTO product (product_name,c_id,c_name,b_id,b_name,price,quantity,short_desc,long_desc,product_pic) VALUES ('$product_name','$c_id','$c_name','$b_id','$b_name','$price','$quantity','$short_desc','$long_desc','$destfile')";
            mysqli_query($conn,$insertquery);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }

    .header {
        width: 100%;
        height: 120vh;
        background-image: linear-gradient(rgba(15, 9, 9, 1), rgba(247, 244, 244, 0.158)), url("./images/shopheader.jpg");
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
    th,
    td {
        padding: 5px 10px;
    }

    .b {
        height: 35px;
        width: 282px;
        border-radius: 10px;
    }

    .form {
        position: absolute;
        border-radius: 10px;
        background-color: white;
        margin-left: 480px;
        margin-top: -650px;
        width: 520px;
    }

    input[type="submit"] {
        border-radius: 6px;
        background-color: #ee9696;
        color: white;
        height: 35px;
        width: 475px;
    }
    
    input[type="submit"]:hover {
        background-color: #ee7488;
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
            <a class="anchor" href="login.php">LOGOUT</a>
        </div>
    </section>
    <div class="form">
            <form action="adminaddproducts.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th colspan="2">Enter product details</th>
                    </tr>
                    <tr>
                        <td>Product Name :</td>
                        <td><input class="b" for="product_name" type="text" name="product_name" placeholder="Enter Product Name"></td>
                    </tr>
                    <tr>
                        <td>Category ID :</td>
                        <td><input class="b" for="c_id" type="text" name="c_id" placeholder="Enter Category ID"></td>
                    </tr>
                    <tr>
                        <td>Category Name :</td>
                        <td><input class="b" for="c_name" type="text" name="c_name" placeholder="Enter Category Name"></td>
                    </tr>
                    <tr>
                        <td>Brand ID :</td>
                        <td><input class="b" for="b_id" type="text" name="b_id" placeholder="Enter Brand ID"></td>
                    </tr>
                    <tr>
                        <td>Brand Name :</td>
                        <td><input class="b" for="b_name" type="text" name="b_name" placeholder="Enter Brand Name"></td>
                    </tr>
                    <tr>
                        <td>Price :</td>
                        <td><input class="b" for="price" type="text" name="price" placeholder="Enter Price"></td>
                    </tr>
                    <tr>
                        <td>Quantity :</td>
                        <td><input class="b" for="quantity" type="text" name="quantity" placeholder="Enter Quantity"></td>
                    </tr>
                    <tr>
                        <td>Short Description :</td>
                        <td><input class="b" for="short_desc" type="text" name="short_desc" placeholder="Enter Short Description"></td>
                    </tr>
                    <tr>
                        <td><label for="long_desc">Long Description :</label></td>
                        <td><input class="b" for="long_desc" type="text" name="long_desc" placeholder="Enter Long Description"></td>
                    </tr>
                    <tr>
                        <td>Upload Image</td>
                        <td><input for="product_pic" type="file" name="product_pic" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input name="submit" type="submit" value="Add Product"></td>
                    </tr>
                </table>
            </form>
        </div>

</body>

</html>