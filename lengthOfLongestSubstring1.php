<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/11/22
 * Time: 14:15
 */
/**
给定一个字符串，请你找出其中不含有重复字符的 最长子串 的长度。

示例 1:

输入: "abcabcbb"
输出: 3
解释: 因为无重复字符的最长子串是 "abc"，所以其长度为 3。
示例 2:

输入: "bbbbb"
输出: 1
解释: 因为无重复字符的最长子串是 "b"，所以其长度为 1。
示例 3:

输入: "pwwkew"
输出: 3
解释: 因为无重复字符的最长子串是 "wke"，所以其长度为 3。
     请注意，你的答案必须是 子串 的长度，"pwke" 是一个子序列，不是子串。

*/
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        if(strlen($s)==0){
            return 0;
        }
        $cur_str=[];//里面进行存储遍历的值 类似于 a=>0、b=>1
        $start=0;
        $max=0;
        for($i=0;$i<strlen($s);$i++){
            if(isset($cur_str[$s[$i]])&&$start<=$cur_str[$s[$i]]){
                $start=$cur_str[$s[$i]]+1;
            }else{
                $max=max($i-$start+1,$max);
            }
            $cur_str[$s[$i]]=$i;


        }
        return $max;

    }
}