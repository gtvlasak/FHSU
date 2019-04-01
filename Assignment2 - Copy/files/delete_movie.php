<?php

$file = "movie.csv";
$file2 = "rating.csv";
$line = $_GET["id"];
$error = '';

if(isset($_POST["delete"])) {
    if($error == '') {
        function deleteLine($file, $line) { // check the file exists 

            if(!is_writable($file)) {   // print an error
            
            echo "The file $file is not writable";
            exit;

            } else { // exit the function
             
            $arr = file($file); // read the file into an array 
            }

        // the line to delete is the line number minus 1, because arrays begin at zero
            $lineToDelete = $line;

        // check if the line to delete is greater than the length of the file
            if($lineToDelete > sizeof($arr)) {  // print an error
            
                echo "You have chosen a line number, <b>".$line."</b>,  higher than the length  of the file.";
                exit;   // exit the function
            }

            unset($arr["$lineToDelete"]); // remove the line --- CRITICAL STEP

            // open the file for reading
            if (!$fp = fopen($file, 'w+')) {    // open the file for reading

                print "Cannot open file ($file)";   // print an error
                exit;   // exit the function
            }

            if($fp) {   // if $fp is valid
            
                foreach($arr as $row) {      // write the array to the file
                    fwrite($fp,$row); 
                }
                fclose($fp);     // close the file
            }

            echo "Contact was deleted successfully!";
        }
        deleteLine($file, $line);
    }
}

        