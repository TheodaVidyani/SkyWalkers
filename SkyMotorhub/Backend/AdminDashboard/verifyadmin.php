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

$username = $_POST["username"];
$password = $_POST["password"];

$hashed_password = shal1($password);

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

?>