<?php 

class DB {
    public function fetchAllBooks() {
        $database = new PDO('sqlite:bookwise.db');
        $query = $database->query("select * from books");
        return $query->fetchAll();
    }
}