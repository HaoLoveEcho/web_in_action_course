<style>
* {margin-left:30px;}
th {font-family: Arial; font-size:12pt; font-weight:bold; line-height:18pt;}
td {vertical-align:top; font-family: Arial; font-size:10pt;}
table { border:0;}
</style>



<title>Date and time in PHP</title>

<h1>Date and time in PHP</h1>


<table> 

	<th><br>DAY FORMATS</th>
		<tr><td>date('l') = Long day</td><td> <?php echo date('l') ; ?></td></tr>
		<tr><td>date('D') = Short day</td><td> <?php echo date('D') ; ?><br><br></td></tr>

		<tr><td>date('d') = Date of the month</td><td> <?php echo date('d'); ?></td></tr>
		<td>date('j') = Date of the month no leading zero</td><td> <?php echo date('d'); ?><br><br></td></tr>

		<tr><td>date('S') = Ordinal suffix</td><td> <?php echo date('S'); ?><br><br></td></tr>

		<tr><td>date('w') = Date of the week ('numerical')</td><td> <?php echo date('w'); ?></td></tr>
		<tr><td>date('N') = Date of the week ('numerical')</td><td> <?php echo date('N'); ?></td></tr>

		<tr><td>date('z') = Day number of the year</td><td> <?php echo date('z'); ?></td></tr>
	
	
	<th><br>WEEK FORMATS</th>

		<tr><td>date('W') = Week number of the year</td><td> <?php echo date('W'); ?></td></tr>
	
	
	<th><br>MONTH FORMATS</th>
	
		<tr><td>date('F') = Long month</td><td> <?php echo date('F'); ?></td></tr>
		<tr><td>date('M') = Short month</td><td> <?php echo date('M'); ?></td></tr>
		<tr><td>date('m') = Month ('numerical with leading zero')</td><td> <?php echo date('m'); ?></td></tr>
		<tr><td>date('n') = Month ('numerical without leading zero')</td><td> <?php echo date('n'); ?><br><br></td></tr>
		<tr><td>date('t') = Number of days in current month</td><td> <?php echo date('t'); ?></td></tr>

		
	<th><br>YEAR FORMATS</th>
		<tr><td>date('Y') = Long 4-digit year</td><td> <?php echo date('Y'); ?></td></tr>
		<tr><td>date('y') = Short 2-digit year</td><td> <?php echo date('y'); ?><br><br></td></tr>
		<tr><td>date('L') = Leap year? ('0 or 1')</td><td> <?php echo date('L'); ?></td></tr>
		
		
	<th><br>TIME FORMATS</th>
		<tr><td>date('A') = AM or PM</td><td> <?php echo date('A'); ?></td></tr>
		<tr><td>date('a') = am or pm</td><td> <?php echo date('a'); ?><br><br></td></tr>

		<tr><td>date('g') = Hour ('12 hr clock, without leading zeros')</td><td> <?php echo date('g'); ?></td></tr>
		<tr><td>date('h') = Hour ('12 hr clock, with leading zeros')</td><td> <?php echo date('h'); ?><br><br></td></tr>
		
		<tr><td>date('G') = Hour ('24 hr clock, without leading zeros ')</td><td> <?php echo date('G'); ?></td></tr>
		<tr><td>date('H') = Hour ('24 hr clock, with leading zeros')</td><td> <?php echo date('H'); ?><br><br></td></tr>		

		<tr><td>date('i') = Minutes with leading zeros</td><td> <?php echo date('i'); ?><br><br></td></tr>
		
		<tr><td>date('s') = Seconds with leading zeros</td><td> <?php echo date('s'); ?><br><br></td></tr>
		<tr><td>date('U') = Seconds since Unix Epoch</td><td> <?php echo date('U'); ?><br><br></td></tr>	

		<tr><td>date('u') = Microseconds</td><td> <?php echo date('u'); ?><br><br></td></tr>

		<tr><td>date('e') = Timezone</td><td> <?php echo date('e'); ?></td></tr>
		<tr><td>date('T') = Timezone ('abbrv')</td><td> <?php echo date('T'); ?></td></tr>

		<tr><td>date('I') = Daylight saving time? ('0 or 1')</td><td> <?php echo date('I'); ?><br><br></td></tr>

		<tr><td>date('O') = Offset from GMT</td><td> <?php echo date('O'); ?></td></tr>
		<tr><td>date('P') = Offset from GMT ('with colon')</td><td> <?php echo date('P'); ?></td></tr>
		<tr><td>date('Z') = Offset from GMT in seconds</td><td> <?php echo date('Z'); ?><br><br></td></tr>

		<tr><td>date('c') = ISO 8601 date, time and offset</td><td> <?php echo date('c'); ?><br><br></td></tr>
		
		<tr><td>date('r') = Reformatted date, time and offset </td><td> <?php echo date('r'); ?><br><br></td></tr>
		
		
	<th><br>USEFUL EXAMPLES</th>
		
		<tr><td>date('DATE_RFC822')</td><td> <?php echo date('DATE_RFC822'); ?><br><br></td></tr>
			
		<tr><td>date('"d/m/Y"')</td><td> <?php echo date('"d/m/Y"'); ?></td></tr>
		<tr><td>date('"jS F Y"')</td><td> <?php echo date('"jS F Y"'); ?><br><br></td></tr>
		
		<tr><td>date('l \t\h\e jS')</td>
		<td> <?php echo date('l \t\h\e jS'); ?></td></tr>
		<tr><td>date('l jS \of F Y \a\t h:i:s A')</td>
		<td> <?php echo date('l jS \of F Y \a\t h:i:s a'); ?><br><br></td></tr>

</table>