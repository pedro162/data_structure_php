<?php

use app\linked_list\LinkedList;
use app\queue\Queue;
use app\stack\Stack;
use app\tree\Tree;

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
    ->append(5)
    ->append(6)
    ->append(7)
    ->append(8);

$position = 4;
echo 'Position: ' . $linkedList->get($position)->getValue() . '<br/>';
$linkedList->print();
//---remove first ----
$linkedList->removeFirst();

$linkedList->print();

$linkedList->removeLast();
$linkedList->set(2, 9);
$linkedList->print();
$linkedList->remove(3);
echo 'Last position:  ' . $linkedList->get($linkedList->length() - 1)->getValue() . '<br/>';

$linkedList->print();

$linkedList->makeEmpty();

$linkedList->print();
//----------------------- STACK --------------------------

$stack = new Stack('1');
$stack->push('2')
    ->push(3)
    ->push(4)
    ->push(5)
    ->push(6)
    ->push(7)
    ->push(8);

echo 'Top: ' . $stack->peek() . '<br/>';

$stack->print();
echo 'height: ' . $stack->height() . '<br/>';
$pop = $stack->pop();
echo 'pop: ' . $pop->getValue() . '<br/>';
$stack->print();
echo 'height: ' . $stack->height() . '<br/>';

//----------------------- TREE --------------------------
echo '================ TREE ============================<br/>';

$tree = new Tree();
for ($i = 1; $i <= 15; $i++) {
    $tree->addNode($i);
}
echo 'Root value: ' . $tree->getRoot()->getValue() . '<br/>';
echo 'Root left value: ' . $tree->getRoot()->getLeft()->getValue() . '<br/>';
echo 'Root right value: ' . $tree->getRoot()->getRight()->getValue() . '<br/>';
$tree->BFS();

//----------------------- BST TREE --------------------------