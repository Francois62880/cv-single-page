
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


                    <form method="post" action="traitement.php" class="well form-horizontal" id="contact-form">
                        <fieldset>
                            <legend>
                                <h4 class="ct1"> Adressez-moi un message en utilisant le formulaire ci-dessous :
                                </h4>
                            </legend>
                            <div class="messages"></div>

                            <div class="controls">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName" class="ct2">Nom *</label>
                                        <input type="text" name="nom" class="form-control" id="inputName"
                                            placeholder="Tappez votre Nom" required="required"
                                            data-error="Nom is required.">
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
                                        placeholder="Tappez votre sujet *" required="required"
                                        data-error="Sujet is required.">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label for="inputMessage" class="ct2">Message *:</label>
                                    <textarea name="msg" class="form-control" rows="5" id="inputMessage"
                                        placeholder="Tappez votre message *" required="required"
                                        data-error="Message is required."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <p>Combien font 1+3: <span style="color:#ff0000;">*</span>: <input type="text"
                                        name="captcha" size="2" /></p>
                                <button class="btn btn-primary" id="button">Sign in</button>
                            </div>

                        </fieldset>
                </div>
                </form>

            </div>
        </div>
