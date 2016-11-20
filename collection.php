<?php include('parts/header.php'); ?>
<?php $width = 'fs-lg-fourth fs-md-third fs-sm-1' ?>

<div class="header header--main">&nbsp;</div>

<div class="header--md">
	<div class="fs-row">
		<div class="fs-cell fs-lg-half fs-lg-push-3 fs-md-4 fs-md-push-1 fs-sm-hide">
			<div class="menu text-center">
				<a href="" class="btn">graphic tees</a>
				<a href="" class="btn">sportswear</a>
				<a href="" class="btn">sale</a>
			</div>
		</div>
		<div class="fs-cell fs-lg-3 fs-md-1 fs-sm-hide">
			<div class="menu text-right">
				<span class="btn color--gray">sort:</span>
				<select class="naked">
					<option selected>newest to oldest</option>
					<option>best seller</option>
				</select>
			</div>
		</div>
	</div>
</div>

<div class="fs-row">
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
	<div class="fs-cell <?php echo $width; ?>"><?php include('parts/product-grid-item.php'); ?></div>
</div>

<?php include('parts/footer.php'); ?>