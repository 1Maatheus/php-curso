<div class="titulo">Desafio Classe</div>

<?php

class Data {
  public $dia = 01;
  public $mes = 01;
  public $ano = 1970;

  public function apresentar() {
    return "{$this->dia}/{$this->mes}/{$this->ano}";
  }
}

$data = new Data();
echo $data -> apresentar();