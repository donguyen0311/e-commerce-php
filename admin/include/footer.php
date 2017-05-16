<!-- footer content -->
<footer>
  <div class="pull-right">
    © Copyright 2016 Dont Shop | Powered by Quản lý cửa hàng
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- PNotify -->
    <script src="vendors/pnotify/dist/pnotify.js"></script>
    <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Dropzone.js -->
    <script src="vendors/dropzone/dist/min/dropzone.min.js"></script>
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
 
<script type="text/javascript">
  $(document).ready(function() {
      function Hien_so_hoa_don_chua_thanh_toan() {
          $.ajax({
            url: 'laydulieu.php',
            type: 'POST',
            data: {lay: "tong_so_don_hang_chua_thanh_toan"},
          })
          .done(function(data) {
            results = JSON.parse(data);
            var so_hoa_don_truoc = $(".hoa_don_chua_thanh_toan_1").text();
            var so_hoa_don_sau = results.so_luong;
            console.log(so_hoa_don_truoc + " " + so_hoa_don_sau);
            if (parseInt(so_hoa_don_truoc) < parseInt(so_hoa_don_sau)) {
              new PNotify({
                  title: "Thông báo đơn hàng",
                  type: "info",
                  icon: 'glyphicon glyphicon-envelope',
                  text: "Bạn có thêm " + (parseInt(so_hoa_don_sau) - parseInt(so_hoa_don_truoc)) + " hóa đơn chưa thanh toán. Bạn có thể kiểm tra trong mục đơn hàng.",
                  nonblock: {
                      nonblock: true
                  },
                  addclass: 'dark',
                  styling: 'bootstrap3',
              });
            }
            $(".hoa_don_chua_thanh_toan, .hoa_don_chua_thanh_toan_1").html(results.so_luong);
            $(".msg_list_").html(""); // clear list
            for (var i = 0; i < results.danh_sach.length; i++) {
              
              $(".msg_list_").append(
                "<li> <a class='link' href='chitiethoadon.php?ma_hoa_don="+ results.danh_sach[i].ma_hoa_don + "'>" + "<span> <span class='name'>" + results.danh_sach[i].ten_khach_hang + "</span> <span class='time'>" + results.danh_sach[i].ngay_hd + "</span> </span> <span class='message'>Đơn giá: " + results.danh_sach[i].tri_gia.toLocaleString('en-IN') + " đ</span> </li>"
                );
            }
            
          })  
      }
      function Hien_so_lien_he_chua_doc() {
          $.ajax({
            url: 'laydulieu.php',
            type: 'POST',
            data: {lay: "tong_so_lien_he_chua_doc"},
          })
          .done(function(data) {
            results = JSON.parse(data);
            var so_lien_he_truoc = $(".lien_he_chua_doc_1").text();
            var so_lien_he_sau = results.so_luong;
            if (parseInt(so_lien_he_truoc) < parseInt(so_lien_he_sau)) {
              new PNotify({
                  title: "Thông báo liên hệ",
                  type: "info",
                  icon: 'glyphicon glyphicon-envelope',
                  text: "Bạn có thêm " + (parseInt(so_lien_he_sau) - parseInt(so_lien_he_truoc)) + " liên hệ chưa đọc. Bạn có thể kiểm tra trong mục liên hệ.",
                  nonblock: {
                      nonblock: true
                  },
                  addclass: 'dark',
                  styling: 'bootstrap3',
              });
            }
            $(".lien_he_chua_doc_1, .lien_he_chua_doc").html(results.so_luong);
            $(".msg_list_1").html(""); // clear list
            for (var i = 0; i < results.danh_sach.length; i++) {
              
              $(".msg_list_1").append(
                "<li> <a class='link1' href='lienhe.php?ma_hoa_don="+ results.danh_sach[i].ma_lien_he + "'>" + "<span> <span class='name1'>Tên: " + results.danh_sach[i].ten_khach + "</span><br> <span class='time1'>Email:" + results.danh_sach[i].email + "</span> </span><br> <span class='message1'>Nội dung: " + results.danh_sach[i].noi_dung.substr(0, 30) + "... </span> </li>"
                );
            }
          })  
      }
      function Hien_tong_so_hoa_don() {
          $.ajax({
            url: 'laydulieu.php',
            type: 'POST',
            data: {lay: "tong_so_don_hang"},
          })
          .done(function(data) {
            $("#tong_so_don_hang").html(data);
          })  
      }
      function Hien_tong_so_khach_hang_thanh_vien() {
          $.ajax({
            url: 'laydulieu.php',
            type: 'POST',
            data: {lay: "tong_so_khach_hang_thanh_vien"},
          })
          .done(function(data) {
            $("#tong_so_khach_hang_thanh_vien").html(data);
          })  
      }
      function Hien_tong_so_san_pham() {
          $.ajax({
            url: 'laydulieu.php',
            type: 'POST',
            data: {lay: "tong_so_san_pham"},
          })
          .done(function(data) {
            $("#tong_so_san_pham").html(data);
          })  
      }
      function Hien_tong_so_lien_he() {
          $.ajax({
            url: 'laydulieu.php',
            type: 'POST',
            data: {lay: "tong_so_lien_he"},
          })
          .done(function(data) {
            $("#tong_so_lien_he").html(data);
          })  
      }
      function Hien_tong_doanh_thu() {
          $.ajax({
              url: 'laydulieu.php',
              type: 'POST',
              data: {lay: "tong_so_doanh_thu"},
            })
            .done(function(data) {
              $("#tong_so_doanh_thu").html(data);
          })
        
      }
      Hien_so_hoa_don_chua_thanh_toan();
      Hien_so_lien_he_chua_doc();
      Hien_tong_so_hoa_don();
      Hien_tong_so_khach_hang_thanh_vien();
      Hien_tong_so_san_pham();
      Hien_tong_so_lien_he();
      Hien_tong_doanh_thu();
      setInterval(Hien_so_hoa_don_chua_thanh_toan, 30000);
      setInterval(Hien_so_lien_he_chua_doc, 30000);
      setInterval(Hien_tong_so_hoa_don, 30000);
      setInterval(Hien_tong_so_khach_hang_thanh_vien, 30000);
      setInterval(Hien_tong_so_san_pham, 30000);
      setInterval(Hien_tong_so_lien_he, 30000);
      setInterval(Hien_tong_doanh_thu, 30000);
  });
</script>


    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        $('.birthday').daterangepicker({
          locale: {
            format: 'YYYY-MM-DD'
          },
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start, end, label) {
          //console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($(".datatable-buttons").length) {
            $(".datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
    <!-- bootstrap-wysiwyg -->
    <script>
      $(document).ready(function() {
        function initToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function(idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
          });
          $('a[title]').tooltip({
            container: 'body'
          });
          $('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              $(this).change();
            });

          $('[data-role=magic-overlay]').each(function() {
            var overlay = $(this),
              target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = $('#editor').offset();

            $('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + $('#editor').innerWidth() - 35
            });
          } else {
            $('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
          } else {
            console.log("error uploading file", reason, detail);
          }
          $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
          fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
      });
    </script>
    <!-- /bootstrap-wysiwyg -->
<?php 
  if ($_SESSION['loi_chao'] == 0) {
    $_SESSION['loi_chao'] = 1;
?>    

    <!-- PNotify -->
    <script>
      $(document).ready(function() {
        // function Hien_so_hoa_don_chua_thanh_toan() {
        //     $.ajax({
        //       url: 'laydulieu.php',
        //       type: 'POST',
        //       data: {lay: "tong_so_don_hang_chua_thanh_toan"},
        //     })
        //     .done(function(data) {
        //       results = JSON.parse(data);
        //       console.log("success");
        //       $(".hoa_don_chua_thanh_toan").html(results.so_luong);
        //     })
        //     .fail(function() {
        //       console.log("error");
        //     })
        //     .always(function() {
        //       console.log("complete");
        //     });   
        // }
        // Hien_so_hoa_don_chua_thanh_toan();

        new PNotify({
          title: "Thông báo mới",
          type: "info",
          icon: 'glyphicon glyphicon-envelope',
          text: "Chào mừng bạn đến với trang quản trị. Chúc bạn 1 ngày tốt lành!",
          nonblock: {
              nonblock: true
          },
          addclass: 'dark',
          styling: 'bootstrap3',
          // hide: false,
          // before_close: function(PNotify) {
          //   PNotify.update({
          //     title: PNotify.options.title + " - Enjoy your Stay",
          //     before_close: null
          //   });

          //   PNotify.queueRemove();

          //   return false;
          // }
        });

      });
    </script>
    <!-- /PNotify -->

    <!-- PNotify -->
    <script>
      $(document).ready(function() {
        $.ajax({
          url: 'laydulieu.php',
          type: 'POST',
          data: {lay: "tong_so_don_hang_chua_thanh_toan"},
        })
        .done(function(data) {
          results = JSON.parse(data);
          console.log("success");
            new PNotify({
            title: "Thông báo đơn hàng",
            type: "info",
            icon: 'glyphicon glyphicon-envelope',
            text: "Hiện có " + results.so_luong + " hóa đơn chưa thanh toán. Bạn có thể kiểm tra trong mục đơn hàng.",
            nonblock: {
                nonblock: true
            },
            addclass: 'dark',
            styling: 'bootstrap3',
            // hide: false,
            // before_close: function(PNotify) {
            //   PNotify.update({
            //     title: PNotify.options.title + " - Enjoy your Stay",
            //     before_close: null
            //   });

            //   PNotify.queueRemove();

            //   return false;
            // }
          });
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });

        $.ajax({
          url: 'laydulieu.php',
          type: 'POST',
          data: {lay: "tong_so_lien_he_chua_doc"},
        })
        .done(function(data) {
          results = JSON.parse(data);
          console.log("success");
            new PNotify({
              title: "Thông báo liên hệ",
              type: "info",
              icon: 'glyphicon glyphicon-envelope',
              text: "Bạn có " + results.so_luong + " liên hệ chưa đọc. Bạn có thể kiểm tra trong mục liên hệ.",
              nonblock: {
                  nonblock: true
              },
              addclass: 'dark',
              styling: 'bootstrap3',
            });
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });

        

      });

    </script>
    <!-- /PNotify -->
<?php
  }
?>
    <!-- Custom Notification -->
    <script>
      $(document).ready(function() {
        var cnt = 10;

        TabbedNotification = function(options) {
          var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
            "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

          if (!document.getElementById('custom_notifications')) {
            alert('doesnt exists');
          } else {
            $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
            $('#custom_notifications #notif-group').append(message);
            cnt++;
            CustomTabs(options);
          }
        };

        CustomTabs = function(options) {
          $('.tabbed_notifications > div').hide();
          $('.tabbed_notifications > div:first-of-type').show();
          $('#custom_notifications').removeClass('dsp_none');
          $('.notifications a').click(function(e) {
            e.preventDefault();
            var $this = $(this),
              tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
              others = $this.closest('li').siblings().children('a'),
              target = $this.attr('href');
            others.removeClass('active');
            $this.addClass('active');
            $(tabbed_notifications).children('div').hide();
            $(target).show();
          });
        };

        CustomTabs();

        var tabid = idname = '';

        $(document).on('click', '.notification_close', function(e) {
          idname = $(this).parent().parent().attr("id");
          tabid = idname.substr(-2);
          $('#ntf' + tabid).remove();
          $('#ntlink' + tabid).parent().remove();
          $('.notifications a').first().addClass('active');
          $('#notif-group div').first().css('display', 'block');
        });
      });
    </script>
    <!-- /Custom Notification -->
