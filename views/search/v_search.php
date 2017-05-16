<!-- product-nav -->
<div class="product-easy">
	<div class="container">
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Kết quả tìm kiếm</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<!-- Tab 0 -->
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<!-- Sản phẩm -->

						<?php 
							foreach ($ket_qua_tim_kiem as $ket_qua) {
						?>
						<form class="form-item">
						<div class="khung">
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/hinh_san_pham/<?php echo $ket_qua->hinh ?>" alt="" class="pro-image-front">
									<img src="images/hinh_san_pham/<?php echo $ket_qua->hinh ?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="san-pham-<?php echo $ket_qua->ma_san_pham ?>" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<?php if ($ket_qua->san_pham_moi == 1) { ?>
										<span class="product-new-top">New</span>
										<?php } ?>
								</div>
								<div class="item-info-product ">
									<h4 class="hiddenx"><a href="san-pham-<?php echo $ket_qua->ma_san_pham ?>" ><?php echo $ket_qua->ten_san_pham ?></a></h4>
									<div class="info-product-price">
										<del><?php echo number_format((int)$ket_qua->don_gia, 0, "", "."); ?> đ</del>
										<P>
										<span class="item_price"><?php echo number_format((int)$ket_qua->don_gia, 0, "", "."); ?> đ</span>
										
									</div>
									<input type="hidden" name="product_qty" min="1" value="1" />
									<input name="product_code" type="hidden" value="<?php echo $ket_qua->ma_san_pham ?>" />
										<button type="submit" class="item_add single-item hvr-outline-out button2" style="border:none">Thêm vào giỏ</button>										
								</div>
							</div>
						</div>
						</div>
						</form>	
						<?php 
							}
						?>
					<!-- //Sản phẩm -->
						<div class="clearfix"></div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
<!-- //product-nav -->