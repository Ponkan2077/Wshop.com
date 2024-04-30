<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motherboard</title>
    <link rel="stylesheet" href="/Wshop.com/assets/styles/style.css">
    <script src="https:/kit.fontawesome.com/c0056d4561.js" crossorigin="anonymous"></script>
    <link rel="preload" as="image" href="/Wshop.com/assets/img/logo_h.svg" width="100%">
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 481px)" href="/Wshop.com/assets/styles/mobile.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 482px) and (max-width: 768px)" href="/Wshop.com/assets/styles/mobile.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 769px) and (max-width: 1024px)" href="/Wshop.com/assets/styles/laptop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1025px) and (max-width: 1200px)" href="/Wshop.com/assets/styles/desktop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1201px)" href="/Wshop.com/assets/styles/tv.css">

</head>
<body>
 <header id="headerNiJul">
    <?php 
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/Wshop.com/includes/header.php";
       include_once($path);
    ?>
 </header>


 <div id="mainContainer">
   <div class="nav">
      <h2>Browse by</h2>
      <ul>
         <li><a href="/Wshop.com/pages/shop/allProducts-shop.php">All Products</a></li>
         <li><a href="/Wshop.com/pages/shop/desktop-shop.php">Desktop</a></li>
         <li><a href="/Wshop.com/pages/shop/laptop-shop.php">Laptops</a></li>
         <li><a href="/Wshop.com/pages/shop/cpu-shop.php">CPUs</a></li>
         <li><a href="/Wshop.com/pages/shop/gpu-shop.php">GPUs</a></li>
         <li><a href="/Wshop.com/pages/shop/fan-shop.php">Fans</a></li>
         <li><a href="/Wshop.com/pages/shop/case-shop.php">Case</a></li>
         <li><a href="/Wshop.com/pages/shop/ram-shop.php">RAM</a></li>
         <li><a href="/Wshop.com/pages/shop/rom-shop.php">ROM</a></li>
         <li><a href="/Wshop.com/pages/shop/ups-shop.php">UPS</a></li>
         <li><a href="/Wshop.com/pages/shop/motherboard-shop.php"><h4>Motherboard</h4></a></li>
         <li><a href="/Wshop.com/pages/shop/accessories-shop.php">Accessories</a></li>
         
      </ul>
   </div>
    
    <div id="main">
     <section id="allProducts">
        <h1>Motherboard</h1>
        <h3>2 Products</h3>
        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/motherboard1-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/motherboard/mother board 1/mb-box2.png"
                    alt="">
                <div class="description">
                    <p>MSI</p>
                    <p>B360 Gaming Plus</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱4,999</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/motherboard2-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/motherboard/mother board 2/How-to-Check-and-Identify-Your-Motherboard-fotor-bg-remover-2024042733738.png"
                    alt="">
                <div class="description">
                    <p>ASRock</p>
                    <p>X570 PG VELOCITA AM4 ATX</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱8,499</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>
        
      </section>
    </div>
</div>


 <div id="footerContainer">
  <footer>
    <?php 
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/Wshop.com/includes/footer.php";
       include_once($path);
    ?>
 </footer>
</div>

</body>


</html>