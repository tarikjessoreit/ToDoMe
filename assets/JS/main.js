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




// ajax
    function ajax(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("loadajaxdata").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "ajax.php", true);
        xmlhttp.send();
    }
    

    setInterval(function () {
        ajax();
    }, 500);
