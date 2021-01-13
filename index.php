<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Appetee</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Bonjour, bienvenue sur le site Appetee !" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="stylechatbot.css" />
    <link rel="stylesheet" href="https://use.typekit.net/shr8lmn.css">
</head>

<body>

    <?php
        if (isset($_GET['error']) OR isset($_GET['error2']) OR isset($_GET['errorlink1']) OR isset($_GET['errorlink2']) OR isset($_GET['errorlink3']) OR isset($_GET['errorlink4']) OR isset($_GET['errorlength1']) OR isset($_GET['errorlength2']) OR isset($_GET['errorlength3']) OR isset($_GET['errorlength4'])){
            echo ('<p style="display:flex;align-items:center;justify-content:center;height:auto;min-height:50px;margin:0;background-color:crimson;color:#FFFFFF;text-align:center;padding:0 5px;">');
        }
        if (isset($_GET['success'])) {
            echo ('<p style="display:flex;align-items:center;justify-content:center;height:auto;min-height:50px;margin:0;background-color:#0dbf0d;color:#FFFFFF;text-align:center;padding:0 5px;">Le formulaire a bien été envoyé.</p>');
        }

        if (isset($_GET['success'])) { echo ('Le formulaire a bien été envoyé.</p>'); } 
        else if (isset($_GET['error'])) { echo ('L\'email n\'a pas été envoyé : Toutes les infos nécessaires n\'ont pas été remplies.</p>'); } 
        else if (isset($_GET['error2'])) { echo ('L\'email n\'a pas été envoyé : Il y a eu une erreur.</p>'); }
        else if (isset($_GET['errorlink1'])) { echo ('L\'email n\'a pas été envoyé : Le caractère " / " n\'est pas permis dans l\'envoi</p>'); }
        else if (isset($_GET['errorlink2'])) { echo ('L\'email n\'a pas été envoyé : www n\'est pas permis dans l\'envoi</p>'); }
        else if (isset($_GET['errorlink3'])) { echo ('L\'email n\'a pas été envoyé :  http(s) n\'est pas permis dans l\'envoi</p>'); }
        else if (isset($_GET['errorlink4'])) { echo ('L\'email n\'a pas été envoyé :  les caractères \'<\' et \'>\' ne sont pas permis dans l\'envoi</p>'); }
        else if (isset($_GET['errorlength1'])) { echo ('L\'email n\'a pas été envoyé : Le champ nom et prénom ne peut contenir que 50 caractères</p>'); }
        else if (isset($_GET['errorlength2'])) { echo ('L\'email n\'a pas été envoyé : Le champ email ne peut contenir que 100 caractères</p>'); }
        else if (isset($_GET['errorlength3'])) { echo ('L\'email n\'a pas été envoyé : Le champ sujet ne peut contenir que 60 caractères</p>'); }
        else if (isset($_GET['errorlength4'])) { echo ('L\'email n\'a pas été envoyé : Le champ message ne peut contenir que 800 caractères</p>'); }
    ?>

    <!--_____PARTIE_1_____-->

    <header>

        <nav>
            <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="#">Accueil</a>
                    <a href="#concept">Concept</a>
                    <a href="#tarifs">Tarifs</a>
                    <a href="#">Application</a>
                    <a href="#">Présentation de l'équipe</a>
                    <a href="#">Contact</a>
                </div>
            </div>
            <span onclick="openNav()"><img src="img/menu-512.png" alt="Nav button" id="navbutton"></span>

            <ul id="nav">
                <li><a href="#">Accueil</a></li>
                <li><a href="#concept">Concept</a></li>
                <li><a href="#tarifs">Tarifs</a></li>
                <li><a href="#">Application</a></li>
                <li><a href="#">Présentation de l'équipe</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <section class="home">
            <article>
                <div>
                    <h1><hr />Appetee <br /></h1>
                    <p>Seul ou à plusieurs, c’est l'application qui propose des recettes adaptées à vos profils alimentaires !</p>
                    <div>
                        <a href="https://www.apple.com/fr/ios/app-store/" target="_blank" rel="noopener noreferrer"><img src="img/app-store.png" alt="App store logo"/></a>
                        <a href="https://store.google.com/fr/" target="_blank" rel="noopener noreferrer"><img src="img/google-play.png" alt="Google play logo"/></a>
                    </div>
                </div>
                <img id="frite" src="img/istockphoto-1097323840-170667a.png" alt="Illustration frite" />
            </article>
            <article>
                <img src="img/tel-1.png" alt="Image de l'application sur Téléphone" />
            </article>
        </section>

        <img id="headerBg" src="img/headerbackground.png" alt="Image de Fond" />
    </header>

    <main>
        <section id="concept" class="concept">
            <article>
                <h1>Notre</h1>
                <section class="etape">
                    <div class="contener conteneur_anim_1">
                        <h2>Étape 1</h2>
                        <div>
                            <img src="img/undraw-people-tax5.png" alt="Illustration user"/>
                            <h3>Dis-nous tes habitudes alimentaires</h3>
                            <p>Création de ton profil alimentaire en prenant connaissance de tes goûts, allergies, intolérances et régimes alimentaires.</p>
                            <img class="contenerBg" src="img/trace-147.png" alt="Background contener" />
                        </div>
                    </div>

                    <div class="contener conteneur_anim_2">
                        <h2>Étape 2</h2>
                        <div>
                            <img src="img/undraw-eating-together-tjhx.png" alt="Illustration user" />
                            <h3>Sélectionne qui participe au repas</h3>
                            <p>Un repas seul, en famille ou entre amis ? Pas de problème ! Ajoute simplement leurs profils Appetee.</p>
                            <img class="contenerBg" src="img/trace-147.png" alt="Background contener" />
                        </div>
                    </div>

                    <div class="contener conteneur_anim_3">
                        <h2>Étape 3</h2>
                        <div>
                            <img src="img/undraw-breakfast-psiw.png" alt="Illustration user" />
                            <h3>Choisis ta recette</h3>
                            <p>On te propose une liste de recettes sur mesure et adaptées à ta recherche. Trouve la recette parfaite, cuisine-la et régale-toi !</p>
                            <img class="contenerBg" src="img/trace-147.png" alt="Background contener" />
                        </div>
                    </div>
                </section>
            </article>
        </section>

        <section id="projet" class="projet">
            <h1>Notre</h1>
            <img src="img/tomates.png" alt="tomates" id="projetBg" />

            <article>
                <section>
                    <h2>Nous voulions vous aider dans votre alimentation et ainsi vous permettre de faire des économies </h2>

                    <article class="projetContener decale">
                        <div>
                            <h3>Partage</h3>
                            <p>Partager des repas n’a jamais été aussi simple et rapide. On s’occupe de la recette, tu gères l’ambiance.</p>
                        </div>
                        <div>
                            <img src="img/groupe-60.png" alt="illustration recette" />
                        </div>
                    </article>

                    <article class="projetContener">
                        <div>
                            <h3>Accesible</h3>
                            <p>Pas d’idée pour le repas de ce soir ? Un seul et même repas pour tout le monde en 1 clic.</p>
                        </div>
                        <div>
                            <img src="img/groupe-61.png" alt="illustration recette" />
                        </div>
                    </article>

                    <article class="projetContener decale">
                        <div>
                            <h3>Adaptable</h3>
                            <p>Seul ou à plusieurs, des recettes adaptées à tout le monde !</p>
                        </div>
                        <div>
                            <img src="img/groupe-62.png" alt="illustration recette" />
                        </div>
                    </article>

                    <article class="projetContener decale2">
                        <div>
                            <h3>Economies</h3>
                            <p>Des économies pour toi et pour la planète. Prévois tes courses en planifiant ce que tu vas manger cette semaine.</p>
                        </div>
                        <div>
                            <img src="img/groupe-63.png" alt="illustration recette" />
                        </div>
                    </article>

                    <div id="app">
                        <a href="https://www.apple.com/fr/ios/app-store/" target="_blank" rel="noopener noreferrer"><img src="img/app-store.png" alt="App store logo"/></a>
                        <a href="https://store.google.com/fr/" target="_blank" rel="noopener noreferrer"><img src="img/google-play.png" alt="Google play logo"/></a>
                    </div>
                </section>

                <section>
                    <img src="img/pizza.png" alt="pizza" />
                </section>
            </article>
        </section>

        <section id="tarifs" class="tarifs">
            <h1>Les tarifs</h1>
            <p id="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <section>
                <article id="mensuel" class="select">
                    <h2 class="tarifs_h3">Mensuel</h2>
                    <p>Sans engagement</p>
                </article>

                <article id="trimestriel">
                    <div class="promo">
                        <p>Économisez 25%</p>
                    </div>
                    <h2 class="tarifs_h3">Trimestriel</h2>
                    <p>Engagement sur 3 mois</p>
                </article>

                <article id="annuel">
                    <div class="promo">
                        <p>Économisez 50%</p>
                    </div>
                    <h2 class="tarifs_h3">Annuel</h2>
                    <p>Engagement sur 12 mois</p>
                </article>
            </section>
        </section>

        <section class="affichageTarifs">
            <article>
                <img id="gratuitBg" src="img/gratuitbg.png" alt="Background" />
                <h1>Offre gratuite</h1>
                <p>Des recettes adaptées à votre profil ? C’est possible avec notre offre gratuite !</p>
                <ul>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Quantités adaptées</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Liste de course intelligente</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Planification des repas</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Mode hors ligne</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Recettes en favoris</li>
                </ul>

                <div>
                    <a href="#">Commencer</a>
                </div>
            </article>

            <article>
                <div>
                    <img src="img/trace-153.png" alt="Background Premium" id="premiumBg" />
                    <h2>Premium</h2>
                    <p id="price">7.99 €</p>
                </div>
                <ul>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Recettes adaptées au profil</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> 600 recettes (ajouts mensuels)</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Nombre de recherches illimité</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Nombre d'invités par recherche illimité</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Recettes saisonnières et évènements</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Quantités adaptées</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Liste de course intelligente</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Planification des repas</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Mode hors ligne</li>
                    <li><img src="img/ic-done-24px.png" alt="Validate" /> Recettes en favoris</li>
                </ul>

                <div class="flex">
                    <a href="#" id="redButton">Commencer</a>
                </div>
            </article>
        </section>
    </main>

    <!--_____PARTIE_2_____-->

    <section class="telecharger_appetee">
        <div class="telecharger_appetee_main_title">
            <h2><b>Télécharger Appetee</b></h2>
        </div>
        <div class="telecharger_appetee_flexbox">
            <img src="img/phone.jpg" width="600" height="464" class="tel_app_img" alt="images de l'application sur téléphones" />
            <div class="telecharger_appetee_div_text">
                <h3>Application Appetee</h3><br>
                <p>Appetee est disponible gratuitement sur App Store et Play Store. Découvre-la maintenant et révolutionne ton quotidien !<br><br>
                Bientôt disponible Laisse-nous ton mail et tu seras le premier à être au courant du lancement d’Appetee ! Pssssst… on me dit à l’oreillette qu’une surprise t’attendras 😍</p>
                <a href="https://www.apple.com/fr/ios/app-store/"><img src="img/app-store-2.jpg" width="200" height="68" alt="lien de téléchargement de l'application Appetee sur l'Appstore" /></a>
                <a href="https://play.google.com/store?hl=fr&gl=US"><img src="img/google-play-2.jpg" width="200" height="70" alt="lien de téléchargement de l'application Appetee sur Google play store" /></a>
            </div>
            <div class="blank_div"></div>
        </div>
    </section><!--
    
    --><section class="une_equipe_motivee">
        <div class="une_equipe_motivee_titre">
            <h2><b>Une équipe <span>motivée</span></b></h2>
        </div>
        <div class="une_equipe_motivee_table">

            <div class="equipe_div_img_1">
                <img src="img/photo1.jpg" width="334" height="501" alt="photo d'Antony">
            </div>

            <div class="equipe_div_text">
                <div class="equipe_div_text_adaptatif">
                    <h3>Antony</h3>
                    <p>Etudiants au Pôle Léonard de Vinci en première année du cycle d’ingénieur, nous développons un projet. Cette production nous tient à coeur et nous avons décidé de la développer. Notre équipe constituée de Antony et Carole a vu le jour en septembre 2018</p>
                    <button class="equipe_div_text_button" onclick="location.href='https://www.linkedin.com/in/as98';">LinkedIn</button>
                </div>
                <div class="equipe_div_text_div_margin_top equipe_div_text_adaptatif">
                    <h3>Carole</h3>
                    <p>Etudiants au Pôle Léonard de Vinci en première année du cycle d’ingénieur, nous développons un projet. Cette production nous tient à coeur et nous avons décidé de la développer. Notre équipe constituée de Antony et Carole a vu le jour en septembre 2018</p> 
                    <button class="equipe_div_text_button" onclick="location.href='https://www.linkedin.com/in/carole-dumoulin-956508150';">LinkedIn</button>
                </div>
            </div>

            <div class="equipe_div_img_2">
                <img src="img/photo2.jpg" width="334" height="501" alt="photo de Carole">
            </div>

            <div class="equipe_div_text_2">
                <div class="equipe_div_text_adaptatif_2">
                    <h3>Carole</h3>
                    <p>Etudiants au Pôle Léonard de Vinci en première année du cycle d’ingénieur, nous développons un projet. Cette production nous tient à coeur et nous avons décidé de la développer. Notre équipe constituée de Antony et Carole a vu le jour en septembre 2018</p> 
                    <button class="equipe_div_text_button" onclick="location.href='https://www.linkedin.com/in/carole-dumoulin-956508150';">LinkedIn</button>
                </div>
            </div>

        </div>
    </section><!--

    --><section class="nous_contacter">

        <div class="nous_contacter_table_cell">
            <h2>Nous Contacter</h2>
            <p><b>Une petite question ?<br> Nous sommes là pour toi !</b></p>
        </div>

        <div class="nous_contacter_table_cell_2">
            <div class="div_formulaire">

                <h3>Envoyer un message</h3>

                <form action="form.php" method="post">

                    <div class="div_formulaire_section div_formulaire_section_margin">
                        <label class="div_formulaire_label" for="nomPrenomForm"><b>Nom et prénom</b> <span>*</span></label>
                        <input class="div_formulaire_input" type="text" id="nomPrenomForm" name="nomPrenomForm" placeholder="Tom Sandlers">
                    </div>

                    <div class="div_formulaire_section">
                        <label class="div_formulaire_label" for="emailForm"><b>Email</b> <span>*</span></label>
                        <input class="div_formulaire_input" type="email" id="emailForm" name="emailForm" placeholder="tom.sandlers@outlook.com">
                    </div>

                    <div class="div_formulaire_section">
                        <label class="div_formulaire_label" for="sujetForm"><b>Sujet</b> <span>*</span></label>
                        <input class="div_formulaire_input" type="text" id="sujetForm" name="sujetForm" placeholder="Information">
                    </div>

                    <div class="div_formulaire_section">
                        <label class="div_formulaire_label" for="messageForm"><b>Message</b> <span>*</span></label>
                        <input class="div_formulaire_input" type="text" id="messageForm" name="messageForm" placeholder="Bonjour, je souhaiterais avoir plus d'informations concernant votre...">
                    </div>

                    <div class="center_button_submit_form">
                        <input class="button_submit_form" type="submit" value="Envoyer" id="submitForm" name="submitForm">
                    </div>

                </form>

            </div>
        </div>

    </section>
    
    <footer>

        <div class="footer_text_div">
            <h3><b>Ils nous ont trouvé appetee-ssant...</b></h3>
        </div>

        <div class="footer_div_global_infos">
            <a href="#"><div class="footer_div_infos">
                <div class="footer_div_infos_div_img">
                    <img src="img/France_Inter_logo_2005.jpg" width="300" height="300" alt="France Inter logo" />
                </div>
                <div class="footer_div_infos_div_text">
                    <p>L'esprit d'initiative</p>
                </div>
            </div></a>

            <a href="#"><div class="footer_div_infos">
                    <img src="img/Europe_1_logo_(2010).jpg" width="300" height="110" alt="Europe 1 logo" />
                <div class="footer_div_infos_div_text">
                    <p>La france bouge</p>
                </div>
            </div></a>


            <a href="#"><div class="footer_div_infos">
                <div class="footer_div_infos_div_img">
                    <img src="img/Capital.jpg" width="283" height="83" alt="Capital logo" />
                </div>
                <div class="footer_div_infos_div_text">
                    <p>Entreprises<br>et marché</p>
                </div>
            </div></a>

            <a href="#"><div class="footer_div_infos">
                <div class="footer_div_infos_div_img">
                    <img src="img/logo-vivatech.jpg" width="300" height="88" alt="Vivatech logo" />
                </div>
                <div class="footer_div_infos_div_text">
                    <p>Exposition</p>
                </div>
            </div></a>
        </div>

        <div class="footer_text2_div">
            <h3><b>Suivez nous sur les réseaux sociaux :</b></h3>
            <a href="https://www.facebook.com/">Facebook</a><br><br>
            <a href="https://www.instagram.com/?hl=fr">Instagram</a>
        </div>

    </footer>

    <!--_____CHATBOT_____-->

    <div class="chatbot" id="chatbot">
        <!-- Header -->
        <div class="info_chatbot">
            <input type="button" id="closeChatbot" value="x">
            <span class="info_titre">ChatBot Théo Rossignol</span>
        </div>
        <!-- Liste des messages -->
        <div class="liste_messages" id="listeMessages">
            <div class="message bot_message">
                <div class="message_absolute_box_bot">
                    <div class="message_absolute_box_flexbox">
                        <img src="img/appetee-logo-redim.png" alt="Logo robot">
                    </div>
                </div>
                <div class="message_text_bot">
                    <p>Bonjour ! Besoin d'un renseignement à propos d'Appetee ?</p>
                </div>
            </div>
        </div>
        <div class="separateur"></div>
        <!-- Boutons Réponses -->
        <div class="zone_reponse">
            <div class="flexbox" id="flexbox"></div>
        </div>
    </div>

    <input type="button" class="button_chatbot" id="openChatbot" value="Bot" />

    <link rel="stylesheet" type="text/css" href="animation.css" />
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="scriptchatbot.js"></script>
</body>

</html>