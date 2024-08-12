<?php

namespace app\linked_list;

use app\linked_list\Node;

class LinkedList
{
    protected $head;
    protected $tail;
    protected $length = 0;

    public function __construct($value)
    {
        $newNode = new Node($value);
        $this->head = $newNode;
        $this->tail = $newNode;
        $this->length++;
    }

    public function getHead()
    {
        if ($this->length == 0) {
            return null;
        }

        return $this->head->getValue();
    }

    public function getTail()
    {
        if ($this->length == 0) {
            return null;
        }
        return $this->tail->getValue();
    }

    public function get($position)
    {
        if (!($position > 0 && $this->length >= $position)) {
            return null;
        }

        $temp = $this->head;
        $counter = 0;

        while ($counter <= $position) {
            if ($counter == $position) {
                return $temp;
            }
            if ($temp) {
                $temp = $temp->getNext();
            }
            $counter++;
        }

        return null;
    }

    public function prepend($value)
    {
        $newNode = new Node($value);
        if ($this->length == 0) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $temp = $this->head;
            $newNode->next($temp);
            $this->head = $newNode;
        }

        $this->length++;
    }

    public function append($value)
    {
        $newNode = new Node($value);
        if ($this->length == 0) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->tail->next($newNode);
            $this->tail = $newNode;
        }

        $this->length++;
        return $this;
    }

    public function removeFirst()
    {
        if (!($this->length > 0)) return null;

        $temp = $this->head;
        $this->head = $this->head->getNext();
        $temp->next(null);
        $this->length--;

        if ($this->length == 0) {
            $this->head = null;
            $this->tail = null;
        }

        $temp;
    }

    public function removeLast()
    {
        if (!($this->length > 0)) return null;

        $pre = $this->head;
        while ($pre->getNext() != $this->tail) {
            $pre = $pre->getNext();
        }

        $temp = $this->tail;
        $this->tail = $pre;
        $this->tail->next(null);
        $this->length--;

        if ($this->length == 0) {
            $this->head = null;
            $this->tail = null;
        }

        $temp;
    }

    public function remove($index)
    {
        if (!($this->length() > 0 && $this->length() >= $index)) {
            return null;
        }

        if ($index == 0 || $index == 1) {
            return $this->removeFirst();
        }

        if ($index == $this->length() - 1) {
            return $this->removeLast();
        }

        $prev = $this->get($index - 1);
        $temp = $prev->getNext();
        $prev->next($temp->getNext());
        $temp->next(null);
        $this->length--;
        return $temp;
    }

    public function insert($index, $value)
    {
        if ($this->length == 0) {
            $this->prepend($value);
        } elseif ($this->length == $index) {
            $this->append($value);
        } else {
            $newNode = new Node($value);
            $temp = $this->get($index - 1);
            $newNode->next($temp->getNext());
            $temp->next($newNode);
        }

        $this->length++;
        return true;
    }

    public function isEmpty()
    {
        return $this->length > 0;
    }

    public function length()
    {
        return $this->length;
    }

    public function makeEmpty()
    {
        $this->head = null;
        $this->tail = null;
        $this->length = 0;
    }

    public function set($index, $value)
    {
        $emp = $this->get($index);
        if ($emp) {
            $emp->value($value);
            return true;
        }

        return false;
    }

    public function print()
    {
        print('====================== LINKED-LIST ======================<br/>');
        try {

            $temp = $this->head;
            while ($temp) {
                print($temp->getValue() . '<br/>');
                $temp = $temp->getNext();
            }
        } catch (\Exception $ex) {
        } catch (\Error $ex) {
        }
        print('====================== LINKED-LIST ======================<br/>');
    }
}
