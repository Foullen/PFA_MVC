<div class="aUserMang_right" style="background-color: #f1f1f1;">
    <form action="<?= $actionForm ?>" method="get" name="FormPerInfo" class="">
        <div class="FormPerInfo">
            <div class="inputField adminUserMang__inputs">
                <label for="firstname" class="name-field-label">First Name</label>
                <input type="text" name="fname" id="firstname" class="firstname field-input" placeholder="e.g Flen">
            </div>
            <span style="width: 10px;"></span>
            <div class="inputField adminUserMang__inputs">
                <label for="lastname" class="name-field-label">Last Name</label>
                <input type="text" name="lname" id="lastname" class="lastname field-input" placeholder="e.g Smith">
            </div>
        </div>
        <div class="Bdate_Field adminUserMang__inputs">
            <input type="date" name="BDate" id="BDate" class="BDate field-input">
        </div>
        <div class="gender adminUserMang__inputs">
            <input type="radio" name="gender" value="M" id="Gmale" />
            <label for="Gmale">Male</label>
            <input type="radio" name="gender" value="F" id="Gfemale" class="adminUserMang__inputs" />
            <label for="Gfemale">Female</label>
        </div>
        <div class="inputField adminUserMang__inputs">
            <label for="email" class="name-field-label">Email</label>
            <input type="email" name="email" id="email" class="email_field field-input" placeholder="e.g flen@topnet.tn">
        </div>
        <div class="FormPriInfo">
            <div class="inputField adminUserMang__inputs">
                <label for="pwd" class="name-field-label">Password</label>
                <input type="password" name="pwd" id="pwd" class="pwd field-input" placeholder="e.g ●●●●●●●●●">
            </div>
            <span style="width: 10px;"></span>
            <div class="inputField adminUserMang__inputs">
                <label for="repwd" class="name-field-label">Repeat Password</label>
                <input type="password" name="repwd" id="repwd" class="repwd field-input" placeholder="e.g ●●●●●●●●●">
            </div>
        </div>
        <div class="region_Field adminUserMang__inputs">
            <select class="region_Field" name="region" id="">
                <option value="1">---Choose User city---</option>
                <option value="2">Tunis</option>
                <option value="3">Manouba</option>
                <option value="4">Ben Arous</option>
            </select>
        </div>
        <div class="FormPerAddress">
            <div class="inputField adminUserMang__inputs">
                <label for="address" class="name-field-label">Address</label>
                <input type="text" name="addr" id="address" class="address field-input" placeholder="e.g XX Rue de ZZZZ">
            </div>
            <span style="width: 10px;"></span>
            <div class="inputField adminUserMang__inputs">
                <label for="zipcode" class="name-field-label">ZIP</label>
                <input type="number" name="zip" id="zipcode" class="zipcode field-input" placeholder="e.g 111">
            </div>
        </div>
        <div class="inputField adminUserMang__inputs">
            <label for="phone" class="name-field-label">Phone</label>
            <input type="number" name="phone" id="phone" class="phone_field field-input" placeholder="e.g 99 999 999">
        </div>
        <div class="region_Field adminUserMang__inputs">
            <select class="region_Field" name="Status" id="">
                <option>---Choose Status---</option>
                <option value="1">Active</option>
                <option value="2">Desactive</option>
            </select>
        </div>
        <div class="region_Field adminUserMang__inputs">
            <select class="region_Field" name="Status" id="">
                <option>---Choose Role---</option>
                <option value="1">Admin</option>
                <option value="2">Client</option>
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
</script>