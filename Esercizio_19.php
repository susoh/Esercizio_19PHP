<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $domanda ="Qual è il pianeta più vicino al sole?";
        $risposte = array("Venere", "Terra", "Marte", "Mercurio", "Giove");
        echo "<p><b><i>" . $domanda . "</b></i></p>";
        foreach ($risposte as $key) {
            echo "<input type='radio' name='risposte' value='" . $key . "'>" . "<label> " . $key . " </label>";
        }
    ?>
</body>
</html>