<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FreeDrive-Login</title>
  <!-- 新 Bootstrap 核心 CSS 文件 -->
  <!--<link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <!-- 可选的Bootstrap主题文件（一般不用引入） -->
  <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->

  <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
  <!--<script src="js/jquery-3.1.1.min.js"></script> -->

  <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
  <!--<script src="js/bootstrap.min.js"></script> -->


  <!-- 新 Bootstrap 核心 CSS 文件 -->
  <link href="//cdn.bootcss.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet">

  <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
  <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>

  <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
  <script src="//cdn.bootcss.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
  <style type="text/css">
      body {
        padding-top: 160px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .form-signin .remember-checkbox {
        margin-right: 30%;
        margin-bottom: 15px;
      }
      .form-signin .login-btn {
        margin-left: 30%;
        margin-right: 30%;
        margin-bottom: 15px;
      }
    </style>
</head>


<body>

  <div class="container">

    <form class="form-signin" role="form" action="<?=url('login_check')?>" method="post">
        <h2 class="form-signin-heading">登陆</h2>
        <input type="text" class="input-block-level form-control" placeholder="username">
        <input type="password" class="input-block-level form-control" placeholder="password">
        <label class="checkbox remember-checkbox">
          <input type="checkbox" value="remember-me">保持登陆
        </label>
        <p></p>
        <button class="btn btn-large btn-primary login-btn" type="submit">登陆</button>
      </form>

  </div><!-- /container -->

</body>

</html>
