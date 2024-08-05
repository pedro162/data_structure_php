<?php

namespace app\queue;


class Queue
{
    #Concept
    #https://pt.wikipedia.org/wiki/Lista_ligada
    protected $first;
    protected $last;
    protected int $queue_length = 0;

    public function __construct(string $value)
    {
        $newNode = new Node($value);
        $this->first = $newNode;
        $this->last = $newNode;
        $this->queue_length += 1;
    }

    public function enqueue(string $value)
    {
        $newNode = new Node($value);
        if ($this->queue_length == 0) {
            $this->first = $newNode;
            $this->last = $newNode;
        } else {
            $this->last->next($newNode);
            $this->last = $newNode;
        }

        $this->queue_length++;

        return $this;
    }

    public function dequeue()
    {
        if ($this->queue_length == 0) return null;

        $temp = $this->first;
        if ($this->queue_length == 1) {
            $this->first = null;
            $this->last = null;
        } else {
            $this->first = $this->first->getNext();
            $temp->next(null);
        }

        $this->queue_length--;
        return $temp;
    }

    public function print()
    {
        print('====================== LIST ======================<br/>');
        try {

            $temp = $this->first;
            while ($temp) {
                print($temp->getValue() . '<br/>');
                $temp = $temp->getNext();
            }
        } catch (\Exception $ex) {
        } catch (\Error $ex) {
        }
        print('====================== LIST ======================<br/>');
    }
}
