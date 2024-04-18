<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
    <link rel="preload" as="image" href="../assets/img/logo_h.svg" width="100%">
    <script src="https://kit.fontawesome.com/c0056d4561.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 481px)" href="../assets/styles/mobile.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 482px) and (max-width: 768px)" href="../assets/styles/tablet.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 769px) and (max-width: 1024px)" href="../assets/styles/laptop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1025px) and (max-width: 1200px)" href="../assets/styles/desktop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1201px)" href="../assets/styles/tv.css">
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
        <div class="aboutUsWrapper">
        <div class="aboutUs">
            <h1>About Us</h1>
            <p>We are a company that Values Consumer Trust</p>
        </div>
        <div class = "focusOn1">
           <h2> We Focus On:</h2>
        </div>
        <div class="focusOn">
            <div class="aboutUsQuality">
                <h3>Quality</h3>
            <p>Here in WShop we pride in our ability to offer high quality products from trusted wholesalers and brands</p>
            </div>
            <div class="aboutUsService">
                <h3>Service</h3>
            <p>We have 24 hour customer service, a refund policy and we make sure that your product arrives on time.</p>
            </div>
            <div class="aboutUsAvailability">
                <h3>Availability</h3>
            <p>WShop make sure that all products that our customer wants is always available</p>
            </div>
            <div class="aboutUsAffordability">
                <h3>Affordability</h3>
            <p>We offer options that fits your budget</p>
            </div>
        </div>
    </div>
    </main>
    <footer>
    <?php include "../includes/footer.php" ?>
    </footer>
</body>
</html>