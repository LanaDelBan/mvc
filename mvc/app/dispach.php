<?php
namespace App;

use Src\Classes\ClassRoutes;

class Dispach extends ClassRoutes{

private $Method;
private $Param=[];
private $Obj;



    public function __construct(){
            self::addController();
    }

    private function addController(){
        $ROTAController=$this->getRota();
        $NameS="app\\Controller\\{$RotaController}";
        $this->Obj=new $NameS;
    }

    private function addMethod(){

    }

    private function addParam(){

    }

}