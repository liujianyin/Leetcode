<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2020/1/9
 * Time: 16:37
 *class Solution {

/**
 * @param String $s
 * @return Boolean
 */
function isValid($s) {

    $s=preg_replace('# #','',$s);
    $length=strlen($s);
    if($s%2!=0){
        return false;
    }
    for($i=0;$i<$length;$i++){
        if($s[1]==")"){
            for($j=0;$j<$i;$j++){
                if($s[$j]=='('){
                    $s[$j]='';
                    $s[$i]='';
                    break;
                }else{
                    return false;
                }


            }
            if($s[$i]=='}'){
                for($j=0;$j<$i;$j++){
                    if($s[$j]=='{'){
                        $s[$j]='';
                        $s[$i]='';
                        break;
                    }else{
                        return false;
                    }


                }
            }
            if($s[$i]==']'){
                for($j=0;$j<$i;$j++){
                    if($s[$j]=='['){
                        $s[$j]='';
                        $s[$i]='';
                        break;
                    }else{
                        return false;
                    }


                }
            }
        }

    }
    $s=preg_replace('# #','',$s);
    var_dump($s);
    if($s==''){
        return true;
    }else{
        return false;
    }
}

var_dump(isValid('()'));
