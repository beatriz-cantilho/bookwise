<?php 

$search = $_REQUEST['search'] ?? '';

$books = (new DB)->fetchAllBooks($search);

view('index', compact('books'));

