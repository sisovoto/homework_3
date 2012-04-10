<?php
include_once('SimpleBook.php');
  
  class BookAdapter {


    private $book;


    function __construct(SimpleBook $book_in) {
      $this->book = $book_in;
    }


    function getAuthorAndTitle() {
      return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }


  }
?>