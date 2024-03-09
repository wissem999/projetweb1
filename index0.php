<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript" src="scriptindex0.js"></script>  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\style0.css">
  <style>.button2 {
  position: absolute;
  top: 20px; 
  right: 20px; 
  background-color: #34495e;
  color: #fff;
  border: none;
  padding: 12px 24px;
  font-size: 18px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.button2:hover {
  background-color: #0056b3;
}


</style>
</head>
<body>
  <header>
    <h1>Generateur de CV</h1>
    <div class="language-selector">
      <label for="language-select">Langue:</label>
      <select id="language-select">
        <option value="fr">Français</option>
        <option value="en">Anglais</option>
      </select>
    </div>
    <main>


  <a href="sign in.php" class="button2">Se deconnecter</a>
</main>

  </header>
  <main>
    <h2>Créer votre CV en quelques minutes</h2>
    <button id="start-button" class="button1">Commencer</button>
  </main>

  <script>
    document.getElementById("start-button").addEventListener("click", function() {
      var language = document.getElementById("language-select").value;
      var url = "";
      if (language === "fr") {
        url = "index1.php";
      } else if (language === "en") {
        url = "index2.php";
      }
      window.location.href = url;
    });
  </script>
</body>
</html>
