<?php

// Heaps orderna o item assim que são inseridos

$maxHeap = new SplMaxHeap();
$maxHeap->insert(9);
$maxHeap->insert(7);
$maxHeap->insert(3);
$maxHeap->insert(8);
$maxHeap->insert(6);

var_dump($maxHeap);


$minHeap = new SplMinHeap();
$minHeap->insert(9);
$minHeap->insert(7);
$minHeap->insert(3);
$minHeap->insert(8);
$minHeap->insert(6);

var_dump($minHeap);