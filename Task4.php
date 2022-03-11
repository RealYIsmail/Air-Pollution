<?php

error_reporting(0);  # No notices and warnings


# Send to the extra visualisation content.
echo "Click on markers for more information about the sites";


# Open each file and obtain the latitude and longitude.
#######################################################################################
if (($site188 = fopen("data_188.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site188, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site188lat = $data[15];
            $site188long = $data[16];
            break;
        }

    }

    fclose($site188);

}
if (($site203 = fopen("data_203.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site203, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site203lat = $data[15];
            $site203long = $data[16];
            break;
        }

    }
    fclose($site203);

}
if (($site206 = fopen("data_206.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site206, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site206lat = $data[15];
            $site206long = $data[16];
            break;

        }

    }

    fclose($site206);

}
if (($site213 = fopen("data_213.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site213, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site213lat = $data[15];
            $site213long = $data[16];
            break;
        }

    }

    fclose($site213);

}
if (($site209 = fopen("data_209.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site209, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site209lat = $data[15];
            $site209long = $data[16];
            break;

        }

    }

    fclose($site209);

}
if (($site215 = fopen("data_215.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site215, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site215lat = $data[15];
            $site215long = $data[16];
            break;

        }

    }

    fclose($site215);

}
if (($site228 = fopen("data_228.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site228, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site228lat = $data[15];
            $site228long = $data[16];
            break;

        }

    }

    fclose($site228);

}
if (($site270 = fopen("data_270.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site270, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site270lat = $data[15];
            $site270long = $data[16];
            break;

        }

    }

    fclose($site270);

}
if (($site271 = fopen("data_271.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site271, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site271lat = $data[15];
            $site271long = $data[16];
            break;

        }

    }

    fclose($site271);

}
if (($site375 = fopen("data_375.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site375, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site375lat = $data[15];
            $site375long = $data[16];
            break;

        }

    }

    fclose($site375);

}
if (($site395 = fopen("data_395.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site395, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site395lat = $data[15];
            $site395long = $data[16];
            break;

        }

    }

    fclose($site395);

}
if (($site447 = fopen("data_447.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site447, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site447lat = $data[15];
            $site447long = $data[16];
            break;

        }

    }

    fclose($site447);

}
if (($site452 = fopen("data_452.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site452, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site452lat = $data[15];
            $site452long = $data[16];
            break;

        }

    }

    fclose($site452);

}
if (($site459 = fopen("data_459.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site459, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site459lat = $data[15];
            $site459long = $data[16];
            break;

        }

    }

    fclose($site459);

}
if (($site463 = fopen("data_463.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site463, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site463lat = $data[15];
            $site463long = $data[16];
            break;

        }

    }

    fclose($site463);

}

$site481lat = 51.447213417;
$site481long =-2.62247405516;

if (($site500 = fopen("data_500.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site500, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site500lat = $data[15];
            $site500long = $data[16];
            break;

        }

    }

    fclose($site500);

}
if (($site501 = fopen("data_501.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($site501, 1000, ",")) !== FALSE) 
    {
        if((strpos($data[15], 'lat')  === false))
        {
            $site501lat = $data[15];
            $site501long = $data[16];
            break;

        }

    }

    fclose($site501);

}
########################################################################################################


## Map below, Adding links to markers and ploting out the Geo location.

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>A Basic Map</title>
	<style>
		#map {
			height: 50%;
            width:  50%;
		}
		/* Optional: Makes the sample page fill the window. */
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
	</style>

    <script>
function initMap() {
	var mapOptions = {
		zoom: 8,
        center: new google.maps.LatLng(50.716667, -3.533333),  // Assign centre (Exeter)
        
		mapTypeId: 'roadmap'
	};
	var map = new google.maps.Map(document.getElementById('map'), mapOptions);


    // Assign Coordinates

    var site188 = {lat: parseFloat('<?php echo $site188lat; ?>'),lng:  parseFloat('<?php echo $site188long; ?>')};
    var site203 = {lat: parseFloat('<?php echo $site203lat; ?>'),lng:  parseFloat('<?php echo $site203long; ?>')};
    var site206 = {lat: parseFloat('<?php echo $site206lat; ?>'),lng:  parseFloat('<?php echo $site206long; ?>')};
    var site209 = {lat: parseFloat('<?php echo $site209lat; ?>'),lng:  parseFloat('<?php echo $site209long; ?>')};
    var site213 = {lat: parseFloat('<?php echo $site213lat; ?>'),lng:  parseFloat('<?php echo $site213long; ?>')};
    var site215 = {lat: parseFloat('<?php echo $site215lat; ?>'),lng:  parseFloat('<?php echo $site215long; ?>')};
    var site228 = {lat: parseFloat('<?php echo $site228lat; ?>'),lng:  parseFloat('<?php echo $site228long; ?>')};
    var site270 = {lat: parseFloat('<?php echo $site270lat; ?>'),lng:  parseFloat('<?php echo $site270long; ?>')};
    var site271 = {lat: parseFloat('<?php echo $site271lat; ?>'),lng:  parseFloat('<?php echo $site271long; ?>')};
    var site375 = {lat: parseFloat('<?php echo $site375lat; ?>'),lng:  parseFloat('<?php echo $site375long; ?>')};
    var site395 = {lat: parseFloat('<?php echo $site395lat; ?>'),lng:  parseFloat('<?php echo $site395long; ?>')};
    var site447 = {lat: parseFloat('<?php echo $site447lat; ?>'),lng:  parseFloat('<?php echo $site447long; ?>')};
    var site452 = {lat: parseFloat('<?php echo $site452lat; ?>'),lng:  parseFloat('<?php echo $site452long; ?>')};
    var site459 = {lat: parseFloat('<?php echo $site459lat; ?>'),lng:  parseFloat('<?php echo $site459long; ?>')};
    var site463 = {lat: parseFloat('<?php echo $site463lat; ?>'),lng:  parseFloat('<?php echo $site463long; ?>')};
    var site481 = {lat: parseFloat('<?php echo $site481lat; ?>'),lng:  parseFloat('<?php echo $site481long; ?>')};
    var site500 = {lat: parseFloat('<?php echo $site500lat; ?>'),lng:  parseFloat('<?php echo $site500long; ?>')};
    var site501 = {lat: parseFloat('<?php echo $site501lat; ?>'),lng:  parseFloat('<?php echo $site501long; ?>')};
	
    
    // Exeter Cathedral
    
    var marker = new google.maps.Marker({ // Assign Marker
            position: site188,
			map: map,
			title: 'AURN Bristol Centre'
            });
            google.maps.event.addListener(marker, 'click', function() {   // On click
            window.location.href = "https://uk-air.defra.gov.uk/networks/site-info?site_id=BRIS";
            });



// Robert Albert Memorial Museum
            var marker = new google.maps.Marker({ // Assign marker
            position: site203,
			map: map,
			title: 'Brislington Depot'
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://opendata.bristol.gov.uk/pages/aqcontinuoussites/?q=siteid:203";
            });


// Bicton Park Botanical Gardens
            var marker = new google.maps.Marker({ // Assign marker
            position: site206,
			map: map,
			title: 'Rupert Street'
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://www.bristol.gov.uk/documents/20182/32675/Bristol+City+Council+2019+Air+Quality+Annual+Status+Report+ASR.pdf/62eeb142-ac59-ac08-148b-a1247e08b1db";
            });


// Bill Douglas Cinema Museum
            var marker = new google.maps.Marker({ // Assign marker
            position: site209,
			map: map,
			title: 'IKEA M32'
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://www.bristol.gov.uk/documents/20182/32675/Bristol+City+Council+Air+Quality+Annual+Status+Report+2020.pdf/1cc35b4e-ca4f-412b-0b11-13afc31d9708";
            });


// Parc du Thabor
            var marker = new google.maps.Marker({ // Assign marker
            position: site213,
			map: map,
			title: 'Old Market'
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://uk-air.defra.gov.uk/assets/documents/no2ten/Local_zone30_Bristol_AQActionplan_1.pdf";
            });


// Museum of Fine Arts of Rennes
            var marker = new google.maps.Marker({ // Assign marker
            position: site215,
			map: map,
			title: 'Parson Street'
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://opendata.bristol.gov.uk/pages/aqcontinuoussites/?q=siteid:215";
            });


// Cathedral Saint-Pierre de Rennes
            var marker = new google.maps.Marker({ // Assign Marker
            position: site228,
			map: map,
			title: 'Temple Meads Station'
            });
            google.maps.event.addListener(marker, 'click', function() { // In click
            window.location.href = "https://opendata.bristol.gov.uk/pages/aqcontinuoussites/?q=siteid:500";
            });

// 
var marker = new google.maps.Marker({ // Assign marker
            position: site270,
			map: map,
			title: 'Wells Road'
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://opendata.bristol.gov.uk/pages/air-quality-dashboard-new/#air-quality-now";
            });
            

var marker = new google.maps.Marker({ // Assign marker
            position: site271,
            map: map,
            title: 'Trailer Portway P&R'
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://hackmd.io/@mrsensible/ryTpLj8XH";
            });


var marker = new google.maps.Marker({ // Assign marker
            position: site375,
            map: map,
            title: 'Newfoundland Road Police Station'
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://hackmd.io/@mrsensible/ryTpLj8XH";
            });


var marker = new google.maps.Marker({ // Assign marker
            position: site395,
            map: map,
            title: "Shiner's Garage"
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://hackmd.io/@mrsensible/ryTpLj8XH";
            });


var marker = new google.maps.Marker({ // Assign marker
            position: site447,
            map: map,
            title: 'Bath Road'
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://www.bristol.gov.uk/documents/20182/32675/Bristol+City+Council+2018+Air+Quality+Annual+Status+Report+ASR/3d5c287b-f379-e484-7924-2aa02fc8bb0a";
            });


var marker = new google.maps.Marker({ // Assign marker
            position: site452,
            map: map,
            title: "AURN St Pauls"
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://opendata.bristol.gov.uk/pages/air-quality-dashboard-new/#air-quality-now";
            });


var marker = new google.maps.Marker({ // Assign marker
            position: site459,
            map: map,
            title: "Cheltenham Road \ Station Road"
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://www.iqair.com/us/uk/england/cheltenham";
            });


var marker = new google.maps.Marker({ // Assign marker
            position: site463,
            map: map,
            title: "Fishponds Road"
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://opendata.bristol.gov.uk/pages/air-quality-dashboard-new/#air-quality-now";
            });


var marker = new google.maps.Marker({ // Assign marker
            position: site481,
            map: map,
            title: "CREATE Centre Roof"
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://www.cleanairforbristol.org/";
            });


var marker = new google.maps.Marker({ // Assign marker
            position: site500,
            map: map,
            title: "Temple Way"
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://www.iqair.com/us/uk/england/bristol/bristol-temple-way";
            });


var marker = new google.maps.Marker({ // Assign marker
            position: site501,
            map: map,
            title: "Colston Avenue"
            });
            google.maps.event.addListener(marker, 'click', function() { // On click
            window.location.href = "https://opendata.bristol.gov.uk/pages/air-quality-dashboard-new/#air-quality-now";
            });

}

</script>

</head>
<body>
<div id="map"></div>
<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDCzm5MmNn62JzCYtPIDoko1SJWvU9IJI&callback=initMap">  // API call
</script>



    <h4>View Images of the sites</h4>
    <p><a href="Task4Images.php">Click here</a></p>


</body>
</html>