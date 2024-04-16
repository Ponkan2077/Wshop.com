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

<header><?php include "../../includes/header.html"?></header>
    <main class="signUpMain">
        <div class="signUpWrapper">
        <div class ="logoSignUpLogin">
            <img src="../../assets/img/logo_h.svg">
        </div>
        <div class="signUpInfo">
            <form class="signUpForm">
                <div class="signUp">
                    <div class="leftSignUp">
                        <div class="userSignUp">
                       <i class="fa-regular fa-user"></i>
                       <input type = "text"
                   placeholder = "Username"
                   name = "username"
                   class = "userField">
               </div>
               <div class="passwordSignUp">
                   <i class="fa-sharp fa-solid fa-lock" style="color: #ffffff;"></i>
                   <input type = "password"
                   placeholder = "Password"
                   name = "passwordSigUp"
                   class = "passwordField">
               </div>
               <div class="passwordSignUpConfirm">
                <i class="fa-sharp fa-solid fa-lock" style="color: #ffffff;"></i>
                   <input type = "password"
                   placeholder = "Confirm Password"
                   name = "passwordConfirm"
                   class = "passwordField">
               </div>
               <div class="bDayGender">
                   <div class="birthday">
                    <i class="fa-solid fa-calendar" style="color: #ffffff"></i>
                   <input type="date"
                   placeholder="Birthday(MM,DD,YYYY)"
                   name="birthday"
                   class="birthdayField">
                   </div>
                   <div class="gender">
                       <select class="genderOption">
                           <option value="male">Male</option>
                           <option value="female">Female</option>
                           <option value="Other">Other</option>
                       </select>
                   </div>
               </div>
                   </div>
                   <div class="rightSignUp">
   
                       <div class="emailSignUp">
                        <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                   <input type = "email"
                   placeholder = "Email Address"
                   name = "emailAddress"
                   class = "emailField">
               </div>
               <div class="termsAndConditions">
                   <input type="checkbox" class="termsAndConditionsCheck" name="termsAndCOnditions">
                   <label class="termsAndConditionslabel" for="agreeOn"> By proceeding to sign up, I acknowledge that I have read and consented to WSHOP's Terms of 
                   Use and Privacy Policy , which sets out how WSHOP collects, uses and discloses my personal data, and the rights that I have under applicable law.</label>
               </div>
               <span class="signInWith">or sign in with</span>
               <div class="loginSignUpIcon">
               <div class="facebookLogin"><i class="fa-brands fa-facebook fa-2x"></i></div>
               <div class="googleLogin"><i class="fa-brands fa-google fa-2x"></i></div>
               <div class="twitterLogin"><i class="fa-brands fa-x-twitter fa-2x"></i></div>
                   </div>
               </div>
                </div>
                <button type="submit" class="signUpBtn">Sign Up</button>
            </form>
        </div>
        <div class="signUpNowLogin">
            <span>Don't have an account?</span>
            <button class="signUpBtnLogin">SignUp NOW!</button>
        </div>
    </div>

    </main>

</body>
</html>