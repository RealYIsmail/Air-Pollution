

<?php

########################################################

# Author : Yonis Ismail

# Module : Advanced topics in web development 2

########################################################


## Note: Site 228 only has data from 2003



error_reporting(0);

# Change time format
function Changetime(array &$array)
{
  if ($array[1] != 'ts')
  {
    $array[1] = date('Y-m-d h:m:s ', $array[1]);
  }
}


///////////////////////////////////////////////////////////////////////////////////////

$i = 0;
$x = 0;
$y = 0;
$z = 0;
$a = 0;
$runningtotaly0 = 0;
$runningtotaly1 = 0;
$runningtotaly2 = 0;
$runningtotaly3 = 0;
$runningtotaly4 = 0;
$certaintime = '10:05:00';
$results = array();

// Get data
if (($site215 = fopen("data_228.csv", "r")) !== FALSE)
{
    while (($data = fgetcsv($site215, 1000, ",")) !== FALSE) 
    {
      Changetime($data);
      
      if(strpos($data[1], $certaintime) !== false)
      {
        // check for certain year
        if(strpos($data[1], '2003') !== false)
        {
          //print_r($data)."<br>";
          $i = $i + 1;

          $runningtotaly0 = $runningtotaly0 + $data[4];
          //echo $runningtotaly0."<br>";
        }
        
    }
}
  
}

# Calculate mean
$runningtotaly0 = $runningtotaly0/$i;

/////////////////////////////////////////////////////////////////////////////////////////////////
?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Time', 'NO Level'],
          [ 2003,      parseInt('<?php echo $runningtotaly0; ?>')],

        ]);

        var options = {
          title: 'Carbon Monoxide levels over time, Site 228',
          hAxis: {title: 'Years', minValue: 2000, maxValue: 2004},
          vAxis: {title: 'Carbon Monoxide Levels', minValue: 0, maxValue: 30},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
