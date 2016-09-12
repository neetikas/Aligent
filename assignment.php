<!DOCTYPE html>
<html>
<head>
<title>Aligent: Assignment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assignment.css">
<link href="dateTimePicker/bootstrap3/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="dateTimePicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>   
<script src="dateCalculator.js"></script>      
</head>
<body>

<div class="container group">
	<div class="row topRow">
		Day/Weeks Calculator
		<br/><hr>
	</div>
	<div class="row">
		<b>Input any Start Date and End Date in the boxes below. Next hit the green buttons for required computations. Click convert button to convert result into seconds, minutes, hour and years</b>
	</div>
	<div class="row">
		Default Timezone is: <b><?php echo date_default_timezone_get(); ?></b>
	</div>
	<div class="col col1">
		Start Date<br/>
		<div class="input-group date form_datetime col-md-9" data-date="2016-09-26T05:25:07Z" data-date-format="dd-mm-yyyy hh:ii" data-link-field="dtp_input1">
			<input class="form-control" size="16" type="text" value="" name="sDate" id="sDate">
			<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
		</div>
	</div>
	<div class="col col2">
		End Date<br/>
		<div class="input-group date form_datetime col-md-9" data-date="2016-09-26T05:25:07Z" data-date-format="dd-mm-yyyy hh:ii" data-link-field="dtp_input1">
			<input class="form-control" size="16" type="text" value="" name="eDate" id="eDate">
			<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
		</div>
	</div>
	<div class="row result" id="result">
	</div>
	<div class="row bottomRow">
		<div class="row1">
			Find number of days between the entered start date and end date:
		</div>
		<div class="row2">
			<input type="submit" value="Calculate Days" id="noOfDays">
		</div>
		<div class="row3">
			<input type="submit" value="Convert" id="noOfDaysConvert">
		</div>
	</div>
	<div class="row bottomRow">
		<div class="row1">
			Find number of week days between the entered start date and end date:
		</div>
		<div class="row2">
			<input type="submit" value="Calculate Week Days" id="noOfWeekDays">
		</div>
		<div class="row3">
			<input type="submit" value="Convert" id="noOfWeekDaysConvert">
		</div>
	</div>
	<div class="row bottomRow">
		<div class="row1">
			Find number of complete weeks between the entered start date and end date:
		</div>
		<div class="row2">
			<input type="submit" value="Calculate Complete Weeks" id="noOfCompleteWeeks">
		</div>
		<div class="row3">
			<input type="submit" value="Convert" id="noOfCompleteWeeksConvert">
		</div>
	</div>
	<div class="row bottomRow">
		<div class="row1">
			Compare start date and end date of this timezone with other timezones:<br/>
			<select name="timeZone" id="timeZone">
				<option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
				<option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
				<option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
				<option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
				<option value="America/Anchorage">(GMT-09:00) Alaska</option>
				<option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
				<option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
				<option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
				<option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
				<option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
				<option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
				<option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
				<option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
				<option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
				<option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
				<option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
				<option value="America/Havana">(GMT-05:00) Cuba</option>
				<option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
				<option value="America/Caracas">(GMT-04:30) Caracas</option>
				<option value="America/Santiago">(GMT-04:00) Santiago</option>
				<option value="America/La_Paz">(GMT-04:00) La Paz</option>
				<option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
				<option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
				<option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
				<option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
				<option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
				<option value="America/Araguaina">(GMT-03:00) UTC-3</option>
				<option value="America/Montevideo">(GMT-03:00) Montevideo</option>
				<option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
				<option value="America/Godthab">(GMT-03:00) Greenland</option>
				<option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
				<option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
				<option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
				<option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
				<option value="Atlantic/Azores">(GMT-01:00) Azores</option>
				<option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
				<option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
				<option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
				<option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
				<option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
				<option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
				<option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
				<option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
				<option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
				<option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
				<option value="Asia/Beirut">(GMT+02:00) Beirut</option>
				<option value="Africa/Cairo">(GMT+02:00) Cairo</option>
				<option value="Asia/Gaza">(GMT+02:00) Gaza</option>
				<option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
				<option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
				<option value="Europe/Minsk">(GMT+02:00) Minsk</option>
				<option value="Asia/Damascus">(GMT+02:00) Syria</option>
				<option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
				<option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
				<option value="Asia/Tehran">(GMT+03:30) Tehran</option>
				<option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
				<option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
				<option value="Asia/Kabul">(GMT+04:30) Kabul</option>
				<option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
				<option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
				<option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
				<option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
				<option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
				<option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
				<option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
				<option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
				<option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
				<option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
				<option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
				<option value="Australia/Perth">(GMT+08:00) Perth</option>
				<option value="Australia/Eucla">(GMT+08:45) Eucla</option>
				<option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
				<option value="Asia/Seoul">(GMT+09:00) Seoul</option>
				<option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
				<option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
				<option value="Australia/Darwin">(GMT+09:30) Darwin</option>
				<option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
				<option value="Australia/Hobart">(GMT+10:00) Hobart</option>
				<option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
				<option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
				<option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
				<option value="Asia/Magadan">(GMT+11:00) Magadan</option>
				<option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
				<option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
				<option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
				<option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
				<option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
				<option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
				<option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
			</select>											
		</div>
		<div class="row2">
			<input type="submit" value="Compare Different Timezones" id="compareDTZs">
		</div>
	</div>
</div>

<script type="text/javascript" src="dateTimePicker/bootstrap3/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="dateTimePicker/bootstrap3/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="dateTimePicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="dateTimePicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	
</script>
</body>
</html>