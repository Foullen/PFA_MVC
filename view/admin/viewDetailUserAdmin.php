<div class="aUserMang_right adUserDet">
    <main>
        <section class="adUserDetailsBox">
            <div>
                <h4 class="AdAccountInfotitle">First Name: <span class="accountInfoData">Foullen</span></h4>
                <h4 class="AdAccountInfotitle">Last Name: <span class="accountInfoData">Foulleni</span></h4>
                <h4 class="AdAccountInfotitle">Email: <span class="accountInfoData">Foullen@gmail.com</span></h4>
                <h4 class="AdAccountInfotitle">Phone: <span class="accountInfoData">22 050 987</span></h4>
                <h4 class="AdAccountInfotitle">Birth Date: <span class="accountInfoData">26/05/1999</span></h4>
                <h4 class="AdAccountInfotitle">Gender: <span class="accountInfoData">Male</span></h4>
            </div>
            <div>
                <h4 class="AdAccountInfotitle">Address: <span class="accountInfoData">70 rue de Turkey</span></h4>
                <h4 class="AdAccountInfotitle">ZIP: <span class="accountInfoData">2040</span></h4>
                <h4 class="AdAccountInfotitle">City: <span class="accountInfoData">Manouba</span></h4>
                <h4 class="AdAccountInfotitle">Status:
                    <span class="accountInfoData w3-text-green"> Active</span>
                </h4>
                <h4 class="AdAccountInfotitle">Role: <span class="accountInfoData">Male</span></h4>
            </div>
        </section>

        <section class="Ucommand_wrap">
            <h2 class="Ucommand_header_title">Commands</h2>

            <table class="w3-table w3-bordered w3-tiny table_commands " id="commands">
                <thead>
                    <tr>
                        <th>Img</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Command Date</th>
                        <th>Livered Date</th>
                        <th>State</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="assets/Images/product/Product_Tshirt_2.png" alt="contain image product" class="command_item_img" width="40px"> </td>
                        <td>T-Shirt 2</td>
                        <td>99.9 D.T</td>
                        <td>20/02/2020</td>
                        <td>-</td>
                        <td class="w3-text-amber"><i class="fa fa-info-circle" aria-hidden="true"></i> In Progress
                        </td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/product/Product_Tshirt_1.png" alt="contain image product" class="command_item_img" width="40px"> </td>
                        <td>T-Shirt 1</td>
                        <td>99.9 D.T</td>
                        <td>20/02/2020</td>
                        <td>21/02/2020</td>
                        <td class="w3-text-green"><i class="fa fa-check-circle" aria-hidden="true"></i> Livred</td>
                    </tr>
                    <tr>
                        <td><img src="assets/Images/product/Product_Tshirt_1.png" alt="contain image product" class="command_item_img" width="40px"> </td>
                        <td>T-Shirt 1</td>
                        <td>99.9 D.T</td>
                        <td>20/02/2020</td>
                        <td>-</td>
                        <td class="w3-text-red"><i class="fa fa-times-circle" aria-hidden="true"></i> Canceled</td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Img</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Command Date</th>
                        <th>Livered Date</th>
                        <th>State</th>
                    </tr>
                </tfoot>

            </table>

        </section>
    </main>

</div>

<!--JavaScript files 😄-->
<script src="../JS/observers.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
</script>

<script>
    $(document).ready(function() {
        $('#commands').DataTable({
            scrollY: '25vh',
            scrollCollapse: true,
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)"
            }
        });
    });
</script>