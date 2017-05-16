<div class="single-pro">		
	<?php
		foreach ($san_phams as $san_pham) {
	?>
	<form class="form-item">
	<div class="khung">
		<div class="col-md-4 product-men yes-marg">
			<div class="men-pro-item simpleCart_shelfItem">
				<div class="men-thumb-item">
					<img src="images/hinh_san_pham/<?php echo $san_pham->hinh ?>" alt="" class="pro-image-front">
					<img src="images/hinh_san_pham/<?php echo $san_pham->hinh ?>" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="san-pham-<?php echo $san_pham->ma_san_pham ?>" class="link-product-add-cart">Xem chi tiết</a>
							</div>
						</div>
						<?php  
							if ($san_pham->san_pham_moi == 1) {
						?>
						<span class="product-new-top">New</span>
						<?php  
							} else {
						?>
						<span class="product-new-top"><?php echo $san_pham->noi_dung_khuyen_mai ?></span>
						<?php		
							}
						?>				
				</div>
				<div class="item-info-product ">
					<h4 class="hiddenx"><a href="san-pham-<?php echo $san_pham->ma_san_pham ?>"><?php echo $san_pham->ten_san_pham ?></a></h4>
					<div class="info-product-price">
						<del><?php echo number_format((int)$san_pham->don_gia,0,"",".") ?> đ</del>
						<p>
						<span class="item_price"><?php echo number_format((int)$san_pham->don_gia,0,"",".") ?> đ</span>
					</div>
					<input type="hidden" name="product_qty" min="1" value="1" />
					<input name="product_code" type="hidden" value="<?php echo $san_pham->ma_san_pham ?>" />
						<button type="submit" class="item_add single-item hvr-outline-out button2" style="border:none">Thêm vào giỏ</button>									
				</div>
			</div>
		</div>
	</div>
	</form>
	<?php  
		}
	?>
	<div class="clearfix"></div>
</div>