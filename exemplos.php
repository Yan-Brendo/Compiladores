<?php
// Exemplo 1: Condicional simples
// Verifica se a variável nome é igual a "Jonas" e exibe uma mensagem.
$nome = "Jonas";
if ($nome == "Jonas") {
    echo "Olá, $nome!";
} else {
    echo "Nome não reconhecido.";
}

echo "\n\n"; // Quebra de linha

// Exemplo 2: Programação orientada a objetos
// Define uma classe 'Pessoa' e exibe uma saudação.
class Pessoa
{
    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function saudar()
    {
        echo "Olá, " . $this->nome;
    }
}

$pessoa = new Pessoa("Jonas");
$pessoa->saudar();

echo "\n\n"; // Quebra de linha

// Exemplo 3: Funções anônimas
// Aplica uma função anônima com array_map para retornar os quadrados de um array.
$numeros = [1, 2, 3, 4, 5];
$square = array_map(function ($n) {
    return $n * $n;
}, $numeros);
print_r($square);

echo "\n\n"; // Quebra de linha

// Exemplo 4: Padrão Observer
// Define o padrão Observer, onde um EventGenerator notifica um EventListener sobre um evento.
interface Observer
{
    public function update($eventInfo);
}

class EventGenerator
{
    private $observers = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function triggerEvent($eventInfo)
    {
        foreach ($this->observers as $observer) {
            $observer->update($eventInfo);
        }
    }
}

class EventListener implements Observer
{
    public function update($eventInfo)
    {
        echo "Evento recebido: $eventInfo\n";
    }
}

$generator = new EventGenerator();
$listener = new EventListener();
$generator->addObserver($listener);
$generator->triggerEvent("Evento disparado!");

echo "\n\n"; // Quebra de linha

// Exemplo 5: Operadores aritméticos, relacionais e lógicos
// Demonstração de operadores em PHP.
$a = 10;
$b = 5;

echo $a + $b; // Operador aritmético de adição
echo "\n";
echo $a > $b; // Operador relacional
echo "\n";
echo ($a > $b && $b > 0); // Operador lógico

echo "\n\n"; // Quebra de linha

// Exemplo 6: Operador ternário
// Usa o operador ternário para definir uma mensagem.
$idade = 18;
$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $mensagem;

echo "\n\n"; // Quebra de linha

// Exemplo 7: Operador lógico com curto-circuito
// Exemplo de curto-circuito no uso do operador &&.
$verdadeiro = true;
$falso = false;

if ($verdadeiro && $falso) {
    echo "Esta linha não será executada.";
}

echo "\n\n"; // Quebra de linha

// Exemplo 8: Precedência e associatividade
// Demonstrando precedência de operadores em PHP.
$resultado = 10 + 5 * 2; // Multiplicação tem maior precedência que adição
echo $resultado;

echo "\n\n"; // Quebra de linha

// Exemplo 9: Ponteiros e referências
// Usando referências em variáveis PHP.
$a = 5;
$b = &$a; // $b é uma referência a $a
$b = 10;
echo $a; // $a será 10

echo "\n\n"; // Quebra de linha

// Exemplo 10: Escopo de variáveis
// Demonstração de escopo local e global.
$globalVar = "Eu sou global";

function mostrarEscopo()
{
    $localVar = "Eu sou local";
    echo $localVar;
}

mostrarEscopo();
echo "\n";
echo $globalVar;

echo "\n\n"; // Quebra de linha

// Exemplo 11: Passagem de parâmetros por valor
// Passagem de parâmetros por valor.
function dobrar($num)
{
    $num = $num * 2;
    return $num;
}
$valor = 5;
echo dobrar($valor); // O valor original não é alterado

echo "\n\n"; // Quebra de linha

// Exemplo 12: Passagem de parâmetros por referência
// Passagem de parâmetros por referência.
function dobrarReferencia(&$num)
{
    $num = $num * 2;
}
$valorRef = 5;
dobrarReferencia($valorRef);
echo $valorRef; // O valor original é alterado

echo "\n\n"; // Quebra de linha

// Exemplo 13: Funções anônimas (lambdas)
// Usando funções anônimas em PHP.
$anonFunc = function ($x) {
    return $x * 2;
};
echo $anonFunc(5);

echo "\n\n"; // Quebra de linha

// Exemplo 14: Parâmetros opcionais
// Função com parâmetros opcionais.
function saudacao($nome = "Visitante")
{
    echo "Olá, $nome!";
}
saudacao(); // Usa o valor padrão

echo "\n\n"; // Quebra de linha

// Exemplo 15: Número indeterminado de parâmetros
// Função que aceita um número indeterminado de parâmetros.
function somaTodos(...$numeros)
{
    return array_sum($numeros);
}
echo somaTodos(1, 2, 3, 4, 5);

echo "\n\n"; // Quebra de linha

// Exemplo 16: Goto e desvio incondicional
// Usando o goto em PHP.
goto label;
echo "Esta linha será ignorada.";

label:
echo "Salto para label com goto.";

echo "\n\n"; // Quebra de linha

// Exemplo 17: Laços - for, while, foreach
// Usando diferentes tipos de laços.
for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
}

echo "\n";

$j = 0;
while ($j < 5) {
    echo $j . " ";
    $j++;
}

echo "\n";

$array = [1, 2, 3, 4, 5];
foreach ($array as $valor) {
    echo $valor . " ";
}

echo "\n\n"; // Quebra de linha

// Exemplo 18: Comandos condicionais - if, else, switch
// Uso de condicionais em PHP.
$numero = 2;

if ($numero == 1) {
    echo "Um";
} elseif ($numero == 2) {
    echo "Dois";
} else {
    echo "Outro número";
}

echo "\n";

switch ($numero) {
    case 1:
        echo "Um";
        break;
    case 2:
        echo "Dois";
        break;
    default:
        echo "Outro número";
}

echo "\n\n"; // Quebra de linha

// Exemplo 19: Função com número indeterminado de parâmetros
// Função usando func_get_args para acessar parâmetros indeterminados.
function imprimirParametros()
{
    $args = func_get_args();
    foreach ($args as $arg) {
        echo $arg . " ";
    }
}
imprimirParametros(1, "dois", 3);

echo "\n\n"; // Quebra de linha

// Exemplo 20: Tratamento de exceções
// Usando try-catch para capturar exceções.
try {
    throw new Exception("Erro customizado");
} catch (Exception $e) {
    echo "Exceção capturada: " . $e->getMessage();
}

echo "\n\n"; // Quebra de linha

// Exemplo 21: Tratamento de eventos com Observer
// Já foi demonstrado acima no padrão Observer.

// Exemplo 22: Programação concorrente com pthreads (exemplo simplificado)
// Este exemplo simula programação concorrente, mas pthreads precisa estar instalado para rodar.
// Nota: Apenas exemplo de conceito, sem pthreads habilitado.
// class WorkerThread extends Thread {
//     public function run() {
//         echo "Thread em execução\\n";
//     }
// }

// Exemplo 23: Programação genérica
// Uso de tipos genéricos com PHP 8.
function obterElemento(array $array, int $indice)
{
    return $array[$indice];
}
echo obterElemento([1, 2, 3], 1);
