var DatatablesAdvancedRowGrouping = {
    init: function() {
        $("#m_table_1").DataTable({
            responsive: !0,
            pageLength: 25,
            order: [
                [0, "asc"]
            ],
            drawCallback: function(a) {
                var e = this.api(),
                    t = e.rows({
                        page: "current"
                    }).nodes(),
                    n = null;
                e.column(2, {
                    page: "current"
                }).data().each(function(a, e) {
                    n !== a && ($(t).eq(e).before('<tr class="group"><td colspan="10">' + a + "</td></tr>"), n = a)
                })
            },
            columnDefs: [{
                targets: [0, 4],
                visible: !1
            }]
        })
    }
};
jQuery(document).ready(function() {
    DatatablesAdvancedRowGrouping.init()
});