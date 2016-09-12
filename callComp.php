<?php
//This File handles ajax calls.

include 'dateCalculator.php';

// Instantiating dateCalculator class
$calObj = new dateCalculator();

//Switching based on actions to be performed.
switch ($_GET['performCal']) {
	case 'noOfDays':
		if(!isset($_GET['convert'])){
			$result = $calObj->calNoOfDays($_GET['startDate'],$_GET['endDate']);
			$output = "Total of ".$result." day intervals.";
		}
		else{
			$output = $calObj->calNoOfDays($_GET['startDate'],$_GET['endDate'],$_GET['convert']);
		}
		break;
	case 'noOfWeekDays':
		if(!isset($_GET['convert'])){
			$result = $calObj->calNoOfWeekDays($_GET['startDate'],$_GET['endDate']);
			$output = "Total of ".$result." week days.";
		}
		else{
			$output = $calObj->calNoOfWeekDays($_GET['startDate'],$_GET['endDate'],$_GET['convert']);
		}
		break;
	case 'noOfCompleteWeeks':
		if(!isset($_GET['convert'])){
			$result = $calObj->calNoOfCompleteWeeks($_GET['startDate'],$_GET['endDate']);
			$output = "Total of ".$result." complete weeks.";
		}
		else{
			$output = $calObj->calNoOfCompleteWeeks($_GET['startDate'],$_GET['endDate'],$_GET['convert']);
		}
		break;
	case 'compareTimeZones':
		$output = $calObj->compareTimeZones($_GET['startDate'],$_GET['endDate'],$_GET['compareDTZs']);
		break;
}

echo $output;

exit;
?>