<?php
function task17($n) {
    
    $sum=0;
    
    for ($index=0; $index<=$n; $index++) {
        if ($index%5===0 and $index%3===0) {
            $sum--;
        } elseif ($index%3==0) {
            echo $index.PHP_EOL;
        } elseif ($index%5==0){
            $sum=$sum+$index; 
        }
    };
    
    return $sum;  
};

?>