<?php
@session_start(); //start session
?>
<!-- check out -->
<div class="checkout">
	<div class="container">
		<h3>Đơn hàng của bạn</h3>
		
			<?php
					if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
						$total 			= 0;
						$list_tax 		= '';
						$cart_box = "<div class='table-responsive checkout-right animated wow slideInUp' data-wow-delay='.5s'><table class='timetable_sub'>"; 
						$tbl="<thead>
								<tr>
									<th>Xóa bỏ</th>
									<th>Hình Sản Phẩm</th>
									<th>Tên sản phẩm</th>
									<th>Số lượng</th>
									<th>Đơn giá</th>
									<th>Thành tiền</th>
								</tr>
							</thead>";
						$cart_box.= $tbl;
						foreach($_SESSION["products"] as $product){ //Print each item, quantity and price.
							$product_name = $product["product_name"];
							$product_qty = $product["product_qty"];
							$product_price = $product["product_price"];
							$product_code = $product["product_code"];
							$product_image = $product["product_image"];
							
							$item_price 	= number_format(($product_price * $product_qty),0,",",".");  // price x qty = total item price
							$row="<tr class='rem'>
									<td class='invert-closeb'>
										<div class=\"shopping-cart\"><a href=\"javascript:void(0)\" class=\"remove-item\" data-code=\"$product_code\"><img src=\"images/close_1.png\" /></a></div></
									</td>
									<td class='invert-image'><img src='images/hinh_san_pham/".$product_image."' alt=' ' class='img-responsive' style='width:100px;height:100px;margin:0 auto'/></td>
									<td class='invert'>". $product_name ."</td>
									<td class='invert'><input data_code='$product_code' type='number' value='$product_qty' class='product_qty' name='product_qty' min='1' style='width:50px' ></td>
									<td class='invert'>". number_format($product_price,0,",",".") ." đ</td>
									<td class='invert'>$item_price đ</td>
								</tr>"; 
							$cart_box.=$row;
							$subtotal 		= ($product_price * $product_qty); //Multiply item quantity * price
							$total 			= ($total + $subtotal); //Add up to total price
						}
						$cart_box.="</table>";
						$cart_box.= "<div class='checkout-left'>		
											<div class='checkout-left-basket animated wow slideInLeft' data-wow-delay='.5s'>
												<h4>Tổng tiền</h4>
												<ul>
													<li>Tổng tiền <i>-</i> <span>". number_format($total,0,"",".") ."đ</span></li>
												</ul>
											</div>
											<div class='clearfix'> </div>
										</div>
										<div class='clearfix'> </div>
										<div class='checkout-right-basket animated wow slideInRight' data-wow-delay='.5s'>
											<button type='button' onclick='window.location=\"kiem-tra-thong-tin.html\"' >Thanh toán</button>
										</div>
									</div>";
						echo $cart_box;
					} else{
						echo "<h1 align=\"center\">Giỏ hàng của bạn trống...</h1>";
					}
				?>

		
	</div>
</div>	
<!-- //check out -->