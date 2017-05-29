<?php

class User extends Controller {

    /**
     * PAGE: index (page d'acceuil)
     * This method handles what happens when you move to http://egghome/client/index (which is the default page)
     */
    public function index(){

        // load views
        require APP . 'view/_templates/head.php';
        require APP . 'view/client/acceuil.php';
    }
    
    /**
     * PAGE: gestion capteurs
     * This method handles what happens when you move to http://mvc/controlleurname/function_name 
     */
    public function connexion() {

        // load models
        // Utilisateur
        $this->loadModel('Utilisateur');

        // load views
        require APP.'view/connexion.php';

        if (isset($_POST['signIn'])) {
            if (isset($_POST['login'], $_POST['password']) && verify_user($_POST['login'], $_POST['password']) == true)
                echo "le contenu de la page annonces s'affiche";
            else 
                echo "Identifiant ou mot de passe incorrect";
            
        }
    }

    public function inscription()
    {
        // load models
        // Utilisateur
        $this->loadModel('Utilisateur');

        // load views
        require APP.'view/inscription.php';

        if (isset($_POST['nom_utilisateur'], $_POST['mdp'])) {
            $new_user = new utilisateur();
            $new_user->add_new_user($_POST['nom_utilisateur'], $_POST['mdp']);

        }
    }

    public function annonce()
    {
        //load models
        //annonce
        $this->loadModel('Annonce');

        //categorie
        $this->loadModel('Categorie');
        $categories = Categorie::find_all();

        //load view
        require APP.'view/annonces.php';
    }
}

