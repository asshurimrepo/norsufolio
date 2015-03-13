/**
 * Created by Jerry on 1/29/2006.
 */

$(document).ready(function () {
    $('[data-toggle="popover"]').popover({html:true})
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
});