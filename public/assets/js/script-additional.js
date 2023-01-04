$(document).ready(function(){
    setTimeout(()=> {
        $('.toast-notification').css('display', 'none');
    }, 15000);

    $('#darkmode-toggle').on("click", () => {
        if($('#darkmode-toggle:checked').val() == 'on'){
            $('head').append(`<link rel="stylesheet" href="assets/css/app-dark.css" type="text/css" id="dark-mode" />`);
        } else {
            $('#dark-mode').remove();
        }
    })
})