<?php 
$pagetitle = "Candidates";
include "template/header.php";?>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Qualification</th>
        <th>State/Union Territory</th>
        <th>Political Party</th>
        <th>Votes Garnered</th>
      </tr>
    </thead>
    <tbody>
  	<?php 
		require "db/connect.php";
		$queryd = "SELECT cfname,clname,cqualifications,clocation,cpname,cvote from candidate ORDER BY cvote desc";
		$resultd=mysqli_query($con,$queryd);
		if (mysqli_num_rows($resultd) > 0) {
		while($row = mysqli_fetch_assoc($resultd)) {
			
			$cvv = $row["cvote"];
			
			if($cvv>5){
				$stat = 'label-success';
				
			}
			else if ($cvv>=3 && $cvv<=5){
				$stat = 'label-warning';
			}
			else if ($cvv>=0 && $cvv<=2){
				$stat = 'label-danger';
			}
			
        echo "<tr><td>" . $row["cfname"]. "</td><td>" . $row["clname"]. "</td><td>" . $row["cqualifications"]. "</td><td>" . $row["clocation"]. "</td><td>" . $row["cpname"]. "</td><td><center><span class='label $stat'>" . $row["cvote"]. "</span></center></td></tr>";
			
			
			
    }
} else {
    echo "<option>No Parties To Display</option>";
}
		
	  ?>
	  
	  
    </tbody>
  </table>


<?php include "template/footer.php";?>