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
                      <i class="fa fa-file-text-o"></i> <?php echo $baiviet->tieu_de ?>
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
                    <b>Tác giả:</b> <?php echo $baiviet->tac_gia ?>
                    <br>
                    <b>Loại bài viết:</b> <?php echo (empty($baiviet->ten_loai_bai_viet)) ? "Không" : $baiviet->ten_loai_bai_viet ?>
                    <br>
                    <b>Số lượt xem:</b> <?php echo $baiviet->so_lan_xem ?>
                    <br>
                    <b>Xuất bản:</b> <?php echo $baiviet->xuat_ban ?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 invoice-col">
                  <h4><i class='fa fa-clock-o'></i> <b>Thời gian</b></h4>
                  <address>
                    <b>Ngày gửi bài:</b> <?php echo date("h:i:s a | d-m-Y", strtotime($baiviet->ngay_gui_bai)) ?>
                    <br>
                    <b>Ngày xuất bản:</b> <?php echo date("h:i:s a | d-m-Y", strtotime($baiviet->ngay_xuat_ban)) ?>
                    <br>
                    <b>Ngày hết hạn:</b> <?php echo date("h:i:s a | d-m-Y", strtotime($baiviet->ngay_het_han)) ?>
                  </address>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->

                <div class="col-xs-12">
                <hr>
                  <p class="lead">Nội dung tóm tắt:</p>
                  <p style="margin-top: 10px;"></p>
                    <?php echo $baiviet->noi_dung_tom_tat ?>
                    
                </div>
                <!-- /.col -->
                <div class="col-xs-12">
                  <hr>
                  <p class="lead">Nội dung chi tiết:</p>
                  <p style="margin-top: 10px;"></p>
                    <?php echo $baiviet->noi_dung_chi_tiet ?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <br>
              <!-- this row will not appear when printing -->
              <div class="row no-print print">
                <div class="col-xs-12">
                  <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                  <button class="btn btn-danger pull-right" onclick="window.location='baiviet.php'"><i class="fa fa-share"></i> Quay lại</button>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
