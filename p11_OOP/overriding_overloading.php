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
    class MyClass
    {
        public function __call($name, $args)
        {
            switch ($name) {
                case 'funcOne':
                    switch (count($args)) {
                        case 1:
                            return call_user_func_array(array($this, 'funcOneWithOneArg'), $args);
                        case 3:
                            return call_user_func_array(array($this, 'funcOneWithThreeArgs'), $args);
                    }
                case 'anotherFunc':
                    switch (count($args)) {
                        case 0:
                            return $this->anotherFuncWithNoArgs();
                        case 5:
                            return call_user_func_array(array($this, 'anotherFuncWithMoreArgs'), $args);
                    }
            }
        }
        protected function funcOneWithOneArg($a)
        {
            print($a);
        }
        protected function funcOneWithThreeArgs($a, $b, $c)
        {
            print($a . " " . $b . " " . $c);
        }
        protected function anotherFuncWithNoArgs()
        {
        }
        protected function anotherFuncWithMoreArgs($a, $b, $c, $d, $e)
        {
        }
    }
    (new MyClass())->funcOne("AAA");
    (new MyClass())->funcOne("AAA", "BBB", "CCC");

    ?>
</body>

</html>