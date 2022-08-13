<?php

$username = $_POST['username']
$password = $_POST['password']

$conn = new mysqli("localhost","root", "", "skymotorhub")
if($conn->connect_error){
    die("Failed to connect : "($conn->connect_error));
}
    else{
        $stmt = $conn-> prepare("SELECT * FROM login WHERE username = ?");
        $stmt->blind_param("s",$username);
        $stmt->execute();
        $stmt result = $stmt->get_result();
        if($stmt_result->num_rows >0 ) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                echo"<h2> Login Successfully</h2>";

            }
            else{
                echo "<h2> Invalid Username or Password </h2>";
            }

        }
        else {
            echo "<h2> Invalid Username or Password </h2>";
        }

  }

?>

