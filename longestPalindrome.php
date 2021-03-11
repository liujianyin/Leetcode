<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/11/26
 * Time: 16:27
 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    /**
     * 给定一个字符串 s，找到 s 中最长的回文子串。你可以假设 s 的最大长度为 1000。
     */
    static  function longestPalindrome($s) {
        $max_string='';
        for($i=0;$i<strlen($s);$i++){
            $left=$i;
            $right=strlen($s)-$i-1;
            $cur_string=$s[$i];

            $min_times=min($left,$right);
            for($j=1;$j<=$min_times;$j++){
                if($s[$i-$j]==$s[$i+$j]){
                    $cur_string=$s[$i-$j].$cur_string.$s[$i+$j];
                    }else{
                    break;
                }
            }
            if(strlen($cur_string)>=strlen($max_string)){
                $max_string=$cur_string;
            }




        }

        return  $max_string;


    }



}

echo Solution::longestPalindrome("cbbd");
