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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    a{
        position: absolute;
        margin-top: 8%
    }
    input[type="submit"] {
        border-radius: 6px;
        background-color: #ee9696;
        color: white;
        height: 35px;
        width: 250px;
    }
    
    input[type="submit"]:hover {
        background-color: #ee7488;
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
        
        <div class="row">
            <div class="col-lg-12 text-center border rounded my-5" style="color:white; background-color:#ee9696">
            <img src="images/skincarelogo.png" style="width: 300px;" alt="">
                <h1>SKIN QUIZ</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 border rounded" style="color:gray; background-color:#ddd">
                <form action="result.php" method="post">
                    <div class="col-12 text-center">
                    <h5>What is your skin type?</h5>
                    <input class="form-check-input" type="radio" value="oily" name="skintype" id="oily">
                    <label class="form-check-label" for="oily">Oily</label>
                    <input class="form-check-input" type="radio" value="dry" name="skintype" id="dry">
                    <label class="form-check-label" for="dry">Dry</label>
                    </div>
                    
                    <hr>

                    <div class="col-12 text-center">
                    <h5>Do you have acne-prone skin?</h5>
                    <input class="form-check-input" type="radio" value="yes" name="acne" id="acne">
                    <label class="form-check-label" for="acne">Yes</label>
                    <input class="form-check-input" type="radio" value="no" name="acne" id="noacne">
                    <label class="form-check-label" for="noacne">No</label>
                    </div>

                    <hr>

                    <div class="col-12 text-center">
                    <h5>Is your skin sensitive?</h5>
                    <input class="form-check-input" type="radio" value="yes" name="sensitive" id="sensitive">
                    <label class="form-check-label" for="sensitive">Yes</label>
                    <input class="form-check-input" type="radio"value="no" name="sensitive" id="notsensitive">
                    <label class="form-check-label" for="notsensitive">No</label>
                    </div>

                    <hr>

                    <div class="col-12 text-center">
                    <h5>Is your aged or wrinkled?</h5>
                    <input class="form-check-input" type="radio" value="yes" name="aged" id="aged">
                    <label class="form-check-label" for="aged">Yes</label>
                    <input class="form-check-input" type="radio" value="no" name="aged" id="notaged">
                    <label class="form-check-label" for="notaged">No</label>
                    </div>

                    <hr>

                    <div class="col-12 text-center">
                    <h5>Do you have pigmentation?</h5>
                    <input class="form-check-input" type="radio" value="yes" name="pigmentation" id="pigmentation">
                    <label class="form-check-label" for="pigmentation">Yes</label>
                    <input class="form-check-input" type="radio" value="no" name="pigmentation" id="nopigmentation">
                    <label class="form-check-label" for="nopigmentation">No</label>
                    </div>

                    <hr>

                    <div class="col-12 text-center">
                    <h5>Do you have dry lips?</h5>
                    <input class="form-check-input" type="radio" value="yes" name="drylips" id="drylips">
                    <label class="form-check-label" for="drylips">Yes</label>
                    <input class="form-check-input" type="radio" value="no" name="drylips" id="nodrylips">
                    <label class="form-check-label" for="nodrylips">No</label>
                    </div>

                    <hr>

                    <div class="col-12 text-center">
                    <h5>Are your pores enlarged?</h5>
                    <input class="form-check-input" type="radio" value="yes" name="pores" id="pores">
                    <label class="form-check-label" for="pores">Yes</label>
                    <input class="form-check-input" type="radio" value="no" name="pores" id="nopores">
                    <label class="form-check-label" for="nopores">No</label>
                    </div>

                    <hr>

                    <div class="col-12 text-center">
                    <h5>Do you use sun screen?</h5>
                    <input class="form-check-input" type="radio" value="yes" name="ss" id="ss">
                    <label class="form-check-label" for="ss">Yes</label>
                    <input class="form-check-input" type="radio" value="no" name="ss" id="noss">
                    <label class="form-check-label" for="noss">No</label>
                    </div>

                    <hr>
                    <div class="row text-center">
                        <div class="col-3"></div>
                        <div class="col-6 mb-5"><input type="submit" name="sub" value="GET RESULTS!"></div>

                    </div>
                    
                    
                </form>
            </div>
            <?php
                
            ?>
        </div>
    </div>

</body>
</html>