<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        td {
            width: 32px;
            height: 32px;
            text-align: center;
            border: 1px solid #4077a6;
            background-color: #66b1f0;
        }

        table {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        body {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <Table>
        <?php for ($i = 0; $i < 9; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 9; $j++) {
                $multiplication = ($i + 1) * ($j + 1);
                echo "<td>$multiplication</td>";
            }
            echo "</tr>";
        }
        ?>
    </Table>
</body>

</html>