<?php
function pangkat (int $bil, int $batas) : int {
    if ($batas<1){
        return 1;
    } else{
        return $bil * pangkat ($bil, $batas - 1);

    }
}
for ($x=0; $x<20; $x++){
    echo '5 pangkat ', $x, ' yaitu: ', pangkat (5, $x), "<br>";
}
?>