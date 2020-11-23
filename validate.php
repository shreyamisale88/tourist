<?php if($_SERVER["REQUEST_METHOD"] == "POST")
{$userid=$_POST['id'];
$email=$_POST['email'];
$password=$_POST['password'];}


if (!empty($id)|| !empty($email)|| !empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";

$con = new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
}else{
	$SELECT = "SELECT * From sign Where userid='$id' && password='$password' ";
	

	$stmt = $con->prepare($SELECT);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum = $stmt->num_rows;

	if($rnum==0){
		$stmt->close();
		$stmt = $con->prepare($INSERT);
		$stmt->bind_param("isss", $sno, $id, $password, $email);
		$stmt->execute();
		//echo "You registered sucessfully";
		//echo '<a href="index.html">you registered successfully</a>';
	   if($rnum==1){
		header('Location:index.html');
	}

	}else {
		header('Location:sign.html');
	}
	$stmt->close();
	$con->close();
}
}else{
	echo "All feilds are required";
	die();
}
?>