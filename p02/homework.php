<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formos - Homework</title>
</head>

<body>
    <header>
        <a href="index.php"><button>Homepage!</button></a>
    </header>
    <h1>KMI skaičiuoklė</h1>
    <div>
        <form action="homework.php" method="POST">
            <div>
                <input class="numbers" type="text" id="height" name="height" value="" placeholder="Jūsų ūgis (m)">
            </div>
            <div>
                <input class="numbers" type="text" id="mass" name="mass" value="" placeholder="Jūsų svoris (kg)">
            </div>
            <div>
                <input class="submit" type="submit" name="submit" value="Skaičiuoti">
            </div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //patikriname, ar abu laukai užpildyti
                if (!isset($_POST['height']) or !isset($_POST['mass'])) {
                    echo "<p class=\"error\">Būtina užpildyti abu laukus!</p>";
                }
                if ($_POST['height'] == NULL or $_POST['mass'] == NULL) {
                    echo "<p class=\"error\">Būtina užpildyti abu laukus!</p>";
                }
                // empty($_POST['height']) ir empty($_POST['mass']) - naudojam patikrinti ar tuščia, taip pat kaip ir su == NULL
            }

            if ($_POST['submit']) {
                $height = $_POST['height'];
                $mass = $_POST['mass'];

                //kmi skaičiuoklė:
                $bmi = $mass / ($height * $height);

                //reikmės
                if ($bmi <= 18.5) {
                    $output = "Nepakankamas svoris";
                } else if ($bmi > 18.5 and $bmi <= 25) {
                    $output = "Normalus svoris";
                } else if ($bmi > 25  and $bmi <= 30) {
                    $output = "Antsvoris";
                } else {
                    $output = "Nutukimas";
                }

                //spausdiname
                echo "<p class=\"output1\">Jūsų KMI = " . round($bmi, 1) . "</p>";
                echo "<p class=\"output2\">" . $output . "</p>";
            }
            ?>
        </form>
    </div>

</body>

</html>