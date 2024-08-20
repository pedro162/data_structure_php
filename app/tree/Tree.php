<?php

namespace app\tree;

use app\tree\Node;
use app\linked_list\LinkedList;
use app\queue\Queue;

class Tree
{
    protected $root;

    public function getRoot()
    {
        return $this->root;
    }

    public function addNode($value): void
    {
        try {
            if ($this->root == null) $this->root = new Node($value);
            else {
                $newNode = new Node($value);
                $queue = new Queue($this->root);
                while ($queue->getLength() > 0) {
                    $currentNode = $queue->dequeue()->getValue();
                    if (!$currentNode->getLeft()) {
                        $currentNode->left($newNode);
                        break;
                    } else {
                        $queue->enqueue($currentNode->getLeft());
                    }

                    if (!$currentNode->getRight()) {
                        $currentNode->right($newNode);
                        break;
                    } else {
                        $queue->enqueue($currentNode->getRight());
                    }
                }
            }
        } catch (\Exception $ex) {
        } catch (\Error $ex) {
        }
    }

    public function BFS()
    {
        try {
            if ($this->root) {
                $queue = new Queue($this->root);
                while ($queue->getLength() > 0) {
                    $node = $queue->dequeue()->getValue();
                    if (($left = $node->getLeft())) $queue->enqueue($left);
                    if (($right = $node->getRight())) $queue->enqueue($right);
                    print($node->getValue() . '<br/>');
                }
            }
        } catch (\Exception $ex) {
        } catch (\Error $ex) {
        }
    }
}
