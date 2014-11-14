<div class="container">
    <nav id="doc-navigation" style="position:relative"> 
        
        <!--side nav-->
        
        <div class="navbar-default sidebar" role="navigation"> <a href="#" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-doc"> <span>Navigate <span class="caret"></span> </span> </a>
            <div class="sidebar-nav navbar-collapse" id="nav-doc">
                <ul class="nav" id="side-menu">
                    <li> <a href="rice-roleDocOverview.php" <?php if ($page == 'roleDocOverview') { echo 'class="active"'; } ?>><span class="icon-file-alt"></span> Doc Overview</a> </li>
                    <li> <a href="rice-roleRoleOverview.php" <?php if ($page == 'roleRoleOverview') { echo 'class="active"'; } ?>><span class="icon-user"></span> Role Overview</a> </li>
                    <li> <a href="rice-rolePermissions.php" <?php if ($page == 'rolePermissions') { echo 'class="active"'; } ?>><span class="icon-list-alt"></span> Permissions</a> </li>
                    <li> <a href="rice-roleResponsibilities.php" <?php if ($page == 'roleResponsibilities') { echo 'class="active"'; } ?>><span class="icon-puzzle"></span> Responsibilities</a> </li>
                    <li> <a href="rice-roleAssignees.php" <?php if ($page == 'roleAssignees') { echo 'class="active"'; } ?>><span class="icon-group"></span> Assignees</a> </li>
                    <li> <a href="rice-roleReview.php" <?php if ($page == 'roleReview') { echo 'class="active"'; } ?>><span class="icon-upload"></span> Review Changes</a> </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
