
    <?php 
    require_once 'template\header.php'
    ?>
    <!--Début formulaire-->
    <main>
        <section>
            <h1>Formulaire de contact</h1>
            <form method="post" id="formulaire"></form>
            <fieldset id="infos">
                <legend>
                    <h2>Informations</h2>
                </legend>
                <div class="FormNom">
                    <label for="Nom">Nom:</label>
                    <input id="NomImput" type="text" placeholder="Parker">
                </div>
                <div class="FormPrenom">
                    <Label="" for="">Prénom:
                        <input id="PrenomInput" type="text" placeholder="Peter">
                        </l>
                </div>
                <div>
                    <label for="Statut">Statut</label>
                </div>
                <div>
                    <input type="radio" name="Statut" id="particulier" required="" checked="">
                    <label for="particulier">Particulier</label>
                </div>
                <div>
                    <input type="radio" name="Statut" id="Professionnel" required="">
                    <label for="Professionnel">Professionnel</label>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    <h2>Message</h2>
                </legend>
                <div>
                    <label for="objet">Objet</label>
                    <select type="text" name="objet" id="objet" required="">
                        <option value="demande_de_contact">Demande de contact</option>
                        <option value="offre_d'emploi">Demande de déplacement à domicile</option>
                        <option value="envoi_d'une_brochure_tarifaire">Envoi d'une brochure tarifaire</option>
                    </select>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input id="EmailInput" type="email" name="email" placeholder="email@.fr" required="">
                </div>
                <div>
                    <textarea id="MessageInput" name="objet" id="messageArea" cols="30" rows="10"></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </fieldset></a>
        </section>
    </main>
    <!--fin formulaire-->
    <?php 
    require_once 'template/footer.php'
    ?>