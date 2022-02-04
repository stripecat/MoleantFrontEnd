<?php

// This code is important in order to make sure the script must only be loaded from another script and not by any leet hax0r. //EZS

if (INMOLEANT != "TRUE") {
   die("You may not directly reference this script.");
}

?>
<!DOCTYPE html>
<html lang="en-US">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initail-scale=1" />

   <title> Moleant AB </title>
<!-- default favicon -->
   <link rel="icon" href="/image/favicon.png" type="image/png">
<!-- for apple mobile devices -->
<link rel="apple-touch-icon-precomposed" href="/image/apple-touch-icon-152x152-precomposed.png" type="image/png" sizes="152x152">
<link rel="apple-touch-icon-precomposed" href="/image/apple-touch-icon-152x152-precomposed.png" type="image/png" sizes="120x120">
<!-- google tv favicon -->
<link rel="icon" href="/image/favicon-googletv.png" sizes="96x96" type="image/png">


   

   <!--Material Design Iconic Font-->
   <link rel="stylesheet" href="https://www.moleant.com/material-design/css/material-design-iconic-font.css" />
   
   <!--Locally loaded Poppins-->
   <link rel="stylesheet" href="/css/font-face.css" />

   <!-- Common stylesheet for Moleant Discover -->
   <link href="https://www.moleant.com/css/default.css" rel="stylesheet">







   




   <!--jQuery-->
   <script type="text/javascript" src="https://www.moleant.com/scripts/jquery-3.5.1.js"></script>

   <!--hs Menu JS-->
   <script src="/js/jquery.hsmenu.min.js"></script>

   <script type="text/javascript" src="https://www.moleant.com/scripts/get-jwt.js"></script>
   <script type="text/javascript" src="https://www.moleant.com/scripts/base_functions.js"></script>

   <!-- hs Menu CSS-->
   <link rel="stylesheet" href="/css/hs-menu.min.css" />
   <script>
      $(document).ready(function() {

         $(".hs-menubar").hsMenu();

      });
   </script>

   <script type="text/javascript" src="https://www.moleant.com/scripts/get-jwt.js"></script>
   <script type="text/javascript" src="https://www.moleant.com/scripts/base_functions.js"></script>

   <script src="https://www.moleant.com/js/vue.min.js"></script>
         <script src="https://www.moleant.com/js/vue-toast-notification.js"></script>
         <link href="https://www.moleant.com/css/theme-sugar.css" rel="stylesheet">
         <script src="https://www.moleant.com/js/vue.min.js"></script>


</head>

<body>
   <br> <br>

   <!--Start hs Mega Menu-->

   <header class="hs-menubar">
      <div class="brand-logo">
         <a href="https://www.moleant.com"><img src="../image/logo.png" title="Moleant Discover" alt="Moleant Discover"> </a>
      </div>
      <div class="menu-trigger"> <i class="zmdi zmdi-menu"></i></div>
      
      
      <div class="hs-user toggle" data-reveal=".user-info">
         <img src="../image/signin.png" alt="An avatar">
      </div>



      <section class="box-model">
         <ul class="user-info">
            <li class="profile-pic"> </li>
            <li class="user-name">Manage my subscription</li>
            <li class="user-bio"> Sign in to manage your subscription.
            </li>
<<<<<<< HEAD
            <li class="more-btn"> <a href="https://www.moleant.com/.auth/logout"> Sign Out</a> </li>
=======

            <li>
            <button type="button" onclick="window.location.href='https://account.moleant.com';">Sign in</button></p>
                                                </li>



>>>>>>> b192122ede2c94577863a7063710a59e91e7fbf2
         </ul>
      </section>
      <nav class="hs-navigation">
         <ul class="nav-links">
            
            <li> <a href="/privacy.php"> <span class="icon"> <i class="zmdi zmdi-assignment"></i> </span> Privacy Policy</a> </li>
            <li> <a href="/cookies.php"> <span class="icon"> <img src="../image/cookie.png" height="18" width="18" title="Cookie" alt="Cookie"> </span> Cookie policy</a> </li>
            <li> <a href="https://account.moleant.com"><span class="icon"><img src="../image/signin.png" height="18" width="18" title="Moleant Discover" alt="Moleant Discover"></span> Sign in </a>

            <!--//has-child-->
         </ul>
      </nav>
      <!--End hs Mega Menu-->

   </header>
   <!--End of header-->