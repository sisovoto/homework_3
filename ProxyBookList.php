<?php
include_once('Book.php');
  include_once('BookList.php');


  class ProxyBookList {
      
    private $bookList = NULL; 
    
    //bookList is not instantiated at construct time
    function __construct() {
    }


    function getBookCount() {
      if (NULL == $this->bookList) {
        $this->makeBookList(); 
      }
      return $this->bookList->getBookCount();
    }


    function addBook($book) {
      if (NULL == $this->bookList) {
        $this->makeBookList(); 
      }
      return $this->bookList->addBook($book);
    }  


    function getBook($bookNum) {
      if (NULL == $this->bookList) {
        $this->makeBookList();
      } 
      return $this->bookList->getBook($bookNum);
    }


    function removeBook($book) {
      if (NULL == $this->bookList) {
        $this->makeBookList();
      } 
      return $this->bookList->removeBook($book);
    }
    
    //Create 
    function makeBookList() {
      $this->bookList = new bookList();
    }


  }
?>