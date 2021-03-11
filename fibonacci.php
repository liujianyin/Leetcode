<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/11/28
 * Time: 15:24
 */
/**
 * 斐波那契数列是由0和1开始，之后的数就是前两个数的和。
首几个费波那契系数是：
0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233……
那我们如何用计算机来生成这些数呢，也就是说，求斐波那契数列第n位的值。
 */
//纯递归写法
function fibonacci($n){
    if($n==1){
        return 0;
    }
    if($n==2){
        return 1;
    }


    if($n>=3){
        $result=fibonacci($n-1)+fibonacci($n-2);
    }
return $result;

}
/**
 * n=5
 * fin(4)+fin(3)
 * fin(3)+fin(2)+fin(2)+fin(1)
 * 3fin(2)+2fin(1)=3
 */
//echo fibonacci(14);


//记忆化的搜索
function memory_fibonacci($n){
    $arr[1]=0;
    $arr[2]=1;
    for ($i=3;$i<=$n;$i++){
        $arr[$i]=$arr[$i-1]+$arr[$i-2];
    }
    return $arr[$n];

}
echo memory_fibonacci(10);