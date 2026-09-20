<?php
 $marks[] = array["85", "85", "95"];

$marks[1] = 90; 

$sum = array_sum($marks)
$count = count($marks)
$avg = $sum / $count;

if (avg < 50) {
$status = "PASSED"
{ else {
    $status = "Failed"
}

echo $status $avg;

?>