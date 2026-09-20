<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Using PHP Variables, arrays and operators</title>
    <meta name="description" content="PHP" >
    <meta name="keywords" content="PHP" >
    <meta name="author" content="Ryan F"  >
</head>

<body>
    <h1> PHP Variables, Arrays and operators </h1>
    <?php
        $marks = array(85, 85, 95);
        $marks[1] = 90; 

        $sum = array_sum($marks);
        $count = count($marks);
        $avg = $sum / $count;

        if ($avg >= 50) {
            $status = "PASSED";
        } else {
            $status = "FAILED";
        }
        echo $status . " Average: " . $avg

    ?>
</body>

</html>