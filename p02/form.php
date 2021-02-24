<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formos</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="lname">Last name:</label><br>
        <input type="text" id="fname" name="xx" value="Doe"><br>
        <input type="submit" value="Submit with POST">
    </form>
    <form action="index.php" method="GET">
        <label for="lname">Last name:</label><br>
        <input type="text" id="fname" name="xx" value="Doe"><br>
        <input type="submit" value="Submit with GET">
    </form>
</body>

</html>