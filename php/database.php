<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_rowingdata = "cust-mysql-123-07";
$database_rowingdata = "porterdesignscouk_1152072_db1";
$username_rowingdata = "upo_1152072_0001";
$password_rowingdata = "Tigger10";
$conn = mysql_pconnect($hostname_rowingdata, $username_rowingdata, $password_rowingdata) or die(mysql_error());
mysql_select_db($database_rowingdata, $conn);
?>