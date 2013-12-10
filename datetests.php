<?php
include("dateclass.php");

echo "Բուն հայկական ամսաթվի հաշվարկման կլասս<br>";
echo "<br>Այսօր և այսժամ<br>";
$ArmDate = new ArmHaykyanDate(1);
//echo $ArmDate->getPropertyes();
echo $ArmDate->getArmHaykyanDate();
echo "<br>";

echo "<br>2014,8,11,2,1<br>";
$ArmDate1 = new ArmHaykyanDate(2014,8,11,2,1);
echo $ArmDate1->getArmHaykyanDate();
echo "<br>";


echo "<br>2013-10-16 11:12:40<br>";
$ArmDate2 = new ArmHaykyanDate("2013-10-16 11:12:40",1);
echo $ArmDate2->getArmHaykyanDate();
echo "<br>";

?>