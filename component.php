
<?php
    include "connection.php";
    function component($image,$product_name, $price, $product_id, $link)
    { 
        ?>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <div class="card shadow" style="width: 16rem;">
                <img style="height:250px ; width: 250px;" src="<?php echo $image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product_name?></h5>
                    <p class="card-text">Rs. <?php echo $price ?></p>
                    <!-- <button onclick="click()" name="add" class="btn btn-outline-danger">View More</button> -->
                    <form action="shopindividual.php" method="post">
                        <!-- <input type="submit" class="btn btn-outline-danger" value="View More" name="submit" id=""> -->
                        <input type="text" name="product_id" value="<?php echo $product_id ?>">
                        <button  name="add" class="btn btn-outline-danger"><a href="<?php echo $link ?>" style="text-decoration:none ;color: black;">View More</a></button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        
    }

?>