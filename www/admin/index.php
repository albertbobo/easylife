<?php
include_once 'init.php';
	//后台首页
	//接收动作


	$act = isset($_GET['act']) ? $_GET['act'] : 'log';
	

	//判断请求,处理请求
	if($act == 'log'){
		//加载框架
		include_once 'html/login.html';	

	}
	elseif($act == 'index'){

		include_once 'html/index.html';
	}
	elseif($act == 'top'){
		//顶部加载
		include_once 'html/top.html';
	}
	elseif($act == 'menu'){
		//左侧菜单
		include_once 'html/menu.html';
	}	
	elseif($act == 'drag'){
		//主体加载
		include_once 'html/drag.html';
	}
	elseif($act == 'main'){
		//主体加载
		include_once 'html/main.html';
	}
