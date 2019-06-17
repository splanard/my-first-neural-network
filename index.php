<?php
require_once 'src/utils.php';
require_once 'src/FullyConnectedNeuralNetwork.php';

// Neural network with 2 inputs, 1 hidden layers with 2 neurons and an output layer with 1 neuron
$network = new FullyConnectedNeuralNetwork(2, [2], 1);
$x = [2, 3];
echo $network->feedForward($x)[0] . PHP_EOL;