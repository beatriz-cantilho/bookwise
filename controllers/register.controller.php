<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $database->query(
        query: "insert into users (name, email, password) values (:name, :email, :password)",
        params: [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]
    );
}