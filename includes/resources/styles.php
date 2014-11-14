<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!-- Base Styles (Bootstrap 3.2.0 and Custom) -->
<link href="less/styles.less" rel="stylesheet/less" type="text/css"/>
<!-- Font Icons -->

<!--<link href="css/quickrender.css" rel="stylesheet" type="text/css" media="all">-->

<link href="css/icons/style.css" rel="stylesheet" type="text/css" media="all">

<link href="js/plugins/popover-x/css/bootstrap-popover-x.min.css" rel="stylesheet" type="text/css">

<link href="js/jquery-ui.min.css" rel="stylesheet" type="text/css">

<link href="js/plugins/datepicker/css/datepicker3.css" rel="stylesheet" type="text/css">





<style>

.effect6
{
	background:#F9F9F9;
  	position:relative;       
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 60px rgba(0, 0, 0, 0.04) inset;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 60px rgba(0, 0, 0, 0.04) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 60px rgba(0, 0, 0, 0.04) inset;
}
.effect6:before, .effect6:after
{
	content:"";
    position:absolute; 
    z-index:-1;
   /* -webkit-box-shadow:0 0 20px rgba(0,0,0,0.4);
    -moz-box-shadow:0 0 20px rgba(0,0,0,0.4);
    box-shadow:0 0 20px rgba(0,0,0,0.4);*/
    top:50%;
    bottom:0;
    left:10px;
    right:10px;
    -moz-border-radius:100px / 10px;
    border-radius:100px / 10px;
}


</style>



<style>

.tree {
min-height: 20px;
padding: 0px;
margin-bottom: 20px;
  
}
.tree li {
list-style-type: none;
margin: 0;
padding: 10px 5px 0 32px;
position: relative;
}
.tree li::before, .tree li::after {
    content:'';
    left:8px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #d6d6d6;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #d6d6d6;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #d6d6d6;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none
}

.tree li span>span { border:none; padding: 0px; color:#999}

.tree li.parent_li>span {
    cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:25px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
 
}
</style>







<style>


/** ProgressBar customizations **/

.progress-details .uif-step {
  color: #AAAAAA;
  float: left;
  padding: 4px 0 6px;
  text-align: center;
}

.progress-details .uif-step.active {
  color: black;
  font-weight: 700;
}

.progress-details .uif-step.complete {
  color: black;
}

.progress {
  clear: both;
  height: 6px;
  margin-bottom: 5px;
}

.progress .progress-bar {
  border-right: 2px solid #F5F5F5;
}

.progress .progress-bar:last-child {
  border: none;
}

.progress-bar-empty {
  background-image:none;
  background-color:#CCC;
  color:#999;
  text-shadow:none;
}

.uif-progressBar-vertical {
  height: 150px;
  width: 6px;
  margin-right: 5px;
  box-shadow: 1px 2px 1px 1px rgba(0, 0, 0, 0.1) inset;
  clear: none;
}

.uif-stepProgressBar-vertical .progress{
  width: 6px;
}

.uif-stepProgressBar-vertical .progress-bar, .uif-progressBar-vertical .progress-bar{
  width: 6px;
  border-right: none;
  border-bottom: 2px solid #F5F5F5;
}

.uif-stepProgressBar-vertical .progress-bar:last-child, .uif-progressBar-vertical .progress-bar:last-child{
  border: none;
}

.uif-stepProgressBar-vertical .progress {
  float: left;
}

.uif-stepProgressBar-vertical .progress-details {
  padding: none;
}

.uif-stepProgressBar-vertical .uif-step {
  position: relative;
  float: none;
  padding: none;
  text-align: left;
  margin-left: 12px;
}

.uif-stepProgressBar-vertical .uif-step > span {
  position: absolute;
  top: 50%;
  margin-top: -.8em;
}</style>



<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
