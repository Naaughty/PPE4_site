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
echo '<h2>Les etudiants inscrits</h2><br><br>';
echo '<thead>';
echo '<tr>';
echo '<th>Prenom</th>';
echo '<th>Nom</th>';
echo '<th>Promotion</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

//On insert chaque étudiant dans le tableau en indiquant son prenom, son nom, sa promotion et un bouton de détails
foreach ($lesEtudiants as $unEtudiant) {
    echo '<tr>';
    echo '<td>' . $unEtudiant['Utilisateur']['prenom'] . '</td>';
    echo '<td>' . $unEtudiant['Utilisateur']['nom'] . '</td>';
    echo '<td>' . $unEtudiant['Utilisateur']['annee_entree_promotion'] . ' / ' . $unEtudiant['Utilisateur']['annee_sortie_promotion'] . '</td>';
    echo '<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDetails-' . $unEtudiant['Utilisateur']['id_utilisateur'] . '">Details</button></td>';
    echo '<td>';
    ?>
    <!-- Modal -->
    <?php echo '<div id="modalDetails-' . $unEtudiant['Utilisateur']['id_utilisateur'] . '" class="modal fade" role="dialog">'; ?>
    <div class="modal-dialog">

        <!-- Contenu du modal -->
        <div class="modal-content">
            <div class="modal-header">
                <?php echo '<h4 class="modal-title">' . $unEtudiant['Utilisateur']['prenom'] . " " . $unEtudiant['Utilisateur']['nom'] . '</h4>'; ?>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Prenom : </td>
                            <td><?php echo $unEtudiant['Utilisateur']['prenom']; ?></td>
                        </tr>
                        <tr>
                            <td>Nom : </td>
                            <td><?php echo $unEtudiant['Utilisateur']['nom']; ?></td>
                        </tr>
                        <tr>
                            <td>E-mail : </td>
                            <td><?php echo $unEtudiant['Utilisateur']['courriel']; ?></td>
                        </tr>
                        <tr>
                            <td>Téléphone professionnel : </td>
                            <td><?php echo $unEtudiant['Utilisateur']['tel_professionnel']; ?></td>
                        </tr>
                        <tr>
                            <td>Site Web </td>
                            <td><?php echo $unEtudiant['Utilisateur']['site_web']; ?></td>
                        </tr>
                        <tr>
                            <td>Année d\'entrée en promotion : </td>
                            <td><?php echo $unEtudiant['Utilisateur']['annee_entree_promotion']; ?></td>
                        </tr>
                        <tr>
                            <td>Année sortie de promotion : </td>
                            <td><?php echo $unEtudiant['Utilisateur']['annee_sortie_promotion']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>

    </div>
    <?php
    echo '</div>';
    echo '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
echo '</div></div>';

