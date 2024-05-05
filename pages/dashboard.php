<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/dashboard.css">
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
    <div id="adminSearch">
          <form class="adminSearchForm">
          <form>
            <input type="text" placeholder="Search..." name="search" class="searchField">
            <button type="submit" class="searchBtn"><i class="fa-solid fa-magnifying-glass fs-nav"></i></button>
          </form>
      </div>
    <section class="adminDashboard0">
       <div class="adminDashboard1">
        <div  class="adminBlue">INVENTORY</div>
       </div>
       <div class="adminDashboard2">
       <div>Revenue:</div>
       <div class="adminBlue">$10000</div>
       <div class="dashboardDate">(May -  April 2024)</div>
       </div>
       <div class="adminDashboard3">
        <div>Revenue For the Day: </div>
        <div class="adminBlue">$500</div>
       </div>
     </section>
     <section class="transactionDetails">
        <h1>Transaction Details</h1>
       <div class="tableContainer">
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
     </section>
    </main>
</body>
</html>