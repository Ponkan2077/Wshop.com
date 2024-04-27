
        <div class = "top">
        <div class = "logo">
            <a href="/Wshop.com/index.php">
        <?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/Wshop.com/assets/img/logo_h.svg";
   include_once($path);
?></a>
            <!--<img src="/assets/img/logo_h.svg" width="240px" height="79px" id="landingPage">-->
        </div>
        <div class="desktopScreen">
            <div class = "search">
                <form class = "searchForm"> 
                <form>
                        <input type = "text"
                                placeholder = "Search..."
                                name = "search"
                                class = "searchField">
                       <button type = "submit" class = "searchBtn"><i class="fa-solid fa-magnifying-glass fs-nav"></i></button>
                        </form>
            </div>
            <div class = "btns">
                 <a  class="loginBtn" href="/Wshop.com/pages/login/login.php">Login</a>
                 <a  class="signUpBtn" href="/Wshop.com/pages/sign_Up/sign_Up.php">Sign Up</a>
                </div>
        </div>
        <div class="laptopScreen">
            <div class = "search">
                <form class = "searchForm"> 
                <form>
                        <input type = "text"
                                placeholder = "Search..."
                                name = "search"
                                class = "searchField">
                       <button type = "submit" class = "searchBtn"><i class="fa-solid fa-magnifying-glass fs-nav"></i></button>
                        </form>
                        <div class="laptopMenu"><i class="fa-solid fa-bars"></i></div>
            </div>
        </div>
        <div class="mobileScreen">
                 <div class="headerSearch"><i class="fa-solid fa-magnifying-glass"></i></div>
                <div class="loginIcon"><i class="fa-regular fa-user"></i></div>
                <div class="mobileMenu" ><i class="fa-solid fa-bars"></i></div>
        </div>
        <div class="tabletScreen">
            <div class="headerSearch"><i class="fa-solid fa-magnifying-glass"></i></div>
           <div class="loginIcon"><i class="fa-regular fa-user"></i></div>
           <button class="mobileMenu" id="menuButton"><i class="fa-solid fa-bars"></i></button>
   </div>
        </div>
        <hr style="border: 1px solid #6a6a6a; margin-bottom: 10px;">
        
            <nav class = "Primary_nav"> 
                <ul>
                    <li><a href ="#">Shop</a></li>
                    <li><a href ="/Wshop.com/index.php">Home</a></li> 
                    <li><a href ="/Wshop.com/pages/about_Us.php">About Us</a></li>
                    <li><a href ="#">Contact Us</a></li>
                </ul>
            </nav>

            <div id="myModal" class="modal">
<div class="modal-content">
  <div class = "btns">
                 <a  class="loginBtn" href="/Wshop.com/pages/login/login.php">Login</a>
                 <a  class="signUpBtn" href="/Wshop.com/pages/sign_Up/sign_Up.php">Sign Up</a>
                </div>
</div>
</div>
<script>
    var modal =document.getElementById("myModal");
    var btn = document.getElementById("menuButton");
    btn.onclick =function() {
        modal.style.display = "block";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
        

    