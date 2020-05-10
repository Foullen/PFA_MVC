<?php
if (isset($_REQUEST['action'])) {
    /* recupère l'action passée dans l'URL*/
    $action = $_REQUEST['action'];
}
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/ else {
    $action = "readAll";
}

switch ($action) {
    case "readAll": {
            $pagetitle = "Product | Fundly";
            $view = "readAll";
            $HTMLbodyId = "ProductsPage";
            require("{$ROOT}{$DS}view{$DS}view.php");
            break;
        }

    case "read":
        if (isset($_REQUEST['id']) and $_REQUEST['id'] != NULL) {
            $id = $_REQUEST['id'];
            $u = "a";
            if ($u != null) {
                $pagetitle =  $id . ' | Fundly';
                $view = "read";
                $HTMLbodyId = "ProductItemPage";
                require("{$ROOT}{$DS}view{$DS}view.php");
            }
            break;
        } else {
            // Redirect to 404 page
            header('Location:www.google.com');
        }
}
