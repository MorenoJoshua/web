$(function () {
    $('#thumbnailModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var imagen = button.data('imagen');
        $('#modal-producto-imagen').attr('src', '/web/assets/img/' + imagen + '.jpg')
    })
});
