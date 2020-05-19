<div class="aUserMang_right">
    <!-- <button id="btnAdd"><i class="fa fa-plus-circle" aria-hidden="true"></i>
</button> -->
    <a href="?index.php&controller=admin&action=users&task=add" class="w3-text-lime"><i class="fa fa-plus-square" aria-hidden="true"></i> ADD new USER</a>
    <table class="w3-table w3-bordered table_users" id="Users">
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Gender</th>
                <th>BirthDate</th>
                <th>Role</th>
                <th class="w3-center">Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td>
                    <div class="user__action">
                        <a href="?index.php&controller=admin&action=users&task=detail&id=1" class="w3-text-green"><i class="fa fa-list" aria-hidden="true"></i></a>
                        <a href="?index.php&controller=admin&action=users&task=edit&id=1" class="w3-text-amber"><i class="fas fa-edit "></i></a>
                        <a href="#" class="w3-text-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </td>
                <td>1</td>
                <td>Foullen Foulleni</td>
                <td>Foullen@gmail.com</td>
                <td>22 050 987</td>
                <td>Manouba</td>
                <td>Male</td>
                <td>26/05/1999</td>
                <td>user</td>
                <td class="w3-text-green w3-center">
                    <a href="#">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="user__action">
                        <a href="#" class="w3-text-green"><i class="fa fa-list" aria-hidden="true"></i></a>
                        <a href="#" class="w3-text-amber"><i class="fas fa-edit "></i></a>
                        <a href="#" class="w3-text-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </td>
                <td>1</td>
                <td>Flen Foulleni</td>
                <td>FLen007@live.com</td>
                <td>99 050 987</td>
                <td>Tunis</td>
                <td>Male</td>
                <td>05/05/2000</td>
                <td>user</td>
                <td class="w3-text-red w3-center">
                    <a href="#">
                        <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                    </a>
                </td>
            </tr> -->

            <?php
            foreach ($tab_u as $key => $u) {

                if ($u->getUStatus() == 1) {
                    $Statusthumb = "<i class=\"fa fa-thumbs-up w3-text-green\" aria-hidden=\"true\"></i>";
                } else {
                    $Statusthumb = "<i class=\"fa fa-thumbs-down w3-text-red\" aria-hidden=\"true\"></i>";
                }

                if ($u->Role == 1) {
                    $RoleTxt = "Admin";
                } else {
                    $RoleTxt = "Client";
                }

                echo "
                <tr>
                <td>
                    <div class=\"user__action\">
                        <a href=\"?index.php&controller=admin&action=users&task=detail&id={$u->getIdUser()}\" class=\"w3-text-green\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i></a>
                        <a href=\"?index.php&controller=admin&action=users&task=edit&id={$u->getIdUser()}\" class=\"w3-text-amber\"><i class=\"fas fa-edit \"></i></a>
                        <a href=\"?index.php&controller=admin&action=users&task=delete&id={$u->getIdUser()}\" class=\"w3-text-red\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                    </div>
                </td>
                <td>" . $u->getIdUser() . "</td>
                <td>" . $u->Prenom . " " . $u->Nom . "</td>
                <td>" . $u->Email . "</td>
                <td>" . $u->Phone . "</td>
                <td>" . $u->getIdCity() . "</td>
                <td>" . $u->Gender . "</td>
                <td>" . $u->BirthDate . "</td>
                <td>" . $RoleTxt . "</td>
                <td class=\"w3-text-red w3-center\">
                    <a href=\"#\">
                        " . $Statusthumb . "
                    </a>
                </td>
            </tr>
                    ";
            }
            ?>

        </tbody>

    </table>
</div>

<!--JavaScript files 😄-->
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
</script>

<script>
    $(document).ready(function() {
        $('#Users').DataTable({
            order: [
                [1, 'asc']
            ],
        });
    });
</script>