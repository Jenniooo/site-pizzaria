
<?php

  include_once("templates/header.php");
  include_once("process/orders.php");

  function calcularPreco($sabores) {
    $precos = [
        "4 Queijos" => 30.00,
        "Frango com catupiry" => 32.00,
        "Calabresa" => 26.00,
        "Lombinho" => 42.00,
        "Filé com Cheddar" => 50.00,
        "Portuguesa" => 28.00,
        "Margherita" => 26.00
    ];

    $quantidadeSabores = count($sabores);

    if ($quantidadeSabores === 1) {
        // Pizza de 1 sabor, valor completo
        $sabor = $sabores[0];
        return isset($precos[$sabor]) ? $precos[$sabor] : 0.00;
    } else{
        // Pizza com mais de 1 sabor
        $precoTotal = 0.00;
        
        foreach ($sabores as $sabor) {
          $precoTotal += isset($precos[$sabor]) ? ($precos[$sabor] / 2) : 0.00;
        }

        return $precoTotal;
    }

    return 0.00; // Se nenhum sabor for especificado, o preço é 0
}

?>
  <div id="main-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><span>Gerenciar</span> pedidos:</h2>
        </div>
        <div class="col-md-12 table-container">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Pedido #</th>
                <th scope="col">Borda</th>
                <th scope="col">Massa</th>
                <th scope="col">Sabores</th>
                <th scope="col">Status</th>
                <th scope="col">Updates</th>
                <th scope="col">Data do pedido</th>
                <th scope="col">Preço</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($pizzas as $pizza): ?>
                <tr>
                  <td><?= $pizza["id"] ?></td>
                  <td><?= $pizza["borda"] ?></td>
                  <td><?= $pizza["massa"] ?></td>
                  <td>
                    <ul>
                      <?php foreach($pizza["sabores"] as $sabor): ?>
                        <li><?= $sabor ;?></li>
                      <?php endforeach; ?>
                    </ul>
                  </td>
                  <td>
                    <form action="process/orders.php" method="POST" class="form-group update-form">
                      <input type="hidden" name="type" value="update">
                      <input type="hidden" name="id" value="<?= $pizza["id"] ?>">
                      <select name="status" class="form-control status-input">
                        <?php foreach($status as $s): ?>
                          <option value="<?= $s["id"] ?>" <?php echo ($s["id"] == $pizza["status"]) ? "selected" : ""; ?> ><?= $s["tipo"] ?></option>
                        <?php endforeach; ?>
                      </select>
                      <button type="submit" class="update-btn">
                      <i class='bx bx-refresh bx-rotate-90'></i>
                      </button>
                    </form>
                  </td>
                  <td>
                    <form action="process/orders.php" method="POST">
                      <input type="hidden" name="type" value="delete">
                      <input type="hidden" name="id" value="<?= $pizza["id"] ?>">
                      <button type="submit" class="delete-btn">
                      <i class='bx bxs-trash' ></i>
                      </button>
                    </form>
                  </td>
                  <td>
                    <?php
                    if(isset($pizza['data_pedido'])&&!empty($pizza['data_pedido'])){
                      echo date('d/m/Y \à\s H:i', strtotime($pizza['data_pedido']));
                    }else{
                      echo 'N/A';
                    }?>
                  </td>
                  <td>R$ <?= number_format(calcularPreco($pizza["sabores"]), 2, ",", "."); ?></td>
                  
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
