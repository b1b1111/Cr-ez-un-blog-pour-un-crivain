<?php 

class Manager {

    protected function dbConnect() { //protected  est identique à  private, mais il autorise quand même les classes filles à appeler la fonction.
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        
        return $db;  
    }
}