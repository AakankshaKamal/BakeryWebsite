<!DOCTYPE html>
<html>
<head>
	<title>formdetails</title>
</head>
<body>


<?php 
$lname=$fname = $country = $comment ="";


if($_SERVER['REQUEST_METHOD']=='POST')
{

$fname=testinput($_POST["firstname"]);
$lname=testinput($_POST["lastname"]);
$country=testinput($_POST["country"]);
$comment=testinput($_POST["subject"]);

}

function testinput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
 
 

</body>
</html>