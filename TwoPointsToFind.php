<?php
/** 二分搜索
 * @param $array 有序数组
 * @param $low 左偏移量
 * @param $high 右偏移量
 * @param $k 偏移量
 */
function binarySearch($array, $left_index, $right_index, $key_index){
    if($left_index <= $right_index){
        $middle_index = intval(($left_index + $right_index) / 2);

        if($array[$middle_index] == $key_index){
            return $middle_index;
        }elseif($key_index < $array[$middle_index]){
            return binarySearch($array,$left_index,$middle_index - 1,$key_index);//左边比较
        }else{
            return binarySearch($array,$middle_index + 1,$right_index,$key_index);//右边比较
        }
    }

    return -1;//结束递归
}

/** 顺序查找
 * @param $array 任意数组
 * @param $key
 * @return int
 */
function queueSearch($array, $key){

    $k = -1 ;
    for($i = 0; $i < count($array) - 1; $i++) {
        if($array[$i] == $key){
            $k = $i;
        }
    }
    return $k;
}



/**
 * @param $array
 * @return Array
 */
function bubbleSort($array){
    $flat = true;
    while($flat){
        $flat = false;
        //foreach 实现
        foreach($array as $key=>$item){
            if($key+1 > count($array)-1) continue;
            if($array[$key] > $array[$key+1]){
                $flat = true;
                $max = $array[$key];
                $array[$key] = $array[$key+1];
                $array[$key+1] = $max;
            }
        }

        //for 实现
        /*for($i = 0;$i < count($array) - 1;$i++){
            if($array[$i] > $array[$i+1]){
                $flat = true;
                $max = $array[$i];
                $array[$i] = $array[$i+1];
                $array[$i+1] = $max;
            }
        }*/

    }
    return $array;
}



$array = [1,2,5,9,96,14,65,75];
echo queueSearch($array,14);
//echo binarySearch(bubbleSort($array),0,count(bubbleSort($array))-1,96);