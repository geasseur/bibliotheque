<?php
class UserManager{
  private $_bdd;

  public function __construct($bdd){
    $this->setBdd($bdd);
  }
  //function to add a new user on database
  public function addUser(User $user){
    $addUser = $this->_bdd->prepare('INSERT INTO user(name, firstName, age, adress, dateSubscribe) VALUES(:name, :firstName, :age, :adress, :dateSubscribe)');
    $addUser->bindValue(':name', $user->getName(), PDO::PARAM_STR);
    $addUser->bindValue(':firstName', $user->getFirstName(), PDO::PARAM_STR);
    $addUser->bindValue(':age', $user->getAge(), PDO::PARAM_INT);
    $addUser->bindValue(':adress', $user->getAdress(), PDO::PARAM_INT);
    $addUser->bindValue(':dateSubscribe', $user->getDateSubscribe());
    $addUser->execute();
  }

  //function to list users
  public function listUser(){
    $displayUsers = $this->_bdd->query('SELECT idUser, name, firstName
      from user ');
      if ($displayUsers == true) {
        return $displayUsers->fetchAll();
      }
      else{
        return;
      }
  }

  //function to update user
  public function updateUser(User $user){

  }

    /**
     * Get the value of Bdd
     *
     * @return mixed
     */
    public function getBdd()
    {
        return $this->_bdd;
    }

    /**
     * Set the value of Bdd
     *
     * @param mixed _bdd
     *
     * @return self
     */
    public function setBdd($_bdd)
    {
        $this->_bdd = $_bdd;

        return $this;
    }

} ?>
