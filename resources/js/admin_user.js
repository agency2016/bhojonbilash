
var userApp = angular.module('userApp', []);

userApp.controller('userCtrl', function ($scope, $http,$location) {
       //var newlocation = '/agencyDelta/bhojonbilash/';
	$http.get(newlocation+'admin_user/all_user').success(function(data){
		$scope.users = data;
	}).error(function(data){
		$scope.users = data;
	});
	$scope.list = true;
        $scope.addedit= false;
       
	$scope.refresh = function(){
		$http.get(newlocation+'admin_user/all_user').success(function(data){
		$scope.users = data;
                }).error(function(data){
                        $scope.users = data;
                });
	}
        $scope.cancel = function (name) {
             var element = angular.element(name);
             element.modal('hide');
        };
        $scope.addUser = function(){
            $scope.addedit= true;
            $scope.list= false;
           
        }
	$scope.addeditUserSubmit = function(){
                
                var id = $scope.ngID;
                if(typeof id == "undefined"){
                    var newUser = {fname: $scope.ngFname, email: $scope.ngEmail};
                    $http({
                            method: 'POST',
                            dataType: 'json',
                            url: newlocation+'admin_user/insert_user',
                            data: newUser, //forms user object
                            headers: {'Content-Type': 'application/json'}}).success(function(data){
                            
                            $scope.ngFname = '';
                            $scope.ngEmail = '';
                            $scope.addedit= false;
                            $scope.list= true;
                            $scope.refresh();
                            
                    }).error(function(data){
                            alert(data.error);
                    });
                }// end of func
                else{
                    var updateTask = {user_id:id,fname: $scope.ngFname, email: $scope.ngEmail};
                    $http({
                            method: 'POST',
                            dataType: 'json',
                            url: newlocation+'admin_user/update_user',
                            data: updateTask, //forms user object
                            headers: {'Content-Type': 'application/json'}}).success(function(data){
                            $scope.ngFname = '';
                            $scope.ngEmail = '';
                            $scope.addedit= false;
                            $scope.list= true;
                            $scope.refresh();
                    }).error(function(data){
                            alert(data.error);
                    });
                }//end of else
		
	}
	
	$scope.deleteUser = function(task){
               
		var updateTask = {user_id:task.user_id};
                    $http({
                            method: 'POST',
                            dataType: 'json',
                            url: newlocation+'admin_user/all_user',
                            data: updateTask, //forms user object
                            headers: {'Content-Type': 'application/json'}}).success(function(data){
                            $scope.refresh();
                            
                    }).error(function(data){
                            alert(data.error);
                    });
	}
	
	$scope.updateUser = function(user){
                
		$scope.addedit= true;
                $scope.list= false;
                $scope.ngFname = user.fname;
                $scope.ngEmail = user.email;
                $scope.ngID = user.user_id;
                
	}
	
});