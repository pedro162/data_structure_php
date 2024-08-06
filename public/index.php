<?php

use app\linked_list\LinkedList;
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

$position = 4;
echo 'Position: ' . $queue->get($position) . '<br/>';
$queue->print();
//---Dequeue ----
$queue->dequeue();

$queue->print();


//----------------------- LINED-LIST --------------------------

$linkedList = new LinkedList('1');
$linkedList->append('2')
    ->append(3)
    ->append(4)
    ->append(5);

$position = 4;
echo 'Position: ' . $linkedList->get($position)->getValue() . '<br/>';
$linkedList->print();
//---remove first ----
$linkedList->removeFirst();

$linkedList->print();

$linkedList->removeLast();
$linkedList->set(2, 9);

$linkedList->print();
//----------------------- STACK --------------------------

//----------------------- TREE --------------------------

//----------------------- BST TREE --------------------------