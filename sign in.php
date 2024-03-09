<?php

class Database {
    private $conn;

    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("La connexion a échoué : " . $this->conn->connect_error);
        }
    }

    public function executeQuery($sql) {
        return $this->conn->query($sql);
    }

    public function fetchSingle($result) {
        return $result->fetch_assoc();
    }

    public function close() {
        $this->conn->close();
    }
}

$database = new Database("localhost", "root", "", "db1");

$email_error = "";

$email = $_POST['email'] ?? null;
$password1 = $_POST['password1'] ?? null;

if (isset($email)) {  
    
    $check_query = "SELECT * FROM table2 WHERE email = '$email'";
    $check_result = $database->executeQuery($check_query);

    if ($check_result->num_rows == 0) {
        
        $email_error = "Error: Email n'existe pas ";
    } else {
        
        $user_data = $database->fetchSingle($check_result);
        if ($user_data['password1'] != $password1) {
            
            $email_error = "Error: mot de passe incorrect.";
        } else {
            
            header("Location: index0.php");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\signin.css">
  <title>Sign In - CV Generator</title>
</head>
<body>
  <div class="container">
    <form action="" method="post">
      <h2>Sign In</h2>
      <?php if(!empty($email_error)) { echo "<p>$email_error</p>"; } ?>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="tel" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password1">Password</label>
        <input type="password" id="password1" name="password1" required>
      </div>
      <button type="submit">Sign In</button>
      <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </form>
  </div>
</body>
</html>
