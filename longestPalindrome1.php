<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/11/26
 * Time: 16:27
 */

/**
 * 给定一个字符串 s，找到 s 中最长的回文子串。你可以假设 s 的最大长度为 1000。

示例 1：

输入: "babad"
输出: "bab"
注意: "aba" 也是一个有效答案。
示例 2：

输入: "cbbd"
输出: "bb"

 */
class Solution {

    /**
     * @param String $s
     * @return String
     */
    public $max=0;
    public $res_string='';
    function  longestPalindrome($s) {
        if(strlen($s)<=1){
            $this->res_string=$s;
            $this->max=1;
            return $this->res_string;
        }
        for($i=0;$i<strlen($s);$i++){
            $this->getHuiwen($s,$i,$i);
            $this->getHuiwen($s,$i,$i+1);
        }
        return $this->res_string;
    }
    private function getHuiwen($s_string,$left,$right){
        while($left>=0&&$right<strlen($s_string)&&$s_string[$left]==$s_string[$right]){
            if($right-$left+1>$this->max){
                $this->max=$right-$left+1;
                $this->res_string=substr($s_string,$left,$this->max);
            }
            $left--;
            $right++;
        }

    }
}
$s=new  Solution();
echo $s->longestPalindrome("babad");
