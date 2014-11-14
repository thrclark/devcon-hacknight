<div class="container">
    <nav id="doc-navigation" style="position:relative"> 
        
        <!--side nav-->
        
        <div class="navbar-default sidebar" role="navigation"> <a href="#" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-doc"> <span>Navigate <span class="caret"></span> </span> </a>
            <div class="sidebar-nav navbar-collapse" id="nav-doc">
                <ul class="nav" id="side-menu">
                    <li> <a href="rice-personDocOverview.php" <?php if ($page == 'personDocOverview') { echo 'class="active"'; } ?>><span class="icon-file-alt"></span> Doc Overview</a> </li>
                    <li> <a href="rice-personPersonOverview.php" <?php if ($page == 'PersonOverview') { echo 'class="active"'; } ?>><span class="icon-user"></span> Person Overview</a> </li>
                    <li> <a href="rice-personAffiliations.php" <?php if ($page == 'personAffiliations') { echo 'class="active"'; } ?>><span class="icon-puzzle"></span> Affiliations</a> </li>
                    <li> <a href="rice-personContact.php" <?php if ($page == 'personContact') { echo 'class="active"'; } ?>><span class="icon-list-alt"></span> Contact Info &amp; Privacy</a> </li>
                    <li> <a href="rice-personMemberships.php" <?php if ($page == 'personMemberships') { echo 'class="active"'; } ?>><span class="icon-group"></span> Memberships</a> </li>
                    <li> <a href="rice-personReview.php" <?php if ($page == 'personReview') { echo 'class="active"'; } ?>><span class="icon-upload"></span> Review Changes</a> </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
