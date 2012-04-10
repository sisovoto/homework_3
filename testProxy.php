<?php
include_once('ProxyBookList.php');
  include_once('Book.php');


  define('BR', '<'.'BR'.'>');


  echo 'BEGIN TESTING PROXY PATTERN'.BR;
  echo BR;
  
  $proxyBookList = new ProxyBookList();
  
  $inBook = new Book('PHP for Cats','Larry Truett');
  
  $proxyBookList->addBook($inBook);
  
  echo 'test 1 - show the book count after a book is added'.BR;
  echo $proxyBookList->getBookCount();
  echo BR.BR;
    
  echo 'test 2 - show the book'.BR;
  $outBook = $proxyBookList->getBook(1);
  echo $outBook->getAuthorAndTitle(); 
  echo BR.BR;
  
  $proxyBookList->removeBook($outBook);
  
  echo 'test 3 - show the book count after a book is removed'.BR;
  echo $proxyBookList->getBookCount();
  echo BR.BR;


  echo 'END TESTING PROXY PATTERN'.BR;
?>