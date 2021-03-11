<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2020/1/16
 * Time: 16:16
 */

class data
{
 private $data;
 public function __construct($data)
 {
     $this->data=$data;
     echo $data."进队</br>";
 }
 public function getData(){
     return $this->data;
 }
 public  function  __destruct()
 {
     echo $this->data."出队</br>";
 }
}
class queue{
    private $front;
    private $rear;
    private $queue;
    private $maxsize;
    public function __construct($size)
    {
        $this->initQ($size);
    }
 public function initQ($size){
        $this->front=0;
        $this->rear=0;
        $this->maxsize=$size;
        $this->queue=[];

    }
    public function QIsEmpty(){
        return $this->front==$this->rear;
    }
    public function QIsFull(){
        return $this->rear-$this->front==$this->maxsize;
    }
    public function InQ($data){
        if($this->QIsFull()){
            echo "队列已经满了</BR>";
        }else{
            $this->queue[$this->rear+1]=new data($data);
            $this->rear=$this->rear+1;
            print_r($this->queue);
            echo '入队成功！<br>';
        }
    }
    public function DeQ(){
        if($this->QIsEmpty()){
            echo "队列为空</BR>";
        }else{

            unset($this->queue[$this->front]);

            $this->front=$this->front+1;
            echo '出队成功！</br>';
            print_r($this->queue);


        }
    }

}
$q=new queue(3);
$q->InQ("小苗");
$q->InQ('马帅');
$q->InQ('溜冰');
$q->InQ('张世佳');
ECHO "<BR>";
$q->DeQ();
$q->InQ("周瑞晓");
$q->DeQ();
$q->DeQ();
$q->DeQ();
$q->DeQ();
