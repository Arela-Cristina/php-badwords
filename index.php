<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <h3>Security Portal</h3>
</header>
<body>
        <!-- inizio form, in action inserisco il nome della mia pagina di aterraggio, method post perche e un form -->
        <form action="pagina-aterraggio.php" method="POST">
            <!-- Form Last Name -->
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName">

            <!-- Form Code Access -->
            <label for="accessCode">Access Code</label>
            <input type="text" name="accessCode">

             <!-- Bottone Invio -->
            <button type="submit">Log In</button>
        </form>
</body>
</html>