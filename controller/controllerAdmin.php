<?php
if (isset($_REQUEST['action'])) {
    /* recupère l'action passée dans l'URL*/
    $action = $_REQUEST['action'];
}
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/ else {
    $action = "dashboard";
}

switch ($action) {
    case "dashboard": {
            $pagetitle = "ADMIN Dashboard | Fundly";
            $view = "dashboard";
            $HTMLbodyId = "admin__dash";
            require("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;
    case "users": {
            // require("{$ROOT}{$DS}controller{$DS}controllerMangUsers.php");
            if (isset($_REQUEST['task'])) {
                /* recupère l'task passée dans l'URL*/
                $task = $_REQUEST['task'];
            }
            /* NB: On a ajouté un comportement par défaut avec task=readAll.*/ else {
                $task = "all";
            }

            switch ($task) {
                case "all": {
                        $pagetitle = "ADMIN USERs Managment | Fundly";
                        $view = "AllUsers";
                        $HTMLbodyId = "aUserManagment";
                        require("{$ROOT}{$DS}view{$DS}view.php");
                    }
                    break;

                case "detail": {
                        if (isset($_REQUEST['id'])) {
                            $id = $_REQUEST['id'];
                            $pagetitle = "ADMIN USER id details | Fundly";
                            $view = "detailUser";
                            $HTMLbodyId = "aUserManagment";
                            require("{$ROOT}{$DS}view{$DS}view.php");
                        }
                    }
                    break;
                case "edit":
                case "add": {
                        $view = "inputUser";
                        $HTMLbodyId = "aUserManagment";
                        if ($task == "edit") {
                            if (isset($_REQUEST['id'])) {
                                $id = $_REQUEST['id'];
                                $pagetitle = "ADMIN USER EDIT| Fundly";
                                $btnSendValue = "Edit";
                                $actionForm = "www.google.com";
                                require("{$ROOT}{$DS}view{$DS}view.php");
                            }
                        } else {
                            $pagetitle = "ADMIN USER ADD | Fundly";
                            $btnSendValue = "Add";
                            $actionForm = "www.facebook.com";
                            require("{$ROOT}{$DS}view{$DS}view.php");
                        }
                    }
                    break;
            }
        }
        break;
    case "products": {
            // require("{$ROOT}{$DS}controller{$DS}controllerMangUsers.php");
            if (isset($_REQUEST['task'])) {
                /* recupère l'task passée dans l'URL*/
                $task = $_REQUEST['task'];
            }
            /* NB: On a ajouté un comportement par défaut avec task=readAll.*/ else {
                $task = "all";
            }

            switch ($task) {
                case "all": {
                        $pagetitle = "ADMIN PRODUCTs Managment | Fundly";
                        $view = "AllProducts";
                        $HTMLbodyId = "aUserManagment";
                        require("{$ROOT}{$DS}view{$DS}view.php");
                    }
                    break;

                case "detail": {
                        if (isset($_REQUEST['id'])) {
                            $id = $_REQUEST['id'];
                            $pagetitle = "ADMIN PRODUCT id details | Fundly";
                            $view = "detailProduct";
                            $HTMLbodyId = "aUserManagment";
                            require("{$ROOT}{$DS}view{$DS}view.php");
                        }
                    }
                    break;
                case "edit":
                case "add": {
                        $view = "inputProduct";
                        $HTMLbodyId = "aUserManagment";
                        if ($task == "edit") {
                            if (isset($_REQUEST['id'])) {
                                $id = $_REQUEST['id'];
                                $pagetitle = "ADMIN PRODUCT EDIT| Fundly";
                                $btnSendValue = "Edit";
                                $actionForm = "www.google.com";
                                require("{$ROOT}{$DS}view{$DS}view.php");
                            }
                        } else {
                            $pagetitle = "ADMIN PRODUCT ADD | Fundly";
                            $btnSendValue = "Add";
                            $actionForm = "www.facebook.com";
                            require("{$ROOT}{$DS}view{$DS}view.php");
                        }
                    }
                    break;
            }
        }
        break;
    case "commands": {
            $pagetitle = "ADMIN COMMANDS Managment | Fundly";
            $view = "commands";
            $HTMLbodyId = "aUserManagment";
            require("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;
    case "themes": {
            $pagetitle = "ADMIN Themes Managment | Fundly";
            $view = "themes";
            $HTMLbodyId = "aUserManagment";
            require("{$ROOT}{$DS}view{$DS}view.php");
        }
        break;
}
