
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task4Images</title>
    <h1> Enter the site ID you want to look at the surrounding area for</h1>
</head>
<body>
<form action="Task4Images.php" method="get">
    Name: <input type="number" name="SiteID"><br>
    <input type="submit">
</form>
<!--- Return back to task4 main file -->

<h4>Return back</h4>
<p><a href="Task4.php">Return</a></p>


</body>
</html>



<?php

error_reporting(0);  # No notices and warnings
// API KEY 4f6e67d452d64a93a1386537a29cc851
// SECRET 62d4a5bc46a7bfb6
$UserinputID = $_GET["SiteID"];



# If user input is a siteID turn the tag into the surrounding location of the site.
switch ($UserinputID)
{
    case "188":
        $tag = "BristolCentre";
        break;
    case "203":
        $tag = "BrislingtonBristol";
        break;
    case "206":
        $tag = "RupertStreetBristol";
        break;
    case "209":
        $tag = "BristolM32";
        break;
    case "213":
        $tag = "OldMarketBristol";
        break;
    case "215":
        $tag = "ParsonStreetBristol";
        break;
    case "228":
        $tag = "TempleMeadsStationBristol";
        break;
    case "270":
        $tag = "WellsRoad";
        break;
    case "271":
        $tag = "PortwayParkandRide";
        break;
    case "375":
        $tag = "AvonmouthBristol";
        break;
    case "395":
        $tag = "ShinersGarage";
        break;
    case "447":
        $tag = "BathRoad";
        break;
    case "452":
        $tag = "WilderStreet";
        break;
    case "459":
        $tag = "CheltenhamRoad";
        break;
    case "463":
        $tag = "FishpondsRoad";
        break;
    case "500":
        $tag = "TempleWay";
        break;
    case "501":
        $tag = "ColstonAvenue";
        break;
    case "481":
        $tag = "BBondWarehouse";
        break;
    
    
}


# UPI call

$app_address = "https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=4f6e67d452d64a93a1386537a29cc851&tags=$tag
&format=json&nojsoncallback=1";   

$data = json_decode(file_get_contents($app_address));

$photos = $data->photos->photo;

### Obtain only 1 photo

$photos = array_slice($photos,0,1);
foreach($photos as $photo){
    
    $url = 'http://farm'.$photo->farm.'.staticflickr.com/'.$photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg';

    ## Echo photo
    echo '<img src="'.$url.'">';
    
    
}


?>

