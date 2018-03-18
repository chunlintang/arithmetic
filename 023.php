<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/18
 * Time: 下午12:50
 */

// 从上到下按层打印二叉树，同一层结点从左至右输出。每一层输出一行.

class Node
{
    var $val;
    var $left;
    var $right;
}

function PrintTree($root)
{
    $q = new SplQueue();
    if (!$root) {
        return [];
    }
    $result = [];
    $i = 0;
    $q->push($root);
    while (!$q->isEmpty()) {
        $count = $q->count();
        while ($count--) {
            $t = $q->shift();
            if ($t) {
                $result[$i][] = $t->val;
                $q->push($t->left);
                $q->push($t->right);
            }
        }
        $i++;
    }
    return $result;
}

$a = new Node();
$b = new Node();
$c = new Node();
$d = new Node();
$e = new Node();
$f = new Node();
$g = new Node();

$a->val = 'A';
$b->val = 'B';
$c->val = 'C';
$d->val = 'D';
$e->val = 'E';
$f->val = 'F';
$g->val = 'G';

$a->left = $b;
$a->right = $c;
$b->left = $d;
$b->right = $e;
$c->left = $f;
$c->right = $g;

print_r(PrintTree($a));