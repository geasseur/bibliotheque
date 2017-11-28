<?php
class BookManager{
  private $_bdd;

  public function __construct($bdd){
    $this->setBdd($bdd);
  }

  //function to added a book on the database
  public function addBook(Book $book){

  }

  //function to list the books in the database
  public function listBook(){
    $displaybooks = $this->_bdd->query('SELECT title, author, releaseDate
      from book ');
      if ($displaybooks == true) {
        return $displaybooks->fetchAll();
      }
      else{
        return;
      }
  }

  //function to sort the book's list
  public function sortBook($critere){

  }

  //function to update a book
  public function updateBook(Book $book){

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
