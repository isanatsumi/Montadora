<?php
/*
 *Classe base para carros 
 *@author Isabela
 */
//nome do arquivo igual ao nome da class
class Carro {
    public $cor = "Branco";
    private $peso = 1000;
    private $combustivel = "gasolina";
    private $qtdCombustivel = 0;
    private $velocidade = 0;
    private $kilometragem = 0;
    private $potencia = 1.0;
    private $ligado = false;
    private $direcao = 
    
    /*
     * Construtor do carro
     * @param string $cor
     */
    public function __construct($cor = "Branco") {
        
        $this->cor = $cor;
        echo "Carro pronto!\n\n";
    }

    /*
     * Liga o carro
     */
    public function ligar(){
        
        if($this->qtdCombustivel > 0){
            $this->ligado = true;
        }
    }
    
    /*
     * Desliga o carro 
     */
    public function desligar(){
        $this->ligado = false;
    }
    
    /*
     * Acelera o carro
     */
    public function acelerar($valor){
            $this->velocidade = $valor * $this->potencia;
            $this->alimentarCombustivel();
            $this->kilometragem += $this->velocidade;
        
    }
    
    /*
     * Freia o carro
     */
    public function freiar(){
        
        $this->acelerar(0);
        
    }
    
    /*
     * Abastece o carro
     * @param float $quant Quantidade em litros
     */
    public function abastecer($quant){
        
        $this->qtdCombustivel += $quant;
    }

    /*
     * Vira as rodas
     * @param string $direcao valores permitidos: centro | direita | esquerda
     */
    public function virar($direcao){
        
        $this->$direcao = $direcao;
        
    }
    
    /*
     * Bomba de combudtivel
     */
    private function alimentarCombustivel(){
        if($this->qtdCombustivel > 0){
            $quant = $this->potencia * $this->peso * $this->velocidade;
            $this->qtdCombustivel -= $quant / 6000;
            
        }else {
            $this->desligar();
        }
    }
    
}

