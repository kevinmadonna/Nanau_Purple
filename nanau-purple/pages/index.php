<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <title></title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>


	<header>															<!-- La tête de page qui sera présente partout -->
		<h1>NANAU-PURPLE</h1>

		<input type="button" name="rechercher" value="Rechercher" />

		<span id="sep"><input type="button" name="connexion" value="Connexion" />		<!-- Les deux boutons qui pour le moment ne mènent nulle part -->
		<input type="button" name="inscription" value="Inscription" /></span>
	</header>

  <div class="menu">
      <h1>Nanau_purple</h1>

      <ul>
          <li><a href="../action.php">Action</a></li>
          <li><a href="aventure.php">Aventure</a></li>
          <li><a href="drame.php">Drame</a></li>
          <li><a href=".php">Epouvante-Horreur</a></li>
          <li><a href=".tarifs.php">Fantastique</a></li>
          <li><a href=".tarifs.php">Science-Fiction</a></li>

      </ul>
  </div>
  <hr/>

  <!-- formulaire d'inscription -->

  <form action="inscription.php" method="post">
      <div>
          <label>pseudo :</label>
          <input type="text" name="pseudo" />
      </div>
      <div>
          <label>mail :</label>
          <input type="email" name="mail" />
      </div>
      <div>
          <label>Password :</label>
          <input type="password" name="password"/>
      </div>
      <div>
          <input type="submit" name="envoyer" value="submit"/>
      </div>
  </form>


  <!-- formulaire de connection -->

  <form action="connection.php" method="post">
      <div>
          <label>pseudo :</label>
          <input type="text" name="pseudo" />
      </div>
      <div>
          <label>mail :</label>
          <input type="email" name="mail" />
      </div>
      <div>
          <label>Password :</label>
          <input type="password" name="password"/>
      </div>
      <div>
          <input type="submit" name="envoyer" value="submit"/>
      </div>
  </form>


  

	<div id="film">

		<div id="prochainement">													<!-- Pour les films à venir -->
			<h2>Prochainement</h2>
			<div>
				<img src="../im/films/burn_out.jpg" alt="Affiche de Burn Out" />
				<p>Burn Out</p>
			</div>

			<div>
				<img src="../im/films/avengers.jpg" alt="Affiche d'avengers" />
				<p>Avengers : Infinity war</p>
			</div>

			<div>
				<img src="../im/films/tomb_raider.jpg" alt="Affiche de Tomb Raider" />	<!-- Ca fait long sans php mais c'est faisable -->
				<p>Tomb Raider</p>
			</div>

			<div>
				<img src="../im/films/star_solo.jpg" alt="Affiche de Star Wars" />
				<p>Solo : A Star Wars Story</p>
			</div>

			<div>
				<img src="../im/films/jurassic.jpg" alt="Affiche de Jurassic Word" />
				<p>Jurassic Word : </p>
			</div>

			<div>
				<img src="../im/films/insidious.jpg" alt="Affiche d'Insidious" />
				<p>Insidious : La dernière clé</p>
			</div>

			<div>
				<img src="../im/films/new_generation.jpg" alt="Affiche de Spiderman" />
				<p>Spiderman : New Generation</p>
			</div>

			<div>
				<img src="../im/films/nuances.jpg" alt="Affiche de Cinquante nuances plus claires" />
				<p>Cinquante nuances plus claires</p>
			</div>

			<div>
				<img src="../im/films/alita.jpg" alt="Affiche d'Alita'" />
				<p>Alita : Battle Angel</p>
			</div>

		</div>



		<div class="genre">				<!-- Pour les films d'action -->
			<h2>Action</h2>
			<div>
				<img src="../im/films/pirates_5.jpg" alt="Affiche de Pirates des caraibes" />
				<p>Pirates des Caraïbes : La Vengeance de Salazar</p>
			</div>

			<input type="button" name="fgauche" class="fleche" value="<" />		<!-- Boutons pour défiler vers la gauche ou la droite -->
			<input type="button" name="fdroite" class="fleche" value=">" />

			<a href="action.html"><input type="button" name="plus" id="plus" value="Plus de films" /></a>
		</div>


		<div class="genre">				<!-- Pour les films d'aventure -->
			<h2>Aventure</h2>
			<div>
				<img src="" alt="" />
				<p>.........................................................
					.....................................................
					.........................................................
				.......................................................</p>
			</div>

			<input type="button" name="fdroite" value=">" />
			<input type="button" name="fgauche" value="<" />
		</div>


		<div class="genre">				<!-- Pour les films de drame -->
			<h2>Drame</h2>
			<div>
				<img src="" alt="" />
				<p>.........................................................
				.....................................................
				.........................................................
			.......................................................</p>
			</div>


			<input type="button" name="fdroite" value=">" />
			<input type="button" name="fgauche" value="<" />
		</div>


		<div class="genre"> 			<!-- Pour les films d'Horreur -->
			<h2>Epouvante-Horreur</h2>
			<div>
				<img src="../im/films/ca.jpg" alt="Affiche de Ca" />
				<p>Ca !</p>
			</div>

			<input type="button" name="fdroite" value=">" />
			<input type="button" name="fgauche" value="<" />
		</div>


		<div class="genre">				<!-- Pour les films fantastiques -->
			<h2>Fantastique</h2>
			<div>
				<img src="" alt="" />
				<p>.........................................................
				.....................................................
				.........................................................
			.......................................................</p>
			</div>

			<input type="button" name="fdroite" value=">" />
			<input type="button" name="fgauche" value="<" />
		</div>

		<div class="genre">				<!-- Pour les films de Science - Fiction -->
			<h2>Science-Fiction</h2>
			<div>
				<img src="" alt="" />
				<p>.........................................................
				.....................................................
				.........................................................
			.......................................................</p>
			</div>

			<input type="button" name="fdroite" value=">" />
			<input type="button" name="fgauche" value="<" />
		</div>

	</div>

	<footer>
		<h2>Suivez-nous</h2>
		<table>
			<tr>
				<td><img src="../im/ico-Facebook.png" alt="icône facebook"></td>
				<td><img src="../im/ico-Instagram.png" alt="icône instagram"></td>		<!-- Cette partie est encore à finir -->
				<td><img src="../im/ico-Twitter.png" alt="icône twitter"></td>
			</tr>
		</table>
	</footer>



	<script src="../js/script.js"></script>
</body>
</html>
