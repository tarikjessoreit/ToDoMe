$(document).ready(function () {
    $('#alldata').DataTable();
});


$(document).ready(function () {
    
    $('#cuserpass').keyup(function(){
        var upass = $('#userpass').val();
        var ucpass = $('#cuserpass').val();

        if (upass != ucpass) {
            $('.loginbtn').prop('disabled', true);
            $('#cuserpass').addClass('border-danger shadow-none');
        }else{
            $('.loginbtn').prop('disabled', false);
            $('#cuserpass').removeClass('border-danger shadow-none');
        }
    });
});