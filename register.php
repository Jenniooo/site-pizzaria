<?php 
include_once("templates/header.php");
include_once("process/orders.php");
include_once("process/register2.php");
?>
<div id="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><span>Relatório</span> de Pedidos</h2> 
            </div>
            <div class="col-md-12 table container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Sabor</th>
                          <th scope="col">Número de vendas total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($vendas as $venda): ?>
                            <tr>
                                <td><?php echo $venda['sabor'] ?></td>
                                <td><?php echo $venda['vendas_mes'] ?></td>
                                </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <br> <br> <br> <br> <br>
            <div class="col-md-12 table container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Sabores mais vendidos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($vendas as $venda): ?>
                            <tr>
                                <td><?php echo $venda['sabor'] ?></td>
                                </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
</div>
<br> <br> <br> <br> <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Modelo de pizza mais pedida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($numero_modelos as $num_modelos): ?>
                            <tr>
                                <td><?php echo $num_modelos['total_modelos'] ?></td>
                                </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>