<?php
$gross_income = 1200000;   // change income value here
$tax = 0;

if ($gross_income < 500000) {
    $tax = 0;
}
elseif ($gross_income > 500000 && $gross_income < 1000000) {
    $tax = $gross_income * 0.10;
}
elseif ($gross_income > 1000000 && $gross_income < 1500000) {
    $tax = $gross_income * 0.15;
}
elseif ($gross_income > 1500000 && $gross_income < 2000000) {
    $tax = $gross_income * 0.20;
}
else {
    $tax = $gross_income * 0.25;
}

echo "Gross Income: ₹" . $gross_income . "<br>";
echo "Income Tax: ₹" . $tax;
?>
