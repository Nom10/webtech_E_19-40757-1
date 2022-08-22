<?php
$mysqli = new mysqli("localhost", "root", "", "ambulance");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT companyid, companyname, contact, price, location,
FROM ambu WHERE companyname = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $con, $pr, $loc);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>CompanyID</th>";
echo "<td>" . $cid . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $cname . "</td>";
echo "<th>Contact</th>";
echo "<td>" . $con . "</td>";
echo "<th>Price</th>";
echo "<td>" . $pr . "</td>";
echo "<th>Locatio</th>";
echo "<td>" . $loc . "</td>";
echo "</table>";
?> 