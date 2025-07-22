<footer class="bg-white text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #F0F0F0;">
        © 2025 Copyright:
        <a class="text-dark" href="https://www.instagram.com/yufrii__/">Yupi</a>
    </div>
    <!-- Copyright -->
</footer>

<!-- jQuery (harus sebelum DataTables) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

<!-- Inisialisasi DataTables -->
<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            responsive: true,
            paging: true,
            ordering: true,
            searching: true
        });
    });
</script>

<!-- jquery datatables -->
<script>
$(document).ready(function() {
    var table = $('#table').DataTable({
        responsive: false,
        "lengthMenu": [
            [5, 10, 15, 20, 100, -1],
            [5, 10, 15, 20, 100, "All"]
        ],
        "scrollX": true,
        "scrollY": true,
        "columnDefs": [
            {
                "targets": -1,
                "orderable": false,
                "searchable": false,
                "width": "200px"
            },
            {
                "targets": 4,
                "width": "250px"
            }
        ],
        "autoWidth": false
    });
    var table = $('#table-subkriteria').DataTable({
        responsive: false,
        "lengthMenu": [
            [5, 10, 15, 20, 100, -1],
            [5, 10, 15, 20, 100, "All"]
        ],
        "scrollX": true,
        "scrollY": true,
        "columnDefs": [
            {
                "targets": -1,
                "orderable": false,
                "searchable": false
            }
        ],
        "autoWidth": false
    });
    // new $.fn.dataTable.FixedHeader(table);
});
</script>
</body>

</html>