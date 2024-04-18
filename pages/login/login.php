<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/style.css">
    <link rel="preload" as="image" href="../../assets/img/logo_h.svg" width="100%">
    <script src="https://kit.fontawesome.com/c0056d4561.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 481px)" href="../../assets/styles/mobile.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 482px) and (max-width: 768px)" href="../../assets/styles/tablet.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 769px) and (max-width: 1024px)" href="../../assets/styles/laptop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1025px) and (max-width: 1200px)" href="../../assets/styles/desktop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1201px)" href="../../assets/styles/tv.css">
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
    <main class="loginMain">
        <div class="loginWrapper">
            <div class ="logoSignUpLogin">
                <img src="../../assets/img/logo_h.svg">
            </div>
            <form class="loginForm">
                <div class="user">
                    <i class="fa-regular fa-user"></i>
                    <input type = "text"
                placeholder = "Username"
                name = "username"
                class = "userField">
            </div>
                <div class="password">
                    <i class="fa-sharp fa-solid fa-lock" style="color: #ffffff;"></i>
                    <input type = "password"
                    placeholder = "Password"
                    name = "search"
                    class = "passwordField">
                </div>
                <button type="submit" class="loginBtn">Login</button>
            </form>
            <span class="signInWith">or sign in with</span>
            <div class="loginSignUpIcon">
            <div class="facebookLogin"><i class="fa-brands fa-facebook fa-2x"></i></div>
            <div class="googleLogin"><i class="fa-brands fa-google fa-2x"></i></div>
            <div class="twitterLogin"><i class="fa-brands fa-x-twitter fa-2x"></i></div>
            </div>
            <div class="signUpNowLogin">
                <span>Don't have an account?</span>
                <button class="signUpBtnLogin">SignUp NOW!</button>
            </div>
        </div>
    </main>
    <script>
</script>
</body>
</html>