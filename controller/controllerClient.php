<?php
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
            require("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;
    case "login": {
            $pagetitle = 'Login | Fundly';
            $view = "login";
            $HTMLbodyId = "LoginPage";
            require("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;
}
