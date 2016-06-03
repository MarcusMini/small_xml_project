<?php
include 'include/header.php';
?>


   <!-- /.container -->


	<form method="GET" action="resultat.php" accept-charset="UTF-8">
		<div class="demo-card-event mdl-card mdl-shadow--2dp wider">
			  <div class="mdl-card__title mdl-card--expand">
			    <h4>Section Apprenti</h4>
			  </div>
				<div class="form_wrapper">
					<div class="form_container">
						<div class="mdl-card__title mdl-card--expand">
					    <h4>Information de l'apprenti</h4>
					  </div>
						<!-- name -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" for="sample3" for="nomApprenti">Nom</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="sample3" name="nomApprenti" required="required" maxlength="25">
						    <label class="mdl-textfield__label" for="sample3">Dubois</label>
						  </div>
	    			</div>
						<!-- firstname -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" for="sample3" for="prenomApprenti">Prénom</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="sample3" name="prenomApprenti" required="required" maxlength="25">
						    <label class="mdl-textfield__label" for="sample3">Jean-Eude</label>
						  </div>
	    			</div>
						<!-- formation -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" for="sample3" for="formationApprenti">Formation</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="sample3" name="formationApprenti" required="required" maxlength="30">
						    <label class="mdl-textfield__label" for="sample3">CIWM</label>
						  </div>
	    			</div>
						<!-- annee -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" type="text" for="sample3" for="annee">Annee</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="number" id="sample3" name="annee" required="required" maxlength="4">
						    <label class="mdl-textfield__label" for="sample3">2016</label>
						  </div>
	    			</div>
						<!-- contrat -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" for="contratApprenti" for="annee">Contrat</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<select name="contratApprenti" required="required">
									<option value="Apprentissage">Apprentissage</option>
									<option value="Stage alterné">Stage alterné</option>
									<option value="Professionnalisation">Professionnalisation</option>
								</select>
						  </div>
	    			</div>
						<!-- Mail -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" for="sample3" for="mailApprenti">Mail</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="email" id="sample3" name="mailApprenti" required="required">
						    <label class="mdl-textfield__label" for="sample3">johndoe@gmail.com</label>
						  </div>
	    			</div>
						<!-- INE -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" for="sample3" for="ine">INE</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="sample3" name="ine" required="required" maxlength="11"> <!-- A vérifier -->
						    <label class="mdl-textfield__label" for="sample3">12345678910D</label>
						  </div>
	    			</div>
					</div>

					<!-- form about the uni -->

					<div class="form_container">
						<div class="mdl-card__title mdl-card--expand">
							<h4>Information sur l'établissement</h4>
						</div>
						<!-- uni name -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
								<label class="mdl-textfield__label" for="sample3" for="etabNom">Nom etablissement</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="sample3" name="etabNom">
								<label class="mdl-textfield__label" for="sample3">Université Paris 13</label>
							</div>
						</div>
						<!-- tutor name -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
								<label class="mdl-textfield__label" for="sample3" for="tuteurEtabNom">Nom du tuteur</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEtabNom">
								<label class="mdl-textfield__label" for="sample3">Delacroix</label>
							</div>
						</div>
						<!-- tutor firstname -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
								<label class="mdl-textfield__label" for="sample3" for="tuteurEtabPrenom">Prénom du tuteur</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEtabPrenom">
								<label class="mdl-textfield__label" for="sample3">Manon</label>
							</div>
						</div>
						<!-- job of the tutor -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
								<label class="mdl-textfield__label" for="sample3" for="tuteurEtabProfession">Profession du tuteur</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEtabProfession" required="required" maxlength="25">
								<label class="mdl-textfield__label" for="sample3">Enseignant chercheur</label>
							</div>
						</div>
						<!-- tutor mail -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
								<label class="mdl-textfield__label" for="contratApprenti" for="tuteurEtabMail">Adresse mail du tuteur</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEtabMail">
								<label class="mdl-textfield__label" for="sample3">manondelacroix@mit.edu.com</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="demo-card-event mdl-card mdl-shadow--2dp wider bg-blue space-top">
				  <div class="mdl-card__title mdl-card--expand">
				    <h4>Section Entreprise</h4>
				  </div>
					<div class="form_wrapper">
						<div class="form_container">
							<div class="mdl-card__title mdl-card--expand">
						    <h4>Information sur l'entreprise</h4>
						  </div>
							<!-- company name -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
							    <label class="mdl-textfield__label" for="nomEntreprise">Nom entreprise</label>
							  </div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							    <input class="mdl-textfield__input" type="text" id="sample3" name="nomEntreprise">
							    <label class="mdl-textfield__label" for="nomEntreprise">General Electrics</label>
							  </div>
		    			</div>
							<!-- siret id of the company.. -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
							    <label class="mdl-textfield__label" for="siret">SIRET</label>
							  </div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							    <input class="mdl-textfield__input" type="text" id="sample3" name="siret" required="required" maxlength="20">
							    <label class="mdl-textfield__label" for="siret">1234556778</label>
							  </div>
		    			</div>
							<!-- address of the company -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
							    <label class="mdl-textfield__label" for="adresseEntreprise">Adresse de l'entreprise</label>
							  </div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							    <input class="mdl-textfield__input" type="text" id="sample3" name="adresseEntreprise" required="required" maxlength="30">
							    <label class="mdl-textfield__label" for="adresseEntreprise">1 rue des roses</label>
							  </div>
		    			</div>
							<!-- field of work... services -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
							    <label class="mdl-textfield__label"  for="secteur">Secteur</label>
							  </div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							    <input class="mdl-textfield__input" type="text" id="sample3" name="secteur">
							    <label class="mdl-textfield__label" for="secteur">Industrielle</label>
							  </div>
		    			</div>
							<!-- type of the company -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
							    <label class="mdl-textfield__label" for="taille">Taille d'entreprise</label>
							  </div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

									<select name="taille" required="required">
										<option value="TPE">TPE</option>
										<option value="PME">PME</option>
										<option value="TGE">TGE</option>
									</select>
							  </div>
		    			</div>
						</div>

						<!-- form about the uni -->

						<div class="form_container">
							<div class="mdl-card__title mdl-card--expand">
								<h4>Information sur le tuteur d'entreprise</h4>
							</div>
							<!-- company tutor name -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
									<label class="mdl-textfield__label" for="tuteurEntrepriseNom">Nom du tuteur</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEntrepriseNom">
									<label class="mdl-textfield__label" for="tuteurEntrepriseNom"></label>
								</div>
							</div>
							<!-- company tutor firstname -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
									<label class="mdl-textfield__label" for="tuteurEntreprisePrenom">Prénom du tuteur</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEntreprisePrenom">
									<label class="mdl-textfield__label" for="tuteurEntreprisePrenom"></label>
								</div>
							</div>
							<!-- company tutor function -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
									<label class="mdl-textfield__label" for="tuteurEntrepriseProfession">Profession</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEntrepriseProfession">
									<label class="mdl-textfield__label" for="tuteurEntrepriseProfession"></label>
								</div>
							</div>
							<!-- company tutor mail -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
									<label class="mdl-textfield__label" for="sample3" for="tuteurEntrepriseMail">Adresse mail</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEntrepriseMail">
									<label class="mdl-textfield__label" for="tuteurEntrepriseMail"></label>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- content -->


				<div class="demo-card-event mdl-card mdl-shadow--2dp wider bg-blue-dark space-top">
						<div class="mdl-card__title mdl-card--expand">
							<h4>Contenu</h4>
						</div>
						<div class="form_wrapper">
							<div class="form_container">
								<!-- problématique -->
								<div class="newBox">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
										<label class="mdl-textfield__label" for="problematique">Problématique</label>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="sample3" name="problematique" required="required" maxlength="100">
										<label class="mdl-textfield__label" for="problematique"></label>
									</div>
								</div>
								<!-- missions -->
								<div>
									<div class="newBox">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
											<label class="mdl-textfield__label" for="mission[]">Missions</label>
										</div>
										<div id="missions">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="sample3" name="mission[]" required="required" maxlength="50">
												<label class="mdl-textfield__label" for="mission[]">Mission</label>
											</div>
										</div>
									</div>
									<!-- button to add an other field.. -->
									<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id="addFieldMission">
										<i class="material-icons">add</i>
									</button>
							</div>
								<!-- technology -->
								<div>
									<div class="newBox">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
											<label class="mdl-textfield__label" for="technologie[]">Technologies</label>
										</div>
										<div id="technology">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="sample3" name="technologie[]" required="required" maxlength="50">
												<label class="mdl-textfield__label" for="technologie[]">HTML</label>
											</div>
										</div>
									</div>
									<!-- button to add an other field.. -->
									<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id="addFieldTechno">
										<i class="material-icons">add</i>
									</button>
							</div>
							<!-- outils -->
							<div>
								<div class="newBox">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
										<label class="mdl-textfield__label" for="outil[]">Outils</label>
									</div>
									<div id="outils">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="text" id="sample3" name="outil[]" required="required" maxlength="50">
											<label class="mdl-textfield__label" for="outil[]"></label>
										</div>
									</div>
								</div>
								<!-- button to add an other field.. -->
								<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id="addFieldOutil">
									<i class="material-icons">add</i>
								</button>
						</div>
					</div>

							<!-- form about the uni -->

							<div class="form_container">
								<!-- keywords -->
								<div>
									<div class="newBox">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
											<label class="mdl-textfield__label" for="motcle[]">Mots-clés</label>
										</div>
										<div id="keyword">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="sample3" name="motcle[]" required="required" maxlength="20">
											</div>
										</div>
									</div>
									<!-- button to add an other field.. -->
									<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id="addFieldKey">
										<i class="material-icons">add</i>
									</button>
							</div>
								<!-- mark -->
								<div class="newBox">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
										<label class="mdl-textfield__label" for="note">Note</label>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="number" id="sample3" name="note" maxlength="2">
									</div>
								</div>
								<!-- appreciation -->
								<div class="newBox">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
										<label class="mdl-textfield__label" for="appreciation">Appreciation</label>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<textarea name="appreciation" class="mdl-textfield__input ttarea" maxlength="100"></textarea> <!-- Type=text non précisé car textarea ? -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Accent-colored raised button with ripple -->
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent centerButton" type="submit">
					  Envoyer !
					</button>


	</form>
<!--
	<form method="GET" action="resultat.php" accept-charset="UTF-8">
    		<fieldset> -->
    			<!-- <legend>Apprenti</legend>
    			<div class="box">
    				<label for="nomApprenti" >Nom :</label>
    				 <input name="nomApprenti" type="text"/>
						<div class="mdl-textfield mdl-js-textfield md-text">
					    <input class="mdl-textfield__input" type="text" id="sample1" name="nomApprenti">
					    <label class="mdl-textfield__label" for="sample1">Text...</label>
					  </div>
    			</div>
    			<div class="box">
    				<label for="prenomApprenti" >Prenom :</label>
    				<input name="prenomApprenti" type="text"  />
						<div class="mdl-textfield mdl-js-textfield md-text">
					    <input class="mdl-textfield__input" type="text" id="sample1" name="prenomApprenti">
					    <label class="mdl-textfield__label" for="sample1">Text...</label>
					  </div>
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
    				 <input name="contratApprenti" type="text"/>
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

    			</div> -->

    			<!-- <div class="box">
    				<label for="tuteurEtabNom" >Nom :</label>
    				<input name="tuteurEtabNom" type="text"/>
    			</div> -->

    			<!-- <div class="box">
    				<label for="tuteurEtabPrenom" >Prenom :</label>
    				<input name="tuteurEtabPrenom" type="text"/>
    			</div> -->

    			<!-- <div class="box">
    				<label for="tuteurEtabProfession" >Profession :</label>
    				<input name="tuteurEtabProfession" type="text"/>
    			</div> -->

    			<!-- <div class="box">
    				<label for="tuteurEtabMail" >Mail :</label>
    				<input name="tuteurEtabMail" type="text"/>
    			</div> -->
    		<!-- </fieldset>

    		<fieldset>
    			<legend>Entreprise</legend> -->
<!--
    			<div class="box">
    				<label for="nomEntreprise" >Nom :</label>
    				<input name="nomEntreprise" type="text"/>
    			</div> -->

    			<!-- <div class="box">
    				<label for="siret" >Siret :</label>
    				<input name="siret" type="text"/>
    			</div> -->

    			<!-- <div class="box">
    				<label for="adresseEntreprise" >Adresse :</label>
    				<input name="adresseEntreprise" type="text"/>
    			</div> -->

    			<!-- <div class="box">
    				<label for="secteur" >Secteur :</label>
    				<input name="secteur" type="text"/>
    			</div> -->

    			<!-- <div class="box">
    				<label for="taille" >Taille :</label>
    				 <input name="taille" type="text"/>
						<select name="taille">
							<option value="TPE">TPE</option>
							<option value="PME">PME</option>
							<option value="TGE">TGE</option>
						</select>
    			</div> -->

    			<!-- <div class="box">
    				<label for="tuteurEntreprise" >Tuteur :</label>

    			</div> -->

    			<!-- <div class="box">
    				<label for="tuteurEntrepriseNom" >Nom :</label>
    				<input name="tuteurEntrepriseNom" type="text"/>
    			</div> -->

    			<!-- <div class="box">
    				<label for="tuteurEntreprisePrenom" >Prenom :</label>
    				<input name="tuteurEntreprisePrenom" type="text"/>
    			</div> -->

    			<!-- <div class="box">
    				<label for="tuteurEntrepriseProfession" >Profession :</label>
    				<input name="tuteurEntrepriseProfession" type="text"/>
    			</div> -->

    			<!-- <div class="box">
    				<label for="tuteurEntrepriseMail" >Mail :</label>
    				<input name="tuteurEntrepriseMail" type="text"/>
    			</div> -->
    		<!-- </fieldset>


    		<fieldset>
    			<legend>Contenu</legend> -->

    			<!-- <div class="box onblock">
    				<label for="problematique" >Problematique :</label>
    				<input name="problematique" type="text"/>
    			</div> -->

    			<!-- <div class="box onblock">
    				<label for="mission[]" >Missions :</label>
    				<input name="mission[]" type="text"/>
                    <input name="mission[]" type="text"/>
                    <input name="mission[]" type="text"/>
                    <input name="mission[]" type="text"/>
                    <input name="mission[]" type="text"/>
    			</div> -->

    			<!-- <div class="box onblock">
                    <label for="technologie[]" >Technologies :</label>
                    <input name="technologie[]" type="text"/>
                    <input name="technologie[]" type="text"/>
                    <input name="technologie[]" type="text"/>
                    <input name="technologie[]" type="text"/>
                    <input name="technologie[]" type="text"/>
          </div> -->

    			<!-- <div class="box onblock">
                    <label for="outil[]" >Outils :</label>
                    <input name="outil[]" type="text"/>
                    <input name="outil[]" type="text"/>
                    <input name="outil[]" type="text"/>
                    <input name="outil[]" type="text"/>
                    <input name="outil[]" type="text"/>
          </div> -->

    			<!-- <div class="box onblock">
                    <label for="motcle[]" >Mots clés :</label>
                    <input name="motcle[]" type="text"/>
                    <input name="motcle[]" type="text"/>
                    <input name="motcle[]" type="text"/>
                    <input name="motcle[]" type="text"/>
                    <input name="motcle[]" type="text"/>
          </div> -->
<!--
    			<div class="box onblock">
    				<label for="note" >Note :</label>
    				<input name="note" type="number"/>
            <label for="appreciation" >Appreciation :</label>
            <textarea name="appreciation"></textarea>
    			</div>
    		</fieldset>
				<div class="button">
	    				<button type="submit">Envoyer !</button>
	    	</div> -->
    <!-- </form> -->


<?php
/*  FIN PAGE     */
include 'include/footer.php';
?>
