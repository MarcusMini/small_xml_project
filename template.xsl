<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:php="http://php.net/xsl"
	xmlns="http://www.w3.org/1999/xhtml">
	<xsl:template match="/FicheMemoire">
		<div class="templateContainer">
		<xsl:for-each select="Apprenti">
			<h1 class="templateH1">
				<xsl:value-of select="/FicheMemoire/@titre"/>
				<span> par <xsl:value-of select="nomApprenti" /><xsl:text> </xsl:text><xsl:value-of select="prenomApprenti" /></span>
			</h1>
			<h2 class="templateH2">
				<xsl:value-of select="etablissement/nomEtablissement" /> - <xsl:value-of select="formationApprenti" /> - <xsl:value-of select="annee" />
			</h2>
			<div id="internInfos">
				<p>
					<span class="templateLabel">Type de contrat :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:value-of select="contrat" />
					</span>
				</p>
				<p>
					<span class="templateLabel">Mail :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:value-of select="mailApprenti" />
					</span>
				</p>
				<p>
					<span class="templateLabel">N° INE :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:value-of select="numINE" />
					</span>
				</p>
				<p>
					<span class="templateLabel">Tuteur enseignant :</span>
					<span class="value">
						<xsl:value-of select="etablissement/tuteurEtablissement/nomTuteur" /><xsl:text> </xsl:text><xsl:value-of select="etablissement/tuteurEtablissement/prenomTuteur" /> - <xsl:value-of select="etablissement/tuteurEtablissement/professionTuteur" />
					</span>
				</p>
				<p>
					<span class="templateLabel">Mail tuteur enseignement :</span>
					<span class="value">
						<xsl:text> </xsl:text><xsl:value-of select="etablissement/tuteurEtablissement/mailTuteur" />
					</span>
				</p>
			</div>
		</xsl:for-each>
		<div id="companyInfos">
			<xsl:for-each select="Entreprise">
				<h3 class="templateH3">ENTREPRISE</h3>
				<p>
					<span class="templateLabel">Nom :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:value-of select="nomEntreprise" />
					</span>
				</p>
				<p>
					<span class="templateLabel">SIRET :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:value-of select="siretEntreprise" />
					</span>
				</p>
				<p>
					<span class="templateLabel">Adresse :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:value-of select="adresseEntreprise" />
					</span>
				</p>
				<p>
					<span class="templateLabel">Secteur :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:value-of select="secteur" />
					</span>
				</p>
				<p>
					<span class="templateLabel">Taille de l'entreprise :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:value-of select="taille" />
					</span>
				</p>
				<p>
					<span class="templateLabel">Maitre d'apprentissage :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:text> </xsl:text><xsl:value-of select="tuteur/nomTuteur" /><xsl:text> </xsl:text><xsl:value-of select="tuteur/prenomTuteur" /> - <xsl:value-of select="tuteur/professionTuteur" />
					</span>
				</p>
				<p>
					<span class="templateLabel">Mail maitre d'apprentissage :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:text> </xsl:text><xsl:value-of select="tuteur/mailTuteur" />
					</span>
				</p>
			</xsl:for-each>
		</div>
		<div id="contentInfos">
		<xsl:for-each select="Contenu">
				<h3>MEMOIRE</h3>
				<p>
					<span class="templateLabel">Problématique :</span>
					<xsl:text> </xsl:text><span class="value">
						<xsl:value-of select="problematique" />
					</span>
				</p>
				<div>
					<span class="templateLabel">Missions :</span>
					<ul>
						<xsl:for-each select="missions/mission">
							<li>
								<xsl:value-of select="." />
							</li>
						</xsl:for-each>
					</ul>
				</div>
				<div>
					<span class="templateLabel">Technologies :</span>
					<ul>
						<xsl:for-each select="technologies/technologie">
							<li class="tags">
								<xsl:value-of select="." />
							</li>
						</xsl:for-each>
					</ul>
				</div>
				<div>
					<span class="templateLabel">Outils :</span>
					<ul>
						<xsl:for-each select="outils/outil">
							<li class="tags">
								<xsl:value-of select="." />
							</li>
						</xsl:for-each>
					</ul>
				</div>
				<div>
					<span class="templateLabel">Mots clés :</span>
					<ul>
						<xsl:for-each select="motscles/motscle">
							<li class="tags">
								<xsl:value-of select="." />
							</li>
						</xsl:for-each>
					</ul>
				</div>
				<div>
					<h3>Note finale</h3>
					<p><xsl:value-of select="note"></xsl:value-of>/20 - <xsl:value-of select="note/@appreciation"></xsl:value-of></p>
				</div>
			</xsl:for-each>
		</div>
		</div>
	</xsl:template>
</xsl:stylesheet>
