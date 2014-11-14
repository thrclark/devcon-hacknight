<!-- Modal -->

<style type="text/css">
#rowColors {
	min-width: 360px;
}
#rowColors .checkbox {
	border-radius: 5px;
	margin-bottom: 5px;
	margin-left: -5px;
	min-height: 10px;
	padding-top: 3px;
	max-width: 160px;
}
#rowColors .checkbox input {
	margin-left: -15px;
}
</style>

<div class="modal fade" id="actionlist-prefs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Action List Prefrences</h4>
            </div>
            <div class="modal-body">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#prefs-general" data-toggle="tab">General</a></li>
                    <li><a href="#prefs-notifications" data-toggle="tab">Notifications</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active form-horizontal" id="prefs-general">
                        <section>
                            <h4>General</h4>
                            <hr />
                            <div class="form-group">
                            <div class="col-sm-3 form-control-static text-right"><strong>Displayed Columns:</strong></div>
                                <div class="col-md-8">
                                    <fieldset>
                                        <legend class="sr-only"> Select:</legend>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="checkbox">
                                                    <label title="Document Type">
                                                        <input type="checkbox" value="" checked="">
                                                        Document Type </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label title="Title">
                                                        <input type="checkbox" value="" checked="">
                                                        Title </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label title="Action Requested">
                                                        <input type="checkbox" value="" checked="">
                                                        Action Requested </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label title="Initiator">
                                                        <input type="checkbox" value="" checked="">
                                                        Initiator </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="checkbox">
                                                    <label title="Delegator">
                                                        <input type="checkbox" value="">
                                                        Delegator </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label title="Date Created">
                                                        <input type="checkbox" value="" checked="">
                                                        Date Created </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label title="Date Approved">
                                                        <input type="checkbox" value="" checked="">
                                                        Date Approved </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label title="Current Route Node">
                                                        <input type="checkbox" value="" checked="">
                                                        Current Route Node </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="checkbox">
                                                    <label title="WorkGroup Request">
                                                        <input type="checkbox" value="">
                                                        WorkGroup Request </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label title="Document Route Status">
                                                        <input type="checkbox" value="" checked="">
                                                        Document Route Status </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="refreshRate" class="col-sm-3 control-label">List Refresh Rate</label>
                                <div class="col-sm-6">
                                    <select class="form-control input-sm" id="refreshRate">
                                        <option>never</option>
                                        <option>1 min</option>
                                        <option>5 min</option>
                                        <option>10 min</option>
                                        <option>1 hour</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="delegator" class="col-sm-3 control-label">Delegator Filter</label>
                                <div class="col-sm-6">
                                    <select class="form-control input-sm" id="delegator">
                                        <option value="Secondary Delegators only on Filter Page">Secondary Delegators only on Filter Page</option>
                                        <option value="Secondary Delegators on Action List Page" selected="selected">Secondary Delegators on Action List Page</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="primarydelegator" class="col-sm-3 control-label">Primary Deligate Filter</label>
                                <div class="col-sm-6">
                                    <select class="form-control input-sm" id="primarydelegator">
                                        <option value="Primary Delegates only on Filter Page">Primary Delegates only on Filter Page</option>
                                        <option value="Primary Delegates on Action List Page" selected="selected">Primary Delegates on Action List Page</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3" >
                                    <div class="checkbox" data-role="" data-label="">
                                        <fieldset>
                                            <legend class="sr-only">Route Status Highlighting</legend>
                                            <label title="Show Route Status Highlighting">
                                                <input type="checkbox" id="routestatushighlight" name="" class="">
                                                Show Route Status Highlighting</label>
                                        </fieldset>
                                        <div class="row well well-sm" id="rowColors" style="display: none;margin-left: 0px;
margin-top: 10px;">
                                            <fieldset>
                                                <legend class="sr-only">Select</legend>
                                                <div class="col-sm-4">
                                                    <div class="checkbox" style="background: #B6F2C3;">
                                                        <label title="Saved">
                                                            <input type="checkbox" value="" checked="">
                                                            Saved</label>
                                                    </div>
                                                    <div class="checkbox" style="background:#C0BCEE">
                                                        <label title="Initiated">
                                                            <input type="checkbox" value="" checked="">
                                                            Initiated</label>
                                                    </div>
                                                    <div class="checkbox" style="background:#FFF1C0">
                                                        <label title="Disapproved">
                                                            <input type="checkbox" value="" checked="">
                                                            Disapproved</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkbox" style="background:#FFC6C0">
                                                        <label title="Enroute">
                                                            <input type="checkbox" value="" checked="">
                                                            Enroute</label>
                                                    </div>
                                                    <div class="checkbox" style="background:#A6C1E8">
                                                        <label title="Approved">
                                                            <input type="checkbox" value="" checked="">
                                                            Approved</label>
                                                    </div>
                                                    <div class="checkbox" style="background:#FFDEA6">
                                                        <label title="Final">
                                                            <input type="checkbox" value="" checked="">
                                                            Final</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="checkbox" style="background:#BDF7EA">
                                                        <label title="Processed">
                                                            <input type="checkbox" value="" checked="">
                                                            Processed</label>
                                                    </div>
                                                    <div class="checkbox" style="background:#C3AEAE">
                                                        <label title="Exception">
                                                            <input type="checkbox" value="" checked="">
                                                            Exception</label>
                                                    </div>
                                                    <div class="checkbox" style="background:#EFE4FB">
                                                        <label title="Canceled">
                                                            <input type="checkbox" value="" checked="">
                                                            Canceled</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-7">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" checked="checked">
                                            Show Completed Actions Panel </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-7">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" checked="checked">
                                            Allow Bulk Actions </label>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane form-horizontal" id="prefs-notifications">
                        <section>
                            <h4>Email Notifications</h4>
                            <hr />
                            <div class="form-group">
                                <label for="recieveemail" class="col-sm-3 control-label">Receive Emails</label>
                                <div class="col-sm-6">
                                    <select name="privileges" id="recieveemail" class="form-control input-sm">
                                        <option value="no">Never</option>
                                        <option value="emp">Daily</option>
                                        <option value="emp">Weekly</option>
                                        <option value="emp">Immediately</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                               <div class="col-sm-3 form-control-static text-right"><strong>Send Emails For:</strong></div>
                                <div class="col-sm-9">
                                    <fieldset>
                                        <legend class="sr-only">Select: </legend>
                                        <div class="checkbox">
                                            <label title="Complete">
                                                <input type="checkbox">
                                                Complete</label>
                                        </div>
                                        <div class="checkbox">
                                            <label title="Approve">
                                                <input type="checkbox">
                                                Approve</label>
                                        </div>
                                        <div class="checkbox">
                                            <label title="Acknowledge">
                                                <input type="checkbox">
                                                Acknowledge</label>
                                        </div>
                                        <div class="checkbox">
                                            <label title="FYI">
                                                <input type="checkbox">
                                                FYI</label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <h4> Doctype Notifications</h4> 
                            
                            
                            <table class="table table-condensed">
                            
                          <thead>
   <tr>
                                                <th>Doc Type</th>
                                                <th class="">Frequency</th>
                                                <th class="" style="width:30px;">Actions</th>
                                            </tr>
                                            
</thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td>Identity Management Role</td>
                                                <td class="">Weekly</td>
                                                <td class=""><a href="#" class="btn btn-xs btn-default">Delete<span class="sr-only"> Identity Management Role Notification</span></a></td>
                                            </tr>
                                            <tr>
                                                <td>Term Maintenance </td>
                                                <td class="">Weekly</td>
                                                <td class=""><a href="#" class="btn btn-xs btn-default">Delete<span class="sr-only"> Term Maintenance Notification</span></a></td>
                                            </tr>
                                            <tr>
                                                <td>State Maintenance</td>
                                                <td class="">Daily</td>
                                                <td class=""><a href="#" class="btn btn-xs btn-default">Delete<span class="sr-only"> State Maintenance Notification</span></a></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="">&nbsp;</td>
                                                <td class=""><a href="#" class="btn btn-xs btn-default"> <span class="icon-plus" style="font-size:10px"></span>Add <span class="sr-only"> Notification</span></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                        </section>
                    </div>
                </div>
            </div>
            <div class="modal-footer"> <a href="" class="btn btn-primary" data-dismiss="">Save Changes</a> <a href="" class="btn btn-default" data-dismiss="modal">Cancel</a> </div>
        </div>
    </div>
</div>
<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
document.getElementById('routestatushighlight').onchange = function() {
    document.getElementById('rowColors').style.display = this.checked ? 'block' : 'none';
};

}//]]>  

</script> 

<!-- end Modal --> 