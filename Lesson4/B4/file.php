<?php 
	//xu ly file trong php
	//1: mo file
	$fp= fopen('database/data.txt', 'a+');

	//thao tac mo file va cap quyen cho doc file
	if($fp){
		//echo 'mo file thanhc ong';
		echo "<br/>";
		$sizeFile= filesize('database/data.txt');
		//echo $sizeFile;
		
		//ghi du lieu vao file
		$content = 'test write';
		fwrite($fp, $content);
		//doc noi dung trong file
		//mo lai file
		$fp2=fopen('database/data.txt','r');
		$data = fread($fp2, filesize('database/data.txt'));
		echo $data;

		fclose($fp);
		fclose($fp2);
	}else{
		echo "khong mo dc file";
	}

 ?>