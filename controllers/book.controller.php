<?php 

$id = $_REQUEST['id'];
$book = (new DB)->fetchBookById($id);

view('book', compact('book'));
