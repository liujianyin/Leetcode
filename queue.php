<?php

class Queue

{


    private $_front;

    private $_rear;

    private $_queue;

    private $_queueLength;

    private $_queueSize;



    /**

     * Queue constructor.初始化队列

     * @param int $capacity 容量（循环队列的最大长度）

     */

    public function __construct($size)

    {

        $this->_queue = [];

        $this->_queueSize = $size;

        $this->_front = 0;

        $this->_rear = 0;

        $this->_queueLength = 0;

    }



    /**

     * 销毁队列；

     */

    public function __destruct()

    {

        unset($this->_queue);

    }



    /**

     * @method 入队

     * @param mixed $elem 入队的元素

     * @return bool

     */

    public function enQueue($elem)

    {

        if (!$this->isFull()) {

            $this->_queue[$this->_rear] = $elem;

            $this->_rear++;

            $this->_rear = $this->_rear % $this->_queueSize;

            $this->_queueLength++;
            print_r($this->_queue);
            echo "</br>";

            return true;

        }

        return false;

    }



    /**

     * @method 出队

     * @return mixed|null

     */

    public function deQueue()

    {

        if (!$this->isEmpty()) {

            $elem = $this->_queue[$this->_front];

            unset($this->_queue[$this->_front]);

            $this->_front++;

            $this->_front %= $this->_queueSize;

            $this->_queueLength--;
            print_r($this->_queue);
            echo "</br>";

            return $elem;

        }

        return null;

    }



    /**

     * @method 判断队列是否为空；

     * @return bool

     */

    public function isEmpty()

    {

        return $this->_queueLength === 0;

    }



    /**

     * @method 判断队列是否饱和；

     * @return bool

     */

    public function isFull()

    {

        return $this->_queueLength === $this->_queueSize;

    }



    /**

     * @method 遍历队列并输出（测试队列）

     */

    public function outputQueue()

    {

        for ($i = $this->_front; $i < $this->_queueLength + $this->_front; $i++) {

            echo $this->_queue[$i % $this->_queueSize].PHP_EOL;

        }
        echo "</br>";

    }



    /**

     * @method 清空队列

     */

    public function clearQueue()

    {

        $this->_queue = [];

        $this->_front = 0;

        $this->_rear = 0;

        $this->_queueLength = 0;

    }

}
$a = new Queue(3);

echo 'enQueue1 $a->enQueue(1)'.PHP_EOL;

$a->enQueue(1);

echo 'enQueue2 $a->enQueue(2)'.PHP_EOL;

$a->enQueue(2);

echo 'enQueue3 $a->enQueue(3)'.PHP_EOL;

$a->enQueue(3);

//echo 'enQueue4 $a->enQueue(4)'.PHP_EOL;

//$a->enQueue(4);     //讲道理是失败的；

$a->outputQueue();      //输出 1 2 3

//echo PHP_EOL;
//
//echo PHP_EOL;
//
echo $a->deQueue();     //输出 1  队列 2 3
//
//echo PHP_EOL;
//
//echo PHP_EOL;
//
echo $a->deQueue();     //输出 2  队列 3
//
$a->enQueue(5);         //队列 3 5
//
//echo PHP_EOL;
//
//echo PHP_EOL;
//
//$a->outputQueue();      //输出 3 5
//
//$a->clearQueue();