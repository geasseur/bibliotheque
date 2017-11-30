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
$book = new Book([
  'idBook'=>$_POST['idBook']
]);
$displayBorrower=$bookManager->displayBorrower($book);

require '../vue/vueDetailLivre.php';
