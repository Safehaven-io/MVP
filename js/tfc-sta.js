app.controller('tfcStaCtrl', function($scope, $http) {
	$scope.shares =  [
		{name: "Share 1"},
		{name: "Share 2"}
	];

	$scope.check = function(){
		//var shares = SafeShareF($scope);
		var type = "validate";

		var data = $.param({
			'type': type,
			'data': JSON.stringify($scope.shares)
		});
		var config = {
			headers : {
				'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
			}
		};
		console.log(data);

		$http.post("../actions/shares.php", data, config).
			then(function onSuccess(response) {
				// Handle success
				var data = response.data;
				$scope.summarize = data;
				console.log("data:" + data);
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
	};
	$scope.test = function(){
		$scope.summarize = "";
		demo($scope);
	};
});

function demo(tfcSta){
	console.log(tfcSta);
	tfcSta.shares[0].value = "803cd51a51cd81d2880d50b95430c67260504bd9de8cf75f15ed408fb3e3deaac3c37d9b24c23ba9a14d8c4f8cb11d409e875dc8f3b6883422770116bf1e6342aa81e0b059eed2664d127f66ff2dcd4c381";
	tfcSta.shares[1].value = "8020707ea64671f3bd33d69e7c40b15cbc8f4fd370ff5908a34925cf36cf75325cef7be4f9666c96f6ddeb36590478ce7c2658c355e6b6aa03c3e774a257f8bc64198507477eb85d46f080a04da6c8ff893";
}
