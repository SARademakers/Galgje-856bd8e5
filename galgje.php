<!DOCTYPE html>
<html>
<?php

session_start();

setcookie ("levens", 4);
$woorden = array("hangman", "computer", "variable", "integer");
echo  $_POST["woord"] . "<br>";
?>
    <head>
        <title>Galgje</title>
        <link href="style.css" rel="Stylesheet">
    </head>
    <body>

<?php
echo ($_COOKIE['random']);
if (isset($_POST["letter"]))   {
    $_COOKIE["levens"] -= 1;
    setcookie ("levens", $_COOKIE["levens"]);
    echo "<h1>Je hebt: " . $_COOKIE["levens"] . " levens </h1>";
}

switch ($_COOKIE["levens"]) {
    case "4";
    echo "<img class='h1'
    src='img/h1.png'
    alt='h1'>";
break;
    case "3";
    echo "<img class='h2'
    src='img/h2.png'
    alt='h2'>";
break;
    case "2";
    echo "<img class='h3'
    src='img/h3.png'            
    alt='h3'>";
break;
    case "1";
    echo "<img class='h4'
    src='img/h4.png'
    alt='h4'>";
break;
    case "0";
    echo "<img class='h5'
    src='img/h5.png'
    alt='h5'>";
    $_COOKIE["levens"] = 5;
    setcookie ("levens", $_COOKIE["levens"]);
    echo "Klik op submit om opnieuw te proberen of ga terug naar de homepage voor een ander woord.";
}
?>
        <form action="" method='POST'>
            <label for = "letter">Vul hier je letter in: </label> 
            <input type="text" id="letter" name="letter" maxlength="1">
            <input type="submit" id="antwoord"`name="antwoord" value="submit ">
        </form>

    </body>
</html>
