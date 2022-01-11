<!DOCTYPE html>
<html>
  <body>
    <?php
      function seculoAno($ano) {
        $seculo = $ano / 100;
        if ($ano % 100 != 0){
            $seculo++;
          }		
          echo intval($seculo);
      }
      seculoAno(1905)
      seculoAno(1700);
    ?>
  </body>
</html>
