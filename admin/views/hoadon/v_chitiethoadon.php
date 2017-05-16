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
            <section class="content invoice">
              <!-- title row -->
              <div class="row">
                <div class="col-xs-12 invoice-header">
                  <h1>
                      <i class="fa fa-file-text-o"></i> Đơn hàng số <?php echo $hoadon->ma_hoa_don ?>
                  </h1>
                </div>
                <!-- /.col -->
              </div>
              <br>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-6 invoice-col">
                  <h4><i class='fa fa-info-circle'></i> <b>Thông tin</b></h4>
                  <address>
                    <b>Tên khách hàng:</b> <?php echo $hoadon->ten_khach_hang ?>
                    <br>
                    <b>Giới tính:</b> <?php echo ($hoadon->phai == 1) ? "Nữ" : "Nam" ?>
                    <br>
                    <b>Ngày sinh:</b> <?php echo $hoadon->ngay_sinh ?>
                    <br>
                    <b>Trị giá:</b> <?php echo number_format((int)$hoadon->tri_gia,0,"",".") ?> đ
                    <br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 invoice-col">
                  <br><br>
                  <address>
                    <b>Địa chỉ:</b> <?php echo $hoadon->dia_chi ?>
                    <br>
                    <b>Số điện thoại:</b> <?php echo $hoadon->dien_thoai   ?>
                    <br>
                    <b>Email:</b> <?php echo $hoadon->email ?>
                  </address>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <hr>
              <div class="x_content">
                    <h4><b>Chi tiết</b></h4>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tên sản phẩm</th>
                          <th>Hình sản phẩm</th>
                          <th>Số lượng</th>
                          <th>Đơn giá</th>
                          <th>Thành tiền</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $i = 1;
                        $tong_thanh_tien = "";  
                        foreach ($chitiet as $ct) {
                          $tong_thanh_tien += $ct->so_luong * $ct->don_gia;
                      ?>
                        <tr>
                          <th scope="row"><?php echo $i++ ?></th>
                          <td><?php echo $ct->ten_san_pham ?></td>
                          <td><img class="thumb-image_" src="../images/hinh_san_pham/<?php echo $ct->hinh ?>"></td>
                          <td><?php echo $ct->so_luong ?></td>
                          <td><?php echo number_format((int)$ct->don_gia,0,"",".") ?> đ</td>
                          <td><?php echo number_format((int)$ct->so_luong * $ct->don_gia,0,"",".") ?> đ</td>
                        </tr>
                      <?php  
                        }
                      ?>
                      </tbody>
                    </table>
                    <div class="pull-right">
                      <h2><b>Tổng thành tiền: <?php echo number_format((int)$tong_thanh_tien,0,"",".") ?> đ</b></h2>
                    </div>
                  </div>
              <br>
              <!-- this row will not appear when printing -->
              <div class="row no-print print">
                <div class="col-xs-12">
                  <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                  <button class="btn btn-danger pull-right" onclick="window.location='hoadon.php'"><i class="fa fa-share"></i> Quay lại</button>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
