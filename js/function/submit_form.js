function mailto(){
    mail_i = $("input[name = 'emailk']").val();
    $.ajax({
        url: "mail.php",
        type: "POST",
        data:{
            mail : mail_i
        }
    }).done(function(data){
        alert(data);
    })
}