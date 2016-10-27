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
</head>


<body>

  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">FreeDrive</a>
    </div>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= url('login')?>">登陆</a></li>
        <li><a href="<?= url('register')?>">注册</a></li>
        </ul>
    </div>
  </nav>


  <div class="container">
  	<div class="row clearfix">
  		<div class="col-md-12 column">
  			<div class="jumbotron">
          <h1>FreeDrive</h1>
          <p>Welcome to the home of your files.</p>
          <p><a class="btn btn-primary btn-lg" href="<?= url('login')?>" role="button">Login</a></p>
          <p><a class="btn btn-primary btn-lg" href="<?= url('register')?>" role="button">Register</a></p>
  			</div>
  		</div>
  	</div>
  	<div class="row clearfix">
  		<div class="col-md-4 column">
  			<h2>
  				强大
  			</h2>
  			<p>

  			</p>
  			<p>
  				 <a class="btn" href="#">View details »</a>
  			</p>
  		</div>
  		<div class="col-md-4 column">
  			<h2>
  				便捷
  			</h2>
  			<p>

  			</p>
  			<p>
  				 <a class="btn" href="#">View details »</a>
  			</p>
  		</div>
  		<div class="col-md-4 column">
  			<h2>
  				安全
  			</h2>
  			<p>

  			</p>
  			<p>
  				 <a class="btn" href="#">View details »</a>
  			</p>
  		</div>
  	</div>
  </div>


</body>

</html>
