<?php

require 'Validation.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $validation = Validation::verify([
        'name' => ['required'],
        'email' => ['required', 'email', 'confirmed'],
        'password' => ['required', 'min:8', 'max:30', 'strong'],
    ], $_POST);

    if($validation->failValidation()){
        $_SESSION['validations'] = $validation->validations;
        header('location: /login');
        exit();
    }

    if(sizeof($validations) > 0){
        view('login', compact('validations'));
        exit();
    }

    $database->query(
        query: "insert into users (name, email, password) values (:name, :email, :password)",
        params: [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]
    );
}