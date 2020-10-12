<?php
// -----------------刪除的公式
// foreach ($arrDeleteFiles as $val) {
//     $n = count($arrFiles);
//     for ($i = 0; $i < $n; $i++) {
//         if (strpos($arrFiles[$i], $val) !== false) {
//             array_splice($arrFiles, $i, 1);
//             $n--;
//         }
//     }
// }


$abc = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

$abc2 = [
    7,
    8,
    9,
];

for ($i = 0; $i < 5; $i++) {
    echo $i . "\n";
}

$count = count($abc2);

for ($i = 0; $i < $count; $i++) {
    echo $abc2[$i] . "\n";
}
