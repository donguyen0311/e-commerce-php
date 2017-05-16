<div class="col-md-6 header-middle">
	<form method="GET" action="tim-kiem">
		<div class="search">
			<input type="search" placeholder="Tìm Kiếm" name="noi_dung_tim_kiem" required="">
		</div>
		<div class="section_room">
			<select id="country" onchange="change_country(this.value)" class="frm-field required" name="loai_tim_kiem">
				<option value="tat_ca">Tất cả danh mục</option>
				<option value="do_nam">Đồ Nam</option>
				<option value="do_nu">Đồ Nữ</option>
				<option value="phu_kien">Phụ Kiện</option>
			</select>
		</div>
		<div class="sear-sub">
			<input type="submit" value=" " name="submit">
		</div>
		<div class="clearfix"></div>
	</form>
</div>