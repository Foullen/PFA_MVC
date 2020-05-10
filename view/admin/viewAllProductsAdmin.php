<div class="aUserMang_right">
    <!-- <button id="btnAdd"><i class="fa fa-plus-circle" aria-hidden="true"></i>
        </button> -->
    <a href="#" class="w3-text-lime"><i class="fa fa-plus-square" aria-hidden="true"></i> ADD PRODUCT</a>
    <table class="w3-table w3-bordered table_users" id="Users">
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Image</th>
                <th>Title</th>
                <th>Price</th>
                <th>Provider</th>
                <th>Manu. Date</th>
                <th>Exp. Date</th>
                <th class="w3-center">Theme</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="user__action">
                        <a href="#" class="w3-text-green"><i class="fa fa-list" aria-hidden="true"></i></a>
                        <a href="#" class="w3-text-amber"><i class="fas fa-edit "></i></a>
                        <a href="#" class="w3-text-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </td>
                <td>1</td>
                <td><img src="assets/Images/product/Product_Tshirt_2.png" alt="contain image product" class="command_item_img" width="40px"> </td>
                <td>T-Shirt 2</td>
                <td>99.9 DT</td>
                <td>Food For Every One</td>
                <td>31/12/2019</td>
                <td>31/12/2020</td>
                <td>FOOD</td>
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
                <td><img src="assets/Images/product/Product_Tshirt_2.png" alt="contain image product" class="command_item_img" width="40px"> </td>
                <td>T-Shirt 2</td>
                <td>99.9 DT</td>
                <td>Food For Every One</td>
                <td>31/12/2019</td>
                <td>31/12/2020</td>
                <td>FOOD</td>
            </tr>
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