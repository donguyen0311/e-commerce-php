<!-- /menu footer buttons -->
  <div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Cài Đặt" onclick="window.alert('Tính năng đang cập nhật...')">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Toàn Màn Hình" onclick="fullScreenMode()">
      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Khóa" onclick="window.alert('Tính năng đang cập nhật...')">
      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Thoát" onclick="window.location='logout.php'">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
  </div>
  <!-- /menu footer buttons -->
  <script>
    function fullScreenMode() {
      var el = document.documentElement
        , rfs = // for newer Webkit and Firefox
               el.requestFullScreen
            || el.webkitRequestFullScreen
            || el.mozRequestFullScreen
            || el.msRequestFullScreen
      ;
        if(typeof rfs!="undefined" && rfs){
          rfs.call(el);
        } else if(typeof window.ActiveXObject!="undefined"){
        // for Internet Explorer
        var wscript = new ActiveXObject("WScript.Shell");
        if (wscript!=null) {
           wscript.SendKeys("{F11}");
        }
      }
    }

  </script>