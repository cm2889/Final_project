<?php
   include('adsession.php');
   ?> 
   <?php
   
   $admin_id=$_GET['admin_id'];
function select_blog_info($admin_id){
	
	$db_connect=mysqli_connect('localhost','root','');
	   if($db_connect){
			 
			$db_select=mysqli_select_db($db_connect,'vot');
			 
		            }
		 else{
			 die('connection fail'.mysqli_error($db_connect));
         }
		 $sql="SELECT * FROM adlog WHERE admin_id='$admin_id'";
		 if(mysqli_query($db_connect,$sql)){
			 $query_result=mysqli_query($db_connect,$sql);
			return $query_result; 
		 }
		 else{
			 die('query problem'.mysqli_error($db_connect));
		 }
    }
	
     $query_result=select_blog_info($admin_id);
	$blog_info=mysqli_fetch_assoc($query_result);
	
	if(isset($_POST['btn'])){
		
		function update_blog(){
			$db_connect=mysqli_connect('localhost','root','');
	      if($db_connect){
			 
			$db_select=mysqli_select_db($db_connect,'vot');
			 
			 
		               }
		 else{
			 die('connection fail'.mysqli_error($db_connect));
              }
				
				$fnm=$_FILES["image"]["name"];
                $dst="./can_image/".$fnm;
				$dst1="can_image/".$fnm;
				move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
				$imam="UPDATE adlog SET username='$_POST[name]',password='$_POST[password]',image='$dst1' WHERE admin_id='$_POST[admin_id]'";
		  
		if(mysqli_query($db_connect,$imam)){
			
			header('location:view_admin.php');
		}
		else{
			die('connection l'.mysqli_error($db_connect));
		}
		}
		
		update_blog();
	}
   
   
   
   ?>
   
   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Voter information</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/up_voter.css" rel="stylesheet">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	
	.vote{
	margin-top:30px;
	}
	</style>
	
  </head>
  <body>
  <div class="content">
  <h1> <marquee>   UPDATE Admin informtion here </marquee></h1>
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
      <a class="navbar-brand" href="adlog.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
       
        <li class="active"><a href="election.php">  Election Informtion <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="voter.php"> voter Inormation<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="candidate.php">  Candidate Information <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="new_admin.php">  Admin Information <span class="sr-only">(current)</span></a></li>
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
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-2">
					<form action="" method="POST" enctype="multipart/form-data" >
					  
					  <div class="form-group">
						<label for="Name">User Name</label>
						<input type="text" class="form-control" name="name" placeholder="Type Voters Name Here"  maxlength="10" value="<?php echo $blog_info['username'];  ?>">
					  </div>
					  <div class="form-group">
						<label for="Name">password</label>
						<input type="text" class="form-control" name="password" placeholder="Type Voters Name Here"  maxlength="10" value="<?php echo $blog_info['password'];  ?>">
					  </div>
					   
					  
					  <div class="form-group">
						<label for="password">Candidate Id</label>
						<input type="hidden" class="form-control" name="admin_id" placeholder="provide voter id" value="<?php echo $blog_info['admin_id'];  ?> ">
					  </div>
					  
					  
					  
					  
					  <div class="form-group">
						<label for="exampleInputFile">Admin iamge</label>
						<input type="file" name="image"  accept="image/*" >
						<p class="help-block">Selet Photo </p>
						<input type="reset" value="Reset" > 
						<input type="submit" value="Update Information" name="btn" >
						
					  </div>
					</form>
				</div>
			</div>
			
			
		
	
	
		</div>
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
   
   
   