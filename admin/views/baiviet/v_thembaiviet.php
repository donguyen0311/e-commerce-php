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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tieu_de">Tiêu đề <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="tieu_de" id="tieu_de" value="<?php echo $tieu_de ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại bài viết <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="ma_loai_bai_viet">
                    <option value="0">Không</option>
                    <?php  
                      foreach ($loaibaiviets as $loaibaiviet) {
                    ?>
                    <option <?php echo ($loaibaiviet->ma_loai_bai_viet == $ma_loai_bai_viet) ? "selected": "" ?> value="<?php echo $loaibaiviet->ma_loai_bai_viet ?>"><?php echo $loaibaiviet->ten_loai_bai_viet ?></option>
                    <?php  
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="xuat_ban">Xuất bản <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" name="xuat_ban" id="xuat_ban" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $xuat_ban ?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày xuất bản <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 birthday" required="required" type="text" name="ngay_xuat_ban" value="<?php echo $ngay_xuat_ban ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày hết hạn <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12 birthday" required="required" type="text" name="ngay_het_han" value="<?php echo $ngay_het_han ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung tóm tắt <span class="required">*</span>
                </label>  
              </div>
              <textarea name="noi_dung_tom_tat" class="resizable_textarea form-control ckeditor"><?php echo $noi_dung_tom_tat ?></textarea>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung chi tiết <span class="required">*</span>
                </label>
              </div>
              <textarea name="noi_dung_chi_tiet" class="resizable_textarea form-control ckeditor" ><?php echo $noi_dung_chi_tiet ?></textarea>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                	<button type="submit" name="submit" class="btn btn-primary">Thêm</button>
                  	<button type="button" class="btn btn-danger" onclick="window.location='baiviet.php'">Hủy</button>  
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
