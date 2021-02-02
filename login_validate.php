<?php

include('connection.php');

$email = $_POST['email'];
$password = $_POST['password'];

if($email == "test@test.com" and $password == "testtest"){
    header('Location:update.php');
    $_SESSION['user'] = '$email';
    
}
else{
    echo("Emailoo passwordo thettund nookk koopeee");
}


?>