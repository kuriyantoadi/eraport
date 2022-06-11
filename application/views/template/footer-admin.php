<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. Dikembangkan oleh Tim IT SMK Negeri 1 Kragilan</p>


<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

  <!-- jQuery -->
<script src="<?= base_url() ?>assets/data-table/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/data-table/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>assets/data-table/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/data-table/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/data-table/js/adminlte.min.js"></script>


<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
