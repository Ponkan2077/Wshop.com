<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/order.css">
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
    <section class="adminDashboard0">
       <div class="adminDashboard1">
        <div  class="adminBlue">ORDER</div>
       </div>
       <div class="adminDashboard2">
       <div>Total Orders:</div>
       <div class="adminBlue">400</div>
       <div class="dashboardDate">(May -  April 2024)</div>
       </div>
       <div class="adminDashboard3">
        <div>Orders that are being shipped: </div>
        <div class="adminBlue">100</div>
        <div> Pending Orders</div>
        <div class="adminBlue">40</div>
       </div>
     </section>
     
     <section class="orderDetPend">
        <div class="tableContainer">
            <h1>Order Details</h1>
            <table>
            <thead>
              <tr>
                <th>Product</th>
                <th>Product Name</th>
                <th>Customer</th>
                <th>Category</th>
                <th>Manufacturer</th>
                <th>Price</th>
               </tr>
            </thead>
            <tbody>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>

        </div>

        <div class="pendingOrders">
            <h1>Pending Orders</h1>
            <table>
                <thead>
                    <tr>
                    <th>Quantity</th>
                    <th>Item</th>
                    <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1x</td>
                    <td>Desktop</td>
                    <td>$700</td>
                    </tr>
                    <tr>
                    <td>2x</td>
                    <td>Nvidia GPU</td>
                    <td>$1500</td>
                    </tr>
                    <tr>
                    <td>1x</td>
                    <td>AMD Ryzen CPU</td>
                    <td>$300</td>
                    </tr>
                    <tr>
                    <td>2x</td>
                    <td>Laptop</td>
                    <td>$800</td>
                    </tr>
                </tbody>
           </table>

        </div>


     </section>
    </main>
</body>
</html>