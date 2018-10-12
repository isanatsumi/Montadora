<?php

require_once './motor/interfaceMotor.php';

/*
 *Classe base para carros 
 *@author Isabela
 */
//nome do arquivo igual ao nome da class
abstract class Carro {
    
    //constante - estatico
    const POTENCIA = 1.0;
    const PESO = 1000;
    
    public $cor = "Branco";
    private $combustivel = "gasolina";
    //protected os filhos podem usar
    protected $qtdCombustivel = 0;
    private $velocidade = 0;
    private $kilometragem = 0;
    private $ligado = false;
    private $direcao = "centro";
    
    private $motor;
    
    /*
     * Construtor do carro
     * @param string $cor
     */
    public function __construct($cor = "Branco", interfaceMotor $motor) {
        
        $this->cor = $cor;
        $this->motor = $motor;
        
    }

    /*
     * Liga o carro
     */
    public function ligar(){
        
        if($this->qtdCombustivel > 0){
            
            $this->motor->ligar();
        }
    }
    
    /*
     * Desliga o carro 
     */
    public function desligar(){
        $this->motor->desligar();
    }
    
    /*
     * Acelera o carro
     */
    public function acelerar($valor){
            $this->velocidade = $valor * self::POTENCIA;
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
        
        $this->direcao = $direcao;
        
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
    //static pode ser utilizado pelo filho
    static public function obterPotencia(){
        
        
        
    }
    
}

