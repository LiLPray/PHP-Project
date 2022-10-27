<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV de ANDRE Gwendal</title>
    <link rel="stylesheet" href="css/css1.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  
  <?php
  include("resources/formulaire.php");
  ?>


<body>
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"></a>
              <img src="images/pdp.jpg" alt="photo de profil" height="100px" width="100px">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">                 
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="contact"> Me contacter</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="mail.HTML">Email</a></li>
                      <li><a class="dropdown-item" href="https://www.linkedin.com/in/gwendal-andre-4a86b7253/">Linkedin</a></li>
                      <li><a class="dropdown-item" href="login.php">Admin</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        </div>
    </header>

    <!--title  -->
      <h1>Curriculum Vitae</h1>
      <h2>ANDRE Gwendal</h2>
      <hr/>
      <h3>Qui suis-je ?</h3>
      <p class="presentation">
        Je m'appelle ANDRE Gwendal, j'ai 18 ans. Je suis actuellement en 1ère année au Gaming Campus en Gtech.
        <br>Je suis très passionné et motivé pour intégrer votre entreprise. 
      </p>
      <hr/>
  <section>
    <!-- interests, skills, experiences, centers in the form of Flexbox-->
    <div id="conteneur1">
    <p class="head">Centres d'intérêts</p>
    <ul>
        <li>L'informatique </li>
        <li>La programmation</li>
        <li>Le sport</li>
        <li>Les jeux vidéos</li>
    </ul>
    </div>

    <div id="conteneur2">
    <p class="head">Compétences</p>
    <ul>
        <li>Web design avec HTML et CSS</li>
        <li>Connaissance sur les languages Python, MySQL et PHP</li>
    </ul>
    </div>

    <div id="conteneur3">
    <p class="head">Education</p>
    <ul>
        <a href="https://saintpierre91.org/">
            <li>Lycée Institut Saint-Pierre</li>
        </a>
        <a href="https://gamingcampus.fr/campus/paris.html">
            <li>Gaming Campus Paris</li>
        </a>
    </ul>
    </div>

    <div id="conteneur4">
    <p class="head">Diplomes</p>
    <ul>
        <li>Baccalauréat mention assez bien</li>
        <li>Cambridge niveau B2</li>
    </ul>
    </div>

    <div id="conteneur5">
    <p class="head">Expérience professionelles</p>
    <ul>
        <li>Stage de 3ème dans l'entreprise de la Société Générale</li>
        <li>Animateur Sportif</li>
    </ul>

    <div id="conteneur6">
    <p class="head">Loisirs</p>
    <ul>
        <li>Handball</li>
        <li>Jeux Vidéos</li>
    </ul>
    </div>
  </section>

<!-- check mark to know the feeling on the CV -->
  <div id="coche">
    <p class="question">Ce CV vous a-t-il plu?</p>
    <ul class="list-group">
      <li class="list-group-item">
        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" checked>
        <label class="form-check-label" for="firstRadio">Oui beaucoup!</label>
      </li>
      <li class="list-group-item">
        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
        <label class="form-check-label" for="secondRadio">Moyennement...</label>
      </li>
      <li class="list-group-item">
        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio">
        <label class="form-check-label" for="thirdRadio">Non.</label>
      </li>
    </ul>
  </div>

<!-- The form to contact me  -->
  <div class="container">
	  <form method="post">
  		<h1>Formulaire de contact</h1>
    	<label for="nom">Nom</label>
    	<input type="text" id="nom" name="lastname" placeholder="Votre nom">

		  <label for="prenom">Prénom</label>
    	  <input type="text" id="prenom" name="firstname" placeholder="Votre nom">

		  <label for="tel">Téléphone</label>
    	  <input type="text" id="tel" name="telephone" placeholder="Votre numéro de téléphone">

    	<label for="mail">Email</label>
    	  <input type="text" id="mail" name="email" placeholder="Votre mail">

		  <label for="subject">Message</label>
    	  <textarea id="subject" name="message" placeholder="Ecrivez votre message" style="height:200px"></textarea>
		  <br></br>
    	<input type="submit" value="Envoyer" name="sendmail">
  	</form>
  </div>

  
  <!-- Footer for copyright of CV -->
  <footer>
    <p class="footer"> Ⓒ Réalisé par ANDRE Gwendal</p>
  </footer>
     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

