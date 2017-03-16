<?php

$url ="http://tsuts.tskoli.is/2t/kng/verk6B/myndir.json";          
$json = file_get_contents($url);
// Breytum JSON streng í php assoiative array.
$colors = json_decode($json,true);
print_r($colors);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>JSON sýnidæmi</title>
	
<body>

	<div>
		<?php  	   
          
          foreach ($colors as $key => $value) 
          {
            $linkur = explode(":", $value)
          	 echo " ". "<img src=\"{$linkur}\">"; 
        	 
          }
          echo" <br><br>";
          echo"---Hér kemur fylkið-------   ";
          foreach ($colors as $key => $value) 
          {
          	 echo " ". $key . ": " . $value . " ";
          }
      	?>    
    </div>

</body>
</html>