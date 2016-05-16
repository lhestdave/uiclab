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

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>UIC Lab Reservation System</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script language="javascript" type="text/javascript">
        function addRequestX(){
            //alert('fdjhfkfjhk');
    	$(document).ready(function(){
			$("#addRequest").modal('show');
		   });
       }
    
        
        function addrequestToDb(x){
            var  dateperf = document.getElementById('dateperform_'+x).value;  
            if(dateperf == ""){
                alert("Please check the date!");
            }else{
                window.location.replace("addrequest.php?eid="+x+"&dt="+dateperf);
                alert("Request has been processed!");
            }       
            
        }

</script>
    
</head>
<body>
    <!--<header>

    </header>
     HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">

                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $uname; ?> </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header></header>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="index.php">Dashboard</a></li>
                            <li onclick="addRequestX()"><a href="#addRequest">Add Request</a></li>
                            <li><a href="table.html">Feedback</a></li>
                            <li><a href="forms.html">Contact Us</a></li>
                             <li><a href="login.html">About</a></li>
                            <li><a href="blank.html">FAQ</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Welcome! <a href='#'><?php echo $uname; ?></a></h4>

                </div>

            </div>
            <div class="row">
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-venus dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
  </div>
                           
</div>
                         <h5>Wish List </h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-edit dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
  </div>
                           
</div>
                         <h5>Pending Request </h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-cogs dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
  </div>
                           
</div>
                         <h5>Unreturned Materials </h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-bell-o dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
  </div>
</div>
                         <h5>For Replacement </h5>
                    </div>
                </div>

            </div>
           
            <div class="row">
                <div class="col-md-12">
                    
                    <!--<hr />
                    <div class="text-center alert alert-warning">
                        <a href="#" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <a href="#" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                        <a href="#" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a href="#" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div>
                     <hr />
                     -->
                   
                     <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ref. No.</th>
                                            <th>Date Requested</th>
                                            <th>Lab Experiment No. & Title</th>
                                            <th>Subject</th>
                                            <th>LabCode</th>
                                            <th>Date to Perform </th>
                                            <th align="center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php 
			include_once "connect.php";
            $sql = "SELECT r.rid,r.dateTime,e.coursecode,e.expno,e.exptitle,e.labcode,r.rdate,r.expid,r.status ".
                                "FROM tbl_requests as r INNER JOIN tbl_experiment as e ON r.expid=e.eid INNER JOIN tbl_users as u ON r.requestedby = u.uid WHERE r.requestedby=".$uid." ORDER BY r.rdate";
            $rs=mysql_query($sql); 
            while($row = mysql_fetch_object($rs)) { 
	
						echo "<tr>";
						echo "<td align='left'>#".$row->rid."</td>";
						echo "<td align='left'>".$row->dateTime."</td>";
                        echo "<td align='left'>ExpNo.".$row->expno." - ".$row->exptitle."</td>";
                        echo "<td align='left'>".$row->coursecode."</td>";
                        echo "<td align='left'>".$row->labcode."</td>";
                        echo "<td align='left'>".$row->rdate."</td>";
                        $st = "";
                        if($row->status == 0)
                            $st = "<a href='#'  class='btn btn-xs btn-info'  >Requested";
                        else if($row->status == 1)
                            $st = "<a href='#'  class='btn btn-xs btn-info'  >Processed";
                        else if($row->status == 2)
                            $st = "<a href='#'  class='btn btn-xs btn-warning'  >Released";
                        else if($row->status == 3)
                            $st = "<a href='#'  class='btn btn-xs btn-warning'  >Checking";
                        else if($row->status == 4)
                            $st = "<a href='#'  class='btn btn-xs btn-danger'  >Returned with Damaged";
                        else if($row->status == 5)
                            $st = "<a href='#'  class='btn btn-xs btn-danger'  >Cancelled/Denied";
                        else if($row->status == 6)
                            $st = "<a href='#'  class='btn btn-xs btn-success'  >Returned/No Problem";
                       
                        echo "<td align='center' id='update'>".$st."</td>";
						echo "</tr>";
					}
				?>
                                  </tbody>
                                  </table>
                            </div>
                </div>

                     </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="addRequest" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Request</h4>
            </div>
            <div class="modal-body">
                <form role="form" name="addrequest" method="POST" action="#" >
                    <div class="form-group">
                        <input type="text" class="form-control" id="searchstr" name="searchstr" placeholder="Search: Experiment Title">						
						<br>
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Exp. Code</th>
                                    <th>Lab Experiment No. & Title</th>
                                    <th>Subject</th>
                                    <th>LabCode</th>
                                    <th>Date to Perform</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
            <?php 
			include_once "connect.php";
            $sql = "SELECT * FROM tbl_experiment";
            
             $rs1=mysql_query($sql); 
            while($row1 = mysql_fetch_object($rs1)) { 
	
						echo "<tr>";
						echo "<td align='left'>#".$row1->eid."</td>";
                        echo "<td align='left'>ExpNo.".$row1->expno." - ".$row1->exptitle."</td>";
                        echo "<td align='left'>".$row1->coursecode."</td>";
                        echo "<td align='left'>".$row1->labcode."</td>";
                        echo "<td align='left'><input type='datetime-local' id='dateperform_".$row1->eid."' name='dateperform_".$row1->eid."'/></td>";
                        echo "<td align='left'><input type='button' class='btn btn-xs btn-info' onclick='addrequestToDb(".$row1->eid.");' value='Add to Request'/></td>";
						echo "</tr>";
					}
				?>
                            </tbody>
                            </table>
                    </div>
           
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <!-- <button type="submit" class="btn btn-primary">Submit Request</button>-->
                    </div>
			    </form>				
            </div>
        </div>
    </div>
    </div>    </div>
    
    <!-- CONTENT-WRAPPER SECTION END-->
     <?php include_once "footer.php"; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
