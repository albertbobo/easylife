<?php
function db($addr,$pass){
	$link = @mysql_connect("{$addr}:3306",'root',"{$pass}");

    //如果数据库连接失败，执行if结构进行错误提示
	if(!$link){
		echo '数据库连接失败<br />';
		echo '错误编号：'.mysql_errno().'<br />';
		echo '错误原因：'.iconv('gbk','utf-8'.mysql_error()).'<br />';
		exit;
	}


    //第二步，向mysql数据库发sql指令
	$res = mysql_query('use easylife');
    //判断发送的sql指令是否正确
	if(!$res){
	    msg();
	}
	

    //设置字符集为utf8
	$res = mysql_query('set names utf8');
	if(!$res){
	    msg();
	}

}
 
function msg(){
		echo 'SQL指令执行失败！<br />';
		echo '错误编号：'.mysql_errno().'<br />';
		echo '错误原因：'.mysql_error().'<br />';
		exit;
}


?>