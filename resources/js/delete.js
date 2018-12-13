function deleteMessage(form){

    var recipe = location.href.split('/').slice(-1)[0];

    var baseUrl = location.href.replace(recipe, "");
    var deleteUrl = baseUrl + "DeleteComment";


    $.post(deleteUrl,{'CommentID':form}, function (response) {
    console.log('Delete:'+ response);
        location.reload();
    });
}