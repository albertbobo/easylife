<?php
include_once ('init.php');

//后台登陆

//登录
$act =isset($_GET['act'])?$_GET['act']:'login';

if($act == 'login') {
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

        //进行非空判断
		if(empty($username) or empty($password)) {

			      echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"用户名和密码不能为空!\");\r\n";
            echo "history.back();\r\n";
            echo "</script>";
            exit;

		}

        
        //连接数据库
		db('localhost','root');

		$sql = "select * from a_user where username = '{$username}' and password = '{$password}' ";

		$res = mysql_query($sql);
		$result = mysql_fetch_assoc($res);

        if(!$result){

            echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"用户名或密码错误，请重新登录!\");\r\n";
            echo "history.back();\r\n";
            echo "</script>";
            exit;

        }
        else {
           $_SESSION['admin'] = $result['username'];

           echo "<script language=\"JavaScript\">\r\n";
           echo "alert(\"欢迎你, {$_SESSION['admin']}\");\r\n";
           echo "location.href='index.php?act=index'";
           echo "</script>";
           exit;

        }

	}else{
    
		include_once ('html/login.html');
	}

//退出
}elseif($act == 'logout'){
  unset($_SESSION['admin']);

    echo "<script language=\"JavaScript\">\r\n";
    echo "alert(\"退出成功!\");\r\n";
    echo "location.href='index.php'";
    echo "</script>";
    exit;

}


?>