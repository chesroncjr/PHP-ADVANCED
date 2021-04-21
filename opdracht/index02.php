<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="invoer" action="advanced-2.php" method="post">
<select name="achtergrondkleur" id="achtergrondkleur">
<?php
$kleuren = array("red", "blue", "green", "black", "brown");
foreach($kleuren as $optie){
    echo "<option value=$optie>$optie</option>";
}

?>
</select>
<a>tekst kleur</a>

<input type= "text" name="border">
<a>border</a>

<input type= "text" name= "padding">
<a>padding</a>


<input type="submit"name="submit"value="verstuur">
</form>
</body>
</html>