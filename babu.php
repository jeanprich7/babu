<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau projet sur les pommes</title>
    <link rel="stylesheet" href="appleStyles.css">
</head>
<body>

    <?php include 'header.php' ?>

<form action="validateApple.php" method="post">

    Please enter you name:<input type="text" name="firstName" required><br>
    Enter your age: <input type="number" name="age" required><br>
    Please choose your favorite apple: <br>
    <input type="radio" name="apples" value="cortland">
    <label for="cortland"> Cortland</label> <br>
    <input type="radio" name="apples" value="macintosh">
    <label for="macintosh"> Macintosh</label> <br>
    <input type="radio" name="apples" value="gala">
    <label for="gala"> Gala</label> <br>
    <input type="radio" name="apples" value="honeycrisp">
    <label for="honeycrisp">Honeycrisp</label> <br>
    <input type="submit" value="Valider votre pomme favorite">


</form>


    
</body>
</html>