<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>
<form>
<h2 align="center">Customer Details</h2>

<table border="2" align="Center">
  <tr>
    <td>Customer Id</td>
    <td>Customer Name</td>
    <td>E-Mail</td>
	<td>Current Balance</td>
	
  </tr>

<?php

include "dbconn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from customers"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['custid']; ?></td>
    <td><?php echo $data['custname']; ?></td>
    <td><?php echo $data['email']; ?></td>
	 <td><?php echo $data['currentbalance']; ?></td>
  </tr>	
<?php
}
?>
</table>

<input id="result" for="result" type="text">
<button id="myButton1" class="float-left submit-button" onClick="function()">Get Details</button>
​
<script type="text/javascript">
document. getElementById("myButton1"). onclick = function () {
location. href = "foronecustomer.php";
};

<?php mysqli_close($db); // Close connection ?>
</form>
</body>
</html>
