<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formos</title>
</head>

<body>
    <!-- Atsispausdiname parametrą siųstą iš formos -->
    <?php
    // print_r($_SERVER);
    // print('<br>');
    print_r($_POST['xx']);
    ?>

    <!-- Kaip atskirti ar GET ar POST metodu siųsta informacija -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        $name = $_POST['xx'];
    if ($_SERVER["REQUEST_METHOD"] == "GET")
        $name = $_GET['xx'];
    ?>

    <a href="form.php">
        <button>Go to forms example!</button>
    </a>

    <p>
        <!-- Matome, jog $name kintamasis nenustoja egzistuoti kitame php bloke -->
        <?php
        // Matome, jog if / else nebūtini yra {} (riestiniai skliaustai)
        if (empty($name))
            echo "Name is empty";
        else
            echo $name;
        ?>

        <!-- Homework -->
        <br><br>
        <a href="homework.php">
            <button>Go to homework - KMI skaičiuoklė!</button>
        </a>
    </p>
</body>

</html>