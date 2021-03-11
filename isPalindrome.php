<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/12/3
 * Time: 15:31
 */

/**
 * 判断一个整数是否是回文数。回文数是指正序（从左向右）和倒序（从右向左）读都是一样的整数。

示例 1:

输入: 121
输出: true
示例 2:

输入: -121
输出: false
解释: 从左向右读, 为 -121 。 从右向左读, 为 121- 。因此它不是一个回文数。
示例 3:

输入: 10
输出: false
解释: 从右向左读, 为 01 。因此它不是一个回文数。

 */
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    public $res=[];
    function isPalindrome($x) {
        if($x<0){
            return false;
        }
        $y=$x;
        $y=(string)$y;

        for($i=0;$i<strlen($x);$i++){
            $res[]=floor($y%10);
            $y=floor($y/10);


        }
        $test=implode('',$res);
        if((Integer)$test==$x){
            return true;
        }else{
            return false;
        }


    }
    function isPalindrome1($x){
        if($x<0){
            return false;
        }
        $x=(string)$x;
        for($i=strlen($x)-1;$i>=0;$i--){
            $res_arr[]=$x[$i];
        }
        $res_string=implode('',$res_arr);
        if($res_string==$x){
            return true;
        }else{
            return false;
        }
        // var_dump( $res_arr);

    }

}