<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);
echo '<br>';

// int para float
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);
echo '<br>';

// float para int
var_dump((int) 6.8);
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int) round(2.8));

// operações com string
echo '<p>String</p>';
var_dump(3 + "2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>';
echo is_string("3" . 2);
echo '<br>';
// echo is_string("3" + 2);
// echo '<br>';
var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
var_dump(1 + "cinco 5");
echo '<br>';
var_dump(1 + "2+5");
echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");

