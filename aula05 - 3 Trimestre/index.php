<html>
    <head>
        <title> Aula 05  PHP </title>
    </head>
    <body>
        <?php
            $n1=2;
            $n2=$_GET["x"];

            echo "os valores são $n1 e $n2. <br><br>";
            echo "Os valor absoluto de $n1 é " .abs($n1);
            echo "<br><br> O numero $n2 <sup> $n1</sup> é igual a " .pow($n2, $n1);
            echo "<br><br> A raiz quadrada de $n2 é igaul a " .sqrt($n2);
            echo "<br><br> O valor arredondado de $n2 é igual a " .round($n2);
            echo "<br><br> O valor arredondado de $n2 é igual a " .ceil($n2);
            echo "<br><br> O valor arredondado de $n2 é igual a " .floor($n2);
            echo "<br><br><br>";
            echo "A parte inteira de $n2 é igual a " . intval($n2);

            echo"<br><br>";
            echo"um pirulito custa R$" .number_format($n1, 2, ",", ".");

        ?>
    </body>
</html>
