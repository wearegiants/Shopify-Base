<?php
$items = array("1", "2", "3", "4", "5");
$size  = array('medium','large');
?>

<div class="product--grid-item">
<div class="product--grid-wrapper product--grid-<?php echo $size[array_rand($size)];?> ">
   <div class="product--grid-thumb">
      <img src="/assets/test-image-<?php echo $items[array_rand($items)]; ?>.jpg" class="img-responsive" />
   </div>
   <div class="product--grid-info">
      <a href="?page=product"><span>Product Title</span></a>
   </div>
</div>
</div>