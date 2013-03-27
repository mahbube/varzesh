var counter=0;
var show=1;
// $(function(){
// 		$("div#next").click(function(){	changePic(1)});
// 		$("div#prev").click(function(){ changePic(-1) });
// })
function changePic(n){
	if(!n) n=-1;
	var w=parseInt($('div.slides').css("margin-left"));
	counter+=n;
	if(counter>4) counter=0;
	if(counter<0) counter=4;
	var e=(counter*-1*900)+"px";
	$("div.slides").animate({"margin-left":e},1000);
}
function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}

idd='';
function toggle_menu(id){
	/*if(id !='.con_form'){
		$("div.menu div").slideUp('slow');
	}*/
	$("div.diff_menu div").slideUp('slow');
	if(id!=idd){
		$(id).slideToggle("slow");
		idd=id;
	}else{
		$(id).slideUp('slow');
		idd='';	
	}
}