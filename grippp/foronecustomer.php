<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Customer Details</h2>

<table border="2">
  <tr>
    <td>Customer Id</td>
    <td>Customer Name</td>
    <td>E-Mail</td>
	<td>Current Balance</td>
	
  </tr>

<?php
include "dbconn.php"; // Using database connection file here

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            <tr>
    <td><?php echo $data['custid']; ?></td>
    <td><?php echo $data['custname']; ?></td>
    <td><?php echo $data['email']; ?></td>
	 <td><?php echo $data['currentbalance']; ?></td>
  </tr>	
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
}

/*include "dbconn.php"; // Using database connection file here

//$records = mysqli_query($db,"select * from customers"); // fetch data from database
$result = mysql_query("SELECT custid FROM customers WHERE option_name='homepage'");
$row = mysql_fetch_array($result);
print_r ($row);

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
</table>*/

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
