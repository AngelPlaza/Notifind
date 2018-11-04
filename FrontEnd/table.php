<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="text-center jumbotron">
  	<div class="page-header">
    <h1>NJIT Notifind</h1> 
	</div>
    <p>Find Free On-Campus!</p>
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
//include('account.php');
echo "hello";
$conn = mysqli_connect("192.168.0.105","admin","password","dataDB");
if (!$conn)
        {
             die("Connection failed:" . mysqli_connect_error());
        }
mysqli_select_db($conn,"dataDB");

$q = "Select * from Events";
$result = mysqli_query($conn, $q);
$rowCount = mysqli_num_rows($result);
var_dump($rowCount);
if (mysqli_num_rows($result) > 0)
        {
        //      $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
                echo "<table>";
                while($rows = mysqli_fetch_array($result,MYSQLI_ASSOC))

        //      for ($cnt = 0 ; $cnt < $rowCount ; $cnt++)
                        {
                            echo"<tr><td>";
                            echo$rows['Name'] .'<br>'. $rows['Location']  .'<br>'. $rows['Description'] .'<br>'.$rows['Time_Start'] ."-".$rows['Time_End'];
                            echo "</td>";
                        }
                echo "</table>";
        }
?>

<div class="panel-footer text-center myfooter">
  <a href="index.html">Home</a>
  <a href="about.html">About</a>
</div>


</body>
</html>

