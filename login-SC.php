<?php
$invalidstate = $_REQUEST['state'];//false;
if($invalidstate == true){
  $loginalert = "display:block;";
}else{
  $loginalert = "display:none;";
}
?>

<!DOCTYPE html>
<html>
<?php include_once "head.php";?>

  <body style="margin-top: 50px;">
  <h1><center>UIC Materials & Equipment Requesting System</center></h1>
    <div class="container">
      <div class="jumbotron">
      <div class="alert alert-danger alert-error" style="<?php echo $loginalert; ?>">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error!</strong> Invalid usernme or password.
      </div>

		  <form name="loginform" method="POST" action="confirm.php">
        <div class="form-group">
            <label for="inputEmail">Username:</label>
            <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password:</label>
            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
        </div>
        <!--<div class="checkbox">
            <input type="checkbox" name="remember">
        </div>-->
        <center><button type="submit" class="btn btn-primary glyphicon glyphicon-log-in">&nbspLogin</button><center>
		</form>
    </div>


	<?php include_once "footer.php";	?>
  </body>
</html>
