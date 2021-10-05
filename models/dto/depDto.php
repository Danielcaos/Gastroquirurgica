<?php

class depDto{

public $id;
public $nombre;

public function __construct($id, $nombre){
    $this->id = $id;
    $this->nombre = $nombre;
}

public function getId(){
    return $this->id;
}

public function setId($id){
    $this ->nombre = $id;
}

public function getNombre(){
    return $this->nombre;
}

public function setNombre($nombre){
    $this ->nombre = $nombre;
}

}

?>