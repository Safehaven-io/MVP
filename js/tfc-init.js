function SafeShareF(tfcInit) {
	var data = tfcInit.data_to_secure;
	var validator = tfcInit.validator;
	console.log(data);
	var dataHex = secrets.str2hex(data); // => hex string
	var amountOfStakeholderShares = tfcInit.number_of_stakeholders * 2; //parseInt(document.getElementById("amountOfShares").value);
	var amountOfValidators = tfcInit.number_of_validator;
	var amountOfBackupShares = tfcInit.number_of_backup_shares;
	var amountOfBackupValidators = tfcInit.number_of_backup_validator;
	var threshold = parseInt(amountOfStakeholderShares + 1);
	
	var totalShares = amountOfStakeholderShares + amountOfValidators + amountOfBackupShares + amountOfBackupValidators;
	//var shares = secrets.share(pwHex, parseInt(amountOfShares), parseInt(threshold));
	console.log("TOTAL: " + totalShares);
	console.log("THRESHOLD: " + threshold);	
	console.log("STAKEHOLDER: " + amountOfStakeholderShares);
	console.log("VALIDATOR: " + amountOfValidators);
	console.log("BACKUP SHARE: " + amountOfBackupShares);
	console.log("BACKUP VALIDATOR: " + amountOfBackupValidators);
	var shares = secrets.share(dataHex, totalShares, threshold);
	var job = shares.toString();

	var params = new Array();
	params.push([1,amountOfStakeholderShares]);
	params.push([2,amountOfValidators]);
	params.push([3,amountOfBackupShares]);
	params.push([4,amountOfBackupValidators]);
	
	var data = {};
	data["params"] = params;
	data["validator"] = validator;
	data["shares"] = shares;

	console.log(data);

	return data;
}

//var appTfcInit = angular.module('tfcInitApp', []);
app.controller('tfcInitCtrl', function($scope, $http) {
	$scope.data_to_secure = "";
    $scope.number_of_stakeholders = "";
	$scope.backup_shares = "";
	$scope.number_of_backup_shares = "";
	$scope.min_number_of_stakeholders = "";
	$scope.use_validator = "";
	$scope.number_of_validator = "";
	$scope.validator = "";
	$scope.backup_validator = "";
	$scope.number_of_backup_validator = "";
	$scope.shareGroups = "";
	$scope.legalEntities = "";
	$scope.users = "";
	$scope.result = "";
	//$scope.shares;
	$scope.number_of_stakeholders_change = function(){
		calculateBackupShares($scope);
	}
	$scope.backup_shares_change = function(){
		calculateBackupShares($scope);
	}
	$scope.use_validator_change = function(){
		calculateValidatorShares($scope);
	}
	$scope.backup_validator_change = function(){
		calculateValidatorShares($scope);
	}

	$scope.updateUser = function(shareGroup){
		console.log(shareGroup);
		var index = $scope.users.findIndex(user => user.ID === shareGroup.userID);
		shareGroup.userName = $scope.users[index].firstname + " " + $scope.users[index].lastname;
		shareGroup.userImg = $scope.users[index].img;
		console.log(shareGroup);
	}

	$scope.updateValidator = function(validator){
		console.log("before");
		console.log(validator);
		console.log("after");
		$scope.validator = validator;
		var data = $.param({
			'legal_entity':$scope.validator
		});		
		var config = {
			headers : {
				'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
			}
		};
		console.log(data);
		$http.post("../api/legal_entities.php", data, config).
			then(function onSuccess(response) {
				// Handle success
				var data = response.data;
				console.log("DATA:" + JSON.stringify(data));
				console.log($scope.shareGroups);
				console.log("data.userID: " + data.userID);
				var index = $scope.shareGroups.findIndex(shareGroup => shareGroup.shareTypeID === 2);
				$scope.shareGroups[index].userID = data.userID;
				$scope.shareGroups[index].userName = data.userName;
				$scope.shareGroups[index].userImg = data.userImg;

				console.log("shareGroup: " + index + " " + JSON.stringify(shareGroup));

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
	
	$scope.generate = function(){
		var data = SafeShareF($scope);
		var type = "generate";
		var data = $.param({
			'type':type,
			'data':JSON.stringify(data)
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
				$scope.shareGroups = data;
				console.log("data:" + JSON.stringify(data));
				//$scope.shareGroups = data;
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
	$scope.save = function(){
		console.log("SAVE");
		console.log($scope.shareGroups);
		
		var type = "save";
		var data = $.param({
			'type':type,
			'data':JSON.stringify($scope.shareGroups)
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
				$scope.result = data;
				console.log("data:" + JSON.stringify(data));
				//$scope.shareGroups = data;
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
	$scope.test = function($example){
		$scope.shareGroups = "";
		demo($scope,$example);
	};

	$http.post("../api/users.php").
		then(function onSuccess(response) {
			// Handle success
			var data = response.data;
			$scope.users = data;
			console.log("data USERS:" + JSON.stringify(data));
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

	$http.post("../api/legal_entities.php").
		then(function onSuccess(response) {
			// Handle success
			var data = response.data;
			$scope.legalEntities = data;
			console.log("data LEGAL ENTITIES:" + JSON.stringify(data));
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
});

function calculateBackupShares(tfcInit){
	if(tfcInit.backup_shares){
		tfcInit.number_of_backup_shares = tfcInit.min_number_of_stakeholders * 2;
	}
	else{
		tfcInit.number_of_backup_shares = 0;
	}
}

function calculateValidatorShares(tfcInit){
	if(tfcInit.use_validator){
		tfcInit.number_of_validator = 1;
		if(tfcInit.backup_validator){
			tfcInit.number_of_backup_validator = 1;
		}
		else{
			tfcInit.number_of_backup_validator = 0;
		}
	}
	else{
		tfcInit.number_of_validator = 0;
		tfcInit.number_of_backup_validator = 0;
	}
}

function demo(tfcInit,example){
	tfcInit.data_to_secure = generate_token(32);
	console.log(example);
	switch(example){
		case 1: tfcInit.number_of_stakeholders = "1";
				tfcInit.backup_shares = false;
				tfcInit.min_number_of_stakeholders = "1";
				tfcInit.use_validator = true;
				tfcInit.validator = "1";
				tfcInit.backup_validator = false;
				break;
		case 2: tfcInit.number_of_stakeholders = "1";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "1";
				tfcInit.use_validator = true;
				tfcInit.validator = "2";
				tfcInit.backup_validator = false;
				break;
		case 3: tfcInit.number_of_stakeholders = "1";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "1";
				tfcInit.use_validator = true;
				tfcInit.validator = "3";
				tfcInit.backup_validator = true;
				break;
		case 4: tfcInit.number_of_stakeholders = "2";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "1";
				tfcInit.use_validator = true;
				tfcInit.validator = "1";
				tfcInit.backup_validator = false;
				break;
		case 5: tfcInit.number_of_stakeholders = "2";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "1";
				tfcInit.use_validator = true;
				tfcInit.validator = "2";
				tfcInit.backup_validator = false;
				break;
		case 6: tfcInit.number_of_stakeholders = "2";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "1";
				tfcInit.use_validator = true;
				tfcInit.validator = "3";
				tfcInit.backup_validator = true;
				break;
		case 7: tfcInit.number_of_stakeholders = "3";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "1";
				tfcInit.use_validator = true;
				tfcInit.validator = "1";
				tfcInit.backup_validator = false;
				break;
		case 8: tfcInit.number_of_stakeholders = "3";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "2";
				tfcInit.use_validator = true;
				tfcInit.validator = "2";
				tfcInit.backup_validator = false;
				break;
		case 9: tfcInit.number_of_stakeholders = "3";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "2";
				tfcInit.use_validator = true;
				tfcInit.validator = "3";
				tfcInit.backup_validator = true;
				break;
		case 10:tfcInit.number_of_stakeholders = "4";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "1";
				tfcInit.use_validator = true;
				tfcInit.validator = "1";
				tfcInit.backup_validator = false;
				break;
		case 11:tfcInit.number_of_stakeholders = "4";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "2";
				tfcInit.use_validator = true;
				tfcInit.validator = "2";
				tfcInit.backup_validator = false;
				break;
		case 12:tfcInit.number_of_stakeholders = "4";
				tfcInit.backup_shares = true;
				tfcInit.min_number_of_stakeholders = "2";
				tfcInit.use_validator = true;
				tfcInit.validator = "3";
				tfcInit.backup_validator = true;
				break;
	}
	
	calculateBackupShares(tfcInit);
	calculateValidatorShares(tfcInit);
}

function generate_token(length){
    //edit the token allowed characters
    var a = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890".split("");
    var b = [];  
    for (var i=0; i<length; i++) {
        var j = (Math.random() * (a.length-1)).toFixed(0);
        b[i] = a[j];
    }
    return b.join("");
}
