<div class="titulo">Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

echo '<p>Regras:</p>';
echo '<p>1. True é sempre true e false é sempre false.</p>';
echo '<p>2. O resultado de uma operação é sempre um booleano.</p>';
echo '<p>3. Qualquer número diferente de 0 é true.</p>';
echo '<p>4. Qualquer string é true.</p>';
echo '<p>5. Qualquer array é true.</p>';
echo '<p>6. Qualquer objeto é true.</p>';
echo '<p>7. O valor null é false.</p>';
echo '<p>8. O valor vazio é false.</p>';
echo '<p>9. O valor 0 é false.</p>';
echo '<p>10. O valor 1 é true.</p>';
echo '<p>11. O valor -1 é true.</p>';
echo '<p>12. O valor 0.0 é false.</p>';
echo '<p>13. O valor 0.1 é true.</p>';
echo '<p>14. O valor -0.1 é true.</p>';
echo '<p>15. O valor "0" é false.</p>';
echo '<p>16. O valor "0.0" é false.</p>';
echo '<p>17. O valor "0.1" é true.</p>';
echo '<p>18. O valor "false" é true.</p>';
echo '<p>19. O valor "true" é true.</p>';
echo '<p>20. O valor " " é true.</p>';
echo '<p>21. O valor "0 " é true.</p>';
echo '<p>22. O valor "0.0 " é true.</p>';
echo '<p>23. O valor "0.1 " é true.</p>';
echo '<p>24. O valor "false " é true.</p>';

?>