<?php
 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
class UtilisateursController extends AppController {
    
    public function beforeFilter() {
         parent::beforeFilter();
    }
 
    //Fonction permettant l'inscription
    function signup() {
        if ($this->request->is('post')) {
            $user = $this->request->data;
            debug($this->request->data);
            //On définit l'id_utilisateur à null
            $user['Utilisateur']['id_utilisateur'] = null;
 
            //Si le mot de passe n'est pas vide, on le hashe en md5
            if (!empty($user['Utilisateur']['mot_de_passe'])) {
                $user['Utilisateur']['mot_de_passe'] = Security::hash($user['Utilisateur']['mot_de_passe'], 'md5');
            }
            debug($user);
            //On sauvegarde les données dont le hashage du mot de passe ($user) dans la base de données
            if ($this->Utilisateur->save($user, $this->request->data)) {
                $this->Session->setFlash("<div class=\"col-md-12 alert alert-block alert-success\">Votre compte a bien été créé</div>");
            } else {
                $this->Session->setFlash("<div class=\"col-md-12 alert alert-block alert-danger\">Veuillez corriger vos erreurs</div>");
            }
            $session = $this->Session->read();
            debug($session);
        }
    }
 
    //Fonction permettant la création d'un tableau aléatoire
    function tableauAleatoire() {
 
//25 cases
 
        $resultat = array_fill(0, 25, "");
 
//10 tirages :
 
        $i = 0;
 
        while ($i < 10) {
 
            $numCase = rand(0, 24);
 
            if ($resultat[$numCase] == "") {
 
                $resultat[$numCase] = $i;
 
                $i++;
            }
        }
 
 
 
        return $resultat;
    }
 
    //Fonction de connexion
    function login() {
 
        if ($this->request->is('post')) {
            //debug($this->Auth->authenticate);
            if($this->Auth->login()){
                $this->Session->setFlash("<br><br><br><div class=\"col-md-12 alert alert-block alert-success\">Vous êtes connécté</div>");
                if($this->Auth->user()){
                    $this->set('authUser', $this->Auth->user());
                }
            } else {
                $this->Session->setFlash("<br><br><br><div class=\"col-md-12 alert alert-block alert-danger\">Connexion refusé, vérifiez votre identifiant et votre mot de passe</div>");
            }
        }
    }
 
    //Fonction de deconnexion
    function logout() {
        $this->Auth->logout();
        $this->redirect($this->referer());
    }
 
    //Fonction permettant de trouver tous les utilisateurs dans la base de données
    function etudiants() {
        $lesUtilisateurs = $this->Utilisateur->find('all');
        return $lesUtilisateurs;
    }
 
    function edit() {
        $user_id = $this->Auth->user('id_utilisateur');
        if (!$user_id) {
            $this->redirect('/');
            die();
        }
        //Si l'utilisateur est bien connecté on récupère les informations
        $this->Utilisateur->id_utilisateur = $user_id;
        //debug($user_id);
        $passError = false;
        if ($this->request->is('put') || $this->request->is('post')) {
            $user = $this->request->data;
            $user['Utilisateur']['id_utilisateur'] = $user_id;
            if (!empty($user['Utilisateur'['mot_de_passe1']])) {
                if ($user['Utilisateur']['mot_de_passe1'] == $user['Utilisateur']['mot_de_passe2']) {
                    $user['Utilisateur']['mot_de_passe'] = Security::hash($user['Utilisateur']['mot_de_passe1'], 'md5');
                } else {
                    $passError = true;
                }
            }
            if ($this->Utilisateur->save($user, true, array('nom', 'prenom', 'adresse_rue', 'adresse_cp', 'adresse_ville', 'tel_personnel', 'tel_professionnel', 'courriel', 'site_web', 'identifiant', 'mot_de_passe', 'annee_entree_promotion', 'annee_sortie_promotion'))) {
                $this->Session->setFlash("<div class=\"col-md-12 alert alert-block alert-success\">Votre profil a bien été édité</div>");
            } else {
                $this->Session->setFlash("<div class=\"col-md-12 alert alert-block alert-danger\">Impossible de sauvegarder l'édition</div>");
            }
            if ($passError) {
                $this->Utilisateur->validationErrors['mot_de_passe2'] = array('Les mots de passe ne correspondent pas');
            }
        } else {
            $donnees = $this->Auth->user();
            $this->set("donnees",$donnees);
        }
    }
 
}