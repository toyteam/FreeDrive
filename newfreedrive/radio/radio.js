$(document).ready(function(){
  $(".free-radio").mousedown(
    function(){
      $(this).css("background-color","rgb(100,100,100)");
      $(this).css("border-color","rgb(255,255,255)");
    }
  );
  $(".free-radio").mouseup(
    function(){
      $(this).css("background-color","rgb(255,255,255)");
      $(this).css("border-color","rgb(30,30,30)");
    }
  );
});