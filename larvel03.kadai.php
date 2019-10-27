<?php
$name = "早川将志";
if ($name = "早川将志") {
    echo "私は早川将志です。";
} else {
    echo "早川将志ではありません。";
}

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

$fruit = array("apple","orange","grape","banana","pinapple");
foreach($fruit as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

