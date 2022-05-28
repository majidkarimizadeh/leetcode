<?php

class Node {

    public $data;
    public $next;

    function __construct($data, $next = null) {
        $this->data = $data;
        $this->next = $next;
    }
}

class SingleyLinkList {

    public $head = null;
    public $tail = null;
    public $size = 0;

    function __construct($data) {
        $node = new Node($data);
        $this->head = $node;
        $this->tail = $node;
        $this->size = 1;
    }

    function append($data) {
        $newNode = new Node($data);
        $this->tail->next = $newNode;
        $this->tail = $newNode;
        $this->size++;
    }

    function prepend($data) {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
        $this->size++;
    }

    function insert($index, $data) {

        if ($index === 0) {
            return $this->prepend($data);
        }

        if ($index >= $this->size) {
            return $this->append($data);
        }

        $counter = 1;
        $currentNode = $this->head;
        while ($counter !== $index) {
            $currentNode = $currentNode->next;
            $counter++;
        }
        $newNode = new Node($data);
        $nextItem = $currentNode->next;
        $currentNode->next = $newNode;
        $newNode->next = $nextItem;
        $this->size++;
    }

    function remove($index) {

        if ($index >= $this->size) {
            return;
        }

        $counter = 1;
        $currentNode = $this->head;
        while ($counter !== $index) {
            $currentNode = $currentNode->next;
            $counter++;
        }

        $currentNode->next = $currentNode->next->next;
        $this->size--;
    } 

    function all() {
        $data = [];
        $currentNode = $this->head;
        while ($currentNode !== null) {
            $data[] = $currentNode->data;
            $currentNode = $currentNode->next;
        }
        return $data;
    }
}

$linkList = new SingleyLinkList(2);
$linkList->append(3);
$linkList->append(4);
$linkList->append(5);
$linkList->prepend(1);
$linkList->prepend(0);
$linkList->insert(2, 'a');
$linkList->remove(2);
var_dump($linkList->all());
