<!-- Modal -->

<div class="modal fade" id="adHoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Ad Hoc Routing</h4>
            </div>
           <div class="modal-body">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#red" data-toggle="tab">Person</a></li>
                    <li><a href="#orange" data-toggle="tab">Group</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="red">
                        <header>
                            <div class="row">
                                <div class="col-xs-6">
                                    <h4>Person</h4>
                                </div>
                                <div class="col-xs-6 section-controls"> <a href="#" class="btn btn-xs btn-default" tabindex="0" data-role="Action" data-toggle="modal" data-target="#person-addContact" data-submit_data="" data-dismiss=""><span class="icon-plus"></span> Add Person</a></div>
                            </div>
                        </header>
                        <table id="u569ish_line0" class="table table-condensed table-has-actions" role="presentation">
                            <thead>
                                <tr>
                                    <th scope="row">Action Requested</th>
                                    <th>Person</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Approve</td>
                                    <td>jgiles</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>Approve</td>
                                    <td>tpetty</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>Approve</td>
                                    <td>frastaire</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete">Delete</a></td>
                                </tr>
                                <tr>
                                    <td>Approve</td>
                                    <td>jcoltrane</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="orange">
                        <header>
                            <div class="row">
                                <div class="col-xs-6">
                                    <h4>Group</h4>
                                </div>
                                <div class="col-xs-6 section-controls"> <a href="#" class="btn btn-xs btn-default" tabindex="0" data-role="Action" data-toggle="modal" data-target="#person-addContact" data-submit_data="" data-dismiss=""><span class="icon-plus"></span> Add Group</a></div>
                            </div>
                        </header>
                        <table id="u569ish_line0" class="table table-condensed table-has-actions" role="presentation">
                            <thead>
                                <tr>
                                    <th scope="row">Action Requested</th>
                                    <th>Namespace Code</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="">Approve</td>
                                    <td class="">Kuali</td>
                                    <td class="">TK-SUPERVISORS</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete">Delete</a></td>
                                </tr>
                                <tr>
                                    <td class="">Approve</td>
                                    <td class="">Kuali</td>
                                    <td class="">TK-MAINTENANCE</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-toggle="dropdown"> Save </button>
                <button type="button" class="btn btn-default" data-toggle="dropdown"> Cancel </button>
            </div>
        </div>
    </div>
</div>

<!-- end Modal --> 