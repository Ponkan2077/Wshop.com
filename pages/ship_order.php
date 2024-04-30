<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/order.css">
    <script src="https://kit.fontawesome.com/c0056d4561.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 481px)" href="../assets/styles/mobile.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 482px) and (max-width: 768px)" href="../assets/styles/tablet.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 769px) and (max-width: 1024px)" href="../assets/styles/laptop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1025px) and (max-width: 1200px)" href="../assets/styles/desktop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1201px)" href="../assets/styles/tv.css">
    <title>Document</title>
</head>
<body class="dashboardBody">
    <aside class="dashboardAside" style="float: left" >
        <div class = "logoAdmin">
            <a href="/Wshop.com/pages/dashboard.php">
            <img src="/Wshop.com/assets/img/logo_h.svg">
            </a>
        </div>
        <nav class="navAdmin">
    <ul>
        <li><a href="/Wshop.com/pages/dashboard.php" class="adminDashboard">Dashboard</a></li>
        <li><a href ="/Wshop.com/pages/inventory.php" class="adminInventory">Inventory</a></li>
        <li><a href ="#" class="adminOrder">Orders</a></li>
    </ul>
</nav>
<div class="logoutAdmin">
   <a href ="/Wshop.com/pages/login/login.php">Logout</a>
</div>
    </aside>
<main class="mainDashboard">
     <div class="shipWrapper">
        <div class="shipWrapper1">
            <div class="shipOrder">
               <h1>Order</h1>
            </div>
            <div class="detailStock">
               <div class="detail">
               <div class="buyItem1">
                    <p class="b1">1x Desktop</p>
                    <p>$700</p>
                </div>
                <div class="buyItem2">
                    <p class="b1">2x Nvidia Gpu</p>
                    <p>$1500</p>
                </div>
                <div class="buyItem3">
                    <p class="b1">1x AMD Ryzen CPU</p>
                    <p>$300</p>
                </div>
                <div class="buyItem4">
                    <p class="b1">2x Laptop</p>
                    <p>$800</p>
                </div>
               </div>
               <div class="stock">
               <div class="buyItem1">
                    <p class="b1">Desktop</p>
                    <p>20pcs</p>
                </div>
                <div class="buyItem2">
                    <p class="b1">Nvidia Gpu</p>
                    <p>10pcs</p>
                </div>
                <div class="buyItem3">
                    <p class="b1">AMD Ryzen CPU</p>
                    <p>4pcs</p>
                </div>
                <div class="buyItem4">
                    <p class="b1">Laptop</p>
                    <p>30pcs</p>
                </div>
               </div>
            </div>
            <div class="addProductBtns">
                <button type="submit" class="buyBtn">Ship Order Now</button>
                </div>
        </div>
        </div>
</main>
    
</body>
</html>