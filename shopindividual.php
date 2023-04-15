<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }
</style>
<body>
    
</body>
</html>

<?php
    include "connection.php";
    
    if(isset($_POST['add'])){
        $var = $_POST['product_id'];
    }
    $query1 = "SELECT * FROM product where product_id='$var'";
    $result = mysqli_query($conn,$query1);
    $result2=mysqli_fetch_array($result);
    
    ?>
    <div class="container">
                <div class="row text-centre py-5">
                    <div class="col-md-5">
                        <div class="card" >
                            <img src="<?php echo $result2['product_pic'] ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <input type="hidden" name="product_id" value="<?php echo $result2['product_id'] ?>">
                                <h3><?php echo $result2['product_name'] ?></h3>
                                <h5><?php echo $result2['c_name'] ?></h5>
                                <p><?php echo $result2['b_name'] ?></p>
                                <p><?php echo $result2['short_desc'] ?></p>
                                <p><?php echo $result2['long_desc'] ?></p>
                                <form action="cart.php" method="post">
                                <select name="select" class="form-select" aria-label="Default select example">
                                    <option selected>Select quantity</option>
                                    <?php 
                                        $query="SELECT * FROM  product where product_id='$var'" ; 
                                        $run = mysqli_query($conn,$query);
                                        $count =1;
                                        $result=mysqli_fetch_array($run);
                                        while($count <= $result['quantity'])
                                        {
                                            ?>
                                            <option value="<?php echo $count ?>"><?php echo $count ?></option>
                                            <?php $count = $count+1;
                                        }
                                    ?>
                                </select>
                                <div class="row m-5">
                                    <div>
                                        
                                        <input type="hidden" name="product_id" value="<?php echo $result2['product_id'] ?>">
                                        <input type="submit" name="addtocart" class="col-md-12 btn btn-outline-danger" value="Add to Cart">
                                        
                                </form>
                                        <!-- <button type="button" class="col-md-12 btn btn-outline-danger">Add to Cart</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
    

?>