<?php
require_once 'utils.php';
require_once 'Neuron.php';

class FullyConnectedLayer {
	
	private $neurons = array();
	
	function __construct( $nb_in, $nb_neurons, $nb_out ){
		for( $i=0, $maxi=$nb_neurons; $i<$maxi; $i++ ){
			$weights = [0, 1];
			// $weights = xavier_init($nb_in, $nb_in, $nb_out);
			$bias = 0;
			$this->neurons[] = new Neuron( $weights, $bias );
		}
	}
	
	function feedForward( array $inputs ){
		foreach($this->neurons as $n){
			$outputs[] = $n->feedForward( $inputs );
		}
		return $outputs;
	}
	
}
