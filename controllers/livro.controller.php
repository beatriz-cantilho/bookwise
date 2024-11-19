<?php 

require 'dados.php';

$bookId = $_REQUEST['id'];

$filteredBook = array_filter($books, function($book) use($bookId) {
    return $book['id'] == $bookId;
});

//$filteredBook = array_filter($books, fn($book) => $book['id'] == $bookId); função mais simples php 7.4
$bookDetail = array_pop($filteredBook);

view('livro', compact('books'));
