<?php
include 'include/header.php';
?>


   <!-- /.container -->

	<form method="GET" action="resultat.php" accept-charset="UTF-8">
    		<fieldset>
    			<legend>Apprenti</legend>
    			<div class="box">
    				<label for="nomApprenti" >Nom :</label>
    				<input name="nomApprenti" type="text"/>
    			</div>
    			<div class="box">
    				<label for="prenomApprenti" >Prenom :</label>
    				<input name="prenomApprenti" type="text"  />
    			</div>
    			<div class="box">
    				<label for="formationApprenti" >Formation :</label>
    				<input name="formationApprenti" type="text"/>
    			</div>

    			<div class="box">
    				<label for="annee" >Annee :</label>
    				<input name="annee" type="text"/>
    			</div>

    			<div class="box">
    				<label for="contratApprenti" >Contrat :</label>
    				<!-- <input name="contratApprenti" type="text"/> -->
						<select name="contratApprenti">
							<option value="Apprentissage">Apprentissage</option>
							<option value="Stage alterné">Stage alterné</option>
							<option value="Professionnalisation">Professionnalisation</option>
						</select>
    			</div>

    			<div class="box">
    				<label for="mailApprenti" >Mail :</label>
    				<input name="mailApprenti" type="text"/>
    			</div>

    			<div class="box">
    				<label for="ine" >INE :</label>
    				<input name="ine" type="text"/>
    			</div>

    			<div class="box">
    				<label for="etablissement" >Etablissement :</label>
    			</div>

    			<div class="box">
    				<label for="etabNom" >Nom etablissement :</label>
    				<input name="etabNom" type="text"/>
    			</div>

    			<div class="box">
    				<label for="tuteur" >Tuteur :</label>

    			</div>

    			<div class="box">
    				<label for="tuteurEtabNom" >Nom :</label>
    				<input name="tuteurEtabNom" type="text"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEtabPrenom" >Prenom :</label>
    				<input name="tuteurEtabPrenom" type="text"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEtabProfession" >Profession :</label>
    				<input name="tuteurEtabProfession" type="text"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEtabMail" >Mail :</label>
    				<input name="tuteurEtabMail" type="text"/>
    			</div>
    		</fieldset>

    		<fieldset>
    			<legend>Entreprise</legend>

    			<div class="box">
    				<label for="nomEntreprise" >Nom :</label>
    				<input name="nomEntreprise" type="text"/>
    			</div>

    			<div class="box">
    				<label for="siret" >Siret :</label>
    				<input name="siret" type="text"/>
    			</div>

    			<div class="box">
    				<label for="adresseEntreprise" >Adresse :</label>
    				<input name="adresseEntreprise" type="text"/>
    			</div>

    			<div class="box">
    				<label for="secteur" >Secteur :</label>
    				<input name="secteur" type="text"/>
    			</div>

    			<div class="box">
    				<label for="taille" >Taille :</label>
    				<!-- <input name="taille" type="text"/> -->
						<select name="taille">
							<option value="TPE">TPE</option>
							<option value="PME">PME</option>
							<option value="TGE">TGE</option>
						</select>
    			</div>

    			<div class="box">
    				<label for="tuteurEntreprise" >Tuteur :</label>

    			</div>

    			<div class="box">
    				<label for="tuteurEntrepriseNom" >Nom :</label>
    				<input name="tuteurEntrepriseNom" type="text"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEntreprisePrenom" >Prenom :</label>
    				<input name="tuteurEntreprisePrenom" type="text"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEntrepriseProfession" >Profession :</label>
    				<input name="tuteurEntrepriseProfession" type="text"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEntrepriseMail" >Mail :</label>
    				<input name="tuteurEntrepriseMail" type="text"/>
    			</div>
    		</fieldset>


    		<fieldset>
    			<legend>Contenu</legend>

    			<div class="box onblock">
    				<label for="problematique" >Problematique :</label>
    				<input name="problematique" type="text"/>
    			</div>

    			<div class="box onblock">
    				<label for="mission[]" >Missions :</label>
    				<input name="mission[]" type="text"/>
                    <input name="mission[]" type="text"/>
                    <input name="mission[]" type="text"/>
                    <input name="mission[]" type="text"/>
                    <input name="mission[]" type="text"/>
    			</div>

    			<div class="box onblock">
                    <label for="technologie[]" >Technologies :</label>
                    <input name="technologie[]" type="text"/>
                    <input name="technologie[]" type="text"/>
                    <input name="technologie[]" type="text"/>
                    <input name="technologie[]" type="text"/>
                    <input name="technologie[]" type="text"/>
          </div>

    			<div class="box onblock">
                    <label for="outil[]" >Outils :</label>
                    <input name="outil[]" type="text"/>
                    <input name="outil[]" type="text"/>
                    <input name="outil[]" type="text"/>
                    <input name="outil[]" type="text"/>
                    <input name="outil[]" type="text"/>
          </div>

    			<div class="box onblock">
                    <label for="motcle[]" >Mots clés :</label>
                    <input name="motcle[]" type="text"/>
                    <input name="motcle[]" type="text"/>
                    <input name="motcle[]" type="text"/>
                    <input name="motcle[]" type="text"/>
                    <input name="motcle[]" type="text"/>
          </div>

    			<div class="box onblock">
    				<label for="note" >Note :</label>
    				<input name="note" type="number"/>
            <label for="appreciation" >Appreciation :</label>
            <textarea name="appreciation"></textarea>
    			</div>
    		</fieldset>
				<div class="button">
	    				<button type="submit">Envoyer !</button>
	    	</div>
    </form>


<?php
/*  FIN PAGE     */
include 'include/footer.php';
?>
