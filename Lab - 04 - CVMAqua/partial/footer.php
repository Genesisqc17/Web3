<footer>
			<div>
				<h3>Construction d'un gestionnnaire de contenu (CMS - Content Management System)</h3>
				<div>
					À partir du site Web actuel, il s’agit de faire un gestionnaire de contenu. Celui permettra de modifier le texte central de la page d’accueil. Il faudrait également nettoyer le code. Actuellement, ce sont des pages HTML statiques. Il n’y a pas de header ni de footer
				</div>
				<div>Étapes:</div>
				<ol>
					<li>Modifier le site actuel pour qu’il soit en PHP, pas en HTML (avec header, footer, etc.)</li>
					<li>Ajouter notre framework de classes PHP (IndexAction, CommonAction, etc.) pour chaque page du site. Vous pouvez utiliser les fichiers des exemples faits en classe. Vous n’avez pas à recoder CommonAction, seulement l’utiliser! N'oubliez pas les snippets : <code>phpx</code> et <code>phpc</code></li>
					<li>Créer une page pour l’authentification : login.php+LoginAction.php, logout.php+LogoutAction.php (vous pouvez prendre le même code que celui que j'ai développé dans CVMCafé)</li>
					<li>Créer le fichier action/DAO/ContentDAO.php, qui possède 2 méthodes statiques <code>setContent($data)</code> et <code>getContent()</code>. La première permet de sauvegarder du contenu dans un fichier texte (voir <code>file_put_contents()</code>), et l'autre de retourner le contenu du fichier (voir <code>file_get_contents()</code>).</li>
					<li>Modifier la page index.php+IndexAction.php afin d'appeler <code>ContentDAO::getContent()</code>, puis retourner ce texte dans la vue. Faire afficher le texte dans la vue (index.php)</li>
					<li>Créer la page de gestion de contenu (disponible aux utilisateurs connectés) : admin-index.php+AdminIndexAction.php, qui contient un <code>textarea</code> dans un formulaire. Lorsque l'usager entre du texte dans le formulaire et le soumet, alors l'action utiliser <code>ContentDAO::setContent()</code> pour sauvegarder ce texte.</li>
					<li>Vous devriez maintenant avoir une page privée permettant de modifier un fichier texte via un <code>textarea</code>, et une page d'accueil qui affiche ce texte: un CMS!</li>
				</ol>
			</div>
		</footer>
	</body>
</html>