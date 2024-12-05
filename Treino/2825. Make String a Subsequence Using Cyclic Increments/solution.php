<?php
class Solution {

/**
 * @param String $str1
 * @param String $str2
 * @return Boolean
 */
function canMakeSubsequence($str1, $str2) {
        $map = array_combine(array_merge(range('b', 'z'), ['a']), range('a', 'z'));
        // echo print_r($map);
        // echo strpos($str1,"b");
        $i1=0;
        $i2=0;

    while($i1<strlen($str1) && $i2<strlen($str2)){
            $s1= $str1[$i1];
            $s2 = $str2[$i2];
            // echo ', ',$s1, $s2, $map[$s2];

            if($s1===$s2 || $s1===$map[$s2]){
                $i2++;
                $i1++;
            }else $i1++;
            
        }
    return $i2 === strlen($str2);
    }
}