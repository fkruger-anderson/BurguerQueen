<?php

/**
 * @author RICARDO AUGUSTO
 *
 */

class Produto
{
    private static int $idProduto = 1;
    private string $nomeProduto;
    private float $precoProduto;
    private string $descricaoProduto;
    private string $fotoProduto;
    private $dataInclusaoProduto;
    private bool $ehAtivoProduto;
    
    
    public function __construct(string $nomeProduto, float $precoProduto, string $descricaoProduto, string $fotoProduto, string $dataInclusaoProduto, bool $ehAtivoProduto) {
        $this->validarNome($nomeProduto);
        $this->precoProduto = $precoProduto;
        $this->descricaoProduto = $descricaoProduto;
        $this->fotoProduto = $fotoProduto;
        $this->dataInclusaoProduto = $dataInclusaoProduto;
        $this->ehAtivoProduto = $ehAtivoProduto;
        Usuario::$idUsuario++;
    }
    
    //GET e SET 
    
    public static function getIdProduto()
    {
        return Produto::$idProduto;
    }

    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    public function getPrecoProduto()
    {
        return $this->precoProduto;
    }

    public function getDescricaoProduto()
    {
        return $this->descricaoProduto;
    }

    public function getFotoProduto()
    {
        return $this->fotoProduto;
    }

    public function getDataInclusaoProduto()
    {
        return $this->dataInclusaoProduto;
    }

    public function getEhAtivoProduto()
    {
        return $this->ehAtivoProduto;
    }
    
    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
    }
    
    public function setPrecoProduto($precoProduto)
    {
        $this->precoProduto = $precoProduto;
    }
    
    public function setDescricaoProduto($descricaoProduto)
    {
        $this->descricaoProduto = $descricaoProduto;
    }
    
    public function setFotoProduto($fotoProduto)
    {
        $this->fotoProduto = $fotoProduto;
    }
    
    public function setEhAtivoProduto($ehAtivoProduto)
    {
        $this->ehAtivoProduto = $ehAtivoProduto;
    }
    
    //Validar dados
    
    private function validarNome(String $nomeUsuario){
        if (strlen($nomeUsuario) < 3){
            echo "Nome precisa ter 3 ou mais caracteres";
        }
    }

    
    
    
  
}