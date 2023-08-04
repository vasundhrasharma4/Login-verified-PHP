<?php
session_start();
// if value is stored in session
if (!isset($_SESSION['username']))
{
    echo "10 assignment";
   
}

// Get the username from the session
$usernameSession = $_SESSION['username'];
    echo "<h1>$usernameSession</h1>";

?>

<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div>
<p><b>Welcome to Bingo Sports Dashboard. This is a Player Management System</b></p>
</div><br/>
<div class="form">
   <a href="dashboard.php">Dashboard</a> 
|  <a href="insert.php">Insert New Record</a>
|  <a href="view.php">View Records</a>
|  <a href="update.php">Update Records</a>
|  <a href="delete.php">Delete Records</a>
|  <a href="logout.php">Logout</a>

</div>
</body>
</html>