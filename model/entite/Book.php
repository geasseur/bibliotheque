<?php
class Book{
  private $idBook;
  private $title;
  private $author;
  private $resume;
  private $releaseDate;
  private $category;
  private $available;
  private $borrower;
  private $dateReturn;

    /**
     * Get the value of Id Book 
     */
    public function getIdBook()
    {
        return $this->idBook;
    }

    /**
     * Set the value of Id Book
     */
    public function setIdBook($idBook)
    {
        $this->idBook = $idBook;

        return $this;
    }

    /**
     * Get the value of Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of Author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of Author
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of Resume
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of Resume
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of Release Date
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Set the value of Release Date
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Get the value of Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of Category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of Available
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set the value of Available
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get the value of Borrower
     */
    public function getBorrower()
    {
        return $this->borrower;
    }

    /**
     * Set the value of Borrower
     */
    public function setBorrower($borrower)
    {
        $this->borrower = $borrower;

        return $this;
    }

    /**
     * Get the value of Date Return
     */
    public function getDateReturn()
    {
        return $this->dateReturn;
    }

    /**
     * Set the value of Date Return
     */
    public function setDateReturn($dateReturn)
    {
        $this->dateReturn = $dateReturn;

        return $this;
    }

} ?>
