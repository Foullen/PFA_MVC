<section id="section1">

    <div class="InfoCollapse">
        <button type="button" class="collapsible">Do you want to change your PERSONAL INFORMATION</button>
        <div class="content">
            <form action="#" method="get" name="FormPerInfo" class="">
                <div class="FormPerInfo">
                    <div class="inputField">
                        <label for="firstname" class="name-field-label">First Name</label>
                        <input type="text" name="fname" id="firstname" class="firstname field-input" placeholder="e.g Flen">
                    </div>
                    <span style="width: 10px;"></span>
                    <div class="inputField">
                        <label for="lastname" class="name-field-label">Last Name</label>
                        <input type="text" name="lname" id="lastname" class="lastname field-input" placeholder="e.g Smith">
                    </div>
                </div>
                <div class="Bdate_Field">
                    <input type="date" name="BDate" id="BDate" class="BDate field-input">
                </div>
                <div class="gender">
                    <input type="radio" name="gender" value="M" id="Gmale" />
                    <label for="Gmale">Male</label>
                    <input type="radio" name="gender" value="F" id="Gfemale" />
                    <label for="Gfemale">Female</label>
                </div>
            </form>
        </div>
    </div>

    <div class="InfoCollapse">
        <button type="button" class="collapsible">Do you want to change your PRIVATE INFORMATION</button>
        <div class="content">
            <form action="#" method="get" name="FormPerInfo" class="">
                <div class="inputField">
                    <label for="email" class="name-field-label">Email</label>
                    <input type="email" name="email" id="email" class="email_field field-input" placeholder="e.g flen@topnet.tn">
                </div>
                <div class="FormPriInfo">
                    <div class="inputField">
                        <label for="pwd" class="name-field-label">Password</label>
                        <input type="password" name="pwd" id="pwd" class="pwd field-input" placeholder="e.g ●●●●●●●●●">
                    </div>
                    <span style="width: 10px;"></span>
                    <div class="inputField">
                        <label for="repwd" class="name-field-label">Repeat Password</label>
                        <input type="password" name="repwd" id="repwd" class="repwd field-input" placeholder="e.g ●●●●●●●●●">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="InfoCollapse">
        <button type="button" class="collapsible">Do you want to change your ADDRESS</button>
        <div class="content">
            <form action="#" method="get" name="FormPerInfo" class="">
                <div class="region_Field">
                    <select class="region_Field" name="region" id="region_Field">
                        <option>---Choose your city---</option>
                        <option>Tunis</option>
                        <option>Manouba</option>
                        <option>Ben Arous</option>
                    </select>
                </div>
                <div class="FormPerAddress">
                    <div class="inputField">
                        <label for="address" class="name-field-label">Address</label>
                        <input type="text" name="addr" id="address" class="address field-input" placeholder="e.g XX Rue de ZZZZ">
                    </div>
                    <span style="width: 10px;"></span>
                    <div class="inputField">
                        <label for="zipcode" class="name-field-label">ZIP</label>
                        <input type="number" name="zip" id="zipcode" class="zipcode field-input" placeholder="e.g 111">
                    </div>
                </div>
                <div class="inputField">
                    <label for="phone" class="name-field-label">Phone</label>
                    <input type="number" name="phone" id="phone" class="phone_field field-input" placeholder="e.g 99 999 999">
                </div>
            </form>
        </div>
    </div>
    <div class="InfoCollapse">
        <a href="#" class="collapse_link desactive_link">Deactivate your account</a>
    </div>
    <div class="InfoCollapse">
        <a href="#" class="collapse_link delete_link">Delete your account</a>
    </div>


</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js"></script>

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }

    $('input').on('focusin', function() {
        $(this).parent().find('label').addClass('Iactive');
    });

    $('input').on('focusout', function() {
        if (!this.value) {
            $(this).parent().find('label').removeClass('Iactive');
        }
    });
</script>