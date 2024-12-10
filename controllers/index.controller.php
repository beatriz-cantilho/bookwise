<?php 

$search = $_REQUEST['search'] ?? '';

$books = $DB->query(
    query: "select * from books where title like :search", 
    class: Book::class, 
    params: ['search' => "%$search%"]
    )
    ->fetchAll();

view('index', compact('books'));

