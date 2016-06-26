<?php
session_start();
include_once "connect.php";	
if(!isset($_SESSION['uid'])){
header('location:login.php?state=true');
}else{
$uid = $_SESSION['uid'];
$uname = $_SESSION['uname'];
$status = $_SESSION['ustatus'];
}

// $addedby = $_SESSION["userid"];
// $status = "INACTIVE";
// if(isset($_POST['status']) && 
//    $_POST['status'] == 'ACTIVE') 
// {
//    $status = "ACTIVE";
// }   

$eid = $_REQUEST["eid"];
$dateperform = $_REQUEST["dt"];

// $email = $_POST['useremail'];
// $pass = $_POST['pss1'];
// $lname = $_POST['lname'];
// $fname = $_POST['fname'];
try{
$sql="INSERT INTO tbl_requests VALUES (0,CURRENT_TIMESTAMP, $eid, '$dateperform', Date($uid),'','','','',0)";
mysql_query($sql);
header("location:mainpage.php");
}catch(Exception $e) {
echo "<script>alert('You can request only once for this lab exercise.TY!');</script>";
}




?>