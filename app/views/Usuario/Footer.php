<script src='<?= URL_BASE ?>assets/plugins/datatables/jquery.dataTables.min.js'></script>
<script src='<?= URL_BASE ?>assets/js/jquery.mask.js'></script>
<script src='<?= URL_BASE ?>assets/js/pages/js_mascara.js'></script>
<!-- DataTables  & Plugins -->
<script src="<?= URL_BASE ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= URL_BASE ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $('#example1').DataTable({
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            },
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>