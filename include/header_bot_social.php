<?php  
	if (isset($_SESSION['ten_khach_hang'])) {
		echo "<div class='col-md-3 header-right user' style='text-align: center !important; margin-top: 20px'>";
		echo "<h4> Xin chào, ". $_SESSION['ten_khach_hang'] ."</h4><p><a href='dang-xuat'><span class='glyphicon glyphicon-log-out' style=''></span> Đăng xuất</a>";
		echo "</div>";
	} else {
?>
<div class="col-md-3 header-right footer-bottom user" >
	<ul>
		<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a></li>
		<li><a class="fb" href="#" onclick="alert('Tính năng đăng được cập nhật')"></a></li>
		<li><a class="twi" href="#" onclick="alert('Tính năng đăng được cập nhật')"></a></li>
		<li><a class="insta" href="#" onclick="alert('Tính năng đăng được cập nhật')"></a></li>
		<li><a class="you" href="#" onclick="alert('Tính năng đăng được cập nhật')"></a></li>
	</ul>
</div>
<?php  
	}
?>