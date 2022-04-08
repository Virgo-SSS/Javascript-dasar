<?php 

function stoneWeight(){
    while (true) {
        $stones = [1, 2, 3, 4];

        // $a = array_rand($stones);
        // $b = array_rand($stones);
        $a = $stones[1];
        $b = $stones[1];

        $dataA = $a;
        $dataB = $b;

        $data = array_search($dataA, $stones);
        $key = array_search($dataA, array_keys($stones), true);
        $key2 = array_search($dataB, array_keys($stones),true);
        return $data;
        // if ($dataA == $dataB) {
        //     //
        //     if($key != $key2){
        //         // unset($stones[$key], $stones[$key2]);
        //         $stones = array_values($stones);
        //         // return $stones;
        //         return "hai";
        //     };
        // };
    
    };
}
echo stoneWeight();
?>