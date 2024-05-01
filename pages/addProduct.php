<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/inventory.css">
    <link rel="preload" as="image" href="../assets/img/logo_h.svg" width="100%">
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
            <img src="../assets/img/logo_h.svg">
            </a>
        </div>
        <nav class="navAdmin">
    <ul>
        <li><a href="#" class="adminDashboard">Dashboard</a></li>
        <li><a href ="/Wshop.com/pages/inventory.php" class="adminInventory">Inventory</a></li>
        <li><a href ="/Wshop.com/pages/order.php" class="adminOrder">Orders</a></li>
    </ul>
</nav>
<div class="logoutAdmin">
   <a href ="/Wshop.com/pages/login/login.php">Logout</a>
</div>
    </aside>
    <main class="mainDashboard">
        <div class="addProductWrapper">
            <div class="addProductWrapper1">
            <h1>Product Details</h1>
            <div class="addProductLabel">
            <form>
                <div class="addProductLabel1">
                    <label>Product Name</label>
                    <input type="text" class="addField">
                </div>
                <div class="addProductLabel2">
                    <label>Product Price</label>
                    <input type="number" class="addField">
                </div>
                <div class="addProductLabel3">
                    <label>Product Description</label>
                    <input type="text" class="addField1">
                </div>
                <div class="addProductBtns">
                <button type="submit" class="buyBtn">Add Product</button>
                </div>
            </form>
        </div>
        </div>
        </div>
    </main>
</body>
</html>