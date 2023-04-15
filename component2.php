<?php
    function component2($product_id,$product_image,$product_name,$product_catergory,$brand_name,$short_desc,$long_desc,$table,$conn)
    {
        ?>
            <div class="container">
                <div class="row text-centre py-5">
                    <div class="col-md-5">
                        <div class="card" >
                            <img src="<?php echo $product_image ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
                                <h3><?php echo $product_name ?></h3>
                                <h5><?php echo $product_catergory ?></h5>
                                <p><?php echo $brand_name ?></p>
                                <p><?php echo $short_desc ?></p>
                                <p><?php echo $long_desc ?></p>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select quantity</option>
                                    <?php 
                                        $query="SELECT * FROM  $table" ; 
                                        $run = mysqli_query($conn,$query);
                                        $count =1;
                                        while($result=mysqli_fetch_array($run))
                                        {?>
                                            <option value="<?php echo $count ?>"><?php echo $count ?></option>
                                            <?php $count = $count+1;
                                        }
                                    ?>
                                </select>
                                <div class="row m-5">
                                    <div  >
                                        <button type="button" class="col-md-12 btn btn-outline-danger">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }

?>