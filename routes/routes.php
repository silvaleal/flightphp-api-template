<?php 

Flight::route('/', function() {
  Flight::json(['hello' => 'world']);
});
