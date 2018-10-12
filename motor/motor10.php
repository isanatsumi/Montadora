<?php

require_once 'interfaceMotor.php';

/**
 * Description of motor10
 *
 * @author Isabela
 */
class motor10 implements interfaceMotor {
    
    private $ligado = false;
    private $potencia = 0;
    
    /*
     * Acelera o motor
     * @param Integer $potencia
     */
    public function acelerar($potencia) {
        
        $this->potencia = $potencia;
        
    }

    
    /*
     * Desliga o motor
     */
    public function desligar() {
        
        $this->ligado = FALSE;
        
    }

    /*
     * Liga o motor
     * 
     */
    public function ligar() {
        
       $this->ligado = TRUE;
        
    }

    
}
