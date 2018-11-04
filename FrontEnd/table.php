<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	.img-responsive{
	max-width: 100%;
	height: auto;
	
}
</style>
</head>
<body>
  <div class="text-center jumbotron" style="background-image: linear-gradient(to left, #d11717, #e00e1f 35%, #dd152d 51%, #750d42);">
	<div class="page-header">
    <h1><strong>NJIT Notifind</strong></h1> 
	</div>
	<p style="color:white">Find Free Food On-Campus!</p>
	<div class="text-center">
	<img class ="rounded" src="NJIT_Logo.png" height="150" width="150">
	</div>
</div>
<!--
<table class="table">
<thead>
<tr>
<th scope="col">H1</th>
<th scope="col">H2</th>
<th scope="col">H3</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">test1</th>
<td> wah </td>
<td>Luigi</td>
</tr>
<tr>  
<th scope="row">test2</th>
<td> Mar </td>
<td>iO</td>
</tr>
</tbody>
</table>
--!>
<?php
include("/home/matt-mongo/ics/635416/ICS.php");
function urlGoogle($name, $location, $description, $google_time_start, $google_time_end)
{
	return("https://calendar.google.com/calendar/r/eventedit?text=$name&dates=$google_time_start/$google_time_end&details=$description&location=$location");	
}

$conn = mysqli_connect("192.168.0.105","admin","password","dataDB");
if (!$conn)
{
	die("Connection failed:" . mysqli_connect_error());
}
mysqli_select_db($conn,"dataDB");

$q = "Select * from Events ORDER By Time_Start";
$result = mysqli_query($conn, $q);
$rowCount = mysqli_num_rows($result);
#var_dump(getType(urlICS($rows['Name'], $rows['Location'], $rows['Description'], $rows['Google_Time_Start'], $rows['Google_Time_End'])));
if (mysqli_num_rows($result) != 0)
{
	echo "<table>";
	echo "<table class='table'>";
	echo "<tbody>";
	while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))

	{
		$date=date_create($rows['Time_Start']);
		$date2=date_create($rows['Time_End']);
		$fullDate=date_format($date,"D, M d, Y")." at ".date_format($date,"g:i A")."<br> to <br> ".date_format($date2,"D, M d, Y")." at ".date_format($date2,"g:i A");
		echo"<tr><th scope='row'>";
		echo'<strong><big><big>Event Name: '.$rows['Name'] .'</big></big></strong><br> Location: '. $rows['Location']  .'<br><br><u> Description</u>: '.' <i>'. $rows['Description'].'</i>'.$fullDate;
		$btnLink = urlGoogle($rows['Name'], $rows['Location'], $rows['Description'], $rows['Google_Time_Start'], $rows['Google_Time_End']);
		echo "</th><td>";
		echo '  
			<div class="btn-group">
			<div class="btn-group">
			<br><br><br><a href = "'.$btnLink.'" target="_blank" class="btn btn-danger btn-lg btn-block">Add to Calendar</a>
			</div>
			</div>	'; 
		echo "</td><td>";
	}
	echo "</tbody></table>";
}
?>

<div class="panel-footer text-center myfooter">
  <a href="192.168.0.103/table.php">Home</a>
  <a href="192.168.0.103/about.html">About</a>
</div>


</body>
</html>

