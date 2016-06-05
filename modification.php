<?php
include 'include/header.php';

$name = $_GET["file"];
$xml = simplexml_load_file("profil/".$name);

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
						    <input class="mdl-textfield__input" type="text" id="sample3" name="nomApprenti" required="required" maxlength="25" value="<?php echo $xml->Apprenti->nomApprenti ?>">
						    <label class="mdl-textfield__label" for="sample3"></label>
						  </div>
	    			</div>
						<!-- firstname -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" for="sample3" for="prenomApprenti">Prénom</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="sample3" name="prenomApprenti" required="required" maxlength="25" value="<?php echo $xml->Apprenti->prenomApprenti ?>">
						    <label class="mdl-textfield__label" for="sample3"></label>
						  </div>
	    			</div>
						<!-- formation -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" for="sample3" for="formationApprenti">Formation</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="sample3" name="formationApprenti" required="required" maxlength="30" value="<?php echo $xml->Apprenti->formationApprenti ?>">
						    <label class="mdl-textfield__label" for="sample3"></label>
						  </div>
	    			</div>
						<!-- annee -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" type="text" for="sample3" for="annee">Annee</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="number" id="sample3" name="annee" required="required" maxlength="4" min="1900" max="3000" value="2016">
						    <label class="mdl-textfield__label" for="sample3"></label>
						  </div>
	    			</div>
						<!-- contrat -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" for="contratApprenti" for="annee">Contrat</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<select name="contratApprenti" required="required" value="<?php echo $xml->Apprenti->contrat ?>">
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
						    <input class="mdl-textfield__input" type="email" id="sample3" name="mailApprenti" required="required" value="<?php echo $xml->Apprenti->mailApprenti ?>">
						    <label class="mdl-textfield__label" for="sample3"></label>
						  </div>
	    			</div>
						<!-- INE -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
						    <label class="mdl-textfield__label" for="sample3" for="ine">INE</label>
						  </div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" id="sample3" name="ine" required="required" maxlength="11" value="<?php echo $xml->Apprenti->numINE ?>"> <!-- A vérifier -->
						    <label class="mdl-textfield__label" for="sample3"></label>
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
								<input class="mdl-textfield__input" type="text" id="sample3" name="etabNom" value="<?php echo $xml->Apprenti->etablissement->nomEtablissement ?>">
								<label class="mdl-textfield__label" for="sample3"></label>
							</div>
						</div>
						<!-- tutor name -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
								<label class="mdl-textfield__label" for="sample3" for="tuteurEtabNom">Nom du tuteur</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEtabNom" value="<?php echo $xml->Apprenti->etablissement->tuteurEtablissement->nomTuteur ?>">
								<label class="mdl-textfield__label" for="sample3"></label>
							</div>
						</div>
						<!-- tutor firstname -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
								<label class="mdl-textfield__label" for="sample3" for="tuteurEtabPrenom">Prénom du tuteur</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEtabPrenom"  value="<?php echo $xml->Apprenti->etablissement->tuteurEtablissement->prenomTuteur ?>">
								<label class="mdl-textfield__label" for="sample3"></label>
							</div>
						</div>
						<!-- job of the tutor -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
								<label class="mdl-textfield__label" for="sample3" for="tuteurEtabProfession">Profession du tuteur</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEtabProfession" required="required" maxlength="25" value="<?php echo $xml->Apprenti->etablissement->tuteurEtablissement->professionTuteur ?>">
								<label class="mdl-textfield__label" for="sample3"></label>
							</div>
						</div>
						<!-- tutor mail -->
						<div class="newBox">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
								<label class="mdl-textfield__label" for="contratApprenti" for="tuteurEtabMail">Adresse mail du tuteur</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEtabMail" value="<?php echo $xml->Apprenti->etablissement->tuteurEtablissement->mailTuteur ?>">
								<label class="mdl-textfield__label" for="sample3"></label>
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
							    <input class="mdl-textfield__input" type="text" id="sample3" name="nomEntreprise" value="<?php echo $xml->Entreprise->nomEntreprise ?>">
							    <label class="mdl-textfield__label" for="nomEntreprise"></label>
							  </div>
		    			</div>
							<!-- siret id of the company.. -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
							    <label class="mdl-textfield__label" for="siret">SIRET</label>
							  </div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							    <input class="mdl-textfield__input" type="text" id="sample3" name="siret" required="required" maxlength="20" value="<?php echo $xml->Entreprise->siretEntreprise ?>">
							    <label class="mdl-textfield__label" for="siret"></label>
							  </div>
		    			</div>
							<!-- address of the company -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
							    <label class="mdl-textfield__label" for="adresseEntreprise">Adresse de l'entreprise</label>
							  </div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							    <input class="mdl-textfield__input" type="text" id="sample3" name="adresseEntreprise" required="required" maxlength="30" value="<?php echo $xml->Entreprise->adresseEntreprise ?>">
							    <label class="mdl-textfield__label" for="adresseEntreprise"></label>
							  </div>
		    			</div>
							<!-- field of work... services -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
							    <label class="mdl-textfield__label"  for="secteur">Secteur</label>
							  </div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							    <input class="mdl-textfield__input" type="text" id="sample3" name="secteur" value="<?php echo $xml->Entreprise->secteur ?>">
							    <label class="mdl-textfield__label" for="secteur"></label>
							  </div>
		    			</div>
							<!-- type of the company -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
							    <label class="mdl-textfield__label" for="taille">Taille d'entreprise</label>
							  </div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<select name="taille" required="required" value="<?php echo $xml->Entreprise->taille ?>">
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
									<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEntrepriseNom" value="<?php echo $xml->Entreprise->tuteur->nomTuteur ?>">
									<label class="mdl-textfield__label" for="tuteurEntrepriseNom"></label>
								</div>
							</div>
							<!-- company tutor firstname -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
									<label class="mdl-textfield__label" for="tuteurEntreprisePrenom">Prénom du tuteur</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEntreprisePrenom" value="<?php echo $xml->Entreprise->tuteur->prenomTuteur ?>">
									<label class="mdl-textfield__label" for="tuteurEntreprisePrenom"></label>
								</div>
							</div>
							<!-- company tutor function -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
									<label class="mdl-textfield__label" for="tuteurEntrepriseProfession">Profession</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEntrepriseProfession" value="<?php echo $xml->Entreprise->tuteur->professionTuteur ?>">
									<label class="mdl-textfield__label" for="tuteurEntrepriseProfession"></label>
								</div>
							</div>
							<!-- company tutor mail -->
							<div class="newBox">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
									<label class="mdl-textfield__label" for="sample3" for="tuteurEntrepriseMail">Adresse mail</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" id="sample3" name="tuteurEntrepriseMail" value="<?php echo $xml->Entreprise->tuteur->mailTuteur ?>">
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
										<input class="mdl-textfield__input" type="text" id="sample3" name="problematique" required="required" maxlength="100" value="<?php echo $xml->Contenu->problematique ?>">
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

											<?php
												//echo $xml->Contenu->missions;
												$idMission = 0;
												foreach($xml->Contenu->missions->mission as $keys){
													echo "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label' id='mission-".$idMission."' data-category='missions'><input class='mdl-textfield__input' type='text' id='sample3' value='".$keys."' name='mission[]' required ><label class='mdl-textfield__label' for='mission[]'></label><button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored close_but'><i class='material-icons'>close</i></button></div>";

													$idMission++;
												}
											?>
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
											<?php
												//echo $xml->Contenu->missions;
												$idTech = 0;
												foreach($xml->Contenu->technologies->technologie as $keys){
													echo "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label' id='techno-".$idTech."' data-category='techno'><input class='mdl-textfield__input' type='text' id='sample3' name='mission[]' required value='".$keys."'><label class='mdl-textfield__label' for='mission[]'></label><button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored close_but'><i class='material-icons'>close</i></button></div>";

													$idTech++;
												}
											?>
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
										<?php
											//echo $xml->Contenu->missions;
											$idTools = 0;
											foreach($xml->Contenu->outils->outil as $keys){
												echo "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label' id='tools-".$idTools."' data-category='tools'><input class='mdl-textfield__input' type='text' id='sample3' name='mission[]' required value='".$keys."'><label class='mdl-textfield__label' for='mission[]'></label><button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored close_but'><i class='material-icons'>close</i></button></div>";

												$idTools++;
											}
										?>
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
											<?php
												//echo $xml->Contenu->missions;
												$idKey = 0;
												foreach($xml->Contenu->motcles->motcle as $keys){
													echo "<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label' id='keys-".$idKey."' data-category='key'><input class='mdl-textfield__input' type='text' id='sample3' name='mission[]' required value='".$keys."'><label class='mdl-textfield__label' for='mission[]'></label><button class='mdl-button mdl-js-button mdl-button--icon mdl-button--colored close_but'><i class='material-icons'>close</i></button></div>";

													$idKey++;
												}
											?>
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
										<input class="mdl-textfield__input" type="number" id="sample3" name="note" maxlength="2" value="<?php echo $xml->Contenu->note ?>">
									</div>
								</div>
								<!-- appreciation -->
								<div class="newBox">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label labelField">
										<label class="mdl-textfield__label" for="appreciation">Appreciation</label>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<textarea name="appreciation" class="mdl-textfield__input ttarea" maxlength="300"><?php echo $xml->Contenu->note->attributes()->appreciation ?></textarea> <!-- Type=text non précisé car textarea ? -->
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
<?php
/*  FIN PAGE     */

// include js file for the right page...
echo "<script src='js/script.js'></script>";
include 'include/footer.php';
?>
