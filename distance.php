<?php
$distance=$_POST["distance"];
if($_POST["radio"]=="KM")
{
echo $distance/1.609, "miles" ;
}
else
{
echo $distance*1.609, "km";
}
?>
