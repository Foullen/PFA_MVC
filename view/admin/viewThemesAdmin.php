<div class="aUserMang_right">
    <a href="#" class="w3-text-lime"><i class="fa fa-plus-square" aria-hidden="true"></i> ADD THEME</a>
    <table class="w3-table w3-bordered table_users" id="Users">
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Title</th>
                <th>Quantities sells</th>
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
                <td>Food For evry one</td>
                <td>60</td>

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
            scrollY: '50vh',
            scrollCollapse: true,
            paging: false,
            order: [
                [1, 'asc']
            ],
            columns: [{
                    "width": "4em"
                },
                null,
                null,
                null
            ]
        });
    });
</script>