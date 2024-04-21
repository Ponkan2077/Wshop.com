<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/style.css">
    <link rel="preload" as="image" href="/assets/img/logo_h.svg" width="100%">
    <script src="https://kit.fontawesome.com/c0056d4561.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 481px)" href="../assets/styles/mobile.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 482px) and (max-width: 768px)" href="../assets/styles/tablet.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 769px) and (max-width: 1024px)" href="../assets/styles/laptop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1025px) and (max-width: 1200px)" href="../assets/styles/desktop.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1201px)" href="../assets/styles/tv.css">
</head>
<body>
<header> 
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/Wshop.com/includes/header.php";
   include_once($path);
?>
</header>
    <main class="mainContact">
        <div class="contactUsWrapper">
            <div class ="logoSignUpLogin">
                <img src="../../assets/img/logo_h.svg">
            </div>
            <div class="contactName">

              <form class="contactUsForm">
                <div class="contactName">
                    <div class="contactFirstName">
                        <i class="fa-regular fa-user"></i>
                        <input type = "text"
                    placeholder = "First name"
                    name = "fname"
                    class = "userField">
                </div>
                <div class="contactLastName">
                    <i class="fa-regular fa-user"></i>
                    <input type = "text"
                placeholder = "Last Name"
                name = "lname"
                class = "userField">
            </div>
            </div>
                <div class="contactEmail">
                    <div class="contactEmail1">
                        <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                   <input type = "email"
                   placeholder = "Email Address"
                   name = "emailAddress"
                   class = "emailField">
               </div>
                </div>
            <div class="contactSubject">
                <div class="contactSubject1">
                        <i class="fa-solid fa-circle-exclamation" style="color: #ffffff;"></i>
                   <input type = "text"
                   placeholder = "Subject"
                   name = "contactMessage"
                   class = "contactSubjectField">
               </div>
            </div>
            <div class="contactMessage">
                <div class="contactMessage1">
                        <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
                   <input type = "textarea"
                   placeholder = "Message.."
                   name = "emailAddress"
                   class = "contactMessageField">
               </div>
            </div>
            <div class="contactBtn">
                <button type="submit" class="contactBtn1">Submit</button>
            </div>
        </form>
            </div>
        </div>
    </main>
</body>
</html>