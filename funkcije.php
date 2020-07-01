<?php
echo dijagonala($_GET['a'], $_GET['b']);

function dijagonala($a, $b) {
    return sqrt($a*$a + $b*$b);
}
