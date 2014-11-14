<?php
$section = '';
$page = 'template';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kuali</title>
<?php include ('includes/resources/styles.php') ?>

</head>

<body>
<div id="wrapper">
    <?php include ('includes/page-components/rice-app-header.php') ?>
    <?php include ('includes/page-components/rice-app-toolbar.php') ?>
    <div class="container">
        <div id="page-wrapper">
            <main class="">
                <div class="row">
                    <div class="col-lg-12">
                        <header>
                            <div class="row">
                                <div class="col-xs-6">
                                    <h2 class="uif-headerText"><span class="uif-headerText-span"> Action List </span></h2>
                                </div>
                                <div class="col-xs-6 text-right" style="padding-top:20px"> <a class="uif-actionLink" tabindex="0" data-role="Action" data-toggle="modal" data-target="#actionlist-prefs" data-submit_data="" data-dismiss="modal"> <span aria-hidden="true" class="icon-cog" style="color:#999"></span> Preferences</a></div>
                            </div>
                        </header>
                    </div>
                    <div class="col-lg-12">
                        <ul id="tabs1" class="nav nav-tabs" data-tabs="tabs" role="tablist">
                            <li class="active" role="tab" aria-controls="actions-current"><a href="#actions-current" data-toggle="tab"><span class="hidden-xs">Action</span> Requests</a></li>
                            <li role="tab" aria-controls="actions-completed"><a href="#actions-completed" data-toggle="tab">Completed <span class="hidden-xs">Actions</span></a></li>
                        </ul>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="actions-current">
                                <h4 class="hidden-xs">Action Requests</h4>
                                <table class="table table-condensed table-bordered uif-actionlist-current table-has-actions" data-mode="stack">
                                    <caption class="sr-only">
                                    The following items require your action:
                                    </caption>
                                    <thead>
                                        <tr>
                                            <th class="hidden-xs"><span class="sr-only">Document Selection for Bulk Actions</span></th>
                                            <th><span>Doc Id</span></th>
                                            <th><span>Type</span></th>
                                            <th><span>Title</span></th>
                                            <th><span>Routing</span></th>
                                            <th><span>Action Request</span></th>
                                            <th><span>Initiator</span></th>
                                            <th><span>Current Status</span></th>
                                            <th><span class="sr-only">View Details</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" disabled>
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3280 </a></td>
                                            <td>Proposal Development Document</td>
                                            <td> Cognitive Processin; Proposal No: 1; PI: HIRAM  EUBANK; </td>
                                            <td>Saved</td>
                                            <td> Complete </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" disabled>
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3283 </a></td>
                                            <td>KC Award</td>
                                            <td> KC Award - Test Award </td>
                                            <td>Saved</td>
                                            <td> Complete </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3284 </a></td>
                                            <td>KC Award</td>
                                            <td> KC Award </td>
                                            <td>Saved</td>
                                            <td> FYI </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" disabled>
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3285 </a></td>
                                            <td>KC Award</td>
                                            <td> KC Award - Test Award </td>
                                            <td>Saved</td>
                                            <td> Complete </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" disabled>
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3288 </a></td>
                                            <td>KC Protocol</td>
                                            <td> KC Protocol - Thurman Protocol </td>
                                            <td>Saved</td>
                                            <td> Complete </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3291 </a></td>
                                            <td>KC Protocol</td>
                                            <td> KC Protocol - Test </td>
                                            <td>Enroute</td>
                                            <td> Approve </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> IRBReview </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3292 </a></td>
                                            <td>KC Protocol Review</td>
                                            <td> KC Protocol Review - Slusar/Protocol# 1408000028 </td>
                                            <td>Enroute</td>
                                            <td> Approve </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> IRBAdminReview </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3293 </a></td>
                                            <td>KC Protocol Review</td>
                                            <td> KC Protocol Review - Slusar/Protocol# 1408000028 </td>
                                            <td>Enroute</td>
                                            <td> Approve </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> OnlineReviewer </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3296 </a></td>
                                            <td>KC Institutional Proposal</td>
                                            <td> KC Institutional Proposal - test institutional proposal </td>
                                            <td>Saved</td>
                                            <td> FYI </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3298 </a></td>
                                            <td>Proposal Development Document</td>
                                            <td> The effects of rese; Proposal No: 3; PI: Nicholas  Majors; Sponsor: NIH </td>
                                            <td>Saved</td>
                                            <td> Aknowledge </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" disabled>
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3303 </a></td>
                                            <td>KC Protocol</td>
                                            <td> KC Protocol - vbvbv </td>
                                            <td>Saved</td>
                                            <td> Complete </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3309 </a></td>
                                            <td>Proposal Development Document</td>
                                            <td> QA Test; Proposal No: 4; PI: admin  admin; Sponsor: Air Force Systems - ESD</td>
                                            <td>Enroute</td>
                                            <td> Approve </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3311 </a></td>
                                            <td>KC Protocol</td>
                                            <td> KC Protocol - Test Award </td>
                                            <td>Saved</td>
                                            <td> Aknowledge </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3315 </a></td>
                                            <td>KC Protocol</td>
                                            <td> KC Protocol - Test IRB Protocol - rls </td>
                                            <td>Enroute</td>
                                            <td> Approve </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> IRBReview </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3316 </a></td>
                                            <td>KC Protocol Review</td>
                                            <td> KC Protocol Review - MCAFEE/Protocol# 1408000060 </td>
                                            <td>Enroute</td>
                                            <td> Approve </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> OnlineReviewer </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3321 </a></td>
                                            <td>KC Institutional Proposal</td>
                                            <td> KC Institutional Proposal - QA Test </td>
                                            <td>Enroute</td>
                                            <td> Approve </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3322 </a></td>
                                            <td>KC Protocol</td>
                                            <td> KC Protocol - Test </td>
                                            <td>Saved</td>
                                            <td> Complete </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" disabled>
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3326 </a></td>
                                            <td>KC Institutional Proposal</td>
                                            <td> KC Institutional Proposal - Test </td>
                                            <td>Enroute</td>
                                            <td> Approve </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3328 </a></td>
                                            <td>KC Award</td>
                                            <td> KC Award - QA Test </td>
                                            <td>Enroute</td>
                                            <td> Approve </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" disabled>
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3341 </a></td>
                                            <td>KC IACUC Protocol</td>
                                            <td> KC IACUC Protocol - 8/12 test src descr </td>
                                            <td>Saved</td>
                                            <td> Complete </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3355 </a></td>
                                            <td>Proposal Development Document</td>
                                            <td> Investigator-Initia; Proposal No: 10; PI: null; Sponsor: U.S. Department of Justice; Due Date: null </td>
                                            <td>Saved</td>
                                            <td> Aknowledge </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark [Doc id] for Bulk Actions</span>
                                                        <input type="checkbox" disabled>
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#">3357 </a></td>
                                            <td>Proposal Development Document</td>
                                            <td> Testing S2S; Proposal No: 11; PI: Inez  Chew; Sponsor: NASA - Ames Research Center; Due Date: null </td>
                                            <td>Saved</td>
                                            <td> Complete </td>
                                            <td><a href="#" data-toggle="popover-x" data-target="#myPopover1" data-placement="bottom"> stgetz<span class="icon-info icon-inquiryLink"></span></a></td>
                                            <td> Initiated </td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#actionlist-details"> Details <span class="sr-only"> for Document [Doc Id]</span></a></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="9" class="hidden-xs"><div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> Bulk Actions <span class="caret"></span> </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Select Only FYI Requests</a></li>
                                                        <li><a href="#">Select All Available</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Take Selected Actions</a></li>
                                                    </ul>
                                                </div></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane" id="actions-completed">
                                <h4 class="hidden-xs"> Completed Actions</h4>
                                <table class="table table-condensed table-bordered uif-actionlist-completed table-has-actions" data-mode="stack">
                                    <caption class="sr-only">
                                    You have executed action on the following items:
                                    </caption>
                                    <thead>
                                        <tr>
                                            <th class="hidden-xs"><span class="sr-only">Select</span></th>
                                            <th> <span>Id</span></th>
                                            <th> <span>Type </span></th>
                                            <th> <span>Title </span></th>
                                            <th> <span>Route Status </span></th>
                                            <th> <span>Action Request </span></th>
                                            <th> <span>Delegator </span></th>
                                            <th> <span>Date Created </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark for Removal</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#"> 3350 </a></td>
                                            <td>KC IACUC Protocol</td>
                                            <td> KC IACUC Protocol - animal protocol&nbsp; </td>
                                            <td>CANCELED</td>
                                            <td> Approve </td>
                                            <td>&nbsp;</td>
                                            <td> 09:08 AM 08/19/2014&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark for Removal</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#"> 3399 </a></td>
                                            <td>KC Protocol</td>
                                            <td> KC Protocol - Test&nbsp; </td>
                                            <td>FINAL</td>
                                            <td> Approve </td>
                                            <td>&nbsp;</td>
                                            <td> 04:10 PM 08/19/2014&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark for Removal</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#"> 3431 </a></td>
                                            <td>KC Protocol</td>
                                            <td> KC Protocol - Testing Letter&nbsp; </td>
                                            <td>FINAL</td>
                                            <td> Approve </td>
                                            <td>&nbsp;</td>
                                            <td> 09:32 AM 08/20/2014&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark for Removal</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#"> 3432 </a></td>
                                            <td>KC Protocol</td>
                                            <td> KC Protocol - Testing letter&nbsp; </td>
                                            <td>FINAL</td>
                                            <td> Approve </td>
                                            <td>&nbsp;</td>
                                            <td> 09:35 AM 08/20/2014&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark for Removal</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#"> 3434 </a></td>
                                            <td>Species Maintenance Document</td>
                                            <td> New IacucSpecies - 8/20/14 src test add species &nbsp; </td>
                                            <td>FINAL</td>
                                            <td> Complete </td>
                                            <td>&nbsp;</td>
                                            <td> 09:55 AM 08/20/2014&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark for Removal</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#"> 3437 </a></td>
                                            <td>Species Maintenance Document</td>
                                            <td> New IacucSpecies - Adding Water Buffalo &nbsp; </td>
                                            <td>FINAL</td>
                                            <td> Complete </td>
                                            <td>&nbsp;</td>
                                            <td> 09:56 AM 08/20/2014&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark for Removal</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#"> 3557 </a></td>
                                            <td>KC Subaward</td>
                                            <td> KC Subaward - KF Test Subaward&nbsp; </td>
                                            <td>FINAL</td>
                                            <td> Complete </td>
                                            <td>&nbsp;</td>
                                            <td> 06:54 PM 08/21/2014&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark for Removal</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#"> 3558 </a></td>
                                            <td>KC Award</td>
                                            <td> KC Award - Kaci Test Award for Wednesday Demo&nbsp; </td>
                                            <td>FINAL</td>
                                            <td> Complete </td>
                                            <td>&nbsp;</td>
                                            <td> 06:55 PM 08/21/2014&nbsp; </td>
                                        </tr>
                                        <tr>
                                            <td class="hidden-xs"><div class="checkbox">
                                                    <label><span class="sr-only">Mark for Removal</span>
                                                        <input type="checkbox" class="checkme">
                                                    </label>
                                                </div></td>
                                            <td class="item-featured"><a href="#"> 3560 </a></td>
                                            <td>KC Award</td>
                                            <td> KC Award - Kaci Test Award for Wednesday Demo&nbsp; </td>
                                            <td>FINAL</td>
                                            <td> Complete </td>
                                            <td>&nbsp;</td>
                                            <td> 07:31 PM 08/21/2014&nbsp; </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="8" class="hidden-xs"><div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Clear List <span class="caret"></span> </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Select All</a></li>
                                                        <li><a href="#">Select None</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Clear Selected</a></li>
                                                    </ul>
                                                </div></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div id="myPopover1" class="popover popover-default">
                            <div class="arrow"></div>
                            <h3 class="popover-title"><span class="close pull-right" data-dismiss="popover-x">&times;</span><span class="lead">Getz, Stan </span></h3>
                            <div class="popover-content">
                                <table class="table table-condensed">
                                    <tbody>
                                        <tr>
                                            <td><strong>Person ID</strong></td>
                                            <td>000-12613</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Unit ID</strong></td>
                                            <td>BA-003: Biology</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Affiliation(s)</strong></td>
                                            <td>Staff: BL-Bloomington <br>
                                                Student: CO-Columbus</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email</strong></td>
                                            <td><a href="#">sgetz@jacobsschool.edu</a></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone</strong></td>
                                            <td>123-345-5678</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class=""> View Full Record </a></div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<!--Modal Dialogs-->
<?php include ('includes/modals/rice-actionlist-prefs.php') ?>

<?php include ('includes/modals/rice-actionlist-details.php') ?>

<!--Footer Scripts-->
<?php include ('includes/resources/rice-footer-scripts.php') ?>
<!--View Specific Scripts--> 
<script type="text/javascript" class="init">
    $(document).ready(function() {
        $('table.uif-actionlist-current, table.uif-actionlist-completed').dataTable();
    });
</script>
</body>
</html>
