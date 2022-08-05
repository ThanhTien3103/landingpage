$( "#gioithieu" ).click(function(){
    $.ajax({
        url: "templates/gioithieu.php",
        type: "GET"
    }).done(function(data){
        $('#iframe').html(data);
    });
})
$( "#info" ).click(function(){
    $.ajax({
        url: "templates/info.php",
        type: "GET"
    }).done(function(data){
        $('#iframe').html(data);
    });
})
$( "#submitui" ).click(function(){
    $.ajax({
        url: "templates/submit_form.php",
        type: "POST"
    }).done(function(data){
        $('#iframe').html(data);
    });
})
