<?php
session_start();
include_once "connect.php";	
if(!isset($_SESSION['uid'])){
header('location:login.php?state=true');
}
header('location:mainpage.php');
//for finals
//header('location:impromptu.php');

?>