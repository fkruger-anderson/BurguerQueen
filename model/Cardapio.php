<?php

class Cardapio
{
    private static int $idCardapio = 1;
    private string $nomeCardapio;
    private $dataInclusaoCardapio;
    private bool $temIgrediente;
    private bool $ehAtivoCardapio = true;
    
    public function __construct(string $nomeCardapio, $dataInclusaoCardapio, bool $temIgrediente) {
        $this->validarNome($nomeCardapio);
        $this->dataInclusaoCardapio = $dataInclusaoCardapio;
        $this->temIgrediente = $temIgrediente;
        Cardapio::$idCardapio++;
    }
    
    //get e set
    
    public function setNomeCardapio(String $nomeCardapio): void {
        $this->validarNome($nomeCardapio);
    }
    
    public function setTemIgrediente(bool $temIgrediente): void {
        $this->temIgrediente = $temIgrediente;
    }
    
    public function setEhAtivoCardapio(bool $ehAtivoCardapio): void {
        $this->ehAtivoCardapio = $ehAtivoCardapio;
    }
    
    /*public stataic function getIdCardapio(): int {
     return Conta::$idCardapio;
     }*/
    
    public function getNomeCardapio(): String {
        return $this->nomeCardapio;
    }
    
    public function getDataInclusaoCardapio(){
        return $this->dataInclusaoCardapio;
    }
    
    public function getTemIgrediente(): bool {
        return $this->temIgrediente;
    }
    
    public function getEhAtivoCardapio(): bool {
        return $this->ehAtivoCardapio;
    }
    
    //Validar dados
    
    private function validarNome(String $nomeCardapio){
        if (strlen($nomeCardapio) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
    
    //métodos
  
}