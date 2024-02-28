<div class="titulo">Integração HTML</div>

<h1>
<?php
  echo 'Olá';
  echo '<small> Mundo</small>';
?>
</h1>

<?= "<div>Outra forma de me expressar!</div>" ?>
<br>

<div>
  <button>
    <?= "Legal" ?>
  </button>
</div>

<style>
  button {
    padding: 5px 20px;
    background-color: #4286f4;
    color: #fff;
    font-size: 1.6rem;
    border-radius: 10px;
    cursor: pointer;	
    outline: none;
    border: none;
    }
</style>