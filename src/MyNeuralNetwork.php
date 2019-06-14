<?php
require_once 'FullyConnectedLayer.php';

class MyNeuralNetwork {
	
	private $hidden;
	private $output;
	
	function __construct(){
		// Architecture: 2 inputs, 2 hidden, 1 output
		// Hidden layer with 2 neurons, 2 in and 1 out
		$this->hidden = new FullyConnectedLayer(2, 2, 1);
		// Output layer with 1 neuron, 2 in and 0 out
		$this->output = new FullyConnectedLayer(1, 2, 0);
	}
	
	public function feedForward( $inputs ){
		$h = $this->hidden->feedForward( $inputs );
		$o = $this->output->feedForward( $h );
		return $o;
	}
}
