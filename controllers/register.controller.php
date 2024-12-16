<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $validations = [];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $emailConfirmation = $_POST['email-confirmation'];
    $password = $_POST['password'];

    if(strlen($name == 0)){
        $validations []= 'O nome é obrigatório.';
    }

    if(strlen($email == 0)){
        $validations []= 'O email é obrigatório.';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validations []= 'O email é inválido';
    }

    if(strlen($email != $emailConfirmation)){
        $validations []= 'O email de confirmação está diferente.';
    }

    if(strlen($password == 0)){
        $validations []= 'A senha é obrigatória.';
    }

    if(strlen($password < 8 || strlen($password) > 30)){
        $validations []= 'A senha precisa ter enter 8 e 30 caracteres.';
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