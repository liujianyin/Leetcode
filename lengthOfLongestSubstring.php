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
class C {

    /**
     * @param String $s
     * @return Integer
     */

    function lengthOfLongestSubstring($s) {
        //先转换为数组
        global  $max;
        $max=0;
        $s_arr=str_split($s);
        $unique_arr=array_unique($s_arr);
        // var_dump($unique_arr);
        foreach($unique_arr as $key=>$value){
            for($i=0;$i<count($s_arr);$i++){
                if($value==$s_arr[$i]){
                    $list[]=$i;
                    for($j=0;$j<count($list)-1;$j++){
                        if($list[$j+1]-$list[$j]>$max){
                            $max=$list[$j+1]-$list[$j];
                        }
                    }
                }
            }


        }
        return $max;

    }
}
$sl=new  Solution();
$maxLength=$sl->lengthOfLongestSubstring('bbbbbbbbbbbbbbbbb');
echo $maxLength;