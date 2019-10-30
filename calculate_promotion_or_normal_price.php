<?php
$start_day = '2019-10-30';
$end_day = '2019-11-04';

$pro_price_start = '2019-10-31';
$pro_price_end = '2019-11-02';


$start = strtotime($start_day);
$end = strtotime($end_day);
$datediff = $end - $start;

$number_of_days = round($datediff / (60 * 60 * 24));

echo $number_of_days . ' nights';

for($i=0; $i < $number_of_days; $i++)
{
	$booking_day = date ("Y-m-d", strtotime("+".$i." day", strtotime($start_day)));
    
	$booking_day_start = $booking_day;
	$booking_day_end = date("Y-m-d", strtotime("+1 day", strtotime($booking_day_start)));
    
	if ($booking_day_start <= $pro_price_end && $booking_day_start >= $pro_price_start)
	{
		$price = "Promotion price";
	} 
	else 
	{
		$price = "Normal price";
	}
    
	echo $price . ' ['.$booking_day_start.' - '.$booking_day_end.']<br>';
}