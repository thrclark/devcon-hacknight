<!-- Modal -->

<div class="modal fade" id="person-addContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Contact Info</h4>
            </div>
            <div class="modal-body">
                <h4> Add Contact Name</h4>
                <hr />
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="NameCode" class="col-sm-3 control-label">Name Code</label>
                        <div class="col-sm-8">
                            <select id="NameCode" name="NameCode" class="form-control input-sm" data-role="Control" ng-model="NameCode">
                                <option value="" selected="selected"></option>
                                <option value="Other">Other</option>
                                <option value="Preferred">Preferred</option>
                                <option value="Primary" selected="selected">Primary</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Prefix" class="col-sm-3 control-label">Prefix</label>
                        <div class="col-sm-8">
                            <select id="Prefix" name="Prefix" class="form-control input-sm" data-role="Control" ng-model="Prefix">
                                <option value="" selected="selected"></option>
                                <option value="Ms">Ms</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Mr">Mr</option>
                                <option value="Dr">Dr</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="First" class="col-sm-3 control-label">First</label>
                        <div class="col-sm-8">
                            <input id="First" type="text" name="First" class="form-control input-sm" data-role="Control" ng-model="First">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Middle" class="col-sm-3 control-label">Middle</label>
                        <div class="col-sm-8">
                            <input id="Middle" type="text" name="Middle" class="form-control input-sm" data-role="Control" ng-model="Middle">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Last" class="col-sm-3 control-label">Last</label>
                        <div class="col-sm-8">
                            <input id="Last" type="text" name="Last" class="form-control input-sm" data-role="Control" ng-model="Last">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Suffix" class="col-sm-3 control-label">Suffix</label>
                        <div class="col-sm-8">
                            <select id="Suffix" name="Suffix" class="form-control input-sm" data-role="Control" ng-model="Suffix">
                                <option value="" selected="selected"></option>
                                <option value="Jr">Jr</option>
                                <option value="Sr">Sr</option>
                                <option value="Mr">Mr</option>
                                <option value="Md">Md</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Default" class="col-sm-3 control-label">Default</label>
                        <div class="col-sm-8">
                            <select id="Default" name="Default" class="form-control input-sm" data-role="Control" ng-model="Default">
                                <option value="" selected="selected"></option>
                                <option value="Yes">Yes</option>
                                <option value="Yes">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Active" class="col-sm-3 control-label">Active</label>
                        <div class="col-sm-8">
                            <select id="Active" name="Active" class="form-control input-sm" data-role="Control" ng-model="Active">
                                <option value="" selected="selected"></option>
                                <option value="Yes">Yes</option>
                                <option value="Yes">No</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer"> <a href="" class="btn btn-primary" data-dismiss="modal" ng-click="addPerson()">Add Contact</a> <a href="" class="btn btn-default" data-dismiss="modal">Cancel</a> </div>
        </div>
    </div>
</div>

<!-- end Modal --> 