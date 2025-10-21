<html>
    <head>
        <title>aula 07 php</title>
</head>
<body>

<?php
// Aula 07
// Nome: Raicony Mateus
// Data: 08/10/2025
// Criação da variável e atribuição inicial
$numero = 10;
echo "Valor inicial: $numero<br><br>";

// Soma 5
$numero += 5; // adiciona 5 ao valor atual
echo "Após somar 5: $numero<br>";

// Subtrai 2
$numero -= 2; // subtrai 2 do valor atual
echo "Após subtrair 2: $numero<br>";

// Multiplica por 3
$numero *= 3; // multiplica o valor atual por 3
echo "Após multiplicar por 3: $numero<br>";

// Divide por 2
$numero /= 2; // divide o valor atual por 2
echo "Após dividir por 2: $numero<br><br>";

// Pré-incremento
// Aumenta o valor antes de usar
echo "Pré-incremento: " . ++$numero . "<br>";

// Pós-incremento
// Mostra o valor, depois aumenta
echo "Pós-incremento: " . $numero++ . "<br>";

// Pré-decremento
// Diminui o valor antes de usar
echo "Pré-decremento: " . --$numero . "<br>";

// Pós-decremento
// Mostra o valor, depois diminui
echo "Pós-decremento: " . $numero-- . "<br><br>";

// Valor final
echo "Valor final: $numero<br>";
?>
</body>
</html>
