<?php
$counterFile = "counter.txt";
$count = file_exists($counterFile) ? (int)file_get_contents($counterFile) : 0;
$count++;
file_put_contents($counterFile, $count);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Möbelbörse Torgelow</title>
  <style>
    body {
      font-size: 80px; /* Faktor 10 */
      background-color: rgb(51, 51, 204); /* Blauer Hintergrund */
      color: white; /* Weiße Schrift */
      margin: 0;
      padding: 20px;
      font-family: sans-serif;
    }
  </style>
</head>
<body>
  <img src="GWW_Logogross.png" alt="Bild oben">
  <p><strong>Möbelbörse Torgelow</strong></p>
  <p>Dieses Angebot gefällt schon <strong><?php echo $count; ?></strong> mal.</p>
</body>
</html>
