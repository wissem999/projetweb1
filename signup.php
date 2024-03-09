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
$full_name = $_POST['full_name'] ?? null;
$password1 = $_POST['password1'] ?? null;

if (isset($email)) {  
    $check_query = "SELECT * FROM table2 WHERE email = '$email'";
    $check_result = $database->executeQuery($check_query);

    if ($check_result->num_rows > 0) {
        
        $email_error = "Error: Email already exists.";
    } else {
        
        $sql = "INSERT INTO table2 (email, full_name, password1) VALUES ('$email', '$full_name', '$password1')";
        
        if ($database->executeQuery($sql) === TRUE) {
            
            header("Location: index0.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $database->conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\signup.css">
  <title>Sign Up - CV Generator</title>
</head>
<body>
  <div class="container">
    <form action="" method="post">
      <h2>Sign Up</h2>
      <?php if(!empty($email_error)) { echo "<p>$email_error</p>"; } ?>
      <div class="input-group">
        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name" required>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password1">Password</label>
        <input type="password" id="password1" name="password1" required>
      </div>
      <button type="submit">Sign Up</button>
      <p>Already have an account? <a href="sign in.php">Sign In</a></p>
    </form>
  </div>
</body>
</html>
