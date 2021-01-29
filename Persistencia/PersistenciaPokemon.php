<?php
  require_once "DaoGenerico.php";
  require_once "../Model/Pokemon.php";

  class PersistenciaPokemon implements DaoGenerico
  {
    function buscarPorNome($nome)
    {
      $pokemon = null;
      $baseUrl = 'https://pokeapi.co/api/v2/pokemon/';
      $ch = curl_init();

      $completeUrl = $baseUrl . strtolower($nome);

      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL,$completeUrl);
      $json=curl_exec($ch);

      $dataSet = json_decode($json, true);

      if(!is_null($dataSet)){
        //Povoando variáveis com itens do Json
        $ability = $dataSet["abilities"]["0"]["ability"]["name"];
        $height = $dataSet["height"];
        $id = $dataSet["id"];
        $baseXp = $dataSet["base_experience"];
        $name = $dataSet["name"];
        $artwork = $dataSet["sprites"]["other"]["official-artwork"]["front_default"];
        $type = $dataSet["types"]["0"]["type"]["name"];
        $weight = $dataSet["weight"];
        $movesNumber = count($dataSet["moves"]);

        $pokemon = new Pokemon($ability, $height, $id, $baseXp, $name, $artwork, $type, $weight, $movesNumber);
      }
      curl_close($ch);
      return $pokemon;
    }
  }

?>