<?php
	include "connection.php";
	include "query.php";
 ?>

<h1>Hérna Koma Myndir Með JSON lausn</h1>
<form action="append_jason.php" method="POST">
	Nafn:
	<input name="nafn" type="text" / required><br>
	Slóð:
	<input name="slod" type="text" / required><br><br>
	<input type="submit" name="submit" value="Save Data">
</form>

<?php
	$url = "http://tsuts.tskoli.is/2T/2812992399/GS%C3%96_Verkefni/Verkefni_6/myndir.json";
	$json = file_get_contents($url);
	$myndir = json_decode($json,true);

	foreach ($myndir as $key => $value) {
		$linkur = explode(";", $value);
		echo "<img src=\"" . $linkur[1] . "\"style=\"width:304px;height:228px;\">";
		echo "<figcaption>" . $linkur[0] . "</figcaption>";
	}
?>
