
<!DOCTYPE html>
<html>
<head>
	<title>PimpIt!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>

	<h1>Formulaire CV</h2>

<!-- Test form en GET et uniquement le prénom en required : -->

	<form class="form" action="GET">
		<h2>Informations obligatoires :</h2>

		<fieldset>
			<h3>A votre sujet :</h2>

			<p class="">
			<input type="text" required name="prenom" id="prenom" placeholder="Votre prénom *"/>
			<label for="prenom"></label>
			</p>

			<p class="">
				<input type="text" name="nom" id="nom" placeholder="Votre nom *"/>
				<label for="nom"></label>
			</p>

			<p class="">
				<input type="email" name="email" id="email" placeholder="Votre adresse email *"/>
				<label for="email"></label>
			</p>

			<p class="">
				<input type="date" name="date_naissance" id="date_naissance" placeholder="Votre date de naissance *"/>
				<label for="date_naissance"></label>
			</p>

			<p class="file">
				<input type="file" name="photo" id="photo" placeholder="Si vous souhaitez nous envoyer votre photo de CV"/>
				<label for="photo"></label>
			</p>
		</fieldset>

		<fieldset>
			<h3>Vos coordonnées :</h2>

			<p class="">
				<input type="text" name="adresse" id="adresse" placeholder="Numéro de rue et rue *"/>
				<label for="adresse"></label>
			</p>

			<p class="">
				<input type="text" name="ville" id="ville" placeholder="Ville *"/>
				<label for="ville"></label>
			</p>

			<p class="">
				<input type="text" name="code_postal" id="code_postal" placeholder="Code postal *"/>
				<label for="code_postal"></label>
			</p>

			<p class="">
				<input type="text" name="pays" id="pays" placeholder="Pays *"/>
				<label for="pays"></label>
			</p>
			<br />

			<p class="">
				<input type="text" name="telephone" id="telephone" placeholder="Téléphone *"/>
				<label for="telephone"></label>
			</p>

		</fieldset>
		<h2>Si vous avez déjà un CV, vous pouvez nous l'envoyer :</h2>

		<p class="file">
			<input type="file" name="CV" id="CV" placeholder="Veuillez uploader votre CV"/>
			<label for="CV"></label>
		</p>

		<p class="submit">
			<input type="submit" name="indos" value="Envoyer"/>
		</p>
	</form>
	<form class="" method="GET">

		<h2>Sinon, vous pouvez nous les donner en dessous :</h2>

		<fieldset>
			<h3>Informations diverses :</h3>

			<p class="">
				<label for="situation">Situation familiale *</label>
				<select class="" name="situation">
					<option value="célibataire">célibataire</option>
					<option value="concubinage">concubinage</option>
					<option value="marié">marié</option>
					<option value="veuve/veuf">veuve/veuf</option>
				</select>
			</p>

			<p class="">
				<input type="text" name="nationalite" id="nationalite" placeholder="Nationalité *"/>
				<label for="nationalite"></label>
			</p>

			<p class="">
				<label for="permis_sejour">Permis de travail / séjour :</label>
				<select class="" name="permis_sejour">
					<option value="travail">travail</option>
					<option value="sejour">séjour</option>
					<option value="N/A">N/A</option>
				</select>
			</p>

			<p class="">
				<label for="permis_conduire">Permis de conduire :</label><br />
				<input type="checkbox" name="permis_a" /><label for="permis_a">Permis A</label><br />
				<input type="checkbox" name="permis_b" /><label for="permis_b">Permis B</label><br />
				<input type="checkbox" name="permis_c" /><label for="permis_c">Permis C</label><br />
				<input type="checkbox" name="permis_d" /><label for="permis_d">Permis D</label><br />
				<input type="checkbox" name="validation" /><label for="validation">En cours de validation</label><br />
			</p>
		</fieldset>

		<fieldset>
			<h3>Votre expérience :</h3>

				<h4>Entreprise :</h4>

				<p class="">
					<input type="text" name="nom" id="nom" placeholder="Nom *"/>
					<label for="nom"></label>
				</p>

				<p class="">
					<label for="secteur">Secteur :</label>
					<select class="secteur" name="">
						<option value="agroalimentaire">Agroalimentaire</option>
						<option value="banque">Banque / Assurance</option>
						<option value="bois">Bois / Papier / Carton / Imprimerie</option>
						<option value="btp">BTP / Matériaux de construction</option>
						<option value="chimie">Chimie / Parachimie</option>
						<option value="commerce">Commerce / Négoce / Distribution</option>
						<option value="communication">Édition / Communication / Multimédia</option>
						<option value="electronique">Électronique / Électricité</option>
						<option value="conseil">Études et conseils</option>
						<option value="pharmaceutique">Industrie pharmaceutique</option>
						<option value="informatique">Informatique / Télécoms</option>
						<option value="machine">Machines et équipements / Automobile</option>
						<option value="metallurgie">Métallurgie / Travail du métal</option>
						<option value="plastique">Plastique / Caoutchouc</option>
						<option value="service">Services aux entreprises</option>
						<option value="textile">Textile / Habillement / Chaussure</option>
						<option value="transports">Transports / Logistique</option>
					</select>
				</p>

				<p class="">
					<input type="text" name="produits_services" id="produits_services" placeholder="Produits / Services"/>
					<label for="produits_services"></label>
				</p>

				<p class="">
					<input type="text" name="ca" id="ca" placeholder="Chiffre d'affaire *"/>
					<label for="ca"></label>
				</p>

				<p class="">
					<label for="effectif">Effectif * :</label>
					<select class="" name="effectif">
						<option value="1">entre 1 et 9</option>
						<option value="10">entre 10 et 49</option>
						<option value="50">entre 50 et 250</option>
						<option value="50">250 et plus</option>
					</select>
				</p>

				<p class="">
					<input type="url_entreprise" name="url_entreprise" id="url_entreprise" placeholder="Site web"/>
					<label for="url_entreprise"></label>
				</p>
				<br/>

				<p class="">
					<input type="text" name="poste" id="poste" placeholder="Intitulé du poste"/>
					<label for="poste"></label>
				</p>

				<p class="">
					<input type="text" name="lieu_entreprise" id="lieu_entreprise" placeholder="Localisation du poste"/>
					<label for="lieu_entreprise"></label>
				</p>
				<p class="">
					<textarea name="role" rows="4" cols="40" id="role" placeholder="Rôle dans l'entreprise"></textarea>
					<label for="role"></label>
				</p>

				<p class="">
					<label for="Duree">Durée du poste * : </label>
					<span>de </span>

					<select class="" name="mois-debut">
						<option value="janvier">janvier</option>
						<option value="fevrier">février</option>
						<option value="mars">Mars</option>
						<option value="avril">Avril</option>
						<option value="mai">Mai</option>
						<option value="juin">Juin</option>
						<option value="juillet">Juillet</option>
						<option value="aout">Août</option>
						<option value="septembre">Septembre</option>
						<option value="octobre">Octobre</option>
						<option value="novembre">Novembre</option>
						<option value="decembre">Décembre</option>
						<option value="non_precise"="">Ne pas sélectionner de mois</option>
					</select>
					<select class="" name="annee-debut">
						<?php for ($i=date(Y); $i >= 1950; $i--) : ?>
							# code...
							<?= '<option value="'.$i.'">'.$i.'</option>' ?>
						<?php endfor; ?>
					</select>

					<span>à </span>

					<select class="" name="mois-debut">
						<option value="janvier">janvier</option>
						<option value="fevrier">février</option>
						<option value="mars">Mars</option>
						<option value="avril">Avril</option>
						<option value="mai">Mai</option>
						<option value="juin">Juin</option>
						<option value="juillet">Juillet</option>
						<option value="aout">Août</option>
						<option value="septembre">Septembre</option>
						<option value="octobre">Octobre</option>
						<option value="novembre">Novembre</option>
						<option value="decembre">Décembre</option>
						<option value="non_precise"="">Ne pas sélectionner de mois</option>
					</select>
					<select class="" name="annee-debut">
						<?php for ($i=date(Y); $i >= 1950; $i--) : ?>
							# code...
							<?= '<option value="'.$i.'">'.$i.'</option>' ?>
						<?php endfor; ?>
					</select>
				</p>

				<p class="">
					<label for="responsabilite">Responsabilités :</label><br />
					<input type="text" name="responsabilite1" id="responsabilite1" placeholder="1"/><br />
					<input type="text" name="responsabilite2" id="responsabilite2" placeholder="2"/><br />
					<input type="text" name="responsabilite3" id="responsabilite3" placeholder="3"/><br />
					<input type="text" name="responsabilite4" id="responsabilite4" placeholder="4"/><br />
					<input type="text" name="responsabilite5" id="responsabilite5" placeholder="5"/>
				</p>

				<p class="">
					<label for="responsabilite">Réussites / accomplissements :</label><br />
					<input type="text" name="reussite1" id="reussite1" placeholder="1"/><br />
					<input type="text" name="reussite2" id="reussite2" placeholder="2"/><br />
					<input type="text" name="reussite3" id="reussite3" placeholder="3"/><br />
					<input type="text" name="reussite4" id="reussite4" placeholder="4"/><br />
					<input type="text" name="reussite5" id="reussite5" placeholder="5"/>
				</p>


		</fieldset>

		<fieldset>
			<h3>Formation :</h3>

			<p class="">
				<input type="text" name="diplome" id="diplome" placeholder="Diplome *"/>
				<label for="diplome"></label>
			</p>

			<p class="">
				<input type="text" name="etablissement_formation" id="etablissement_formation" placeholder="Etablissement *"/>
				<label for="etablissement_formation"></label>
			</p>

			<p class="">
				<input type="text" name="specialite_formation" id="specialite_formation" placeholder="Spécialité"/>
				<label for="specialite_formation"></label>
			</p>

			<p class="">
				<input type="text" name="lieu_formation" id="lieu_formation" placeholder="Lieu"/>
				<label for="lieu_formation"></label>
			</p>

			<p>
				<label for="date_diplome">Année d'obtention du diplome * : </label>
				<select class="" name="annee-debut">
					<?php for ($i=date(Y); $i >= 1950; $i--) : ?>
						# code...
						<?= '<option value="'.$i.'">'.$i.'</option>' ?>
					<?php endfor; ?>
				</select>
			</p>

			<p class="">
				<input type="url_formation" name="url_formation" id="url_formation" placeholder="Site web"/>
				<label for="url_formation"></label>
			</p>

		</fieldset>

		<fieldset>
			<h3>Certification :</h3>

			<p class="">
				<input type="text" name="certification" id="certification" placeholder="Diplome *"/>
				<label for="certification"></label>
			</p>

			<p class="">
				<input type="text" name="etablissement_certification" id="etablissement_certification" placeholder="Etablissement *"/>
				<label for="etablissement_certification"></label>
			</p>

			<p class="">
				<input type="text" name="specialite_certification" id="specialite_certification" placeholder="Spécialité"/>
				<label for="specialite_certification"></label>
			</p>

			<p class="">
				<input type="text" name="lieu_certification" id="lieu_certification" placeholder="Lieu"/>
				<label for="lieu_certification"></label>
			</p>

			<p>
				<label for="date_certification">Année d'obtention du diplome * : </label>
				<select class="" name="annee-debut">
					<?php for ($i=date(Y); $i >= 1950; $i--) : ?>
						# code...
						<?= '<option value="'.$i.'">'.$i.'</option>' ?>
					<?php endfor; ?>
				</select>
			</p>

			<p class="">
				<input type="url_certification" name="url_certification" id="url_certification" placeholder="Site web"/>
				<label for="url_certification"></label>
			</p>

		</fieldset>

		<fieldset>
			<h3>Langues :</h3>

				<p class="">
					<input type="text" name="langue_maternelle" id="langue_maternelle" placeholder="Langue maternelle"/>
					<label for="langue_maternelle"></label>
				</p>

				<br />

				<p class="">
					<input type="text" name="langue_1" id="langue_1" placeholder="Deuxième langue"/>
					<label for="langue_1"></label>
				</p>

				<p>
					<label for="langue_1_niveau">Votre niveau de 1 à 100</label>
					<input type="text" id="langue_1_niveau">
					<div id="slider-range-max"></div>
				</p>

				<p class="">
					<input type="text" name="langue_score_toeic" id="langue_score_toeic" placeholder="Score TOEIC"/>
					<label for="langue_score_toeic"></label>
					<input type="text" name="langue_score_toefl" id="langue_score_toefl" placeholder="Score TOEFL"/>
					<label for="langue_score_toefl"></label>
					<input type="text" name="langue_score_ielts" id="langue_score_ielts" placeholder="Score IELTS"/>
					<label for="langue_score_ielts"></label>
				</p>



		</fieldset>

		<fieldset>
			<h3>Informations personnelles</h3>

			<textarea name="description" id="description" rows="8" cols="80" placeholder="Décrivez vous en quelques mots ! Et essayez de répondre à la question épineuse de pourquoi voudriez vous travailler avec vous même ?"></textarea>
			<label for="description"></label>

			<br />
			<h4>Centres d'intérêt</h4>

			<p class="">
				<input type="text" name="passion_1" id="passion_1" placeholder="Centres d'intérêt"/>
				<label for="passion_1"></label>
			</p>
			<p>
				<label for="passion_1">Niveau de pratique</label>
				<input type="range" id="range2" name="passion_1" id="passion_2" class="slider" min="10" max="100" step="10" value="0" style="width:220px;" />
				<span id="range2">10</span><span> %</span>
			</p>
			<h4>Voyages</h4>

			<p>
				<textarea name="voyages" id="voyages" rows="8" cols="80" placeholder="Si vous avez voyagé, indiquez nous vos dernières destinations"></textarea>
				<label for="voyages"></label>
			</p>

			<h4>Bénévolat</h4>

			<p class="">
				<input type="text" name="nom" id="nom" placeholder="Nom *"/>
				<label for="nom"></label>
			</p>


			<p class="">
				<input type="text" name="secteur" id="secteur" placeholder="Secteur"/>
				<label for="secteur"></label>
			</p>


			<p class="">
				<label for="benevoles">Nombre de bénévoles * :</label>
				<select class="" name="benevoles">
					<option value="1">entre 1 et 9</option>
					<option value="10">entre 10 et 49</option>
					<option value="50">entre 50 et 250</option>
					<option value="50">250 et plus</option>
				</select>
			</p>

			<p class="">
				<input type="url_entreprise" name="url_entreprise" id="url_entreprise" placeholder="Site web"/>
				<label for="url_entreprise"></label>
			</p>
			<br/>

			<p class="">
				<input type="text" name="poste" id="poste" placeholder="Intitulé du poste"/>
				<label for="poste"></label>
			</p>

			<p class="">
				<input type="text" name="lieu_entreprise" id="lieu_entreprise" placeholder="Localisation du poste"/>
				<label for="lieu_entreprise"></label>
			</p>
			<p class="">
				<textarea name="role" rows="4" cols="40" id="role" placeholder="Rôle dans l'entreprise"></textarea>
				<label for="role"></label>
			</p>

			<p class="">
				<label for="Duree">Durée du poste * : </label>
				<span>de </span>

				<select class="" name="mois-debut">
					<option value="janvier">janvier</option>
					<option value="fevrier">février</option>
					<option value="mars">Mars</option>
					<option value="avril">Avril</option>
					<option value="mai">Mai</option>
					<option value="juin">Juin</option>
					<option value="juillet">Juillet</option>
					<option value="aout">Août</option>
					<option value="septembre">Septembre</option>
					<option value="octobre">Octobre</option>
					<option value="novembre">Novembre</option>
					<option value="decembre">Décembre</option>
					<option value="non_precise"="">Ne pas sélectionner de mois</option>
				</select>
				<select class="" name="annee-debut">
					<?php for ($i=date(Y); $i >= 1950; $i--) : ?>
						# code...
						<?= '<option value="'.$i.'">'.$i.'</option>' ?>
					<?php endfor; ?>
				</select>

				<span>à </span>

				<select class="" name="mois-debut">
					<option value="janvier">janvier</option>
					<option value="fevrier">février</option>
					<option value="mars">Mars</option>
					<option value="avril">Avril</option>
					<option value="mai">Mai</option>
					<option value="juin">Juin</option>
					<option value="juillet">Juillet</option>
					<option value="aout">Août</option>
					<option value="septembre">Septembre</option>
					<option value="octobre">Octobre</option>
					<option value="novembre">Novembre</option>
					<option value="decembre">Décembre</option>
					<option value="non_precise"="">Ne pas sélectionner de mois</option>
				</select>
				<select class="" name="annee-debut">
					<?php for ($i=date(Y); $i >= 1950; $i--) : ?>
						# code...
						<?= '<option value="'.$i.'">'.$i.'</option>' ?>
					<?php endfor; ?>
				</select>
			</p>

			<p class="">
				<label for="responsabilite">Responsabilités :</label><br />
				<input type="text" name="responsabilite1" id="responsabilite1" placeholder="1"/><br />
				<input type="text" name="responsabilite2" id="responsabilite2" placeholder="2"/><br />
				<input type="text" name="responsabilite3" id="responsabilite3" placeholder="3"/><br />
				<input type="text" name="responsabilite4" id="responsabilite4" placeholder="4"/><br />
				<input type="text" name="responsabilite5" id="responsabilite5" placeholder="5"/>
			</p>

			<p class="">
				<label for="responsabilite">Réussites / accomplissements :</label><br />
				<input type="text" name="reussite1" id="reussite1" placeholder="1"/><br />
				<input type="text" name="reussite2" id="reussite2" placeholder="2"/><br />
				<input type="text" name="reussite3" id="reussite3" placeholder="3"/><br />
				<input type="text" name="reussite4" id="reussite4" placeholder="4"/><br />
				<input type="text" name="reussite5" id="reussite5" placeholder="5"/>
			</p>

			<h4>Réseaux sociaux</h4>

			<p class="">
				<input type="url" name="url_skype" id="url_skype" placeholder="Compte Skype"/>
				<label for="url_skype"></label>
			</p>
			<p class="">
				<input type="url" name="url_twitter" id="url_twitter" placeholder="Compte Twitter"/>
				<label for="url_twitter"></label>
			</p>
			<p class="">
				<input type="url" name="url_perso" id="url_perso" placeholder="Site perso"/>
				<label for="url_perso"></label>
			</p>

			<h4>Informations diverses</h4>

			<p class="">
				<textarea name="divers" rows="4" cols="40" id="role" placeholder="Informations diverses que vous souhaitez nous communiquer par rapport à votre CV"></textarea>
				<label for="divers"></label>
			</p>

		</fieldset>

		<p class="submit">
			<input type="submit" name"cv" value="Envoyer"/>
		</p>


	</form>

</body>

</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
