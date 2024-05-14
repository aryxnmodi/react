<html>
<title> Grade </title>
<body>
<?php

$Physics = 99;
$Chem = 95;
$Bio = 74;
$Maths = 64;
$Computer = 53;

$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;

$total = $Physics + $Chem + $Bio + $Maths + $Computer;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

echo "The Total marks   = " . $total . "/500\n"; 
echo "The Average marks = " . $average . "\n";
echo "The Percentage    = " . $percentage . "%\n";
echo "The Grade         = '" . $grade . "'\n";
?>
