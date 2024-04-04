<?php
include_once("templates/header.php");
include_once("process/pizza.php");
?>

<div id="main-banner">
  
  </div>
  <div id="main-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><span>Monte</span> sua pizza:</h2>
          <form action="process/pizza.php" method="POST" id="pizza-form">
           <div class="form-group">
            <label for="borda">Borda:</label>
            <select name="borda" id="borda" class="form-control form-select">
              <?php foreach($bordas as $borda):?>
                <option value="<?php echo $borda['id']?>"><?php echo $borda['tipo']?></option>
                <?php endforeach;?>
            </select>
          </div> <!--fim borda -->
          <div class="form-group">
            <label for="massa">Massa:</label>
            <select name="massa" id="massa" class="form-control form-select">
              <?php foreach($massas as $massa):?>
                  <option value="<?php echo $massa['id']?>"><?php echo $massa['tipo']?></option>
              <?php endforeach;?>
            </select>
        </div>    <!--fim massa -->
        <div class="form-group-1">
          
        <label for="sabores">Sabores: (Máximo 4)</label>
                  <?php foreach($sabores as $sabor):?>
                    <label>
                      <input type="checkbox" multiple name="sabores[]" id="sabores" value="<?php echo $sabor['id']?>"><?php echo $sabor['nome']?></input>
                    </label>
                  <?php endforeach;?>
          
        </div>         <!--fim sabores -->
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Fazer Pedido"/>
          </div>
          </form>
        </div>
      </div>
    </div>
  <?php
include_once("templates/footer.php");
?>
  