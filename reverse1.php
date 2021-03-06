<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/11/29
 * Time: 16:24
 */

/**
 * 给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。

示例 1:

输入: 123
输出: 321
 示例 2:

输入: -123
输出: -321
示例 3:

输入: 120
输出: 21
注意:

假设我们的环境只能存储得下 32 位的有符号整数，则其数值范围为 [−231,  231 − 1]。请根据这个假设，如果反转后整数溢出那么就返回 0

 */
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $res=0;
        while ($x!=0){
            $res=floor($res*10+$x%10);
            if($x>0){
                $x=floor($x/10);
            }else{
                 $x=ceil($x/10);
            }

        }
        if($res>pow(2,31)||$res<pow(-2,31)){
            return 0;
        }
        return $res;


    }
}