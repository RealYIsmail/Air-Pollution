
<?php

########################################################

# Author : Yonis Ismail

# Module : Advanced topics in web development 2

########################################################

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
if (($site206 = fopen("data_206.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site206, 1000, ",")) !== FALSE) 
    {
      Changetime($data);
      
      if(strpos($data[1], $certaintime) !== false)
      {
        // check for certain year
        if(strpos($data[1], '2010') !== false)
        {

          $i = $i + 1;

          $runningtotaly0 = $runningtotaly0 + $data[4];

        }
        if(strpos($data[1], '2011') !== false)
        {
          $x = $x + 1;
          $runningtotaly1 = $runningtotaly1 + $data[4];
        }
        if(strpos($data[1], '2012') !== false)
        {
          $y = $y + 1;
          $runningtotaly2 = $runningtotaly2 + $data[4];
        }
        if(strpos($data[1], '2013') !== false)
        {
          $z = $z + 1;
          $runningtotaly3 = $runningtotaly3 + $data[4];
        }
        if(strpos($data[1], '2014') !== false)
        {
          $a = $a + 1;
          $runningtotaly4 = $runningtotaly4 + $data[4];
        }
        
    }
}
  
}

# Calculate mean
$runningtotaly0 = $runningtotaly0/$i;
  $runningtotaly1 = $runningtotaly1/$x;
  $runningtotaly2 = $runningtotaly2/$y;
  $runningtotaly3 = $runningtotaly3/$z;
  $runningtotaly4 = $runningtotaly4/$a;


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
          [ 2010,      parseInt('<?php echo $runningtotaly0; ?>')],
          [ 2011,      parseInt('<?php echo $runningtotaly1; ?>')],
          [ 2012,      parseInt('<?php echo $runningtotaly2; ?>')],
          [ 2013,      parseInt('<?php echo $runningtotaly3; ?>')],
          [ 2014,      parseInt('<?php echo $runningtotaly4; ?>')]
        ]);

        var options = {
          title: 'Carbon Monoxide levels over time, Site 206',
          hAxis: {title: 'Years', minValue: 2010, maxValue: 2014},
          vAxis: {title: 'Carbon Monoxide Levels', minValue: 0, maxValue: 175},
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
