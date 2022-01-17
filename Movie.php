<?php

class Movie {
   public $title;
   public $year;
   public $director;
   public $actors;
   public $genre;

   public function __construct($_title, $_year)
   {
      $this->title = $_title;   
      $this->year = $_year;
   }
}