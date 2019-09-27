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
		$table_name = $_POST['table_name'];
        $table_price = $_POST['table_price'];
        $table_img = $_POST['table_img'];

		db('localhost','root');
		$sql = "insert into table_goods values(null,'{$table_name}','{$table_price}','{$table_img}')";
		$res = mysql_query($sql);
		if($res){
			echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"商品添加成功!\");\r\n";
            echo "location.href='table_goods.php'";
            echo "</script>";
            exit;
		}else{
			echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"商品添加失败!\");\r\n";
            echo "location.href='table_goods.php'";
            echo "</script>";
            exit;
		}
    }else{
		include_once 'html/table_add.html';
	}

}


//删
elseif($act == 'del'){
	$id = isset($_GET['id'])?$_GET['id']:0;	
    $sql = "delete from table_goods where id='{$id}'";
    $res = mysql_query($sql);
    if($res){
			header('location:table_goods.php');

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
		$table_name = $_POST['table_name'];
        $table_price = $_POST['table_price'];
        $table_img = $_POST['table_img'];

		$sql = "update table_goods set table_name='{$table_name}',table_price='{$table_price}',table_img='{$table_img}' where id={$id}";
		$res = Mysql_query($sql);
		if($res){
			echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"商品信息修改成功!\");\r\n";
            echo "location.href='table_goods.php'";
            echo "</script>";
            exit;
		}else{
			echo "<script language=\"JavaScript\">\r\n";
            echo "alert(\"商品信息修改失败!\");\r\n";
            echo "location.href='table_goods.php'";
            echo "</script>";
		}

	}else{
		$id = isset($_GET['id'])?$_GET['id']:0;
		$sql = "select * from table_goods where id='{$id}'";
		$res = Mysql_query($sql);
		$result=mysql_fetch_assoc($res);
		include_once 'html/table_update.html';

	}
}


//查
elseif($act == 'list'){
	$everypage = 8;//每页显示多少条
	$page = isset($_GET['p'])?$_GET['p']:1;
	$sql = "select count(*) as c from table_goods";
	$res = Mysql_query($sql);
	$res = mysql_fetch_assoc($res);
	$pagecount	= ceil($res['c']/$everypage);//一共分多少页
	$next = $page<$pagecount?$page+1:$pagecount;//下一页页码的值
	$prev = $page>1?$page-1:1;//上一页的页码
	$offset = ($page - 1)*$everypage;
	$sql = "select * from table_goods order by id desc limit $offset,$everypage";
	$res = mysql_query($sql);
	while($rs = mysql_fetch_assoc($res)){
		$result[]=$rs;
	}
	include_once 'html/table_list.html';
}

?>

