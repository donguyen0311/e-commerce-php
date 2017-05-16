<!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3 style="text-align:center"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h3>
      <ul class="nav side-menu">
        <?php  
            include_once("controllers/phan_quyen.php");
            if (check_quyen_truy_cap()) {
        ?>
        <li><a><i class="fa fa-home"></i> Trang Chủ <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="bang-dieu-khien">Bảng điều khiển</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-newspaper-o"></i> Loại bài viết <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-loai-bai-viet">Danh sách loại bài viết</a></li>
            <li><a href="them-loai-bai-viet">Thêm loại bài viết</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-edit"></i> Bài viết <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-bai-viet">Danh sách bài viết</a></li>
            <li><a href="them-bai-viet">Thêm bài viết</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-tags"></i> Loại sản phẩm <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-loai-san-pham">Danh sách loại sản phẩm</a></li>
            <li><a href="them-loai-san-pham">Thêm loại sản phẩm</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-tag"></i> Sản phẩm <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-san-pham">Danh sách sản phẩm</a></li>
            <li><a href="danh-sach-san-pham-khuyen-mai">Danh sách sản phẩm khuyến mãi</a></li>
            <li><a href="them-san-pham">Thêm sản phẩm</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-male"></i> Loại người dùng <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-loai-nguoi-dung">Danh sách loại người dùng</a></li>
            <li><a href="them-loai-nguoi-dung">Thêm loại người dùng</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-user"></i> Người dùng <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-nguoi-dung">Danh sách người dùng</a></li>
            <li><a href="them-nguoi-dung">Thêm người dùng</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-users"></i> Khách hàng <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-khach-hang">Danh sách khách hàng</a></li>
            <li><a href="them-khach-hang">Thêm khách hàng</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-cubes"></i> Đơn hàng <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-hoa-don">Danh sách đơn hàng</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-envelope-o"></i> Liên hệ <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-lien-he">Danh sách liên hệ</a></li>
            <li><a href="danh-sach-email-dang-ky-nhan-tin">Danh sách email nhận tin</a></li>
          </ul>
        </li>
        <?php  
          } else {
        ?>
        <li><a><i class="fa fa-home"></i> Trang Chủ <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="bang-dieu-khien">Bảng điều khiển</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-edit"></i> Bài viết <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-bai-viet">Danh sách bài viết</a></li>
            <li><a href="them-bai-viet">Thêm bài viết</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-tag"></i> Sản phẩm <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-san-pham">Danh sách sản phẩm</a></li>
            <li><a href="danh-sach-san-pham-khuyen-mai">Danh sách sản phẩm khuyến mãi</a></li>
            <li><a href="them-san-pham">Thêm sản phẩm</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-users"></i> Khách hàng <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-khach-hang">Danh sách khách hàng</a></li>
            <li><a href="them-khach-hang">Thêm khách hàng</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-cubes"></i> Đơn hàng <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-hoa-don">Danh sách đơn hàng</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-envelope-o"></i> Liên hệ <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="danh-sach-lien-he">Danh sách liên hệ</a></li>
            <li><a href="danh-sach-email-dang-ky-nhan-tin">Danh sách email nhận tin</a></li>
          </ul>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
  <!-- /sidebar menu -->