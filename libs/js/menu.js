var counter=0;
var show=1;
$(function(){
		$("div#next").click(function(){	changePic(1)});
		$("div#prev").click(function(){ changePic(-1) });
})
function changePic(n){
	if(!n) n=-1;
	var w=parseInt($('div.slides').css("margin-left"));
	counter+=n;
	if(counter>4) counter=0;
	if(counter<0) counter=4;
	var e=(counter*-1*900)+"px";
	$("div.slides").animate({"margin-left":e},1000);
}