<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file QuickSort.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/22 10:27:57
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

function quick($arrData) {
    // 如果数组为空,或者只有一个数,则无需排序
    $len = count($arrData); 
    if ($len <= 1) {
        return $arrData;
    }

    $key = $arrData[0];
    $left = array();
    $right = array();
    
    for($i=1; $i<$len; $i++) {
        if ($arrData[$i] < $key) {
            $left[] = $arrData[$i];
        } else {
            $right[] = $arrData[$i];
        }
    }
    $left = quick($left);
    $right = quick($right);
    return array_merge($left,array($key),$right);
}
$arrInit = array();
for($i=0;$i<100000;$i++) {
    $arrInit[] = mt_rand(1,10000);
}
//print_r($arrInit);

$arrRst = quick($arrInit);

//print_r($arrRst);
