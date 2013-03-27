<?php

// View funcs ....

defined('ACCESS') or die('Restricted access !');

function send($data){
	echo $data;
}

function death($data){
	if(strlen($data)>0) send($data);
	die();
}

function go2url($url){
	header("Location: $url");
	death();
}

/*generate content of internal */
function gen_con_internal($type,$slct){
	if($type=='news'){
		$html.="<section class='news_container'>";
		foreach ($slct as $list) {
			$html.="<div class='title'>$list[title]</div>";
			$html.="<div class='summary'>$list[summary]</div>";
			//$html.="<div class='continue'></div>";
			$html.="<hr/>" ;
		}
		$html.="</section>" ;
		/*$html="<div class='right'>" ;
		foreach ($slct as $list_odd) {
			if($list_odd['id'] % 2){
				$html.=$list_odd['summary'] ;
			}
		}
		$html.="</div>";
		$html.="<div class='left'>";
		foreach ($slct as $list_even) {
			if(! $list_odd['id'] % 2){
				$html.=$list_even['summary'] ;
			}
		}
		$html.="</div>" ;*/
	}elseif($type=='menu'){
		$html.="<div class='diff_menu'>";
		foreach ($slct as $list) {
			$html.="<p class=\"menu_ttl-$list[id]\" onclick=\"toggle_menu('.menu_con-$list[id]')\">$list[title]</p>" ;
			$html.="<div class='menu_con-$list[id]'>$list[summary]</div>" ;
		}
		$html.="</div>" ;
	}
	
	return $html;
}
/* end generate content of internal */
