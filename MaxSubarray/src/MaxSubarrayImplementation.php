<?php
include_once('MaxSubarray.php');

class MaxSubarrayImplementation implements MaxSubArray
{
    // PHP-Version : 8.1.11
    public function contiguous(array $array): int
    {
        $total = $max_total = 0;
        $count = count($array);
        for($i = 0; $i < $count; $i++) {
            $total += $array[$i];
            
            // Reset the total to 0
            if($total < 0) $total = 0;
            
            // Update the max total if we have total more than max total
            if($max_total < $total) $max_total = $total;
        }
        
        return $max_total;
    }
}


$arr = [
    -2, -3, 4, -1,
    -2, 1, 5, -3
];

$max = new MaxSubarrayImplementation();
echo $max->contiguous($arr);

//    return contiguous($arr);