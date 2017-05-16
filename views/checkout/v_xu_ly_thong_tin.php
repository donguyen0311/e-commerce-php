<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kiểm tra thông tin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center">Thông tin khách hàng</h2>
  <form class="form-horizontal" method="POST" action="dat-hang">
    <div class="form-group">
      <label class="control-label col-sm-2" for="ten_khach_hang">Tên khách hàng:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="ten_khach_hang" value="<?php echo $khach_hang->ten_khach_hang ?>" id="ten_khach_hang" placeholder="Nhập tên khách hàng" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Giới tính:</label>
      <div class="col-sm-10">
        <div class="radio">
          <label><input type="radio" value="1" name="gioi_tinh" <?php echo ($khach_hang->phai == 1) ? "checked" : "" ?> >Nam</label>
        </div>
        <div class="radio">
          <label><input type="radio" value="0" name="gioi_tinh" <?php echo ($khach_hang->phai == 0) ? "checked" : "" ?>>Nữ</label>
        </div>
      </div> 
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="datepicker">Ngày sinh:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo $khach_hang->ngay_sinh ?>" name="ngay_sinh" id="datepicker" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dia_chi">Địa chỉ:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dia_chi" name="dia_chi" value="<?php echo ($khach_hang->dia_chi == "None") ? " ":$khach_hang->dia_chi ?>" placeholder="Nhập địa chỉ" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="so_dien_thoai">Số điện thoại:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="so_dien_thoai" value="<?php echo ($khach_hang->dien_thoai == "None") ? " ":$khach_hang->dien_thoai ?>" name="so_dien_thoai" placeholder="Nhập số điện thoại" required>
      </div>
    </div>
    <div class="form-group" style="text-align: center">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Hoàn tất</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
