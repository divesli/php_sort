<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file MergeSort.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/22 11:40:42
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

function merge($arr1,$arr2) {
    $arrRst = array();
    while(count($arr1) && count($arr2)) {
        $arrRst[] = $arr1[0] < $arr2[0] ? array_shift($arr1) : array_shift($arr2);
    }
    return array_merge($arrRst,$arr1,$arr2);
}

function merge_sort($arrData) {
    $len = count($arrData);
    if ($len <= 1) {
        return $arrData;
    }
    $mid = intval($len / 2);
    $left = array_slice($arrData,0,$mid);
    $right = array_slice($arrData,$mid);
    $left = merge_sort($left);
    $right = merge_sort($right);
    return merge($left,$right);
}


$arrInit = array();
for($i=0;$i<100000;$i++) {
    $arrInit[] = mt_rand(1,10000);
}
//print_r($arrInit);


$arrRst = merge_sort($arrInit);
//print_r($arrRst);
