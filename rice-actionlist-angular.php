<?php
$section = '';
$page = 'template';
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kuali</title>
<?php include ('includes/resources/styles.php') ?>
<!-- Angular Core -->
<script src="js/angular.min.js"></script>
<script src="js/rice-angular-controllers.js"></script>
<script src="js/services.js"></script>
</head>

<body>
<div id="wrapper">
    <?php include ('includes/page-components/rice-app-header.php') ?>
    <?php include ('includes/page-components/rice-app-toolbar.php') ?>
    <div class="container">
        <div id="page-wrapper">
            <main class="">
                <header>
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>Action List</h2>
                        </div>
                        <div class="col-xs-6 section-controls"> <a href="#" class="btn btn-xs btn-default" tabindex="0" data-role="Action" data-toggle="modal" data-target="#person-addAffiliation" data-submit_data="" data-dismiss=""><span aria-hidden="true" class="icon-cog" style="color:#999"></span> Preferences</a></div>
                    </div>
                </header>
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#actionRequests" data-toggle="tab">Action Requests</a></li>
                    <li><a href="#completedActions" data-toggle="tab">Completed Actions</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="actionRequests">
                        <div class="main" ng-controller = "MyController">
                            <div class="row" style="margin-bottom:20px">
                                <div class="col-xs-6">
                                    <h3> Action Requests</h3>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <input placeholder="filter list" ng-model="searchText" style="margin-top:20px">
                                </div>
                            </div>
                            <table class="table table-condensed table-smaller-text table-bordered dataTable tablesaw-stack" data-mode="stack">
                                <thead>
                                    <tr>
                                        <th><span ng-click="predicate = 'DocId'; reverse=!reverse">Doc ID</span></th>
                                        <th><span ng-click="predicate = 'Type'; reverse=!reverse">Type</span></th>
                                        <th><span ng-click="predicate = 'Title'; reverse=!reverse">Title</span></th>
                                        <th><span ng-click="predicate = 'Routing'; reverse=!reverse">Routing</span></th>
                                        <th><span ng-click="predicate = 'ActionRequest'; reverse=!reverse">Action Requested</span></th>
                                        <th><span ng-click="predicate = 'Initiator'; reverse=!reverse">Initiator</span></th>
                                        <th><span ng-click="predicate = 'CurrentRouteNode'; reverse=!reverse">Current Route Node</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="item in actionList | orderBy:predicate:reverse | filter:searchText">
                                        <td class="item-featured">{{item.DocId}}</td>
                                        <td>{{item.Type}}</td>
                                        <td>{{item.Title}}</td>
                                        <td>{{item.Routing}}</td>
                                        <td>{{item.ActionRequest}}</td>
                                        <td>{{item.Initiator}}</td>
                                        <td>{{item.CurrentRouteNode}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="completedActions"> </div>
                </div>
				<div ng-repeat="definition in processDefinitions">
				  <span>{{definition.name}}</span>
				</div>
            </main>
        </div>
    </div>
</div>
<footer class="navbar navbar-default navbar-fixed-bottom footer-actions">
    <div class="container-fluid text-center">
        <button type="button" class="btn btn-primary">Submit </button>
        <button type="button" class="btn btn-default">Save </button>
        <button type="button" class="btn btn-default">Cancel </button>
    </div>
</footer>
<?php include ('includes/resources/rice-footer-scripts.php') ?>
</body>
</html>
