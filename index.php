<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/styles/style.css">
    <link rel="preload" as="image" href="./assets/img/logo_h.svg" width="100%">
    <script src="https://kit.fontawesome.com/c0056d4561.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 481px)" href="./assets/styles/mobile.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 482px) and (max-width: 768px)" href="./assets/styles/tablet.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 769px) and (max-width: 1024px)" href="./assets/styles/laptop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1025px) and (max-width: 1200px)" href="./assets/styles/desktop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1201px)" href="./assets/styles/tv.css">

    <title>Document</title>
</head>
<body>
    <header>
    <?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/Wshop.com/includes/header.php";
   include_once($path);
?>
         </header>
    <main class="mainLanding">
        <section class="intro">
    <h1>Your Most Trusted Computer Online Shop</h1>
    <p>With Over 100,000 sales</p>
    <button>Shop now</button>
</section>

<section class="product">
    <div class ="topProduct">
        <h2>Buy Our High Quality Products</h2>
        <button class="shop">Shop</button>
    </div>
    <div class="bottomProduct">
    <div class ="leftProduct">
        <h3>Pre-Built Systems</h3>
        <div class="boxProduct">
            <img src="./assets/img/logo_h.svg" class="anyProduct" alt="picture">
        </div>
    </div>
    <div class ="rightProduct">
        <h3>Laptops</h3>
        <div class="boxProduct">
        <img src="./assets/img/logo_h.svg" class="anyProduct" alt="picture"></div>
        </div>
    </div>
</div>
</section>

<section class="topSellers">
    <h3>Top Sellers</h3>
    <div class ="wrapTopSellers">
        <div class ="wrapTop">
    <div class="GPUS">
        <img src="./assets/img/logo_h.svg" class = "box" alt="picture">
        <h4>GPUS</h4>
    </div>
    <div class="CPUS">
    <img src="./assets/img/logo_h.svg"  class="box" alt="picture">
        <h4>CPUS</h4>
    </div>
</div>
<div class="wrapDown">
    <div class="RAMS">
    <img src="./assets/img/logo_h.svg"  class="box" alt="picture">
        <h4>Rams</h4>
    </div>
    <div class="MOTHERBOARD">
    <img src="./assets/img/logo_h.svg"  class="box" alt="picture">
        <h4>Motherboard</h4>
    </div>
</div>
    </div>
</section>

<section class="reviews">
    <h3>Reviews</h3>
    <div class="desktopScreen">
    <div class="wrapBoxReview">
    <img src="./assets/img/logo_h.svg"   class="boxReview" alt="picture">
    <img src="./assets/img/logo_h.svg" class="boxReview" alt="picture">
    <img src="./assets/img/logo_h.svg"  class="boxReview" alt="picture">
</div>
</div>
    <div class="mobileScreen"> 
    <img src="./assets/img/logo_h.svg"  class="boxReview" alt="picture">
    </div>
    </div>
    <div class="tabletScreen"> 
    <img src="./assets/img/logo_h.svg" class="boxReview" alt="picture">
    </div>
    <div class="laptopScreen"> 
    <img src="./assets/img/logo_h.svg" class="boxReview" alt="picture">
    </div>
</section>


<section class="payment">
   <div class="paymentMethods">
   <span>Payment Methods</span>
   </div> 
    <div class="boxPayment">
        <img src="./assets/img/payments.svg">
    </div>
</section>
</main>

<footer>
<?php include "./includes/footer.php" ?>
</footer> 
<script>
    window.onload = logoDeleteFunction() {
         const element =document.getElementByid("loginSignUpPage");
         element.remove();
    }
</script>
</body>
</html>