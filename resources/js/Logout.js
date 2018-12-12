$(document).ready(function () {

    var baseUrl = location.href.replace("MyPage", "");
    var logoutUrl = baseUrl + "Logout";


    function LogoutFunct(){
        var self = this;
        self.logout = function(){
            console.log("Logging out");
            $.post(logoutUrl,function(res){
                console.log(res);
               document.location.href = 'index';

            })
        }
    };

    var log = new LogoutFunct();
    ko.applyBindings(log,document.getElementById('logout'));
});