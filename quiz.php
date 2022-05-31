<?php
    require_once "checklogin.php";
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Quiz | FenixTek</title>
        <?php include "headcomp.php" ?>
        <script type="text/javascript" src="js/quiz.js"></script>
    </head>

    <body onload="SelectMode()">
        <?php include "header.php"?>
        <div>
            <Button onclick="outputQuestion()">Start</Button>
            <h2 id="question"></h2>
            <button id="b1" onclick="answer(0)"></button>
            <button id="b2" onclick="answer(1)"></button>
            <button id="b3" onclick="answer(2)"></button>
            <button id="b4" onclick="answer(3)"></button>
        </div>
        <?php include "footer.php"?>
    </body>
</html>