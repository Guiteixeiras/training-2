<?php
/*
class Lampada
{
    
    public  $modelo;
    private  $cor;
    protected  $interrupitor;

    public function ligar()
    {
        $this->interrupitor = true;
    }
    public  function desligar()
    {
        $this->interrupitor = false;
    }
   private function mudar_cor(){
    if ($this->interrupitor == true) {
        echo "Estou da cor $this->cor agora";
    }else {
        echo "Estou desligada agora";
    }
        
    }

}
*/
class Caneta {
    public $modelo;
    private $ponta;
    public function getModelo() {
      return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }
}