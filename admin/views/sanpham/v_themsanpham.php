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
            <form action="" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ten_san_pham">Tên sản phẩm <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="ten_san_pham" id="ten_san_pham" value="<?php echo $ten_san_pham ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thuộc <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="ma_loai_cha" id="ma_loai_cha">
                    <?php  
                      foreach ($loaisanphams as $loaisanpham) {
                        if ($loaisanpham->ma_loai_cha == 0) {
                    ?>
                    <option <?php echo ($loaisanpham->ma_loai_san_pham == $ma_loai_cha) ? "selected": "" ?> value="<?php echo $loaisanpham->ma_loai_san_pham ?>"><?php echo $loaisanpham->ten_loai_san_pham ?></option>
                    <?php  
                        }
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Loại sản phẩm <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="ma_loai" id="ma_loai">

                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hinh">Hình <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" name="hinh" id="hinh">
                  <br>
                  <div class="image-holder" id="image-holder"></div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="don_gia">Đơn giá <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" name="don_gia" id="don_gia" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $don_gia ?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="san_pham_moi">Sản phẩm mới <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="checkbox" name="san_pham_moi" id="san_pham_moi" class="form-control col-md-7 col-xs-12 flat" value="1" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="san_pham_moi">Khuyến mãi <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="checkbox" name="khuyen_mai" id="khuyen_mai" class="form-control col-md-7 col-xs-12 js-switch" >
                </div>
              </div>

              <div class="khuyen_mai">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày khuyến mãi <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input class="date-picker form-control col-md-7 col-xs-12 birthday" required="required" type="text" name="ngay_khuyen_mai" id="ngay_khuyen_mai">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày hết hạn <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input class="date-picker form-control col-md-7 col-xs-12 birthday" required="required" type="text" name="ngay_het_han" id="ngay_het_han">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ten_san_pham">Nội dung khuyến mãi <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="noi_dung_khuyen_mai" id="noi_dung_khuyen_mai" required="required" class="form-control col-md-7 col-xs-12" value="0">
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả tóm tắt <span class="required">*</span>
                </label>  
              </div>
              <textarea name="mo_ta_tom_tat" class="resizable_textarea form-control ckeditor"><?php echo $mo_ta_tom_tat ?></textarea>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả chi tiết <span class="required">*</span>
                </label>
              </div>
              <textarea name="mo_ta_chi_tiet" class="resizable_textarea form-control ckeditor" ><?php echo $mo_ta_chi_tiet ?></textarea>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                	<button type="submit" name="submit" id="submit" class="btn btn-primary">Thêm</button>
                  	<button type="button" class="btn btn-danger" onclick="window.location='sanpham.php'">Hủy</button>  
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">
  $(".khuyen_mai").hide();
  $("#khuyen_mai").change(function() {
    var ischecked= $(this).is(':checked');
    if (!ischecked) {
      $(".khuyen_mai").slideToggle();
    }
    else {
      $(".khuyen_mai").slideToggle();
    }
    
  });


  $(document).ready(function(){

  $("#submit").click(function() {
    var ischecked= $("#khuyen_mai").is(':checked');
    if (ischecked) {
      var ma_san_pham = <?php echo $id_san_pham_se_them + 1; ?>;
      var ngay_khuyen_mai = $("#ngay_khuyen_mai").val();
      var ngay_het_han = $("#ngay_het_han").val();
      var noi_dung_khuyen_mai = $("#noi_dung_khuyen_mai").val();
      $.ajax({
        url: 'themsanphamkhuyenmai.php',
        type: 'POST',
        data: {ma_san_pham: ma_san_pham, ngay_khuyen_mai: ngay_khuyen_mai, ngay_het_han: ngay_het_han, noi_dung_khuyen_mai: noi_dung_khuyen_mai},
      })
      .done(function(data) {
        console.log("success");
        window.alert(data);
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
      
    }

  });

  $("#hinh").on('change', function () {

    if (typeof (FileReader) != "undefined") {
  
      var image_holder = $("#image-holder");
      image_holder.empty();
  
      var reader = new FileReader();
      reader.onload = function (e) {
        $("<img />", {
          "src": e.target.result,
          "class": "thumb-image"
        }).appendTo(image_holder);
  
      }
      image_holder.show();
      reader.readAsDataURL($(this)[0].files[0]);
    } else {
      alert("This browser does not support FileReader.");
    }
  });// end Hiển thị hình khi upload


    var ma_loai_cha = $("#ma_loai_cha").val();
    $.ajax({
      url: 'laydulieuloaisanpham.php',
      type: 'POST',
      data: {ma_loai_san_pham_cha: ma_loai_cha},
    })
    .done(function(kq) {
      $("#ma_loai").html(kq);
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
  });
  $("#ma_loai_cha").change(function(){
    var ma_loai_cha = $("#ma_loai_cha").val();
    $.ajax({
      url: 'laydulieuloaisanpham.php',
      type: 'POST',
      data: {ma_loai_san_pham_cha: ma_loai_cha},
    })
    .done(function(kq) {
      $("#ma_loai").html(kq);
      console.log("success");
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });
    
  });

</script>