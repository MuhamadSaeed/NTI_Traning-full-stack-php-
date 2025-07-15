<?php 

$grade = 43;

if(isset($grade)) {
    if ($grade >= 50) {
        echo "passed";
    } else {
        echo "failed";
    }
} else {
    echo "enter a degree";
}

echo (isset($grade) ? ($grade >= 50 ? "passed" : "failed") : "enter a degree");

?>