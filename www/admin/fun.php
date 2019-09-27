<?php
function msg(){
		echo 'SQL指令执行失败！<br />';
		echo '错误编号：'.mysql_errno().'<br />';
		echo '错误原因：'.mysql_error().'<br />';
		exit;
}


?>
