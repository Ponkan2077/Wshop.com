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
    <a href="/Wshop.com/pages/shop/allProducts-shop.php" class="introBtn">Shop now</a>
</section>

<section class="product">
    <div class ="topProduct">
        <h2>Buy Our High Quality Products</h2>
        <a class="shop" href="/Wshop.com/pages/shop/allProducts-shop.php">Shop</a>
    </div>
    <div class="bottomProduct">
    <div class ="leftProduct">
        <h3>Pre-Built Systems</h3>
        <div class="boxProduct">
            <img src="./assets/img/products/desktop/desktop1/Fotoram.io.jpg" class="anyProduct" alt="picture">
        </div>
    </div>
    <div class ="rightProduct">
        <h3>Laptops</h3>
        <div class="boxProduct">
        <img src="./assets/img/products/laptop/laptop 1/4479e64a-1343-444c-a202-fd470147ce63-fotor-bg-remover-202404272345.png" class="anyProduct" alt="picture"></div>
        </div>
    </div>
</div>
</section>

<section class="topSellers">
    <h3>Top Sellers</h3>
    <div class ="wrapTopSellers">
        <div class ="wrapTop">
    <div class="GPUS">
        <img src="./assets/img/products/gpu/nvidia-geforce-graphics-card-gpus-wallpaper-preview-fotor-bg-remover-2024042731432.png" class = "box" alt="picture">
        <h4>GPUS</h4>
    </div>
    <div class="CPUS">
    <img src="./assets/img/products/cpu/cpu 2/AMD-Ryzen-9-7900X3D-gaming-processor.jpg"  class="box" alt="picture">
        <h4>CPUS</h4>
    </div>
</div>
<div class="wrapDown">
    <div class="RAMS">
    <img src="./assets/img/products/ram/ram 1/adata_8gb_ddr5_4800_40_8gx4_so-dimm_ad5s48008g-s_-fotor-bg-remover-202404273487.png"  class="box" alt="picture">
        <h4>Rams</h4>
    </div>
    <div class="MOTHERBOARD">
    <img src="./assets/img/products/motherboard/mother board 1/mb-box2.png"  class="box" alt="picture">
        <h4>Motherboard</h4>
    </div>
</div>
    </div>
</section>


<div id="reviewsContainer">
  <section id="reviews">
    
    <div class="review-heading">
        <h1>Reviews</h1>
    </div>
    
    <div class="review-box-container">
        
        <div class="review-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="/Wshop.com/assets/img/profilepic.webp" />
                    </div>
                    <div class="name-user">
                        <strong>Abdul-Rey Flores</strong>
                        <span>@princessrey</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                    temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                    voluptates incidunt blanditiis sed atque cumque.</p>
            </div>
        </div>
        <div class="review-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="/Wshop.com/assets/img/profilepic.webp" />
                    </div>
                    <div class="name-user">
                        <strong>J.D. Labastillas</strong>
                        <span>@jdminimixko</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                    temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                    voluptates incidunt blanditiis sed atque cumque.</p>
            </div>
        </div>
        <div class="review-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="/Wshop.com/assets/img/profilepic.webp"/>
                    </div>
                    <div class="name-user">
                        <strong>Jamal</strong>
                        <span>@pogiako</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
            <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                    temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                    voluptates incidunt blanditiis sed atque cumque.</p>
            </div>
        </div>
        <div class="review-box">
            <div class="box-top">
                <div class="profile">
                    <div class="profile-img">
                        <img src="/Wshop.com/assets/img/profilepic.webp" />
                    </div>
                    <div class="name-user">
                        <strong>Fatima Kijar</strong>
                        <span>@retired</span>
                    </div>
                </div>
                <div class="reviews">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i><!--Empty star-->
                </div>
            </div>
            <div class="client-comment">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident
                    temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur
                    voluptates incidunt blanditiis sed atque cumque.</p>
            </div>
        </div>
    </div>
   </section>
  </div>



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