$(document).ready(function(){
    var table = $('#members-table').DataTable({
        "paging":       true,
        "pagingType":   "simple",
        "ordering":     true,
        "select": {
            items: 'cells'
        },
        "info":         true,
        "autoWidth":    false,
        "columns": [
            { "width": "45%" },
            { "width": "45%" },
            { "width": "10%" }
        ]

    });




    $(".delete-member").on("submit", function(){
        return confirm('Tem a certeza que pretende apagar este membro? Esta acção é irreversível!');
    });

    /*

     var translations = {
     areYouSure: window.translations.areYouSure || 'Are you sure you want to delete this member? This action cannot be undone!',
     };

    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
        isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });

    function hamburger_cross() {

        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });
*/
});