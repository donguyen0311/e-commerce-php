<?php  
  include("include/index_menubutton.php");
?>
  <div class="clearfix"></div>

<div class="row">
  <div class="col-md-12">
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
        <div class="title_left">
          <form action="" method="get" accept-charset="utf-8">
            <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-left top_search">
            <label for="timkiem">Tìm kiếm: (1: Chưa thanh toán, 2: Đã thanh toán, 3: Hủy hóa đơn)</label>
              <div class="input-group">
                <input type="text" name="trang_thai" id="timkiem" class="form-control" placeholder="Tìm kiếm...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="submit">Gửi</button>
                </span>
              </div>
            </div>
          </form>
        </div>

        <!-- start project list -->
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên khách hàng</th>
              <th>Ngày đặt hàng</th>
              <th>Tổng tiền</th>
              <th>Trạng thái</th>
              <th>Tùy chỉnh</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $i = 0;
            foreach ($hoadons as $hoadon) {

          ?>
            <tr>
              <td><?php echo ++$i ?> <input type="hidden" name="ma_hoa_don" id="ma_hoa_don_<?php echo $i ?>" value="<?php echo $hoadon->ma_hoa_don ?>"></td>
              <td><?php echo $hoadon->ten_khach_hang ?></td>
              <td><?php echo $hoadon->ngay_hd ?></td>
              <td><?php echo number_format($hoadon->tri_gia,0, "", ".") ?> đ</td>
              <td>
                <select name="trang_thai" id="trang_thai_<?php echo $i ?>">
                  <option value="1" <?php echo ($hoadon->trang_thai == 1) ? "selected" : "" ?> >Chưa thanh toán</option>
                  <option value="2" <?php echo ($hoadon->trang_thai == 2) ? "selected" : "" ?> >Đã thanh toán</option>
                  <option value="3" <?php echo ($hoadon->trang_thai == 3) ? "selected" : "" ?> >Hủy hóa đơn</option>
                </select> 
              </td>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#trang_thai_<?php echo $i ?>").change(function(){
                    var ma_hoa_don = $("#ma_hoa_don_<?php echo $i ?>").val();
                    var trang_thai = $("#trang_thai_<?php echo $i ?>").val();
                    $.ajax({
                      url: 'thaydoitrangthaihoadon.php',
                      type: 'POST',
                      data: {ma_hoa_don: ma_hoa_don, trang_thai: trang_thai},
                    })
                    .done(function(data) {
                      console.log("success");
                      window.alert(data);
                      location.reload();
                    })
                    .fail(function() {
                      console.log("error");
                    })
                    .always(function() {
                      console.log("complete");
                    });
                    
                  });
                });
              </script>
              <td>
                <a href="chitiethoadon.php?ma_hoa_don=<?php echo $hoadon->ma_hoa_don ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Chi tiết </a>
              </td>
            </tr>
            <?php
              }  
            ?>
          </tbody>
        </table>
        <!-- end project list -->
        <?php echo $paging ?>
      </div>
    </div>
  </div>
</div>