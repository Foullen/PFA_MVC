<div class="aUserMang_right" style="background-color: #f1f1f1;">
    <form action="#" method="get" name="FormPerInfo" class="">
        <div class="inputField adminUserMang__inputs">
            <label for="Ptitle" class="name-field-label">Product Name</label>
            <input type="text" name="Ptitle" id="Ptitle" class="email_field field-input" placeholder="e.g Shirt">
        </div>
        <div class="inputField adminUserMang__inputs">
            <input type="file" name="imgFile" id="imgFile" class="email_field field-input">
        </div>
        <div class="Bdate_Field">
            <label for="Mdate" class="">Manu. Date</label>
            <input type="date" name="Mdate" id="Mdate" class="BDate field-input">
        </div>
        <div class="Bdate_Field">
            <label for="Edate" class="">Exp. Date</label>
            <input type="date" name="Edate" id="Edate" class="BDate field-input">
        </div>
        <div class="inputField adminUserMang__inputs">
            <label for="price" class="name-field-label">Price</label>
            <input type="number" name="price" id="price" class="zipcode field-input" placeholder="e.g 99 without devise symbole">
        </div>
        <div class="inputField adminUserMang__inputs">
            <label for="provider" class="name-field-label">Provider</label>
            <input type="text" name="provider" id="provider" class="email_field field-input" placeholder="e.g Shirt">
        </div>
        <div class="region_Field adminUserMang__inputs">
            <select class="region_Field" name="region" id="region_Field">
                <option>---Choose Product Theme---</option>
                <option>Food</option>
                <option>Poverty</option>
                <option>Charity</option>
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