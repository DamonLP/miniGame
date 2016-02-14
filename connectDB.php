<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
echo "start connect...<br/>"; 
//資料庫設定
//資料庫位置
$db_server = "mysql1.000webhost.com";
//資料庫名稱
$db_name = "a3143024_joomla";
//資料庫管理者帳號
$db_user = "a3143024_admin";
//資料庫管理者密碼
$db_passwd = "root1234";

//對資料庫連線
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("無法對資料庫連線");

//資料庫連線採UTF8
mysql_query("SET NAMES utf8");

//選擇資料庫
if(!@mysql_select_db($db_name))
        die("無法使用資料庫");

echo"can connect";
?> 

