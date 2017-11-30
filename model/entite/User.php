<?php
class User{
  private $_idUser;
  private $_name;
  private $_firstName;
  private $_age;
  private $_adress;
  private $_dateSubscribe;


    public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

    public function hydrate(array $donnees){
      foreach ($donnees as $key => $value){
        $method = 'set'.ucfirst($key);
        if (method_exists($this, $method)){
          $this->$method($value);
        }
      }
    }
    /**
     * Get the value of Id User
     *
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->_idUser;
    }

    /**
     * Set the value of Id User
     *
     * @param mixed _idUser
     *
     * @return self
     */
    public function setIdUser($_idUser)
    {
        $this->_idUser = $_idUser;

        return $this;
    }

    /**
     * Get the value of Date Subscribe
     *
     * @return mixed
     */
    public function getDateSubscribe()
    {
        return $this->_dateSubscribe;
    }

    /**
     * Set the value of Date Subscribe
     *
     * @param mixed _dateSubscribe
     *
     * @return self
     */
    public function setDateSubscribe($_dateSubscribe)
    {
        $this->_dateSubscribe = $_dateSubscribe;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed _name
     *
     * @return self
     */
    public function setName($_name)
    {
        $this->_name = $_name;

        return $this;
    }

    /**
     * Get the value of First Name
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * Set the value of First Name
     *
     * @param mixed _firstName
     *
     * @return self
     */
    public function setFirstName($_firstName)
    {
        $this->_firstName = $_firstName;

        return $this;
    }

    /**
     * Get the value of Age
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * Set the value of Age
     *
     * @param mixed _age
     *
     * @return self
     */
    public function setAge($_age)
    {
        $this->_age = $_age;

        return $this;
    }

    /**
     * Get the value of Adress
     *
     * @return mixed
     */
    public function getAdress()
    {
        return $this->_adress;
    }

    /**
     * Set the value of Adress
     *
     * @param mixed _adress
     *
     * @return self
     */
    public function setAdress($_adress)
    {
        $this->_adress = $_adress;

        return $this;
    }

} ?>
