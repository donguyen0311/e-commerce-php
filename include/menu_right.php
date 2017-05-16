<div class="top_nav_right">
	<div class="cart box_1">
		<a >
			<h3> <div class="total">
				<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
				<span id="total_products">
				<?php
					$tong_tien = 0;
					if(isset($_SESSION["products"])) {  
						foreach ($_SESSION["products"] as $value) {
							$tong_tien += $value['product_qty'] * $value['product_price'];
						}
					}
					echo number_format($tong_tien,0,"",".");
				?>
            đ </span> 
            (<span class="cart-box" id="cart-info" title="View Cart">
            <?php 
	            if(isset($_SESSION["products"])){
	                echo count($_SESSION["products"]); 
	            }else{
	                echo 0; 
	            }
	        ?>	
            </span> sản phẩm)</div>
			</h3>
		</a>
		<p><a href="gio-hang" style="color: #fff;">Đến giỏ hàng</a></p>	
	</div>	
</div>