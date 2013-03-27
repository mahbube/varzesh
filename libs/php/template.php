<?php

// template engine ....

defined('ACCESS') or die('Restricted access !');
if($req=='fix_top_content' || $req=='fix_bottom_content'){
	if(! @include("$req.php") ){
	include("404.php");
	$caching_enabled=false;
	}
}else{
	include('inc/header.php');

if(! @include("$req.php") ){
	include("404.php");
	$caching_enabled=false;
}

include('inc/footer.php');
	
}
