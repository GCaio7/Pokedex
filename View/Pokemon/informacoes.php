<?php require_once "../View/Shared/header.php";
      require_once "../Resources/php/funcoes.php";
?>
<div class="container text-center d-flex justify-content-center">
  <div class="text-center" id="informacoes-pokemon">
    <header class="p-3" id="cabecalho-pokemon">
      <h3>Nº <?php echo $pokemonInfo->getId(); ?></h3>
      <img id="img-pokemon" src=<?php echo $pokemonInfo->getArtWork(); ?> alt= <?php echo $pokemonInfo->getName(); ?>>
    </header>
    <div id="linha"></div>
    <div class="p-2 mx-auto justify-content-center d-flex align-items-center" id="nome-pokemon">
      <h2><?php echo ucfirst($pokemonInfo->getName())?></h2>
    </div>

    <div id="detalhes-pokemon">
      <div class="row">
        <div class="col-6">

          <div class="detalhe">
            <div class="item">Ability</div>
            <div class="desc"><?php echo ucfirst($pokemonInfo->getAbility()); ?></div>
          </div>

          <div class="detalhe">
            <div class="item">Height</div>
            <div class="desc"><?php echo formatHeight($pokemonInfo->getHeight()); ?> m</div>
          </div>

          <div class="detalhe">
            <div class="item">Weight</div>
            <div class="desc"><?php echo formatWeight($pokemonInfo->getWeight()); ?> kg</div>
          </div>
        </div>
        <div class="col-6">
          <div class="detalhe">
            <div class="item">Base XP</div>
            <div class="desc"><?php echo $pokemonInfo->getBaseXp(); ?> XP</div>
          </div>
          <div class="detalhe">
            <div class="item">Type</div>
            <div class="desc"><?php echo ucfirst($pokemonInfo->getType())?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
	require_once "../View/Shared/footer.php";
?>