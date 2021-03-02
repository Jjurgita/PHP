<?php

function sorting(array $arr1)
{
    foreach ($arr1 as $a) {
        print($a);
        if (!($a == end($arr1))) {
            print(', ');
        }
    }
}

function sum(array $arr2): float // grąžins rezultatą su ,
{
    $res = 0;
    foreach ($arr2 as $a) {
        $res += $a;
    }
    return $res;
}

function sum2(int $a, int $b)
{
    print($a + $b);
}

// class work:
function multiply(array $arr): int
{
    $res = 1;
    foreach ($arr as $n) {
        $res *= $n;
    }
    return $res;
}
