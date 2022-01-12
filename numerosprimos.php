<!DOCTYPE html>
<html>
<body>
  <?php
  function numerosPrimos($inicio,$fim) {
    $primos = array();
      for($i = $inicio+1; $i < $fim; $i++){
        $divisores = 0;
        for($j = $i; $j >= 1; $j--){
            if ($i % $j == 0) {
                $divisores++;
            }
        }
        if ($divisores == 2){
              $primos[] = $i;
        }
    }
      return $primos;
  }
  //mostrar numeros primos no intervalo de 10 a 29
  foreach(numerosPrimos(10,29) as $valor) {
      echo $valor . ', ';
  }
  ?>
</body>
</html>
