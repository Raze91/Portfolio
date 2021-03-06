<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Portfolio de Sami Hattab - Contact</title>
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="icon" href="images/template/flavicon-s.ico">
</head>
<body>

    <nav class="tmp-menu" data-state="closed">

        <a href="index.html" class="home-link">Sami Hattab</a>

        <div class="site-links">
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="index.html">Accueil</a>
            <a href="presentation.html">Présentation</a>
            <a href="competences.html">Compétences</a>
            <a href="Projets.html">Projets</a>
            <a href="CV_HATTAB_Sami_Alternance.pdf" target="_blank">CV</a>
            <a href="contact.php" class="active">Contact</a>
        </div>

    </nav>

    <main class="tmp-main">

        <section class="contact-content tmp-content">

            <header>

                <?php
                        if($_SESSION['alert'] == 'error') {
                            echo '<div class="error">❌ Veuillez remplir toute les cases du formulaire avant d\'envoyer.</div>';
                        } else if($_SESSION['alert'] == 'success'){
                            echo '<div class="success">✔ Message bien envoyé.</div>';
                        }       
                ?>

                <h1 class="tmp-title1">Contact</h1>
                <p>N'hésitez pas à m'envoyer un petit message grâce à ce formulaire !</p>

            </header>

            <h2 class="tmp-title2">Envoyez moi un message</h2>

            <form name="formulaire" action="php/mail.php" method="POST" enctype="multipart/form-data">

                <fieldset>
                    <input type="text" placeholder="Prénom" id="prenom" name="prenom" require>
                    <input type="text" placeholder="Nom" id="nom" name="nom" require>
                    <input type="email" placeholder="Adresse email" id="mail" name="mail" require>
                    <input type="phone" placeholder="Téléphone" id="phone" name="phone" require>
                </fieldset>

                <input type="text" placeholder="Sujet du message" id="sujet" name="sujet" require>
                <textarea rows="10" placeholder="Message" id="message" name="message" require></textarea>

                <input type="submit" class="tmp-btn" value="Envoyer">
                
            </form>

            <h2 class="tmp-title2">Mes coordonnées</h2>

            <ul>
                <li><strong>Email</strong> : hattab_sami@yahoo.fr</li>
                <li><strong>Téléphone</strong> : + 33 6 74 70 71 63</li>
                <li><strong>Adresse</strong> : 91220 Brétigny sur Orge</li>
            </ul>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42215.43463389267!2d2.263898075186599!3d48.60094824122591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5da3482f319e5%3A0x40b82c3688b4950!2sBr%C3%A9tigny-sur-Orge!5e0!3m2!1sfr!2sfr!4v1554450995030!5m2!1sfr!2sfr" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </section>

        <aside class="tmp-aside">

            <section class="infos">

                <h2 class="tmp-title2">Qui suis-je ?</h2>
                <p>
                    <strong>Sami Hattab</strong>, 20 ans<br>
                    Habitant à Brétigny sur Orge en Île de France<br>
                    Étudiant en 3ème année à L’École Multimédia<br>
                    Développeur front-end<br>
                    Recherche un poste en alternance
                </p>
                <a href="CV_HATTAB_Sami_Alternance.pdf" class="tmp-btn-small" target="_blank">Télécharger mon CV</a>
                <br>
                <a href="contact.php" class="tmp-btn-small">Me contacter</a>

            </section>

            <section class="projects">

                <h2 class="tmp-title2">Mes derniers projets</h2>

                <h3>Lab 201 Little Simz</h3>
                <p>Site web évenementiel réalisé dans le cadre d'un projet de 3 semaines en collaboration avec les Créas.</p>
                <a href="little_simz.html">En savoir plus</a>

                <h3>Earth To Moon</h3>
                <p>Petit site de 3 pages réalisé dans le cadre d'un examen.</p>
                <a href="earthToMoon.html">En savoir plus</a>

                <h3>XtremKappla</h3>
                <p>Jeu d'empilement de bloc sur navigateur réalisé en duo avec pour contrainte l'utilisation du leap motion.</p>
                <a href="XtremKappla.html">En savoir plus</a>

            </section>

        </aside>

    </main>

    <footer class="tmp-footer">

        <section class="contact">
            <h1>Sami Hattab</h1>
            <a href="mailto:hattab_sami@yahoo.fr">hattab_sami@yahoo.fr</a><br>
            <a href="tel:+33674707163">06 74 70 71 63</a><br>
            <a href="">Suivez-moi sur <strong>Linkedin</strong></a><br>
            <a href="https://github.com/Raze91">Suivez-moi sur <strong>Github</strong></a>
        </section>

        <nav class="menu">
            <h2>Menu</h2>
            <div class="links">
                <a href="index.html">Accueil</a><br>
                <a href="presentation.html">Présentation</a><br>
                <a href="competences.html">Compétences</a><br>
                <a href="projet.html">Projets</a><br>
                <a href="CV_HATTAB_Sami_Alternance.pdf" target="_blank">CV</a><br>
                <a href="contact.php">Contact</a><br>
                <a href="">Mentions légales</a>
            </div>
        </nav>

    </footer>

    <!-- Script de la bascule du menu -->
    <script src="scripts/menu.js"></script>
    
</body>
<?php unset($_SESSION['alert']); ?>
</html>