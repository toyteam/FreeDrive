
$(document).ready(function(){
  $(".form-checkbox").click(
    function(){
      if($(this).children("label").children("img").css("opacity")=="0"){
        $(this).children("label").children("img").animate({opacity:"1"},200);
      }else {
        $(this).children("label").children("img").animate({opacity:"0"},200);
      }
    }
  );
});
