<!DOCTYPE html>
<html>
<body>
  <?php
    $numeros = array();
    for($x=0;$x<20;$x++){
      $numeros[] = rand(1,10);
    }
    echo 'Array sorteado = ';
    foreach($numeros as $valor) {
        echo $valor . ', ';
    }
  ?>
  <br>
  <br>
  <?php
    $numerosnrepetidos = array(); 
    for($i=0;$i<20;$i++){
      $repeticoes = 0;
        for($j=0; $j < 20; $j++){
          if ($numeros[$i] == $numeros[$j]){
                $repeticoes++;
            }
        }
        if ($repeticoes == 1){
          $numerosnrepetidos[] = $numeros[$i];
        }
    }
    echo 'Os números que não se repetem são: ';
    foreach($numerosnrepetidos as $valor) {
        echo $valor . ', ';
    }
  ?>
</body>
</html>
