<?php
//In questa maniera io salvo i miei valori dentro una variabile  per poi stamparli in pagina e realizare la interazione con utente.
//salvo il valore del mio input Last Name in una variabile, e dentro le parentesi quadre scrivo il valore di 'name'del input in form.
$inputLastName = $_POST['lastName'];
//salvo il valore del mio input Acces Code in altra  variabile
$inputAccessCode = $_POST['accessCode'];

//Creo altra variavile per formare un solo paragrafo tra le mie prime due variabili.
$paragraph = 'Welcome to Security Portal user acces level number'; 

//Creo altra volta il paragrapho ma con il testo che io vorrei replace to ***
$newParagraph = str_replace('number', '* * *',  $paragraph);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Security Portal</h3>
    <!-- output nello schermo degli input -->
    <h5> <?php echo $inputLastName?> <?php echo $inputAccessCode?> </h5>
    
    <!-- output paragrafo statico y variabile $inputLastName -->
    <p>Welcome to Security Portal <?php echo $_POST['lastName']?></p>
    <!-- output span e variabile $inputAccessCode -->
    <p>Access Level <?php echo $_POST['accessCode']?></p>

    <!-- output variabile $paragraph-->
    <div><?php echo $paragraph ?></div>
    <!-- method per avere il lenght di una stringa, paragrafo, etc -->
    <div><?php echo strlen($paragraph) ?></div>

    <!-- output variabile $newParagraph -->
    <div><?php echo $newParagraph ?></div>
    <!-- method per avere il lenght di una stringa, paragrafo, etc -->
    <div><?php echo strlen($newParagraph) ?></div>
</body>
</html>