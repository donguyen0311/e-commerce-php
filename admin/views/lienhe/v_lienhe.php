<?php  
  include("include/index_menubutton.php");
?>
<!-- page content -->
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
            <label for="timkiem">Tìm kiếm: (1: Tin nhắn chưa đọc, 2: Tin nhắn đã đọc, 3: Hủy tin nhắn)</label>
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
              <th>Email</th>
              <th>Nội dung</th>
              <th>Trạng thái</th>
              <!-- <th>Tùy chỉnh</th> -->
            </tr>
          </thead>
          <tbody>
          <?php
            $i = 0;
            foreach ($lienhes as $lienhe) {

          ?>
            <tr>
              <td><?php echo ++$i ?> <input type="hidden" name="ma_lien_he" id="ma_lien_he_<?php echo $i ?>" value="<?php echo $lienhe->ma_lien_he ?>"></td>
              <td><?php echo $lienhe->ten_khach ?></td>
              <td><?php echo $lienhe->email ?></td>
              <td data-toggle="collapse" data-target="#noidung_<?php echo $i ?>" class="noi_dung"><?php echo substr($lienhe->noi_dung, 0, 30) ?>...</td>
              <td>
                <select name="trang_thai" id="trang_thai_<?php echo $i ?>">
                  <option value="1" <?php echo ($lienhe->trang_thai == 1) ? "selected" : "" ?> >Tin nhắn chưa đọc</option>
                  <option value="2" <?php echo ($lienhe->trang_thai == 2) ? "selected" : "" ?> >Tin nhắn đã đọc</option>
                  <option value="3" <?php echo ($lienhe->trang_thai == 3) ? "selected" : "" ?> >Hủy tin nhắn</option>
                </select> 
              </td>
              <script type="text/javascript">
                $(document).ready(function(){
                  $("#trang_thai_<?php echo $i ?>").change(function(){
                    var ma_lien_he = $("#ma_lien_he_<?php echo $i ?>").val();
                    var trang_thai = $("#trang_thai_<?php echo $i ?>").val();
                    $.ajax({
                      url: 'thaydoitrangthailienhe.php',
                      type: 'POST',
                      data: {ma_lien_he: ma_lien_he, trang_thai: trang_thai},
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
<!--               <td>
                <a href="chitietlienhe.php?ma_lien_he=<?php echo $lienhe->ma_lien_he ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Chi tiết </a>
              </td> -->
            </tr>
            <tr id="noidung_<?php echo $i ?>" class="collapse">
              <td colspan="5"><?php echo $lienhe->noi_dung ?></td>
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
        <!-- /page content -->