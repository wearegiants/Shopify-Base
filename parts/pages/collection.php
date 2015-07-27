<div class="fs-row">
   <nav class="breadcrumbs fs-cell fs-full-all">
      <span class="fs-lg-push-6">
         <a class="btn btn-nav btn-sm" href="#">All</a>
         <a class="btn btn-nav btn-sm" href="#">Spring 15</a>
         <a class="btn btn-nav btn-sm" href="#">Spring 16</a>
         <a class="btn btn-nav btn-sm" href="#">Winter 15</a>
      </span>
   </nav>
</div>

<div class="fs-row">
   <div class="fs-cell fs-full-all sort">
      <label class="btn btn-nav btn-sm">Sort by:</label>
         <select class="btn btn-nav btn-sm">
            <option>Newest</option>
            <option>Featured</option>
            <option>Best Selling</option>
         </select>
      </div>
   </div>
</div>

<div class="collection--baner banner wallpaper" data-background-options='{"source":"/assets/collection-bg.jpg"}' style="display:none">
   <div class="centered centered-full">
      <div class="fs-row">
         <div class="fs-cell fs-full-all">
            <h1 class="collection--feature_title light">Spring 2015</h1>
         </div>
      </div>
   </div>
</div>

<div id="product-grid" class="text-center">
<div class="fs-row">
   <?php $productWidth = 'fs-lg-4 fs-md-half fs-sm-full'; ?>
   <?php $featureWidth = 'fs-lg-8 fs-md-6 fs-sm-full'; ?>
   <div class="product--grid-cell equal <?php echo $productWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $featureWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $productWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $productWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $productWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $productWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $featureWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $productWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $productWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $productWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $productWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
   <div class="product--grid-cell equal <?php echo $productWidth; ?>"><?php include ('parts/product--grid-item.php' ); ?></div>
</div>
</div>