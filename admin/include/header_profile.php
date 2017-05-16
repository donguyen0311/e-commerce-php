<li class="">
  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    <img src="images/img.jpg" alt=""><?php echo $_SESSION['fullname'] ?>
    <span class=" fa fa-angle-down"></span>
  </a>
  <ul class="dropdown-menu dropdown-usermenu pull-right">
    <li><a href="javascript:;" onclick="window.localtion='thongtincanhan.php'"> Thông tin cá nhân</a></li>
    <li>
      <a href="javascript:;" onclick="window.alert('Tính năng đang được cập nhật...')">
        <!--<span class="badge bg-red pull-right">50%</span>-->
        <span>Cài đặt</span>
      </a>
    </li>
    <li><a href="javascript:;" onclick="window.alert('Tính năng đang được cập nhật...')">Hỗ trợ</a></li>
    <li><a href="javascript:void(0)" onclick="window.location='logout.php'"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
  </ul>
</li>