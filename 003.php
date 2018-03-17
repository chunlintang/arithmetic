<?php
/**
 * Copyright 2018 @Mantis.
 * User: tangchunlinit@gmail.com
 * Date: 2018/3/17
 * Time: 上午9:55
 */

/**
 * 输入一个链表，从尾到头打印链表每个节点的值。
 */
class LinkList
{
    public $val;
    public $next;

    public function printLinklistNode($head)
    {
        $list = [];
        while ($head != null) {
            $list[] = $head->val;
            $head = $head->next;
        }
        return array_reverse($list);
    }
}

$a = new LinkList();
$b = new LinkList();
$c = new LinkList();
$d = new LinkList();

$a->val = 1;
$b->val = 2;
$c->val = 3;
$d->val = 4;
$a->next = $b;
$b->next = $c;
$c->next = $d;

$linklist = new LinkList();
print_r($linklist->printLinklistNode($a));