<?php  
	$menu_current = $_SERVER['PHP_SELF'];
	$array_menu = ["index.php", "mens.php", "womens.php", "accessories.php", "contact.php"];
	$menu_temp = substr($menu_current,12); //sẽ bỏ nếu up lên host, dùng thẳng $menu_current;
	$_index = $_mens = $_womens = $_accessories = $_contact = "";
	foreach ($array_menu as $menu) {
		if ($menu_temp == $menu) {
			$temp = substr($menu, 0, strrpos($menu,"."));
			switch ($temp) {
				case 'index':
					$_index = " active menu__item--current ";
					break;
				case 'mens':
					$_mens = " active menu__item--current ";
					break;
				case 'womens':
					$_womens = " active menu__item--current ";
					break;
				case 'accessories':
					$_accessories = " active menu__item--current ";
					break;
				case 'contact':
					$_contact = " active menu__item--current ";
					break;
				default:
					$_index = " active menu__item--current ";
					break;
			}
			break;
		}
	}
?>
<div class="top_nav_left">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav menu__list">
			<li class="menu__item <?php echo $_index ?>"><a class="menu__link" href="trang-chu">Trang chủ </span></a></li>
			<li class="dropdown menu__item <?php echo $_mens ?>">
				<a href="do-nam" class="menu__link">Đồ Nam </a>
					<!-- <ul class="dropdown-menu multi-column columns-3">
						<div class="row">
							<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
								<a href="mens.php"><img src="images/woo1.jpg" alt=" "/></a>
							</div>
							<div class="col-sm-3 multi-gd-img">
								<ul class="multi-column-dropdown">
									<li><a href="mens.php">Tất Cả</a></li>
									<li><a href="mens.php">Áo Nam</a></li>
									<li><a href="mens.php">Quần Nam</a></li>
									<li><a href="mens.php">Giày Nam</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</ul> -->
			</li>
			<li class="dropdown menu__item <?php echo $_womens ?>">
				<a href="do-nu" class="menu__link">Đồ Nữ </a>
					<!-- <ul class="dropdown-menu multi-column columns-3">
						<div class="row">
							<div class="col-sm-6 multi-gd-img multi-gd-text ">
								<a href="womens.php"><img src="images/woo.jpg" alt=" "/></a>
							</div>
							<div class="col-sm-3 multi-gd-img">
								<ul class="multi-column-dropdown">
									<li><a href="womens.php">Tất Cả</a></li>
									<li><a href="womens.php">Áo Nữ</a></li>
									<li><a href="womens.php">Quần Nữ</a></li>
									<li><a href="womens.php">Giày Nữ</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</ul> -->
			</li>
			<li class="dropdown menu__item <?php echo $_accessories ?>">
				<a href="phu-kien" class="menu__link">Phụ Kiện </a>
					<!-- <ul class="dropdown-menu multi-column columns-3">
						<div class="row">
							<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
								<a href="accessories.php"><img src="images/woo1.jpg" alt=" "/></a>
							</div>
							<div class="col-sm-3 multi-gd-img">
								<ul class="multi-column-dropdown">
									<li><a href="accessories.php">Tất Cả</a></li>
									<li><a href="accessories.php">Nón</a></li>
									<li><a href="accessories.php">Mắt Kính</a></li>
									<li><a href="accessories.php">Thắt Lưng</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</ul> -->
			</li>
			<li class=" menu__item <?php echo $_contact ?>"><a class="menu__link" href="lien-he">Liên Hệ</a></li>
		  </ul>
		</div>
	  </div>
	</nav>	
</div>
