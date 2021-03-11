<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/11/22
 * Time: 11:24
 */
/**
 * 给出两个 非空 的链表用来表示两个非负的整数。其中，它们各自的位数是按照 逆序 的方式存储的，并且它们的每个节点只能存储 一位 数字。

如果，我们将这两个数相加起来，则会返回一个新的链表来表示它们的和。

您可以假设除了数字 0 之外，这两个数都不会以 0 开头。

示例：

输入：(2 -> 4 -> 3) + (5 -> 6 -> 4)
输出：7 -> 0 -> 8
原因：342 + 465 = 807

 */
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        //初始化需要返回的链表
        $listNode_=new ListNode(0);
        $cur=$listNode_;
        $add=0;
        while($l1 || $l2){
            $x=$l1!=null? $l1->val:0;
            $y=$l2!=null? $l2->val:0;
            $val=($x+$y+$add)%10;
            $add=intval(($x+$y+$add)/10);
            $cur_listnode=new ListNode($val);
            $cur->next=$cur_listnode;
            $cur=$cur_listnode;
            if($l1!=null)
            {
                $l1=$l1->next;
            }
            if($l2!=null)
            {
                $l2=$l2->next;
            }

        }
        if($add>0){
            $cur->next=new ListNode($add);
        }
        return $listNode_->next;

    }
}
$l1=new ListNode(2);
$l2=new ListNode(4);
$l3=new ListNode(5);
$l1->next=$l2;
$l2->next=$l3;


$sl=new Solution();
$sl->addTwoNumbers($l1,$l1);
