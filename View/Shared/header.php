<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Resources/Images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="Resources/Images/favicon.ico" type="image/x-icon">
    <title>Pokédex <?php if(isset($pokemonInfo)) echo '| '.ucfirst($pokemonInfo->getName()); ?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="Resources/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
      <a class="navbar-brand" href="#">
        <img src="Resources/Images/logo.png" alt="Logo" width=50px>
        Pokédex
      </a>
      <form class="form-inline d-flex" id="search-form" method="post" action="pokemon?action=buscarPorNome">
        <input class="form-control m-1" name="search-term" type="text" placeholder="Buscar pelo Nome" aria-label="Search">
        <button id="search-button" class="btn m-1" type="submit">Buscar</button>
      </form>
    </nav>

  
