<!DOCTYPE html>
<html>
  <body>
    <?php
      function sequenciaCrescente($vetor) {
        if (count($vetor) == 1){
          return "True";
        }
        for ($i=0;$i<count($vetor); $i++){
              $vet = $vetor;
              $ordem = true;

              //remove um da copia do vetor original
              array_splice($vet, $i, 1);

              //percorre todo a copia do vetor original
              for ($j=0; $j<count($vet)-1; $j++){
                //verifica se esta em ordem, analisando o sucessor do numero
                  if ($vet[$j] >= $vet[$j + 1]) {            
                      $ordem = false; 
                  }        
              }

              if ($ordem) {
                return "True";
              }
        }  
        return "False";  
      }
      echo sequenciaCrescente([10, 1, 2, 3, 4, 5]); //true
      echo "<br>";
      echo sequenciaCrescente([1, 3, 2, 1]); //false
      echo "<br>";
      echo sequenciaCrescente([1, 3, 2]);  //true
    ?>
  </body>
</html>
