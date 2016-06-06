<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UtilisateursController extends AppController {

    function signup() {
        if ($this->request->is('post')) {
            $user = $this->request->data;
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

    function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash(__('Bienvenue, ' . $this->Auth->Utilisateur('identifiant')));
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash("Identifiants incorrects");
            }
        }
        $session = $this->Session->read();
        debug($session);
    }

    function logout() {
        $this->Auth->logout();
        $this->redirect($this->referer());
    }

}
