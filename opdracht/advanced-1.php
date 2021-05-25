<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <form action="advanced-2.php" method="POST">
        <h1>Vul in!</h1>

        <label>Kies een achtergrond kleur:</label>
        <select name="achtergrondkleur" id="achtergrondkleur">

            <?php
            $kleuren = array("red", "blue", "green", "black", "brown");

            foreach ($kleuren as $value) {
                echo "<option value=$value>$value</option>";
            };
            ?>
        </select><br>

        <label>Kies een tekst kleur:</label>
        <select name="tekstkleur" id="tekstkleur">

            <?php
            $kleuren = array("red", "blue", "green", "black", "brown");
            foreach ($kleuren as $tekstkleur) {
                echo "<option value=$tekstkleur>$tekstkleur</option>";
            };

            ?>

        </select><br>

        <label>Border dikte (px)</label>
        <input type="text" name="border" placeholder="bijv. 5px"><br>

        <label>Cel-padding (px)</label>
        <input type="text" name="padding" placeholder="bijv. 5px"><br>

        <input type="submit" name="submit" value="verstuur">

    </form>
</body>

</html>