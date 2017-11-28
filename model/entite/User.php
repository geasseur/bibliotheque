<?php
class User{
  private $_idUser;
  private $_nom;
  private $_prenom;
  private $_age;
  private $_adresse;
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
     * Get the value of Nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of Nom
     *
     * @param mixed _nom
     *
     * @return self
     */
    public function setNom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     *
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of Prenom
     *
     * @param mixed _prenom
     *
     * @return self
     */
    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;

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
     * Get the value of Adresse
     *
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->_adresse;
    }

    /**
     * Set the value of Adresse
     *
     * @param mixed _adresse
     *
     * @return self
     */
    public function setAdresse($_adresse)
    {
        $this->_adresse = $_adresse;

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



        //function to borrow a book
    public function borrowBook(User $user){

    }

} ?>
