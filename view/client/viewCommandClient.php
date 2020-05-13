<section class="command_wrap">
    <h2 class="command_header_title">My Commands</h2>

    <table class="w3-table w3-bordered table_commands" id="commands">
        <thead>
            <tr>
                <th>Img</th>
                <th>Title</th>
                <th>Price</th>
                <th>Quantity</th>
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
                <td>2</td>
                <td>20/02/2020</td>
                <td>-</td>
                <td class="w3-text-amber"><i class="fa fa-info-circle" aria-hidden="true"></i> In Progress</td>
            </tr>
            <tr>
                <td><img src="assets/Images/product/Product_Tshirt_1.png" alt="contain image product" class="command_item_img" width="40px"> </td>
                <td>T-Shirt 1</td>
                <td>49.9 D.T</td>
                <td>1</td>
                <td>20/02/2020</td>
                <td>21/02/2020</td>
                <td class="w3-text-green"><i class="fa fa-check-circle" aria-hidden="true"></i> Livred</td>
            </tr>
            <tr>
                <td><img src="assets/Images/product/Product_Tshirt_1.png" alt="contain image product" class="command_item_img" width="40px"> </td>
                <td>T-Shirt 1</td>
                <td>149.9 D.T</td>
                <td>3</td>
                <td>20/02/2020</td>
                <td>-</td>
                <td class="w3-text-red"><i class="fa fa-times-circle" aria-hidden="true"></i> Canceled</td>
            </tr>

        </tbody>

    </table>

</section>


<!--JavaScript files 😄-->
<script src="JS/observers.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
</script>

<script>
    $(document).ready(function() {
        $('#commands').DataTable();
    });
</script>