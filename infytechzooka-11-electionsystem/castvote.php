<?php 
session_start();
$pagetitle="Cast Vote";
include "template/header.php";
$result="";
$vaadhar = $_SESSION['aadharno'];

require "db/connect.php";

if(isset($_POST['submitvote'])){
	$cid = $_POST['cid'];
	
	
	
	$votequery = "UPDATE candidate SET cvote=cvote+1 WHERE cid='" . $cid . "'";
	
	$deletevoter = "DELETE * FROM voter WHERE vaadhar='$vaadhar'";
	
 if (mysqli_query($con, $votequery)) {
	 mysqli_query($con, $deletevoter);
    $result = '<div class="alert alert-success">
  <strong>Thank You For Your Vote!</strong><br> Thank You For Talking A Big Step To Shape INDIA\'s Future!.
  <br><br>
  <img src="assets/indianflag.gif"/>
</div>';
} else {
    $result = '<div class="alert alert-danger">
  <strong>Error!</strong> Please Try Again Later!.
</div>';
}






mysqli_close($con);
}

echo "<center><h1>$result</h1></center>";


?>



<?php include "template/footer.php"?>