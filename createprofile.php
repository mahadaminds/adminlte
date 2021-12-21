<?php
require_once('config/db.php');
require_once('config/define.php');
//require_once('../../helper/functions.php');
/*$id=$_POST['id'];
$cust_id=$_POST['cust_id'];
$email=$_POST['email'];
$age=$_POST['age'];
$height=$_POST['height'];
$gender=$_POST['gender'];
$religion=$_POST['religion'];
$caste=$_POST['caste'];
$subcaste=$_POST['subcaste'];
$district=$_POST['district'];
$state=$_POST['state'];
$country=$_POST['country'];
$ms=$_POST['ms'];*/

  

if ($conn-> connect_error) {
  die("Connection failed: " . $conn-> connect_error);
}
  echo "connected successfully";

  $addprofile_query = "INSERT INTO profile(`id`,`cust_id`,`email`,`age`,`height`,`sex`,`religion`,`caste`,`subcaste`,`district`,`state`,`country`,`maritalstatus`) 
  VALUES ('$id','$cust_id','$email','$age','$height','$gender','$religion','$caste','$subcaste','$district','$state','$country','$ms')";
  echo $addprofile_query;

$result = $conn->query($addprofile_query);
var_dump($result);
echo "New record created successfully";



//$userlist = [];

 /*
while($result_row = $result->fetch_assoc()){
  var_dump($result_row);
    $profilelist[]=['name'=>$result_row['name'],'email'=> $result_row['email'],'address'=>$result_row['address'],'city'=>$result_row['city']];
}
//print_r($userlist);
//echo json_encode($userlist);

if(count($userlist)>0){
  $reurndata = ["success"=>true,"data"=>json_encode($userlist),"msg"=>"Getting User List"];
  echo json_encode($reurndata);
}
*/
?>
