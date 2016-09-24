<?php
$pagetitle="Statewise Result";
include "template/header.php";

if(isset($_POST['stateresult'])){
	
	$state = $_POST['state'];
	
}
echo "<h2>State Result Of $state</h2>";
?>



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
  <canvas id="chart2" width="300" height="300"></canvas>
</div>
<div class="col-sm-6 col-md-4">  
<center><h3>BJP<h3></center>
  <canvas id="chart1" width="300" height="300"></canvas>
</div>
</div>


<?php include "template/footer.php";?>