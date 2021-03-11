<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/11/21
 * Time: 15:46
 */

/**
 *
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        if(count($nums)<2){
            return '返回数组不合适';
        }
        //map作用记录value=>key
        $map=array();
        for($i=0;$i<count($nums);$i++){
            $diff=$target-$nums[$i];
            if(isset($map[$diff])){
                return [$map[$diff],$i];
            }
            $map[$nums[$i]]=$i;


        }
        return [0,0];

    }
}