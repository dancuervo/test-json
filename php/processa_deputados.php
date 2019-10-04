<?php

class Deputados{

    //propiedades

    public $origen;
    public $destino;
    
    //metodos
    function definir_origen($origen){
        $this -> origen = $origen;
    }
    function definir_destino($destino){
        $this -> destino = $destino;
    }

    function definir_origen(){
        return $this -> origen;
    }
    function definir_destino(){
        return $this -> destino;
    }

    function obtener_deputados(){        
        return file_get_contents($this -> definir_origen());
    }

    function guardar_deputados(){
        return file_put_contents($this -> definir_destino());
    }

}

$archivo = new Deputados();
$archivo -> definir_origen("https://raw.githubusercontent.com/dancuervo/palantir/master/archivo/archivado.JSON");
$archivo -> definir_destino('./camaraFederal/deputados.json');
/*
$origin = "https://raw.githubusercontent.com/dancuervo/palantir/master/archivo/archivado.JSON";
$destination = './camaraFederal/deputados.json';
$get_file = file_get_contents( $url , "a") or die("Unable to open file!");
$put_file = file_put_contents($destination);
# https://www.php.net/manual/en/function.file-put-contents.php
*/
print "Hecho!";
?>