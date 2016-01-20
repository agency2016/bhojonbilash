<!-- Begin page content -->
<div class="vb_admin_wrapper" data-ng-app="userApp">
    <div class="container" data-ng-controller="userCtrl">
        <div class="row">
              <?php $this->view('admin/dashboard/dashboard_menu'); ?>
       
       
        <div class="col-md-9" data-ng-show="list== true" >
             <div style="text-align:center">
                <h1>User List</h1>

                <h2 data-ng-show="users.length == 0">No user yet</h2>
                <h3 data-ng-show="users.length != 0">{{ users.length}} User Found</h3>
            </div>

            <button type="button" class="btn btn-primary btn-lg" ng-click="addUser()"><span class="glyphicon glyphicon-plus"></span></button>

            <table class="table table-hover" data-ng-show="users.length > 0">
                <thead>
                <tr>
                   
                    <th>Fname</th>
                    <th>Lname</th>
                    <th style="width:80px; text-align:center">Email</th>
                    <th style="width:80px; text-align:center">Edit</th>
                    <th style="width:80px; text-align:center">Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr data-ng-repeat="task in users track by $index">
                    
                    <td>{{ users[$index].fname }}</td>
                    <td>{{ users[$index].lname }}</td>
                    <td>{{ users[$index].email }}</td>
                   <td style="text-align:center"><a class="btn" ng-click="updateUser(users[$index])">Edit</a></td>
                    <td style="text-align:center"><a class="btn" ng-click="deleteUser(users[$index])" ng-confirm-click="Are you sure?">Delete</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <?php $this->view('admin/user/add_edit_user'); ?>
        </div><!--row-->
        
    </div>
</div>
<!-- Modal -->

