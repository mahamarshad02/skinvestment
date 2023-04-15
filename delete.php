<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php
    include "connection.php";
    //deleting products from database
    if (isset($_GET['delete'])) 
    {
        $id = $_GET['delete'];
        $deletequery = "DELETE FROM product WHERE product.product_id = $id ";
        $result = mysqli_query($conn, $deletequery);
        if ($result) 
        {
            header('location: adminupdateproducts.php');
            ?> <script>
                window.alert("One record has been deleted.");
            </script> <?php
        }
    }
    