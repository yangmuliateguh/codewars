<?php
function orderWeight($str) {
    $nums = explode(" ", $str);
    sort($nums);
    $arr_nums = array_map(function($n){
        return ['weight' => $n, 'sums' => array_sum(str_split($n))];
    }, $nums);

    usort($arr_nums, function($a, $b){
        if($a['sums'] == $b['sums']) return strcmp($a['weight'], $b['weight']);
        return $a['sums'] - $b['sums'];
    });

    $result = "";
    foreach ($arr_nums as $element) {
        $result .= $element['weight'] . ' ';
    }
    
    return trim($result);
}

var_dump(orderWeight("2000 10003 1234000 44444444 9999 11 11 22 123"));

// function orderWeight($str) {
//     // Memisahkan string dan mengurutkannya leksikografis terlebih dahulu
//     $nums = explode(" ", $str);
//     sort($nums);

//     // Mengurutkan berdasarkan jumlah digit, dan leksikografis jika jumlah digit sama
//     usort($nums, function($a, $b) {
//         $sumA = array_sum(str_split($a));
//         $sumB = array_sum(str_split($b));
//         if ($sumA == $sumB) {
//             return strcmp($a, $b);
//         }
//         return $sumA - $sumB;
//     });

//     // Menggabungkan kembali menjadi string
//     return implode(' ', $nums);
// }