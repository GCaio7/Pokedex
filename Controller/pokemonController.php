<?php
  require_once "../Gerenciadora/GerenciadoraPokemon.php";
  $gerenciadoraPokemon = new GerenciadoraPokemon();

  $action = $_REQUEST["action"];

  switch ($action) {
    case "buscarPorNome":
      $pokemonInfo = $gerenciadoraPokemon->buscarPorNome($_POST["search-term"]);
      if(!is_null($pokemonInfo))
        require_once "../View/Pokemon/informacoes.php";
      else
        header("Location: error");
      break;
    default:
      header("Location: home");
      break;
  }
?>