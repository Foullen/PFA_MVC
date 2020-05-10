<div class="aUserMang_right">

    <table class="w3-table w3-bordered table_users" id="Users">
        <thead>
            <tr>
                <th></th>
                <th>IdCommand</th>
                <th>IdUser</th>
                <th>CommandDate</th>
                <th>LivredDate</th>
                <th>Status</th>
                <th>State</th>
                <th>PayMethode</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>147</td>
                <td>25</td>
                <td>26/05/2020</td>
                <td>26/08/2020</td>
                <td>In Progress</td>
                <td>Facture</td>
                <td>Cash</td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td>IdCommand</td>
                <td>IdUser</td>
                <td>CommandDate</td>
                <td>LivredDate</td>
                <td>Status</td>
                <td>State</td>
                <td>PayMethode</td>
            </tr>
        </tfoot>

    </table>
</div>

<!--JavaScript files 😄-->
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
</script>

<script>
    /* Formatting function for row details - modify as you need */
    function format(d) {
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
            '<tr>' +
            '<td>idCommand:</td>' +
            '<td>' + d.idCommand + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Command Date:</td>' +
            '<td>' + d.CommandDate + '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>Extra info:</td>' +
            '<td>And any further details here (images etc)...</td>' +
            '</tr>' +
            '</table>';
    }
    $(document).ready(function() {
        var table = $('#Users').DataTable({
            scrollY: '50vh',
            scrollCollapse: true,
            paging: false,
            columns: [{
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": '',
                    "render": function() {
                        return '<i class="fa fa-plus-square" aria-hidden="true"></i>';
                    },
                    width: "15px",
                },
                {
                    data: "idCommand"
                },
                {
                    data: "idUser"
                },
                {
                    data: "CommandDate"
                },
                {
                    data: "LivredDate"
                },
                {
                    data: "Status"
                },
                {
                    data: "state"
                },
                {
                    data: "payMethode"
                }
            ],
            order: [
                [1, 'asc']
            ]
        });
        // Add event listener for opening and closing details
        $('#Users tbody').on('click', 'td.details-control', function() {
            var tr = $(this).closest('tr');
            var tdi = tr.find("i.fa");
            var row = table.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
                tdi.first().removeClass('fa-minus-square');
                tdi.first().addClass('fa-plus-square');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown');
                tdi.first().removeClass('fa-plus-square');
                tdi.first().addClass('fa-minus-square');
            }
        });

        table.on("user-select", function(e, dt, type, cell, originalEvent) {
            if ($(cell.node()).hasClass("details-control")) {
                e.preventDefault();
            }
        });
    });
</script>