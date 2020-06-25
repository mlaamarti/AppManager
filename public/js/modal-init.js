    $(function() {
        $('.modal-buttons .btn').on('click', function() {
            var color = $(this).data('color');
            $('#exampleModalCenter .modal-content').removeAttr('class').addClass('modal-content modal-color-' + color);
            $('#exampleModalCenter').modal('show');
        });
    });