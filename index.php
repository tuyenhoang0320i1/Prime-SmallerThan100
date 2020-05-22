<?php

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Cac so nguyen to nho hon 100 la: <br>";
for ($i = 0; $i < 100; $i++)
{
    if (isPrime($i))
    {
        echo $i . ", ";
    }
}
