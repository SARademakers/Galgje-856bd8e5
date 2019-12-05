<!DOCTYPE html>
<html>
<?php
$woorden = array("hangman", "computer", "variable", "integer");
?>
    <head>
        <title>Galgje</title>
    </head>
    <body>
        <h1> Galgje </h1>
        <form action="" method='POST'>
        <input type='submit' id='btn' name='keuze' value='Kies zelf een woord'>
        <input type='submit' id='btn' name='random' value='Kies een willekeurig woord'>
        </form>

<?php
if (isset($_POST["keuze"])) {
    echo "Kies je woord: " . PHP_EOL;
    echo '<input type="text" name="woord">' . PHP_EOL;
    echo '<input type="submit" name="submit" value="Submit"> ';
}
?>
    </body>
</html>