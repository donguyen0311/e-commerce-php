<h5>CHẾ ĐỘ XEM</h5>
<div class="sort-grid">
	<form id="submit_sort" action="" method="get" accept-charset="utf-8">
		<div class="sorting">
			<h6>Sắp xếp</h6>
			<select name="sort" id="country1" class="frm-field required sect">
				<option value="0" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 0) ? "selected" : "" ?> >Mặc định</option>
				<option value="1" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 1) ? "selected" : "" ?> >Tên(A - Z)</option> 
				<option value="2" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 2) ? "selected" : "" ?> >Tên(Z - A)</option>
				<option value="3" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 3) ? "selected" : "" ?> >Giá(Cao - Thấp)</option>
				<option value="4" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 4) ? "selected" : "" ?> >Giá(Thấp - Cao)</option>					
			</select>
			<div class="clearfix"></div>
		</div>
		<?php  
			echo (!empty($hidden_min_price)) ? $hidden_min_price : "";
			echo (!empty($hidden_max_price)) ? $hidden_max_price : "";
			echo (!empty($hidden_limit)) ? $hidden_limit : "";
			echo (!empty($hidden_page)) ? $hidden_page : "";
		?>
	</form>
	<form id="submit_limit" action="" method="get" accept-charset="utf-8">
		<div class="sorting">
			<h6>Hiển thị</h6>
			<select name="limit" id="country2" class="frm-field required sect">
				<option value="9" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 9) ? "selected" : "" ?> >9</option>
				<option value="12" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 12) ? "selected" : "" ?> >12</option> 
				<option value="24" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 24) ? "selected" : "" ?> >24</option>					
				<option value="36" <?php echo (isset($_GET['limit']) && $_GET['limit'] == 36) ? "selected" : "" ?> >36</option>								
			</select>
			<div class="clearfix"></div>
		</div>
		<?php 
			echo (!empty($hidden_min_price)) ? $hidden_min_price : "";
			echo (!empty($hidden_max_price)) ? $hidden_max_price : "";
			echo (!empty($hidden_sort)) ? $hidden_sort : "";
			echo (!empty($hidden_page)) ? $hidden_page : ""; 
		?>
	</form>
	<div class="clearfix"></div>
</div>
<script type="text/javascript">
	$("#country1").change(function(){
		$("#submit_sort").submit();
	});
	$("#country2").change(function(){
		$("#submit_limit").submit();
	});
</script>