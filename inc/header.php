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

   <title> Moleant Discover </title>
   <!-- Fonts and icons in the menu and header-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700">

   <!--Material Design Iconic Font-->
   <link rel="stylesheet" href="/material-design/css/material-design-iconic-font.css" />

   <!-- Common stylesheet for Moleant Discover -->
   <link href="/css/default.css" rel="stylesheet">







   




   <!--jQuery-->
   <script type="text/javascript" src="/scripts/jquery-3.5.1.js"></script>

   <!--hs Menu JS-->
   <script src="/js/jquery.hsmenu.min.js"></script>

   <script type="text/javascript" src="https://discover.moleant.com/scripts/get-jwt.js"></script>
   <script type="text/javascript" src="https://discover.moleant.com/scripts/base_functions.js"></script>

   <!-- hs Menu CSS-->
   <link rel="stylesheet" href="/css/hs-menu.min.css" />
   <script>
      $(document).ready(function() {

         $(".hs-menubar").hsMenu();

      });
   </script>

   <script type="text/javascript" src="https://discover.moleant.com/scripts/get-jwt.js"></script>
   <script type="text/javascript" src="https://discover.moleant.com/scripts/base_functions.js"></script>

   <script src="https://discover.moleant.com/js/vue.min.js"></script>
         <script src="https://discover.moleant.com/js/vue-toast-notification.js"></script>
         <link href="https://discover.moleant.com/css/theme-sugar.css" rel="stylesheet">
         <script src="https://discover.moleant.com/js/vue.min.js"></script>


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

            <li>
            <button type="button" onclick="window.location.href='https://account.moleant.com';">Sign in</button></p>
                                                </li>



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