//var dt=0.5;  //约30度
var point_interval=1.04719753333; //60度角，点与点间角度
var dt_arry=new Array(6);
for(var i=0;i<6;++i)
{
	dt_arry[i]=point_interval*i;
}
function run(){
	$('.loading').children(".loading_point").each(
		function(index){
		var r=30;
		var speed=Math.sin(dt_arry[index])*0.04+0.06;
        var Py=Math.sin(speed+dt_arry[index])*r;
        var Px=Math.cos(speed+dt_arry[index])*r;
        $(this).css('left',Px+'px');
		$(this).css('top',Py+'px');
        dt_arry[index]=speed+dt_arry[index];
	}
	);
}
window.setInterval('run()',12);

$(document).ready(function(){
    $('.loading_back').fadeOut();
});
$('body').load(function(){
    $('.loading_back').fadeIn();
});