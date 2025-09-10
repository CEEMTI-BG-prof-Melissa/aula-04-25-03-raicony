<html>
    <head>
        <title> Aula 03  PHP </title>
    </head>
    <body>
        <?php
            $nome1="Raicony";
            $nome2="Raicony";
            $n1=10;
            $n2=2;
            $soma=$n1+$n2;  

            echo"Meu nome é " .$nome1;
            echo"<br> <br> A soma de $n1 com $n2 e igual a $soma";
            echo"<br> <br> O resultado da subtração de $n1 e $n2 é igual a: " .($n1-$n2) .".";
            echo"<br> <br> A multiplicaçao dos numeros $n1 e $n2 é igual a: " .($n1*$n2) .".";
            echo"<br> <br> a divisão dos numeros $n1 por $n2 é igual a: ".($n1/$n2) .".";
            echo"<br> <br> O resto da divisão dos numeros $n1 por $n2 é igual a:".($n1%$n2) .".";
        ?>
    </body>
</html>
