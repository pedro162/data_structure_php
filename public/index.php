<?php

use app\queue\Queue;

require_once __DIR__ . '/../bootstrap/ApplicationLoader.php';

$loader = new ApplicationLoader();
$loader->register();


//----------------------- LIST --------------------------
$queue = new Queue('1');
$queue->enqueue('2')
    ->enqueue(3)
    ->enqueue(4)
    ->enqueue(5);
$queue->print();
//---Dequeue ----
$queue->dequeue();

$queue->print();

//----------------------- STACK --------------------------

//----------------------- TREE --------------------------

//----------------------- BST TREE --------------------------