$(document).ready(function () {
    $('.logo').on('click', function () {
        var url = 'index.php';
        window.location.href = url;
    });

    $('.clikedMenu').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr('id');
        
        
    });
});