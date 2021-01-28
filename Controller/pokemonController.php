<?php
  require_once("../Gerenciadora/GerenciadoraPokemon.php");
  $gerenciadoraPokemon = new GerenciadoraPokemon();

  $action = $_REQUEST["action"];

  switch ($action) {
    case "buscarPorNome":
      $pokemonInfo = $gerenciadoraPokemon->buscarPorNome($_POST["search-term"]);
      require_once('../View/Pokemon/informacoes.php');
      break;
    default:
      header("Location: buscarPorNome");
      break;
  }
?>