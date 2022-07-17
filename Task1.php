<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sms";

$name="hasan shoaib";
$uname="shoaib";
$email="shoaib@gmail.com";
$pass=654321;

$insertQ="INSERT INTO admin(name,username,email,password) VALUES('".$name."','".$uname."','".$email."','.$pass.')";
$updateQ="UPDATE `teacher` SET `name` = 'hasan shoaib ahmed' WHERE `teacher`.`username` = '".$uname."'";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("conn failed: ".$conn->connect_error);
}
else{
	//FOR_INSERT_DATA_INTO_TABLE
	$iresult=$conn->query($insertQ);
	if($iresult){
		echo "Inserted";
	}
	else{
		echo "Already inserted<br>";
	}
	
	//FOR_UPDATE_DATA
	$updateResult=$conn->query($updateQ);
	if($updateResult){
		echo "Updated";
	}
	else{
		echo "Not updated <br>";
	}
 
}
?>