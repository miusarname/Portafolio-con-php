<?php

class conection
{
    public $server = 'localhost:49674';
    public $user = "root";
    public $password = "";

    public $conection;


    public function __construct()
    {

        try {
            $this->conection= new PDO("mysql:host=" . $this->server . ";dbname=album", $this->user, $this->password);
            $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'error' . $e;
        }
    }
    public function execut($I)//Insertar/actualizar/Eliminar
    {
        $this->conection->exec($I); 
        return $this->conection->lastInsertId();
    }
    public function consult($sql)
    {
        $sentence = $this->conection->prepare($sql);
        $sentence->execute();
        return $sentence->fetchAll();
    }
}


?>