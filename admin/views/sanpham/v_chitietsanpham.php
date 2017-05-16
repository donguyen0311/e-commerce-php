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
                      <i class="fa fa-file-text-o"></i> <?php echo $sanpham->ten_san_pham ?>
                  </h1>
                </div>
                <!-- /.col -->
              </div>
              <br>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <h4><i class='fa fa-info-circle'></i> <b>Thông tin</b></h4>
                  <address>
                    <b>Đơn giá:</b> <?php echo number_format($sanpham->don_gia, 0, "", ".") ?> đ
                    <br>
                    <b>Loại sản phẩm:</b> <?php echo $sanpham->ten_loai_san_pham ?>
                    <br>
                    <b>Số lượt xem:</b> <?php echo $sanpham->so_lan_xem ?>
                    <br>
                    <b>Thuộc:</b> <?php echo $sanpham->ten_loai_cha ?>
                    <br>
                    <b>Sản phẩm mới:</b> <?php echo ($sanpham->san_pham_moi == 1) ? "Mới" : "Không" ?>
                    <br>
                    <b>Nội dung khuyến mãi:</b> <?php echo (isset($sanpham->noi_dung_khuyen_mai)) ? $sanpham->noi_dung_khuyen_mai : "Không" ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <h4><i class='fa fa-clock-o'></i> <b>Thời gian</b></h4>
                  <address>
                    <b>Ngày tạo:</b> <?php echo date("d-m-Y", strtotime($sanpham->ngay_tao)) ?>
                    <br>
                    <b>Ngày ngày khuyến mãi:</b> <?php echo (isset($sanpham->ngay_khuyen_mai)) ? date("d-m-Y", strtotime($sanpham->ngay_khuyen_mai)) : "Không" ?>
                    <br>
                    <b>Ngày hết hạn:</b> <?php echo (isset($sanpham->ngay_het_han)) ? date("d-m-Y", strtotime($sanpham->ngay_het_han)) : "Không" ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <h4><i class='fa fa-picture-o'></i> <b>Hình ảnh</b></h4>
                  <address>
                    <img src="../images/hinh_san_pham/<?php echo $sanpham->hinh ?>" width="50px" height="50px" >
                  </address>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <hr>
                <div class="col-xs-12">
                  <p class="lead">Nội dung tóm tắt:</p>
                  <p style="margin-top: 10px;"></p>
                    <?php echo $sanpham->mo_ta_tom_tat ?>
                    
                </div>
                <!-- /.col -->

                <div class="col-xs-12">
                <hr>
                  <p class="lead">Nội dung chi tiết:</p>
                  <p style="margin-top: 10px;"></p>
                    <?php echo $sanpham->mo_ta_chi_tiet ?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <br>
              <!-- this row will not appear when printing -->
              <div class="row no-print print">
                <div class="col-xs-12">
                  <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                  <button class="btn btn-danger pull-right" onclick="window.location='sanpham.php'"><i class="fa fa-share"></i> Quay lại</button>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
