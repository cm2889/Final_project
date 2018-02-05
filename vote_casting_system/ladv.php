<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"vot");
include "adlog.php";
?>

<?php
if(isset($_POST["submit1"]))
{
   $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $name = $_POST["voter_name"];
$id = $_POST["voter_id"];
$user = $_POST["user_name"];
$mobile = $_POST["mobile"];
$password = md5(md5($_POST["password"]));
$dob=$_POST["dob"];
$choice_btn=$_POST["choice_btn"];
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["image"]["name"];
   $dst="./voter_image/".$v3.$fnm;
   $dst1="voter_image/".$v3.$fnm;
   move_uploaded_file($_FILES["image"]["tmp_name"],$dst);


if(mysqli_query($link,"INSERT INTO voter(voter_name,voter_id,user_name,password,mobile,dob,choice_btn,image) VALUES ('$name','$id','$user','$password','$mobile','$dob','$choice_btn','$dst1')")){
  header( "refresh:5; url=adlog.php" );
  
  echo '<div class="col-md-4 ar1">
              <h2> Successfully you added  a voter which voter ID is $id !!!!!</h2>
              <br>
            </div>';
  

}
else{
	header( "refresh:5; url=adlog.php" );
	echo '<div class="col-md-4 ar1">
              <h2> Please  check u r information again !!!</h2>
              <br>
            </div>';
	
	
	
}
}
if(isset($_POST["value2"])){
		$id = $_POST["voter_id"];
		if(mysqli_query($link,"delete from voter where voter_id ='$id'")){
			header( "refresh:5; url=adlog.php" );
			echo "You successfully Removed this voter $id";
		}
		else{
			header( "refresh:5; url=adlog.php" );
			echo "we can not find this Voter id You may check again or correct Voter Id";
		}
		
		
	}

?>	