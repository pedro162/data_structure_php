<?php

namespace app\stack;

use app\stack\Node;

class Stack
{
    protected $top;
    protected $height;

    public function __construct($value)
    {
        $newStack = new Node($value);
        $this->top = $newStack;
        $this->height += 1;
    }

    public function push($value)
    {
        $newStack = new Node($value);
        if ($this->height() == 0) {
            $this->top = $newStack;
        } else {
            $newStack->next($this->top);
            $this->top = $newStack;
        }
        $this->height += 1;
        return $this;
    }

    public function pop()
    {
        if ($this->height() == 0) return null;

        $temp = $this->top;
        $this->top = $this->top->getNext();
        $temp->next(null);
        $this->height--;
        return $temp;
    }

    public function peek()
    {
        if (!($this->height() > 0)) return null;
        return $this->top->getValue();
    }
    public function isEmpty()
    {
        return $this->height() > 0;
    }

    public function print()
    {
        if (!($this->height() > 0)) return null;

        print('================ STACK ============================<br/>');
        $temp = $this->top;
        while ($temp != null) {
            echo $temp->getValue() . '<br/>';
            $temp = $temp->getNext();
        }
        print('================ STACK ============================<br/>');
    }

    public function height()
    {
        return $this->height;
    }
}
