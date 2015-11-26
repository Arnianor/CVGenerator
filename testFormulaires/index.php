<!DOCTYPE HTML> 
<!--
	This file is a test for our forms
	author : Fabio Manuel da Mota Marques
-->
<html>
	<head>
	<!--
		<meta charset="UTF-8">
	-->
		<style>
		.error {color: #FF0000;}
		.mandatory {color : #FF0000;}
		h1{text-align:center;}
		#form{text-align:center;}
		</style>
	</head>
	<body>
			<h1>CVGenerator</h1>
		<form id="form" method="post" action="./controlForm.php">
			
			<p class="mandatory">Les champs ayant une étoile ( * ) à côté sont obligatoires</p>		
			</br>
			
			<h2>Données personelles</h2>
			
			<label for="sexM">M</label>
			<input type="radio" name="sex" id="sexM" value="Monsieur"  required>
			<label for="sexF">Mme</label>
			<input type="radio" name="sex" id="sexF" value="Madame" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="firstName">Prénom</label>
			<input type="text" name="firstName" id="firstName" placeholder="Ex: Fabio, Joël ou Horia" autofocus required>
			<span class="mandatory">*</span>
			</br>
						
			<label for="lastName">Nom</label>
			<input type="text" name="lastName" id="lastName"  placeholder="Ex: Marques, Rittiner, Mut" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="birthDate">Date de naissance</label>
			<input type="date" name="birthDate" id="birthDate" required>
			<span class="mandatory">*</span>
			</br>
			
			<h3>Adresse</h3>
			
			<label for="street">Rue</label>
			<input type="text" name="street" id="street"  placeholder="Ex: Espace de l'europe">
			<label for="streetNumber">N°</label>
			<input type="number" name="streetNumber" id="streetNumber"  min="1" placeholder="Ex. 123">
			</br>
			
			<label for="postalCode">Code postal</label>
			<input type="text" name="postalCode" id="postalCode" placeholder="Ex: 2000">
			</br>
			
			<label for="locality">Localité</label>
			<input type="text" name="locality" id="locality" placeholder="Ex: Neuchâtel">
			</br>
			
			<label for="country">Pays</label>
			<input type="text" name="country" id="country" placeholder="Ex: Suisse">
			</br>
			
			<h3>Autres Contacts</h3>
			<label for="mail">e-mail</label>
			<input type="email" name="mail" id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Ex: exemple@xxx.yyyy" autocomplete="on" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="telephone">Téléphone</label>
			<input type="tel" name="telephone" id="telephone" placeholder="Ex: 032 000 00 00">
			</br>
			
			<label for="portable">Portable</label>
			<input type="tel" name="portable" id="portable" placeholder="Ex: 079 000 00 00">
			</br>
			
			
			<h2>Parcours professionnel</h2>
			
			<label for="function">Poste</label>
			<input type="text" name="function" id="function" placeholder="Ex: Étudiant" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="enterprise">Entreprise</label>
			<input type="text" name="enterprise" id="enterprise" placeholder="Ex: HE-Arc" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="enterpriseStreet">Rue</label>
			<input type="text" name="enterpriseStreet" id="enterpriseStreet"  placeholder="Ex: Espace de l'europe" required>
			<span class="mandatory">*</span>
			<label for="enterpriseStreetNumber">N°</label>
			<input type="number" name="enterpriseStreetNumber" id="enterpriseStreetNumber"  min="1" placeholder="Ex. 123" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="enterprisePostalCode">Code Postal</label>
			<input type="text" name="enterprisePostalCode" id="enterprisePostalCode" placeholder="Ex: 2000" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="enterpriseLocality">Localité</label>
			<input type="text" name="enterpriseLocality" id="enterpriseLocality" placeholder="Ex: Neuchâtel" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="enterpriseCountry">Pays</label>
			<input type="enterpriseCountry" name="enterpriseCountry" id="enterpriseCountry" placeholder="Ex: Suisse" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="beginDate">Date de début</label>
			<input type="date" name="beginDate" id="beginDate" required>
			<span class="mandatory">*</span>
			<label for="endDate">Date de fin</label>
			<input type="date" name="endDate" id="endDate" required>
			<span class="mandatory">*</span>
			</br>
			
			<h2>Parcours académique</h2>
			
			<label for="degree">Titre</label>
			<input type="text" name="degree" id="degree" placeholder="Ex: Bachelor" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="school">École</label>
			<input type="text" name="school" id="school" placeholder="Ex: HE-Arc" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="schoolStreet">Rue</label>
			<input type="text" name="schoolStreet" id="schoolStreet"  placeholder="Ex: Espace de l'europe" required>
			<span class="mandatory">*</span>
			<label for="schoolStreetNumber">N°</label>
			<input type="number" name="schoolStreetNumber" id="schoolStreetNumber"  min="1" placeholder="Ex. 123" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="schoolPostalCode">Code Postal</label>
			<input type="text" name="schoolPostalCode" id="schoolPostalCode" placeholder="Ex: 2000" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="schoolLocality">Localité</label>
			<input type="text" name="schoolLocality" id="schoolLocality" placeholder="Ex: Neuchâtel" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="schoolCountry">Pays</label>
			<input type="enterpriseCountry" name="schoolCountry" id="schoolCountry" placeholder="Ex: Suisse" required>
			<span class="mandatory">*</span>
			</br>
			
			<label for="beginDegreeDate">Date de début</label>
			<input type="date" name="beginDegreeDate" id="beginDegreeDate" required>
			<span class="mandatory">*</span>
			<label for="endDegreeDate">Date de fin</label>
			<input type="date" name="endDegreeDate" id="endDegreeDate"required>
			<span class="mandatory">*</span>
			
			<h2>Langues</h2>
			<label for="language">Langue</label>
			<input type="text" name="language" id="language" placeholder="Ex: Amglais">
			</br>
			
			<label for="languageDegree">Diplôme</label>
			<input type="text" name="languageDegree" id="languageDegree" placeholder="Ex: First, TOEIC, ...">
			</br>
			
			<label for="languageLevel">Niveau européen</label>
			<input type="text" name="languageLevel" id="languageLevel" placeholder="Ex: A2, B2, C1, C2, ...">
			</br>
			
			<!--
			
			<label for=""></label>
			<input type="" name="" id="" placeholder= required>
			<span class="mandatory">*</span>
			</br>
			
			-->
			
			
			<input type="submit" value="Terminé">
			
		</form>
	</body>
</html>