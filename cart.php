<?php
    session_start();
    //session_destroy();
    include "connection.php";
    // if($_SERVER["REQUEST_METHOD"]==$_POST)
    // {
        if(isset($_POST['addtocart']))
        { 
            
            // session_start();
            // //session_destroy();
            // if(!isset($_SESSION['cloggedin']) || $_SESSION['cloggedin']!= true)
            // {
            //     echo '<script>
            //         window.alert("You must log in first.");
            //         window.location.href="clogin.php";
            //         </script>';
            //     exit;
            // }

            $var = $_POST['product_id'];
            $query1 = "SELECT * FROM product where product_id='$var'";
            $result = mysqli_query($conn,$query1);
            $result2=mysqli_fetch_array($result);
            
            if(isset($_SESSION['cart']))
            {
                $_SESSION['qty']=$_POST['select'];
                $myitems= array_column($_SESSION['cart'],'product_id');
                //print_r($myitems);
                if(in_array($_POST['product_id'],$myitems))
                {
                    echo '<script>
                    window.alert("Item already added");
                    window.location.href="cshop.php";
                    </script>';
                }
                else
                {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('product_id'=>$var, 'price'=> $result2['price'], 'quantity'=>$_SESSION['qty']);
                echo '<script>
                    window.alert("Item added to cart");
                    window.location.href="cshop.php";
                    </script>';
                //print_r($_SESSION['cart']);
                }
            }
            else
            {
                $_SESSION['qty']=$_POST['select'];
                $_SESSION['cart'][0]= array('product_id'=>$var, 'price'=> $result2['price'], 'quantity'=>$_SESSION['qty']);
                echo '<script>
                    window.alert("Item added to cart");
                    window.location.href="cshop.php";
                    </script>';
               // print_r($_SESSION['cart']);
            }
        }
    //    if(isset($_POST['remove']))
    //    {
    //     foreach($_SESSION['cart'] as $key=> $value)
    //     {
    //         if($value['product_id']==$_POST['removeitem'])
    //         {
    //             unset($_SESSION['cart']);
    //             $_SESSION['cart']= array_values($_SESSION['cart']);
    //             echo '<script>
    //                 window.alert("Item removed from cart");
    //                 window.location.href="mycart.php";
    //                 </script>';
    //         }
    //     }
    //    }
        // $query1 = "SELECT * FROM product where product_id='$var'";
        // $result = mysqli_query($conn,$query1);
        // $result2=mysqli_fetch_array($result);
        //echo $var=$_GET['product_id'];
        //echo $var;
    // }
    // $_SESSION['cart'][0]=array('product_id'=>$result2['product_id'], 'price'=> $result2['price'] );
    // print_r($_SESSION['cart']);
                 
            
        
    
?>