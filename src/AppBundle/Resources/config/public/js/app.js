(function(){
    var app = angular.module('person',[]);
    app.controller('TestController', ['$http',function($http){
        all = this;
        all.persons = [];
        $http.get('/display').success(function(data){
            all.persons = data;
        });
    }]);
})();
