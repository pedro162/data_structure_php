# # Data Structure using PHP

This project provides implementations of fundamental data structures in PHP, including Queues, Stacks, Trees, and Binary Search Trees (BST). Each data structure is implemented with essential operations and example usage.

## Table of Contents

- [Project Overview](#project-overview)
- [Installation](#installation)
- [Usage](#usage)
  - [Queue](#queue)
  - [Stack](#stack)
  - [Tree](#tree)
  - [Binary Search Tree (BST)](#binary-search-tree-bst)
- [Contributing](#contributing)
- [License](#license)

## Project Overview

The `data_structure_php` project is designed to help developers understand and implement basic data structures in PHP. Each structure is accompanied by common operations, such as adding, removing, and searching for elements. This project serves as both a learning resource and a utility library for PHP developers.

## Installation

To use the data structures in this project, clone the repository and include the necessary classes in your PHP project.

```bash
git clone https://github.com/pedro162/data_structure_php.git
```

## Usage

### Queue

A **Queue** is a linear data structure that follows the First In, First Out (FIFO) principle. The first element added to the queue will be the first one to be removed.

**Common Operations:**

- `enqueue($element)`: Add an element to the back of the queue.
- `dequeue()`: Remove and return the front element of the queue.
- `peek()`: Get the front element without removing it.
- `isEmpty()`: Check if the queue is empty.

**Example:**

```php
$queue = new Queue();
$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);
echo $queue->dequeue(); // Outputs: 10
```

### Stack

A **Stack** is a linear data structure that follows the Last In, First Out (LIFO) principle. The last element added to the stack will be the first one to be removed.

**Common Operations:**

- `push($element)`: Add an element to the top of the stack.
- `pop()`: Remove and return the top element of the stack.
- `peek()`: Get the top element without removing it.
- `isEmpty()`: Check if the stack is empty.

**Example:**

```php
$stack = new Stack();
$stack->push(10);
$stack->push(20);
$stack->push(30);
echo $stack->pop(); // Outputs: 30
```

### Tree

A **Tree** is a hierarchical data structure consisting of nodes, where each node has a value and references to its child nodes. The top node is called the root, and nodes without children are called leaves.

**Common Operations:**

- `addNode($value)`: Add a node to the tree.
- `removeNode($value)`: Remove a node from the tree.
- `search($value)`: Search for a node with the given value.

**Example:**

```php
$tree = new Tree();
$tree->addNode(10);
$tree->addNode(5);
$tree->addNode(20);
$tree->search(5); // Returns the node with value 5
```

### Binary Search Tree (BST)

A **Binary Search Tree (BST)** is a type of tree where each node has at most two children, and for each node, all values in its left subtree are smaller, and all values in its right subtree are larger.

**Common Operations:**

- `insert($value)`: Insert a value into the BST.
- `delete($value)`: Delete a value from the BST.
- `find($value)`: Find a node with the given value.
- `inOrderTraversal()`: Traverse the tree in-order (left, root, right).

**Example:**

```php
$bst = new BinarySearchTree();
$bst->insert(10);
$bst->insert(5);
$bst->insert(20);
$bst->find(20); // Returns the node with value 20
$bst->inOrderTraversal(); // Outputs the values in sorted order
```

## License

This project is licensed under the MIT License.
