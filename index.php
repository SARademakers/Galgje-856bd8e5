<!DOCTYPE html>
<html>
    <head>
        <title>Galgje</title>
        <link href="style.css" rel="Stylesheet"> 
    </head>
    <body>
        <center>
        <h1> Galgje </h1>
        <form action="" method='POST'>
        <input type='submit' id='btn' name='keuze' value='Kies zelf een woord'>
        <input type='submit' id='btn' name='random' value='Kies een willekeurig woord'>
        </form>
<?php   
if (isset($_POST["keuze"])) {
    echo '<form action="galgje.php" method = "POST">';
    echo "Je hebt gekozen om zelf een woord in te voeren: <br>";
    echo '<input type="text" name="woord">';
    echo '<input type="submit" name="submit" value="Speel met dit woord"> ';
    echo '</form>';
}
if (isset($_POST["random"])) {
    echo '<form action="galgje.php" method = "POST">';
    echo "Je hebt gekozen om met een willekeurig woord te spelen. <br>";
    echo '<input type="submit" name="submit" value="Speel met een willekeurig woord"> ';
    $woorden = array("hangman", "computer", "variable", "integer");
    $randIndex = array_rand($woorden);
    $random = $woorden[$randIndex];
    setcookie('random', $random);
}
?>
        </center>
    </body>
</html>