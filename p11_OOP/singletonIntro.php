<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class DbConnetion
    {
        private static $instance = null;
        private function __construct()
        {
        }

        public static function getInstance()
        {
            if (self::$instance == null) {
                print("Creating new object!" . PHP_EOL);
                self::$instance = new DbConnetion();
            }
            return self::$instance;
        }
    }

    // Uncaught Error: Call to private DbConnetion::__construct()
    // $dbConn = new DbConnetion();
    $dbConn = DbConnetion::getInstance();
    $dbConn1 = DbConnetion::getInstance();
    $dbConn2 = DbConnetion::getInstance();

    var_dump($dbConn);
    var_dump($dbConn1);
    var_dump($dbConn2);

    ?>
    <div></div>
    <?php
    class DbConnetion1
    {
        private static $instance = null;
        private $connectionString;
        private function __construct($connectionString)
        {
            $this->connectionString = $connectionString;
        }

        public static function getInstance($gg)
        {
            if (self::$instance == null) { // niekada dar nebuvo kviestas, 0
                print("Returning new object!" . "<br>");
                self::$instance = new DbConnetion1($gg);
            }
            return self::$instance;
        }
    }

    // Uncaught Error: Call to private DbConnetion::__construct()
    // $dbConn = new DbConnetion();
    $dbConn = DbConnetion1::getInstance("A");
    $dbConn1 = DbConnetion1::getInstance("B");
    $dbConn2 = DbConnetion1::getInstance("C");

    print("<pre>");
    var_dump($dbConn);
    var_dump($dbConn1);
    var_dump($dbConn2);
    print($dbConn === $dbConn1);
    print("</pre>");

    ?>
</body>

</html>