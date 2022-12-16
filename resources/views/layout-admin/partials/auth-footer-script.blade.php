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

    $('.delete-confirm').on('click', function (event) {
        // event.preventDefault();
        // const url = $(this).attr('href');
        // swal({
        //     title: 'Etes-vous sure ?',
        //     text: 'Ce enregostrement et ses details seront supprimees de facon permanentes !',
        //     icon: 'warning',
        //     buttons: ["Annuler", "Confirmer !"],
        // }).then(function(value) {
        //     if (value) {
        //         window.location.href = url;
        //     }
        // });
    });
</script>

<script src="{{ asset('/assets-admin/js/app.js') }}"></script>
