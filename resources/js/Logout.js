$(document).ready(function () {

    var baseUrl = location.href.replace("MyPage", "");
    var loginUrl = baseUrl + "LoginUser";
    var logoutUrl = baseUrl + "Logout";
    var writeUrl = baseUrl + "StoreEntry";
    var readUrl = baseUrl + "GetEntries";
    var deleteUrl = baseUrl + "DeleteEntry";

    function LogoutFunct(){
        var self = this;
        self.logout = function(){
            console.log("Logging out");
            $.post(logoutUrl,{},function(res){
                console.log(res);
               document.location.href = 'index';

            })
        }
    };

    var log = new LogoutFunct();
    ko.applyBindings(log,document.getElementById('logout'));
});