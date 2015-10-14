<div class="alert alert-notice alert-active hidden">
   <div class="centered centered-full">
      <div class="fs-row">
         <div class="fs-cell fs-all-full">
            <a href="/">Home</a>
            <a href="?page=collection">Collection</a>
            <a href="?page=category">Skinnies</a>
            <a href="?page=product">Natural Blonde</a>
            <a href="?page=about">About</a>
            <a href="?page=commercial">Commercial</a>
            <a href="?page=contact">Contact</a>
            <a href="?page=glossary">Glossary</a>
            <a href="?page=blog">Blog</a>
            <a href="?page=blog">Blog Single</a>
            <a href="#" class="fl-right close-alert" title="close"><span class="ss-gizmo ss-plus rotate-45"></span></a>
         </div>
      </div>
   </div>
</div>

<div id="header-wrapper">
   <?php 
      // Available Classes for #header:
      // .forehead: adds some space above the nav.
      // .fivehead: adds a bunch of space above the nav.
      // .chin: adds some space below the nav.
   ?>
   <header id="header" class="menu-swap">
      <div class="fs-row">
         <nav id="header--nav_left" class="fs-cell fs-lg-3 fs-md-2 fs-sm-hide">
            <a href="#" class="btn btn-nav btn-hamburg swap" data-swap-target=".menu-swap">Menu</a>
         </nav>
         <nav id="header--logo" class="fs-cell fs-lg-6 fs-md-2 fs-sm-1 text-center">
            <a href="/" class="btn btn-nav btn-logo">Time Line</a>
         </nav>
         <nav id="header--nav_right" class="fs-cell fs-lg-3 fs-md-2 fs-sm-1 text-right">
            <a href="?page=search" class="btn btn-nav">Search</a>
         </nav>
      </div>
   </header>
   <?php // Need to figure out how to append this with jQuery rather than by this method ?>
   <header id="header-mobile">
      <div class="fs-row">
         <nav id="header--logo-mobile" class="fs-cell fs-lg-6 fs-md-3 fs-sm-full">
            <a href="?page=collection" class="btn btn-nav btn-close ss-gizmo ss-plus rotate-45"></a>
            <a href="?page=collection" class="btn btn-nav">Shop</a>
            <a href="?page=collection" class="btn btn-nav">Stockists</a>
            <a href="#" class="btn btn-nav">Account</a>
         </nav>
      </div>
   </header>
   <div id="header--active" class="bg-color-lightPink menu-swap">
      <div class="fs-row">
         <a class="btn btn-nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">Products</a>
         <a class="btn btn-nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">Where to Buy</a>
         <a class="btn btn-nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">Stories</a>
         <a class="btn btn-nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">FAQ</a>
         <a class="btn btn-nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">Commercial</a>
         <a class="btn btn-nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">About Us</a>
         <a class="btn btn-nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">Press Room</a>
         <a class="btn btn-nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">Contact</a>
      </div>
   </div>
</div>