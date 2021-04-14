<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2021/3/18
 * Time: 14:48
 */
function threeSum($nums) {
    if(sizeof($nums)<3||(sizeof($nums)==3&&($nums[0]+$nums[1]+$nums[2]!=0))){
        return [];
    }
    $res=[];
    sort($nums);
    for($i=0;$i<sizeof($nums);$i++){
        if($nums[$i]>0){
            for($j=0;$j<sizeof($res);$j++){
                echo serialize($res[$j]);
                if($res[$j]===$res[$j+1]){
                    unset($res[$j]);
                }
            }
            return $res;
        }
        $l=$i+1;
        $r=sizeof($nums)-1;

        while($l<$r){
            $sum=$nums[$i]+$nums[$l]+$nums[$r];
            if($sum==0){
                $res[]=[$nums[$i],$nums[$l],$nums[$r]];
                $l++;
                $r--;
            }else if($sum<0){
                $l++;
            }else{
                $r--;
            }
        }

    }

    for($j=0;$j<sizeof($res);$j++){
        echo serialize($res[$j]);
        if($res[$j]===$res[$j+1]){
            unset($res[$j]);
        }
    }

    return $res;

}
echo json_encode(threeSum( [-1,0,1,2,-1,-4]));
