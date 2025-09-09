<?php
//Programa para imprimir mensaje de Bienvenida
//Creado por Carlos Valentin Castruita Garcia
//Fecha:09/septiembre/2025
//appweb1.php
class texto
{
    public $texto1="Bienvenidos a Programacion de App Web";
    public function imprimirtexto()
    {
        echo $this->texto1."<br>";
        print $this->texto1;
    }
}
$obj1=new texto;
$obj1->imprimirtexto();
?>