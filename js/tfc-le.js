function SafeShareF(tfcLe) {
	console.log("before unlock");
	var shares = tfcLe.shares;
	console.log(shares);
	var arrShares = new Array();
	angular.forEach(shares, function(value, key){
		arrShares[key] = value.value;
	});
	console.log(JSON.stringify(arrShares));
	//arrShares = shares,delete shares.name;
	//console.log(arrShares);
	comb = secrets.combine( arrShares );
	data = secrets.hex2str(comb);
	console.log("data: " + comb);

	console.log("after unlock");

	return data;	
}

app.controller('tfcLeCtrl', function($scope, $http) {
	$scope.shares =  [
		{name: "Share 1"},
		{name: "Share 2"},
		{name: "Share 3"},
		{name: "Share 4"},
		{name: "Share 5"},
		{name: "Share 6"}
	];

	$scope.check = function(){
		var data = SafeShareF($scope);
		$scope.summarize = data;
	};

	$scope.test = function(){
		$scope.summarize = "";
		demo($scope);
	};
});

function demo(tfcSta){
	console.log(tfcSta);
	tfcSta.shares[0].value = "801faff40539c98520b79531dc81b459a3f7e6328384ecf64be3a54b2c2f9c8920817fb5857c76f85a7087099c5135ee8a88cb3eb85be2a469a53e6e563834574208a050022278369ed32a45a2d3a3316de";
	tfcSta.shares[1].value = "802af8da6d57dff9f642efc81e4f35c10b29a0c727faaebbcad6cf30b2dd8f10da76fd87465ba99873c0525ad7b9b3a2691064c947f5b53ed541ad89ddd9fa1555e5e4de7cb9eb661cad4b80e190425e921";
	tfcSta.shares[2].value = "8035572e686e167cd6f57af9c2ce8198a8ce4585a36e456d87456c6b9bf216c9ff5787a2c5b7db402f20d3234ee8836ce5e8aa77fa8e503ab9e495178ec1c8e212ed406e7a4b9770856e62f546d3e26ffb9";
	tfcSta.shares[3].value = "80446a2c966878ccf1d0b90c96cc8c7c461ac376c279182a867b89fc3a77136cac4c701dfaccdd769b45e4e7576e55fc75f002b544a5e365e56fec612c2098f64d3fd266821460634584fe2ce43d556fcbd";
	tfcSta.shares[4].value = "805bc5d89351b149d1672c3d4a4d3825e5fd263446edf3fccbe82aa713588ab5896d0a387920afaec7a5659ece3f6532f908cc0bf9de066189cad4ff7f38aa010a3776d684e61c75dc47d759437ef55ea25";
	tfcSta.shares[5].value = "806e92f6fb3fa735079256c48883b9bd4d2360c1e293b1b14add40dc8daa992c739a880aba0770ceee15b0cd85d7e37e1a9063fc067051fb352e4718f4d964431dda3258fa7d8f255e39b69c003d14315da";
}