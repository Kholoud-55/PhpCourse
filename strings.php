<?php

$string ="Kholoud";
echo $string;
echo '<br>';
echo strtolower($string);
echo strtoupper($string);
echo strlen($string);
echo $string[7];
$string[7]='n';
echo str_replace('Nour','Majed',$string);
?>