<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/default.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/darkMode.css">

  <script type="text/javascript" src="js/darkMode.js"></script>

  <link rel="icon" href="Images/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comment Verstuurd | WebWinkel</title>
</head>

<body>
  <input class="dark-mode-checkbox" id="dark-mode" type="checkbox" />
  <div class="theme-container grow">
    <div class="header">
      <a href="/"><img class="img" src="Images/Logos/trans.png" alt="Webwinkel" height="100px" style="border-bottom:3px solid lightgrey;" /></a>
      <div class="text2">
        Hallo, <b><?php echo $_POST["name"]; ?></b><br>
        Je Email is: <b><?php echo $_POST["mail"]; ?></b><br>
        En de opmerking die je wil achterlaten is:<br> <b><?php echo $_POST["comment"]; ?></b><br><br>
        Wij zullen deze in behandeling nemen en een reactie via de mail aan u geven.
      </div>
    </div>
  </div>
</body>

</html>
