<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<meta charset="utf-8">
		<title> Add  </title>
        <!--link rel="stylesheet" href="mycss.css" /-->
	</head>
	<body>
		<form method="post" action="">
			<select name="type">
				<option name=""> </option>
				<option name="">exprsss</option>
				<option name="">special</option>
				
				
			</select>
			<table>
				<tr>
					<td>train_no:</td>
					<td><input type="text" name="train_no" /></td>
				</tr>
				<tr>
					<td>departure_station</td>
					<td><input type="text" name="departure_station" /></td>
				</tr>
				<tr>
					<td>time</td>
					<td><input type="text" name="time"/></td>
				</tr>
				<tr>
					<td>destination_station</td>
					<td><input type="text" name="destination_station" /></td>
				</tr>
				<tr>
					<td>arrival_time</td>
					<td><input type="text" name="arrival_time" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value="Add" /></td>
				</tr>
			</table>

		</form>
		<!--====================================fOOter==================-->
		
		<!--=====================================fOOter========================-->
	</body>
</html>
 <!----------------- db FOr INsert---------> 
<?php
	include('connect.php');
		if(isset($_POST['submit']))
	    {
			$train_no=$_POST['train_no'] ;
			$departure_station=$_POST['departure_station'] ;					
			$time=$_POST['time'] ;
			$destination_station=$_POST['destination_station'] ;
			$arrival_time=$_POST['arrival_time'] ;					
			$type=$_POST['type'];
			
		
			$sql ="INSERT INTO  $type (train_no,departure_station,time,destination_station,arrival_time) 
			 VALUES ('$train_no','$departure_station','$time','$destination_station','$arrival_time)";
					
				if( mysql_query($sql)) 	
				{
				  echo "
						<script type='text/javascript'>
							alert('Your Data Are IN');
						</script>
						";
				}
				else
				{
				  echo "
						<script type='text/javascript'>
							alert(' Your Data Not Inserted');
						</script>
						";
				}		
		}
?>
