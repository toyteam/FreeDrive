<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FreeDrive</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 新 Bootstrap 核心 CSS 文件 -->
  <link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://cdn.bootcss.com/bootstrap/3.3.0/fonts/glyphicons-halflings-regular.svg" rel="stylesheet">

  <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
  <script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>

  <script src="http://cdn.bootcss.com/tether/1.3.7/js/tether.min.js"></script>
  <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
  <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/npm.js"></script>
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

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">FreeDrive</a>
    </div>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= url('login')?>">登陆</a></li>
        <li><a href="#">注册</a></li>
        </ul>
    </div>
  </nav>

  <div class="container">

    <form class="form-signin" role="form" action="<?=url('login_check')?>" method="post">
        <h2 class="form-signin-heading">注册</h2>
        <input type="text" class="input-block-level form-control" placeholder="username">
        <input type="password" class="input-block-level form-control" placeholder="password">
        <p></p>
        <button class="btn btn-large btn-primary login-btn" type="submit">注册</button>
      </form>

  </div><!-- /container -->


</body>

</html>
