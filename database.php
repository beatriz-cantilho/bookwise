<?php 

class DB {
    private $database;

    public function __construct()
    {
        $this->database = new PDO('sqlite:bookwise.db');
        
    }

    public function fetchAllBooks() {
        $query = $this->database->query("select * from books");
        $items =  $query->fetchAll();

        return array_map(fn($item) => Book::make($item), $items);
    }

    public function fetchBookById($id) {
        $query = $this->database->query("SELECT * FROM books WHERE id = " . $id);
        $items = $query->fetchAll();

        return array_map(fn($item) => Book::make($item), $items)[0];
    }
}