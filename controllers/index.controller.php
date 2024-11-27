<?php 

$db = new DB();
$books = $db->fetchAllBooks();

view('index', compact('books'));

