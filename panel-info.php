<?php
add_action('admin_menu', 'panel_algo');
function panel_algo() {
	add_menu_page('Info', 'Info du thème', 'read', 'panel-algo', 'render_panel', null, 100);
}

function render_panel() {
	?>
		<div class="wrap theme-options-page">
			<h1>Info</h1>
			<div class="card">
				
			
			<p>Ce thème donne accès aux fonctionnalités : FAQ, Liens.</p>
			<p>Avec ce thème le plugin de redirection de login n'est plus nécessaire (la redirection après inscription se fait automatiquement vers collab.algosphere.org).</p>
			
			<p>
				<ul>
					<li>Réglages conseillés :</li>
					<li>-désactiver l'éditeur visuel (dans <em>Modifier mon profil</em>) : celui-ci cause des problèmes d'affichage</li>
					<li>-pour les icônes des menus, mettre Vertical Align : baseline, Font Size : 1em</li>
				</ul>
			</p>
			<br>
			<p>
				<ul>
					<li><strong>Plugins conseillés :</strong></li>
					<li><a href="https://wordpress.org/plugins/contact-form-7/">Contact Form</a> pour créer le formulaire de contact</li>
					<li><a href="https://wordpress.org/plugins/menu-icons/">Menu Icons</a> pour ajouter les icônes aux entêtes des menus</li>
				</ul>
			</p>
			<br>
			<p>
				<ul>
					<li><em>A prévoir pour les prochaines versions :</em></li>
					<li>-markdown éditeur</li>
					<li>-design responsive</li>
					<li>-boutons d'édition personnalisés pour le modèle home</li>
				</ul>
			</p>
			</div>
		</div>
	<?php
}