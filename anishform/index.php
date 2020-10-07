  <?php error_reporting(0); ?>
  <?php 



	$username="root";
$password= "";
$server ='localhost';
$db ='forphp';


$con= mysqli_connect($server,$username,$password,$db);

if($con){
	echo "connected";
}else{
	die("faild".mysqli_connect_error());

}


 if (isset($_POST['submit'])){

$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$addressproof=$_POST['addressproof'];
$prmanent=$_POST['prmanent'];
$date=$_POST['datee'];

$insertquery =  " insert into  updatephp(name,address,gender,addressproof,prmanent,datee) values('$name','$address','$gender','$addressproof','$prmanent','$date')";

$con->query($insertquery);



header("location: list.php");

 if ($con)


  {
?>
<script>
	
alert("Thankyou for contact to us"); 

</script>
<?php
 }else{
 	?>
<script>
	
alert("data not insert sucessful");

</script>
<?php
}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>php curd</title>


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<form method="POST" class="form-group text-center">
	<div  class="form-group">
	<label>Full Name</label>
<input type="text" name="name" value="">
</div>
<br>
<br>
<div  class="form-group">
<label>Address</label>
<textarea class="" name="address">Address</textarea>
</div>
<br>
<div  class="form-group">
<label>Gender</label>
<br>
<label>male</label>
<input type="checkbox" name="gender" value="">
</div>
<br>
<div  class="form-group">
<input type="file" name="addressproof" value="choosefile">
</div>
<br>
<div class="form-group" >
<label>It's Prmanent</label>
<label>Yes</label>
        <input type="radio" name="prmanent" id="yes"  value="yes">
        <label>No</label>
        <input type="radio" name="prmanent" id="no" value="no">

        </div>
        <div>
<input type="date" name="datee" value="">
</div>
<br>
<div class="form-group">
<input type="submit" name="submit">
</div>
</form>
</body>
</html>