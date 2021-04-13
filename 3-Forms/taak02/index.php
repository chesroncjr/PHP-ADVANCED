
<?php
$colour = $_POST["colour"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mijn gegevens</title>
        <style>
            body{
                background-color: <?php echo $colour;?>
            }
        </style>
</head>
<body>
    
    <?php echo "Voornaam is:".$_POST["voornaam"]; ?><br>
      Geslacht:<?php echo $_POST["geslacht"];?><br>
      Achternaam:<?php echo $_POST["achternaam"]; ?><br>
      Klas:<?php echo $_POST["klas"]; ?><br>
      Leeftijd:<?php echo $_POST["leeftijd"]; ?><br>
      Adres:<?php echo $_POST["adres"]; ?><br>
      Plaatsnaam:<?php echo $_POST["plaatsnaam"];?><br>
      Favoriete muziekband:<?php echo $_POST["a"];?><br>
      <?php echo $_POST["geslacht"];?><br>

      <!-- I AM TRYING TO MAKE THE COLOUR APEAR ON THIS SCREEN WITH THE GIVEN USER INPUT.-->
      <?php echo $colour; ?>
</body>
</html>