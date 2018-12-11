$(document).ready(function () {

    var baseUrl = location.href.replace("Login", "");
    var loginUrl = baseUrl + "LoginUser";
    var writeUrl = baseUrl + "StoreEntry";
    var readUrl = baseUrl + "GetEntries";
    var deleteUrl = baseUrl + "DeleteEntry";

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
                        function (a,b) {test(a,b);}

                    );
            }else{
                console.log('Failure');
                alert("Wrong username or password")

            }
           // location.reload();
        };
       /* var password = $('#password').val();
        var username = $('#username').val();*/
     //   console.log('Hej');
       //console.log(password);


        function test(a,b) {
            console.log('3245345' +a);
            if (a.charAt(0)==1) {
                document.location.href = 'MyPage';
            }else{
                alert('Wrong username or password');

            }
        }

    };

var log = new LoginFunct();
    ko.applyBindings(log,document.getElementById('login'));
});