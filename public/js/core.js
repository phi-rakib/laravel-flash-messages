$(document).ready(function() {
    $('.confirm-delete').click(function(e) {
        e.preventDefault();

        var url = $(this).data('href');
        
        $('#delete-modal').modal('show');
        $('#delete-link').attr('href', url);
    });
});