$(document).ready(function () {
    // initialize tooltip. Any element with a class "tt" will have the tooltip enabled.
    // Add tooltip text in the "data-original-title" attribute on the element. 
    // Example: <a href="#" class="tt ic next" data-original-title="Next page"></a>
    $('.tt').tooltip();
    // show file value after file select
    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    // filter radio buttons active/inactive states
    $('#radioBtn a').on('click', function () {
        var sel = $(this).data('title');
        var tog = $(this).data('toggle');
        $('#' + tog).prop('value', sel);

        $('a[data-toggle="' + tog + '"]').not('[data-title="' + sel + '"]').removeClass('active').addClass('notActive');
        $('a[data-toggle="' + tog + '"][data-title="' + sel + '"]').removeClass('notActive').addClass('active');
    })




    $('.dropdown-submenu > a').on("click", function (e) {
        var submenu = $(this);
        $('.dropdown-submenu .dropdown-menu').removeClass('show');
        submenu.next('.dropdown-menu').addClass('show');
        e.stopPropagation();
    });

    $('.dropdown').on("hidden.bs.dropdown", function () {
        $('.dropdown-menu.show').removeClass('show');  // hide any open menus when parent closes
    });

    $('.multipleSelect').fastselect();
    
    
    
     
    
    

});


function goForward() {
    window.history.forward();
}

function goBack() {
    window.history.back();
}


    
    
   
