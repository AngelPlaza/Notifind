<?php
include('account.php');
echo "hello";
$conn = mysqli_connect($severname,$username,$password,$dbname);
if (!$conn)
	{	
	     die("Connection failed:" . mysqli_connect_error());	
	}
mysqli_select_db($conn,"IdentiFind");

$q = "Select * from TestData";
$result = mysqli_query($conn, $q);
$rowCount = mysqli_num_rows($result);
var_dump($rowCount);
if (mysqli_num_rows($result) > 0)
	{
	//	$rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
		echo "<table>";
		while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))

	//	for ($cnt = 0 ; $cnt < $rowCount ; $cnt++)
			{
			    echo"<tr><td>";
		            echo$rows['Title'] .'<br>'. $rows['Location']  .'<br>'. $rows['Description'] .'<br>'.$rows['Time_Start'] ."-".$rows['Time_End'];
			    echo "</td>";
			}	
		echo "</table>";
	}
?>
