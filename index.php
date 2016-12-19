<?php

  require_once('config/config.php');
  require_once('config/db.php');
  require_once('functions/getinfo.php');
  //require_once('functions/saveinfo.php');
  require_once('functions/showinfo.php');



  if (isset($_GET['q']) && is_int($_GET['q'])) {
    $display = showInfo($_GET['q']);
  } else {
    $display = showInfo(50);
  }
?>

<!doctype html>
<html>
<head>
  <title>Welcome!</title>
  <link rel='stylesheet' href='main.css'>
</head>

<body>
  <header class='greeting'>
    <h2>Just seeing who is hitting here while I get some things figured out!</h2>
  </header>
  <br>
  <table>
    <thead class='legend'>
      <th>Hit</th>
      <th>IP Address</th>
      <th>City</th>
      <th>Region</th>
      <th>Country</th>
      <th>Organization</th>
      <th>When</th>
    </thead>
    <?php
      forEach($display as $row) {
        echo "<tr class='row'>";
        echo "<td class='id'>".$row['id']."</td>";
        echo "<td class='ip'>".$row['ip_address']."</td>";
        echo "<td class='city'>".$row['city']."</td>";
        echo "<td class='region'>".$row['region']."</td>";
        echo "<td class='country'>".$row['country']."</td>";
        echo "<td class='organization'>".$row['organization']."</td>";
        echo "<td class='when'>".date("M j, Y g:i:s A T",strtotime($row['datetime']))."</td>";
        echo "</tr>";
      }
     ?>
  </table>
</body>
</html>
