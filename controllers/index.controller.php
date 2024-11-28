<?php 

$books = (new DB)->fetchAllBooks();

view('index', compact('books'));

