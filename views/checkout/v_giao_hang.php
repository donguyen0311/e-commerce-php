<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đơn hàng</title>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
</head>
<body>
	<div class="container">
	  <h2 style="text-align: center">THÔNG TIN HÓA ĐƠN</h2>
	  <p>Tên khách hàng: <?php echo $khach_hang->ten_khach_hang ?></p>
	  <p>Giới tính: <?php echo ($khach_hang->phai == 1) ? "Nam" : "Nữ" ?></p>  
	  <p>Ngày sinh: <?php echo $khach_hang->ngay_sinh ?></p>
	  <p>Địa chỉ: <?php echo $khach_hang->dia_chi ?></p>
	  <p>Số điện thoại: <?php echo $khach_hang->dien_thoai ?></p>
	  <p>Email: <?php echo $khach_hang->email ?></p>          
	  <table class="table">
	    <thead>
	      <tr>
	        <th>Hình sản phẩm</th>
	        <th>Tên sản phẩm</th>
	        <th>Số lượng</th>
	        <th>Đơn giá</th>
	        <th>Thành tiền</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php  
	    	foreach ($chi_tiet_hoa_dons as $ct_hoa_don) {
	    ?>
	      <tr>
	        <td><img src="images/hinh_san_pham/<?php echo $ct_hoa_don->hinh ?>" alt=' ' class='img-responsive' style='width:100px;height:100px;margin:0 auto'></td>
	        <td><?php echo $ct_hoa_don->ten_san_pham ?></td>
	        <td><?php echo $ct_hoa_don->so_luong ?></td>
	        <td><?php echo number_format((int)$ct_hoa_don->don_gia,0,"",".") ?> đ</td>
	        <td><?php echo number_format((int)$ct_hoa_don->so_luong * $ct_hoa_don->don_gia,0,"",".") ?> đ</td>
	      </tr>
	    <?php  
			}
	    ?>
		  <tr>
	        <td></td>
	        <td></td>
	        <td></td>
	        <td><b>Tổng tiền: </b></td>
	        <td><b><?php echo number_format((int)$hoa_dons->tri_gia,0,"",".") ?> đ</b></td>
	      </tr>
	    </tbody>
	  </table>
	</div>
	<div class="container" style="text-align: center">
		<button type="button" class="btn btn-default hide_print" onclick="window.print()"><span class="glyphicon glyphicon-print"></span> In</button>
		<button type="button" class="btn btn-default hide_print" onclick="window.location='trang-chu'"><span class="glyphicon glyphicon-ok"></span> Hoàn tất</button>
	</div>
</body>
</html>