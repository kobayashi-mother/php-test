<?php
header("Content-Type: application/json");
$user=$_POST["user"];            
$pwd=$_POST["pwd"];
$response=array(
  'user' => $user,
  'pwd' => $pwd
  );
echo json_encode($response);
?>