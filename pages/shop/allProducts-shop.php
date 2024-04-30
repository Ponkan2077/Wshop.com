<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
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
                <li><a href="/Wshop.com/pages/shop/allProducts-shop.php"><h4>All Products</h4></a></li>
                <li><a href="/Wshop.com/pages/shop/desktop-shop.php">Desktop</a></li>
                <li><a href="/Wshop.com/pages/shop/laptop-shop.php">Laptops</a></li>
                <li><a href="/Wshop.com/pages/shop/cpu-shop.php">CPUs</a></li>
                <li><a href="/Wshop.com/pages/shop/gpu-shop.php">GPUs</a></li>
                <li><a href="/Wshop.com/pages/shop/fan-shop.php">Fans</a></li>
                <li><a href="/Wshop.com/pages/shop/case-shop.php">Case</a></li>
                <li><a href="/Wshop.com/pages/shop/ram-shop.php">RAM</a></li>
                <li><a href="/Wshop.com/pages/shop/rom-shop.php">ROM</a></li>
                <li><a href="/Wshop.com/pages/shop/ups-shop.php">UPS</a></li>
                <li><a href="/Wshop.com/pages/shop/motherboard-shop.php">Motherboard</a></li>
                <li><a href="/Wshop.com/pages/shop/accessories-shop.php">Accessories</a></li>
            </ul>
    </div>
    
    <div id="main">
     <section id="allProducts">
        <h1>All Products</h1>
        <h3>26 Products</h3>
        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/desktop1-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/desktop/desktop1/Fotoram.io.jpg" alt="">
                <div class="description">
                    <p>Atom</p>
                    <p>Gaming PC</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱78,500</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>

        </div>
        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/case1-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/case/case 1/d798d0a425d521cb8c7ece9652f417cb.jpg" alt="">
                <div class="description">
                    <p>Chill Blast</p>
                    <p>PC Case</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱19,999</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>
        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/case2-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/case/case 2/cb347b1a80b2399d8bb57bd36901529d.jpg" alt="">
                <div class="description">
                    <p>Razer</p>
                    <p>PC Case</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱27,500</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>
        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/desktop2-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/desktop/desktop2/985aa404a5fe640b7bd3b7aa372d7995.jpg" alt="">
                <div class="description">
                    <p>Wraith</p>
                    <p>Gaming PC</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱89,999</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>
        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/desktop3-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/desktop/pc-gaming-computer-pc-cases-technology-wallpaper-preview.jpg" alt="">
                <div class="description">
                    <p>GB</p>
                    <p>Gaming PC</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱117,750</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>
        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/laptop1-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/laptop/laptop 1/4479e64a-1343-444c-a202-fd470147ce63-fotor-bg-remover-202404272345.png" alt="">
                <div class="description">
                    <p>Lenovo</p>
                    <p>ThinkPad X1</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱85,000</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>
        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/laptop2-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/laptop/laptop 2/41dZCf+77LL._SL500_-fotor-bg-remover-202404273209.png" alt="">
                <div class="description">
                    <p>ASUS ROG</p>
                    <p>Strix XG27ACS 27</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱67,999</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>
        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/cpu1-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/cpu/cpu 2/s-Intel-Core-X-Series-processor-family-21-690x460_2-fotor-bg-remover-2024042734440.png" alt="">
                <div class="description">
                    <p>Intel</p>
                    <p>Core i9-7900X CPU Processor</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱18,990</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/cpu2-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/cpu/cpu 3/amd-ryzen-5-7600-ph-btz.webp"
                    alt="">
                <div class="description">
                    <p>AMD Ryzen</p>
                    <p>5 7500F Processor</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱13,999</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/gpu1-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/gpu/nvidia-geforce-graphics-card-gpus-wallpaper-preview-fotor-bg-remover-2024042731432.png"
                    alt="">
                <div class="description">
                    <p>ROG</p>
                    <p>GPU RtX 4090ti</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱19,999</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/gpu2-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/gpu/11085-front.small-fotor-bg-remover-202404273462.png"
                    alt="">
                <div class="description">
                    <p>PNY</p>
                    <p>XLR8 RTX 4070 VERTO EPIC-X </p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱25,999</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/fan1-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/fans/fans1/1681530875-f120-rgb-core-fan-angled-upward-left-side-view-white.avif"
                    alt="">
                <div class="description">
                    <p>NZXT</p>
                    <p>F120 RGB Core</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱999</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/fan2-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/fans/fans2/fwebp_1_33d144ff-f56f-4547-bc85-021dd3a3a6eb-fotor-bg-remover-202404273470.png"
                    alt="">
                <div class="description">
                    <p>ASUS</p>
                    <p>TUF Gaming TF120 ARGB Fan</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱1,225</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/ram1-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/ram/ram 1/adata_8gb_ddr5_4800_40_8gx4_so-dimm_ad5s48008g-s_-fotor-bg-remover-202404273487.png"
                    alt="">
                <div class="description">
                    <p>Adata</p>
                    <p>XPG Premier 16GB 4800MHz</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱3,750</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/ram2-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/ram/ram 2/adata_16gb_ddr4_3200_pc4-25600_ad4s320016g22-sgn_sodimm-fotor-bg-remover-2024042733010.png"
                    alt="">
                <div class="description">
                    <p>Adata</p>
                    <p>Premier DDR4 3200 Memory</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱1,100</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/rom1-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/rom/rom 1/rom8-fotor-bg-remover-2024042733156.png"
                    alt="">
                <div class="description">
                    <p>Amiga</p>
                    <p>Kickstart Flash ROM 27C400</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱499</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/ups1-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/upc/UPS 1/UPS-10kVA-Online-UPS-Single-Phase-Computer-Power-Supply-UPS-for-PC-fotor-bg-remover-202404273366.png"
                    alt="">
                <div class="description">
                    <p>RS PRO 110</p>
                    <p>300V ac Input Stand Alone</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱28,999</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/ups2-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/upc/ups 2/6478.jpg-fotor-bg-remover-2024042733651.png"
                    alt="">
                <div class="description">
                    <p>APC</p>
                    <p>Back-UPS, 1200VA, Tower, 230V</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱7,800</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

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

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/keyboard1-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/accesories/keyboard/475896-Product-0-I-637308636067854700_13f24f2f-be6e-4797-b010-0a3f8e48fac7_1024x1024-fotor-bg-remover-2024042733931.png"
                    alt="">
                <div class="description">
                    <p>Razer</p>
                    <p>Huntsman Mini</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱4,799</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/keyboard2-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/accesories/keyboard/61Az2uOUbqL-fotor-bg-remover-2024042733856.png"
                    alt="">
                <div class="description">
                    <p>Razer</p>
                    <p>Huntsman Mini</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱4,799</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/keyboard3-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/accesories/keyboard/Roccat-Vulcan-II-Mini-gaming-keyboard-fotor-bg-remover-2024042735027.png"
                    alt="">
                <div class="description">
                    <p>Roccat</p>
                    <p>Vulcan II Mini</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱1,095</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/mouse1-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/accesories/mouse/entwino-d1-gaming-mouse-for-laptop-gaming-pc-usb-wired-rgb-lights-optical-mouse-for-computer-product-images-orvdukxjtan-p594705374-0-202210202205-fo.png"
                    alt="">
                <div class="description">
                    <p>Generic</p>
                    <p>Gaming Mouse</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱199</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/mouse2-prodDet.php';">
                <img class="keyboard" src="/Wshop.com/assets/img/products/accesories/mouse/Razer-Cobra-Pro-Lightweight-Wireless-PC-Gaming-Mouse-with-Razer-Chroma-RGB-Customizable-Controls-77g-Black_d00c5c3d-f3fc-48a6-b1d8-49b223778807.c72c5b-.png"
                    alt="">
                <div class="description">
                    <p>Razer</p>
                    <p>Cobra Pro Lightweight</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱9,690</p>
                </div>
                <button onclick="#">Add to Cart</button>
            </div>
        
        </div>

        <div class="productContainer">
            <div class="product" onclick="window.location.href='/Wshop.com/pages/productDetails/mouse3-prodDet.php';">
                <img src="/Wshop.com/assets/img/products/accesories/mouse/sdaaa_800x-fotor-bg-remover-2024042734115.png"
                    alt="">
                <div class="description">
                    <p>SteelSeries</p>
                    <p>Rival 3</p>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>₱1,599</p>
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