<?php

/*
 * Class : dateCalculator
 *
 * Author: Neetika
 *
 * Date: 10 September 2016
 * Calculates total days, week days and complete weeks between two datetime parameters. Also, Performs timezone conversions.
 */
class dateCalculator {
	
	function __construct() {
		
		//Necessary validation for start and end Date.
		$validate = $this->validateParams($_GET['startDate'], $_GET['endDate']);
		
	}
	
	/*
	 * Function : validateParams
	 *
	 * Necessary validations on input values..
	 *
	 * @param (string) $sDate
	 * @param (string) $eDate
	 * @return (string) throws exception.
	 */
	private function validateParams($sDate, $eDate){
		
		try {
			/*Validate if start date or end date is blank.*/
			if($sDate == ''){
				throw new Exception('Start Date or end Date must not be blank.');
			}
			if($eDate == ''){
				throw new Exception('Start Date or end Date must not be blank.');
			}
			$d1 = new DateTime($sDate);
			$d2 = new DateTime($eDate);
			/*Validate to check start date should be less than end date.*/
			$compare = $d1 > $d2;
			if($compare == 1){
				throw new Exception('Start Date must be less than end Date.');
			}
		} catch (Exception $e) {
			echo 'Error: ',  $e->getMessage(), "\n";exit;
		}
		
	}
	
	/*
	 * Function : calNoOfDays
	 *
	 * Find number of days between the entered start date and end date and convert result to sec, min and hours
	 *
	 * @param (string) $sDate
	 * @param (string) $eDate
	 * @param (string) $convert
	 * @return (string) totalDays/Number of sec., mts. or hours.
	 */
	public function calNoOfDays($sDate, $eDate, $convert=''){
		
		try{
			$startDate 	= new DateTime($sDate);	
			$endDate 	= new DateTime($eDate); 
			/*Calculate intervals between start and end date.*/
			$interval	= $startDate->diff($endDate);
			$totalDays  = $interval->format('%a');
			if(!empty($convert)){
				/* This find the sec, mts, and hrs between two datetime variables.
				$diff = (strtotime($eDate) - strtotime($sDate));
				echo "Seconds: ".$diff."; Minutes: ".round(($diff/60),2)."; Hours: ".round(($diff/(60*60)),2);
				This find the sec, mts, and hrs between two datetime variables.*/
				/* This find the  sec, mts, and hrs in calculated number of days*/
				$hours   = $totalDays * 24;
				$minutes = $totalDays * 24 * 60;
				$seconds = $totalDays * 24 * 60 * 60;
				/* This find the  sec, mts, and hrs in calculated number of days*/
				echo "$totalDays Days have total of $seconds Seconds or total of $minutes Minutes or total of $hours Hours";
			}else{
				return $totalDays;
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		
	}
	
	/*
	 * Function : calNoOfWeekDays
	 *
	 * Find number of week days between the entered start date and end date and convert result to sec, min and hours
	 *
	 * @param (string) $startDate
	 * @param (string) $endDate
	 * @param (string) $convert
	 * @return (string) total week Days/Number of sec., mts. or hours.
	 */
	public function calNoOfWeekDays($startDate, $endDate, $convert=''){
		
		//Variable initialization
		$weekDay = 0;
		try{
			
			$startDate 	= new DateTime($startDate);
			$interval   = new DateInterval('P1D');
			$endDate 	= new DateTime($endDate);

			/* Day by Day looping through all the dates within start and end date, to calculate if they are weekdays or weekends.*/
			while($startDate->format("Y-m-d") <= $endDate->format("Y-m-d")){
				/*Iterating through and finding day numbers.*/
				$dayNo = $startDate->format('N');
				if($dayNo < 6){
					/*Adding to week days if the day's are not Sat or Sun(ie where day numbers are not 6 or 7).*/
					$weekDay += 1;
				}
				/*Adding an interval of 1 day to start date*/
				$startDate->add($interval);
			}
			/*Variable weekDay contains the calculated number of week days in the asked intervals.*/
			if(!empty($convert)){
				/* This find the  sec, mts, and hrs in calculated number of days*/
				$hours   = $weekDay * 24;
				$minutes = $weekDay * 24 * 60;
				$seconds = $weekDay * 24 * 60 * 60;
				/* This find the  sec, mts, and hrs in calculated number of days*/
				echo "$weekDay Weekdays have total of $seconds Seconds or total of $minutes Minutes or total of $hours Hours";
			}else{
				return $weekDay;
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		
	}
	
	/*
	 * Function : calNoOfCompleteWeeks
	 *
	 * Find number of complete between the entered start date and end date and convert result to sec, min and hours
	 *
	 * @param (string) $startDate
	 * @param (string) $endDate
	 * @param (string) $convert
	 * @return (string) total complete weeks/Number of sec., mts. or hours.
	 */
	public function calNoOfCompleteWeeks($startDate, $endDate, $convert=''){
		
		try{
			$startDate 	= new DateTime($startDate);	
			$endDate 	= new DateTime($endDate); 
			/*Add full endDate day also, irrespective of time.*/
			/*$interval   = new DateInterval('P1D');
			$endDate->add($interval);*/
			/*Calculate intervals between start and end date.*/
			$interval	= $startDate->diff($endDate);
			$totalDays = $interval->format('%a');
			$completeWeeks = floor($totalDays/7);
			if(!empty($convert)){
				/* This find the  sec, mts, and hrs in calculated number of days*/
				$hours   = $completeWeeks * 7 * 24;
				$minutes = $completeWeeks * 7 * 24 * 60;
				$seconds = $completeWeeks * 7 * 24 * 60 * 60;
				/* This find the  sec, mts, and hrs in calculated number of days*/
				echo "$completeWeeks complete weeks have total of $seconds Seconds or total of $minutes Minutes or total of $hours Hours";
			}else{
				return $completeWeeks;
			}
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		
	}
	
	/*
	 * Function : compareTimeZones
	 *
	 * Convert start date and end date to different time zones.
	 *
	 * @param (string) $sDate
	 * @param (string) $eDate
	 * @param (string) $compareDTZs
	 * @return (string) converted start date and end date to asked timezone.
	 */
	public function compareTimeZones($sDate, $eDate, $compareDTZs){
		
		try{
			$sDateOutput = $sDate;
			//PHP Datetime class :Converts date string according to a different time zone.
			$date = new DateTime($sDate, new DateTimeZone(date_default_timezone_get()));
			$date->setTimezone(new DateTimeZone($compareDTZs));
			$sDateOutput .= " converted to time zone: $compareDTZs is ".$date->format('d-m-Y h:i');
			
			$eDateOutput = $eDate;
			//PHP Datetime class :Converts date string according to a different time zone.
			$date = new DateTime($eDate, new DateTimeZone(date_default_timezone_get()));
			$date->setTimezone(new DateTimeZone($compareDTZs));
			$eDateOutput .= " converted to time zone: $compareDTZs is ".$date->format('d-m-Y h:i');
			
			$output = $sDateOutput.'<br/>'.$eDateOutput;
			return $output;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		
	}
	
}

?>