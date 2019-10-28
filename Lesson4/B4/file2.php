<?php 
	//cac ham lam viec voi file
	//1:kiem tra xem file co ton tai hay khong
	if(file_exists('database/data.txt')){
		echo 'yes';
	}else{
		echo "No";
	}
	echo "<br/>";
	// 2: file co quyen ghi hay khong
	if(is_writable('database/data.txt')){
		echo "co quyen";
		//3:ghi noi dung file ma k can dung den fwite
		file_put_contents('database/data.txt', 'Hay trao cho anh');
	}else{
		echo'not right';
	}
	echo "<br/>";

	//rename('database/php1903e.txt','php.txt');
	//copy('database/php.txt','../B3/');
	//xoa file
	//unlink('php.txt');
	mkdir('B4/database/php');


 ?>