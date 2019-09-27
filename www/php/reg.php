<?php
include_once ('init.php');

//用户注册登录退出

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

		// md5加密
		$password = md5($password);

        
        //连接数据库
		db('localhost','root');

		$sql = "select * from user where username = '{$username}' and password = '{$password}' ";

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
           $_SESSION['name'] = $result['username'];

           echo "<script language=\"JavaScript\">\r\n";
           echo "alert(\"欢迎你, {$_SESSION['name']}\");\r\n";
           echo "location.href='../index.php'";
           echo "</script>";
           exit;

        }

	}else{
		include_once ('../html/login.html');
	}

//注册
}elseif($act == 'reg'){
	if(isset($_POST['submit'])){

		//trim函数完成信息去空格符号的功能
	    $username = trim($_POST['username']);
	    $password = trim($_POST['password']);

	    if(empty($username) or empty($password)){

	    	echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"用户名和密码不能为空!\");\r\n";
            echo "history.back();\r\n";
            echo "</script>";
            exit;

	    }

	    // 对接收的密码字符进行MD5加密
	    $password = md5($password);
        db('localhost','root');

        // 判断用户名是否已被抢先注册
        $sql = "select * from user where username = '{$username}' ";
	    $res = mysql_query($sql);
        $result = @mysql_fetch_assoc($res);
        if(!$res){
        	msg();
        }

        if(!$result){
        	$sql = "insert into user values(null,'{$username}','{$password}')";
            $res = mysql_query($sql);

             if(!$res){
        	     msg();
		     }else{

		     	echo "<script language=\"JavaScript\">\r\n";
                echo "alert(\"注册成功!\");\r\n";
                echo "location.href='../html/login.html'";
                echo "</script>";
                exit;

	    }


        }else{

        	echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"该用户名已被注册!\");\r\n";
            echo "history.back();\r\n";
            echo "</script>";
            exit;

        }


//退出
}else {
	include_once ('../html/signUp.html');
}

}elseif($act == 'logout'){
	unset($_SESSION['name']);

	echo "<script language=\"JavaScript\">\r\n";
    echo "alert(\"退出成功!\");\r\n";
    echo "history.back();\r\n";
    echo "</script>";
    exit;

}


?>