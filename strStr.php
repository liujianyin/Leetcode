<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2020/3/20
 * Time: 17:24
 */
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        if($needle==''){
            return 0;
        }
        $needle_size=strlen($needle);
        $haystack_size=strlen($haystack);
        if($needle_size>$haystack_size){
            return -1;
        }
        echo 111;
        for($i=0;$i<$haystack_size;$i++){
            if($haystack[$i]==$needle[0]){
                $new_str=substr($haystack,$i,$needle_size);
                echo $new_str;


            }

        }
        return -1;

    }
}
$class_obj=new Solution();
$class_obj->strStr("hello","ll");