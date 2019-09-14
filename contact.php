<?php
$error = null;
$success = null;
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email
  
  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  
  // Définit toutes les erreurs possibles
  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
    if (empty($_POST['email'])) { // Si la variable est vide
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
    } else {
      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
      }
    }
  }
  
  if (!isset($_POST['msg'])) {
    $nombreErreur++;
    $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
  } else {
    if (empty($_POST['msg'])) {
      $nombreErreur++;
      $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }
  
  if (!isset($_POST['captcha'])) {
    $nombreErreur++;
    $erreur6 = '<p>Il y a un problème avec la variable "captcha".</p>';
  } else {
    if ($_POST['captcha']!=4) {
      $nombreErreur++;
      $erreur7 = '<p>Désolé, le captcha anti-spam est erroné.</p>';
    }
  }
  
  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $prenom = htmlentities($_POST['prenom']);
    $sujet = htmlentities($_POST['sujet']);
    $email = htmlentities($_POST['email']);
    $msg = htmlentities($_POST['msg']);
    
    // Variables concernant l'email
    $destinataire = 'francois.cousin62880@gmail.com'; // Adresse email du webmaster
    $sujet = 'Nouveau contact'; // Titre de l'email
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$prenom.'</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$sujet.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Message</strong>: '.$msg.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email
    
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= "Content-type: text/html; charset=\"/utf-8\"";
    $headers .= "Content-transfert-Encoding:8bit";
    
    @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    
    $success = 'Message envoyé!'; // Afficher un message pour indiquer que le message a été envoyé
  } else { // S'il y a un moins une erreur
    echo '<div style="border:1px solid #ff0000; padding:5px;">';
    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
	if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
	if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
    echo '</div>';
  }
}
?>

<!-- Début contact -->
<div class="space30"></div>
<h2 class="text-center">Contactez_moi</h2>
<div class="space30"></div>
<div class="row">
    <div class="offset-1 col-10 offset-lg-1 col-lg-3">
        <div class="card item6 animated" id="blockadress">
            <img src="images/Contact.png" class="card-img-top" alt="Logo de contact">
            <div class="card-body">
                <h5 class="card-title">François Cousin</h5>
                <p class="card-text type1">Adresse :</p>
                <p class="card-text">98 Rue Alfred Nobel</p>
                <p class="card-text">Résidence Le Nobel Appt C66</p>
                <p class="card-text">62880 Vendin-Le-Vieil</p>
                <p class="card-text type1">Mail :</p>
                <p class="card-text">francois.cousin62880@gmail.com</p>
                <p class="card-text type1">Portable :</p>
                <p class="card-text">0679051825
                    <p class="card-text">
                        <a href="https://www.facebook.com/francois.cousin.5" target="_blank"><i
                                class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.linkedin.com/feed/" target="_blank"><i
                                class="fab fa-linkedin fa-2x"></i></a>
                        <a href="https://github.com/Francois62880" target="_blank"><i
                                class="fab fa-github-square fa-2x"></i></a>
                    </p>
            </div>
        </div>
    </div>


    <div class="offset-1 col-10 offset-lg-1 col-lg-6" id="blockContact">
        <div class="section noprint">
            <h2 class="section-title ct1">Formulaire de contact</h2>

            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Tous les champs de saisie doivent être remplis avant d'envoyer votre courriel.
            </div>


            <form method="post" action="index.php" class="well form-horizontal" id="contact-form">
                <fieldset>
                    <legend>
                        <h4 class="ct1"> Adressez-moi un message en utilisant le formulaire ci-dessous :
                        </h4>
                    </legend>
                    <?php if ($success): ?>
                    <div class="alert alert-success">
                    <?= $success ?>
                    </div>
                    <?php endif; ?>
                    <?php if ($error): ?>
                    <div class="alert alert-danger">
                        Le magasin sera fermé
                    </div>
                    <?php endif; ?>

                    <div class="controls">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName" class="ct2">Nom *</label>
                                <input type="text" name="nom" class="form-control" id="inputName"
                                    placeholder="Tappez votre Nom" required="required" data-error="Nom is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputLastname">Prénom *</label>
                                    <input id="inputLastname" type="text" name="prenom" class="form-control"
                                        placeholder="Tappez votre Prenom *" required="required"
                                        data-error="Prenom is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail" class="ct2">email *</label>
                                <input type="email" name="email" class="form-control" id="inputEmail"
                                    placeholder="Entrez votre email *" required="required"
                                    data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSujet" class="ct2">Sujet *</label>
                            <input type="text" name="sujet" class="form-control" id="inputSujet"
                                placeholder="Tappez votre sujet *" required="required" data-error="Sujet is required.">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="inputMessage" class="ct2">Message *:</label>
                            <textarea name="msg" class="form-control" rows="5" id="inputMessage"
                                placeholder="Tappez votre message *" required="required"
                                data-error="Message is required."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <p>Combien font 1+3: <span style="color:#ff0000;">*</span>: <input type="text" name="captcha"
                                size="2" /></p>
                        <button class="btn btn-primary" id="button">Sign in</button>
                    </div>

                </fieldset>
        </div>
        </form>

    </div>
</div>