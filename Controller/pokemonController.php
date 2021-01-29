<?php
  require_once "../Gerenciadora/GerenciadoraPokemon.php";
  $gerenciadoraPokemon = new GerenciadoraPokemon();

  $action = $_REQUEST["action"];

  switch ($action) {
    case "buscar":
      $searchTerm = $_POST["search-term"];
      if(empty($searchTerm))
        $searchTerm = random_int(1, 890);
      $pokemonInfo = $gerenciadoraPokemon->buscar($searchTerm);
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