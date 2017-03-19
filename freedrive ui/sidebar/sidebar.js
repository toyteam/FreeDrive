$(document).ready(
  function(){
    //收起所有菜单
    $(".free-sidebar-block").css("display","none");
    $(".free-sidebar-block").slideUp();
    //点击放下菜单
    $(".free-sidebar-header").click(
      function(){
        if($(this).children(".triangle-right").length>0){
          $(this).next().slideDown();
          $(this).children(".triangle-right").attr("class","triangle-down");
        }else{
          $(this).next().slideUp();
          $(this).children(".triangle-down").attr("class","triangle-right");
        }
      }
    );
    //菜单变色
    $(".free-sidebar-item").click(
      function(){
        $(".free-sidebar-item").css("border-left","solid 1px #000000");
        $(".free-sidebar-item").css("margin","0px");
        $(".free-sidebar-item").css("background-color","#ffffff");

        $(this).css("border-left","solid 3px #0072c6");
        $(this).css("margin","0px 0px 0px -2px");
        $(this).css("background-color","#ebf8fe");
      }
    );
  }
);
