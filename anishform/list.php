 <?php error_reporting(0); ?>
  <?php 



	$username="root";
$password= "";
$server ='localhost';
$db ='forphp';


$con= mysqli_connect($server,$username,$password,$db);

if($con){
	echo "";
}else{
	die("faild".mysqli_connect_error());

}
$sql = "SELECT * FROM  updatephp";
$result = $con->query($sql);

if($_GET["did"]) {
	$sql = "DELETE FROM  updatephp WHERE id='".$_GET["did"]."'";
	$con->query($sql);
	header("location: list.php");
}
if (isset($_POST['submit'] == "Update")){
$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$addressproof=$_POST['addressproof'];
$prmanent=$_POST['prmanent'];
$date=$_POST['datee'];
$eid =$_POST['eid'];


$sql = "UPDATE   updatephp set name='$name',address='$address',gender='$gender',addressproof='$addressproof',prmanent='$prmanent',  datee='$date' where id= '.$_GET['eid'].'" ;
$result = $con->query($sql);


header("location: list.php");
}
?>


<table  style="width:50%">
 <tr>
  <th style="width:50px; text-align: left;">ID</th>
  <th  style="width:100px; text-align: left;">Full Name</th>
  <th style="width:100px; text-align: left;">Address</th>
   <th style="width:100px; text-align: left;">Gender</th>
  <th style="width:100px; text-align: left;">Image</th>
  <th  style="width:100px; text-align: left;">It's Prmanent</th>
  <th  style="width:100px; text-align: left;">Date</th>
</tr>
 
  <?php
  while($row = $result->fetch_array()) {  ?>
  
    <tr>
	  <td><?php echo $row["id"]; ?></td>
	  <td><?php echo $row["name"]; ?></td>
	  <td><?php echo $row["address"]; ?></td>
	  <td><?php echo $row["gender"]; ?></td>
	  <td><?php echo $row["addressproof"]; ?></td>
      <td><?php echo $row["prmanent"]; ?></td>
      <td><?php echo $row["datee"]; ?></td>
	  <td> <a href="list.php?did=<?php echo $row["id"]; ?>">Delete</a> </td>
	   <td> <a href="list.php?eid=<?php echo $row["eid"]; ?>">Update</a> </td>
	</tr>
 
 <?php } ?>
  


  
</table>