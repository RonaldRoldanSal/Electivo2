<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of curso
 *
 * @author LabCom
 */
class curso {
    
   var $codigo;
    var $nombre;
    var $horas;
    var $creditos;
    
    function getCodigo(){
		return $this->codigo;
	}

	function setCodigo($codigo){
		$this->codigo = $codigo;
	}

	function getNombre(){
		return $this->nombre;
	}

	function setNombre($nombre){
		$this->nombre = $nombre;
	}

	function getHoras(){
		return $this->horas;
	}
        
        function setHoras($horas){
		$this->horas = $horas;
	}
        
        function getCreditos(){
		return $this->creditos;
	}
        
        function setCreditos($creditos){
		$this->creditos = $creditos;
	}
}
