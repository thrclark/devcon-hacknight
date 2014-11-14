<!-- Modal -->

<div class="modal fade" id="activeDates" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Active Date Range</h4>
            </div>
            <div class="modal-body">
             
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Set Dates</label>
                        <div class="col-sm-10">
                               <div class="input-daterange input-group" id="activeDateRange">
                            <input type="text" class="form-control input-sm input-sm " name="start" />
                            <span class="input-group-addon">to</span>
                            <input type="text" class="form-control input-sm input-sm " name="end" placeholder="(optional)" />
                        </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Inactivate Starting Today </label>
                            </div>
                        </div>
                    </div>
                  
                </form>
            </div>
            <div class="modal-footer"> <a href="" class="btn btn-primary" data-dismiss="modal">Save</a> <a href="" class="btn btn-default" data-dismiss="modal">Cancel</a> </div>
        </div>
    </div>
</div>

<!-- end Modal --> 