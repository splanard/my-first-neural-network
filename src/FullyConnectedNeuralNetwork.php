<?php
require_once 'FullyConnectedLayer.php';

class FullyConnectedNeuralNetwork {
	
	/** @var array Hidden layers */
	private $hidden = array();
	private $output;
	
	/**
	 * Instanciate a full y connected neural network.
	 * 
	 * @param int $input The number of inputs.
	 * @param array $hidden The number of neurons for each hidden layer. 
	 * So the size of the array will be the number of hidden layers.
	 * @param int $output The number of neurons for the output layer.
	 */
	function __construct( $input, array $hidden, $output ){
		// Create hidden layers
		$nb_hidden = count($hidden);
		$neurons = array_merge( [$input], $hidden, [$output] );
		for( $i=1; $i <= $nb_hidden; $i++ ){
			$this->hidden[] = new FullyConnectedLayer($neurons[$i-1], $neurons[$i], $neurons[$i+1]);
		}
		
		// Create output layer
		$this->output = new FullyConnectedLayer($hidden[$nb_hidden-1], $output, 0);
	}
	
	public function feedForward( $inputs ){
		$h = $inputs;
		foreach($this->hidden as $hl){
			$h = $hl->feedForward( $h );
		}
		$o = $this->output->feedForward( $h );
		return $o;
	}
}
