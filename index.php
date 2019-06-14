<?php
require_once 'src/utils.php';
require_once 'src/MyNeuralNetwork.php';

$network = new NeuralNetwork();
$x = [2, 3];
echo $network->feedForward($x)[0] . PHP_EOL;