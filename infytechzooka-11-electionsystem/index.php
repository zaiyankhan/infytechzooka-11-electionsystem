<script type="text/javascript" src="scripts/script.js"></script>
<?php 

session_start();
$pagetitle = "Home";?>
<?php require "template/header.php";
$loc='';
if(isset($_POST['votelogin'])){
	$loc = $_POST['location'];
}


?>
<style>
img{
	width:100px !important;
	height:100px !important;
}
</style>
<div class="row">
<div class="row">
<center>
<h2>OVERALL RESULT</h2>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <script type="text/javascript" charset="utf-8">
      window.chartOptions = {
        segmentShowStroke: false,
        percentageInnerCutout: 75,
        animation: false
      };
      
      var chartUpdate = function(value) {
        console.log("Updating Chart: ", value);
        
        // Replace the chart canvas element
        $('#chart').replaceWith('<canvas id="chart" width="300" height="300"></canvas>');
        
        // Draw the chart
        var ctx = $('#chart').get(0).getContext("2d");
        new Chart(ctx).Doughnut([
          { value: value,
            color: '#cb1212' },
          { value: 86+value,
            color: '#DDDDDD' }],
          window.chartOptions);
        
        // Schedule next chart update tick
        setTimeout (function() { chartUpdate(value + 1); }, 1000);
      }
      $(document).ready(function() {
        setTimeout (function() { chartUpdate(01); }, 1000);
      })
      
    </script>
	
	<script type="text/javascript" charset="utf-8">
      window.chartOptions = {
        segmentShowStroke: false,
        percentageInnerCutout: 75,
        animation: false
      };
      
      var chartUpdate1 = function(value) {
        console.log("Updating Chart: ", value);
        
        // Replace the chart canvas element
        $('#chart1').replaceWith('<canvas id="chart1" width="300" height="300"></canvas>');
        
        // Draw the chart
        var ctx = $('#chart1').get(0).getContext("2d");
        new Chart(ctx).Doughnut([
          { value: value,
            color: '#e1e433' },
          { value: 67+value,
            color: '#DDDDDD' }],
          window.chartOptions);
        
        // Schedule next chart update tick
        setTimeout (function() { chartUpdate1(value + 3); }, 1000);
      }
      $(document).ready(function() {
        setTimeout (function() { chartUpdate1(01); }, 1000);
      })
      
    </script>
	
	
	<script type="text/javascript" charset="utf-8">
      window.chartOptions = {
        segmentShowStroke: false,
        percentageInnerCutout: 75,
        animation: false
      };
      
      var chartUpdate2 = function(value) {
        console.log("Updating Chart: ", value);
        
        // Replace the chart canvas element
        $('#chart2').replaceWith('<canvas id="chart2" width="300" height="300"></canvas>');
        
        // Draw the chart
        var ctx = $('#chart2').get(0).getContext("2d");
        new Chart(ctx).Doughnut([
          { value: value,
            color: '#4FD134' },
          { value: 90+value,
            color: '#DDDDDD' }],
          window.chartOptions);
        
        // Schedule next chart update tick
        setTimeout (function() { chartUpdate2(value + 5); }, 1000);
      }
      $(document).ready(function() {
        setTimeout (function() { chartUpdate2(01); }, 1000);
      })
      
    </script>
	
	
  <div class="row">
<div class="col-sm-6 col-md-4">  
<center><h3>SHIVSENA<h3></center>
  <canvas id="chart" width="300" height="300"></canvas>
</div>
<div class="col-sm-6 col-md-4">  
<center><h3>CONGRESS<h3></center>
  <canvas id="chart1" width="300" height="300"></canvas>
</div>
<div class="col-sm-6 col-md-4">  
<center><h3>BJP<h3></center>
  <canvas id="chart2" width="300" height="300"></canvas>
</div>
</div>


<div class="row">
<br>
<form class="form-inline" method="post" action="stateresult.php">
 <div class="form-group">
  <select class="form-control" name="state">
<option>Select State/Union Territory</option>
  <option value="Andaman and Nicobar">Andaman and Nicobar</option>
  <option value="Chandigarh">Chandigarh</option>
  <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
  <option value="Daman and Diu">Daman and Diu</option>
  <option value="Delhi">Delhi</option>
  <option value="Lakshadweep">Lakshadweep</option>
  <option value="Puducherry">Puducherry</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <<option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Odisha">Odisha</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
	</select>
	</div>
	 <div class="form-group">
	 <button type="submit" name="stateresult" class="btn btn-default">View Statewise Result</button>
	 </div>
</form>
</div>



<form class="form-inline" method="post">
<center><h3>Cast Your Vote</h3></center>
  <div class="form-group">
    <input type="text" class="form-control" name="aadhar" placeholder="Aadhar UID" required>
  </div>
  <div class="form-group">
	 <select class="form-control" name="location">
  <option>Select A Region</option>
  <option value="Andaman and Nicobar">Andaman and Nicobar</option>
  <option value="Chandigarh">Chandigarh</option>
  <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
  <option value="Daman and Diu">Daman and Diu</option>
  <option value="Delhi">Delhi</option>
  <option value="Lakshadweep">Lakshadweep</option>
  <option value="Puducherry">Puducherry</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <<option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Odisha">Odisha</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
</select>


  <button type="submit" name="votelogin" class="btn btn-default">Login To Vote</button>
</form>

</div>
</center>
</div>


 <?php 
		require "db/connect.php";
		//$query = "SELECT cfname,clname,cpname,cqualifications,cplogo from candidate";
		
		if(!$loc==""){
		$_SESSION['aadharno'] = $_POST['aadhar'];
		$query = "SELECT * from party,candidate WHERE party.pname=candidate.cpname && candidate.clocation='$loc'";
		}
		else{
			$query = "SELECT * from party,candidate WHERE party.pname=candidate.cpname";
		}
		$resultp=mysqli_query($con,$query);
		if (mysqli_num_rows($resultp) > 0) {
		while($row = mysqli_fetch_assoc($resultp)) {
			
			
        echo "
		 <div class='col-sm-6 col-md-4'>
		<div class='thumbnail'>
		  <img src=" . $row['plogo']. ">
		  <div class='caption'><center>
			<h3>" . $row["cpname"]. " (" . $row["clocation"]. ")</h3>
			<p>Candidate Name : " . $row["cfname"]. " " . $row["clname"]. "</p>
			
			</center>
			<center><form method='post' action='castvote.php'><input type='hidden' name='cid' value=". $row["cid"]. "><button type='submit' name='submitvote' class='btn btn-default'>Vote</button></form></center>
		  </div>
		</div>
	  </div>";
			
		
    }
} else {
    echo "<br><center><h4>No Parties In The Selected Region</h4></center>";
}
		
	  ?>
	  
	 
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="assets/nota.JPG">
      <div class="caption">
	  <center>
        <h3>NOTA</h3>
        <p>None Of The Above</p>
		</center>
        <center><form method='post' action='castvote.php'><input type='hidden' name='nota' value="novote"><button type='submit' name='submitnovote' class='btn btn-default'>Vote</button></form></center>
    
    </div>
  </div>
</div>

  
</div>

<?php include "template/footer.php";?>