<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="insert.php">Insert New Record</a>
  <a href="update.php">Update the Record</a>  
| <a href="logout.php">Logout</a></p>
<h1>Delete Record</h1>

<p style="color:#FF0000;"></p>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="text" placeholder="Enter the Id" required/>
<input name="submit" type="submit" value="Delete" />
</form>
</div>
</div>
</body>
</html>


<?php

require_once 'dbconfig.php';

if (isset($_POST['submit']))
{
    $playerId= $_POST['id'];
    #$checksql= "delete from players where playerId = $playerId AND competitionLevel='national'";
    $selectsql= "select * from players where playerId = $playerId AND competitionLevel='International'";
    $selectres= mysqli_query($con,$selectsql);
    if (mysqli_num_rows($selectres)>0)
    {
        echo "Players who are  participating at the international level cannot be deleted, only data for national level will be deleted.";
    }

    else{
            $checksql= "delete from players where playerId = $playerId ";
            $queryId= mysqli_query($con,$checksql);

    if($queryId=true)
    {
        echo "<h1>data deleted</h1>";
    }
    else
    {
        echo "not saved";
    }

    }
    }
    
   



?>