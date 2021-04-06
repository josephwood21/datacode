<?php 

// open files for reading 
$file1 = fopen("languages-english.json","r");
$file2 = fopen("languages-french.json", "r");
$file3 = fopen("languages-pirate.json", "r");

// parse in the whole of the json files
fread($file1, filesize("languages-english.json"));
fread($file2, filesize("languages-french.json"));
fread($file3, filesize("Languages-pirate.json"));

// add the json files to an array
$array1 = json_decode($file1, true);
$array2 = json_decode($file2, true);
$array3 = json_decode($file3, true);

// select which language to translate to (change as needed)
$selection = "English";

// based on the selection given, search the correct array for the translation
function stringTranslator($keyString){
	if $selection == 'English';{
		print $key = array_search ($keyString, $array1);	
	} elseif $selection == 'French';{
		print $key = array_search ($keyString, $array2);
	} elseif $selection == 'Pirate';{
		// if the keyString can be found in the pirate array do the translation
		try{
			print $key = array_search ($keyString, $array3);
		// if the keyString cannot be found in the array, return the English translation
		} catch (OutOfBoundsException $exception){
			print $key = array_search ($keyString, $array1);
			}
	// handle invalid language inputs 
	} else {
		print "Sorry, translation not found"
	}
}

// close all the files
fclose($file1)
fclose($file2)
fclose($file3)

?>
