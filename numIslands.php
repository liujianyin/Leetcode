<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2020/3/19
 * Time: 14:41
 */

/*
11110
11010
11000
00000*/
class Solution {

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
        $rows = count($grid); // 4行
        if ($rows == 0) return 0;
        $cols = count($grid[0]); //5l列
        $count = 0;
        // 四个方向数组
        $directions = [[-1, 0], [0, -1], [1, 0], [0, 1]];
        // 辅助队列
        $queue = new SplQueue();
        // 访问数组
        $visited = array_fill(0, $rows, array_fill(0, $cols, false));
//        var_dump($visited);
        for ($i = 0; $i < $rows; ++$i) {
            for ($j = 0; $j < $cols; ++$j) {
                echo '$i:'.$i.'---$j:'.$j;
                echo "</br>";
                echo (!$visited[$i][$j]);
                echo "</br>";
                if (!$visited[$i][$j] && $grid[$i][$j] == '1') {

                    $count++;
                    $visited[$i][$j] = true;
                    echo '$i'.$i;
                    echo "</br>";
                    echo '$j:'.$j;
                    echo "</br>";
                    echo $i * $cols + $j;
                    echo "</br>";
                    $queue->enqueue($i * $cols + $j);
echo $queue->count();
                    while ($queue->count()) {
                        $cur = $queue->dequeue();
                        echo '$cur'.$cur;
                        $x = (int) ($cur / $cols);
                        $y = $cur % $cols;
                        for ($k = 0; $k < 4; ++$k) {
                            $newX = $x + $directions[$k][0];
                            $newY = $y + $directions[$k][1];
                            echo 'newx'.$newX.'newy'.$newY;
                            echo "</br>";
                            if ($this->inArea($newX, $newY, $grid)
                                && !$visited[$newX][$newY]
                                && $grid[$newX][$newY] == '1'
                            ) {
                                $visited[$newX][$newY] = true;
                                $queue->enqueue($newX * $cols + $newY);
                            }
                        }
                    }
                }
            }
        }
        return $count;
    }

    private function inArea($x, $y, $grid)
    {
        if ($x < 0 || $y < 0) return false;
        if ($x >= count($grid) || $y >= count($grid[0])) return false;

        return true;
    }
}
$class_obj=new Solution();
$grid=array([1,1,0,0,0],[1,1,0,0,0],[0,0,1,0,0],[0,0,0,1,1]);
$class_obj->numIslands($grid);

