<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];

$randonName = array_rand($nomes);

echo "<h1>$nomes[$randonName]</h1>";