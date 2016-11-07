<!doctype html>

<html>
<head>
  <meta charset = "utf-8">
  <title>Games and Apps</title>
  <?php
  echo '<link href="style4.css" rel="stylesheet">';
</head>
<body>
  <div class="content">
<h1> What my friendlist played this week</h1>

<br>
$lines = file('./data_xbox.csv', FILE_IGNORE_NEW_LINES);
  <a href="games.php"><img class="game" src="images/xbox.png"></a>
<br>

</div>
</body>

</html>