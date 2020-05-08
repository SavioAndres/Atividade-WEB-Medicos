var app = angular.module("app", []);

app.controller("index", function($http, $scope){

    $scope.resposta = "";

    $http.get("https://medicos-progweb.herokuapp.com/medicos").then(function(response) {
        $scope.medicos = response.data;
    });
    $http.get("http://localhost/api").then(function(response) {
        $scope.tipo_saguineo = response.data;
    });

    $scope.enviar = function() {
		$http({
			method: 'POST' ,
			url: 'http://localhost/api',
			data: { medico: $scope.medico, nome_paciente: $scope.nome_paciente, sangue: $scope.sangue }
		}).then(function success(response) {
            $scope.resposta = response.data.resposta;
		}, function unsuccess(response) {
            console.log(response);
		});
	}
});

