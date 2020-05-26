<?php



require_once("{$ROOT}{$DS}model{$DS}ModelProduct.php"); // chargement du modèle Product
require_once("{$ROOT}{$DS}model{$DS}ModelCommand.php"); // chargement du modèle Command
require_once("{$ROOT}{$DS}model{$DS}ModelDetailCommand.php"); // chargement du modèle DetailCommand


if (isset($_REQUEST['action'])) {
    /* recupère l'action passée dans l'URL*/
    $action = $_REQUEST['action'];
}
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/ else {
    $action = "readAll";
}

switch (strtolower($action)) {
    case "add": {
            if ($_REQUEST['paymentMethode'] and count($_SESSION['painier'] > 0) and isset($_REQUEST['paymentMethode']) and isset($_SESSION['userId'])) {
                $pagetitle =  ' | Fundly';
                $view = "add";

                $cartList = array();
                foreach (array_count_values($_SESSION['panier']) as $idProduct => $qte) {
                    $p = ModelProduct::select($idProduct);
                    array_push($cartList, $p);
                }

                $commandDate = date("Y-m-d");
                $livredDate = NULL;
                $idUser = $_SESSION['userId'];
                $status = 1; //1: for In Progress (default value)
                $state = 1; //1: for command (default value) / 2: BILL
                $payMethode = $_REQUEST['paymentMethode'];

                $productObject = new ModelCommand(NULL, $idUser, $commandDate, NULL, $status, $state, $payMethode);

                $tab_c = array(
                    'idCommand' => NULL,
                    'idUser' => $idUser,
                    'CommandDate' => $commandDate,
                    'LiveredDate' => $livredDate,
                    'Status' => $status,
                    'State' => $state,
                    'payMethode' => $payMethode
                );
                echo "<br>";
                print_r($productObject);
                echo "<br>";
                $lastIdCommand = $productObject->insertAndGetLastId($tab_c);

                foreach (array_count_values($_SESSION['panier']) as $productKey => $qte) {
                    $product = ModelProduct::select($productKey);
                    if ($product->getStock() - $qte < 0) {
                        $quntity = $qte +  ($product->getStock() -  $qte);
                        $detailCommandObject = new ModelDetailCommand(NULL, $productKey, $quntity); //, NULL);
                        $tab_dc = array(
                            'idCommand' => $lastIdCommand,
                            'idProduct' => $productKey,
                            'Quantity' => $quntity,
                            //'Remise' => NULL,
                        );
                        $detailCommandObject->insert($tab_dc);
                        echo "<br>";
                        print_r($detailCommandObject);
                    } else {
                        // echo "inajem yechri";
                        $detailCommandObject = new ModelDetailCommand(NULL, $productKey, $qte); //, NULL);
                        $tab_dc = array(
                            'idCommand' => $lastIdCommand,
                            'idProduct' => $productKey,
                            'Quantity' => $qte,
                            // 'Remise' => NULL,
                        );
                        $detailCommandObject->insert($tab_dc);

                        echo "<br>";
                        print_r($detailCommandObject);
                        $_SESSION['panier'] = array();
                    }
                }
                $HTMLbodyId = "";
                // require("{$ROOT}{$DS}view{$DS}view.php");
                header('Location: ?index.php&controller=client&action=command');
            } else {
                header('Location: ?index.php&controller=client&action=login');
            }
        }
        break;
    case "readall": {
            $pagetitle = "commands | Fundly";
            $view = "readAll";
            $HTMLbodyId = "";
            // header('Location: ?controller=product');
            // require("{$ROOT}{$DS}view{$DS}view.php");
            break;
        }

    case "update": {
            if (!isset($_SESSION['userId']) or $_SESSION['userId'] == 2) {
                header('Location: ?index.php&controller=product');
            }
            if (isset($_REQUEST['status']) && isset($_REQUEST['idcommand'])) {
                $pagetitle =  ' | Fundly';
                $view = "update";
                $HTMLbodyId = "";
                // require("{$ROOT}{$DS}view{$DS}view.php");
                $oldId = $_REQUEST['idcommand'];
                $command = ModelCommand::select($oldId);
                if ($_REQUEST['status'] == 2) {
                    $state = 2;
                } else {
                    $state = 1;
                }
                $tab_c = array(
                    'idCommand' => $oldId,
                    'idUser' => $command->getIdUSer(),
                    'CommandDate' => $command->getCommandDate(),
                    'LiveredDate' => date("Y-m-d"),
                    'Status' => $_REQUEST['status'],
                    'State' => $state,
                    'payMethode' => $command->getPayMethode()
                );
                // echo "<pre>";
                // print_r($tab_c);
                // echo "</pre>";
                if ($command != NULL) {
                    $com = $command->update($tab_c, $oldId);
                }
                header('Location: ?index.php&controller=admin&action=commands');
            }
        }
        break;
}
