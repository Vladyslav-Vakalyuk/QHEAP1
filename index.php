<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
while (!feof($_fp)) {
    $buffer = fgets($_fp, 4096);
    $buffer  = explode(" ", $buffer);
    if(count($buffer) === 2 && $buffer[0] === '1'){
        echo $buffer[1];
    }
}
?>
