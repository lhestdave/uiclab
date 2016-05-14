<?php
	session_start();
	include_once "connect.php";	
	$useremail=$_POST["inputEmail"];
	$password=$_POST["inputPassword"];	
	
	$sql="SELECT * FROM tbl_users WHERE uname='$useremail' and pword='$password' ";
	
	//echo $sql;
	$rs=mysql_query($sql);
	$result = mysql_num_rows($rs);
	
	if($result > 0){
		 $row = mysql_fetch_object($rs);
		if ($useremail ==  $row->uname && $password == $row->pword){
			$_SESSION["uid"]=$row->uid;
			$_SESSION["uname"]=$row->name;
			$_SESSION["ustatus"]=$row->status;
			header("location:index.php");
			//echo "<script> window.location='index.php';</script>";
		}else{
			//echo "<script> window.location.assign('login.php?state=true');</script>";
			header("location:index.php");
		}
	}else{
	//echo "false else";
		echo "<script> window.location.assign('login.php?state=true');</script>";
		//echo "<script> alert('ELSE');</script>";
		//header("location:index.php?state=true");
	}
	
	//INSERT INTO `db_dcnhs2014`.`tbl_alumni` (`id`, `lastname`, `firstname`, `mname`, `batch`, `contactno`, `address`, `rkit`, `releasedby`) VALUES (NULL, 'pelias', 'lester dave', 'labartine', '1991', '09101689349', 'skksdkdksdks', 'y', '1');
?>

   
