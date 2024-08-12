<?php

namespace app\tree;

class Node
{
    protected $value;
    protected $right;
    protected $left;

    public function  __construct(string $data)
    {
        $this->value = $data;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function isLeaf()
    {
        return $this->left  == null && $this->right == null;
    }
}
