<?php
require_once 'utils.php';

class Neuron {
	private $weights;
	private $bias;
	
	function __construct( array $weights, $bias ){
		$this->weights = $weights;
		$this->bias = $bias;
	}
	
	public function feedForward( array $inputs ){
		$t = dotp( $this->weights, $inputs ) + $this->bias;
		return sigmoid( $t );
	}
	
}
