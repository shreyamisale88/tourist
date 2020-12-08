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
	$SELECT = "SELECT email From sign Where email = ? Limit 1 ";
	$INSERT = "INSERT Into sign (sno,id, email, password) values(?,?,?,?)";

	$stmt = $con->prepare($SELECT);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt->bind_result($email);    
	$stmt->store_result();
	$rnum = $stmt->num_rows;

	if($rnum==0){
		$stmt->close();
		$stmt = $con->prepare($INSERT);
		$stmt->bind_param('isss',$sno,$userid, $email, $password);
		$stmt->execute();
		echo "You registered sucessfully";
		/*header('Location:index.html');*/
	}else {
		echo "Already registered using this email";
	}
	$stmt->close();
	$con->close();
}
}else{
	echo "All feilds are required";
	die();
}
?>