<?php
$host="localhost";
$user="root";
$password="";
$db="skymotorhub";

mysql_connect($host,$user,$password,$db);
mysql_select_db($db);

if(isset(['username']))
{
    $uname=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select*from skymotorhub where user='".$uname."' AND pass '".$password."' limit 1 ";
    $result=mysql_query($sql);
    if(mysql_num_rows($result)==1){
        echo"You have successfully logged in";
        exit();
    }
    else{
        echo"You have entered incorrect password";
        exit();
    }
}
?>




<?php require_once('conn.php');?>

<?php 

$user_ID = $_POST["name"];
$username = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["cpassword"];

$hashed_password = shal1($password);

$query = "INSERT INTO login (user_ID, Username, Password, Confirm_password, is_deleted) VALUES('{$user_ID}', '{$username}','{$password}','{$confirm_password}', {$is_deleted})";

$result = mysqli_query($connection, $query);

if ($result) {
	echo "1 Record added";
}
else{
	echo "Database query failed";
}

?>