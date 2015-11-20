<?php
  $books = array(
    "Ready Player 1",
    "Moby Dick",
    "Blade Runner",
    "Catcher in The Rye",
  );
  $paths = explode('/',$_SERVER['REQUEST_URI']);

  //print "<pre>".print_r($paths,true)."</pre>";

  if($_SERVER['REQUEST_METHOD'] == "GET"){
    if((!isset($paths[2]) && ($paths[1]=="books"))){
      print json_encode($books);
    }

  }
