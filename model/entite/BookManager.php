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
    $displaybooks = $this->_bdd->query('SELECT *
      from book ORDER BY title ASC');
      if ($displaybooks == true) {
        return $displaybooks->fetchAll();
      }
      else{
        return;
      }
  }

  //function to display the book in detail page
  public function displayBook(Book $book){
    $displaybook = $this->_bdd->query('SELECT *
      from book where idBook = "'.$book->getIdBook().'" ');
      if ($displaybook == true) {
        $displaybook= $displaybook->fetch();
        return new Book([
          'idBook'=>$displaybook['idBook'],
          'title'=>$displaybook['title'],
          'author'=>$displaybook['author'],
          'resume'=>$displaybook['resume'],
          'releaseDate'=>$displaybook['releaseDate'],
          'category'=>$displaybook['category'],
          'available'=>$displaybook['available'],
          'borrower'=>$displaybook['borrower'],
          'dateReturn'=>$displaybook['dateReturn']]);
      }
      else{
        return;
      }
  }

  public function displayBorrower(Book $book){
    $displayBorrower = $this->_bdd->query('SELECT idUser, name, firstName from user inner join book on idUser = borrower where idBook = "'.$book->getIdBook().'" ');
    $displayBorrower = $displayBorrower->fetch();
    return new User([
      'firstName'=>$displayBorrower['firstName'],
      'name'=>$displayBorrower['name']
    ]);
  }

  //function to sort the book's list
  public function sortBook($critere, $objRecherche){
    $displayBooks = $this->_bdd->prepare('SELECT * FROM book WHERE '.$critere.' = :objRecherche ');
    $displayBooks->bindValue(':objRecherche', $objRecherche, PDO::PARAM_STR);
    $displayBooks->execute();
    return $displayBooks->fetchAll();
  }

  //function to return a book
  public function returnBook(Book $book){
    $returnBook = $this->_bdd->query('UPDATE book set available = 1, borrower = NULL, dateReturn = NULL where idBook = '.$book->getIdBook().'');
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
