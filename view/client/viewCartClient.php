<?php
session_start();
// $_SESSION['panier'] = array();
?>
<div class="cart_wrap">
    <div class="cart_info">
        <div class="cart_header_wrap">
            <h2 class="cart_title">My Cart</h2>
            <?php
            // print_r($_SESSION['panier']);
            $total = 0;
            foreach ($cartList as $item) {
                $total += $item->getPrice() * array_count_values($_SESSION['panier'])[$item->getIdProduct()];
            }

            ?>
            <div class="cart_total">Total:<span class="total_value"><?= $total ?> DT</span></div>
        </div>
        <?php
        if ($total > 0) {
            echo '<a href="#" class="buyAll_cart">Buy all</a>';
        }
        ?>

    </div>
    <div class="commands_list">

        <?php
        // session_start();
        // print_r(array_count_values($_SESSION['panier']));
        // echo "<br>";
        // print_r($cartList);
        foreach ($cartList as $item) {
            echo "
                <article class=\"cart_item\">
                <img src=\"{$item->getImgSRC()}\" alt=\"\" class=\"cart_item_img\">
                <div class=\"cart_item_info\">
                    <div class=\"cart_item_details\">
                        <h5 class=\"cart_item_title\">{$item->getTitle()}</h5>
                        <h4 class=\"cart_item_price\">{$item->getPrice()}DT</h4>
                    </div>
                    <h6 class=\"cart_item_descrip\" >" . $item->getDescription() . "</h6>
                    <div class=\"cart_item_footer\">
                    <h5 class='cart_item_qte'> Qte:" . array_count_values($_SESSION['panier'])[$item->getIdProduct()] . " </h5>
                       
                        <a href=\"?index.php&controller=client&action=removecartitem&idproduct={$item->getIdProduct()}\" class=\"cart_delete_item_link\"><i class=\"fas fa-trash\"></i></a>
                    </div>
                </div>
            </article>
                ";
        }
        // foreach (array_count_values($_SESSION['panier']) as $idProduct => $qte) {
        //     $p = ModelProduct::select($idProduct);
        // }

        ?>
    </div>
    <?php
    if ($total == 0) {
        echo '<p style="text-align:center;">No Item in the cart</p>';
    }
    ?>
</div>