$(document).ready(function () {
    var baseUrl = "localhost/RecipesWebsite/";
    var statusURL = 'http://localhost/RecipesWebsite/GetStatus';
    var userNameUrl = 'http://localhost/RecipesWebsite/GetUser';
    //console.log("HELLO");
    var self = this;
    var user ="Batman";

    $.post(statusURL,{},function(status){

        if(status=='true'){
            getUser();

        }else{
            $(".menu").html(
                '<ul class = "menuList">'+
                '<li><a class="active" href="index">Index</a></li>'+
                '<li><a href="calendar">Calendar</a></li>'+
                '<li><a href="meatballs">Meatballs</a></li>'+
                '<li><a href="pancakes">Pancakes</a></li>'+
                '<li id = "log"><a href="Login">Log in</a></li>'+
                '</ul>');
        }
    });

    function getUser(){
        $.post(userNameUrl,function (name) {
            user = removeQuotes(name);
            printUser()

        });

    }
     function printUser() {
         $(".menu").html(
             '<ul class = "menuList">'+
             '<li><a class="active" href="index">Index</a></li>'+
             '<li><a href="calendar">Calendar</a></li>'+
             '<li><a href="meatballs">Meatballs</a></li>'+
             '<li><a href="pancakes">Pancakes</a></li>'+
             '<li id = "log"><a href="MyPage">'+user+'</a></li>'+
             '</ul>');
     }

    function removeQuotes(str) {
        return str.replace(/\"/g, "");
    }





  /*  $.getJSON(nickNameUrl, function (username) {
        self.nickName(username);
    });*/
});