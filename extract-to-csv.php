<?php

########################################################

# Author : Yonis Ismail

# Module : Advanced topics in web development 2

########################################################


# Set timezone
@date_default_timezone_get("GMT");
 
ini_set('memory_limit', '512M');

ini_set('max_execution_time', '300');

ini_set('auto_detect_line_endings', 'TRUE');




## Function to Swap Positions

function swapPositions(array &$array,int $first, int $second)
{
  $tmp = $array[$first];
  $array[$first] = $array[$second];
  $array[$second] = $tmp;
}

# Function to swap, replace and change a name of a position.

function swapAndReplacePositions(array &$array,int $first, int $second, string $string)
{
  $tmp = $array[$first];
  $array[$first] = $string;
  $array[$second] = $tmp;
}

# Only rename a column
function renamecolumn(array &$array, int $position, string $string)
{
  $array[$position] = $string;

}

# Remove a position.
function removePositions(array &$array, int $start, int $end)
{
  for($i = $start; $i <= $end; $i++)
  {
    unset($array[$i]);
  }
}

## Function write to files
function writetofiles(array $array, $site188, $site203, $site206, $site209, $site213, $site215, 
$site228, $site270, $site271, $site375, $site395, $site452, $site447, $site459, $site463, $site481, $site500 , $site501)
{

  if ($array[0] === "SiteID")
  {
    fputcsv($site188, $array);
    fputcsv($site203, $array);
    fputcsv($site206, $array);
    fputcsv($site209, $array);
    fputcsv($site213, $array);
    fputcsv($site215, $array);
    fputcsv($site228, $array);
    fputcsv($site270, $array);
    fputcsv($site271, $array);
    fputcsv($site375, $array);
    fputcsv($site395, $array);
    fputcsv($site452, $array);
    fputcsv($site447, $array);
    fputcsv($site459, $array);
    fputcsv($site463, $array);
    fputcsv($site481, $array);
    fputcsv($site500, $array);
    fputcsv($site501, $array);

  }

 // Check if Position 2 and 11 are not empty
  if (!empty($array[2]) || !empty($array[11]))
  {
  // Append to Site IDs
      if ($array[0] === "188")
      {
        fputcsv($site188, $array);

      }

      elseif ($array[0] === "203")
      {
        fputcsv($site203, $array);

      }
      elseif ($array[0] === "206")
      {
        fputcsv($site206, $array);

      }
      elseif ($array[0] === "209")
      {
        fputcsv($site209, $array);

      }
      elseif ($array[0] === "213")
      {
        fputcsv($site213, $array);

      }
      elseif ($array[0] === "215")
      {
        fputcsv($site215, $array);

      }
      elseif ($array[0] === "228")
      {
        fputcsv($site228, $array);

      }
      elseif ($array[0] === "270")
      {
        fputcsv($site270, $array);

      }
      elseif ($array[0] === "271")
      {
        fputcsv($site271, $array);

      }
      elseif ($array[0] === "375")
      {
        fputcsv($site375, $array);

      }
      elseif ($array[0] === "395")
      {
        fputcsv($site395, $array);

      }
      elseif ($array[0] === "452")
      {
        fputcsv($site452, $array);

      }
      elseif ($array[0] === "447")
      {
        fputcsv($site447, $array);

      }
      elseif ($array[0] === "459")
      {
        fputcsv($site459, $array);

      }
      elseif ($array[0] === "463")
      {
        fputcsv($site463, $array);

      }
      elseif ($array[0] === "481")
      {
        fputcsv($site481, $array);

      }
      elseif ($array[0] === "500")
      {
        fputcsv($site500, $array);

      }
      elseif ($array[0] === "501")
      {
        fputcsv($site501, $array);

      }
      

  }
}



## Clear and open files
/////////////////////////////////////////////////////////////////////
$site188 = fopen("data_188.csv", "a+");
file_put_contents('data_188.csv', '');
$site203 = fopen("data_203.csv", "a+");
file_put_contents('data_203.csv', '');
$site206 = fopen("data_206.csv", "a+");
file_put_contents('data_206.csv', '');
$site209 = fopen("data_209.csv", "a+");
file_put_contents('data_209.csv', '');
$site213 = fopen("data_213.csv", "a+");
file_put_contents('data_213.csv', '');
$site215 = fopen("data_215.csv", "a+");
file_put_contents('data_215.csv', '');
$site228 = fopen("data_228.csv", "a+");
file_put_contents('data_228.csv', '');
$site270 = fopen("data_270.csv", "a+");
file_put_contents('data_270.csv', '');
$site271 = fopen("data_271.csv", "a+");
file_put_contents('data_271.csv', '');
$site375 = fopen("data_375.csv", "a+");
file_put_contents('data_375.csv', '');
$site395 = fopen("data_395.csv", "a+");
file_put_contents('data_395.csv', '');
$site452 = fopen("data_452.csv", "a+");
file_put_contents('data_452.csv', '');
$site447 = fopen("data_447.csv", "a+");
file_put_contents('data_447.csv', '');
$site459 = fopen("data_459.csv", "a+");
file_put_contents('data_459.csv', '');
$site463 = fopen("data_463.csv", "a+");
file_put_contents('data_463.csv', '');
$site481 = fopen("data_481.csv", "a+");
file_put_contents('data_481.csv', '');
$site500 = fopen("data_500.csv", "a+");
file_put_contents('data_500.csv', '');
$site501 = fopen("data_501.csv", "a+");
file_put_contents('data_501.csv', '');
////////////////////////////////////////////////////////////////////

$lat = 'lat';
$long = 'long';
$data2 = [];
$first = true;

## Open main file
if (($handle = fopen("air-quality-data-2004-2019.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $newArr = explode(';',$data[0]);
    $newArrcol2 = explode(';',$data[1]);
    $newArr = array_merge($newArr, $newArrcol2);
    
    ## Refactor
    if($first){
      swapPositions($newArr, 0, 4);
      swapAndReplacePositions($newArr, 1, 4, 'ts');
      swapPositions($newArr, 2, 4);
      swapPositions($newArr, 3, 4);
      renamecolumn($newArr, 18, $lat);
      renamecolumn($newArr, 19, $long);
      swapPositions($newArr, 17, 14);
      swapPositions($newArr, 18, 15);
      swapPositions($newArr, 19, 16);
      $first = false;
    }
    else {
      swapPositions($newArr, 0, 4);
      swapAndReplacePositions($newArr, 1, 4, strtotime($newArr[4]));
      swapPositions($newArr, 2, 4);
      swapPositions($newArr, 3, 4);
      swapPositions($newArr, 17, 14);
      swapPositions($newArr, 18, 15);
      swapPositions($newArr, 19, 16);
    }
    removePositions($newArr, 17, 22);

    ## Write to individual CSV files
    writetofiles($newArr, $site188, $site203, $site206, $site209, $site213, $site215, $site228, $site270 , $site271,
    $site375, $site395, $site452, $site447, $site459, $site463, $site481, $site500 , $site501);
   
  }
}


?>

