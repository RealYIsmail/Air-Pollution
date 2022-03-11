<?php

///////////////////////////////////////////////////////////


# Change time format 
function Changetime(array &$array)
{
  if ($array[1] != 'ts')
  {
    $array[1] = date('Y-m-d h:m:s ', $array[1]);
  }
}


## Open files ///////////////////////////

$site188 = fopen("data_188.csv", "r");
$site203 = fopen("data_203.csv", "r");
$site206 = fopen("data_206.csv", "r");
$site209 = fopen("data_209.csv", "r");
$site215 = fopen("data_215.csv", "r");
$site228 = fopen("data_228.csv", "r");
$site270 = fopen("data_270.csv", "r");
$site271 = fopen("data_271.csv", "r");
$site375 = fopen("data_375.csv", "r");
$site395 = fopen("data_395.csv", "r");
$site452 = fopen("data_452.csv", "r");
$site447 = fopen("data_447.csv", "r");
$site459 = fopen("data_459.csv", "r");
$site463 = fopen("data_463.csv", "r");
$site481 = fopen("data_481.csv", "r");
$site500 = fopen("data_500.csv", "r");
$site501 = fopen("data_501.csv", "r");

//////////////////////////////////////////////////////////////


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
$certainday = '2019-01-01';
$results = array();



//////////////////////////////////////////////////////////////




/*
// Show levels in a 24 hour period

// Get data
if (($site203 = fopen("data_203.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site203, 1000, ",")) !== FALSE) 
    {
      Changetime($data);

      // display 24 hours

      if(strpos($data[1], '2019-01-01') !== false)
      {
      ##echo $data[1]."<br>";
      }
      
      if(strpos($data[1], $certainday) !== false)
      {
        // check for certain year
        if(strpos($data[1], '00:01:00') !== false)
        {
          //print_r($data)."<br>";
          $i = $i + 1;

          $runningtotaly0 = $runningtotaly0 + $data[4];
          //echo $runningtotaly0."<br>";
        }
        if(strpos($data[1], '08:01:00') !== false)
        {
          $x = $x + 1;
          $runningtotaly1 = $runningtotaly1 + $data[4];
        }
        if(strpos($data[1], '16:01:00') !== false)
        {
          $y = $y + 1;
          $runningtotaly2 = $runningtotaly2 + $data[4];
        }
        if(strpos($data[1], '23:01:00') !== false)
        {
          $z = $z + 1;
          $runningtotaly3 = $runningtotaly3 + $data[4];
        }
        
    }
}
  
}


$runningtotaly0 = $runningtotaly0/$i;
  $runningtotaly1 = $runningtotaly1/$x;
  $runningtotaly2 = $runningtotaly2/$y;
  $runningtotaly3 = $runningtotaly3/$z;

///////////////////////////////////////////////////////////////////////////////////////////////////////
*/

?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'CO Levels'],
          ['2004',  1000],
        
          ['2007',  1030]
        ]);

        var options = {
          title: 'Carbon monoxide levels over time',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
