<?php
class UserManager{
  private $_bdd;

  public function __construct($bdd){
    $this->setBdd($bdd);
  }
  //function to add a new user on database
  public function addedUser(User $user){

  }

  //function to list users
  public function listUser(User $user){

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
