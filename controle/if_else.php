<div class="titulo">IF e Else</div>

<?php

if(true){
  echo "Serei impresso?";
  echo "<br>";
  echo "Serei impresso novamente?";
}

echo "<br>";

if(false){
  echo "Verdadeiro";
} else {
  echo "Falso";
}

echo "<br>";

if(false){
  echo "Passo A";
} else if(false){
  echo "Passo B";
} else if(false){
  echo "Passo C";
} else if(false){
  echo "Passo D";
} else if(true){
  echo "Passo E";
} else {
  echo "Último Passo";
}