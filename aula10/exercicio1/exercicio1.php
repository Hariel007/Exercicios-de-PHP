<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP</title>
</head>
<body>
    <div>
        <?php 
        
          $n = isset($_GET['num'])?$_GET['num']:0;
          $o = isset($_GET['oper'])?$_GET['oper']:1; //Se não passar nenhum número, será 1.

          switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break; //Quebra 
            case 3:
                $r = sqrt($n);//Ou $n ^ (1/2);
                
            }

          echo "O resultado da operação solicitada foi $r";
        ?><br>
        <a href="./exercicio1.html" class="botao">Voltar</a>
    </div>
</body>
</html>