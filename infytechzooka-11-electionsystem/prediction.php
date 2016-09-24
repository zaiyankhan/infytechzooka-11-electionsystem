<?php 
$pagetitle="Seats Gained & Prediction";
include "template/header.php";

?>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Party Name</th>
        <th>Party Logo</th>
        <th>Total Number Of Seats</th>
      </tr>
    </thead>
    <tbody>
  	<?php 
		require "db/connect.php";
		$queryd = "SELECT pname,plogo,pseat from party ORDER BY pseat asc";
		$resultd=mysqli_query($con,$queryd);
		if (mysqli_num_rows($resultd) > 0) {
		while($row = mysqli_fetch_assoc($resultd)) {
			
			$cvv = $row["pseat"];
			
			if($cvv>200){
				$stat = 'label-success';
				
			}
			else if ($cvv>=99 && $cvv<=199){
				$stat = 'label-warning';
			}
			else if ($cvv>=0 && $cvv<=98){
				$stat = 'label-danger';
			}
			
        echo "<tr><td>" . $row["pname"]. "</td><td><img src=" . $row["plogo"]. "></img></td><td>" . $row["pseat"]. "</td></td></tr>";
			
			
			
    }
} else {
    echo "<option>No Parties To Display</option>";
}
		
	  ?>
	  
	  
    </tbody>
  </table>


<?php include "template/footer.php";?>