<?php

namespace app\linked_list;

class Node
{
    protected $value;
    protected $next;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function next($next)
    {
        $this->next = $next;
        return $this;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function value($value)
    {
        $this->value = $value;
        return $this;
    }
}
