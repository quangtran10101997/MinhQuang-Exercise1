<?php 
	$conn = new mysqli('localhost','root','','ex1');
	$conn->set_charset('utf8');
	if(mysqli_connect_errno()){
		echo "Kết nối lỗi: ". mysql_connect_error();
		die();
	}  
?>