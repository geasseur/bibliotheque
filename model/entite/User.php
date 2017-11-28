<?php
class User{
  private $idUser;
  private $nom;
  private $prenom;
  private $age;
  private $adresse;
  private $dateSubscribe;

    /**
     * Get the value of Id User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of Id User
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get the value of Nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of Nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of Prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of Prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of Age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of Age
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of Adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of Date Subscribe
     */
    public function getDateSubscribe()
    {
        return $this->dateSubscribe;
    }

    /**
     * Set the value of Date Subscribe
     */
    public function setDateSubscribe($dateSubscribe)
    {
        $this->dateSubscribe = $dateSubscribe;

        return $this;
    }

    //function to borrow a book
    public function borrowBook(User $user){

    }

} ?>
