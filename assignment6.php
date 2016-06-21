<?php


class Book {

   private $title ='';
   private $author='';

    public function __construct($title,$author){
        $this->title=$title;
        $this->author=$author;
    }

    public function get_title() {
        return $this->title;
    }

    public function get_author() {
        return $this->author;
    }
}

class ExtenedBook {
  private $title_author='';
    public function __construct($book){
        $this->title_author=$book->get_title(). '--'. $book->get_author();
    }
    public function get_all()
    {
      echo $this->title_author;
    }
}

$book_obj = new Book('math',' sanjeeb');
$ExtenedBook_obj = new ExtenedBook($book_obj);
$ExtenedBook_obj->get_all();