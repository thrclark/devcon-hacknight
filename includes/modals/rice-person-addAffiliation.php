<!-- Modal -->

<div class="modal fade" id="person-addAffiliation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Affiliation</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal ng-pristine ng-valid" role="form">
                    <div class="form-group">
                        <label for="NameCode" class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-8">
                            <select name="inputField1" size="1" class="form-control input-sm input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                                <option value=""></option>
                                <option value="AFLT">Affiliate</option>
                                <option value="FCLTY">Faculty</option>
                                <option value="STAFF">Staff</option>
                                <option value="STDNT">Student</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Prefix" class="col-sm-3 control-label">Campus Code</label>
                        <div class="col-sm-8">
                            <select name="inputField1" size="1" class="form-control input-sm input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                                <option value=""></option>
                                <option value="BL">BL - BLOOMINGTON</option>
                                <option value="BX">BX - BLGTN OFF CAMPUS</option>
                                <option value="CO">CO - COLUMBUS</option>
                                <option value="EA">EA - EAST-RICHMOND</option>
                                <option value="FW">FW - FORT WAYNE</option>
                                <option value="IN">IN - INDIANAPOLIS</option>
                                <option value="KO">KO - KOKOMO</option>
                                <option value="NW">NW - NORTHWEST-GARY</option>
                                <option value="OC">OC - OFF CAMPUS</option>
                                <option value="SB">SB - SOUTH BEND</option>
                                <option value="SE">SE - SOUTHEAST-NEW ALBANY</option>
                                <option value="UA">UA - UNIVERSITY ADMINISTRATION</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Default" class="col-sm-3 control-label">Default</label>
                        <div class="col-sm-8">
                            <select id="Default" name="Default" class="form-control input-sm ng-pristine ng-valid" data-role="Control" ng-model="Default">
                                <option value="" selected="selected"></option>
                                <option value="Yes">Yes</option>
                                <option value="Yes">No</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer"> <a href="" class="btn btn-primary" data-dismiss="">Add Affiliation</a> <a href="" class="btn btn-default" data-dismiss="modal">Cancel</a> </div>
        </div>
    </div>
</div>

<!-- end Modal --> 