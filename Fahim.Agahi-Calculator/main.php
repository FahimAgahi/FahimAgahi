<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer</title>
</head>

<body style=" margin: 30px; background-color: lightslategray; color: #cfe3fa; font-size:large;font-weight: bold;">

    <?php
    $field = $_GET["field"];
    if (preg_match("^\-?[0-9](([-+/*][0-9]+)?([.,][0-9]+)?)+?$^", $field)) {
        $answer = eval('return ' . $field . ';');
        echo "Your result is: " . $answer;
    } else {
        echo "You have entered an invalid input, Please Try again.";
    }
    ?>
    <br>
    <form action="index.html">
        <input value="Back" type="submit" style="width: 80px; height: 30px;background-color: #435f80; color: #cfe3fa;border-radius: 4px; border: 1px solid black ;margin-top: 10px" />
    </form>


</body>

</html>