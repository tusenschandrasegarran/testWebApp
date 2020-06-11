<?php
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "apuadmin", "pwd" => "apu@123456", "Database" => "ddacdbtp042433", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:ddactp042433.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
if(!$conn){
  die("Failed to connect");
}
echo "Connection Success";

?>
