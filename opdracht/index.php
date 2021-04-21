<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $_POST["achtergrondkleur"] ?>;

        }
        table,tr,td {
                    padding: <?php echo $_POST["padding"] ?>px;
                    border: <?php echo $_POST["border"] ?>px solid black;
                }

    </style>
</head>

<body>
 
 
    <table border="$info" >
        <thead>
            <tr>
              <th>key</th>
              <th>value</th>
            </tr>
            </thead>
            <tbody>
            <?php
                        $info2= array("naam"=>"Naam", "achternaam"=>"Achternaam", "klas"=>"Klas", "muziek"=>"Favorite music");
                        $info= array("naam"=>"Chesron", "achternaam"=>"Coutinho", "klas"=>"0A", "muziek"=>"Blesed");
                        

                        function maakrij($info2){

                                return $info2;
                        }
                            foreach($info2 as $index => $thing){

                                echo "<tr><td> $thing </td><td> $info[$index] </td></tr>";
                            }

                    ?>
  

</body>
</html>