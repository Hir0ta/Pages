$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    if ( $(window).width() > 768) {      
        $('#desktopToggle').on('click', function () {
            $('#sidebar').toggleClass('active');
            $('#sidebarCollapse').show();
            $('#sidebarCollapse').on('click', function () {
                $('#sidebarCollapse').hide(); 
            });
        });
    }
});