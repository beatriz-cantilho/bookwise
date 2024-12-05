<?php 

class DB {
    private $database;

    public function __construct()
    {
        $this->database = new PDO('sqlite:bookwise.db');
        
    }

    public function query($query, $class = null, $params = []) {
        $prepare = $this->database->prepare($query);
        if($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        $prepare->execute($params);

        return $prepare;
    }
}