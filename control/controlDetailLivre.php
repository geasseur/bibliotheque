<?php
function chargerClasse($classname)
{
  include '../model/entite/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');
require '../model/connexion.php';

//launch bookManager
$bookManager = new BookManager($bdd);

$book = new Book([
  'idBook'=>$_POST['idBook']
]);
//display of all books in library
$displaybook = $bookManager->displayBook($book);

//display who is the borrower
$displayBorrower=$bookManager->displayBorrower($book);

require '../vue/vueDetailLivre.php';
