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
                <input type="text" name="ten_loai_san_pham" id="timkiem" class="form-control" placeholder="Tìm kiếm...">
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
              <th>Tên loại sản phẩm</th>
              <th>Mô tả</th>
              <th>Thuộc</th>
              <th>Tùy chỉnh</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $i = 1;
            foreach ($loaisanphams as $loaisanpham) {

          ?>
            <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $loaisanpham->ten_loai_san_pham ?></td>
              <td><?php echo $loaisanpham->mo_ta ?></td>
              <td><?php echo ($loaisanpham->ten_loai_cha != NULL) ? $loaisanpham->ten_loai_cha : "Không" ?></td>
              <td>
                <a href="sualoaisanpham.php?ma_loai_san_pham=<?php echo $loaisanpham->ma_loai_san_pham ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Sửa </a>
                <a href="javascript:void(0)" onclick="Xoadulieu(<?php echo $loaisanpham->ma_loai_san_pham ?>,'loai_san_pham','ma_loai_san_pham')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Xóa </a>
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