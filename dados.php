<?php

$database = new PDO('sqlite:bookwise.db');

$query = $database->query("select * from books");

$books = $query->fetchAll();

?>