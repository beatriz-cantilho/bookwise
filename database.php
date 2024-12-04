<?php 

class DB {
    private $database;

    public function __construct()
    {
        $this->database = new PDO('sqlite:bookwise.db');
        
    }

    public function fetchAllBooks($search = null) {
        $prepare = $this->database->prepare("select * from books where title like :search or author like :search or description like :search");
        $prepare->bindValue('search', "%$search%");
        $prepare->setFetchMode(PDO::FETCH_CLASS, Book::class);
        $prepare->execute();

        return $prepare->fetchAll();

        //return array_map(fn($item) => Book::make($item), $items);
    }

    public function fetchBookById($id) {
        $query = $this->database->prepare("SELECT * FROM books WHERE id = :id ");
        $query->bindValue('id', $id);
        $query->setFetchMode(PDO::FETCH_CLASS, Book::class);
        $query->execute();
        return $query->fetch();

        //return array_map(fn($item) => Book::make($item), $items)[0];
    }
}