<?php
    require "connection.php";

    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true)
    {
        header('location:login.php');
        exit;
    }


    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $category_name = $_POST['category_name'];
        $insertquery = "INSERT INTO category (category_name) VALUES ('$category_name')";
        mysqli_query($conn,$insertquery);
        header('location: adminaddcategories.php');
        
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }

    .header {
        width: 100%;
        height: 200vh;
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
        margin-top: -1200px;
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
    .myth, .mytd{
        padding: 15px 10px;
    }
    .myth{
        background-color: #ee9696;
        color: white;
    }
    .mytd{
        background-color: #ddd;
    }
    .update:hover, .delete:hover {
        background-color:#ee7488;
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
        <form action="adminaddcategories.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <th colspan="2">Enter Category name</th>
                </tr>
                <tr>
                    <td>Category Name :</td>
                    <td><input class="b" for="category_name" type="text" name="category_name" placeholder="Enter Category Name"></td>
                </tr>
                <tr>
                    <td colspan="2"><input name="submit" type="submit" value="Add Category"></td>
                </tr>
            </table>
        </form>
    </div>
    <div style="position:absolute; margin-top: -1010px; margin-left: 550px;">
        <table>
            <tr>
                <th class="myth">Category ID</th>
                <th class="myth">Category Name</th>
                <th class="myth">Delete</th>
               
            </tr>
            <?php
            $selectquery= "SELECT * FROM category";
            $query= mysqli_query($conn,$selectquery);
            while($result=mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td class="mytd"><?php echo $result['category_id'] ?></td>
                    <td class="mytd"><?php echo $result['category_name'] ?></td>
                    <td class="mytd"><a href="categorydelete.php?delete=<?php echo $result['category_id'] ?>"><button class="delete"><i style="font-size : 36px; color:gray;" class="fa fa-trash"></i></button></a></td>
                    
                </tr>
            <?php ; }
            
            ?>
        </table>
    </div>

</body>

</html>