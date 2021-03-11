<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2020/1/17
 * Time: 11:10
 */

class MyCircularQueue {
    private $front;
    private $rear;
    private $queue;
    private $maxsize;

    /**
     * Initialize your data structure here. Set the size of the queue to be k.
     * @param Integer $k
     */
    function __construct($k) {

        $this->front=-1;
        $this->rear=-1;
        $this->queue=[];
        $this->maxsize=$k;




    }

    /**
     * Insert an element into the circular queue. Return true if the operation is successful.
     * @param Integer $value
     * @return Boolean
     */
    function enQueue($value) {
        if($this->isFull()){
            return false;

        }
        if($this->isEmpty()){
            $this->front=0;

        }
            $this->rear=($this->rear+1)%$this->maxsize;
            $this->queue[$this->rear]=$value;

            return true;




    }

    /**
     * Delete an element from the circular queue. Return true if the operation is successful.
     * @return Boolean
     */
    function deQueue() {
        if($this->isEmpty()){

            return false;
        }else{

            unset($this->queue[$this->front]);
            if ($this->front==$this->rear){
                $this->front=-1;
                $this->rear=-1;
            }else{
                $this->front=$this->front+1;

            }

            return true;
        }

    }

    /**
     * Get the front item from the queue.
     * @return Integer
     */
    function Front() {
        if($this->isEmpty()){
            return -1;
        }

        return $this->queue[$this->front];

    }

    /**
     * Get the last item from the queue.
     * @return Integer
     */
    function Rear() {
        if($this->isEmpty()){
            return -1;
        }
        return $this->queue[$this->rear];

    }

    /**
     * Checks whether the circular queue is empty or not.
     * @return Boolean
     */
    function isEmpty() {
        if($this->rear==-1&&$this->front==-1){

            return true;
        }else{

            return false;
        }

    }

    /**
     * Checks whether the circular queue is full or not.
     * @return Boolean
     */
    function isFull() {
        if($this->rear-$this->front+1==$this->maxsize || $this->front-$this->rear==1){

            return true;
        }else{

            return false;

        }




    }

}
$circularQueue = new MycircularQueue(3); // 设置长度为 3

$circularQueue->enQueue(1);  // 返回 true


$circularQueue->enQueue(2);  // 返回 true


$circularQueue->enQueue(3);  // 返回 true


$circularQueue->enQueue(4);  // 返回 false，队列已满


$circularQueue->Rear();  // 返回 3


$circularQueue->isFull();  // 返回 true

$circularQueue->deQueue();  // 返回 true

$circularQueue->enQueue(4);  // 返回 true


$circularQueue->Rear();  // 返回 4



