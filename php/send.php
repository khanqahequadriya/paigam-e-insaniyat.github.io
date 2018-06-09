<?php  
$name = $_POST['name'];
$request = $_POST['request'];

$tc = "saquib.ahmad1234@gmail.com";
$subject = "request";
$body = "this is a trial tets...";

mail($tc,$subject,$body);

echo "message sent... <a href="./queries.html"> Click Here</a> for new... ";
?>