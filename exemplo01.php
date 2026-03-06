<?php

$joaoSalario = 1000;
$joaoPrevidencia = 100;
$joaoNome = "João Filho";
$joaoDesconto = number_format($joaoSalario*0.275 + $joaoPrevidencia, 2, ",", ".");

$mariaSalario = 2000;
$mariaPrevidencia = 200;
$mariaNome = "Maria rute";
$mariaDesconto = number_format($mariaSalario*0.275 + $mariaPrevidencia, 2, ",", ".");

$joseSalario = 3000;
$josePrevidencia = 300;
$joseNome = "José Salgado";
$joseDesconto = number_format($joseSalario*0.275 + $josePrevidencia, 2, ",", ".");

echo "O valor do desconto do $joaoNome é R$ $joaoDesconto. <br>";
echo "O valor do desconto do $mariaNome é R$ $mariaDesconto. <br>";
echo "O valor do desconto do $joseNome é R$ $joseDesconto. <br>";