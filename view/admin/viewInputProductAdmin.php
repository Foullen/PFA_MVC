<div class="aUserMang_right" style="background-color: #f1f1f1;">
    <form action="<?= $actionForm ?>" method="post" name="FormPerInfo" class="" enctype="multipart/form-data">
        <div class="inputField adminUserMang__inputs">
            <label for="Ptitle" class="name-field-label">Product Name</label>
            <input type="text" name="Ptitle" id="Ptitle" class="nameProduct_field field-input" placeholder="e.g Shirt">
        </div>
        <div class="inputField adminUserMang__inputs">
            <input type="file" name="imgFile" id="imgFile" class="img_field field-input">
        </div>
        <div class="Manudate_Field">
            <label for="Mdate" class="">Manu. Date</label>
            <input type="date" name="Mdate" id="Mdate" class="BDate field-input">
        </div>
        <div class="Expdate_Field">
            <label for="Edate" class="">Exp. Date</label>
            <input type="date" name="Edate" id="Edate" class="BDate field-input">
        </div>
        <div class="inputField adminUserMang__inputs">
            <label for="price" class="name-field-label">Price</label>
            <input type="number" name="price" id="price" class="price field-input" placeholder="e.g 99 $">
        </div>
        <div class="inputField adminUserMang__inputs">
            <label for="stock" class="name-field-label">Stock</label>
            <input type="number" name="stock" id="stock" class="stock field-input" placeholder="e.g 35 pieces">
        </div>
        <div class="inputField adminUserMang__inputs">
            <label for="provider" class="name-field-label">Provider</label>
            <input type="text" name="provider" id="provider" class="provider-field field-input" placeholder="e.g assoctiation name/ organisation ...">
        </div>
        <div class="inputField adminUserMang__inputs">
            <label for="description" class="name-field-label">Description </label>
            <input type="text" name="description" id="description" class="desProduct_field field-input" placeholder="e.g some description of product">
        </div>
        <div class="region_Field adminUserMang__inputs">
            <select class="region_Field" name="theme" id="region_Field">
                <option>---Choose Product Theme---</option>
                <?php
                foreach ($tab_t as $t) {
                    if ($task == 'edit') {
                        if ($product->getIdTheme() == $t[0]) {
                            $selected = "selected";
                        } else {
                            $selected = "";
                        }
                    }

                    echo "<option {$selected} value=" . $t[0] . ">" . $t[1] . "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <input type="submit" value="<?= $btnSendValue ?>">
            <input type="reset" value="Cancel">
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js"></script>
<script>
    $('input').on('focusin', function() {
        $(this).parent().find('label').addClass('Iactive');
    });

    $('input').on('focusout', function() {
        if (!this.value) {
            $(this).parent().find('label').removeClass('Iactive');
        }
    });

    $('input').ready(function() {
        $(":input").map(function() {
            if ($(this).val()) {
                $(this).parent().find('label').addClass('Iactive');

            } else if ($(this).val()) {
                $(this).parent().find('label').removeClass('Iactive');

            }
        });
    }); //If input value is not empty on loading data from database for updating
</script>