$(document).on("ready",function() {
    $('.btnSearch').on("click",function(){
        makeAjaxRequest();
    });

    $('form').submit(function(e){
        e.preventDefault();
        makeAjaxRequest();
        return false;
    });

    function makeAjaxRequest() {
        $.ajax({
            url: 'php/search.php',
            type: 'POST',
            data: {name: $('input#name').val()},
            success: function(response) {
                $('table#resultTable tbody').html(response);
            }
        });
    }
});