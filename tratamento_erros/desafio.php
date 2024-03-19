<?php
namespace Aritmetica;

class NaoInteiroException extends \Exception {
    public function __construct($message, $code = 0, $previous = null) {
        echo "Erro personalizado: $message<br>";
        parent::__construct($message, $code, $previous);
    }
}

function intdiv($a, $b) {
    if($b == 0) {
        throw new \DivisionByZeroError('Divisão por zero');
    }
    if($a % $b != 0) {
        throw new NaoInteiroException('O resultado da divisão não é inteiro');
    }
    return $a / $b;
}