<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <!-- ===========BOOTSTRAP============ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- ===========SWIPER JS============ -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.3.5/swiper-bundle.min.css" integrity="sha512-cSswotORLwhq0E9mRjme7FmZhAzRdnZQJpOdaZFZDVPwUXM2kTsS97nzH7EKd3eWMEbrPqBLAT0nPKBf0qEAcg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- =========ICONS============== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
        overflow-x: hidden;
    }

    /* ==============SECTION HEADER=============== */
    .header {
        background-image: linear-gradient(rgba(15, 9, 9, 1), rgba(247, 244, 244, 0.158)), url("./images/skincare17.jpg");
        height: 100vh;
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .logo{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .logo img{
        height: 100px;
    }

    .navbar{
        z-index: 10000;
        transition: all 0.1s ease-in-out;
        height: auto;
    }
    .navbar-nav a{
        position: relative;
        color: white;
        border-radius: 10px;
    }
    .navbar-nav a:hover{
        color: white;
        background-color: #f78094;
        box-shadow: #f78094;
    }
    badge:after{
        content:attr(value);
        font-size:15px;
        color: white;
        background:#ee9696;
        border-radius:50%;
        padding: 0 5px;
        position:relative;
        left:-8px;
        top:-10px;
        opacity:0.9;
    }
    .text-a {
        color: white;
        position: absolute;
        padding-left: 5%;
        padding-top: 5%;
        
    }
    .text-a1 {
        font-weight: bolder;
        font-size: 75px;
    }
    .text-a2{
        font-size: 20px;
    }

    /* =================SECTION-2===================== */
    #section-2{
        height: 100%;
        background-image: linear-gradient(rgb(219, 142, 137),rgb(247, 244, 244));
    }
    .text-b{
        padding-top: 5%;
        text-align: center;
        font-weight: bolder;
    }
    .text-b2{
        font-size: 50px;
    }
    .cards{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 30px;
    }
    .mycard{
        margin-top: 50px;
        margin-bottom: 50px;
        background-color: #C93851;
        height: 300px;
        width: 250px;
        box-shadow: 0 7px 20px 5px #00000088;
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }
    .text-b4{
        color: gray;
    }
    .text-b5{
        color: white;
    }

    /* ================SECTION-3================ */
    .section-3 {
        width: 100%;
        height: 100vh;
        background-color: #ee9696;
        display: grid;
        place-items: center;
    }

    .text-baba {
        display: inline-block;
        font-size: 50px;
        color: black;
        margin-top: 50px;
        margin-left: 520px;
        letter-spacing: 0.5rem;
    }

    .imgslider {
        background-color: #ee9696;
        width: 70%;
        height: 400px;
        position: absolute;
        margin-left: 4%;
        background-image: url("./images/slider1.jpg");
        background-size: 100% 100%;
        box-shadow: 1px 2px 10px white;
        animation: slider 10s infinite linear;
    }

    @keyframes slider {
        10% {
            background-image: url(./images/slider1.jpg);
        }

        30% {
            background-image: url(./images/slider2.jpg);
        }

        50% {
            background-image: url(./images/slider3.jpg);
        }

        70% {
            background-image: url(./images/slider4.png);
        }

        90% {
            background-image: url(./images/slider5.jpg);
        }
    }
    
    /* ================SECTION-4================ */
    #section-4{
        margin-top: 0%;
        background-image: linear-gradient(rgba(236, 145, 136, 0.726),rgba(247, 244, 244, 0.158)),url(./images/about3.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        width:100%;
        height:120vh;
    }
    .container{
        background-color: rgba(255, 255, 255, 0.705);
        border-radius: 15px;
        box-shadow: 0 7px 20px 5px #00000088;
        width: 50%;
        margin-bottom: 5%;
    }
    .text-d1{
        color: white;
        font-weight: bolder;
        letter-spacing: 0.3rem;
        padding-top: 8%;
        padding-bottom: 2%;
    }
    .text-d2{
        color: #C93851;
        font-weight: bolder;
        padding-top: 3%;
    }
    .text-d3{
        font-weight: bolder;
        padding-top: 3%;
    }

    /* ================SECTION-5================ */
    #section-5{
        background-color: #ee9696;
    }
    .testimonials{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 30px;
    }
    .test{
        height: 200px;
        width: 200px;
        background-color: white;
        box-shadow: 0 7px 20px 5px #00000088;
        text-align: center;
    }

    /* ============SECTION-6================= */
    .section-6{
        position: relative;
        width: 100%;
        height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #ee9696;
    }
    .swiper-container {
      width: 100%;
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 400px;
      box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
      filter: blur(4px);
    }
    .swiper-slide-active{
        filter: blur(0px);
        
    }
    .testimonialBox{
        width: 100%;
        position: relative;
        padding: 40px;
        background-color: #C93851;
    }
    .testimonialBox .quote{
        position: absolute;
        top: 20px;
        right: 30px;
    }
    .swiper-container-3d .swiper-slide-shadow-left,
    .swiper-container-3d .swiper-slide-shadow-left{
        background-image: none;
    }

    /* ==============FOOTER=========================== */
    .section-7{
        display: flex;
        justify-content: flex-end;
        align-items: flex-end;
        
        
    }
    .footer{
        position: relative;
        width: 100%;
        background-color: #C93851;
        min-height: 100px;
        padding: 20px 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .footer .socialicon, .footer .menu{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0;
        flex-wrap: wrap;
    }
    .footer .socialicon li, 
    .footer .menu li{
        list-style: none;
    }
    .footer .socialicon li a{
        font-size: 2em;
        color: white;
        margin: 0 20px;
        display: inline-block;
        transition: 0.5s;
    }
    .footer .socialicon li a:hover{
        transform: translateY(-10px);
    }
    .footer .menu li a{
        font-size: 1.2em;
        font-weight: bold;
        color: white;
        margin: 0 20px;
        display: inline-block;
        transition: 0.5s;
        text-decoration: none;
        opacity: 0.7;
    }
    .footer .menu li a:hover{
        opacity: 1;
    }

    /* ----------MEDIA QUERIES FOR NAVBAR-------------- */
    @media screen and (min-width:1400px){
        .container-fluid{
            padding-left: 25rem;
        }
        .navbar li{
            padding: 15px;
        }
    }
    @media screen and (min-width:1300px) and (max-width:1399px) {
        .navbar li{
            padding: 15px;
        }
        .container-fluid{
            padding-left: 15rem;
        }
    }
    @media screen and (max-width:1299px)and ( min-width: 991px)  {
        .navbar li{
            padding: 9px;
        }
        .container-fluid{
            padding-left: 12rem;
        }
    }
    /* ----------MEDIA QUERIES FOR text-a1-------------- */
    @media screen and ( max-width: 660px){
        .text-a1{
            font-size: 40px;
        }
        .text-a2{
            font-size: 17px;
        }
        .text-b2{
            font-size: 40px;
        }
    }
    /* ----------MEDIA QUERIES FOR ABOUT US-------------- */
    @media screen and ( max-width: 685px){
        .container{
            width: 90%;
        }
    }
</style>

<body>
    <!-- ===========SECTION HEADER============= -->
    <section class="header">
         <div class="logo">
            <img src="./images/skincarelogo.png" alt="">
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#header">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cshop.php">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-4">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-5">TESTIMONIALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">SKIN QUIZ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clogout.php">LOGOUT</a>
                    </li>
                    <li>
                        <a href="mycart.php"><i style="font-size:2rem;"class="fa fa-shopping-cart"></i></a>
                    </li>
                    
                </ul>
                </div>
            </div>
        </nav>
            
        <div class="text-a">
            <!-- <p class="text-a1">SELF CARE STARTS WITH SKINCARE.</p> -->
            <h1 class="text-a1">SKINVESTMENT</h1>
            <h3 class="text-a2">noun.</h3>
            <p class="text-a2">The action or process of investing time and money with the </p>
            <p class="text-a2">expectation of achieving healthy, youthful, glowing skin.</p>
        </div>
    </section>

    <!-- ===========SECTION 2============= -->
    <section id="section-2">
        <div class="text-b">
            <p style="color: white;" class="text-b1">PRODUCTS OF PERFECTION</p>
            <h1 style="color: #C93851;" class="text-b2">ADD FLAVOUR TO BEING A GIRL</h1>
            <p style="color: white;" class="text-b3">SELF CARE STARTS WITH SKINCARE.</p>
        </div>
        
        <div class="cards">
            <div class="mycard">
                <img id="img7" onmouseover="setNewImage7()" onmouseout="setOldImage7()" src="./images/skin.jpg" width="200" height="200"/>
                <div>
                    <p style="margin-bottom: 0rem;" class="text-b4">Kylie Skin</p>
                    <p class="text-b5">Clarifying Serum</p>
                </div>
            </div>
            <div class="mycard">
                <img id="img6" onmouseover="setNewImage6()" onmouseout="setOldImage6()" src="./images/serum.jpg" width="200" height="200"/>
                <div>
                    <p style="margin-bottom: 0rem;" class="text-b4">Neutrogena</p>
                    <p class="text-b5">Hyaluronic Acid</p>
                </div>
            </div>
            <div class="mycard">
                <img id="img1" onmouseover="setNewImage()" onmouseout="setOldImage()" src="./images/lip.jpg" width="200" height="200"/>
                <div>
                    <p style="margin-bottom: 0rem;" class="text-b4">Kylie Skin</p>
                    <p class="text-b5">Watermelon Lip Oil</p>
                </div>
            </div>
            <div class="mycard">
                <img id="img2" onmouseover="setNewImage2()" onmouseout="setOldImage2()" src="./images/rose.jpg" width="200" height="200"/>
                <div>
                    <p style="margin-bottom: 0rem;" class="text-b4">Pixie Beauty</p>
                    <p class="text-b5">Rose Mask</p>
                </div>
            </div>
            
        </div>
        
    </section>

    <!-- ===========SECTION 3 HEADING============= -->
    <div style=" display:flex; justify-content: center;">
        <h1 style="position: absolute; margin-top: 3%; color: white; font-weight: bolder; letter-spacing: 0.5rem;">OUR BRANDS</h1>
    </div>

    <!-- ===========SECTION 3============= -->
    <section class="section-3">  
        <div class="imgslider">
        </div>
    </section>

    <!-- ===========SECTION 4============= -->
    <section id="section-4">
        <div style="text-align:center;" class="text-d">
            <h1 class="text-d1">ABOUT US</h1>
            <div class="container">
                <h5 class="text-d2">HELPING YOU LOOK GOOD</h5>
                <h3 class="text-d3">LET'S TALK ABOUT SKINVESTMENT</h3>
                <p class="text-d4">Pakistan has numerous amazing local skincare brands, but people have a liking for international skincare brands. Many renowned and famous, luxurious products are not easily available in Pakistan as these brands have not opened their outlet here. For ease and better experience of our people, we order these skincare products for you guys and ship it nationwide.<div class="text-d5">Also, you can order place your order personally for any specific perfume by contacting us through email or phone number!</div></p>
                <h5 class="text-d2">FEATURES OF OUR PRODUCTS</h5>
                <ul class="text-d4">
                    <li>100% original</li>
                    <li>Safe and secure packaging</li>
                    <li style="padding-bottom: 3%;">Stored in consistent temperature</li>
                </ul>
            </div>  
        </div>
    </section>

    <!-- =============SECTION-5================ -->
    <section id="section-5">
        <div style="text-align: center;">
            <h1 style="margin: 0px 0px 0px; padding-top: 20px; font-weight: bolder; letter-spacing: 0.5rem;">TESTIMONIALS</h1>
        </div>
    </section>

    <!-- ===========SECTION 6============= -->
    <section class="section-6">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img class="quote" src="https://img.icons8.com/ios/100/null/quote-right.png"/>
                        <div class="content">
                            <p style="margin-top: 85px; color: white;">"I am very satisfied with the packaging. Very few services deliver the product in one piece"</p>
                            <p>Aliza Suhail</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img class="quote" src="https://img.icons8.com/ios/100/null/quote-right.png"/>
                        <div class="content">
                            <p style="margin-top: 85px; color: white;">"I am very satisfied with the packaging. Very few services deliver the product in one piece"</p>
                            <p>Rafia Shakeel</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img class="quote" src="https://img.icons8.com/ios/100/null/quote-right.png"/>
                        <div class="content">
                            <p style="margin-top: 85px; color: white;">"Living in Pakistan very few stores offer skincare from around the world. This is a great platform to find famous skincare."</p>
                            <p>Maryam Khalid</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img class="quote" src="https://img.icons8.com/ios/100/null/quote-right.png"/>
                        <div class="content">
                            <p style="margin-top: 85px; color: white;">"The products are 100% original. Highly recommend this website to order international skincare brands."</p>
                            <p>Zainab Kashif</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img class="quote" src="https://img.icons8.com/ios/100/null/quote-right.png"/>
                        <div class="content">
                            <p style="margin-top: 85px; color: white;">"I am very satisfied with the packaging. Very few services deliver the product in one piece"</p>
                            <p>Maham Arshad</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ===========SECTION 7============= -->
    <section class="section-7">
        <div class="footer">
            <ul class="socialicon">
                <li><a href=""><i class="fa fa-facebook-f" ></i></a></li>
                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa fa-instagram"></i></a></li>
            </ul>
            <ul class="menu">
                <li><a href="#header">Home</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="#section-4">About us</a></li>
                <li><a href="#section-5">Testimonials</a></li>
                <li><a href="index.php">Skin Quiz</a></li>
            </ul>
            <p style="color: white; opacity: 0.7;">Copyright © 2022 Skinvestment | Powered by Skinvestment</p>
        </div>

    </section>


    <!-- =========SWIPER START========== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.3.5/swiper-bundle.min.js" integrity="sha512-WyDLvA6BFfISVB1uUsGN4kmN4uS+IrBdUtva0iTGRGINnThBfzY/kAKffuFXkwKDqpzlgziZFyM/YaUwPUiHnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var swiper=new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect:{
                rotate:0,
                stretch:0,
                depth:100,
                modifier:2,
                slideShadows:true,
            },
            loop:true ,
        });
    </script>
    <!-- =========SWIPER END========== -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     
    <!-- =========ON MOUSE OVER / OUT========== -->
    <script>
        function setNewImage7(){
            document.getElementById("img7").src = "./images/skin2.jpg";
        }
        function setOldImage7(){
            document.getElementById("img7").src = "./images/skin.jpg";
        }
        function setNewImage(){
            document.getElementById("img1").src = "./images/lip oil.jpg";
        }
        function setOldImage(){
            document.getElementById("img1").src = "./images/lip.jpg";
        }
        function setNewImage2(){
            document.getElementById("img2").src = "./images/pixi.jpg";
        }
        function setOldImage2(){
            document.getElementById("img2").src = "./images/rose.jpg";
        }
        function setNewImage6(){
            document.getElementById("img6").src = "./images/neutrogena2.jpg";
        }
        function setOldImage6(){
            document.getElementById("img6").src = "./images/serum.jpg";
        }
    </script>

</body>
</html>