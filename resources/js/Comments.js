$(document).ready(function () {


    var recipe = location.href.split('/').slice(-1)[0];

    var baseUrl = location.href.replace(recipe, "");
    console.log(baseUrl);
    var loginUrl = baseUrl + "LoginUser";
    var writeUrl = baseUrl + "StoreEntry";
    var readUrl = baseUrl + "GetComments";
    var deleteUrl = baseUrl + "DeleteEntry";
    console.log(readUrl);

    commentsFunc();

    function commentsFunc(){
        console.log('Get '+recipe);
       /* $.ajax({
            url: readUrl,
            dataType: 'post',
            'recipe': recipe,
            success: function( data ) {
                setComments(data);
            },
            error: function( data ) {
                for(var property in data) {
                    alert(property + "=" + data[property]);
                }
            }
        });*/
        $.getJSON(readUrl, {
            'recipe': recipe
        }
        ,function (comments) {
            console.log(comments);
            setComments(comments);
        });
    }

    function setComments(jsonEntries){
        let element = '#listOfComments';
        for (var i = jsonEntries.length - 1; i >= 0; i--) {
            $(element).append(
                '<li class="comment">'+
                jsonEntries[i].username+':<br>'+
                jsonEntries[i].message+
                '</li>'
            )
        }
    }

    //var log = new LoginFunct();
    //ko.applyBindings(log,document.getElementById('login'));
});