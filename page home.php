<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\style0.css">
  <style>

  .button2 {
  position: absolute;
  top: 20px; 
  right: 20px; 
  background-color: #111628;
  color: #fff;
  border: none;
  padding: 12px 24px;
  font-size: 18px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}
header{
    background-color: #111628;
}
body{
    background-color: #111628;
}
.button2:hover {
  background-color: #0056b3;
}
footer {
  background-image: url('Home.png');
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  padding-top: 850px;

 
}

</style>
</head>
<body>
  <header>


  <a href="sign in.php" class="button2">Se connecter</a>


  </header>

<footer></footer>
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
