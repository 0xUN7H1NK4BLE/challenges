<?php
$A = chr(0x68) . chr(0x74) . chr(0x74) . chr(0x70) . chr(0x73);
$B = array("bXlzdGVyaW91cw==", "Ly8", "dW50aGluaw==", "YWJsZS5tZQ==", "L2Zvcg==", "LWZsYWcudHh0");

$C = function($v) {
    return base64_decode($v);
};

$D = $C($B[0]);  
$E = $C($B[1]);  
$F = $C($B[2]);  
$G = $C($B[3]);  
$H = $C($B[4]);  
$I = $C($B[5]);  

$J = $A . ":" . $E . $F . $G . $H . $I;

$mapper = [
    "alpha" => "echo",
    "omega" => "J"
];

$alpha = $mapper["alpha"];
$omega = $$mapper["omega"];

$alpha("Find the truth: " . str_rot13(strrev(base64_decode(strrev(base64_encode(strrev(str_rot13($omega))))))));
?>