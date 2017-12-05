<?php
function chargerClasse($classname)
{
  include '../model/entite/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');
require '../model/connexion.php';

$UserManager = new UserManager($bdd);

$user = new User([
  'idUser'=>$_POST['idUser']
]);
//display User Information
$displayUser = $UserManager->displayUser($user);

//display books borrow by the user
$displayBooks = $UserManager->displayBooksBorrow($user);

require '../vue/vueUser.php';
