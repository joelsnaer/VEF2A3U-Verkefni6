<?php
if(isset($_POST['nafn']) && isset($_POST['slod'])) {
  $data =  $_POST['nafn'] . ';' . $_POST['slod'] . "\n";
  $contents = file_get_contents('myndir.json');
  $contentsDecoded = json_decode($contents, true);
  $contentsDecoded[count($contentsDecoded)+1]=$data;
  $json = json_encode($contentsDecoded);
  file_put_contents('myndir.json', $json);
}
else {
   die('no post data to process');
}

echo "Myndinni hefur verið bætt við";
echo "<a href=\"http://tsuts.tskoli.is/2t/2812992399/GSÖ_Verkefni/Verkefni_6/index.php\">Fara til baka hérna</a>";
  print_r($contentsDecoded);
?>