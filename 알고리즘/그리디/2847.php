<?php

fscanf(STDIN, "%d", $n);

$score = array();
$hap = 0;

for($i=0;$i<$n;$i++){
    fscanf(STDIN, "%d", $score[]);
}

for($i=$n-1;$i>=1;$i--) {
    $dap = 0;
    if($score[$i]<$score[$i-1]){
        $dap = $score[$i-1] - $score[$i] + 1;
        $score[$i-1] = $score[$i] -1;
        $hap = $hap + $dap;

    }else if($score[$i]==$score[$i-1]){
        $dap = $dap + 1;
        $score[$i-1] = $score[$i] -1;
        $hap = $hap + $dap;
    }

}

echo $hap;
?>