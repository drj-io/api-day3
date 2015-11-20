<?php

$books = array(
  "Ready Player 1",
  "Moby Dick",
  "Blade Runner",
  "Catcher in The Rye",
);

require __DIR__ . '/vendor/autoload.php';

Flight::route('GET /books/', function(){
  global $books;
  print json_encode($books);
});

Flight::route('GET /books/@id', function($id){
  global $books;
  print json_encode($books[$id]);
});

Flight::route("POST /books/", function(){
  global $books;

  $books[]=$_POST['name'];
  print json_encode($books);
});



Flight::start();
