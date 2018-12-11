$(document).ready(function () {
    var baseUrl = "localhost/RecipesWebsite/";
    var statusURL = 'http://localhost/RecipesWebsite/GetStatus';
    var userNameUrl = 'http://localhost/RecipesWebsite/GetUser';
    console.log("HELLO");
    var self = this;

    $.post(statusURL,{},function(status){

        if(status=='true'){
        $(".menu").html(
            '<ul class = "menuList">'+
            '<li><a class="active" href="index">Index</a></li>'+
            '<li><a href="calendar">Calendar</a></li>'+
            '<li><a href="meatballs">Meatballs</a></li>'+
            '<li><a href="pancakes">Pancakes</a></li>'+
            '<li id = "log"><a href="MyPage">'+getUser()+'</a></li>'+
            '</ul>');
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
        let uname ="";
        $.post(userNameUrl,{},function (name) {
            console.log(name);
            uname = name;

        });

        return uname;

    }



  /*  $.getJSON(nickNameUrl, function (username) {
        self.nickName(username);
    });*/
});