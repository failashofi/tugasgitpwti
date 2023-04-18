<?php
function get_max() {
    if (func_num_args()==0){
        return false;
    } else{
        return max(func_get_args());
    }
}
echo get_max(10, 20); echo "<br>"; // Output: 20
echo get_max(10, 20, 30); echo "<br>"; // Output: 30
echo get_max(10, 20, 30, 40); echo "<br>"; // Output: 40