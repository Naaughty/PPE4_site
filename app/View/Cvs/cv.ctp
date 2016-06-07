<?php
//On execute la fonction etudiants() du controller UtilisateursController
//Cette fonction retourne un tableau contenant tous les utilisateurs
$lesEtudiants = $this->requestAction(array('controller' => 'Utilisateurs',
    'action' => 'etudiants'
        ));

//Création du tableau regroupant les étudiants inscrits
echo '<br><br>';
echo '<div class="container"><div class="hero-unit">';
echo '<table class="table table-hover">';
echo '<h2>Les CV des étudiants</h2><br><br>';
echo '<thead>';
echo '<tr>';
echo '<th>Prenom</th>';
echo '<th>Nom</th>';
echo '<th>Promotion</th>';
echo '<th>CV</th>';
echo '<th>Vues</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

//On insert chaque étudiant dans le tableau en indiquant son prenom, son nom, sa promotion un bouton permettant de voir son CV et le nombre de vues sur son CV
foreach ($lesEtudiants as $unEtudiant) {
    echo '<tr>';
    echo '<td>' . $unEtudiant['Utilisateur']['prenom'] . '</td>';
    echo '<td>' . $unEtudiant['Utilisateur']['nom'] . '</td>';
    echo '<td>' . $unEtudiant['Utilisateur']['annee_entree_promotion'] . ' / ' . $unEtudiant['Utilisateur']['annee_sortie_promotion'] . '</td>';
    echo '<td><button type="button" class="btn btn-info" data-toggle="modal" name="vue">Voir</button></td>';
    echo '<td>' . $unEtudiant['Utilisateur']['vue_cv'] . '</td>';
    echo '<td>';
    
}
echo '</tbody>';
echo '</table>';
echo '</div>';