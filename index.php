<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
</head>
    <body>
        <?php
            $hotels = [
                [
                    'name' => 'Hotel Belvedere',
                    'description' => 'Hotel Belvedere Descrizione',
                    'parking' => true,
                    'vote' => 4,
                    'distance_to_center' => 10.4
                ],
                [
                    'name' => 'Hotel Futuro',
                    'description' => 'Hotel Futuro Descrizione',
                    'parking' => true,
                    'vote' => 2,
                    'distance_to_center' => 2
                ],
                [
                    'name' => 'Hotel Rivamare',
                    'description' => 'Hotel Rivamare Descrizione',
                    'parking' => false,
                    'vote' => 1,
                    'distance_to_center' => 1
                ],
                [
                    'name' => 'Hotel Bellavista',
                    'description' => 'Hotel Bellavista Descrizione',
                    'parking' => false,
                    'vote' => 5,
                    'distance_to_center' => 5.5
                ],
                [
                    'name' => 'Hotel Milano',
                    'description' => 'Hotel Milano Descrizione',
                    'parking' => true,
                    'vote' => 2,
                    'distance_to_center' => 50
                ],
            ];
        ?>

        <form action="./index.php" method="GET" class="m-3">
            <input type="text" name="parking" placeholder="Vuoi il parcheggio? (si/no)" class="w-25">
            <button type="submit" class="btn btn-primary">Invia</button>

        </form>

        <table class="table">
            <thead>
                <tr>
                    <?php  foreach ($hotels[0] as $key => $info) {
                                $title = $key;
                                echo ("<th> $title </th>");
                            }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php  foreach ($hotels as $key => $hotel) {
                        if ($_GET['parking'] == 'si'){
                            if ($hotels[$key]['parking'] === false){
                                unset($hotels[$key]);
                            } else {
                                echo "<tr> \n";
                                foreach ($hotel as $key => $info){
                                    if ($key == 'parking'){
                                        if ($info === true){
                                            $info = 'Presente';
                                        } else {
                                            $info = 'Non presente';
                                        }
                                    }
                                    if ($key == 'name'){
                                        echo "<th> $info </th> \n";
                                    } else {
                                        echo "<td> $info </td> \n";
                                    }
                                }
                                echo "</tr>"; 
                            }
                        } else {
                            echo "<tr> \n";
                            foreach ($hotel as $key => $info){
                                if ($key == 'parking'){
                                    if ($info === true){
                                        $info = 'Presente';
                                    } else {
                                        $info = 'Non presente';
                                    }
                                }
                                if ($key == 'name'){
                                    echo "<th> $info </th> \n";
                                } else {
                                    echo "<td> $info </td> \n";
                                }
                            }
                            echo "</tr>"; 
                        }
                         
                        }
                        
                ?>
            </tbody>
        </table>
    </body>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</html>