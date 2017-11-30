<?php
function chargerClasse($classname)
{
  include 'model/entite/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');
require 'model/connexion.php';

//launch bookManager
$bookManager = new BookManager($bdd);
$UserManager = new UserManager($bdd);

//display of all books in library
$displaybooks = $bookManager->listBook();

//display all users
$displayUsers = $UserManager->listUser();


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


//sort books
if (isset($_POST['trie'])) {
  if (!empty($_POST['trieBook']) and is_string($_POST['trieBook'])) {
    if (!empty($_POST['cleTrie']) and is_string($_POST['cleTrie'])) {
      $critere = $_POST['trieBook'];
      $objRecherche = $_POST['cleTrie'];
      $displaybooks = $bookManager->sortBook($critere, $objRecherche);
      var_dump($displaybooks);
    }
  }
}

//add a user
if (isset($_POST['newUser'])) {
  $date = new DateTime();
  $today = $date->format('Y-m-d');
  $user = new User([
    'name'=>$_POST['name'],
    'firstName'=>$_POST['firstName'],
    'age'=>$_POST['age'],
    'adress'=>$_POST['adress'],
    'dateSubscribe'=>$today
  ]);
  $UserManager->addUser($user);
  header('Location:index.php');
}

//borrow a book
if (isset($_POST['borrow'])) {
  $date = new DateTime();
  $date->add(new DateInterval('P10D'));
  $return = $date->format('Y-m-d');
  $user = new User([
    'idUser'=>$_POST['borrower']
  ]);
  $book = new Book([
    'idBook'=>$_POST['idBook'],
    'available'=>0,
    'dateReturn'=>$return
  ]);
  $UserManager->borrowBook($user, $book);
  header('Location:index.php');
}

//return a book
if (isset($_POST['rendreLivre'])) {
  $book = new Book([
    'idBook'=>$_POST['livreRendu']
  ]);
  $bookManager->returnBook($book);
  header('Location:index.php');
}

require 'vue/vueIndex.php';
?>
