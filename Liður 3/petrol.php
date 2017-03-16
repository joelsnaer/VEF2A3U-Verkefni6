
<!DOCTYPE html>
<html>
<head>
<title>VEF2A3U - Verkefni 6</title>
</head>
<body>
  <?php
    $link = "http://apis.is/petrol";
    $json = file_get_contents($link);
    $gogn = json_decode($json, true);
    ?>
    <table style="width:100%;">
    <tr>
        <th>Fyrirtæki</th>
        <th>Bensín með afslátti</th>
        <th>Bensín</th>
        <th>Diesel</th>
        <th>Diesel með afslátti</th>
        <th>Staðsetning</th>
      </tr>
    <?php
    foreach ($gogn['results'] as $key => $value) {
      echo "<tr>";
      echo "<td>$value[company]";
      echo "<td>$value[bensin95]</td>";
      echo "<td>$value[bensin95_discount]";
      echo "<td>$value[diesel]";
      echo "<td>$value[diesel_discount]";
      echo "<td>$value[name]";
      echo "</tr>";
    }

    ?>
  </table>
  <style>
      table, th, td {
        border: 1px solid black;
    }
  </style>
</body>
</html>
