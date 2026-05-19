<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandos print e echo em PHP</title>

</head>
<body>
  <?php
/*variáveis - intro
O que são variáveis?
Tipos de variáveis em PHP:
STRING
INT
FLOAT
BOOLEAN
ARRAY....
Regras para declaração de variáveis em PHP:
1 - Deve obrigatoriamente iniciar com o caractere "$"
2 - Não pode conter espaços ou caracteres especiais (com exceção de ____ )
EX de var validas:
$nome;
$fone1;
$endereco_2;
CASE SENSITIVE (DISTINÇAÕ DE LETRAS MAIUSCULAS E minusculas)
  */

//var tipo string
$nome = "Anie";

//var tipo numero
$idade = 500;

//var tipo float
$peso = 89.04;
$fumante = "Ainda não,  mas n ta longe :)";
/*ou
$fumante = true; (tipo boolean = TRUE OU FALSE)
*/
?>
<h1>Ficha Cadastral das lenda </h1>
  <br/>
  <p>Nome da lenda: <?=$nome ?></p>
<p>Idade: <?=$idade ?></p>
<p>Peso da peste: <?=$peso ?></p>
<p> Fumante: <?=$fumante ?></p>
</body>
</html>
