
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $student  = array(
        "voornaam"    => "Jan",
        "achternaam"  => "Janssen",
        "klas"        => "9A",
        "Leeftijd"    => 17,
        "Woonplaats"  => "Amstelveen"
      );
      foreach($student as $key => $value){
          echo "Mijn $key is $value <br>";
      }
    ?>
</body>
</html>