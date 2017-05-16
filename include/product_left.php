<div class="col-md-5 single-right-left animated wow slideInUp animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInUp;">
	<div class="grid images_3_of_2">
		<div class="flexslider">
			<!-- FlexSlider -->
				<script>
				// Can also be used with $(document).ready()
					$(window).load(function() {
						$('.flexslider').flexslider({
						// animation: "slide",
						controlNav: "thumbnails"
						});
					});
				</script>
			<!-- //FlexSlider-->
			<ul class="slides">
				<li data-thumb="images/hinh_san_pham/<?php echo $san_pham->hinh ?>">
					<div class="thumb-image"> <img src="images/hinh_san_pham/<?php echo $san_pham->hinh ?>" data-imagezoom="true" class="img-responsive"> </div>
				</li>	
			</ul>
			<div class="clearfix"></div>
		</div>	
	</div>
</div>