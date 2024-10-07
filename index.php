<?php

echo "Hello World!";

function foo()
{
    echo 'foo';
}

class Teste 
{
    public string $nome = 'Marco Tulio';
    public string $email = 'marcotuliov.fonseca@ufu.br';

    public function __construct()
    {
        echo __METHOD__;
    }

    public function bar() 
    { 
        echo __METHOD__;
    }
}

echo '<br>';

foo();

echo '<br>';

(new Teste)->bar();

echo '<br>';

$teste = new Teste;

var_dump($teste);

$teste->bar();