<?php
include_once("process/conn.php");

$vendasmesQuery = $conn->prepare("SELECT sabor.nome AS sabor, COUNT(pizza_sabor.sabor_id) AS vendas_mes FROM pizza_sabor JOIN sabores AS sabor ON pizza_sabor.sabor_id = sabor.id GROUP BY pizza_sabor.sabor_id ORDER BY vendas_mes DESC;");
$vendasmesQuery-> execute();
$vendas = $vendasmesQuery-> fetchAll();


$modeloSaboresQuery = $conn->prepare("SELECT total_modelos, count(*) AS total FROM (SELECT CASE
    WHEN count(distinct sabor_id) = 1 THEN '1 sabor' 
    WHEN count(distinct sabor_id) = 2 THEN '2 sabores' 
    WHEN count(distinct sabor_id) = 3 THEN '3 sabores' 
    WHEN count(distinct sabor_id) = 4 THEN '4 sabores' 
    END as total_modelos, pizza_id FROM pizza_sabor GROUP BY pizza_id) AS modelos GROUP BY total_modelos;");


$modeloSaboresQuery-> execute();
$numero_modelos = $modeloSaboresQuery-> fetchAll();