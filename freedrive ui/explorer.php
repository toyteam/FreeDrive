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

  <!--sidebar-->
  <link href="./sidebar.css" rel="stylesheet">
  <script src="./sidebar.js"></script>

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


        <div class="free-sidebar">
          <div class="free-sidebar-list">

            <div class="free-sidebar-header">
              <div class="triangle-right"></div>
              全部文件
            </div>
            <div class="free-sidebar-block">
              <div class="free-sidebar-item">
                全部文件
              </div>
              <div class="free-sidebar-item">
                文档
              </div>
              <div class="free-sidebar-item">
                音乐
              </div>
              <div class="free-sidebar-item">
                图片
              </div>
            </div>

            <div class="free-sidebar-header">
              <div class="triangle-right"></div>
              分享
            </div>
            <div class="free-sidebar-block">
              <div class="free-sidebar-item">
                全部分享
              </div>
              <div class="free-sidebar-item">
                公开链接
              </div>
              <div class="free-sidebar-item">
                私密链接
              </div>
              <div class="free-sidebar-item">
                好友分享
              </div>
            </div>

            <div class="free-sidebar-header">
              <div class="triangle-right"></div>
              回收站
            </div>
            <div class="free-sidebar-block">
              <div class="free-sidebar-item">
                已删除的文件
              </div>
              <div class="free-sidebar-item">
                回收站
              </div>
            </div>

          </div>
        </div>
       </div><!--/span-->
       <!--右侧操作面板-->
       <div class="col-md-10">
         <div class="row-fluid">
           <!--操作按钮-->
           <div class="col-md-3">
             <button class="freebtn freebtn-small freebtn-primary" type="button" id="browse">选择文件</button>
             <button class="freebtn freebtn-small freebtn-primary" type="button" id="start_upload">开始上传</button>
           </div>
           <div class="col-md-1">
             <button id="mddir" class="freebtn freebtn-small" type="button">新建文件夹</button>
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