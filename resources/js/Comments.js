$(document).ready(function () {


    var recipe = location.href.split('/').slice(-1)[0];

    var baseUrl = location.href.replace(recipe, "");
    console.log(baseUrl);
    var loginUrl = baseUrl + "LoginUser";
    var writeUrl = baseUrl + "PostComments";
    var readUrl = baseUrl + "GetComments";
    var deleteUrl = baseUrl + "DeleteEntry";
    var userNameUrl = 'http://localhost/RecipesWebsite/GetUser';
    console.log(readUrl);
    var user ="";
    getUser();
    commentsFunc();

    function commentsFunc(){
        console.log('Get '+recipe);
        $.getJSON(readUrl, {
            'recipe': recipe
        }
        ,function (comments) {
            console.log(comments);
            setComments(comments);
        });
    }

    function setComments(jsonEntries){
        let element = '.listOfComments';
        for (var i = jsonEntries.length - 1; i >= 0; i--) {
            let elem = jsonEntries[i];
            console.log(user);
            let comment =
                '<li class="comment">'+
                elem.username+':<br>'+
                elem.message
                if(elem.username == user){
                    comment +=
                    '<button onclick="deleteMessage('+elem.commentID+')">Delete</button>';

                }
             comment+=   '</li>'
            $(element).append(comment

            )
            console.log(comment)

        }
    }

    function getUser() {
        $.post(userNameUrl, function (name) {
            console.log(name);
            user = removeQuotes(name);

        });
    }



    function removeQuotes(str) {
        return str.replace(/\"/g, "");
    }

    function Submit(){

        var self = this;
        self.message = ko.observable();
        self.ID = ko.observable();
        console.log(user);

        self.send = function() {

           m= ko.toJS(self.message);
            i = recipe;

            console.log("MESSAGE = "+m);
            console.log("ID=" + i);
            if (user != null) {
            $.post(writeUrl, {
                'RecipeID': i,
                'Comment': m
            },
                function (response) {
                    console.log('Submit:    ' + response);
                    location.reload();
                })
        }
        }
    }

    /*function Delete(ID){
        let self = this;
        self.id = ID;

        self.ID = ko.observable();
        self.deleteComment = function(){
            alert(self.id);
        }
    }*/


    var newMessage = new Submit();
    ko.applyBindings(newMessage,document.getElementById('post'));
});