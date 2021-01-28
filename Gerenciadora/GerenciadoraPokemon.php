<?php
  require_once "../Persistencia/PersistenciaPokemon.php";

  class GerenciadoraPokemon
  {
    private $persistencia;

    function __construct()
    {
      $this->persistencia = new PersistenciaPokemon();
    }

    function buscarPorNome($nome)
    {
      return $this->persistencia->buscarPorNome($nome);
    }
  }
?>