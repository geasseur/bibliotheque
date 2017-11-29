<?php
class BookManager{
  private $_bdd;

  public function __construct($bdd){
    $this->setBdd($bdd);
  }

  //function to added a book on the database
  public function addBook(Book $book){
    $addBook = $this->_bdd->prepare('INSERT INTO book(title, author, resume, releaseDate, category, available) VALUES(:title, :author, :resume, :releaseDate, :category, 1)');
    $addBook->bindValue(':title', $book->getTitle(), PDO::PARAM_STR);
    $addBook->bindValue(':author', $book->getAuthor(), PDO::PARAM_STR);
    $addBook->bindValue(':resume', $book->getResume(), PDO::PARAM_STR);
    $addBook->bindValue(':releaseDate', $book->getReleaseDate());
    $addBook->bindValue(':category', $book->getCategory(), PDO::PARAM_STR);
    $addBook->execute();
  }

  //function to list the books in the database
  public function listBook(){
    $displaybooks = $this->_bdd->query('SELECT idBook, title, author, releaseDate, category
      from book ');
      if ($displaybooks == true) {
        return $displaybooks->fetchAll();
      }
      else{
        return;
      }
  }

  //function to display the book in detail page
  public function displayBook($id){
    $displaybook = $this->_bdd->query('SELECT idBook, title, author, resume, releaseDate, category
      from book where idBook = "'.$id.'" ');
      if ($displaybook == true) {
        return $displaybook->fetch();
      }
      else{
        return;
      }
  }

  //function to sort the book's list
  public function sortBook($critere, $objRecherche){
    var_dump($objRecherche);
    // $displayBooks = $this->_bdd->query('SELECT title, author, category FROM book WHERE "'.$critere.'" = "'.$objRecherche.'" ');
    $displayBooks = $this->_bdd->prepare('SELECT title, author, category, releaseDate FROM book WHERE :critere = :objRecherche ');
    $displayBooks->bindValue(':critere', $critere, PDO::PARAM_STR);
    $displayBooks->bindValue(':objRecherche', $objRecherche, PDO::PARAM_STR);
    $displayBooks->execute();
    var_dump($displayBooks->fetch(PDO::FETCH_ASSOC));
    return $displayBooks->fetchAll();
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
