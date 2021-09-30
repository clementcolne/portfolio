<!-- Title of the page -->
<?php $title = "Clément Colné" ?>
<!-- Css link -->
<?php $cssLink = "assets/css/homePage.css" ?>
<!-- Description of the page -->
<?php $description = "Bienvenue sur mon portfolio personnel, où j'y présente mes compétentes et projets personnels !" ?>
<!-- keywords for SEO (separate with ", ") -->
<?php $keyWords = "Clément Colné, portfolio" ?>

<?php ob_start(); ?>

  <header>
    <div class="jumbotron jumbotron-fluid fond-blanc">
      <div class="container">
        <div class="row">
          <div class="offset-lg-4 col-lg-4 offset-sm-4 col-sm-4 offset-3 col-6">
            <img src="assets/img/profile-picture.jpg" class="img-fluid rounded">
          </div>
          <hr class="offset-lg-3 col-lg-6 offset-sm-3 col-sm-6 offset-3 col-6 mt-5">
        </div>
        <div class="row mt-5">

          <div class="offset-lg-4 col-lg-4 center">
            <h1>Clément Colné</h1>
            <p class="lead description">Etudiant en Master 2 Ingénierie des Logiciels</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="offset-lg-1 col-lg-10">
      <div class="card">
        <div class="card-body">
          <h2 class="center">A propos de moi</h2>
          <hr class="offset-lg-4 col-lg-4 offset-sm-3 col-sm-6 offset-3 col-6">
          <div class="row">


            <div class="col-lg-6">
              <ul>
                <li>
                  <p class="card-text">
                    <i class="fab fa-java"></i>
                    Java / JEE
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <i class="fab fa-python"></i>
                    Python
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <i class="fab fa-php"></i>
                    PHP (Laravel)
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <i class="fab fa-js"></i>
                    JavaScript
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <i class="fas fa-database"></i>
                    MySQL
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <i class="fab fa-html5"></i>
                    HTML5
                    /
                    <i class="fab fa-css3-alt"></i>
                    CSS3
                    /
                    <i class="fab fa-bootstrap"></i>
                    Bootstrap
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <i class="far fa-file-code"></i>
                    C/C++
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <i class="fab fa-ubuntu"></i>
                    Ubuntu /
                    <i class="fab fa-apple"></i>
                    MacOs
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <i class="fas fa-chart-line"></i>
                    Marchés Financiers
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <i class="fas fa-mug-hot"></i>
                    Café
                  </p>
                </li>
              </ul>
              <hr class="offset-lg-3 col-lg-6 offset-sm-3 col-sm-6 offset-3 col-6">
              <ul>
                <li>
                  <p class="card-text">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Nancy, France
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                    </svg>
                    clement.colne[at]outlook.com
                  </p>
                </li>
                <li>
                  <p class="card-text">
                    <i class="fab fa-github"></i>
                    <a href="https://github.com/clementcolne" target="_blank">clementcolne</a>
                  </p>
                </li>
              </ul>
            </div>


            <div class="col-lg-6">
              <ul>
                <li>
                  <h4 class="skill_header">Freelance</h4>
                  <p class="skill_details">Depuis 2020<br>Création de site Internet pour professionnel.<p>
                </li>
                <li>
                  <h4 class="skill_header">Chauffeur Livreur | Fiducial, Nancy</h4>
                  <p class="skill_details">Juillet 2021 - Août 2021<br>Préparation de la tournée, chargement de colis dans le camion, conduite de Nancy à Metz et livraison de matériel de bureau à des professionnels sur Metz et alentours.<p>
                </li>
                <li>
                  <h4 class="skill_header">Stagiaire en développement logiciel | PMB Software, Maxéville</h4>
                  <p class="skill_details">Avril 2020 - Mai 2020<br>Stage de fin de licence dans l'entreprise PMB Software, confection d'un cahier des charges, spécification des besoins, modélisation de la base de données.<p>
                </li>
                <li>
                  <h4 class="skill_header">Employé polyvalent | KFC, Houdemont</h4>
                  <p class="skill_details">Juin 2019 - Juillet 2019<br>Accueil et service du client, préparation de commandes et entretien du restaurant.<p>
                </li>
                <li>
                  <h4 class="skill_header">Enseignement | Ecole primaire Jules Ferry, Maxéville</h4>
                  <p class="skill_details">Janvier 2019 - Juin 2019<br>Dispenser des cours de science à une classe de CE1-CE2.<p>
                </li>
                <li>
                  <h4 class="skill_header">Superviseur | Fraispertuis-City, Jeanménil</h4>
                  <p class="skill_details">Saisonnier de 2016 à 2017<br>Responsable de la sécurité dans le parc, répondre aux attentes du client et du personnel, encadrement du personnel et diverses tâches quotidiennes.<p>
                </li>
              </ul>
            </div>


          </div>
        </div>
      </div>
  </div>



  <div class="row">

    <!-- Second column -->
    <div class="offset-lg-1 col-lg-10">
      <!-- Projects section -->
      <div class="col-lg-12 mt-4">
        <div class="card">
          <div class="card-body mt-4 center">
            <h2>Projets personnels, freelance et scolaires</h2>
            <p>Voici un échantillon des projets que j'ai développé, durant mes études, en freelance ou sur mon temps libre.<br>Les codes sources sont disponibles sur mon Github.</p>
            <p><a href="https://github.com/clementcolne" target="_blank">Accéder à mon Github -></a></p>
            <hr class="offset-lg-4 col-lg-4 offset-sm-3 col-sm-6 offset-3 col-6">
          </div>


          <div class="col-md-12">


            <div class="row">

              <h2 class="center">Projets Freelance</h2>

              <div class="col-lg-7 col-sm-5">
                <div class="accordion" id="FreelanceaccordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#FreelancecollapseOne" aria-expanded="true" aria-controls="FreelancecollapseOne">
                        Descriptif
                      </button>
                    </h2>
                    <div id="FreelancecollapseOne" class="accordion-collapse collapse show" aria-labelledby="FreelanceheadingOne" data-bs-parent="#FreelanceaccordionExample">
                      <div class="accordion-body">
                        Depuis début 2020, j'effectue des projets Freelance, principalement de la création de site vitrine pour professionnels.<br>
                        Voici certains des sites que j'ai réalisé<br>
                        <a href="https://mybobyhat.fr" target="_blank">My Boby Hat</a> : entreprise de création de bob et chapeaux.
                        <br>
                        <a href="https://lerefugedegrimlock.fr" target="_blank">Le Refuge De Grimlock</a> : projet caritatif pour un refuge animalier.
                        <br>
                        <a href="http://mangin-terrassement.fr" target="_blank">Mangin Terrassement</a> : entreprise du BTP.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-5 col-sm-7">
                <img src="assets/img/freelance.jpg" class="img-fluid">
              </div>

            </div>



            <div class="row mt-5">

              <h2 class="center">Libreoupas</h2>
              <div class="col-lg-5 col-sm-7">
                <img src="assets/img/libreoupas.png" class="img-fluid">
              </div>

              <div class="col-lg-7 col-sm-5">
                <div class="accordion" id="Libreoupas">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="LibreoupasheadingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#LibreoupascollapseOne" aria-expanded="true" aria-controls="LibreoupascollapseOne">
                        Descriptif
                      </button>
                    </h2>
                    <div id="LibreoupascollapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#Libreoupas">
                      <div class="accordion-body">
                        Libreoupas est un projet personnel développé à la fin de ma première année de licence. C'est un site Internet qui liste les salles informatique de la faculté, et affiche la disponibilité de celle-ci tout au long de la journée. Libreoupas est utilisé par les étudiants et les enseignants souhaitant travailler dans les salles informatiques sur leur temps libre.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="LibreoupasheadingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#LibreoupascollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Technologies
                      </button>
                    </h2>
                    <div id="LibreoupascollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#Libreoupas">
                      <div class="accordion-body">
                        <span class="badge badge-info">Projet personnel</span>
                        <span class="badge badge-info">Site Internet</span>
                        <span class="badge badge-info">+1.3k utilisations/mois</span>
                        <br>
                        <span class='badge bg-secondary badge-margin'>Bootstrap</span>
                        <span class='badge bg-secondary badge-margin'>PHP</span>
                        <span class='badge bg-secondary badge-margin'>JavaScript</span>
                        <span class='badge bg-secondary badge-margin'>API</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="row mt-5">
              <h2 class="center">Application Anti Covid</h2>
              <div class="col-lg-7 col-sm-5">
                <div class="accordion" id="AntiCovidaccordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#AntiCovidcollapseOne" aria-expanded="true" aria-controls="AntiCovidcollapseOne">
                        Descriptif
                      </button>
                    </h2>
                    <div id="AntiCovidcollapseOne" class="accordion-collapse collapse show" aria-labelledby="AntiCovidheadingOne" data-bs-parent="#AntiCovidaccordionExample">
                      <div class="accordion-body">
                        Ce projet a été développé dans le cadre de mes études. Il s'agit d'un site Internet développé avec JEE qui recense des utilisateurs volontaires pouvant déclarer leurs activités effectuées dans des lieux publics, et se déclarer positif à la Covid-19 afin que les cas contact soient notifiés.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="AntiCovidheadingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#AntiCovidcollapseTwo" aria-expanded="false" aria-controls="AntiCovidcollapseTwo">
                        Technologies
                      </button>
                    </h2>
                    <div id="AntiCovidcollapseTwo" class="accordion-collapse collapse" aria-labelledby="AntiCovidheadingTwo" data-bs-parent="#AntiCovidaccordionExample">
                      <div class="accordion-body">
                        <span class="badge badge-info">Projet universitaire</span>
                        <span class="badge badge-info">Site Internet</span>
                        <br>
                        <span class='badge bg-secondary badge-margin'>Bootstrap</span>
                        <span class='badge bg-secondary badge-margin'>JEE</span>
                        <span class='badge bg-secondary badge-margin'>MySql</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-sm-7">
                <img src="assets/img/anticovid.png" class="img-fluid">
              </div>
            </div>


            <div class="row mt-5">

              <h2 class="center">Koktajl</h2>
              <div class="col-lg-5 col-sm-7">
                <img src="assets/img/koktajl.png" class="img-fluid">
              </div>

              <div class="col-lg-7 col-sm-5">
                <div class="accordion" id="KoktajlaccordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#KoktajlcollapseOne" aria-expanded="true" aria-controls="KoktajlcollapseOne">
                        Descriptif
                      </button>
                    </h2>
                    <div id="KoktajlcollapseOne" class="accordion-collapse collapse show" aria-labelledby="KoktajlheadingOne" data-bs-parent="#KoktajlaccordionExample">
                      <div class="accordion-body">
                        Koktajl a été développé dans le cadre de mes études. Il s'agit d'un site Internet répertoriant un ensemble de cocktails, avec la possibilité de créer un compte utilisateur, marquer des recettes comme favoris, ou encore faire des recherches avancées.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="KoktajlheadingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#KoktajlcollapseTwo" aria-expanded="false" aria-controls="KoktajlcollapseTwo">
                        Technologies
                      </button>
                    </h2>
                    <div id="KoktajlcollapseTwo" class="accordion-collapse collapse" aria-labelledby="KoktajlheadingTwo" data-bs-parent="#KoktajlaccordionExample">
                      <div class="accordion-body">
                        <span class="badge badge-info">Projet universitaire</span>
                        <span class="badge badge-info">Site Internet</span>
                        <br>
                        <span class='badge bg-secondary badge-margin'>Bootstrap</span>
                        <span class='badge bg-secondary badge-margin'>PHP</span>
                        <span class='badge bg-secondary badge-margin'>JavaScript</span>
                        <span class='badge bg-secondary badge-margin'>MySql</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>



            <div class="row mt-5 mb-4">

              <h2 class="center">SuperPixelAdventure</h2>

              <div class="col-lg-7 col-sm-5">
                <div class="accordion" id="SuperPixelAdventureaccordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#SuperPixelAdventurecollapseOne" aria-expanded="true" aria-controls="SuperPixelAdventurecollapseOne">
                        Descriptif
                      </button>
                    </h2>
                    <div id="SuperPixelAdventurecollapseOne" class="accordion-collapse collapse show" aria-labelledby="SuperPixelAdventureheadingOne" data-bs-parent="#SuperPixelAdventureaccordionExample">
                      <div class="accordion-body">
                        SuperPixelAdventure est un jeu vidéo 2D. Vous incarnez Lien, jeune homme qui arrive dans un petit village où l'eau a mystérieusement disparu. Il faudra résoudre l'énigme et, au terme de celle-ci, vous aurez donc l'occasion de ramener l'eau aux habitants de ce village..                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="SuperPixelAdventureheadingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#SuperPixelAdventurecollapseTwo" aria-expanded="false" aria-controls="SuperPixelAdventurecollapseTwo">
                        Technologies
                      </button>
                    </h2>
                    <div id="SuperPixelAdventurecollapseTwo" class="accordion-collapse collapse" aria-labelledby="SuperPixelAdventureheadingTwo" data-bs-parent="#SuperPixelAdventureaccordionExample">
                      <div class="accordion-body">
                        <span class="badge badge-info">Projet universitaire</span>
                        <span class="badge badge-info">Jeu vidéo</span>
                        <br>
                        <span class='badge bg-secondary badge-margin'>C</span>
                        <span class='badge bg-secondary badge-margin'>Librairie SDL</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-5 col-sm-7">
                <img src="assets/img/superpixeladventure.png" class="img-fluid">
              </div>

            </div>


          </div>
        </div>
      </div>
    </div>
    <!-- Second section end -->

  </div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
