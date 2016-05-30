<?php
include 'include/header.php';

$name = $_GET["file"];
$xml = simplexml_load_file("profil/".$name);

?>


   <!-- /.container -->

	<form method="GET" action="resultat.php" accept-charset="UTF-8">
    		<fieldset>
    			<legend>Apprenti</legend>
    			<div class="box">
    				<label for="nomApprenti" >Nom :</label>
    				<input name="nomApprenti" type="text" value="<?php echo $xml->Apprenti->nomApprenti ?>"/>
    			</div>
    			<div class="box">
    				<label for="prenomApprenti" >Prenom :</label>
    				<input name="prenomApprenti" type="text"  value="<?php echo $xml->Apprenti->prenomApprenti ?>"/>
    			</div>
    			<div class="box">
    				<label for="formationApprenti" >Formation :</label>
    				<input name="formationApprenti" type="text" value="<?php echo $xml->Apprenti->formationApprenti ?>"/>
    			</div>

    			<div class="box">
    				<label for="annee" >Annee :</label>
    				<input name="annee" type="text" value="<?php echo $xml->Apprenti->annee ?>"/>
    			</div>

    			<div class="box">
    				<label for="contratApprenti" >Contrat :</label>
    				<!-- <input name="contratApprenti" type="text"/> -->
						<select name="contratApprenti" value="<?php echo $xml->Apprenti->contrat ?>">
							<option value="Apprentissage">Apprentissage</option>
							<option value="Stage alterné">Stage alterné</option>
							<option value="Professionnalisation">Professionnalisation</option>
						</select>
    			</div>

    			<div class="box">
    				<label for="mailApprenti" >Mail :</label>
    				<input name="mailApprenti" type="text" value="<?php echo $xml->Apprenti->mailApprenti ?>"/>
    			</div>

    			<div class="box">
    				<label for="ine" >INE :</label>
    				<input name="ine" type="text" value="<?php echo $xml->Apprenti->numINE ?>"/>
    			</div>
					<br>
    			<div class="box">
    				<label for="etablissement" >Etablissement :</label>
    			</div>

    			<div class="box">
    				<label for="etabNom" >Nom etablissement :</label>
    				<input name="etabNom" type="text" value="<?php echo $xml->Apprenti->etablissement->nomEtablissement ?>"/>
    			</div>

    			<div class="box">
    				<label for="tuteur" >Tuteur :</label>
    			</div>

    			<div class="box">
    				<label for="tuteurEtabNom" >Nom :</label>
    				<input name="tuteurEtabNom" type="text" value="<?php echo $xml->Apprenti->etablissement->tuteurEtablissement->nomTuteur ?>"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEtabPrenom" >Prenom :</label>
    				<input name="tuteurEtabPrenom" type="text" value="<?php echo $xml->Apprenti->etablissement->tuteurEtablissement->prenomTuteur ?>"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEtabProfession" >Profession :</label>
    				<input name="tuteurEtabProfession" type="text" value="<?php echo $xml->Apprenti->etablissement->tuteurEtablissement->professionTuteur ?>"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEtabMail" >Mail :</label>
    				<input name="tuteurEtabMail" type="text" value="<?php echo $xml->Apprenti->etablissement->tuteurEtablissement->mailTuteur ?>"/>
    			</div>
    		</fieldset>

    		<fieldset>
    			<legend>Entreprise</legend>

    			<div class="box">
    				<label for="nomEntreprise" >Nom :</label>
    				<input name="nomEntreprise" type="text" value="<?php echo $xml->Entreprise->nomEntreprise ?>"/>
    			</div>

    			<div class="box">
    				<label for="siret" >Siret :</label>
    				<input name="siret" type="text" value="<?php echo $xml->Entreprise->siretEntreprise ?>"/>
    			</div>

    			<div class="box">
    				<label for="adresseEntreprise" >Adresse :</label>
    				<input name="adresseEntreprise" type="text" value="<?php echo $xml->Entreprise->adresseEntreprise ?>"/>
    			</div>

    			<div class="box">
    				<label for="secteur" >Secteur :</label>
    				<input name="secteur" type="text" value="<?php echo $xml->Entreprise->secteur ?>"/>
    			</div>

    			<div class="box">
    				<label for="taille" >Taille :</label>
    				<!-- <input name="taille" type="text"/> -->
						<select name="taille" value="<?php echo $xml->Entreprise->adresseEntreprise ?>">
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
    				<input name="tuteurEntrepriseNom" type="text" value="<?php echo $xml->Entreprise->tuteur->nomTuteur ?>"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEntreprisePrenom" >Prenom :</label>
    				<input name="tuteurEntreprisePrenom" type="text" value="<?php echo $xml->Entreprise->tuteur->prenomTuteur ?>"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEntrepriseProfession" >Profession :</label>
    				<input name="tuteurEntrepriseProfession" type="text" value="<?php echo $xml->Entreprise->tuteur->professionTuteur ?>"/>
    			</div>

    			<div class="box">
    				<label for="tuteurEntrepriseMail" >Mail :</label>
    				<input name="tuteurEntrepriseMail" type="text" value="<?php echo $xml->Entreprise->tuteur->mailTuteur ?>"/>
    			</div>
    		</fieldset>


    		<fieldset>
    			<legend>Contenu</legend>

    			<div class="box">
    				<label for="problematique" >Problematique :</label>
    				<input name="problematique" type="text" value="<?php echo $xml->Contenu->problematique ?>"/>
    			</div>

    			<div class="box onblock">
    				<label for="mission[]" >Missions :</label>
    				<input name="mission[]" type="text" value="<?php echo $xml->Contenu->missions->mission[0] ?>"/>
                    <input name="mission[]" type="text" value="<?php echo $xml->Contenu->missions->mission[1] ?>"/>
                    <input name="mission[]" type="text" value="<?php echo $xml->Contenu->missions->mission[2] ?>"/>
                    <input name="mission[]" type="text" value="<?php echo $xml->Contenu->missions->mission[2] ?>"/>
                    <input name="mission[]" type="text" value="<?php echo $xml->Contenu->missions->mission[3] ?>"/>
    			</div>

    			<div class="box onblock">
                    <label for="technologie[]" >Technologies :</label>
                    <input name="technologie[]" type="text" value="<?php echo $xml->Contenu->technologies->technologie[0] ?>"/>
                    <input name="technologie[]" type="text" value="<?php echo $xml->Contenu->technologies->technologie[1] ?>"/>
                    <input name="technologie[]" type="text" value="<?php echo $xml->Contenu->technologies->technologie[2] ?>"/>
                    <input name="technologie[]" type="text" value="<?php echo $xml->Contenu->technologies->technologie[3] ?>"/>
                    <input name="technologie[]" type="text" value="<?php echo $xml->Contenu->technologies->technologie[4] ?>"/>
          </div>

    			<div class="box onblock">
                    <label for="outil[]" >Outils :</label>
                    <input name="outil[]" type="text" value="<?php echo $xml->Contenu->outils->outil[0] ?>"/>
                    <input name="outil[]" type="text" value="<?php echo $xml->Contenu->outils->outil[1] ?>"/>
                    <input name="outil[]" type="text" value="<?php echo $xml->Contenu->outils->outil[2] ?>"/>
                    <input name="outil[]" type="text" value="<?php echo $xml->Contenu->outils->outil[3] ?>"/>
                    <input name="outil[]" type="text" value="<?php echo $xml->Contenu->outils->outil[4] ?>"/>
          </div>

    			<div class="box onblock">
                    <label for="motcle[]" >Mots clés :</label>
                    <input name="motcle[]" type="text" value="<?php echo $xml->Contenu->motcles->motcle[0] ?>"/>
                    <input name="motcle[]" type="text" value="<?php echo $xml->Contenu->motcles->motcle[1] ?>"/>
                    <input name="motcle[]" type="text" value="<?php echo $xml->Contenu->motcles->motcle[2] ?>"/>
                    <input name="motcle[]" type="text" value="<?php echo $xml->Contenu->motcles->motcle[3] ?>"/>
                    <input name="motcle[]" type="text" value="<?php echo $xml->Contenu->motcles->motcle[4] ?>"/>
          </div>

    			<div class="box onblock">
    				<label for="note" >Note :</label>
    				<input name="note" type="number" value="<?php echo $xml->Contenu->note ?>"/>
            <label for="appreciation" >Appreciation :</label>
            <textarea name="appreciation"  value=""> <?php echo $xml->Contenu->note->attributes()->appreciation ?></textarea>


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
