<?php
function chargerClasse($classname)
{
  include 'model/entite/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');
require 'model/connexion.php';
$bookManager = new BookManager($bdd);
$displaybooks = $bookManager->listBook();
require 'vue/vueIndex.php';
?>
