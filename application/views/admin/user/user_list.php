<!-- Begin page content -->
<div class="" data-ng-app="userApp">
    <div class="container vb-body vb_admin_wrapper" data-ng-controller="userCtrl">
        <div class="row vb_admin_body">
              <?php $this->view('admin/dashboard/dashboard_menu'); ?>
       
       
        <div class="col-md-9 vb_admin_left" data-ng-show="list== true" >
             <div style="text-align:center">
                 <h4 class="vb_admin_heading adbd-uppercase">User List</h4>

                <h5 data-ng-show="users.length == 0">No user yet</h5>
                <h5 data-ng-show="users.length != 0">{{ users.length}} User Found</h5>
            </div>

            <button type="button" class="btn adbd-btn-1" ng-click="addUser()"><span class="glyphicon glyphicon-plus"></span></button>
             <input type="text" ng-model="query" ng-change="search()" class="input-large search-query pull-right adbd_input" placeholder="Search">
            <table class="table vb_admin_table" data-ng-show="users.length > 0">
                <thead>
                <tr>
                   
                    <th>Fname <a ng-click="sort_by('fname')">>></a></th>
                    <th>Role</th>
                    <th>Active</th>
                    
                    <th style="width:80px; text-align:center">Email<a ng-click="sort_by('email')">>></a></th>
                    <th style="width:80px; text-align:center">Edit</th>
                    <th style="width:80px; text-align:center">View</th>
                </tr>
                </thead>
                <tbody>
                <tr data-ng-repeat="item in pagedItems[currentPage] | orderBy:sortingOrder:reverse track by $index">
                    
                    <td>{{ item.fname }}</td>
                    <td> <span ng-click="updateAdmin(1,item)" data-ng-show="item.is_admin == 0">No</span><span ng-click="updateAdmin(0,item)" data-ng-show="item.is_admin == 1">Yes</span></td>
                    <td> <span ng-click="updateActive(1,item)" data-ng-show="item.is_active == 0">No</span><span ng-click="updateActive(0,item)" data-ng-show="item.is_active == 1">Yes</span></td>
                    <td>{{ item.email }}</td>
                    <td style="text-align:center"><a class="btn" ng-click="updateUser(item)">Edit</a></td>
                    <td style="text-align:center"><a class="btn" ng-click="viewUser(item)">View</a></td>
                </tr>
                </tbody>
                 
            </table>
              <div class="pagination pull-right vb_admin_pagination">
                  <ul class="list-inline">
                                <li ng-class="{disabled: currentPage == 0}">
                                    <a href ng-click="prevPage()">« Prev</a>
                                </li>
                                <li ng-repeat="n in range(pagedItems.length)"
                                    ng-class="{active: n == currentPage}"
                                ng-click="setPage()">
                                    <a href ng-bind="n + 1">1</a>
                                </li>
                                <li ng-class="{disabled: currentPage == pagedItems.length - 1}">
                                    <a href ng-click="nextPage()">Next »</a>
                                </li>
                            </ul>
              </div>
        </div>
        <?php $this->view('admin/user/add_edit_user'); ?>
        <?php $this->view('admin/user/view_user'); ?>
        </div><!--row-->
        
    </div>
</div>
<!-- Modal -->

