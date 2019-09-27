<?php
    $con = mysqli_connect("localhost","root","root","easylife");//数据库配置（ip地址，用户名，密码,数据库名）
    if (!$con)//判断连接数据库是否成功
    {
      die('Could not connect: ' . mysql_error());//输出错误信息
    }
    mysqli_set_charset($con,'UTF8');//设置数据库字符集
