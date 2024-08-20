<?php

namespace app\tree;

class Node
{
    protected $value;
    protected $right;
    protected $left;

    public function  __construct($data)
    {
        $this->value = $data;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function left($left)
    {
        $this->left = $left;
        return $this;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function getRight()
    {
        return $this->right;
    }
    public function right($right)
    {
        $this->right = $right;
        return $this;
    }

    public function isLeaf()
    {
        return $this->left  == null && $this->right == null;
    }
}
