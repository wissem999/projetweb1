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

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "db1";

$database = new Database($servername, $username, $password, $dbname);

$name = $_POST['name'] ?? null;
$firstname = $_POST['firstname'] ?? null;
$address = $_POST['address'] ?? null;
$phone = $_POST['phone'] ?? null;
$email = $_POST['email'] ?? null;
$skill1 = $_POST['skill1'] ?? null;
$skill2 = $_POST['skill2'] ?? null;
$skill3 = $_POST['skill3'] ?? null;
$skill4 = $_POST['skill4'] ?? null;
$school = $_POST['school'] ?? null;
$degree = $_POST['degree'] ?? null;
$start_year = $_POST['start_year'] ?? null;
$end_year = $_POST['end_year'] ?? null;
$field_of_study = $_POST['field_of_study'] ?? null;
$company = $_POST['company'] ?? null;
$position = $_POST['position'] ?? null;
$start_date = $_POST['start_date'] ?? null;
$end_date = $_POST['end_date'] ?? null;
$description = $_POST['description'] ?? null;

if (isset($name)) {
    $sql = "INSERT INTO table1 (nom, prenom, adresse, telephone, email, competence1, competence2, competence3, competence4, nomentreprise, posteoccupe, datedebut, datefin, descriptiontaches, nomecole, diplomeobtenu, anneedebut, anneefin, domaineetude) VALUES ('$name', '$firstname', '$address', '$phone', '$email', '$skill1', '$skill2', '$skill3', '$skill4', '$company', '$position', '$start_date', '$end_date', '$description', '$school', '$degree', '$start_year', '$end_year', '$field_of_study')";

    if ($database->executeQuery($sql) === TRUE) {
       
    } else {
        echo "Erreur : " . $sql . "<br>" . $database->conn->error;
    }
}

$select_query = isset($recherchetelephone) ? "SELECT * FROM table1 WHERE telephone='$recherchetelephone' ORDER BY code DESC LIMIT 1" : "SELECT * FROM table1 ORDER BY code DESC LIMIT 1";
$result = $database->executeQuery($select_query);

if ($result->num_rows > 0) {
    $row = $database->fetchSingle($result);
} else {
    $row = [
        'prenom' => null,
        'nom' => null,
        'email' => null,
        'telephone' => null,
        'adresse' => null,
        'nomecole' => null,
        'diplomeobtenu' => null,
        'anneedebut' => null,
        'anneefin' => null,
        'domaineetude' => null,
        'nomentreprise' => null,
        'posteoccupe' => null,
        'datedebut' => null,
        'datefin' => null,
        'descriptiontaches' => null,
        'competence1' => null,
        'competence2' => null,
        'competence3' => null,
        'competence4' => null,
    ];
    echo "Aucun enregistrement trouvé.";
}

$database->close();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon CV</title>
  <link rel="stylesheet" href="css\cv2.css">
  <style>.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #34495e;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #2c3e50;
}
</style>
</head>
<body>
  <div class="container">
    <header>
      <h1><?php echo($row["prenom"].' '.$row["nom"]) ?></h1>
      <p></p>
    </header>
    <section class="section">
      <h2>Contact Information</h2>
      <ul>
        <li><strong>Email:</strong><?php echo($row["email"]) ?></li>
        <li><strong>Phone:</strong><?php echo($row["telephone"]) ?></li>
        <li><strong>Address:</strong><?php echo($row["adresse"]) ?></li>
      </ul>
    </section>
    <section class="section">
      <h2>Education</h2>
      <ul>
        <li><strong>School name</strong><?php echo($row["nomecole"])?></li>
        <li><strong>Degree obtained</strong><?php echo($row["diplomeobtenu"])?></li>
        <li><strong>Year start:</strong><?php echo($row["anneedebut"])?></li>
        <li><strong>Year end:</strong><?php echo($row["anneefin"])?></li>
        <li><strong>Institution:</strong><?php echo($row["domaineetude"])?></li>
      </ul>
    </section>
    <section class="section">
      <h2>Work Experience</h2>
      <ul>
        <li><strong>Company name:</strong><?php echo($row["nomentreprise"])?></li>
        <li><strong>Position held</strong><?php echo($row["posteoccupe"])?></li>
        <li><strong>Start date:</strong><?php echo($row["datedebut"])?></li>
        <li><strong>End date:</strong><?php echo($row["datefin"])?></li>
        <li><strong>Description of responsibilities and achievements:</strong><br><?php echo($row["descriptiontaches"])?></li>
      </ul>
    
    </section>
    <section class="section">
      <h2>Skills</h2>
      <ul>
        <li><?php echo($row["competence1"]) ?></li>
        <li><?php echo($row["competence2"]) ?></li>
        <li><?php echo($row["competence3"]) ?></li>
        <li><?php echo($row["competence4"]) ?></li>
      </ul>
    </section>
  </div>
  <div class="container">

    
    <a href="generer_cv2en.php" class="button">Download CV  PDF</a>
  </div>
</body>
</html>
