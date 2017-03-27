$(document).ready(function(){
  var is_expand=false;

  $("body").delegate(".search-button","click",function(){
    $(".search-input").animate({left:'0px',width:'200px'});

    if(is_expand==true){
      return true;
    }else{
      is_expand=true;
      return false;
    }
  });

  $("body").delegate(".search-input","blur",function(){
    $(".search-input").animate({left:'200px',width:'0px'});
    is_expand=false;
  });


});
