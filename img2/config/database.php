<?php

class Database
{
    private $hostname = "localhost";
    private $database = "tienda_online";
    private $username = "root";
    private $password = "Wraprocki12@21";
    private $charset = "localhost";

    function conectar()
    {
        try{
        $conexion = "mysql:host=". $this->hostname . "; dbname=" . $this->database .
        "charset=" . $this->charset; 
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        $pdo = new PDO($conexion,$this->username,$this->password, $options);

        return $pdo;
        }catch(PDOException $e){
            echo 'Eror conexion' . $e -> getMessage();
            exit;
        }
    }
}