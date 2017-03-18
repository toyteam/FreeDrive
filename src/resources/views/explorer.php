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

  <!-- plupload  上传组件 JavaScript 文件 -->
  <script src="<?=URL::asset('/js/plupload/plupload.full.min.js')?>"></script>


  <link href="<?=URL::asset('/custom_css/form-checkbox-normal.css')?>" rel="stylesheet">

  <!--css-->
  <style type="text/css">
  body {
    padding-top: 60px;
    padding-bottom: 40px;
  }

  .sidebar-nav {
    padding: 9px 0;
  }

  .newdirname {
    width: 5em;
    padding-left: 0.2em;
    padding-right: 0.2em;
  }

  .span_newdir {
    width: auto;
  }

  .free-sidebar-header{
    margin: 10px;
    padding: 5px;
    background-color: #99ccff;
    border-radius: 5px;
    color: #ffffff;
  }
  .free-sidebar-list{

  }
  .free-sidebar-item{
    margin: 5px;
  }
  .free-sidebar-item:hover{
    border-right: solid 3px #99ccff;
    margin: 5px;
  }
  .free-sidebar{

  }
  @media (max-width: 980px) {
    /* Enable use of floated navbar text */
    .navbar-text.pull-right {
      float: none;

    }
  }
  .rightbutton-menu{
    float: left;
    display:none;
    width:60px;
    position: fixed;
    z-index: 1;
    cursor: pointer;
  }
  .form-search{
    width:230px;
  }
  .form-search input{
    border-style: none;
    border-bottom: solid 3px;
    width:0px;
    height:30px;
    line-height: 30px;
    float: left;
    position: relative;
    display: inline-block;
    outline:none;
    left:200px;
  }
  .form-search button{
    background-color: rgb(255,255,255);
    border-style: none;
    height:30px;
    width:30px;
    line-height: 30px;
    float: right;
    position: relative;
    display: inline-block;
    outline:none;
  }
  .form-search img{
     width: auto;
     height: auto;
     max-width: 100%;
     max-height: 100%;

  }

  </style>
  <script type="text/javascript">
  $(function(){
    //初始化操作
  });
  /*
  document.onmousedown = function(e){
      var e = e || window.event;
      if(e.button == "2"){
        if(e.offsetY>$('#main-panel').offset().top&&
            e.offsetY<$('#main-panel').offset().top+$('#main-panel').height()&&
            e.offsetX>$('#main-panel').offset().left&&
            e.offsetX<$('#main-panel').offset().left+$('#main-panel').width()){
              $('.rightbutton-menu').css('margin',e.offsetY+'px '+e.offsetX+'px');
              $('.rightbutton-menu').show();
            }
      }else if(e.button=="0"){
          $('.rightbutton-menu').hide();
      }
  }*/
  $(document).ready(function(){
  $('body').mousedown(
    function(){
      var e =window.event;
      if(e.button == "2"){
        $('.rightbutton-menu').css('left',(e.pageX || e.clientX + scrollX)+'px');
        $('.rightbutton-menu').css('top',(e.pageY || e.clientY + scrollY)+'px');
        $('.rightbutton-menu').show();
      }else if(e.button=="0"){
        $('.rightbutton-menu').hide();
      }
    }
  );
});

$(document).ready(function(){
  var is_expand=false;

  $(".search-button").click(function(){
    $(".search-input").animate({left:'0px',width:'200px'});

    if(is_expand==true){
      return true;
    }else{
      is_expand=true;
      return false;
    }
  });

  $(".search-input").blur(function(){
    $(".search-input").animate({left:'200px',width:'0px'});
    is_expand=false;
  });

});

</script>
</head>


<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">FreeDrive</a>
    </div>
      <ul class="nav nav-pills navbar-right" role="tablist">
        <li role="presentation"><a href="#">退出</a></li>
      </ul>
    </div>
  </nav>
  <!--
  <div class="rightbutton-menu">
  <ul class="list-group">
    <li class="list-group-item">剪切</li>
    <li class="list-group-item">复制</li>
    <li class="list-group-item">粘贴</li>
    <li class="list-group-item">删除</li>
  </ul>
</div>
右键菜单-->
  <div class="container-fluid">
    <div class="row-fluid">
      <!--左侧功能栏-->
      <div class="col-md-2">
         <div class="well sidebar-nav free-sidebar">
           <ul class="nav nav-list free-sidebar-list">
             <li class="nav-header free-sidebar-header">全部文件</li>
             <li class="active free-sidebar-item"><a href="#">全部文件</a></li>
             <li class="free-sidebar-item"><a href="#">图片</a></li>
             <li class="free-sidebar-item"><a href="#">文档</a></li>
             <li class="free-sidebar-item"><a href="#">音乐</a></li>
             <li class="nav-header free-sidebar-header">分享</li>
             <li class="free-sidebar-item"><a href="#">全部分享</a></li>
             <li class="free-sidebar-item"><a href="#">公开链接</a></li>
             <li class="free-sidebar-item"><a href="#">私密链接</a></li>
             <li class="free-sidebar-item"><a href="#">好友分享</a></li>
             <li class="nav-header free-sidebar-header">回收站</li>
             <li class="free-sidebar-item"><a href="#">已删除的文件</a></li>
             <li class="free-sidebar-item"><a href="#">回收站</a></li>
           </ul>
         </div><!--/.well -->
       </div><!--/span-->
       <!--右侧操作面板-->
       <div class="col-md-10">
         <div class="row-fluid">
           <!--操作按钮-->
           <div class="col-md-3">
             <button class="btn btn-small btn-primary" type="button" id="browse">选择文件</button>
             <button class="btn btn-small btn-primary" type="button" id="start_upload">开始上传</button>
           </div>
           <div class="col-md-1">
             <button id="mddir" class="btn btn-small" type="button">新建文件夹</button>
           </div>
           <div class="col-md-4">
           </div>
           <!--文件搜索-->
           <div class="col-md-4">
             <form class="form-search">
               <input type="text" class="input-medium search-input">
               <button type="submit" class="search-button">
                 <img src="./magnifier27.png" class="search-finder">
               </button>
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
         <input id="hidden" type="hidden" value="3" />
         <!--文件列表-->
         <div class="row-fluid">
           <div class="col-md-12">
             <table class="table table-bordered table-hover">
               <thead>
                 <tr>
                   <th>文件名</th>
                   <th>大小</th>
                   <th>修改时间</th>
                 </tr>
               </thead>
               <tbody>
                 <tr class="table-row">
                   <td>
                     <span class="form-checkbox">
                       <input type="checkbox" value="1" id="checkbox_1" name="" />
                       <label for="checkbox_1"></label>
                     </span>
                     <span class="fileicon"></span>
                     <span>
                       <span class="filename">英语</span>
                       <span class="operation">
                         <div class="rightbutton-menu">
                         <ul class="list-group">
                           <li class="list-group-item">剪切</li>
                           <li class="list-group-item">复制</li>
                           <li class="list-group-item">粘贴</li>
                           <li class="list-group-item">删除</li>
                         </ul>
                        </div>
                       </span>
                     </span>
                   </td>
                   <td>-</td>
                   <td>2016-1-2</td>
                 </tr>
                 <tr>
                   <td>
                     <span class="form-checkbox">
                       <input type="checkbox" value="1" id="checkbox_2" name="" />
                       <label for="checkbox_2"></label>
                     </span>
                     作业
                   </td>
                   <td>-</td>
                   <td>2016-5-7</td>
                 </tr>
                 <tr>
                   <td>
                     <span class="form-checkbox">
                       <input type="checkbox" value="1" id="checkbox_3" name="" />
                       <label for="checkbox_3"></label>
                     </span>
                     学习.txt
                   </td>
                   <td>1M</td>
                   <td>2016-5-7</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>


       </div>
    </div>
  </div>


</body>

<script type="text/javascript">
var uploader = new plupload.Uploader({
  browse_button : 'browse',
  url:'<?=url('uploadFile')?>',
  // filters:{
  //   max_file_size:'150kb'
  // }
  //flash_swf_url : 'js/Moxie.swf', //swf文件，当需要使用swf方式进行上传时需要配置该参数
  //silverlight_xap_url : 'js/Moxie.xap' //silverlight文件，当需要使用silverlight方式进行上传时需要配置该参数
});

uploader.init();

$('#start_upload').click(function(){
  uploader.start();
});

$('input').focus(function(){
  //alert('sdaf');
});

$('input').blur(function(){
  //alert('dsafa');
  $('#span_newdir').text(function(){
    return $('.newdirname').text();
  });
});






</script>

<script>



$('#mddir').click(function(){
  var checkbox = '<span class="form-checkbox"><input type="checkbox" value="1" id="checkbox_new" name="" /><label for="checkbox_new"></label></span>';
  var input = '<input class="newdirname" type="text" value="新建文件夹">&nbsp;&nbsp;&nbsp;&nbsp;<input class="submit" type="submit" value="提交">';
  var script = '<script>$(".submit").click(function(){$(".span_newdir").text(function(){return $(".newdirname").val();});});<\/script>';
  var myDate = new Date();
  var year = myDate.getFullYear();    //获取完整的年份(4位,1970-????)
  var month = myDate.getMonth();       //获取当前月份(0-11,0代表1月)
  var day = myDate.getDate();        //获取当前日(1-31)
  $('tbody').append('<tr><td>'+
    checkbox+'&nbsp;&nbsp;<span class="span_newdir"><from>'+
    input+script+'</from></span></td><td>1M</td><td>'+year+'-'+month+'-'+day+'</td></tr>');
});

</script>

<script type="text/javascript">
  //禁用右键菜单
  document.body.onselectstart=document.body.oncontextmenu=function(){ return false;}
</script>



</html>
