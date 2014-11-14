<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kuali</title>
<!-- Base Styles (Bootstrap 3.2.0 and Custom) -->

<link href="css/quickrender.css" rel="stylesheet/less" type="text/css"/>
<link href="css/icons/style.css" rel="stylesheet" type="text/css" media="all">
<link href="font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
.effect6 {
	background: #F9F9F9;
	position: relative;
	-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 60px rgba(0, 0, 0, 0.04) inset;
	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 60px rgba(0, 0, 0, 0.04) inset;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 60px rgba(0, 0, 0, 0.04) inset;
}
.effect6:before, .effect6:after {
	content: "";
	position: absolute;
	z-index: -1;
	/* -webkit-box-shadow:0 0 20px rgba(0,0,0,0.4);
    -moz-box-shadow:0 0 20px rgba(0,0,0,0.4);
    box-shadow:0 0 20px rgba(0,0,0,0.4);*/
	top: 50%;
	bottom: 0;
	left: 10px;
	right: 10px;
	-moz-border-radius: 100px / 10px;
	border-radius: 100px / 10px;
}
h1, .h1, h2, .h2, h3, .h3 {
	margin-top: 5px;
	margin-bottom: 10px;
}
</style>
</head>

<body>
<div id="wrapper" style="margin-top:40px">
    <section>
        <div class="doc-header container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 style="margin-bottom:0px">Kuali Rice Prototypes</h1>
                    <a href="mailto:thrclark@indiana.edu" target="_blank">Tom Clark</a>, UX Designer/Developer </div>
            </div>
        </div>
    </section>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="well well-sm effect6">
                    <h3>Person </h3>
                    <ul class="list-unstyled">
                        <li><a href="rice-person-search.php" target="_blank">Person Search</a> </li>
                        <li><a href="rice-person-search-results.php" target="_blank">Person Search Results</a> </li>
                        <li><a href="rice-personDocOverview.php" target="_blank">Person Document</a> </li>
                    </ul>
                </div>
                <div class="well well-sm effect6">
                    <h3>Role </h3>
                    <ul class="list-unstyled">
                        <li><a href="rice-role-search.php" target="_blank">Role Search </a></li>
                        <li><a href="rice-role-search-results.php" target="_blank">Role Search Results</a> </a></li>
                        <li><a href="rice-roleDocOverview.php" target="_blank">Role Document</a> </li>
                    </ul>
                </div>
                <div class="well well-sm effect6">
                    <h3>Permission </h3>
                    <ul class="list-unstyled">
                        <li><a href="rice-permission-search.php" target="_blank">Permission Search </a></li>
                        <li><a href="rice-permission-search-results.php" target="_blank">Permission Search Results</a> </a></li>
                        <li><a href="rice-permissionDocOverview.php" target="_blank">Permission Document</a> </li>
                    </ul>
                </div>
                <div class="well well-sm effect6">
                    <h3>Group </h3>
                    <ul class="list-unstyled">
                        <li><a href="rice-group-search.php" target="_blank">Group Search </a></li>
                        <li><a href="rice-group-search-results.php" target="_blank">Group Search Results</a> </a></li>
                        <li><a href="rice-groupDocOverview.php" target="_blank">Group Document</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="well well-sm effect6">
                    <h3>Action List</h3>
                    <ul class="list-unstyled">
                        <li><a href="rice-actionlist.php" target="_blank">Action List</a> </li>
                    </ul>
                </div>
                <div class="well well-sm effect6">
                    <h3>Doc Search</h3>
                    <ul class="list-unstyled">
                        <li><a href="rice-docsearch.php" target="_blank">Search Page</a> </li>
                        <li><a href="rice-docsearch-results.php" target="_blank">Results</a> </li>
                    </ul>
                </div><hr>
                <div class="well well-sm effect6">
                    <h3> Template Layouts</h3>
                    <ul class="list-unstyled">
                        <li><a href="example-fluid-nav.html" target="_blank">Layout 1</a> - fluid, with document navigation</li>
                        <li><a href="example-fixed-nav.html" target="_blank">Layout 2</a> - fixed, with document navigation</li>
                        <li><a href="example-fluid-nonav.html"target="_blank">Layout 3</a> - fluid, without document navigation</li>
                        <li><a href="example-fixed-nonav.html" target="_blank">Layout 4</a> - fixed, without document navigation</li>
                    </ul>
                </div>
                <div class="well well-sm effect6">
                    <h3>Angular JS Playgrounds</h3>
                    <ul class="list-unstyled">
                        <li><a href="rice-actionlist-angular.php" target="_blank">Tables</a> -  Data Loading, Sorting, and Filtering</li>
                        <li><a href="rice-personContact.php" target="_blank">Tables</a> - Add/Delete Data</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>

<!-- jQuery Version 1.11.0 --> 
<script src="js/jquery-1.11.0.js"></script> 
<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 
<!-- Clear local storage (dev mode only)--> 
<script>localStorage.clear(); </script> 
<!-- Compile Less Files JavaScript  (dev mode only) --> 
<script src="js/less.min.js"></script>
</body>
</html>
