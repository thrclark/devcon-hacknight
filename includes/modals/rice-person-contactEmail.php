<!-- Modal -->

<div class="modal fade" id="person-addEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Contact Info</h4>
            </div>
            <div class="modal-body">
                <h4> Add Contact Email</h4>
                <hr />
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="emailType" class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-8">
                            <select id="emailType" name="emailType" class="form-control input-sm" data-role="Control" ng-model="Type">
                                <option value="" selected="selected"></option>
                                <option value="Other">Other</option>
                                <option value="Home">Home</option>
                                <option value="Work">Work</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-8">
                            <input id="Email" type="text" name="Email" class="form-control input-sm" data-role="Control" ng-model="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailDefault" class="col-sm-3 control-label">Default</label>
                        <div class="col-sm-8">
                            <select id="emailDefault" name="Default" class="form-control input-sm" data-role="Control" ng-model="Default">
                                <option value="" selected="selected"></option>
                                <option value="Yes">Yes</option>
                                <option value="Yes">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailActive" class="col-sm-3 control-label">Active</label>
                        <div class="col-sm-8">
                            <select id="emailActive" name="Active" class="form-control input-sm" data-role="Control" ng-model="Active">
                                <option value="" selected="selected"></option>
                                <option value="Yes">Yes</option>
                                <option value="Yes">No</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer"> <a href="" class="btn btn-primary" data-dismiss="modal" ng-click="addEmail()">Add Email</a> <a href="" class="btn btn-default" data-dismiss="modal">Cancel</a> </div>
        </div>
    </div>
</div>

<!-- end Modal --> 