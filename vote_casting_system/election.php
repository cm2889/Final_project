
<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"select username from adlog where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/adlog.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="content">
  <h1> <marquee> Eletion  panel You can ADD Delete and update  election here </marquee></h1>
  </div>
	<div class="page-wrap">
	
    <div class="conatiner">
	<div class="header">
	<img src="image/imam.jpg" class="img-responsive" alt="Responsive image" width="100%" >
	
	</div>
	</div>
	
	<div class="navigation">
	<!-- starts navigation here-->
	
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="election.php">  Election Informtion <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="voter.php"> voter Inormation<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="candidate.php">  Candidate Information <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="candidate.php">  Admin Information <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="votres.php"> Result <span class="sr-only">(current)</span></a></li>
        
        <li class="active"><a href="reset.php"> Reset List <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="voterup.php"> voter pending <span class="sr-only">(current)</span></a></li>
		<li class="active"><a href="logout.php"> Log out <span class="sr-only">(current)</span></a></li>
        
		
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
	<div class="well">
		<div class="container-fluid">
			
				<div class="col-md-12  ">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="username" class="col-sm-2 control-label">Name of The Election</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="username" placeholder="Type Name Here">
							</div>
						</div>
						<div class="form-group">
							<label for="Password" class="col-sm-2 control-label">How Many candidate are attend </label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="Password" placeholder="Password">
							</div>
						</div>
					</form>
				</div>
				

	
			<div class="container">
    <form action="" class="form-horizontal"  role="form">
        <fieldset>
           
            <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">Election Date and time</label>
                <div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
			
			
        </fieldset>
    </form>
	
</div>
			
			<form class="form-inline">
    <div class="form-group">
	
    <div class="col-md-3 col-md-offset-7">
      <button type="submit" class="btn btn-success"> ADD Election </button>
    </div>
	</div>
    
	 <div class="form-group">
    <div class="col-md-3 col-md-offset-3">
      <button type="submit" class="btn btn-danger"> Delete Election </button>
    </div>
    </div>
	 <div class="form-group">
    <div class="col-md-3 col-md-offset-3">
      <button type="submit" class="btn btn-info"> Update Election </button>
    </div>
    </div>
	
	</form>
		</div>
	</div>
	
	

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"> </script>
   <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
   <script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	
</script>
    
  </body>
</html>