<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css\style.css">
  <style>.model-selector select {
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ddd;
  background-color: #f5f5f5;
  font-size: 16px;
  color: #34495e;
  cursor: pointer;
}
.model-selector label {
  display: block;
  margin-bottom: 10px;
  color: #34495e;
  font-size: 24px; 
}
.model-selector select:hover {
  background-color: #e0e0e0;
}

.model-selector select:focus {
  outline: none;
  box-shadow: 0 0 2px 1px #2980b9;
}
.model-selector {
  display: flex;
  align-items: center; 
  margin-bottom: 20px; 
}

.model-selector label {
  margin-right: 10px; 
}



</style>
</head>
<body>
    
<form id="cv-form" method="post" action="template cv1fr.php">
    <div class="form-section">
      <h2>Informations de base</h2>
      <div class="form-row">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">  
      </div>
      <div class="form-row">
        <label for="firstname">Prenom:</label>
        <input type="text" id="firstname" name="firstname"> 
      </div>
      <div class="form-row">
        <label for="address">Adresse:</label>
        <input type="text" id="address" name="address">
      </div>
      <div class="form-row">
        <label for="phone">Téléphone:</label>
        <input type="number" id="phone" name="phone">
      </div>
      <div class="form-row">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
      </div>
    </div>
    <div class="form-section">
      <h2>Compétences</h2>
      <div class="form-row">
        <label for="skill1">Competence 1:</label>
        <input type="text" id="skill1" name="skill1">
      </div>
      <div class="form-row">
        <label for="skill2">Competence 2:</label>
        <input type="text" id="skill2" name="skill2">
      </div>
      <div class="form-row">
        <label for="skill3">Competence 3:</label>
        <input type="text" id="skill3" name="skill3">
      </div>
      <div class="form-row">
        <label for="skill4">Compétence 4:</label>
        <input type="text" id="skill4" name="skill4">
      </div>
    </div>
    <div class="form-section">
      <h2>Expérience de travail</h2>
      <div id="work-experience">
        <div class="form-row">
        </div>
        <div class="form-row">
          <label for="company">Nom de l'entreprise:</label>
          <input type="text" id="company" name="company">
        </div>
      </div>
        <div class="form-row">
          <label for="position">Poste occupé:</label>
          <input type="text" id="position" name="position">
        </div>
        <div class="form-row">
          <label for="start_date">Date de début:</label>
          <input type="date" id="start_date" name="start_date">
        </div>
        <div class="form-row">
          <label for="end_date">Date de fin:</label>
          <input type="date" id="end_date" name="end_date">
        </div>
        <div class="form-row">
          <label for="description">Description des tâches:</label>
          <textarea id="description" name="description"></textarea>
        </div>

   
       

    </div>
      </div>
    
    </div>
    <div class="form-section">
    <h2>Formation</h2>
    <div id="education">
      <div class="form-row">
        <label for="school"></label>
        <input type="text"  >
      </div>
      <div class="form-row">
        <label for="school">Nom de l'école:</label>
        <input type="text" id="school" name="school">
      </div>
      <div class="form-row">
        <label for="degree">Diplôme obtenu:</label>
        <input type="text" id="degree" name="degree">
      </div>
      <div class="form-row">
        <label for="start_year">Année de début:</label>
        <input type="text" id="start_year" name="start_year">
      </div>
      <div class="form-row">
        <label for="end_year">Année de fin:</label>
        <input type="text" id="end_year" name="end_year">
      </div>
      <div class="form-row">
        <label for="field_of_study">Domaine d'étude:</label>
        <input type="text" id="field_of_study" name="field_of_study">
      </div>
      
    </div>
    
    
  </div>
    </div>
   
  </div>

  <div class="model-selector">
      <label for="model-select">Modele de CV:</label>
      <select id="model-select" onchange="changeAction()">
        <option value="template cv1fr.php">Modele 1</option>
        <option value="cv template 2.php">Modele 2</option>
      </select>
    </div>

  <button id="start-button" class="button1" type="submit">Generer</button>

<script>
  function changeAction() {
    var selectElement = document.getElementById("model-select");
    var selectedValue = selectElement.options[selectElement.selectedIndex].value;
    document.getElementById("cv-form").action = selectedValue;
  }
</script>

</body>
</html>
