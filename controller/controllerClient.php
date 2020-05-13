<?php
//$controller = "utilisateur";
require_once("{$ROOT}{$DS}model{$DS}ModelUser.php"); // chargement du modèle
require_once("{$ROOT}{$DS}model{$DS}ModelCity.php"); // chargement du modèle

if (isset($_REQUEST['action'])) {
    /* recupère l'action passée dans l'URL*/
    $action = $_REQUEST['action'];
}
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/ else {
    $action = "account";
}

switch ($action) {
    case "account": {
            $pagetitle = "Product | Fundly";
            $view = "account";
            $HTMLbodyId = "AccountPage";
            require("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;
    case "cart": {
            $pagetitle = 'Cart | Fundly';
            $view = "cart";
            $HTMLbodyId = "CartPage";
            require("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;
    case "command": {
            $pagetitle = 'Cart | Fundly';
            $view = "command";
            $HTMLbodyId = "CommandPage";
            require("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;
    case "edit": {
            if (isset($_REQUEST['id'])) {
                $id = $_REQUEST['id'];
                $pagetitle = 'Edit Profile | Fundly';
                $view = "edit";
                $HTMLbodyId = "updateaccountPage";
                require("{$ROOT}{$DS}view{$DS}view.php");
            }
        }
        break;
    case "join": {
            $pagetitle = 'Join | Fundly';
            $view = "join";
            $HTMLbodyId = "JoinPage";
            $tab_c = ModelCity::getAll(); //appel au modèle pour gerer la BD
            require("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;
    case "created":
        if (isset($_REQUEST['fname']) && isset($_REQUEST['lname']) && isset($_REQUEST['phone']) && isset($_REQUEST['gender']) && isset($_REQUEST['BDate']) && isset($_REQUEST['region']) && isset($_REQUEST['addresse']) && isset($_REQUEST['zip']) && isset($_REQUEST['email']) && isset($_REQUEST['pwd'])) {
            $idUser = NULL;
            $nom = $_REQUEST['lname'];
            $prenom = $_REQUEST['fname'];
            $phone = $_REQUEST['phone'];
            $birthDate = $_REQUEST['BDate'];
            $addresse = $_REQUEST['addresse'];
            $zip = $_REQUEST['zip'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['pwd'];
            $gender = $_REQUEST['gender'];
            $role = 2;
            $uStatus = 1;
            $idCity = $_REQUEST['region'];
            $inscritDate = date("Y-m-d");

            $recherche = ModelUser::fetch__email($email);

            if ($recherche == null) {
                $u = new ModelUser($idUser, $nom, $prenom, $phone, $birthDate, $addresse, $zip, $email, $password, $gender, $idCity, $role, $uStatus,  $inscritDate);
                $tab = array(
                    "idUser" => $idUser,
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "phone" => $phone,
                    "birthDate" => $birthDate,
                    "addresse" => $addresse,
                    "zip" => $zip,
                    "email" => $email,
                    "password" => $password,
                    "gender" => $gender,
                    "idCity" => $idCity,
                    "role" => $role,
                    "uStatus" => $uStatus,
                    "inscritDate" => $inscritDate,
                );
                $u->insert($tab);
                // $pagetitle = 'Account Creation';
                // $view = "created";
                // $HTMLbodyId = "";
                // require("{$ROOT}{$DS}view{$DS}view.php");
                $msg = "Inscription avec success";
                $pagetitle = 'Account Creation';
                $view = "created";
                $HTMLbodyId = "accountCreation";
                require("{$ROOT}{$DS}view{$DS}view.php");
            } else {
                $msg = "Email existe deja";
                $pagetitle = 'Account Failed to Create';
                $view = "failToCreate";
                $HTMLbodyId = "accountCreation";
                require("{$ROOT}{$DS}view{$DS}view.php");
            }
        }
        break;
    case "login": {

            $pagetitle = 'Login | Fundly';
            $view = "login";
            $HTMLbodyId = "LoginPage";
            require("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;
    case "check": {
            // Recuperer de XMLHttpRequest de la viewJoinClient
            // pour vérifier l'existance d'un email dans ma base
            $q = $_GET["q"];
            $recherche = ModelUser::fetch__email($q);
            if ($recherche != NULL) {
                echo $recherche->email;
            }
        }
        break;
    case "afterlogin": {
            // Recuperation des paramètres après le login
            if ($_REQUEST["email"] and  $_REQUEST["pwd"]) {

                $email = $_REQUEST["email"];
                $pwd = $_REQUEST["pwd"];

                $recherche = ModelUser::login($email, $pwd);

                if ($recherche == null) {
                    $msg = "login avec success";
                    $pagetitle = 'Account Creation';
                    $view = "created";
                    $HTMLbodyId = "accountCreation";
                    require("{$ROOT}{$DS}view{$DS}view.php");
                } else {
                    $msg = "Email existe deja";
                    $pagetitle = 'Account Failed to Create';
                    $view = "failToCreate";
                    $HTMLbodyId = "accountCreation";
                    require("{$ROOT}{$DS}view{$DS}view.php");
                }
            }
        }
        break;
}
