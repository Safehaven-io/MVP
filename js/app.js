var app = angular.module('app', []);
app.controller('appCtrl', function($scope, $http) {
	$scope.pathApiUsers = "";
	$scope.user = "";
	
	$scope.userInit = function(rootadmin,userID){
		$scope.pathApiUsers = rootadmin + "api/users.php";
		$scope.userID = userID;
		
		var data = $.param({
			'userID':$scope.userID
		});
		var config = {
			headers : {
				'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
			}
		};
		console.log(data);
		$http.post($scope.pathApiUsers, data, config).
			then(function onSuccess(response) {
				// Handle success
				var data = response.data;
				$scope.user = data;
				console.log("data user:" + JSON.stringify(data));
				var status = response.status;
				console.log("status:" + status);
				var statusText = response.statusText;
				console.log("statusText:" + statusText);
				var headers = response.headers;
				console.log("headers:" + headers);
				var config = response.config;
				console.log("config:" + config);
			}).
			catch(function onError(response) {
				// Handle error
				var data = response.data;
				console.log("data:" + data);
				var status = response.status;
				console.log("status:" + status);
				var statusText = response.statusText;
				console.log("statusText:" + statusText);
				var headers = response.headers;
				console.log("headers:" + headers);
				var config = response.config;
				console.log("config:" + config);
			}
		);
	}
});

app.filter('capitalize', function() {  
	return function(input){
		if(input.indexOf(' ') !== -1){
			var inputPieces, i;
  
			input = input.toLowerCase();
			inputPieces = input.split(' ');
  
			for(i = 0; i < inputPieces.length; i++){
				inputPieces[i] = capitalizeString(inputPieces[i]);
			}
  
			return inputPieces.toString().replace(/,/g, ' ');
		}
		else {
			input = input.toLowerCase();
			return capitalizeString(input);
		}
  
		function capitalizeString(inputString){
			return inputString.substring(0,1).toUpperCase() + inputString.substring(1);
		}
	};
});