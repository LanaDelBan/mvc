<?php
namespace App\Controller;
use Scr \classes \ClassReander;
use Src \ interface \ interfaceView;
class ControllerHome extends classReander implements {
    public function __construct(){
        $this ->StTittle("pagina inicial");
        $this ->SetDescription("esse é o nosso site MVC");
        $this ->setKeywords("esse e nosso site");
        $this ->reanderLayout();
    }
}