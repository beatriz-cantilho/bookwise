<?php 

//representação de um registro do bd em forma de classe
class Book {
    public $id;
    public $title;
    public $author;
    public $description;


    //static é quando a funcao pode ser chamada sem a necessidade de se criar um obj
    public static function make($item) {
        $book = new self();
        $book->id = $item['id'];
        $book->title = $item['title'];
        $book->author = $item['author'];
        $book->description = $item['description'];

        return $book;
    }
}