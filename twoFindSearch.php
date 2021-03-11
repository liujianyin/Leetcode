<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/11/26
 * Time: 14:25
 */
class Solution{
    //递归实现二分法
    function twoFindSearch($arr_list,$target,$start=0,$end=0){
       if($end==0&&count($arr_list)!=0){
           $end=count($arr_list)-1;
       }
       if($start<=$end){
           $mid=intval(($start+$end)/2);
           if($target==$arr_list[$mid]){
               return $mid;
           }
           if($target>$arr_list[$mid]){
               $this->twoFindSearch($arr_list,$target,$mid+1,$end);
           }else{
               $this->twoFindSearch($arr_list,$target,$start,$mid-1);
           }
       }else{
           return '没有找到';
       }


    }
    //whlie实现二分法
    function otherTwoFindSearch($arr_list,$target,$start=0,$end){
        if(count($arr_list)!=0&&$end!=0){
            $end=count($arr_list);
        }
        while ($start<=$end){
            $mid=intval(($start+$end)/2);
            if($target==$arr_list[$mid]){
                return $mid;
                break;
            }
            if($target>$arr_list[$mid]){
                $start=$mid+1;
            }else{
                $end=$mid-1;
            }

        }
        return '没有找到';


    }
}