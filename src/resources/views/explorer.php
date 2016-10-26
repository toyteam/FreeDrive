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


  <!--css-->
  <style type="text/css">
  body {
    padding-top: 60px;
    padding-bottom: 40px;
  }

  .sidebar-nav {
    padding: 9px 0;
  }

  @media (max-width: 980px) {
    /* Enable use of floated navbar text */
    .navbar-text.pull-right {
      float: none;
      padding-left: 5px;
      padding-right: 5px;
    }
  }
  </style>
</head>


<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">FreeDrive</a>
    </div>
      <ul class="nav nav-pills navbar-right" role="tablist">
        <li role="presentation" class="active"><a href="#">登陆</a></li>
        <li role="presentation"><a href="#">注册</a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row-fluid">
      <!--左侧功能栏-->
      <div class="col-md-2">
         <div class="well sidebar-nav">
           <ul class="nav nav-list">
             <li class="nav-header">全部文件</li>
             <li class="active"><a href="#">全部文件</a></li>
             <li><a href="#">图片</a></li>
             <li><a href="#">文档</a></li>
             <li><a href="#">音乐</a></li>
             <li class="nav-header">分享</li>
             <li><a href="#">全部分享</a></li>
             <li><a href="#">公开链接</a></li>
             <li><a href="#">私密链接</a></li>
             <li><a href="#">好友分享</a></li>
             <li class="nav-header">回收站</li>
             <li><a href="#">已删除的文件</a></li>
             <li><a href="#">回收站</a></li>
           </ul>
         </div><!--/.well -->
       </div><!--/span-->
       <!--右侧操作面板-->
       <div class="col-md-10">
         <div class="row-fluid">
           <!--操作按钮-->
           <div class="col-md-1">
             <button class="btn btn-small btn-primary" type="button">上传</button>
           </div>
           <div class="col-md-1">
             <button class="btn btn-small" type="button">新建文件夹</button>
           </div>
           <div class="col-md-4">
           </div>
           <!--文件搜索-->
           <div class="col-md-4">
             <form class="form-search">
               <input type="text" class="input-medium search-query">
               <button type="submit" class="btn">搜索</button>
             </form>
           </div>
           <!--文件排序方式-->
           <div class="col-md-1">
             <div class="btn-group">
               <a class="btn dropdown-toggle icon-align-right" data-toggle="dropdown" href="#">
                 排序方式
                 <span class="caret"></span>
               </a>
               <ul class="dropdown-menu">
                 <!-- dropdown menu links -->
                 <li><a href="#">文件名</a></li>
                 <li><a href="#">修改时间</a></li>
                 <li><a href="#">大小</a></li>
               </ul>
             </div>
           </div>
           <!--文件夹显示方式-->
           <div class="col-md-1">
             <a class="btn btn-small" href="#"><i class="icon-file"></i>显示</a>
           </div>
         </div>
         <hr>
         <!--文件列表头-->
         <div class="row-fluid">
             <ul class="nav nav-tabs">
               <li class="col-md-6">
                 <a href="#">文件名</a>
               </li>
               <li class="col-md-3"><a href="#">大小</a></li>
               <li class="col-md-3"><a href="#">修改时间</a></li>
             </ul>
         </div>
         <!--文件列表-->
         <div class="row-fluid">
           <div class="col-md-12">
             <ul class="list-group">
               <a href="#" class="list-group-item active">
                 <input type="checkbox" id="inlineCheckbox1" value="option1">
                 文档
               </a>
               <a href="#" class="list-group-item">
                 <input type="checkbox" id="inlineCheckbox1" value="option1">
                 学习
               </a>
               <a href="#" class="list-group-item">
                 <input type="checkbox" id="inlineCheckbox1" value="option1">
                 英语
               </a>
               <a href="#" class="list-group-item">
                 <input type="checkbox" id="inlineCheckbox1" value="option1">
                 作业
               </a>
             </ul>
           </div>
         </div>


       </div>
    </div>
  </div>


</body>

</html>
