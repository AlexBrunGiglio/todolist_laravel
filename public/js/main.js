$("input[type='checkbox']").on("change",function(evt){
    var etat = $(this).is(':checked');
    var idFeature = $(this).attr("id");
    var url='/api/features/'+idFeature;

    $.ajax({
        method: "POST",
        url: url,
        data: {id: idFeature , etat: etat?1:0}
    })
    .done(function(){
        //
    })
    .fail(function(){
        //
    })
});
