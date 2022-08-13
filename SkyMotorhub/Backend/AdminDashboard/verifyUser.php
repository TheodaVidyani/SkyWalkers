<?php
// $host="localhost";
// $user="root";
// $password="";
// $db="skymotorhub";

// mysql_connect($host,$user,$password,$db);
// mysql_select_db($db);

// if(isset(['username']))
// {
//     $uname=$_POST['email'];
//     $password=$_POST['password'];
    
//     $sql="select*from skymotorhub where user='".$uname."' AND pass '".$password."' limit 1 ";
//     $result=mysql_query($sql);
//     if(mysql_num_rows($result)==1){
//         echo"You have successfully logged in";
//         exit();
//     }
//     else{
//         echo"You have entered incorrect password";
//         exit();
//     }
// }

if(isset($_POST["submit"])){
    // this is the first step to connect to a mysql database 
    $link = mysqli_connect("localhost", "root","1998", "mydb");

    $u = $_POST["username"];
    $p = md5($_POST["password"]);

    $r = mysqli_query($link, "SELECT * FROM user WHERE u_name='$u' AND password='$p'");

    if($r->num_rows){
        session_start();
        $_SESSION["currentUser"] =  $u ;
        header("location: index.php");
    }
    else{
        header("location: login.html");
    }
}else{
     header("location: 404.php");
 }

?>
