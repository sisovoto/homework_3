<?php
  include_once('SimpleBook.php');
  include_once('BookAdapter.php');


  define('br', '<br>');


  echo 'BEGIN TESTING ADAPTER PATTERN'.br;
  echo br;


  $book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides",
                         "Design Patterns");
  
  $bookAdapter = new BookAdapter($book);
  
  echo 'Author and Title: '.$bookAdapter->getAuthorAndTitle();


  echo br.br;
  echo 'END TESTING ADAPTER PATTERN'.br;
?>