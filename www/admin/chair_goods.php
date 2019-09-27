<?php
header('Content-type:text/html;charset=utf-8');
include_once 'init.php';
db('localhost','root');
Mysql_query('use easylife');
Mysql_query('set names utf8');

$act = isset($_GET['act'])?$_GET['act']:'list';


//增
if($act == 'add'){
	if(isset($_POST['submit'])){
		$chair_name = $_POST['chair_name'];
        $chair_price = $_POST['chair_price'];
        $chair_img = $_POST['chair_img'];

		db('localhost','root');
		$sql = "insert into chair_goods values(null,'{$chair_name}','{$chair_price}','{$chair_img}')";
		$res = mysql_query($sql);
		if($res){
			echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"商品添加成功!\");\r\n";
            echo "location.href='chair_goods.php'";
            echo "</script>";
            exit;
		}else{
			echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"商品添加失败!\");\r\n";
            echo "location.href='chair_goods.php'";
            echo "</script>";
            exit;
		}
    }else{
		include_once 'html/chair_add.html';
	}

}


//删
elseif($act == 'del'){
	$id = isset($_GET['id'])?$_GET['id']:0;	
    $sql = "delete from chair_goods where id='{$id}'";
    $res = mysql_query($sql);
    if($res){
			header('location:chair_goods.php');

		}else{
			echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"商品删除失败!\");\r\n";
            echo "history.back();\r\n";
            echo "</script>";
            exit;
		}

}

//改
elseif($act == 'update'){
    if(isset($_POST['submit'])){
    	$id = $_POST['id'];
		$chair_name = $_POST['chair_name'];
        $chair_price = $_POST['chair_price'];
        $chair_img = $_POST['chair_img'];

		$sql = "update chair_goods set chair_name='{$chair_name}',chair_price='{$chair_price}',chair_img='{$chair_img}' where id={$id}";
		$res = Mysql_query($sql);
		if($res){
			echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"商品信息修改成功!\");\r\n";
            echo "location.href='chair_goods.php'";
            echo "</script>";
            exit;
		}else{
			echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"商品信息修改失败!\");\r\n";
            echo "location.href='chair_goods.php'";
            echo "</script>";
		}

	}else{
		$id = isset($_GET['id'])?$_GET['id']:0;
		$sql = "select * from chair_goods where id='{$id}'";
		$res = Mysql_query($sql);
		$result=mysql_fetch_assoc($res);
		include_once 'html/chair_update.html';

	}
}


//查
elseif($act == 'list'){
	$everypage = 8;//每页显示多少条
	$page = isset($_GET['p'])?$_GET['p']:1;
	$sql = "select count(*) as c from chair_goods";
	$res = Mysql_query($sql);
	$res = mysql_fetch_assoc($res);
	$pagecount	= ceil($res['c']/$everypage);//一共分多少页
	$next = $page<$pagecount?$page+1:$pagecount;//下一页页码的值
	$prev = $page>1?$page-1:1;//上一页的页码
	$offset = ($page - 1)*$everypage;
	$sql = "select * from chair_goods order by id desc limit $offset,$everypage";
	$res = mysql_query($sql);
	while($rs = mysql_fetch_assoc($res)){
		$result[]=$rs;
	}
	include_once 'html/chair_list.html';
}

?>

