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
        text-align: center;
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
        margin-left: 40%;
      }
    </style>
    <script>
      $(function (){
        $("[data-toggle='user_name_popover']").popover({trigger:'manual'});
        $("[data-toggle='password_popover']").popover({trigger:'manual'});
      });

      function loginSubmitCheck(){
        var result=true;
        //检测名字是否空
        var name=document.getElementsByName("user_name");
        if(name[0].value==""){
          (document.getElementsByName('user_name')[0]).setAttribute('data-content','请输入用户名');
          $("[data-toggle='user_name_popover']").popover('show');
          result=false;
        }
        //检测密码是否空
        var pass=document.getElementsByName("user_pw");
        if(pass[0].value==""){
          (document.getElementsByName('user_pw')[0]).setAttribute('data-content','请输入密码');
          $("[data-toggle='password_popover']").popover('show');
          result=false;
        }
        //检测重复密码是否空
        var pass2=document.getElementsByName("user_pw_confirm");
        if(pass2[0].value==""){
          (document.getElementsByName('user_pw_confirm')[0]).setAttribute('data-content','请验证密码');
          $("[data-toggle='password_popover']").popover('show');
          result=false;
        }
        //检测两次密码是否一致
        if(pass[0].value!=pass2[0].value){
          (document.getElementsByName('user_pw_confirm')[0]).setAttribute('data-content','两次密码输入不一样');
          $("[data-toggle='password2_popover']").popover('show');
          result=false;
        }
        //检测密码是否过短
        if(pass[0].value.length<6&&pass[0].value.length>0){
          (document.getElementsByName('user_pw')[0]).setAttribute('data-content','密码过短');
          $("[data-toggle='password_popover']").popover('show');
          result=false;
        }
        return result;
      }
      function cancelWarning(){
        $("[data-toggle='user_name_popover']").popover('hide');
        $("[data-toggle='password_popover']").popover('hide');
      }
    </script>
</head>


<body>

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?=url('/')?>">FreeDrive</a>
    </div>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= url('login')?>">登陆</a></li>
        <li><a href="<?=url('register')?>">注册</a></li>
        </ul>
    </div>
  </nav>

  <div class="container">

    <form class="form-signin" role="form" action="<?=url('register_check')?>" method="post" onsubmit="return loginSubmitCheck()">
        <h2 class="form-signin-heading">注册</h2>
        <?=isset($error)?$error:''?>
        <input type="text" class="input-block-level form-control"
        data-container="body" data-toggle="user_name_popover" data-placement="right" data-content="请输入用户名"
        onclick="cancelWarning();"
        placeholder="username" name="user_name">

        <input type="password" class="input-block-level form-control"
        data-container="body" data-toggle="password_popover" data-placement="right" data-content="请输入密码"
        onclick="cancelWarning();"
        placeholder="password" name="user_pw">

        <input type="password" class="input-block-level form-control"
        data-container="body" data-toggle="password2_popover" data-placement="right" data-content="两次密码输入不一样"
        onclick="cancelWarning();"
        placeholder="retype password" name="user_pw_confirm">

        <p></p>
        <button class="btn btn-large btn-primary login-btn" type="submit">注册</button>
      </form>

  </div><!-- /container -->


</body>

</html>
