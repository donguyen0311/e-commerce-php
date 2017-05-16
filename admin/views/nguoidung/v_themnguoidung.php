<?php  
  include("include/index_menubutton.php");
?>
  <div class="clearfix"></div>
	<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><?php echo $title ?></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" onclick="window.alert('Tính năng đang được cập nhật...')">Cài đặt</a>
              </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ten_dang_nhap">Tên đăng nhập <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="ten_dang_nhap" id="ten_dang_nhap" value="<?php echo $ten_dang_nhap ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mat_khau">Mật khẩu <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="password" name="mat_khau" id="mat_khau" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ho_ten">Tên người dùng <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="ho_ten" id="ho_ten" value="<?php echo $ho_ten ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="email" id="email" value="<?php echo $email ?>" required="required" class="form-control col-md-7 col-xs-12" placeholder="example@abc.com">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại người dùng <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="ma_loai_nguoi_dung">
                    <?php  
                      foreach ($loainguoidungs as $loainguoidung) {
                    ?>
                    <option <?php echo ($loainguoidung->ma_loai_nguoi_dung == $ma_loai_nguoi_dung) ? "selected": "" ?> value="<?php echo $loainguoidung->ma_loai_nguoi_dung ?>"><?php echo $loainguoidung->ten_loai_nguoi_dung ?></option>
                    <?php  
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kích hoạt <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="active" class="btn-group" data-toggle="buttons">
                      <input type="radio" class="flat" name="active" value="0" checked > &nbsp; Không kích hoạt &nbsp;
                      <input type="radio" class="flat" name="active" value="1"> &nbsp;Kích hoạt
                  </div>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                	<button type="submit" name="submit" class="btn btn-primary">Thêm</button>
                  	<button type="button" class="btn btn-danger" onclick="window.location='nguoidung.php'">Hủy</button>  
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
