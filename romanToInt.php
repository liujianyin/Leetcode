<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2021/3/16
 * Time: 13:04
 */

/**
 * 例如， 罗马数字 2 写做 II ，即为两个并列的 1。12 写做 XII ，即为 X + II 。 27 写做  XXVII, 即为 XX + V + II 。

通常情况下，罗马数字中小的数字在大的数字的右边。但也存在特例，例如 4 不写做 IIII，而是 IV。数字 1 在数字 5 的左边，所表示的数等于大数 5 减小数 1 得到的数值 4 。同样地，数字 9 表示为 IX。这个特殊的规则只适用于以下六种情况：

I 可以放在 V (5) 和 X (10) 的左边，来表示 4 和 9。
X 可以放在 L (50) 和 C (100) 的左边，来表示 40 和 90。
C 可以放在 D (500) 和 M (1000) 的左边，来表示 400 和 900。

给定一个罗马数字，将其转换成整数。输入确保在 1 到 3999 的范围内。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/roman-to-integer
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $res=0;
        $spe_arr=array('CM'=>900,'CD'=>400,'XC'=>90,'XL'=>40,'IX'=>9,'IV'=>4);
        $rep_arr=array('M'=>1000,'D'=>500,'C'=>100,'L'=>50,'X'=>10,'V'=>5,'I'=>1,'a'=>900,'b'=>400,'c'=>90,'d'=>40,'e'=>9,'f'=>4);
        $replace=array('a'=>'CM','b'=>'CD','c'=>'XC','d'=>'XL','e'=>'IX','f'=>'IV');
        // $values=array("M","CM","D","CD","C","XC","L","XL","X","IX","V","IV","I");
        // $rep=array(1000,900,500,400,100,90,50,40,10,9,5,4,1);
        foreach($replace as $key=>$values){
            $s=str_replace($values,$key,$s);
        }


        for($i=0;$i<strlen($s);$i++){
            foreach($rep_arr as $key1=>$values1){
                if($s[$i]==$key1){
                    $res=$res+$values1;

                }
            }
        }
        return $res;


    }
}