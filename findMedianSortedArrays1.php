<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/11/22
 * Time: 15:50
 */

/**
 * 给定两个大小为 m 和 n 的有序数组 nums1 和 nums2。

请你找出这两个有序数组的中位数，并且要求算法的时间复杂度为 O(log(m + n))。

你可以假设 nums1 和 nums2 不会同时为空。

示例 1:

nums1 = [1, 3]
nums2 = [2]

则中位数是 2.0
示例 2:

nums1 = [1, 2]
nums2 = [3, 4]

则中位数是 (2 + 3)/2 = 2.5

*/
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $nums3=array_merge($nums1, $nums2);
        sort($nums3);
        $size=count($nums3);

        if($size%2==0){
            $target=intval((1+$size)/2);
            $res=($nums3[$target-1]+$nums3[$target])/2;
        }else{
            $target=(1+$size)/2;
            $res=$nums3[$target-1];
        }
        return $res;


    }
}