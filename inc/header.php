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
         <a href="https://discover.moleant.com"><img src="../image/logo.png" title="Moleant Discover" alt="Moleant Discover"> </a>
      </div>
      <div class="menu-trigger"> <i class="zmdi zmdi-menu"></i></div>
      
      
      <div class="hs-user toggle" data-reveal=".user-info">
         <img src="../image/user.png" alt="An avatar">
      </div>



      <section class="box-model">
         <ul class="user-info">
            <li class="profile-pic"> </li>
            <li class="user-name">User profile</li>
            <li class="user-bio"> Logged in with <?php

                                                   if (isset($_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_NAME'])) {
                                                      echo $_SERVER['HTTP_X_MS_CLIENT_PRINCIPAL_NAME'];
                                                   } elseif ($allowlocalrun == 1) {
                                                      # Warning: This MUST be removed when system goed into production!!!! 2021-05-07 Erik Zalitis
                                                      $objectid = "e7466113-2e01-458c-9c89-acc0b56e215a";
                                                      echo "J Random Cheater with no identity!";
                                                   } else {
                                                      die("You're not logged in, sorry!");
                                                   }



                                                   ?>
            </li>
            <li class="more-btn"> <a href="https://discover.moleant.com/.auth/logout"> Sign Out</a> </li>
         </ul>
      </section>
      <nav class="hs-navigation">
         <ul class="nav-links">
            
            <li class="has-child">
               <span class="its-parent">
                  <span class="icon"> <i class="zmdi zmdi-eye"></i>
                  </span>Discover</span>
               <ul class="its-children">
                  <li><a href="/organizations/"> Organizations </a> </li>
                  <li> <a href="/systems/"> Systems </a> </li>
                  <li> <a href="/assets/"> Assets </a></li>
               </ul>
            </li>
            <li> <a href="/reports/"> <span class="icon"> <i class="zmdi zmdi-assignment"></i> </span> Reports</a> </li>
            <li> <a href="/admin/"> <span class="icon"> <i class="zmdi zmdi-settings"></i> </span> Admin</a> </li>

            <!--//has-child-->
         </ul>
      </nav>
      <!--End hs Mega Menu-->

   </header>
   <!--End of header-->