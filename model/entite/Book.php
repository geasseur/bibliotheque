<?php
class Book{
  private $_idBook;
  private $_title;
  private $_author;
  private $_resume;
  private $_releaseDate;
  private $_category;
  private $_available;
  private $_borrower;
  private $_dateReturn;

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
     * Get the value of Id Book
     *
     * @return mixed
     */
    public function getIdBook()
    {
        return $this->_idBook;
    }

    /**
     * Set the value of Id Book
     *
     * @param mixed _idBook
     *
     * @return self
     */
    public function setIdBook($_idBook)
    {
        $this->_idBook = $_idBook;

        return $this;
    }

    /**
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * Set the value of Title
     *
     * @param mixed _title
     *
     * @return self
     */
    public function setTitle($_title)
    {
        $this->_title = $_title;

        return $this;
    }

    /**
     * Get the value of Author
     *
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->_author;
    }

    /**
     * Set the value of Author
     *
     * @param mixed _author
     *
     * @return self
     */
    public function setAuthor($_author)
    {
        $this->_author = $_author;

        return $this;
    }

    /**
     * Get the value of Resume
     *
     * @return mixed
     */
    public function getResume()
    {
        return $this->_resume;
    }

    /**
     * Set the value of Resume
     *
     * @param mixed _resume
     *
     * @return self
     */
    public function setResume($_resume)
    {
        $this->_resume = $_resume;

        return $this;
    }

    /**
     * Get the value of Release Date
     *
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->_releaseDate;
    }

    /**
     * Set the value of Release Date
     *
     * @param mixed _releaseDate
     *
     * @return self
     */
    public function setReleaseDate($_releaseDate)
    {
        $this->_releaseDate = $_releaseDate;

        return $this;
    }

    /**
     * Get the value of Category
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->_category;
    }

    /**
     * Set the value of Category
     *
     * @param mixed _category
     *
     * @return self
     */
    public function setCategory($_category)
    {
        $this->_category = $_category;

        return $this;
    }

    /**
     * Get the value of Available
     *
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->_available;
    }

    /**
     * Set the value of Available
     *
     * @param mixed _available
     *
     * @return self
     */
    public function setAvailable($_available)
    {
        $this->_available = $_available;

        return $this;
    }

    /**
     * Get the value of Borrower
     *
     * @return mixed
     */
    public function getBorrower()
    {
        return $this->_borrower;
    }

    /**
     * Set the value of Borrower
     *
     * @param mixed _borrower
     *
     * @return self
     */
    public function setBorrower($_borrower)
    {
        $this->_borrower = $_borrower;

        return $this;
    }

    /**
     * Get the value of Date Return
     *
     * @return mixed
     */
    public function getDateReturn()
    {
        return $this->_dateReturn;
    }

    /**
     * Set the value of Date Return
     *
     * @param mixed _dateReturn
     *
     * @return self
     */
    public function setDateReturn($_dateReturn)
    {
        $this->_dateReturn = $_dateReturn;

        return $this;
    }

} ?>
