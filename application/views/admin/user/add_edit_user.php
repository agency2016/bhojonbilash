
<div class="col-md-9 vb_admin_left" data-ng-show="addedit== true">
    <form style="form-inline" role="form" ng-submit="addeditUserSubmit()">
        <div class="form-group col-md-10">
            <input type="hidden" class="form-control" value="0" name="id" ng-model="ngID">
            <input type="text" class="form-control" name="fname" ng-model="ngFname" placeholder="fname" required>
            <input type="text" class="form-control" name="email" ng-model="ngEmail" placeholder="Enter email" required>
        </div>
        <button type="submit" class="btn btn-ride btn-1"><span class="glyphicon glyphicon-plus"></span></button>
    </form>
</div>

            