<div class="titulo">Método POST</div>

<form action="#" method="post">
  <input type="text" name="nome">
  <input type="text" name="sobrenome">
  <select name="estado">
    <option value="AC">Acre</option>
    <option value="BA">Bahia</option>
    <option value="SP">São Paulo</option>
  </select>
  <button>Enviar</button>
</form>

<style>
  form > * {
    font-size: 1.1rem;
  }
</style>

<?php
print_r($_POST);
