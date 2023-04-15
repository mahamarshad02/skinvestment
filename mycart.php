<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }
    .checkoutform{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    input[type="submit"] {
        border-radius: 6px;
        background-color: #ee9696;
        color: white;
        height: 35px;
        width: 300px;
    }
    
    input[type="submit"]:hover {
        background-color: #ee7488;
    }
    .badge:after{
        content:attr(value);
        font-size:12px;
        color: white;
        background:#ee9696;
        border-radius:50%;
        padding: 0 5px;
        position:relative;
        left:-8px;
        top:-10px;
        opacity:0.9;
    }
    @media (max-width: 767px) {
    .checkoutform table {
        width: 100%;
    }
    .checkoutform table td:first-child {
        width: 40%;
    }
    .checkoutform table td:last-child {
        width: 60%;
    }
    .checkoutform input[type="text"] {
        width: 100%;
    }
}

</style>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded my-5" style="color:white; background-color:#ee9696">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <form action="">
                <table class="table">
                    <thead class="text-center" style="color:white; background-color:#ee9696">
                        <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        
                        </tr>
                    </thead>
                    <tbody class="text-center" style="background-color:#ddd ; color :gray;">
                    <?php
                        $total=0;
                        if(isset($_SESSION['cart']))
                        {
                            $num=1;
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                
                                //print_r($value);
                                $abc= $value['product_id'];
                                include "connection.php";
                                $query1 = "SELECT * FROM product where product_id='$abc'";
                                $result = mysqli_query($conn,$query1);
                                $result2=mysqli_fetch_array($result);
                                //$total = $total + $result2['price'];
                                ?>
                                <tr>
                                    <td><?php echo $num; ?></td>
                                    <td><?php echo $result2['product_name']; ?></td>
                                    <td><?php echo $result2['price']; ?></td>
                                    
                                    <td><?php 
                                    
                                        echo $_SESSION['qty'];
                                    
                                    ?></td>
                                    <td><?php echo $subtotal= $_SESSION['qty']*$result2['price']; ?></td>
                                    
                                </tr>
                                <?php
                                $num=$num+1;
                                $total = $total+$subtotal;
                            
                            }

                        }
                        

                    ?>
                    </tbody>
                    </table>
                    <input type="submit" name="caltotal" value="CALCULATE TOTAL">
                </form>
            </div>
            <?php if(isset($_GET['caltotal']))
                    {
                        ?>
                        <div class="col-lg-3">
                            <div style="background-color:#ddd ; color :gray;" class="border rounded p-4">
                                <h3>Total:</h3>
                                <h5 class="text-right"><?php echo $total; ?></h5>
                            </div>
                            <form action="mycart.php" method="post">
                            <input type="submit" name="checkout" value="PROCEED TO CHECKOUT">
                            </form>
                        </div>
                        <?php
                    }?>
            
        </div>
        <div class="row py-5">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <?php if(isset($_POST['checkout']))
                {
            ?>
            <div class="checkoutform">
                <form action="invoice.php" method="post">
                    <table class="table">
                        <thead class="text-center" style="background-color:#ee9696 ; color:white;">
                            <tr>
                                <th colspan="2">CUSTOMER DETAILS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First Name:</td>
                                <td><input class="form-control" type="text" name="fn"></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input class="form-control" type="text" name="ln"></td>
                            </tr>
                            <tr>
                                <td>Phone No:</td>
                                <td><input class="form-control" type="text" name="pn"></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><input class="form-control" type="text" name="add"></td>
                            </tr>
                            <tr>
                                <td>Postal Code:</td>
                                <td><input class="form-control" type="text" name="pc"></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><input class="form-control" type="text" name="city"></td>
                            </tr>
                            <tr class="text-center">
                                <input type="hidden" name="a" value="<?php echo $result2['product_name']; ?>">
                                <input type="hidden" name="b" value="<?php echo $_SESSION['qty']; ?>">
                                <input type="hidden" name="c" value="<?php echo $result2['price']; ?>">
                                <input type="hidden" name="d" value="<?php echo $subtotal= $_SESSION['qty']*$result2['price']; ?>">
                                <input type="hidden" name="e" value="<?php echo $count=count($_SESSION['cart']); ?>">
                                <td colspan="2"><input class="btn btn-primary" type="submit" name="invoice" value="GENERATE INVOICE"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <?php } ?>
        </div>
        <div class="col-lg-2"></div>
</div>

    </div>
</body>
</html>