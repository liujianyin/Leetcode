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
        if($x>pow(2,31)-1 || $x<pow(-2,31)){
            return 0;
        }
        $abs_num=abs($x);
        $str_num=strrev($abs_num);
        for($i=0;$i<strlen($str_num);$i++){
            if($str_num[$i]!=0){
                $str_num=substr($str_num,$i);

                break;
            }
        }

        if($x<0){
            $str_num=$str_num-2*$str_num;
        }

        if($str_num>pow(2,31)-1 || $str_num<pow(-2,31)){
            return 0;
        }
        return $str_num;
        serialize()


    }
}