<?php
    session_start();
     include "connection.php";
     include "component.php"
    //  $userdata = check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Result</title>
</head>
<style>
     * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }
    a{
        position: absolute;
        margin-top: 8%
    }
</style>
<body>
    <div class="container">
        <?php
            if(!isset($_SESSION['cloggedin']) || $_SESSION['cloggedin']!= true)
            {
                echo'<a href="test2.php"><i class="fa fa-home" style="font-size:36px; color:#C93851;"></i></a>';
            }
            else{
                echo'<a href="header.php"><i class="fa fa-home" style="font-size:36px; color:#C93851;"></i></a>';
            }
        ?>
        <a href="test2.php"><i class="fa fa-home" style="font-size:36px; color:#C93851;"></i></a>
        <div class="row">
            <div class="col-lg-12 text-center border rounded my-5" style="color:white; background-color:#ee9696">
                
                <img src="images/skincarelogo.png" style="width:300px"alt="">
                <h1>SKIN QUIZ RESULTS</h1>
            </div>
        </div>
        <?php
        include "connection.php";
        if(isset($_POST['sub']))
        {
            if($_POST['skintype']=='oily')
            {
                ?> 
                <div class="row">
                    <h3 style="color:gray ;">Products we recommend for oily skin are :</h3>
                </div>
                <div class="container">
                    <div class="row text-centre py-5">
                    <?php
                    $query="SELECT * FROM product WHERE keyword like '%oily%'";
                    $result=mysqli_query($conn,$query);
                    while($run=mysqli_fetch_array($result))
                    {
                    ?>
                    
                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                            <div class="card shadow" style="width: 16rem;">
                                <img style="height:250px ; width: 250px;" src="<?php echo $run['product_pic'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $run['product_name']?></h5>
                                    <p style="color: gray ;" class="card-text"><?php echo $run['b_name'] ?></p>
                                    <p class="card-text"><?php echo $run['short_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                    <?php
                
                
            }

            if($_POST['skintype']=='dry')
            {
                ?> 
                <div class="row">
                    <h3 style="color:gray ;">Products we recommend for dry skin are :</h3>
                </div>
                <div class="container">
                    <div class="row text-centre py-5">
                    <?php
                    $query="SELECT * FROM product WHERE keyword like '%dry%' OR keyword like '%hydrate%'";
                    $result=mysqli_query($conn,$query);
                    while($run=mysqli_fetch_array($result))
                    {
                    ?>
                    
                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                            <div class="card shadow" style="width: 16rem;">
                                <img style="height:250px ; width: 250px;" src="<?php echo $run['product_pic'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $run['product_name']?></h5>
                                    <p style="color: gray ;" class="card-text"><?php echo $run['b_name'] ?></p>
                                    <p class="card-text"><?php echo $run['short_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                    <?php
                
                
            }

            if($_POST['acne']=='yes')
            {
                ?> 
                <div class="row">
                    <h3 style="color:gray ;">Products we recommend for acne-prone skin are :</h3>
                </div>
                <div class="container">
                    <div class="row text-centre py-5">
                    <?php
                    $query="SELECT * FROM product WHERE keyword like '%acne%'";
                    $result=mysqli_query($conn,$query);
                    while($run=mysqli_fetch_array($result))
                    {
                    ?>
                    
                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                            <div class="card shadow" style="width: 16rem;">
                                <img style="height:250px ; width: 250px;" src="<?php echo $run['product_pic'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $run['product_name']?></h5>
                                    <p style="color: gray ;" class="card-text"><?php echo $run['b_name'] ?></p>
                                    <p class="card-text"><?php echo $run['short_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                    <?php
                
                
            }
            else{
                ?> <h3 style="color:gray ;">Good thing you don't have acne-prone skin !</h3><?php
            }
            

            if($_POST['sensitive']=='yes')
            {
                ?> 
                <div class="row">
                    <h3 style="color:gray ;">Products we recommend for sensitive skin are :</h3>
                </div>
                <div class="container">
                    <div class="row text-centre py-5">
                    <?php
                    $query="SELECT * FROM product WHERE keyword like '%sensitive%'";
                    $result=mysqli_query($conn,$query);
                    while($run=mysqli_fetch_array($result))
                    {
                    ?>
                    
                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                            <div class="card shadow" style="width: 16rem;">
                                <img style="height:250px ; width: 250px;" src="<?php echo $run['product_pic'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $run['product_name']?></h5>
                                    <p style="color: gray ;" class="card-text"><?php echo $run['b_name'] ?></p>
                                    <p class="card-text"><?php echo $run['short_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                    <?php
                
                
            }
            else{
                ?> <h3 style="color:gray ;">Good thing you don't have sensitive skin !</h3><?php
            }

            if($_POST['aged']=='yes')
            {
                ?> 
                <div class="row">
                    <h3 style="color:gray ;">Products we recommend for aged skin are :</h3>
                </div>
                <div class="container">
                    <div class="row text-centre py-5">
                    <?php
                    $query="SELECT * FROM product WHERE keyword like '%aged%'";
                    $result=mysqli_query($conn,$query);
                    while($run=mysqli_fetch_array($result))
                    {
                    ?>
                    
                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                            <div class="card shadow" style="width: 16rem;">
                                <img style="height:250px ; width: 250px;" src="<?php echo $run['product_pic'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $run['product_name']?></h5>
                                    <p style="color: gray ;" class="card-text"><?php echo $run['b_name'] ?></p>
                                    <p class="card-text"><?php echo $run['short_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                    <?php
                
                
            }
            else{
                ?> <h3 style="color:gray ;">Good thing you don't have aged skin !</h3><?php
            }

            if($_POST['pigmentation']=='yes')
            {
                ?> 
                <div class="row">
                    <h3 style="color:gray ;">Products we recommend for pigmented skin are :</h3>
                </div>
                <div class="container">
                    <div class="row text-centre py-5">
                    <?php
                    $query="SELECT * FROM product WHERE keyword like '%pigmentation%'";
                    $result=mysqli_query($conn,$query);
                    while($run=mysqli_fetch_array($result))
                    {
                    ?>
                    
                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                            <div class="card shadow" style="width: 16rem;">
                                <img style="height:250px ; width: 250px;" src="<?php echo $run['product_pic'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $run['product_name']?></h5>
                                    <p style="color: gray ;" class="card-text"><?php echo $run['b_name'] ?></p>
                                    <p class="card-text"><?php echo $run['short_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                    <?php
                
                
            }
            else{
                ?> <h3 style="color:gray ;">Good thing you don't have pigmented skin !</h3><?php
            }

            if($_POST['drylips']=='yes')
            {
                ?> 
                <div class="row">
                    <h3 style="color:gray ;">Products we recommend for dry lips are :</h3>
                </div>
                <div class="container">
                    <div class="row text-centre py-5">
                    <?php
                    $query="SELECT * FROM product WHERE keyword like '%drylips%'";
                    $result=mysqli_query($conn,$query);
                    while($run=mysqli_fetch_array($result))
                    {
                    ?>
                    
                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                            <div class="card shadow" style="width: 16rem;">
                                <img style="height:250px ; width: 250px;" src="<?php echo $run['product_pic'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $run['product_name']?></h5>
                                    <p style="color: gray ;" class="card-text"><?php echo $run['b_name'] ?></p>
                                    <p class="card-text"><?php echo $run['short_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                    <?php
                
                
            }
            else{
                ?> <h3 style="color:gray ;">Good thing you don't have dry lips !</h3><?php
            }

            if($_POST['pores']=='yes')
            {
                ?> 
                <div class="row">
                    <h3 style="color:gray ;">Products we recommend for enlarged pores are :</h3>
                </div>
                <div class="container">
                    <div class="row text-centre py-5">
                    <?php
                    $query="SELECT * FROM product WHERE keyword like '%pores%'";
                    $result=mysqli_query($conn,$query);
                    while($run=mysqli_fetch_array($result))
                    {
                    ?>
                    
                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                            <div class="card shadow" style="width: 16rem;">
                                <img style="height:250px ; width: 250px;" src="<?php echo $run['product_pic'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $run['product_name']?></h5>
                                    <p style="color: gray ;" class="card-text"><?php echo $run['b_name'] ?></p>
                                    <p class="card-text"><?php echo $run['short_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                    <?php
                
                
            }
            else{
                ?> <h3 style="color:gray ;">Good thing you don't have enlarged pores on skin !</h3><?php
            }

            if($_POST['ss']=='no')
            {
                ?> 
                <div class="row">
                    <h3 style="color:gray ;">Products we recommend if you're looking for SPF are :</h3>
                </div>
                <div class="container">
                    <div class="row text-centre py-5">
                    <?php
                    $query="SELECT * FROM product WHERE keyword like '%spf%'";
                    $result=mysqli_query($conn,$query);
                    while($run=mysqli_fetch_array($result))
                    {
                    ?>
                    
                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                            <div class="card shadow" style="width: 16rem;">
                                <img style="height:250px ; width: 250px;" src="<?php echo $run['product_pic'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $run['product_name']?></h5>
                                    <p style="color: gray ;" class="card-text"><?php echo $run['b_name'] ?></p>
                                    <p class="card-text"><?php echo $run['short_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                    <?php
                
                
            }
            else{
                ?> <h3 style="color:gray ;">Good thing you use SPF !</h3><?php
            }
        }
        ?>
    </div>
</body>
</html>