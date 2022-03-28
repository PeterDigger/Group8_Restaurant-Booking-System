<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "group8db"; /* Database name */

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}