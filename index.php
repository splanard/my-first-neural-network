<?php
require_once 'src/utils.php';
require_once 'src/FullyConnectedNeuralNetwork.php';

// Male/female example
// @see https://victorzhou.com/blog/intro-to-neural-networks/
$data = [
  [-2, -1],  # Alice
  [25, 6],   # Bob
  [17, 4],   # Charlie
  [-15, -6], # Diana
];
$y_trues = [
  1, # Alice
  0, # Bob
  0, # Charlie
  1, # Diana
];
$network = new FullyConnectedNeuralNetwork(2, [2], 1);
$network->train($data, $y_trues, 0.1, 1000);

$emily = [-7, -3]; # 128 pounds, 63 inches
echo "Emily: ".$network->feedforward($emily)[0].PHP_EOL;
$frank = [20, 2];  # 155 pounds, 68 inches
echo "Franck: ".$network->feedforward($frank)[0].PHP_EOL;