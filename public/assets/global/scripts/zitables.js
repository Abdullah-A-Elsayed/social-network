var ZiTables = function () {
    var p = function (table, array) {
        var t = table.DataTable();
        t.clear();
        array.forEach(function (currentValue, index, array) {
            var row = [];
            $("th", table).each(function () {
                var field = $(this).data("field");
                row.push(currentValue[field]);
            });
            t.row.add(row);
        });
        t.draw();
    };
    var o = function () {
        $(".zitable").each(function () {
            var e = $(this);
            e.dataTable({
                columnDefs: [
                    {
                        width: '30%',
                        targets: 0
                    }
                ],
                language: {
                    aria: {
                        sortAscending: ": activate to sort column ascending",
                        sortDescending: ": activate to sort column descending"
                    },
                    emptyTable: "No data available in table",
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",
                    infoEmpty: "No entries found",
                    infoFiltered: "(filtered1 from _MAX_ total entries)",
                    lengthMenu: "_MENU_ entries",
                    search: "Search:",
                    zeroRecords: "No matching records found"
                },
                buttons: [
//                    {extend: "print", className: "btn dark btn-outline"},
//                    {extend: "copy", className: "btn red btn-outline"},
                    {extend: "pdf", className: "btn green btn-outline"},
//                    {extend: "excel", className: "btn yellow btn-outline "},
                    {extend: "csv", className: "btn purple btn-outline "}
//                    {extend: "colvis", className: "btn dark btn-outline", text: "Columns"}
                ],
                order: [[0, "asc"]],
                lengthMenu: [[5, 10, 15, 20, -1], [5, 10, 15, 20, "All"]],
                pageLength: 10,
                dom: "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"
            });
            e.on('draw.dt', function () {
                ZiPortletManager.init();
                ZiConfirm.init();
            });
        });

    };
    return{
        init: function () {
            o();
        },
        populate: function (table, array) {
            p(table, array);
        }
    };
}();