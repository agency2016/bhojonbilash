
var userApp = angular.module('userApp', []);
var sortingOrder = 'fname';
userApp.controller('userCtrl', function ($scope, $http,$location,$filter) {
       //var newlocation = '/agencyDelta/bhojonbilash/';
	
	$scope.list = true;
        $scope.addedit= false;
        $scope.viewuser= false;
        $scope.sortingOrder = sortingOrder;
        $scope.reverse = false;
        $scope.users = [];
        $scope.groupedItems = [];
        $scope.itemsPerPage = 2;
        $scope.pagedItems = [];
        $scope.currentPage = 0;

        var searchMatch = function (haystack, needle) {
            if (!needle) {
                return true;
            }
            return haystack.toLowerCase().indexOf(needle.toLowerCase()) !== -1;
        };
        $scope.search = function(){
            
             $scope.users = $filter('filter')($scope.users, function (item) {
                for(var attr in item) {
                    if (searchMatch(item[attr], $scope.query))
                        return true;
                }
                return false;
            });
            if($scope.query == ''){
                $scope.refresh();
            }
             // take care of the sorting order
            if ($scope.sortingOrder !== '') {
                $scope.users = $filter('orderBy')($scope.users, $scope.sortingOrder, $scope.reverse);
            }
            $scope.currentPage = 0;
            $scope.groupToPages($scope.users);
        }
        // change sorting order
        $scope.sort_by = function(newSortingOrder) {
            
            if ($scope.sortingOrder == newSortingOrder)
                $scope.reverse = !$scope.reverse;

            $scope.sortingOrder = newSortingOrder;
            $scope.users = $filter('orderBy')($scope.users, $scope.sortingOrder, $scope.reverse);
        }
        

        
        //pagination
            // calculate page in place
            $scope.groupToPages = function (users) {
                $scope.pagedItems = [];
               
                for (var i = 0; i < users.length; i++) {
                    if (i % $scope.itemsPerPage === 0) {
                        $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)] = [ users[i] ];
                    } else {
                        $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)].push(users[i]);
                    }
                }
            };

            $scope.range = function (start, end) {
                var ret = [];
                if (!end) {
                    end = start;
                    start = 0;
                }
                for (var i = start; i < end; i++) {
                    ret.push(i);
                }
                return ret;
            };

            $scope.prevPage = function () {
                if ($scope.currentPage > 0) {
                    $scope.currentPage--;
                }
            };

            $scope.nextPage = function () {
                if ($scope.currentPage < $scope.pagedItems.length - 1) {
                    $scope.currentPage++;
                }
            };

            $scope.setPage = function () {
                $scope.currentPage = this.n;
            };

        //pagination
        
	$scope.refresh = function(){
                $scope.addedit= false;
                $scope.list= true;
                $scope.viewuser= false;
		$http.get(newlocation+'admin_user/all_user').success(function(data){
                    $scope.users = data;
                    if ($scope.sortingOrder !== '') {
                        $scope.users = $filter('orderBy')($scope.users, $scope.sortingOrder, $scope.reverse);
                        $scope.currentPage = 0;
                        $scope.groupToPages($scope.users);
                    }
                }).error(function(data){
                        $scope.users = data;
                });
                
               
	}
       
        $scope.refresh();
        $scope.cancel = function (name) {
             var element = angular.element(name);
             element.modal('hide');
        };
        $scope.addUser = function(){
            $scope.addedit= true;
            $scope.list= false;
            $scope.viewuser= false;
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
                           
                            $scope.refresh();
                    }).error(function(data){
                            alert(data.error);
                    });
                }//end of else
		
	}
	
	$scope.viewUser = function(user){
               
		$scope.addedit= false;
                $scope.viewuser= true;
                $scope.list= false;
                $scope.ngFname = user.fname;
                $scope.ngEmail = user.email;
                $scope.ngID = user.user_id;
	}
	
	$scope.updateUser = function(user){
                
		$scope.addedit= true;
                $scope.list= false;
                $scope.ngFname = user.fname;
                $scope.ngEmail = user.email;
                $scope.ngID = user.user_id;
                
	}
   

});