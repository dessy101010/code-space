<?php



$email = $_GET['email'];
$message =  $_GET['message'];
$name = $_GET['name'];
$logtime = "". date("d/m/Y"). ""."   ". date("h:iA");

//UNPACK USER JSON//////////////////////////////////////////////


$entry_array = [$email, $message, $name, $logtime];
$entry = json_encode($entry_array);

file_put_contents('index-message/'.$email.'.json', $entry);


echo"

    <script>
    
    sessionStorage.setItem('success', 1);
    window.location.href = 'index.html#form' ;
    </script>



";





?>