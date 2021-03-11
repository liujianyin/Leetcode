<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2020/3/20
 * Time: 13:48
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {

        for($i=0;$i<sizeof($nums);$i++){
            $left_sum=0;
            $right_sum=0;
            for($j=0;$j<$i;$j++){
                $left_sum+=$nums[$j];
            }
            for($k=$i+1;$k<sizeof($nums);$k++){
                $right_sum+=$nums[$k];
            }

            if($left_sum==$right_sum){

                return $i;


            }

        }
        return -1;

    }
    function  test_strtr(){
        $a='jfdgjdsgfjsdhgf';
        $b='j';
        echo strStr($a,$b);
    }
}
$class_obj=new Solution();
$grid=[1,7,3,6,5,6];
//$class_obj->pivotIndex($grid);
$class_obj->test_strtr();