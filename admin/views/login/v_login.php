<?php echo $error ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title ?></title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="POST">
              <h1>Đăng Nhập</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Tài Khoản" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Mật Khẩu" required="" />
              </div>
              <div>
                <button type="submit" name="submit" class="btn btn-default submit">Đăng Nhập</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Quên mật khẩu?
                  <a href="#signup" class="to_register"> Click vào đây </a>
                </p>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
          	<h4>Nếu bạn quên mật khẩu, vui lòng liên hệ với admin để xin cấp lại mật khẩu !</h4>
            <div class="clearfix"></div>
            <div class="separator">
                <p class="change_link">Nếu bạn nhớ mật khẩu?
                	<a href="#signin" class="to_register"> Quay Lại </a>
            	</p>
           	</div>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
