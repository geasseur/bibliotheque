<?php
function chargerClasse($classname)
{
  include '../model/entite/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');
require '../model/connexion.php';

//launch bookManager
$bookManager = new BookManager($bdd);

//display of all books in library
$displaybook = $bookManager->displayBook($_POST['idBook']);

require '../vue/vueDetailLivre.php';
