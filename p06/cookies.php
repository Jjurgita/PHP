<?php
// setcookie('name', 'Jurgita', time() + 3600, '/', '', 0);
// setcookie('age', '12', time() + 3600, '/', '',  0);

// Kad nuolat nereiktų perkūrinėti, galime naudoti su if:
if (!isset($_COOKIE["name"]) && !isset($_COOKIE["age"])) {
    setcookie("name", "Jurgita", time() + 3600, "/", "", 0);
    setcookie("age", "12", time() + 3600, "/", "",  0);
}

// delete cookies ištrinant jų reikšmę
setcookie("name", "", time() - 60, "/", "", 0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <h1>COOKIES</h1>
    <?php
    print(' - Set Cookies with setcookie() function. <br> - All set Cookies documented in Aplication/Cookies tab.');

    print('<br><br>');

    print(' - To read Cookies use $_COOKIE["name"] <br> - Always use isset() function');
    echo $_COOKIE["name"] . "<br />";
    // echo $HTTP_COOKIE_VARS["name"] . "<br />"; //nenaudoti - tai senas b8das

    echo $_COOKIE["age"] . "<br />";

    // nepamiršti naudoti isset() !!!!
    if (isset($_COOKIE["name"])) {
        echo "Welcome " . $_COOKIE["name"] . "<br />";
    }

    // delete
    echo "<br>- Trynimas yra tiesiog laiko praeityje nustatymas. Taigi modifikuosime jau turimą sausainiuką (konkrečiai - jo laiką).";

    ?>
</body>

</html>