<?php 

$book = (new DB)->fetchBookById($_REQUEST['id']);

view('book', compact('book'));
