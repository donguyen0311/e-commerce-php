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
            <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-left top_search">
            <label for="timkiem">Tìm kiếm: </label>
              <div class="input-group">
                <input type="text" name="tieu_de" id="timkiem" class="form-control" placeholder="Tìm kiếm...">
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
              <th>Tiêu đề</th>
              <th>Tác giả</th>
              <th>Ngày gửi bài</th>
              <th>Ngày xuất bản</th>
              <th>Ngày hết hạn</th>
              <th>Số lần xem</th>
              <th>Xuất bản</th>
              <th>Thuộc</th>
              <th>Tùy chỉnh</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $i = 1;
            foreach ($baiviets as $baiviet) {

          ?>
            <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $baiviet->tieu_de ?></td>
              <td><?php echo $baiviet->tac_gia ?></td>
              <td><?php echo $baiviet->ngay_gui_bai ?></td>
              <td><?php echo $baiviet->ngay_xuat_ban ?></td>
              <td><?php echo $baiviet->ngay_het_han ?></td>
              <td><?php echo $baiviet->so_lan_xem ?></td>
              <td><?php echo $baiviet->xuat_ban ?></td>
              <td><?php echo (empty($baiviet->ten_loai_bai_viet)) ? "Không" : $baiviet->ten_loai_bai_viet ?></td>
              <td>
                <a href="chitietbaiviet.php?ma_bai_viet=<?php echo $baiviet->ma_bai_viet ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Chi tiết </a>
                <a href="suabaiviet.php?ma_bai_viet=<?php echo $baiviet->ma_bai_viet ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                <a href="javascript:void(0)" onclick="Xoadulieu(<?php echo $baiviet->ma_bai_viet ?>,'bai_viet','ma_bai_viet')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
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