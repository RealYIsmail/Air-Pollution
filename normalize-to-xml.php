
<?php
########################################################

# Author : Yonis Ismail

# Module : Advanced topics in web development 2

########################################################



function convertCsvToXmlFile($input_file, $output_file) {
	// Open csv file for reading
	$inputFile  = fopen($input_file, 'r+');
	
	// Get the headers of the file
	$headers = fgetcsv($inputFile);
	
	// Create a new dom document 
	$doc  = new DomDocument();
	$doc->formatOutput   = true;
	
	// Add a root node to the document
	$root = $doc->createElement('Station');
	$root = $doc->appendChild($root);
	
	// Loop through each row creating a <record> node with the correct data
	while (($row = fgetcsv($inputFile)) !== FALSE)
	{
		$container = $doc->createElement('Record');
		
		foreach($headers as $i => $header)
		{
			$child = $doc->createElement($header);
			$child = $container->appendChild($child);
			$value = $doc->createTextNode($row[$i]);
			$value = $child->appendChild($value);
		}
		$root->appendChild($container);
	}
	
	$strxml = $doc->saveXML();
	// write to file
	$handle = fopen($output_file, "w");
	fwrite($handle, $strxml);
	fclose($handle);
}

convertCsvToXmlFile("data_188.csv", "data_188.xml");
convertCsvToXmlFile("data_203.csv", "data_203.xml");
convertCsvToXmlFile("data_206.csv", "data_206.xml");
convertCsvToXmlFile("data_209.csv", "data_209.xml");
convertCsvToXmlFile("data_213.csv", "data_213.xml");
convertCsvToXmlFile("data_215.csv", "data_215.xml");
convertCsvToXmlFile("data_228.csv", "data_228.xml");
convertCsvToXmlFile("data_270.csv", "data_270.xml");
convertCsvToXmlFile("data_271.csv", "data_271.xml");
convertCsvToXmlFile("data_375.csv", "data_375.xml");
convertCsvToXmlFile("data_395.csv", "data_395.xml");
convertCsvToXmlFile("data_447.csv", "data_447.xml");
convertCsvToXmlFile("data_452.csv", "data_452.xml");
convertCsvToXmlFile("data_459.csv", "data_459.xml");
convertCsvToXmlFile("data_463.csv", "data_463.xml");

// Site 481 has no data

convertCsvToXmlFile("data_500.csv", "data_500.xml");
convertCsvToXmlFile("data_501.csv", "data_501.xml");




