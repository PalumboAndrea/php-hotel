<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php if ($_GET['parking']){

        }   ?>

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
                <?php  foreach ($hotels as $hotel) {
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
                ?>
            </tbody>
        </table>
        
</body>
</html>