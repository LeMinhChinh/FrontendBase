<?php 
	//cac ham co san ve mang trong php
	
	$person = [
		'name'=> 'A',
		'age'=> 20,
		'add'=>'NB'
	];
	//chuyen doi key cua ham ve chu hooa hoc chu thuong tuy y
	$person=array_change_key_case($person,1);
	//1 case_upper:hang so ham
	echo "<pre>";
	print_r($person);

	$cat = [
		'NAME'=>'Tom',
		'AGE'=>2,
		'WEGHT'=>3
	];
	$cat= array_change_key_case($cat,0);
	print_r($cat);

	//dem so lan xuat hien cua cac phan tu giong nhau va tra ve 1 mang
	$arrNumber = [1,2,4,5,6,8,1,1,3,4,5,3];
	$cout=array_count_values($arrNumber);
	print_r($cout);
	//them 1 phan tu vao cuoi mang
	array_push($arrNumber, 100);
	print_r($arrNumber);

	//xoa di phan tu cuoi mang va tra ve dung phan tu do
	$arrLast=array_pop($arrNumber);
	print_r($arrLast);
	echo "<br/>";
	print_r($arrNumber);

	//them 1 phan tu vao dau mang
	array_unshift($arrNumber, $arrLast);
	print_r($arrNumber);

	//xoa di phan tu dau tien cua mang

	$first =  array_shift($arrNumber);
	echo $first;
	echo "<br/>";
	print_r($arrNumber);

	//tach mang thanh cac mang con
	$arrChunk = array_chunk($arrNumber, 2,true);
	//true: giu nguyen key tu ban dau truyen xuong
	//tham so false hoac khong viet gi tu dong danh lai key
	print_r($arrChunk);
//kiem tra 1 bien co phai mang hay khong
	if(is_array($arrChunk)){
		echo "Yes";
	}else{
		echo "No";
	}
	echo "<br/>";
	//kiem tra phan tu co nam trong mang khong
	$number = [1,2,3,4,5,6,7,8,9];
	if(in_array(6,$number)){
		echo "Yes";
	}else{
		echo "No";
	}

	echo "<br/>";
	$fruit = [
		'name'=> 'cam',
		'color'=>'orange',
		'weight'=>2
	];
	//kiem tra key co nam trong mang hay khong
	if(array_key_exists('name1', $fruit)){
		echo "ok";
	}else{
		echo "No";
	}
	echo "<br/>";
	//xoa bo di cac phan tu giong nhau trong mang
	$unique= [1,2,3,4,5,6,2,3,4];
	$unique= array_unique($unique);
	print_r($unique);

	echo "<br/>";
	//chuyen mang ko tuan tu ve nag tuan tu
	$fruit= array_values($fruit);
	print_r($fruit);

	echo "<br/>";
	$sum = array_sum($unique);
	echo $sum;

	echo "<br/>";

	$myArrNumber = [1,2,3,4,5,6,7,8,9,10];
	//cat mang con tu mang cha cho truoc
	$childArr= array_slice($myArrNumber, 4,3,true);
	print_r($childArr);
	//thay the cac phan tu ban dau cua mang
	array_splice($myArrNumber,4,3,[400,500,600]);
	print_r($myArrNumber);

	$end = end($myArrNumber);
	echo "<br/>";
	echo $end;

	$url ="http://www.vnexpress.new/hom-nay-troi-rat-nong-123.html";
	//123 : id cua bai viet- va no loun nam o vi tri truoc html;
	function gettId($myUrl){

		$arrLink=explode('/',$myUrl);
		print_r($arrLink);
		$contentLink=end($arrLink);
		$arrLink2 =  explode('-', $contentLink);
		$strID=end($arrLink2);
		$id = intval($strID);
		echo $id;
		return $id;

	}
		$id=gettID($url);
		echo $id;
		echo "<br/>";

	//cac ham sap xep mang 
		$randomNumber= [100,89,2,3,1,90,20];
		//asort($randomNumber);  tang dan
		arsort($randomNumber);  //giam dan
		print_r($randomNumber);

		//sap xep dua vao gia tri cua mang


		$rand= [
			'z'=>1,
			'a'=>10,
			'y'=>2,
			'b'=>3
		];

		ksort($rand);
		//krsort($rand) //sap xep theo kieu giam dan
		print_r($rand); //sap xep tang dan theo key


		//viet foeach de xap xap mang
		function sapxepmang($arr){
			foreach ($arr as $key => $val) {
				foreach ($arr as $key2 => $item) {
					if($arr[$key] < $arr[$key2]){
						$tg = $arr[$key];
						$arr[$key] = $arr[$key2];
						$arr[$key2] = $tg;
					}
					
				}
			}
			return $arr;
		}

		$a= sapxepmang($randomNumber);
		print_r($a);


 ?>