<html>

<head>

  <title>Login Page</title>

</head>

<body>

  <h2>Login</h2>

  <form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login" name="login">
  </form>

</body>

</html>

<?php
    require_once 'dbconfig.php';

 class Users
  {
    public $userId;
    public $username;
    public $password;
    public function __construct($userId,$username,$password)
    {
        $this->userId=$userId;
        $this->username=$username;
        $this->password=$password;
    }

    public function getuserId()
    {
        return $this->userId;
    }
    public function getusername()
    {
        return $this->ename;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function setuserId($userId)
    {
        $this->userId=$userId;
    }
    public function setusername($username)
    {
        $this->enamed=$username;
    }
    public function setpassword($password)
    {
        $this->password=$password;
    }
    public function __toString()
    {
        return "<tr><td>$this->userId</td> <td>$this->username</td> <td>$this->password</td></tr>";
    }
    public static function header()
    {
        echo "<table border='1'>";
        echo "<tr><th>Emp Id</th> <th>Name</th> <th>Salary</th></tr>";
    }
    public static function footer()
    {
        echo "</table>";
    }
  }
  

  $obj1=new Users(1,"Swariski_Alam","zh1789#");
  $obj2=new Users(2,"John_Smith","Ct1901@");
  # to print these objects for users we can uncomment following three lines from 83 to 85
  Users::header();
  echo $obj1;
  echo $obj2;


  #session start 
    session_start();
    #this condition will work when user will click on login button.
           if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                // Check username and password against the database
                $query = "SELECT * FROM users WHERE userName = '$username' AND password = '$password'";
                $result =mysqli_query($con,$query);

               #this condition works when the entered username and password matches values in database.
                if (mysqli_num_rows($result)==1)
                 {
                    $_SESSION['username'] = $username;
                    header('Location:http://localhost/assignment3_bingosports/dashboard.php');  
                    
                                #cookies setup only if it matches the credentials stored in database                    
                           if (isset($_POST['login']))
                                {
                                //setting up cookie
                                setcookie("username",$_POST["username"],time()+3600);
                                setcookie("password",$_POST["password"],time()+3600);
                                echo "Cookies set sucessfully!";
                                }

                            else
                                {
                                setcookie("username","");
                                setcookie("password","");
                                echo "Cookies are not set";
                                }
                    
                } 

                #if username and password doen't matched then it will shows error.
                else 
                {
                    echo '<div style=" background-color:pink; height:50px">Invalid username or password</div>';
                }
            
           }
           ?>
           <?php
            

?>



