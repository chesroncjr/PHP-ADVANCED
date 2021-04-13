<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loops-foreach-deel2.php">
    <label for="klas">Kies een klas:</label>
    <select id="klas" name="klas">
    <?php
        $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

        foreach($klassen as $value){
            echo "<option value='strtolower($value)'>$value</option>";
        }
        ?>
    </select>
    <input type="submit">
    </form>
</body>
</html>