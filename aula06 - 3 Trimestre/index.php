<html>
    <head>
        <title>AULA 06 - PHP </tile>
    </head>
    <body>
        <h3> Operadores de Atribuição </h3>
        <hr>

        <?php
            $a=2;
            $b=$a+5;
            echo "A é igual a $a e b é igual a $b.";
            echo"<br><br>";
            $a=$a+3;
            echo "Agora A é igual a $a.";
            echo"<br><br>";
            $b+=8;
            echo"Agora B é igual a $b.";
            echo"<br><br>";
            $b-=5;
            echo"Agora B é igual a $b.";

            echo "<hr>";
            $b*=2;
            echo "multiplicando o valor de B por fica igual a $b .";
            echo "<br><br>";
            $b/=10;
            echo "Dividindo o valor de B por 10 fica igual  $b.";
            echo "<br><br>";
            $b%=3;
            echo" O resto da divisão do valor de B por 3 é igual a $b.";
            echo "<br><br>";
            $b.=10;
        echo"concatenando o valor de B com o número 10 fica igual a $b."
                

        ?>

    </body>
</html>
