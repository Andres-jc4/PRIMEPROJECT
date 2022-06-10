<?php
class Operaciones
{
	public $n1;
	public $n2;
	public $resultado;
	function __construct(){
	$this->n1=10;
	$this->n2=25;
	}
	
	function sumas(){

		return $this->resultado=$this->n1+$this->n2;
		
	}
	function resta(){
		return $this->resultado=$this->n1-$this->n2;
	}
	function multi(){
		return $this->resultado=$this->n1*$this->n2;
	}
	function divi(){
		return $this->resultado=$this->n1/$this->n2;
	}

		
	

}

$Operaciones=new Operaciones();
echo $Operaciones->resta();