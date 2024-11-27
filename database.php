<?php 

class DB {
    public function fetchAllBooks() {
        $database = new PDO('sqlite:bookwise.db');
        $query = $database->query("select * from books");
        $items =  $query->fetchAll();
        $queried = [];

        foreach($items as $item) {
            $book = new Book;
            $book->id = $item['id'];
            $book->title = $item['title'];
            $book->author = $item['author'];
            $book->description = $item['description'];

            $queried []= $book;
        }

        return $queried;
    }
}