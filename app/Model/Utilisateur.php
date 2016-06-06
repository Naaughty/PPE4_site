<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilisateur
 *
 * @author Kevin
 */
class Utilisateur extends AppModel {

    //Gestion des règles pour chaque input du formulaire
    public $validate = array(
        //L'identifiant est obligatoire et doit être en alphanumeric et unique
        'identifiant' => array(
            array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'allowEmpty' => false,
                'message' => "Votre pseudo n'est pas valide"
            ),
            array(
                'rule' => 'isUnique',
                'message' => "Ce pseudo est déjà pris"
            )
        ),
        //Le mot de passe est obligatoire
        'mot_de_passe' => array(
            array(
                'rule' => 'alphaNumeric',
                'message' => "Le mot de passe ne doit contenir que des chiffres"
            ),
            array(
                'rule' => 'notBlank',
                'required' => true,
                'message' => "Vous devez entrer un mot de passe",
                'allowEmpty' => false
            )
        ),
        //L'e-mail est obligatoire et doit être du type adresse mail et être unique
        'courriel' => array(
            array(
                'rule' => 'email',
                'required' => true,
                'allowEmpty' => false,
                'message' => "Votre e-mail n'est pas valide"
            ),
            array(
                'rule' => 'isUnique',
                'message' => "Cet e-mail est déjà pris"
            )
        ),
        //Le nom est obligatoire
        'nom' => array(
            array(
                'rule' => 'notBlank',
                'required' => true,
                'message' => "Vous devez entrer un nom",
                'allowEmpty' => false
            )
        ),
        //Le prenom est obligatoire
        'prenom' => array(
            array(
                'rule' => 'notBlank',
                'required' => true,
                'message' => "Vous devez entrer un prenom",
                'allowEmpty' => false
            )
        ),
        //La rue est obligatoire
        'adresse_rue' => array(
            array(
                'rule' => 'notBlank',
                'required' => true,
                'message' => "Vous devez entrer une rue",
                'allowEmpty' => false
            )
        ),
        //Le code postal est obligatoire
        'adresse_cp' => array(
            array(
                'rule' => 'notBlank',
                'required' => true,
                'message' => "Vous devez entrer un code postal",
                'allowEmpty' => false
            )
        ),
        //La ville est obligatoire
        'adresse_ville' => array(
            array(
                'rule' => 'notBlank',
                'required' => true,
                'message' => "Vous devez entrer une ville",
                'allowEmpty' => false
            )
        ),
        //Le téléphone personnel n'est pas obligatoire
        'tel_personnel' => array(
            array(
                'rule' => 'notBlank',
                'required' => false,
                'allowEmpty' => true
            )
        ),
        //Le téléphone professionel n'est pas obligatoire
        'tel_professionnel' => array(
            array(
                'rule' => 'notBlank',
                'required' => false,
                'allowEmpty' => true
            )
        ),
        //Le site web n'est pas obligatoire
        'site_web' => array(
            array(
                'rule' => 'notBlank',
                'required' => false,
                'allowEmpty' => true
            )
        ),
        //L'année d'entrée en promotion est obligatoire
        'annee_entree_promotion' => array(
            array(
                'rule' => 'numeric',
                'required' => true,
                'allowEmpty' => false,
                'message' => "Vous devez indiquer une année d'entrée en promotion en format numérique"
            )
        ),
        //L'année de sortie de promotion est obligatoire
        'annee_sortie_promotion' => array(
            array(
                'rule' => 'numeric',
                'required' => true,
                'allowEmpty' => false,
                'message' => "Vous devez indiquer une année de sortie de promotion en format numérique"
            )
        )
    );

}
