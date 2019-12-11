<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Galgje</title>
    <link href="style.css" rel="Stylesheet">
  </head>
  <body>
    <center>
    <form class="form" action="index.php" method="post">
      <input type='text' id='btn' name='word' value='Kies zelf een woord'>
      <input type='submit' id='btn' name='submit' value='Kies een willekeurig woord'>
    </form>
  </center>
  </body>
</html>

<?php

$woord;
$woordString = '';
$lives = 5;
$message = '';
$won = 'false';

$woordenArray = array("hangman", "computer", "variable", "integer");

if (isset($_POST['submit']))
{

  $woord = $_POST['word'];

  if ($woord == '')
  {
    $woord = $woordenArray[0];
  }

  MaakWoordString($woord);

  setcookie('woord', $woord);
  setcookie('woord_string', $woordString);
  setcookie('lives', $lives);
  setcookie('message', $message);
  setcookie('won', $won);

  header('Location: galgje.php');

}

function MaakWoordString($string)
{
  global $woordString;
  for ($i=0; $i < strlen($string); $i++)
  {
    $woordString = $woordString . '_';
  }
}


 ?>
