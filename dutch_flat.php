<?php
function dutchFlagSort(&$arr) {
    $low = 0;
    $mid = 0;
    $high = count($arr) - 1;

    while ($mid <= $high) {
        switch ($arr[$mid]) {
            case 0:
                // Swap arr[low] and arr[mid]
                $temp = $arr[$low];
                $arr[$low] = $arr[$mid];
                $arr[$mid] = $temp;
                $low++;
                $mid++;
                break;
            case 1:
                $mid++;
                break;
            case 2:
                // Swap arr[mid] and arr[high]
                $temp = $arr[$mid];
                $arr[$mid] = $arr[$high];
                $arr[$high] = $temp;
                $high--;
                break;
        }
    }
}

// Example usage
$arr = [2, 0, 2, 1, 1, 0];
dutchFlagSort($arr);
print_r($arr); // Output should be [0, 0, 1, 1, 2, 2]
?>
