<?php
function chargerClasse($classname)
{
  include 'model/entite/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');
require 'model/connexion.php';

//launch bookManager
$bookManager = new BookManager($bdd);

//display of all books in library
$displaybooks = $bookManager->listBook();

//add a book in the bdd
if (isset($_POST['addBook'])) {
  $book = new Book([
    'title'=>$_POST['title'],
    'author'=>$_POST['author'],
    'resume'=>$_POST['resume'],
    'releaseDate'=>$_POST['dateSortie'],
    'category'=>$_POST['category']
  ]);
  $bookManager->addBook($book);
  header('Location:index.php');
}

if (isset($_POST['trie'])) {
  if (!empty($_POST['trieBook']) and is_string($_POST['trieBook'])) {
    if (!empty($_POST['cleTrie']) and is_string($_POST['cleTrie'])) {
      header('Location:index.php');
      $critere = $_POST['trieBook'];
      $objRecherche = $_POST['cleTrie'];
      $displaybooks = $bookManager->sortBook($critere, $objRecherche);
      var_dump($displaybooks);
    }
  }
}
require 'vue/vueIndex.php';
?>
