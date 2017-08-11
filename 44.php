<?php
date_default_timezone_set("Asia/Shanghai");
$time=time();
$showtime=date("Y-m-d");
//echo $showtime;
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && ($_FILES["file"]["size"] < 20000000000)){
//	echo 1;
	if ($_FILES["file"]["error"] > 0){
//		echo "-1";
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
  	}else{
//		echo "-2";
//  	echo "Upload: " . $_FILES["file"]["name"] . "<br />";
//		echo "Type: " . $_FILES["file"]["type"] . "<br />";
//		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

//		if (file_exists("upload/" . $_FILES["file"]["name"])){
////			echo "-1";
//			echo $_FILES["file"]["name"] . " already exists. ";
//		}else{
//			echo "-2";
//			move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);



//			$name=$_FILES["file"]["name"];
//		    if(!file_exists("upload/".$showtime)){
//		        $wenjian=mkdir("upload/".$showtime,0777,true);
//		    }
//		    $url="upload/".$showtime."/".$time.$name;
//			move_uploaded_file($_FILES["file"]["tmp_name"],$url);
//			echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
//			echo HTTP_URL."/upload/".$showtime."/".$time.$name;
//    	}

		if(!file_exists("../upload")){
			mkdir("../upload",0777,true);
		};
		$dirname=$showtime;
		if(!file_exists("../upload/".$dirname)){
			mkdir("../upload/".$dirname,0777,true);
		};
		$filename=$time.$_FILES["file"]["name"];
		$path="../upload/".$dirname."/".$filename;
		move_uploaded_file($_FILES["file"]["tmp_name"],$path);
		$url="http://127.0.0.1/hbsy/upload/".$dirname."/".$filename;
		echo $url;
    }
}else{
//	echo 2;
  	echo "Invalid file";
}

?>