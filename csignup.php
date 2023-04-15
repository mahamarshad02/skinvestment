<?php
    session_start();
    include "connection.php";
    $showalert=false;
    $showerror=false;
    if ($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $username=$_POST["c_username"];
        $password=$_POST["c_password"];
        $cpassword=$_POST["c_cpassword"];
        $exists=false;
        if($cpassword==$cpassword && $exists==false)
        {
            $query= "INSERT INTO `customer` (`cus_username`, `cus_password`, `cus_date`) VALUES ('$username', '$password', current_timestamp() )";
            $result = mysqli_query($conn, $query);
            if($result)
            {
                $showalert=true;
            }
        }
        else if ($password != $cpassword)
        {
            $showerror=true;
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
    <title>Signup</title>
</head>
<style>
    * {
        overflow-x: hidden;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background-image: url("./images/loginbg.jpg");
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .myadminform {
        background-color: white;
        opacity: 0.6;
        width: 40%;
        height: 600px;
        /* margin-left: 480px;
        margin-top: 100px; */
        border-radius: 10px;
        /* position: relative; */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin-top: 3%;
    }

    .a {
        width: 90%;
        height: 40px;
        margin-bottom: 10px;
        border-radius: 6px;
    }

    .send{
        transition: all 0.01s ease-in-out ;
    }
    .send:hover{
        background-color: #ee9696;
        opacity: 1;
    }
    .formimg{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    img {
        position: absolute;
        border-radius: 50px;
        height: 100px;
        width: 100px;
        margin-top: -10px;
    }
    /* .formcontent{
        display: flex;
        align-items: center;
        justify-content: center;
    } */
    #adminloginform{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
    }
    @media screen and (max-width:900px) {
        .myadminform{
            width: 80%;
        }
    }
    @media screen and (max-width:401px) {

        #adminloginform input{
            width: 77%;
        }
    }
</style>

<body>
    <?php
    if($showalert)
    {
        echo'<p id="showalert" style="background-color : #e4fccc;">Your account is now created and you can now login.</p>';
    }
    if($showerror)
    {
        echo'<p id="showalert" style="background-color : #fb6767;">Passwords do not match.</p>';
    }
    ?>
    
    <div class="myadminform">
        <div class="formimg">
            <img src="./images/loginicon.jpg" alt="">
        </div>
        
        <div class="formcontent">
            <h1 style="text-align:center; margin-top:55px;">CUSTOMER SIGN UP</h1>
            <form id="adminloginform" action="csignup.php" method="post">
                <p style="margin-block-end: 0em;">Customer Username</p>
                <input class="a" for="username" type="text" name="c_username" placeholder="Enter Username">
                <p style="margin-block-end: 0em;">Password</p>
                <input class="a" for="password" type="password" name="c_password" placeholder="Enter Password">
                <p style="margin-block-end: 0em;">Confirm Password</p>
                <input class="a" for="cpassword" type="password" name="c_cpassword" placeholder="Confirm Password">
                <p style="margin-block-start: 0em;">Make sure to enter same password.</p>
                <input class="a send" type="submit" value="Signup"><br>
                <p>Already have an account? <a href="clogin.php">Login</a></p>
            </form>
        </div>
        
    </div>

    
</body>

</html>