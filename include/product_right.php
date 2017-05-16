<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
<form class="form-item">
<div class="khung">
		<h3><?php echo $san_pham->ten_san_pham ?></h3>
		<p><span class="item_price"><?php echo number_format((int)$san_pham->don_gia, 0, "", "."); ?> đ</span> <del><?php echo number_format((int)$san_pham->don_gia, 0, "", "."); ?> đ</del></p>
		<div class="rating1">
			<span class="starRating">
				<input id="rating5" type="radio" name="rating" value="5">
				<label for="rating5">5</label>
				<input id="rating4" type="radio" name="rating" value="4">
				<label for="rating4">4</label>
				<input id="rating3" type="radio" name="rating" value="3" checked="">
				<label for="rating3">3</label>
				<input id="rating2" type="radio" name="rating" value="2">
				<label for="rating2">2</label>
				<input id="rating1" type="radio" name="rating" value="1">
				<label for="rating1">1</label>
			</span>
		</div>
		<div class="description">
			<!--<h5>Check delivery, payment options and charges at your location</h5>
			<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
			<input type="submit" value="Check">-->
			<p><?php echo $san_pham->mo_ta_tom_tat ?></p>
		</div>
		<div class="color-quality">
			<div class="color-quality-right">
				<h5>Số lượng :</h5>
				<select id="country1" class="frm-field required sect">
					<option value="1">1</option>
					<option value="2">2</option> 
					<option value="3">3</option>					
					<option value="4">4</option>
					<option value="5">5</option>								
				</select>
			</div>
		</div>
		<!--<div class="occasional">
			<h5>Types :</h5>
			<div class="colr ert">
				<label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
			</div>
			<div class="colr">
				<label class="radio"><input type="radio" name="radio"><i></i>Sports Shoes</label>
			</div>
			<div class="colr">
				<label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
			</div>
			<div class="clearfix"> </div>
		</div>-->
		<br>
		<script type="text/javascript">
			$("#country1").change(function() {
				var qty = $(this).val();
				$("#product_qty").val(qty);
			});
		</script>
		<input type="hidden" name="product_qty" id="product_qty" min="1" value="1" />
		<input name="product_code" type="hidden" value="<?php echo $san_pham->ma_san_pham ?>">
			<button type="submit" class="item_add single-item hvr-outline-out button2" style="border:none">Thêm vào giỏ</button>	
</div>
</form>		
</div>