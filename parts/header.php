<div id="header-wrapper">
   <?php 
      // Available Classes for #header:
      // .forehead: adds some space above the nav.
      // .fivehead: adds a bunch of space above the nav.
      // .chin: adds some space below the nav.
   ?>
   <header id="header" class="menu-swap">
      <div class="fs-row">
         <menu id="header--nav_left" class="fs-cell fs-lg-3 fs-md-2 fs-sm-hide">
            <a href="#" class="btn btn--nav btn-hamburg swap" data-swap-target=".menu-swap">Menu</a>
         </menu>
         <menu id="header--logo" class="fs-cell fs-lg-6 fs-md-2 fs-sm-1 text-center">
            <a href="/" class="btn btn--nav btn-logo"><?php echo $siteName; ?></a>
         </menu>
         <menu id="header--nav_right" class="fs-cell fs-lg-3 fs-md-2 fs-sm-1 text-right">
            <a href="?page=search" class="btn btn--nav">Search</a>
         </menu>
      </div>
   </header>
   <?php // Need to figure out how to append this with jQuery rather than by this method ?>
   <header id="header-mobile">
      <div class="fs-row">
         <nav id="header--logo-mobile" class="fs-cell fs-lg-6 fs-md-3 fs-sm-full">
            <a href="?page=collection" class="btn btn--nav btn-close ss-gizmo ss-plus rotate-45"></a>
            <a href="?page=collection" class="btn btn--nav">Shop</a>
            <a href="?page=collection" class="btn btn--nav">Stockists</a>
         </nav>
      </div>
   </header>
   <div id="header--active" class="bg-color-lightPink menu-swap">
      <div class="fs-row">
         <a class="btn btn--nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">Products</a>
         <a class="btn btn--nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">Where to Buy</a>
         <a class="btn btn--nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">Stories</a>
         <a class="btn btn--nav fs-cell fs-lg-fourth fs-md-fourth fs-sm-half text-center" href="#">FAQ</a>
      </div>
   </div>
</div>