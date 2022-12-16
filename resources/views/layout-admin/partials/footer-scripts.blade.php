<!-- JAVASCRIPT -->
<script src="{{ asset('/assets-admin/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets-admin/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('/assets-admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('/assets-admin/libs/node-waves/waves.min.js') }}"></script>

{{-- Sweet alert script --}}
<script src="{{ asset('/assets-admin/js/custom-js/sweetalert2.js') }}"></script>
<script>

    $('div.alert').delay(3000).slideUp(300);

    function logout(){
        $('.logout-btn').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Etes-vous sure ?',
                text: 'Vous allez etre deconnecte !',
                icon: 'warning',
                buttons: ["Annuler", "Confirmer !"],
            }).then(function(value) {
                $('#form-loagout').submit()
            });
        });
    }


    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Etes-vous sure ?',
            text: 'Cet enregistrement et ses details seront supprimes de facon permanente !',
            icon: 'warning',
            buttons: ["Annuler", "Confirmer !"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
</script>

<!-- Required datatable js -->
<script src="{{ asset('/assets-admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets-admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('/assets-admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/assets-admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets-admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>

<script src="{{ asset('/assets-admin/js/pages/ecommerce-datatables.init.js') }}"></script>

<script src="{{ asset('/assets-admin/js/app.js') }}"></script>
