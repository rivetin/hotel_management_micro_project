<?php

include('connection.php');

if(isset($_SESSION['user'])){
    echo('session set');
    
}
else{
    echo('poyy session set chey koopee);
}


?>