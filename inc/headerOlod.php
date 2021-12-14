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
   <link rel="stylesheet" href="https://discover.moleant.com/material-design/css/material-design-iconic-font.css" />

   <!--jQuery-->
   <script type="text/javascript" src="https://discover.moleant.com/scripts/jquery-3.5.1.js"></script>

   <!--hs Menu JS-->
   <script src="https://discover.moleant.com/js/jquery.hsmenu.min.js"></script>

   <!-- hs Menu CSS-->
   <link rel="stylesheet" href="https://discover.moleant.com/css/hs-menu.min.css" />
   <script>
      $(document).ready(function() {

         $(".hs-menubar").hsMenu();

      });
   </script>

   <script type="text/javascript" src="https://discover.moleant.com/scripts/get-jwt.js"></script>
   <script type="text/javascript" src="https://discover.moleant.com/scripts/base_functions.js"></script>

   <?php

   if (INASSET == "TRUE") {
      // Please add anything below that you need to add to the assets card.
      if (!isset($_GET['serverid']) || !isset($_GET['guid'])) {
         // Code below will run if the server is in table/menu mode.
   ?>

         <!-- Load required Bootstrap and BootstrapVue CSS -->
         <link rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
         <link rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />

         <script src="https://discover.moleant.com/js/vue.min.js"></script>
         <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js"></script>
         <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>

         <script src="https://discover.moleant.com/js/vue-toast-notification.js"></script>

         <!-- Load polyfills to support older browsers -->
         <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver" crossorigin="anonymous"></script>
         <!-- Load Vue followed by BootstrapVue -->


      <?php
      } else {
         // Code below will run if the server is in card mode.
      ?>
   
         <script src="https://discover.moleant.com/scripts/jquery.roadmap.min.js"></script>
         <link href="https://discover.moleant.com/css/jquery.roadmap.min.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="https://discover.moleant.com/scripts/base64.min.js"></script>
         <script type="text/javascript" src="https://discover.moleant.com/scripts/download.js"></script>
         <link href="https://discover.moleant.com/css/theme-sugar.css" rel="stylesheet">

         <script src="https://discover.moleant.com/js/vue.min.js"></script>
         <script src="https://discover.moleant.com/js/vue-toast-notification.js"></script>
         <link href="https://discover.moleant.com/css/theme-sugar.css" rel="stylesheet">
         <script src="https://discover.moleant.com/js/vue.min.js"></script>

         <link rel="stylesheet" href="https://discover.moleant.com/css/dialog-mobile.css">
         <script src="https://discover.moleant.com/js/mcx-dialog.min.js"></script>
         

         <!-- Load Bootstrap for popovers -->

         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
         <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
        

      <?php
      }
      // Code below will always run irregardless (yes, that's a proper word now!) of mode.

      ?>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
      <link href="https://discover.moleant.com/css/assets.css" rel="stylesheet" type="text/css" />
      <link href="https://discover.moleant.com/css/systems.css" rel="stylesheet" type="text/css" />
      <script src="https://discover.moleant.com/scripts/jquery.modal.min.js"></script>


   <?php
   }
   ?>

   <?php
   if (INSYSTEM == "TRUE") {
      // Please add anything below that you need to add to the system card.

      if (!isset($_GET['systemid']) || !isset($_GET['guid'])) {
         // Code below will run if the system is in table/menu mode.
   ?>

         <!-- Load required Bootstrap and BootstrapVue CSS -->
         <link rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
         <link rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />

         <script src="https://discover.moleant.com/js/vue.min.js"></script>
         <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js"></script>
         <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>

         <script src="https://discover.moleant.com/js/vue-toast-notification.js"></script>

         <!-- Load polyfills to support older browsers -->
         <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver" crossorigin="anonymous"></script>
         <!-- Load Vue followed by BootstrapVue -->
      <?php
      } else {
         // Code below will run if the system is in card mode.
      ?>

         <script src="https://discover.moleant.com/scripts/jquery.roadmap.min.js"></script>
         <link href="https://discover.moleant.com/css/jquery.roadmap.min.css" rel="stylesheet" type="text/css" />
         <link rel="stylesheet" href="https://discover.moleant.com/css/table-default.css">
         <script type="text/javascript" src="https://discover.moleant.com/scripts/base64.min.js"></script>
         <script type="text/javascript" src="https://discover.moleant.com/scripts/download.js"></script>
         <script src="https://discover.moleant.com/js/vue.min.js"></script>
         <script src="https://discover.moleant.com/js/vue-toast-notification.js"></script>
         <link href="https://discover.moleant.com/css/theme-sugar.css" rel="stylesheet">
         <script src="https://discover.moleant.com/js/vue.min.js"></script>
         <!-- Load Bootstrap for popovers -->

         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
         <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">

         <link rel="stylesheet" href="https://discover.moleant.com/css/dialog-mobile.css">
         <script src="https://discover.moleant.com/js/mcx-dialog.min.js"></script>


      <?php
      }

      // Code below will always run irregardless (yes, that's a proper word now!) of mode.
      ?>

      <link href="https://discover.moleant.com/css/systems.css" rel="stylesheet" type="text/css" />
      <script src="https://discover.moleant.com/scripts/jquery.modal.min.js"></script>

   <?php


   } // Ends the whole INSYSTEM-Block.
   ?>

   <?php
   if (INADMIN == "TRUE") {
      // Please add anything below that you need to add to the admin site.
   ?>
      <link href="https://discover.moleant.com/css/admin.css" rel="stylesheet" type="text/css" />
      <script src="https://discover.moleant.com/js/vue.min.js"></script>
         <script src="https://discover.moleant.com/js/vue-toast-notification.js"></script>
         <link href="https://discover.moleant.com/css/theme-sugar.css" rel="stylesheet">
         <script src="https://discover.moleant.com/js/vue.min.js"></script>

         <link rel="stylesheet" href="https://discover.moleant.com/css/dialog-mobile.css">
         <script src="https://discover.moleant.com/js/mcx-dialog.min.js"></script>
      
   <?php
   }
   ?>
   
<?php
if (INORG == "TRUE") {
      // Please add anything below that you need to add to the assets card.
      if (!isset($_GET['guid'])) {
         // Code below will run if the server is in table/menu mode.
   ?>

         <!-- Load required Bootstrap and BootstrapVue CSS -->
         <link rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
         <link rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />

         <script src="https://discover.moleant.com/js/vue.min.js"></script>
         <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js"></script>
         <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>

         <script src="https://discover.moleant.com/js/vue-toast-notification.js"></script>

         <!-- Load polyfills to support older browsers -->
         <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver" crossorigin="anonymous"></script>
         <!-- Load Vue followed by BootstrapVue -->


      <?php
      } else {
         // Code below will run if the org is in card mode.
      ?>
   
         <script src="https://discover.moleant.com/scripts/jquery.roadmap.min.js"></script>
         <link href="https://discover.moleant.com/css/jquery.roadmap.min.css" rel="stylesheet" type="text/css" />
         <script type="text/javascript" src="https://discover.moleant.com/scripts/base64.min.js"></script>
         <script type="text/javascript" src="https://discover.moleant.com/scripts/download.js"></script>
         <link href="https://discover.moleant.com/css/theme-sugar.css" rel="stylesheet">

         <script src="https://discover.moleant.com/js/vue.min.js"></script>
         <script src="https://discover.moleant.com/js/vue-toast-notification.js"></script>
         <link href="https://discover.moleant.com/css/theme-sugar.css" rel="stylesheet">
         <script src="https://discover.moleant.com/js/vue.min.js"></script>

         <link rel="stylesheet" href="https://discover.moleant.com/css/dialog-mobile.css">
         <script src="https://discover.moleant.com/js/mcx-dialog.min.js"></script>
         

         <!-- Load Bootstrap for popovers -->

         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
         <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
        

      <?php
      }
      // Code below will always run irregardless (yes, that's a proper word now!) of mode.

      ?>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
      <link href="https://discover.moleant.com/css/assets.css" rel="stylesheet" type="text/css" />
      <link href="https://discover.moleant.com/css/systems.css" rel="stylesheet" type="text/css" />
      <script src="https://discover.moleant.com/scripts/jquery.modal.min.js"></script>


   <?php
   }
   ?>


   <?php
   if (INREPORTS == "TRUE") {
      // Please add anything below that you need to add to the report card.
   ?>
      <!-- Load required Bootstrap and BootstrapVue CSS -->
      <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
      <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />
      <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
      <link rel="stylesheet" href="https://discover.moleant.com/css/table-default.css">


      <script src="https://cdnjs.cloudflare.com/ajax/libs/ramda/0.25.0/ramda.min.js"></script>


      <!-- Load polyfills to support older browsers -->
      <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver" crossorigin="anonymous"></script>
      <!-- Load Vue followed by BootstrapVue -->

      <script src="https://discover.moleant.com/js/vue.min.js"></script>
      <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js"></script>
      <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>

      <!-- Vue Multiselect -->
      <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
      <!-- Vue Multiselect -->

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.0/jspdf.umd.min.js"></script>
      <script src="https://unpkg.com/jspdf-autotable"></script>
   <?php
   }
   ?>
   <!-- Common stylesheet for Moleant Discover -->
   <link href="https://discover.moleant.com/css/default.css" rel="stylesheet">


</head>

<body>
   <br> <br>

   <!--Start hs Mega Menu-->

   <header class="hs-menubar">
      <div class="brand-logo">
         <a href="https://discover.moleant.com"><img src="../image/logo.png" title="Moleant Discover" alt="Moleant Discover"> </a>
      </div>
      <div class="menu-trigger"> <i class="zmdi zmdi-menu"></i></div>
      <div class="search-trigger"> <i class="zmdi zmdi-search"></i></div>
      <div class="search-box">
         <form action="#">
            <input type="text" name="search">
            <button type="submit" class="search-submit" disabled>Search</button>
         </form>
      </div>
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