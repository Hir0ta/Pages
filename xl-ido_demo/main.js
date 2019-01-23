$(document).ready(function () {
    /*reload when browser resize*/
    /*$(window).bind('resize',function(){
        window.location.href = window.location.href;
    });*/

    /*mobile sidebar collapse*/
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    /*tablet and desktop sidebar collapse*/
    if ( $(window).width() > 768) {      
        $('#desktopToggle').on('click', function () {
            $('#sidebar').toggleClass('active');
            $('#sidebarCollapse').show();
            $('#sidebarCollapse').on('click', function () {
                $('#sidebarCollapse').hide(); 
            });
        });
    }
    $('timepicker')
    $('#datepicker').datepicker({
        locale: 'hu-hu',
        format: 'yyyy mm dd',
        uiLibrary: 'bootstrap4'
    });
    $('#timepicker').timepicker({
        locale: 'hu-hu',
        uiLibrary: 'bootstrap4'
    });
    
    $(document).ready(function() {
        $("#fixTable").tableHeadFixer({"left" : 1}); 
    });
});