<?php

namespace app\queue;


class Node
{
    protected $value;
    protected $next;

    public function  __construct($data)
    {
        $this->value = $data;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function next($value)
    {
        return $this->next = $value;
    }

    public function getNext()
    {
        return $this->next;
    }
}
