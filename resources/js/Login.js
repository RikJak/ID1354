$(document).ready(function () {

    var baseUrl = location.href.replace("Login", "");
    var loginUrl = baseUrl + "LoginUser";

    function LoginFunct(){
        var self = this;
        self.password = ko.observable("");
        self.username = ko.observable("");

        self.login = function(){

            regex = /^[a-z0-9]+$/i;
            if(self.password().match(regex) && self.username().match(regex)){

                p = ko.toJS(self.password);
                u = ko.toJS(self.username);

                $.post(loginUrl,
                    {
                        'password': p,
                        'username': u,
                    },
                        function (result,b) {performLogin(result,b);}

                    );
            }else{
                alert("Usernames and passwords can only contain numbers and letters!")
                self.password("");
                self.username("");

            }

        };


        function performLogin(result,b) {
            console.log('TEst:' +result+"  "+b);
            if (result) {
                document.location.href = 'MyPage';
            }else{
                alert('Wrong username or password');

            }
        }

    };

var log = new LoginFunct();
    ko.applyBindings(log,document.getElementById('login'));
});