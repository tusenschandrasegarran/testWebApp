<?php
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "apuadmin", "pwd" => "apu@123456", "Database" => "ddacdbtp042433", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:ddactp042433.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
if(!$conn){
  die("Failed to connect");
}
//echo "Connection Success";
  $tsql= "SELECT * FROM [dbo].[restaurant]";
$getResults= sqlsrv_query($conn, $tsql);
if ($getResults == FALSE)
{
die(sqlsrv_errors());
}
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
{
echo "<table>";
echo "<tr>";
echo "<td>". $row['restaurant_id'] . "</td>";
echo "<td>". $row['restaurant_name'] ."</td>";
echo "<td>". $row['restaurant_address'] . "</td>";
echo "<td>". $row['restaurant_phone'] . "</td>";
echo "</tr>";
echo "</table>";
}
sqlsrv_free_stmt($getResults);
?>
